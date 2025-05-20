const menuBtn = document.getElementById("menu-btn");
const navLinks = document.getElementById("nav-links");
const menuBtnIcon = menuBtn.querySelector("i");

menuBtn.addEventListener("click", (e) => {
  navLinks.classList.toggle("open");

  const isOpen = navLinks.classList.contains("open");
  menuBtnIcon.setAttribute("class", isOpen ? "ri-close-line" : "ri-menu-line");
});

navLinks.addEventListener("click", (e) => {
  navLinks.classList.remove("open");
  menuBtnIcon.setAttribute("class", "ri-menu-line");
});

const scrollRevealOption = {
  distance: "50px",
  origin: "bottom",
  duration: 1000,
};

ScrollReveal().reveal(".header__content h1", {
  ...scrollRevealOption,
});
ScrollReveal().reveal(".header__content .section__description", {
  ...scrollRevealOption,
  delay: 500,
});
ScrollReveal().reveal(".header__btns", {
  ...scrollRevealOption,
  delay: 1000,
});







// const swiper = new Swiper(".swiper", {
//   slidesPerView: 3,
//   spaceBetween: 20,
//   loop: true,
// });


const tabImgs = {
  "flights": 'Plane.webp',
  "hotels": 'Hotel.webp',
  "cruises": 'CruiseShip.webp',
  "packages": 'Car.webp',
};

Object.values(tabImgs).forEach(src => {
  const img = new Image();
  img.src = `./assets/${src}`;
});


const heroBg = {
  "flights": 'https://cdn.pixabay.com/photo/2015/10/20/20/14/tatry-998418_1280.jpg',
  "hotels": 'https://plus.unsplash.com/premium_photo-1661964298224-7747aa0ac10c?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
  "cruises": 'https://images.unsplash.com/photo-1604474361016-73d1bd3021fa?q=80&w=1374&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
  "packages": 'https://cdn.pixabay.com/photo/2018/09/02/18/18/road-3649442_1280.jpg',
};


document.addEventListener('DOMContentLoaded', function () {
  const tabButtons = document.querySelectorAll('.tab-btn');

  tabButtons.forEach(button => {
    button.addEventListener('click', function () {
      // Remove active class from all buttons
      tabButtons.forEach(btn => {
        btn.classList.remove('active');
      });

      // Add active class to clicked button
      this.classList.add('active');

      // Hide all tab panes
      document.querySelectorAll('.tab-pane').forEach(pane => {
        pane.classList.remove('active');
      });

      // Show the selected tab pane
      const tabId = this.getAttribute('data-tab');
      const currentTab = document.getElementById(tabId)
      const heroImg = document.getElementById('heroImg');
      const heroSection = document.querySelector('.hero-section');
      currentTab.classList.add('active');
      heroImg.src = `./assets/${tabImgs[tabId]}`;
      heroImg.alt = `${tabId.charAt(0).toUpperCase() + tabId.slice(1)} Image`;
      heroImg.classList.remove('animate-hero-img');
      void heroImg.offsetWidth; // trigger reflow
      heroImg.classList.add('animate-hero-img');
      heroSection.style.backgroundImage = `url(${heroBg[tabId]})`;
    });
  });
});












// document.addEventListener('DOMContentLoaded', function() {
//   // Tab switching functionality
//   const tabButtons = document.querySelectorAll('.tab-btn');
//   const tabPanes = document.querySelectorAll('.tab-pane');

//   tabButtons.forEach(button => {
//       button.addEventListener('click', function() {
//           // Remove active class from all buttons and panes
//           tabButtons.forEach(btn => btn.classList.remove('active'));
//           tabPanes.forEach(pane => pane.classList.remove('active'));

//           // Add active class to clicked button
//           this.classList.add('active');

//           // Show corresponding pane
//           const tabId = this.getAttribute('data-tab');
//           document.getElementById(tabId).classList.add('active');
//       });
//   });

//   // Initialize date inputs with current date
//   const today = new Date();
//   const tomorrow = new Date();
//   tomorrow.setDate(today.getDate() + 1);

//   const formatDate = (date) => {
//       const year = date.getFullYear();
//       const month = String(date.getMonth() + 1).padStart(2, '0');
//       const day = String(date.getDate()).padStart(2, '0');
//       return `${year}-${month}-${day}`;
//   };

//   Set default dates for all forms
//   document.getElementById('flight-departure').value = formatDate(today);
//   document.getElementById('flight-return').value = formatDate(tomorrow);
//   document.getElementById('hotel-checkin').value = formatDate(today);
//   document.getElementById('hotel-checkout').value = formatDate(tomorrow);
//   document.getElementById('cruise-departure').value = formatDate(today);
//   document.getElementById('package-departure').value = formatDate(today);

//   Form submission handlers
//   document.querySelectorAll('.booking-form').forEach(form => {
//       form.addEventListener('submit', function(e) {
//           e.preventDefault();
//           const activeTab = document.querySelector('.tab-btn.active').getAttribute('data-tab');
//           alert(`Searching for ${activeTab}... (This is a demo)`);
//       });
//   });
// });










