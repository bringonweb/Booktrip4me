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
    <div class="hero-background"></div>  
    <div class="hero-content">
      <div class="booking-tabs">
        <div class="tabs-header">
          <button class="tab-btn active" data-tab="flights">
            <i class="fas fa-plane"></i><br>Flights
          </button>
          <button class="tab-btn" data-tab="hotels">
            <i class="fas fa-hotel"></i><br>Hotels
          </button>
          <button class="tab-btn" data-tab="cruises">
            <i class="fas fa-ship"></i><br>Cruises
          </button>
          <button class="tab-btn" data-tab="packages">
            <i class="fas fa-car"></i><br>Car
          </button>
        </div>
        <div class="tabs-content">
          <!-- Flights Form -->
          <div class="tab-pane active" id="flights">
            <!--<form class="booking-form form-row">-->
            <form class="booking-form form-row" action="send_email.php" method="POST">
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
              <div class="form-group">
                <label>From</label>
                <input type="text" class="form-control"
                        name="location"
                        id="location"
                        autocomplete="off"
                        placeholder="City or Airport" required>
                <div id="location-suggestions" class="suggestions"></div>
              </div>
              <div class="form-group">
                <label>To</label>
                <input type="text" class="form-control" 
                        name="start"
                        id="start"
                        autocomplete="off"
                        placeholder="City or Airport" required>
                <div id="start-suggestions" class="suggestions"></div>
              </div>
              <div class="form-group">
                <label>Departure</label>
                <input type="date" class="form-control">
              </div>
              <div class="form-group return-date">
                <label class="mm">Return</label>
                <input type="date" class="form-control">
              </div>
              <div class="form-group">
                <label>Travellers</label>
                <input type="text" class="form-control" placeholder="2 Travellers, 1 Room">
              </div>
              <div class="form-group">
                <label>Name</label>
                <input type="name" name="name" id="name" class="form-control" placeholder="Enter your name">
              </div>
              <div class="form-group">
                <label>Phone</label>
                <input type="phone" name="phone" id="phone" class="form-control" placeholder="Enter your phone no">
              </div>
              <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email id">
              </div>
              <button type="submit" class="search-btn">SEARCH</button>
            </form>
          </div>

          <!-- Hotels Form -->
          <div class="tab-pane" id="hotels">
            <!--<form class="booking-form form-row">-->
            <form class="booking-form form-row" action="send_email.php" method="POST">
              <div class="form-group">
                <label>Destination</label>
                <input type="text" class="form-control"


                        name="start"
                        id="hotel-destination"
                        autocomplete="off"
                        placeholder="City"required>
                        <div id="hotel-suggestions" class="suggestions"></div>
              </div>
                
                
              <div class="form-group">
                <label>Check-in</label>
                <input type="date" class="form-control">
              </div>
              <div class="form-group">
                <label>Check-out</label>
                <input type="date" class="form-control">
              </div>
              <div class="form-group">
                <label>Rooms</label>
                <select class="form-control">
                  <option>1 Room</option>
                  <option>2 Rooms</option>
                  <option>3 Rooms</option>
                  <option>4 Rooms</option>
                </select>
              </div>
              <div class="form-group">
                <label>Guests</label>
                <select class="form-control">
                  <option>1 Guest</option>
                  <option>2 Guests</option>
                  <option>3 Guests</option>
                  <option>4 Guests</option>
                  <option>Family</option>
                </select>
              </div>
              <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Enter your name">
              </div>
              <div class="form-group">
                <label>Phone</label>
                <input type="phone" name="phone" id="phone"class="form-control" placeholder="Enter your phone no">
              </div>
              <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email id">
              </div>
              <button type="submit" class="search-btn">SEARCH</button>
            </form>
          </div>
          <!-- Cruises Form -->
          <div class="tab-pane" id="cruises">
            <!--<form class="booking-form form-row">-->
            <form class="booking-form form-row" action="send_email.php" method="POST">
              <div class="form-group">
                <label>Destination</label>
                <input type="text" class="form-control"
                
                name="start"
                        id="cruises-destination"
                        autocomplete="off"
                        placeholder="City"required>
                        <div id="cruises-suggestions" class="suggestions"></div>
                
                
              </div>
              <div class="form-group">
                <label>Departure</label>
                <input type="date" class="form-control">
              </div>
              <div class="form-group">
                <label>Return Date</label>
                <input type="date" class="form-control">
              </div>
              <div class="form-group">
                <label>Cruise</label>
                <select class="form-control">
                  <option>Carnival</option>
                  <option>Royal Caribbean</option>
                  <option>Norwegian</option>
                </select>
              </div>
              <div class="form-group">
                <label>Guests</label>
                <select class="form-control">
                  <option>1 Guest</option>
                  <option>2 Guests</option>
                  <option>3 Guests</option>
                  <option>4 Guests</option>
                  <option>Family</option>
                </select>
              </div>
              <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Enter your name">
              </div>
              <div class="form-group">
                <label>Phone</label>
                <input type="phone" name="phone" id="phone" class="form-control" placeholder="Enter your phone no">
              </div>
              <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email id">
              </div>
              <button type="submit" class="search-btn">SEARCH</button>
            </form>
          </div>
          <!-- car Form -->
          <div class="tab-pane" id="packages">
            <!--<form class="booking-form form-row">-->
            <form class="booking-form form-row" action="send_email.php" method="POST">
              <div class="form-group">
                <label>From</label>
                <input type="text" class="form-control"

                id="clocation"
                        autocomplete="off"
                        placeholder="City"required>
                        <div id="clocation-suggestions" class="suggestions"></div>
              </div>
              <div class="form-group">
                <label>To</label>
                <input type="text" class="form-control"
                
                id="cstart"
                        autocomplete="off"
                        placeholder="City"required>
                        <div id="cstart-suggestions" class="suggestions"></div>
              </div>
             
              <div class="form-group">
                <label>trip Start</label>
                <input type="date" class="form-control">
              </div>
              <div class="form-group">
                <label>Trip End</label>
                <input type="date" class="form-control">
              </div>
              <div class="form-group">
                <label>Guests</label>
                <select class="form-control">
                  <option>1 Adult</option>
                  <option>2 Adults</option>
                  <option>Family</option>
                </select>
              </div>
              <!--<div class="form-group">-->
              <!--  <label>Trip type</label>-->
              <!--  <select class="form-control">-->
              <!--    <option>Outstation One Way</option>-->
              <!--    <option>Outstation Round Trip</option>-->
              <!--  </select>-->
              <!--</div>-->
              <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Enter your name">
              </div>
              <div class="form-group">
                <label>Phone</label>
                <input type="phone" name="phone" id="phone" class="form-control" placeholder="Enter your phone no">
              </div>
              <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email id">
              </div>
              <button type="submit" class="search-btn">SEARCH</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
 
  <!--<section class="hero-section">-->
  <!--  <div class="hero-background"></div>  -->
  <!--  <div class="hero-content">-->
  <!--    <div class="booking-tabs">-->
  <!--      <div class="tabs-header">-->
  <!--        <button class="tab-btn active" data-tab="flights">-->
  <!--          <i class="fas fa-plane"></i><br>Flights-->
  <!--        </button>-->
  <!--        <button class="tab-btn" data-tab="hotels">-->
  <!--          <i class="fas fa-hotel"></i><br>Hotels-->
  <!--        </button>-->
  <!--        <button class="tab-btn" data-tab="cruises">-->
  <!--          <i class="fas fa-ship"></i><br>Cruises-->
  <!--        </button>-->
  <!--        <button class="tab-btn" data-tab="packages">-->
  <!--          <i class="fas fa-car"></i><br>Car-->
  <!--        </button>-->
  <!--      </div>-->
  <!--      <div class="tabs-content">-->
          <!-- Flights Form -->
  <!--        <div class="tab-pane active" id="flights">-->
  <!--          <form class="booking-form form-row">-->
  <!--            <div class="form-group">-->
  <!--              <label>From</label>-->
  <!--              <input type="text" class="form-control"-->
                
  <!--                      name="location"-->
  <!--                      id="location"-->
  <!--                      autocomplete="off"-->
  <!--                      placeholder="City or Airport"required>-->
  <!--                      <div id="location-suggestions" class="suggestions"></div>-->
  <!--            </div>-->
              
  <!--            <div class="form-group">-->
  <!--              <label>To</label>-->
  <!--              <input type="text" class="form-control" -->
                
  <!--                      name="start"-->
  <!--                      id="start"-->
  <!--                      autocomplete="off"-->
  <!--                      placeholder="City or Airport"required>-->
  <!--                      <div id="start-suggestions" class="suggestions"></div>-->
  <!--            </div>-->
  <!--            <div class="form-group">-->
  <!--              <label>Departure</label>-->
  <!--              <input type="date" class="form-control">-->
  <!--            </div>-->
  <!--            <div class="form-group">-->
  <!--              <label>Return</label>-->
  <!--              <input type="date" class="form-control">-->
  <!--            </div>-->
  <!--            <div class="form-group">-->
  <!--              <label>Travellers</label>-->
  <!--              <input type="text" class="form-control" placeholder="2 Travellers, 1 Room">-->
  <!--            </div>-->
  <!--            <div class="form-group">-->
  <!--              <label>Name</label>-->
  <!--              <input type="text" class="form-control" placeholder="Enter your name">-->
  <!--            </div>-->
  <!--            <div class="form-group">-->
  <!--              <label>Phone</label>-->
  <!--              <input type="phone" class="form-control" placeholder="Enter your phone no">-->
  <!--            </div>-->
  <!--            <div class="form-group">-->
  <!--              <label>Email</label>-->
  <!--              <input type="mail" class="form-control" placeholder="Enter your email id">-->
  <!--            </div>-->
  <!--            <button type="submit" class="search-btn">SEARCH</button>-->
  <!--          </form>-->
  <!--        </div>-->
          <!-- Hotels Form -->
  <!--        <div class="tab-pane" id="hotels">-->
  <!--          <form class="booking-form form-row">-->
  <!--            <div class="form-group">-->
  <!--              <label>Destination</label>-->
  <!--              <input type="text" class="form-control"-->


  <!--                      name="start"-->
  <!--                      id="hotel-destination"-->
  <!--                      autocomplete="off"-->
  <!--                      placeholder="City"required>-->
  <!--                      <div id="hotel-suggestions" class="suggestions"></div>-->
  <!--            </div>-->
                
                
  <!--            <div class="form-group">-->
  <!--              <label>Check-in</label>-->
  <!--              <input type="date" class="form-control">-->
  <!--            </div>-->
  <!--            <div class="form-group">-->
  <!--              <label>Check-out</label>-->
  <!--              <input type="date" class="form-control">-->
  <!--            </div>-->
  <!--            <div class="form-group">-->
  <!--              <label>Rooms</label>-->
  <!--              <select class="form-control">-->
  <!--                <option>1 Room</option>-->
  <!--                <option>2 Rooms</option>-->
  <!--                <option>3 Rooms</option>-->
  <!--                <option>4 Rooms</option>-->
  <!--              </select>-->
  <!--            </div>-->
  <!--            <div class="form-group">-->
  <!--              <label>Guests</label>-->
  <!--              <select class="form-control">-->
  <!--                <option>1 Guest</option>-->
  <!--                <option>2 Guests</option>-->
  <!--                <option>3 Guests</option>-->
  <!--                <option>4 Guests</option>-->
  <!--                <option>Family</option>-->
  <!--              </select>-->
  <!--            </div>-->
  <!--            <div class="form-group">-->
  <!--              <label>Name</label>-->
  <!--              <input type="text" class="form-control" placeholder="Enter your name">-->
  <!--            </div>-->
  <!--            <div class="form-group">-->
  <!--              <label>Phone</label>-->
  <!--              <input type="phone" class="form-control" placeholder="Enter your phone no">-->
  <!--            </div>-->
  <!--            <div class="form-group">-->
  <!--              <label>Email</label>-->
  <!--              <input type="mail" class="form-control" placeholder="Enter your email id">-->
  <!--            </div>-->
  <!--            <button type="submit" class="search-btn">SEARCH</button>-->
  <!--          </form>-->
  <!--        </div>-->
          <!-- Cruises Form -->
  <!--        <div class="tab-pane" id="cruises">-->
  <!--          <form class="booking-form form-row">-->
  <!--            <div class="form-group">-->
  <!--              <label>Destination</label>-->
  <!--              <input type="text" class="form-control"-->
                
  <!--              name="start"-->
  <!--                      id="cruises-destination"-->
  <!--                      autocomplete="off"-->
  <!--                      placeholder="City"required>-->
  <!--                      <div id="cruises-suggestions" class="suggestions"></div>-->
                
                
  <!--            </div>-->
  <!--            <div class="form-group">-->
  <!--              <label>Departure</label>-->
  <!--              <input type="date" class="form-control">-->
  <!--            </div>-->
  <!--            <div class="form-group">-->
  <!--              <label>Return Date</label>-->
  <!--              <input type="date" class="form-control">-->
  <!--            </div>-->
  <!--            <div class="form-group">-->
  <!--              <label>Cruise</label>-->
  <!--              <select class="form-control">-->
  <!--                <option>Carnival</option>-->
  <!--                <option>Royal Caribbean</option>-->
  <!--                <option>Norwegian</option>-->
  <!--              </select>-->
  <!--            </div>-->
  <!--            <div class="form-group">-->
  <!--              <label>Guests</label>-->
  <!--              <select class="form-control">-->
  <!--                <option>1 Guest</option>-->
  <!--                <option>2 Guests</option>-->
  <!--                <option>3 Guests</option>-->
  <!--                <option>4 Guests</option>-->
  <!--                <option>Family</option>-->
  <!--              </select>-->
  <!--            </div>-->
  <!--            <div class="form-group">-->
  <!--              <label>Name</label>-->
  <!--              <input type="text" class="form-control" placeholder="Enter your name">-->
  <!--            </div>-->
  <!--            <div class="form-group">-->
  <!--              <label>Phone</label>-->
  <!--              <input type="phone" class="form-control" placeholder="Enter your phone no">-->
  <!--            </div>-->
  <!--            <div class="form-group">-->
  <!--              <label>Email</label>-->
  <!--              <input type="mail" class="form-control" placeholder="Enter your email id">-->
  <!--            </div>-->
  <!--            <button type="submit" class="search-btn">SEARCH</button>-->
  <!--          </form>-->
  <!--        </div>-->
          <!-- car Form -->
  <!--        <div class="tab-pane" id="packages">-->
  <!--          <form class="booking-form form-row">-->
  <!--            <div class="form-group">-->
  <!--              <label>From</label>-->
  <!--              <input type="text" class="form-control"-->

  <!--              id="clocation"-->
  <!--                      autocomplete="off"-->
  <!--                      placeholder="City"required>-->
  <!--                      <div id="clocation-suggestions" class="suggestions"></div>-->
  <!--            </div>-->
  <!--            <div class="form-group">-->
  <!--              <label>To</label>-->
  <!--              <input type="text" class="form-control"-->
                
  <!--              id="cstart"-->
  <!--                      autocomplete="off"-->
  <!--                      placeholder="City"required>-->
  <!--                      <div id="cstart-suggestions" class="suggestions"></div>-->
  <!--            </div>-->
             
  <!--            <div class="form-group">-->
  <!--              <label>trip Start</label>-->
  <!--              <input type="date" class="form-control">-->
  <!--            </div>-->
  <!--            <div class="form-group">-->
  <!--              <label>Trip End</label>-->
  <!--              <input type="date" class="form-control">-->
  <!--            </div>-->
  <!--            <div class="form-group">-->
  <!--              <label>Guests</label>-->
  <!--              <select class="form-control">-->
  <!--                <option>1 Adult</option>-->
  <!--                <option>2 Adults</option>-->
  <!--                <option>Family</option>-->
  <!--              </select>-->
  <!--            </div>-->
  <!--            <div class="form-group">-->
  <!--              <label>Trip type</label>-->
  <!--              <select class="form-control">-->
  <!--                <option>Outstation One Way</option>-->
  <!--                <option>Outstation Round Trip</option>-->
  <!--              </select>-->
  <!--            </div>-->
  <!--            <div class="form-group">-->
  <!--              <label>Name</label>-->
  <!--              <input type="text" class="form-control" placeholder="Enter your name">-->
  <!--            </div>-->
  <!--            <div class="form-group">-->
  <!--              <label>Phone</label>-->
  <!--              <input type="phone" class="form-control" placeholder="Enter your phone no">-->
  <!--            </div>-->
  <!--            <div class="form-group">-->
  <!--              <label>Email</label>-->
  <!--              <input type="mail" class="form-control" placeholder="Enter your email id">-->
  <!--            </div>-->
  <!--            <button type="submit" class="search-btn">SEARCH</button>-->
  <!--          </form>-->
  <!--        </div>-->
  <!--      </div>-->
  <!--    </div>-->
  <!--  </div>-->
  <!--</section>-->





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
      background-color: white;
      width: 7.5rem;
      z-index: 1000;
      display: none; 
      margin-top: 87px; 
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
    <button class="td-nav-btn" onclick="tdSlide(-1)" aria-label="Previous slide"><i class="fas fa-chevron-left"></i></button>
    <button class="td-nav-btn" onclick="tdSlide(1)" aria-label="Next slide"><i class="fas fa-chevron-right"></i></button>
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






  <!-- ....................review.................................. -->


  <section class="section__container review__container">
    <div class="review__image">
      <img src="assets/review.png" alt="review" />
    </div>
    <div class="review__content">
      <h3 class="section__subheader">Top Reviews</h3>
      <h2 class="section__header">Our Valuable Clients Say Abour Us</h2>
      <!-- Slider main container -->
      <div class="swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
          <!-- Slides -->
          <div class="swiper-slide">
            <div class="review__card">
              <span><i class="ri-double-quotes-l"></i></span>
              <p class="section__description">
                Advanto made my dream vacation a reality! From the moment I
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
                Exploring new destinations with Advanto was a game-changer. As
                a photographer, I'm always looking for breathtaking views and
                unique cultural experiences. Advanto didn't disappoint! From
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
                I've traveled a lot for work, but Advanto gave me the
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

  







