<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.6.0/fonts/remixicon.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <link rel="stylesheet" href="styles.css" />
  <link rel="icon" type="image/png" href="/assets/favicon.png">
  <title>Booktrip4me</title>
</head>

<body>
  <?php include 'partials/navbar.php'; ?>

  <section class="hero-section">
    <div class="hero-content">
      <div class="booking-tabs">
        <div class="tabs-header">
          <button class="tab-btn active" data-tab="flights">
            <i class="fas fa-plane"></i>
            Flights
          </button>
          <button class="tab-btn" data-tab="hotels">
            <i class="fas fa-hotel"></i>
            Hotels
          </button>
          <button class="tab-btn" data-tab="cruises">
            <i class="fas fa-ship"></i>
            Cruises
          </button>
          <button class="tab-btn" data-tab="packages">
            <i class="fas fa-car"></i>
            car
          </button>
        </div>
        <div class="tabs-content">
          <!-- Flights Form -->
          <div class="tab-pane active" id="flights">
            <!--<form class="booking-form form-row">-->
            <form id="flightBookingForm" class="booking-form form-row" action="send_contactform_query.php"
              method="POST">
              <div class="radio-group">
                <label class="radio-label">
                  <!--<input type="radio" name="trip-type" value="roundtrip" checked> -->
                  <input type="radio" name="trip-type" value="roundtrip" checked>
                  Round Trip
                </label>
                <label class="radio-label">
                  <!--<input type="radio" name="trip-type" value="oneway"> -->
                  <input type="radio" name="trip-type" value="oneway">
                  One Way
                </label>
              </div>
              <div class="row-inside-form">


                <div class="form-group" style="flex:1">
                  <!-- <label>From</label> -->
                  <input type="text" class="form-control" name="location" id="location" autocomplete="off"
                    placeholder="From" required>
                  <div id="location-suggestions" class="suggestions"></div>
                </div>
                <div class="form-group " style="flex:1">
                  <!-- <label>To</label> -->
                  <input type="text" class="form-control" name="start" id="start" autocomplete="off" placeholder="To"
                    required>
                  <div id="start-suggestions" class="suggestions"></div>
                </div>
              </div>
              <div class="row-inside-form">

                <div class="form-group" style="flex:1">
                  <!-- <label>Departure</label> -->
                  <input class="form-control" placeholder="Departure on" type="text"
                    onfocus="(this.type='date', this.showPicker())" onclick="(this.type='date', this.showPicker())"
                    inputmode="none" onblur="(this.type='text')">
                </div>
                <div class="form-group return-date" style="flex:1">
                  <!-- <label class="mm">Return</label> -->
                  <input class="form-control" placeholder="Returning on" type="text"
                    onfocus="(this.type='date', this.showPicker())" onclick="(this.type='date', this.showPicker())"
                    inputmode="none" onblur="(this.type='text')">
                </div>
                <div class="form-group" style="flex:1">
                  <!-- <label>Travellers</label> -->
                  <input type="text" class="form-control" placeholder="2 Travellers, 1 Room">
                </div>
              </div>
              <div style="display: flex; justify-content: flex-end;">
                <button type="button" class="search-btn">SEARCH</button>
              </div>
            </form>
          </div>
          <!-- Hotels Form -->
          <div class="tab-pane" id="hotels">
            <!--<form class="booking-form form-row">-->
            <form id="hotelBookingForm" class="booking-form form-row" action="send_contactform_query.php" method="POST">
              <div class="form-group">
                <!-- <label>Destination</label> -->
                <input type="text" class="form-control" name="start" id="hotel-destination" autocomplete="off"
                  placeholder="Destination" required>
                <div id="hotel-suggestions" class="suggestions"></div>
              </div>

              <div class="row-inside-form">
                <div class="form-group" style="flex:1">
                  <!-- <label>Check-in</label> -->
                  <input placeholder="Check In" type="text" onfocus="(this.type='date', this.showPicker())"
                    onblur="(this.type='text')" inputmode="none" class="form-control">
                </div>
                <div class="form-group" style="flex:1">
                  <!-- <label>Check-out</label> -->
                  <input placeholder="Check Out" type="text" onfocus="(this.type='date', this.showPicker())"
                    onblur="(this.type='text')" inputmode="none" class="form-control">
                </div>
              </div>
              <div class="row-inside-form">

                <div class="form-group" style="flex:1">
                  <!-- <label>Rooms</label> -->
                  <select class="form-control">
                    <option>1 Room</option>
                    <option>2 Rooms</option>
                    <option>3 Rooms</option>
                    <option>4 Rooms</option>
                  </select>
                </div>
                <div class="form-group" style="flex:1">
                  <!-- <label>Guests</label> -->
                  <select class="form-control">
                    <option>1 Guest</option>
                    <option>2 Guests</option>
                    <option>3 Guests</option>
                    <option>4 Guests</option>
                    <option>Family</option>
                  </select>
                </div>
              </div>
              <div style="display: flex; justify-content: flex-end;">
                <button type="button" class="search-btn">SEARCH</button>
              </div>
            </form>
          </div>
          <!-- Cruises Form -->
          <div class="tab-pane" id="cruises">
            <!--<form class="booking-form form-row">-->
            <form id="cruiseBookingForm" class="booking-form form-row" action="send_contactform_query.php"
              method="POST">
              <div class="form-group">
                <!-- <label>Destination</label> -->
                <input type="text" class="form-control" name="start" id="cruises-destination" autocomplete="off"
                  placeholder="Destination" required>
                <div id="cruises-suggestions" class="suggestions"></div>


              </div>
              <div class="row-inside-form">
                <div class="form-group" style="flex:1;">
                  <!-- <label>Departure</label> -->
                  <input placeholder="Departure on" type="text" onfocus="(this.type='date', this.showPicker())"
                    onblur="(this.type='text')" inputmode="none" class="form-control">
                </div>
                <div class="form-group" style="flex:1;">
                  <!-- <label>Return Date</label> -->
                  <input placeholder="Returning on" type="text" onfocus="(this.type='date', this.showPicker())"
                    onblur="(this.type='text')" inputmode="none" class="form-control">
                </div>
              </div>
              <div class="row-inside-form">
                <div class="form-group" style="flex:1;">
                  <!-- <label>Cruise</label> -->
                  <select class="form-control">
                    <option>Carnival</option>
                    <option>Royal Caribbean</option>
                    <option>Norwegian</option>
                  </select>
                </div>
                <div class="form-group" style="flex:1;">
                  <!-- <label>Guests</label> -->
                  <select class="form-control">
                    <option>1 Guest</option>
                    <option>2 Guests</option>
                    <option>3 Guests</option>
                    <option>4 Guests</option>
                    <option>Family</option>
                  </select>
                </div>
              </div>
              <div style="display: flex; justify-content: flex-end;">
                <button type="button" class="search-btn">SEARCH</button>
              </div>
            </form>
          </div>
          <!-- car Form -->
          <div class="tab-pane" id="packages">
            <!--<form class="booking-form form-row">-->
            <form id="carBookingForm" class="booking-form form-row" action="send_contactform_query.php" method="POST">
              <div class="row-inside-form">

                <div class="form-group" style="flex:1;">
                  <!-- <label>From</label> -->
                  <input type="text" class="form-control" id="clocation" autocomplete="off" placeholder="From" required>
                  <div id="clocation-suggestions" class="suggestions"></div>
                </div>
                <div class="form-group" style="flex:1;">
                  <!-- <label>To</label> -->
                  <input type="text" class="form-control" id="cstart" autocomplete="off" placeholder="To" required>
                  <div id="cstart-suggestions" class="suggestions"></div>
                </div>
              </div>
              <div class="row-inside-form">

                <div class="form-group" style="flex:1;">
                  <!-- <label>Trip Start</label> -->
                  <input placeholder="Trip start" type="text" onfocus="(this.type='date', this.showPicker())"
                    onblur="(this.type='text')" inputmode="none" class="form-control">
                </div>
                <div class="form-group" style="flex:1;">
                  <!-- <label>Trip End</label> -->
                  <input placeholder="Trip End" type="text" onfocus="(this.type='date', this.showPicker())"
                    onblur="(this.type='text')" inputmode="none" class="form-control">
                </div>

                <div class="form-group" style="flex:1;">
                  <!-- <label>Guests</label> -->
                  <select class="form-control">
                    <option>1 Adult</option>
                    <option>2 Adults</option>
                    <option>Family</option>
                  </select>
                </div>
              </div>
              <div style="display: flex; justify-content: flex-end;">
                <button type="button" class="search-btn">SEARCH</button>
              </div>
            </form>
          </div>

          <!-- Modal for Additional Information -->
          <div class="modal" id="userDetailsModal">
            <div class="modal-content">
              <span class="close-btn">&times;</span>
              <h3 class="h3Title">Please Provide us your details.<br /> so we can contact you.</h3>
              <form class="modal-form" id="userDetailsForm">
                <input type="text" name="name" id="name" class="form-control" placeholder="Enter your name" required>
                <input type="tel" name="phone" id="phone" class="form-control" placeholder="Enter your phone number"
                  required>
                <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email"
                  required>
                <button type="submit" class="submit-btn">Complete Booking</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <style>
    /* Modal Styles */
    .modal {
      display: none;
      position: fixed;
      z-index: 99999999999999999;
      /* left: 7.5vw; */
      /* top: 15vh; */
      /* width: 85vw; */
      /* height: 80vh; */
      background-color: rgba(0, 0, 0, 0.5);
      inset: 0;
    }

    .modal-content {
      background-color: #fff;
      margin: 0% auto;
      padding: 2rem;
      border-radius: 8px;
      position: absolute;
      left: 50%;
      top: 50%;
      transform: translate(-50%, -50%);
      width: 100%;
      max-width: 500px;
      /* box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2); */
    }

    .modal-form {
      display: flex;
      flex-direction: column;

      gap: 1rem;
    }

    .close-btn {
      float: right;
      font-size: 1.5rem;
      cursor: pointer;
    }

    .submit-btn {
      background: #ff8c00;
      color: white;
      border: none;
      padding: 0.8rem 1.5rem;
      border-radius: 6px;
      font-weight: 600;
      cursor: pointer;
      width: 100%;
      margin-top: 1rem;
    }
  </style>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const searchBtns = document.querySelectorAll('.search-btn');
      const modal = document.getElementById('userDetailsModal');
      const closeBtn = document.querySelector('.close-btn');
      const bookingForms = [];
      bookingForms[0] = document.getElementById('flightBookingForm');
      bookingForms[1] = document.getElementById('hotelBookingForm');
      bookingForms[2] = document.getElementById('cruiseBookingForm');
      bookingForms[3] = document.getElementById('carBookingForm');
      userDetailsForm = document.getElementById('userDetailsForm');

      // Open modal when search button is clicked
      searchBtns.forEach((btn) => {
        btn.addEventListener('click', function (e) {
          e.preventDefault();

          // Find the closest form to this button
          const bookingForm = this.closest('form');

          // First validate the main form
          if (bookingForm.checkValidity()) {
            modal.style.display = 'block';
          } else {
            // If form is invalid, show validation messages
            bookingForm.reportValidity();
          }
        });
      });

      // Close modal when X is clicked
      closeBtn.addEventListener('click', function () {
        modal.style.display = 'none';
      });

      // Close modal when clicking outside
      window.addEventListener('click', function (e) {
        if (e.target === modal) {
          modal.style.display = 'none';
        }
      });

      // Handle user details form submission
      userDetailsForm.addEventListener('submit', function (e) {
        e.preventDefault();

        // Create hidden inputs in the main form
        const nameInput = document.createElement('input');
        nameInput.type = 'hidden';
        nameInput.name = 'name';
        nameInput.value = document.getElementById('name').value;

        const phoneInput = document.createElement('input');
        phoneInput.type = 'hidden';
        phoneInput.name = 'phone';
        phoneInput.value = document.getElementById('phone').value;

        const emailInput = document.createElement('input');
        emailInput.type = 'hidden';
        emailInput.name = 'email';
        emailInput.value = document.getElementById('email').value;

        // Add them to the form
        bookingForms.map((formRef) => {
          formRef.appendChild(nameInput);
          formRef.appendChild(phoneInput);
          formRef.appendChild(emailInput);
        }
        )

        // Submit the main form
        bookingForms.forEach(element => {
          element.submit();
        });

        // Close the modal
        modal.style.display = 'none';
      });
    });
  </script>



  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const locationInput = document.getElementById('location');
      const startInput = document.getElementById('start');
      const locationSuggestions = document.getElementById('location-suggestions');
      const startSuggestions = document.getElementById('start-suggestions');
      const hotelDestInput = document.getElementById('hotel-destination');
      const hotelSuggestions = document.getElementById('hotel-suggestions');
      const cruisesDestInput = document.getElementById('cruises-destination');
      const cruisesSuggestions = document.getElementById('cruises-suggestions');
      const clocationInput = document.getElementById('clocation');
      const cstartInput = document.getElementById('cstart');
      const clocationSuggestions = document.getElementById('clocation-suggestions');
      const cstartSuggestions = document.getElementById('cstart-suggestions');


      if (!locationInput || !startInput || !locationSuggestions || !startSuggestions) {
        console.error('One or more elements are missing in the DOM.');
        return;
      }

      function fetchSuggestions(query, callback) {
        fetch('https://raw.githubusercontent.com/algolia/datasets/master/airports/airports.json')
          .then(response => response.json())
          .then(data => {
            //   console.log('API Data:', data); 
            const filteredData = data.filter(airport =>
              airport.name.toLowerCase().includes(query.toLowerCase()) ||
              airport.city.toLowerCase().includes(query.toLowerCase())
            );
            //   console.log('Filtered Data:', filteredData); 
            callback(filteredData);
          })
          .catch(error => console.error('Error fetching suggestions:', error));
      }

      function showSuggestions(input, container) {
        if (!container) {
          // console.error('Container is undefined.');
          return;
        }

        container.innerHTML = '';
        if (input.value.length > 1) {
          fetchSuggestions(input.value, function (data) {
            if (data.length > 0) {
              data.forEach(item => {
                const div = document.createElement('div');
                div.innerHTML = `
                  <strong>${item.name}</strong><br>
                  <small>${item.city}, ${item.country}</small>
                `;
                div.addEventListener('click', () => {

                  input.value = item.name;
                  container.innerHTML = '';
                });
                container.appendChild(div);
              });


              container.style.display = 'block';
            } else {
              container.style.display = 'none';
            }
          });
        } else {
          container.style.display = 'none';
        }
      }

      locationInput.addEventListener('keyup', () => {
        showSuggestions(locationInput, locationSuggestions);
      });

      startInput.addEventListener('keyup', () => {
        showSuggestions(startInput, startSuggestions);
      });


      hotelDestInput.addEventListener('keyup', () => {
        showSuggestions(hotelDestInput, hotelSuggestions);
      });

      cruisesDestInput.addEventListener('keyup', () => {
        showSuggestions(cruisesDestInput, cruisesSuggestions);
      });

      clocationInput.addEventListener('keyup', () => {
        showSuggestions(clocationInput, clocationSuggestions);
      });

      cstartInput.addEventListener('keyup', () => {
        showSuggestions(cstartInput, cstartSuggestions);
      });



      document.addEventListener('click', (event) => {
        if (!locationInput.contains(event.target)) {
          locationSuggestions.style.display = 'none';
        }
        if (!startInput.contains(event.target)) {
          startSuggestions.style.display = 'none';
        }
      });
    });
  </script>

  <style>
    .suggestions {
      border: 1px solid #ccc;
      max-height: 150px;
      overflow-y: auto;
      position: absolute;
      top: 100%;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
      background-color: white;
      width: 100%;
      z-index: 1000;
      display: none;
    }

    .suggestions div {
      padding: 8px;
      cursor: pointer;
      border-bottom: 1px solid #eee;
    }

    .suggestions div:hover {
      background-color: #f0f0f0;
    }

    .suggestions strong {
      font-weight: bold;
      color: black;
    }

    .suggestions small {
      color: #666;
    }
  </style>









  <section class="features-section">
    <div class="features-container">
      <!-- Feature 1 -->
      <div class="feature-card">
        <div class="feature-icon">
          <i class="fas fa-gift"></i>
        </div>
        <div class="feature-content">
          <h3 class="feature-title">Exclusive Offers</h3>
          <p class="feature-description">Handpicked Just For You</p>
        </div>
      </div>

      <!-- Feature 2 -->
      <div class="feature-card">
        <div class="feature-icon">
          <i class="fas fa-headset"></i>
        </div>
        <div class="feature-content">
          <h3 class="feature-title">Customer Support</h3>
          <p class="feature-description">Available 24 Hours a day</p>
        </div>
      </div>

      <!-- Feature 3 -->
      <div class="feature-card">
        <div class="feature-icon">
          <i class="fas fa-shield-alt"></i>
        </div>
        <div class="feature-content">
          <h3 class="feature-title">Financial Security</h3>
          <p class="feature-description">Fully ABTA & ATOL Bonded</p>
        </div>
      </div>

      <!-- Feature 4 -->
      <div class="feature-card">
        <div class="feature-icon">
          <i class="fas fa-tag"></i>
        </div>
        <div class="feature-content">
          <h3 class="feature-title">Price Promise</h3>
          <p class="feature-description">Best Price Guaranteed</p>
        </div>
      </div>
    </div>
  </section>






  <!-- .......................second section................................... -->



  <section class="travel-deals-section">
    <h2 class="td-title">Handpicked Deals of the Week</h2>

    <div class="td-tabs" id="tdDealTabs">
      <div class="td-tab active" data-tab="top">Top Deals</div>
      <div class="td-tab" data-tab="inclusive">All Inclusive</div>
      <div class="td-tab" data-tab="summer">Summer Holidays</div>
      <div class="td-tab" data-tab="cruise">Nile Cruise</div>
    </div>

    <div class="td-slider-container">
      <div class="td-slider" id="tdSlider"></div>
    </div>

    <div class="td-nav-buttons">
      <button class="td-nav-btn" onclick="tdSlide(-1)" aria-label="Previous slide"><i
          class="fas fa-chevron-left"></i></button>
      <button class="td-nav-btn" onclick="tdSlide(1)" aria-label="Next slide"><i
          class="fas fa-chevron-right"></i></button>
    </div>
  </section>



  <section class="section__container choose__container" id="about">
    <div class="choose__image">
      <img src="assets/choose.jpg" alt="choose" />

    </div>
    <div class="choose__content">
      <p class="section__subheader">Why Choose Us?</p>
      <h2 class="section__header_1">Plan Your Trip <span>With Us</span></h2>
      <ul class="choose__list">
        <li>
          <span><i class="ri-verified-badge-fill"></i></span>
          <div>
            <h4>Best Price Gurantee</h4>
            <p>
              We ensure you get the most competitive rates for your travel
              plans, making your dream destinations affordable.
            </p>
          </div>
        </li>
        <li>
          <span><i class="ri-calendar-fill"></i></span>
          <div>
            <h4>Booking Options</h4>
            <p>
              Experience the ease of flexible booking options tailored to suit
              your schedule and preferences.
            </p>
          </div>
        </li>
        <li>
          <span><i class="ri-road-map-fill"></i></span>
          <div>
            <h4>Revising Track Map</h4>
            <p>
              Navigate your adventure with our personalized track maps
              designed for seamless and enjoyable travel experiences.
            </p>
          </div>
        </li>
      </ul>
    </div>
  </section>






  <!-- ..................................................... -->


  <section class="destination">
    <div class="section__container destination__container">
      <!-- <h3 class="section__subheader">Top Destination</h3> -->
      <h2 class="section__header">Our Top Destinations</h2>
      <div class="destination__grid">
        <div class="destination__card">
          <img src="assets/destination-1.jpg" alt="destination" />
          <div class="destination__card__content">
            <h4>Enjoy the tour of the City of Love</h4>
            <h5>Paris, France</h5>
            <div class="destination__card__footer">
              <h6>$2300</h6>
              <p>(6 days)</p>
            </div>
          </div>
        </div>
        <div class="destination__card">
          <img src="assets/destination-2.jpg" alt="destination" />
          <div class="destination__card__content">
            <h4>Enjoy the tour of paradise with beaches</h4>
            <h5>Bali, Indonesia</h5>
            <div class="destination__card__footer">
              <h6>$1800</h6>
              <p>(7 days)</p>
            </div>
          </div>
        </div>
        <div class="destination__card">
          <img src="assets/destination-3.jpg" alt="destination" />
          <div class="destination__card__content">
            <h4>Enjoy the tour of luxury and innovation</h4>
            <h5>Dubai, UAE</h5>
            <div class="destination__card__footer">
              <h6>$2500</h6>
              <p>(5 days)</p>
            </div>
          </div>
        </div>
      </div>
      <div class="destination__btn"><a href="tel:+1 (888)711 2909" class="cbtn">
          <button class="btn">
            Enquire now
            <span><i class="ri-arrow-right-long-line"></i></span></a>
        </button>
      </div>
    </div>
  </section>


  <section class="section__container review__container">
    <div class="review__image">
      <img src="assets/review.png" alt="review" />
    </div>
    <div class="review__content">
      <h3 class="section__subheader">Top Reviews</h3>
      <h2 class="section__header">Our Valuable Clients Say About Us</h2>
      <!-- Slider main container -->
      <div class="swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
          <!-- Slides -->
          <div class="swiper-slide">
            <div class="review__card">
              <span><i class="ri-double-quotes-l"></i></span>
              <p class="section__description">
                Booktrip4me made my dream vacation a reality! From the moment I
                started planning, their team provided excellent
                recommendations and tailored my itinerary to perfection. Every
                experience felt personalized, and I loved how seamless the
                entire journey was.
              </p>
              <h4>Emily Roberts</h4>
              <h5>Travel Blogger</h5>
              <div>
                <span><i class="ri-star-fill"></i></span>
                <span><i class="ri-star-fill"></i></span>
                <span><i class="ri-star-fill"></i></span>
                <span><i class="ri-star-fill"></i></span>
                <span><i class="ri-star-fill"></i></span>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="review__card">
              <span><i class="ri-double-quotes-l"></i></span>
              <p class="section__description">
                Exploring new destinations with Booktrip4me was a game-changer. As
                a photographer, I'm always looking for breathtaking views and
                unique cultural experiences. Booktrip4me didn't disappoint! From
                scenic landscapes to vibrant local markets, every destination
                was a delight to capture.
              </p>
              <h4>Michael Johnson</h4>
              <h5>Photographer</h5>
              <div>
                <span><i class="ri-star-fill"></i></span>
                <span><i class="ri-star-fill"></i></span>
                <span><i class="ri-star-fill"></i></span>
                <span><i class="ri-star-fill"></i></span>
                <span><i class="ri-star-fill"></i></span>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="review__card">
              <span><i class="ri-double-quotes-l"></i></span>
              <p class="section__description">
                I've traveled a lot for work, but Booktrip4me gave me the
                opportunity to enjoy a stress-free vacation. Their attention
                to detail was remarkable, ensuring everything from airport
                transfers to guided tours was perfectly arranged. The
                personalized itinerary was well-balanced with adventure and
                relaxation!
              </p>
              <h4>Sophia Lee</h4>
              <h5>Business Consultant</h5>
              <div>
                <span><i class="ri-star-fill"></i></span>
                <span><i class="ri-star-fill"></i></span>
                <span><i class="ri-star-fill"></i></span>
                <span><i class="ri-star-fill"></i></span>
                <span><i class="ri-star-fill"></i></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php include 'partials/footer.php'; ?>


  <script src="https://unpkg.com/scrollreveal"></script>
  <!-- Swiper CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const swiper = new Swiper('.swiper', {
        loop: true,

        autoplay: {
          delay: 3000,
          disableOnInteraction: false,
        },
      });
    });   
  </script>
  <script src="./main.js"></script>
</body>

</html>