// Scoped JavaScript for travel deals component
document.addEventListener('DOMContentLoaded', function () {
  const travelDeals = document.querySelector('.travel-deals');

  // Tab functionality
  const tabs = travelDeals.querySelectorAll('.tab-btn');
  const sliders = travelDeals.querySelectorAll('.deals-slider');

  tabs.forEach(tab => {
    tab.addEventListener('click', () => {
      tabs.forEach(t => t.classList.remove('active'));
      sliders.forEach(s => s.style.display = 'none');
      tab.classList.add('active');
      const tabId = tab.dataset.tab;
      travelDeals.querySelector(`#${tabId}`).style.display = 'flex';
    });
  });

  // Slider functionality
  const sliderContainers = travelDeals.querySelectorAll('.slider-container');

  sliderContainers.forEach(container => {
    const slider = container.querySelector('.deals-slider');
    const prevBtn = container.querySelector('.prev-btn');
    const nextBtn = container.querySelector('.next-btn');
    const cardWidth = 320;
    const gap = 30;
    const scrollAmount = cardWidth + gap;

    prevBtn.addEventListener('click', () => {
      slider.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
    });

    nextBtn.addEventListener('click', () => {
      slider.scrollBy({ left: scrollAmount, behavior: 'smooth' });
    });
  });

  // Initialize first tab
  travelDeals.querySelector('#top-deals').style.display = 'flex';
});









// //contact form validation
// document.getElementById('contactForm')?.addEventListener('submit', function (e) {
//   const form = e.target;
//   const email = form.email.value;
//   const phone = form.phone.value;

//   const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
//   if (!emailRegex.test(email)) {
//     alert("Please enter a valid email.");
//     e.preventDefault();
//     return;
//   }

//   if (!/^\d{7,15}$/.test(phone)) {
//     alert("Please enter a valid phone number.");
//     e.preventDefault();
//   }
// });






// section 2



// Isolated JavaScript with specific function names
const tdDeals = {
  top: [
    {
      title: "Kefalonia Private Pool Stay",
      place: "Kefalonia, Greece",
      img: "/assets/1.png",
      price: 661,
      duration: "7 Nights",
      includes: "Return Flights"
    },
    {
      title: "Deluxe Beachfront",
      place: "Majorca, Spain",
      img: "/assets/2.png",
      price: 529,
      duration: "5 Nights",
      includes: "Return Flights"
    },
    {
      title: "Hydra Beach Resort",
      place: "Peloponnese, Greece",
      img: "/assets/3.png",
      price: 661,
      duration: "7 Nights",
      includes: "Return Flights"
    },
    {
      title: "Luxury Dubai Experience",
      place: "Dubai, UAE",
      img: "/assets/4.png",
      price: 899,
      duration: "5 Nights",
      includes: "Return Flights"
    }
  ],
  inclusive: [
    {
      title: "All Inclusive Maldives",
      place: "Maldives",
      img: "/assets/5.png",
      price: 1299,
      duration: "7 Nights",
      includes: "All Meals & Drinks"
    },
    {
      title: "All Inclusive Mexico Escape",
      place: "Cancun, Mexico",
      img: "/assets/6.png",
      price: 999,
      duration: "10 Nights",
      includes: "All Meals & Drinks"
    },
    {
      title: "Caribbean All Inclusive",
      place: "Jamaica",
      img: "/assets/7.png",
      price: 1199,
      duration: "7 Nights",
      includes: "All Meals & Drinks"
    }
  ],
  summer: [
    {
      title: "Greek Island Summer",
      place: "Santorini, Greece",
      img: "/assets/8.png",
      price: 799,
      duration: "7 Nights",
      includes: "Return Flights"
    },
    {
      title: "Spanish Coastline Tour",
      place: "Barcelona, Spain",
      img: "/assets/9.png",
      price: 699,
      duration: "5 Nights",
      includes: "Return Flights"
    },
    {
      title: "Italian Summer Vacation",
      place: "Amalfi Coast, Italy",
      img: "/assets/10.png",
      price: 899,
      duration: "7 Nights",
      includes: "Return Flights"
    }
  ],
  cruise: [
    {
      title: "Nile River Cruise",
      place: "Cairo to Luxor",
      img: "/assets/11.png",
      price: 899,
      duration: "7 Nights",
      includes: "Full Board"
    },
    {
      title: "Mediterranean Cruise",
      place: "Barcelona to Rome",
      img: "/assets/12.png",
      price: 1099,
      duration: "10 Nights",
      includes: "Full Board"
    }
  ]
};

let tdCurrentTab = 'top';
let tdCurrentIndex = 0;
let tdTouchStartX = 0;
let tdTouchEndX = 0;
let tdCardWidth = 300;
const tdSlider = document.getElementById('tdSlider');