<!--  <footer class="footer">-->
<!--    <div class=" footer__container">-->
<!--      <div class="footer__col">-->
<!--        <div class="footer__logo">-->
          <!--<a href="#" class="logo">BusinessFlights<span>Pro</span></a>-->
<!--          <div class="logo-container">-->
<!--              <a href="index.php">-->
<!--               <img src="/assets/logo.png" alt="Website Logo" class="site-logo"></a>-->
<!--          </div>-->
<!--        </div>-->
<!--        <p>-->
          
<!--        </p>-->
<!--      </div>-->
<!--      <div class="footer__col">-->
<!--        <h4>QUICK LINKS</h4>-->
<!--        <ul class="footer__links">-->
<!--          <li><a href="/about-us.html">About Us</a></li>-->
          <!-- <li><a href="/blog">Blogs</a></li> -->
<!--          <li><a href="/contact.html">Contact Us</a></li>-->
<!--          <li><a href="/privacy-policy.html">Privacy-Policy</a></li>-->
<!--          <li><a href="/terms-and-condition.html">Terms & Condition</a></li>-->
<!--        </ul>-->
<!--      </div>-->
<!--      <div class="footer__col">-->
<!--        <h4>DESTINATIONS</h4>-->
<!--        <ul class="footer__links">-->
<!--          <li><a href="#">USA</a></li>-->
<!--          <li><a href="#">Venezuela</a></li>-->
<!--          <li><a href="#">Brazil</a></li>-->
<!--          <li><a href="#">Australia</a></li>-->
<!--          <li><a href="#">London</a></li>-->
<!--        </ul>-->
<!--      </div>-->
<!--      <div class="footer__col">-->
<!--        <h4>CONNECT WITH US</h4>-->
<!--      <ul class="footer__links">-->
<!--          <li>-->
<!--        <a href="#">-->
<!--          <span><i class="ri-phone-fill"></i></span>+1 (888)711 2909-->
<!--        </a>-->
<!--      </li>-->
<!--      <li>-->
<!--        <a href="#">-->
<!--          <span><i class="ri-map-pin-fill"></i></span>Texas, USA-->
<!--        </a>-->
<!--      </li>-->
<!--      <li>-->
<!--        <a href="#">-->
<!--          <span><i class="ri-mail-fill"></i></span>support@booktrip4me.com-->
<!--        </a>-->
<!--      </ul><br>-->
<!--        <ul class="footer__socials">-->
<!--          <li>-->
<!--            <a href="#"><i class="ri-twitter-fill"></i></a>-->
<!--          </li>-->
<!--          <li>-->
<!--            <a href="#"><i class="ri-google-fill"></i></a>-->
<!--          </li>-->
<!--          <li>-->
<!--            <a href="#"><i class="ri-linkedin-fill"></i></a>-->
<!--          </li>-->
<!--        </ul>-->
<!--      </div>-->
<!--    </div>-->
<!--  <div class="footer__bar">-->
<!--    © 2025-2026, Booktrip4me | All rights reserved.-->
<!--  </div>-->
<!--</footer>-->

<?php include 'partials/footer.php'; ?>
 

  <script src="https://unpkg.com/scrollreveal"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="/main.js"></script>
</body>

</html>