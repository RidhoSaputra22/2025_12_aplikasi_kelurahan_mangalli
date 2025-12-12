// Initialize Swiper
document.addEventListener("DOMContentLoaded", function () {
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
          154, 209, 227, 248, 251, 215, 171, 185, 195, 167, 140, 99, 63, 22, 30,
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
            return tooltipItem.dataset.valueFormated[tooltipItem.dataIndex];
          },
        },
      },
      datalabels: {
        formatter: function (value, context) {
          return context.chart.data.datasets[0].percentase[context.dataIndex];
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
// Orgchart
var chart = new OrgChart(document.getElementById("tree"), {
  template: "olivia",
  enableDragDrop: false,
  //   layoutGridColumns: 10,

  // Aktifkan Zoom
  enableZoom: true,
  scaleInitial: OrgChart.match.boundary, // Auto-scale agar chart tampil penuh
  scaleMax: 1, // Maksimal memperbesar 200%
  scaleMin: 0.5, // Minimal memperkecil 50%
  mouseScrool: OrgChart.action.zoom, // Scroll mouse = zoom, bukan geser

  enableSearch: false,

  editForm: {
    readOnly: true,
    generateElementsFromFields: false,
    elements: [
      { type: "textbox", label: "Nama", binding: "name" },
      { type: "textbox", label: "Jabatan", binding: "title" },
    ],
    buttons: {
      pdf: null,
      share: null,
    },
  },

  toolbar: {
    // layout: true,
    zoom: true,
    // fit: true,
    // expandAll: false,
    fullScreen: true,
  },

  nodeBinding: {
    field_0: "name",
    field_1: "title",
    img_0: "img",
  },

  tags: {
    subLevels0: {
      subLevels: 0,
    },
    subLevels1: {
      subLevels: 1,
    },
    subLevels2: {
      subLevels: 2,
    },
    subLevels3: {
      subLevels: 3,
    },
  },

  dottedLines: [{ from: 10, to: 1 }],

  nodes: [
    // LURAH
    {
      id: 1,
      name: "Farizah Latief, HS, S.STP",
      title: "Lurah Kelurahan Mangalli",
      img: "assets/hr_jalling.jpeg",
    },

    // SEKRETARIS LURAH
    {
      id: 2,
      pid: 1,
      name: "Idham Yakub, SE, MM",
      title: "Sekretaris Lurah",
      img: "assets/m_irsyad.jpeg",
    },

    // TIGA ELEMAN PENDAMPING (dotted line ke Lurah)
    {
      id: 10,
      pid: 1,
      name: "BHABIN KAMTIBNAS BABINSA PLKB",
      title: "",
      img: "assets/default-user.jpg",
      tags: ["subLevels2"],
    },

    // KASI PEMERINTAHAN
    {
      id: 3,
      pid: 1,
      name: "Muhammad Ramli, SE",
      title: "Kasi Pemerintahan",
      img: "assets/muh_ramli.jpeg",
      tags: ["subLevels2"],
    },

    // KASI PEMBERDAYAAN & PELAYANAN MASYARAKAT
    {
      id: 4,
      pid: 1,
      name: "A. Kurniasih Kaharuudin, S.AB",
      title: "Kasi Pemberdayaan & Pelayanan Masyarakat",
      img: "assets/p.jpeg",
      tags: ["subLevels2"],
    },

    // KASI TRANTIB
    {
      id: 5,
      pid: 1,
      name: "Bahtiar, S.Sos",
      title: "Kasi Trantib",
      img: "assets/b_rala.jpeg",
      tags: ["subLevels2"],
    },

    // KEPALA LINGKUNGAN (Semua terhubung dari Kasi Pemerintahan)
    {
      id: 6,
      pid: 1,
      name: "Syahruddin Mala",
      title: "Kepala Lingkungan Allatappampang",
      img: "assets/syahruddin_miala.jpeg",
      tags: ["subLevels3"],
    },
    {
      id: 7,
      pid: 1,
      name: "M. Irsyad Wahyuddin Hamid, S.Sos",
      title: "Kepala Lingkungan Mangalli",
      img: "assets/m_irsyad.jpeg",
      tags: ["subLevels3"],
    },
    {
      id: 8,
      pid: 1,
      name: "Hardianto R",
      title: "Kepala Lingkungan Kalegowa",
      img: "assets/2.jpeg",
      tags: ["subLevels3"],
    },

    // BENDAHARA PENGELUARAN PEMBANTU (langsung dari Sekretaris)
    {
      id: 9,
      pid: 2,
      name: "Sri Wahyuni Kusuma",
      title: "Bendahara Pengeluaran Pembantu",
      img: "assets/yuyun.jpeg",
    },
  ],
});
