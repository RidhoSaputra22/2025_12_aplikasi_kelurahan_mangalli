import "./bootstrap";

console.log("ad");
const glightbox = GLightbox({
    selector: ".glightbox",
    touchNavigation: true,
    autoplayVideos: true,
    preload: true,
    plyr: {
        css: "https://cdn.plyr.io/3.5.6/plyr.css", // Default not required to include
        js: "https://cdn.plyr.io/3.5.6/plyr.js", // Default not required to include
        config: {
            ratio: "16:9", // or '4:3'
            muted: false,
            hideControls: true,
            youtube: {
                noCookie: true,
                rel: 0,
                showinfo: 0,
                iv_load_policy: 3,
            },
            vimeo: {
                byline: false,
                portrait: false,
                title: false,
                speed: true,
                transparent: false,
            },
        },
    },
});

const swiper = new Swiper(".swiper-banner", {
    loop: true,
    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".button-next",
        prevEl: ".button-prev",
    },
    effect: "fade",
    fadeEffect: {
        crossFade: true,
    },
});
const swiperAparat = new Swiper(".swiper-aparat", {
    loop: true,
    speed: 700,
    centeredSlides: true,
    spaceBetween: 80,

    autoplay: {
        delay: 700,
        disableOnInteraction: false,
    },

    grabCursor: true,

    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },

    // BREAKPOINTS
    breakpoints: {
        0: {
            slidesPerView: 2, // MOBILE
            spaceBetween: 20,
        },
        768: {
            slidesPerView: 3, // TABLET & DESKTOP
            spaceBetween: 40,
        },
        1024: {
            slidesPerView: 3,
            spaceBetween: 80,
        },
    },
});

// Smooth scrolling for anchor links
document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
    anchor.addEventListener("click", function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute("href"));
        if (target) {
            target.scrollIntoView({
                behavior: "smooth",
            });
        }
    });
});

const ctx1 = document.getElementById("population-by-age");
const loadingEl = document.getElementById("age-loading");
const displayError = document.getElementById("display-error");

async function loadPopulationByAge() {
    try {
        loadingEl.style.display = "flex";

        const response = await fetch(
            "http://127.0.0.1:8000/api/penduduk/pesebaran/usia"
        );

        if (!response.ok) {
            throw new Error("Failed to fetch age distribution data");
        }

        const result = await response.json();

        const dataset = result.datasets[0];

        new Chart(ctx1, {
            type: "bar",
            data: {
                labels: result.labels,
                datasets: [
                    {
                        data: dataset.data,
                        backgroundColor: "#015CB9",
                        valueFormated: dataset.valueFormated,
                        percentase: dataset.percentase,
                    },
                ],
            },
            options: {
                animation: {
                    delay: 1000,
                },
                scales: {
                    y: {
                        ticks: {
                            display: false,
                        },
                    },
                    x: {
                        grid: {},
                    },
                },
                layout: {
                    padding: {
                        top: 40,
                        bottom: 10,
                        right: 10,
                        left: 10,
                    },
                },
                plugins: {
                    legend: {
                        display: false,
                    },
                    tooltip: {
                        displayColors: false,
                        callbacks: {
                            label: function (tooltipItem) {
                                return tooltipItem.dataset.valueFormated[
                                    tooltipItem.dataIndex
                                ];
                            },
                        },
                    },
                    datalabels: {
                        formatter: function (value, context) {
                            return context.chart.data.datasets[0].percentase[
                                context.dataIndex
                            ];
                        },
                        align: "end",
                        anchor: "end",
                        color: "black",
                        textAlign: "center",
                        font: {
                            size: 12,
                            weight: "bold",
                        },
                    },
                },
            },
        });
    } catch (error) {
        console.error(error);
        displayError.style.display = "flex";
    } finally {
        loadingEl.style.display = "none";
    }
}

loadPopulationByAge();

const ctx7 = document.getElementById("infrastructure-type");
const loadingE7 = document.getElementById("infrastructure-loading");
const displayError7 = document.getElementById("infrastructure-error");

async function loadInfrastructureChart() {
    try {
        loadingE7.style.display = "flex";

        const response = await fetch(
            "http://127.0.0.1:8000/api/desa/sarana-prasarana/"
        );

        if (!response.ok) {
            throw new Error("Failed to fetch infrastructure data");
        }

        const result = await response.json();
        const dataset = result.datasets[0];

        new Chart(ctx7, {
            type: "bar",
            data: {
                labels: result.labels,
                datasets: [
                    {
                        data: dataset.data,
                        backgroundColor: dataset.backgroundColor,
                        valueFormated: dataset.valueFormated,
                        percentase: dataset.percentase,
                    },
                ],
            },
            options: {
                animation: {
                    delay: 1000,
                },
                scales: {
                    y: {
                        ticks: {
                            display: true,
                        },
                    },
                    x: {
                        ticks: {
                            display: true,
                            minRotation: 0,
                            maxRotation: 0,
                            autoSkip: false,
                            padding: 6,
                        },
                    },
                },
                layout: {
                    padding: {
                        top: 40,
                        bottom: 10,
                        right: 10,
                        left: 10,
                    },
                },
                plugins: {
                    legend: {
                        display: false,
                    },
                    title: {
                        display: true,
                        text: [
                            "Data Sarana dan Prasarana di Kecamatan Pallangga",
                            "(Kelurahan Mangalli adalah Ibukota Kecamatan)",
                            "Badan Pusat Statistik (BPS) 2011–2015",
                        ],
                        font: {
                            size: 24,
                            weight: "bold",
                        },
                        padding: {
                            top: 10,
                            bottom: 25,
                        },
                    },
                    tooltip: {
                        displayColors: false,
                        callbacks: {
                            label: function (tooltipItem) {
                                return tooltipItem.dataset.valueFormated[
                                    tooltipItem.dataIndex
                                ];
                            },
                        },
                    },
                    datalabels: {
                        formatter: function (value, context) {
                            return context.chart.data.labels[context.dataIndex];
                        },
                        align: "end",
                        anchor: "end",
                        color: "black",
                        textAlign: "center",
                        offset: -4,
                        font: {
                            size: 11,
                            weight: "bold",
                        },
                    },
                },
            },
        });
    } catch (error) {
        console.error(error);
        displayError7.style.display = "flex";
    } finally {
        loadingE7.style.display = "none";
    }
}

// panggil saat halaman siap
loadInfrastructureChart();