function tdRenderCards(tab) {
  tdSlider.innerHTML = '';
  tdDeals[tab].forEach(deal => {
    const card = document.createElement('div');
    card.className = 'td-card';
    card.innerHTML = `
      <img src="${deal.img}" alt="${deal.title}" loading="lazy">
      <div class="td-card-body">
        <h4 class="td-card-title">${deal.title}</h4>
        <p class="td-card-text">${deal.place}</p>
        <p class="td-card-text">${deal.duration} | ${deal.includes}</p>
      </div>
      <div class="td-card-footer">
        <span class="td-price">$${deal.price}</span><a href="tel:+1 (888)711 2909" class="cbtn">
        <button class="td-view-btn">Enquire now </button></a>
      </div>
    `;
    tdSlider.appendChild(card);
  });

  // Update card width after rendering
  if (tdSlider.firstChild) {
    const card = tdSlider.querySelector('.td-card');
    const style = window.getComputedStyle(card);
    tdCardWidth = card.offsetWidth +
      parseInt(style.marginLeft) +
      parseInt(style.marginRight) +
      parseInt(style.paddingLeft) +
      parseInt(style.paddingRight);
  }

  // Reset index when changing tabs
  tdCurrentIndex = 0;
  tdUpdateSliderPosition();
}

function tdUpdateSliderPosition() {
  tdSlider.style.transform = `translateX(-${tdCurrentIndex * tdCardWidth}px)`;
}

function tdSlide(dir) {
  const maxIndex = Math.max(tdDeals[tdCurrentTab].length - tdGetVisibleCards(), 0);
  tdCurrentIndex += dir;

  if (tdCurrentIndex < 0) tdCurrentIndex = 0;
  if (tdCurrentIndex > maxIndex) tdCurrentIndex = maxIndex;

  tdUpdateSliderPosition();
}

function tdGetVisibleCards() {
  if (!tdSlider.firstChild) return 1;
  const containerWidth = tdSlider.parentElement.offsetWidth;
  return Math.floor(containerWidth / tdCardWidth);
}

// Handle touch events for mobile swipe
function tdHandleTouchStart(e) {
  tdTouchStartX = e.changedTouches[0].screenX;
}

function tdHandleTouchEnd(e) {
  tdTouchEndX = e.changedTouches[0].screenX;
  tdHandleSwipe();
}

function tdHandleSwipe() {
  const threshold = 50;
  if (tdTouchStartX - tdTouchEndX > threshold) {
    tdSlide(1);
  } else if (tdTouchEndX - tdTouchStartX > threshold) {
    tdSlide(-1);
  }
}

// Initialize event listeners
function tdInit() {
  document.querySelectorAll('.td-tab').forEach(tab => {
    tab.addEventListener('click', () => {
      document.querySelector('.td-tab.active').classList.remove('active');
      tab.classList.add('active');
      tdCurrentTab = tab.dataset.tab;
      tdRenderCards(tdCurrentTab);
    });
  });

  // Touch events for mobile
  tdSlider.addEventListener('touchstart', tdHandleTouchStart, { passive: true });
  tdSlider.addEventListener('touchend', tdHandleTouchEnd, { passive: true });

  // Handle window resize
  window.addEventListener('resize', () => {
    if (tdSlider.firstChild) {
      const card = tdSlider.querySelector('.td-card');
      const style = window.getComputedStyle(card);
      tdCardWidth = card.offsetWidth +
        parseInt(style.marginLeft) +
        parseInt(style.marginRight) +
        parseInt(style.paddingLeft) +
        parseInt(style.paddingRight);
      tdUpdateSliderPosition();
    }
  });
}

// Initialize on load
window.addEventListener('DOMContentLoaded', () => {
  tdRenderCards(tdCurrentTab);
  tdInit();
});



// const swiper = new Swiper(".swiper", {
//   loop: true,
// });




ScrollReveal().reveal(".destination__card", {
  ...scrollRevealOption,
  interval: 500,
});









// ...........................radio button in thr herosection form....................

document.addEventListener('DOMContentLoaded', function () {
  // Handle trip type radio buttons
  document.querySelectorAll('input[name="trip-type"]').forEach(radio => {
    radio.addEventListener('change', function () {
      const returnDateGroup = document.querySelector('.return-date');
      if (this.value === 'oneway') {
        returnDateGroup.style.display = 'none';
      } else {
        returnDateGroup.style.display = 'block';
      }
    });
  });
});







// about

// ScrollReveal().reveal(".choose__image img", {
//   ...scrollRevealOption,
//   origin: "left",
// });
// ScrollReveal().reveal(".choose__content .section__subheader", {
//   ...scrollRevealOption,
//   delay: 500,
// });
// ScrollReveal().reveal(".choose__content .section__header", {
//   ...scrollRevealOption,
//   delay: 1000,
// });
// ScrollReveal().reveal(".choose__list li", {
//   ...scrollRevealOption,
//   delay: 1500,
//   interval: 500,
// });



