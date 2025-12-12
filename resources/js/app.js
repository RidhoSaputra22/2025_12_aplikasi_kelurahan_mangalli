import "./bootstrap";

console.log("ad");
GLightbox({
    selector: ".glightbox",
    touchNavigation: true,
    loop: true,
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
const populationByAge = new Chart(ctx1, {
    type: "bar",
    data: {
        labels: [
            "Usia 0 - 4",
            "Usia 5-9",
            "Usia 10-14",
            "Usia 15-19",
            "Usia 20-24",
            "Usia 25-29",
            "Usia 30-34",
            "Usia 35-39",
            "Usia 40-44",
            "Usia 45-49",
            "Usia 50-54",
            "Usia 55-59",
            "Usia 60-69",
            "Usia 70-74",
            "Usia 75+",
        ],
        datasets: [
            {
                data: [
                    154, 209, 227, 248, 251, 215, 171, 185, 195, 167, 140, 99,
                    63, 22, 30,
                ],
                backgroundColor: "#015CB9",
                valueFormated: [
                    "154 jiwa",
                    "209 jiwa",
                    "227 jiwa",
                    "248 jiwa",
                    "251 jiwa",
                    "215 jiwa",
                    "171 jiwa",
                    "185 jiwa",
                    "195 jiwa",
                    "167 jiwa",
                    "140 jiwa",
                    "99 jiwa",
                    "63 jiwa",
                    "22 jiwa",
                    "30 jiwa",
                ],
                percentase: [
                    "154 jiwa",
                    "209 jiwa",
                    "227 jiwa",
                    "248 jiwa",
                    "251 jiwa",
                    "215 jiwa",
                    "171 jiwa",
                    "185 jiwa",
                    "195 jiwa",
                    "167 jiwa",
                    "140 jiwa",
                    "99 jiwa",
                    "63 jiwa",
                    "22 jiwa",
                    "30 jiwa",
                ],
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
                grid: {
                    // borderWidth: 2,
                    // borderColor: 'rgb(48, 163, 73, .8)',
                    // color: '#015CB9'
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
            tooltip: {
                displayColors: false,
                callbacks: {
                    label: function (tooltipItem, data) {
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

const ctx7 = document.getElementById("infrastructure-type");
const infrastructureType = new Chart(ctx7, {
    type: "bar",
    data: {
        labels: [
            "TK",
            "SD",
            "SMP",
            "SMA",
            "Puskesmas",
            "Rumah Bersalin",
            "Poliklinik",
            "Masjid dan Surau",
        ],
        datasets: [
            {
                data: [37, 39, 7, 3, 2, 3, 2, 9],
                labelFormated: [
                    "TK",
                    "SD",
                    "SMP",
                    "SMA",
                    "Puskesmas",
                    "Rumah Bersalin",
                    "Poliklinik",
                    "Masjid dan Surau",
                ],
                valueFormated: [
                    "37 unit",
                    "39 unit",
                    "7 unit",
                    "3 unit",
                    "2 unit",
                    "3 unit",
                    "2 unit",
                    "9 unit",
                ],
                percentase: [
                    "37 unit",
                    "39 unit",
                    "7 unit",
                    "3 unit",
                    "2 unit",
                    "3 unit",
                    "2 unit",
                    "9 unit",
                ],
                backgroundColor: "#015CB9",
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
                    "Data Sarana dan Prasarana di Kecamatan Pallangga ",
                    "(Kelurahan Mangalli adalah Ibukota Kecamatan)",
                    "Badan Pusat Statistik (BPS) 2011-2015",
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
