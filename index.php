<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Ashraf Shaikh">
  <meta name="company" content="Metier Media Pvt Ltd">

  <title>Anand Corbett Aamod Resort & Spa- Home</title>

  <!-- FAVICON -->
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">

  <!-- Bootstrap 5 CDN Links -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  <!-- datepicker css  -->
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

  <!-- Animate on scroll css  -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


  <!-- Custom File's Link -->
  <link rel="stylesheet" href="./assets/css/style.css">
  <link rel="stylesheet" href="./assets/css/responsive-style.css">
  <link rel="stylesheet" href="./assets/css/lightbox.min.css">

</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="100" class="bg-white">
  <!-- Navbar section -->
  <header class="header__wrapper">
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="./assets/img/logo-1.png" class="logo" alt="Site Logo Here">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <!-- <span class="navbar-toggler-icon"></span> -->
          <i class="fas fa-stream navbar-toggler-icon"></i>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <ul class="navbar-nav menu__navbar__nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#rooms">Room</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#services">Services</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#gallery">Gallery</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact Us</a>
            </li>

            <li class="nav-item mt-3 mt-lg-0">
              <a class="main__btn" href="#booknow">Book Now</a>
            </li>



          </ul>
        </div>
      </div>
    </nav>
  </header>
  <!-- Navbar section exit -->

  <!-- Banner section -->
  <section class="banner__wrapper p-0" id="home">
    <div class="scroll__container">
      <div class="scroll__content">
        <h2 class="text-white fs-2 mt-3">Aamod Corbett Resort & Spa, Uttarakhand</h2>
        <div class="">
          <a href="#about" class="btn__custom" id="booknow">Discover More</a>
        </div>
      </div>
    </div>
  </section>
  <div class="container  booking-area" >
    <form method="POST" action="./booking.php" class="row">
      <div class="col-lg mb-3 mb-lg-0">
        <input type="text" name="Name" placeholder="Name" class="form-control shadow-sm" required>
      </div>
      <div class="col-lg mb-3 mb-lg-0">
        <input type="tel" name="Number" placeholder="Phone Number" maxlength="10" class="form-control shadow-sm" required required>
      </div>
      <div class="col-lg mb-3 mb-lg-0">
        <input type="email" name="Email" placeholder="Email" class="form-control shadow-sm" required>
      </div>
      <div class="col-lg mb-3 mb-lg-0">
        <input type="date" name="Check-In-Date" class="form-control shadow-sm" required />
      </div>
      <div class="col-lg mb-3 mb-lg-0">
        <input type="date" name="Check-Out-Date" class=" form-control shadow-sm" placeholder="Check Out Date" required>
      </div>

      <div class="col-lg mb-3 mb-lg-0 d-flex align-items-center">
        <button type="submit" name="send" class="main__btn rounded-2 px-lg-3">Submit</button>
      </div>
    </form>
    <p id="msg1" class="mt-3 "></p>
  </div>
  <!-- Banner section exit -->

  <!-- About section -->
  <section class="about__wrapper" id="about">
    <div class="container shadow-sm p-3">
      <div class="row">
        <div class="col-md-12 col-lg-7 col-sm-12 about_content_container">
          <h3>Welcome To Aamod Corbett Resort & Spa</h3>
          <p>Spread across over 11 acres of lush green area by the Kosi riverside- Corbett Aamod
            Resort &amp; Spa has a lot to offer beyond its magnificent view. Situated on the foothills
            of Mailani range in the Kumaon region, the resort is surrounded by dense forest –
            home to thousand flora and fauna, from elephants to deer, leopards to the famous
            Bengal tigers along with hundreds of species of bird.</p>
          <p>Once the famous destination for wildlife explorer now an idealistic place for a nature
            lover. The resort offers 55 well-appointed deluxe and suite accommodation, a huge
            aqua pool, three upscale restaurants and bars and outstanding activities for all ages,
            from the serene spa and fully equipped fitness centre to the sprawling well-
            manicured lawns, amphitheatre and performance decks.</p>
          <p>The riverside resort offers the perfect blend of luxury and nature and is perfect for all
            types of getaways and vacations, from couples&#39; breaks to family escapes and fit
            perfectly for destination weddings and events.</p>
        </div>
        <div class="col-md-12 col-lg-5 col-sm-12  about__img__container">
          <div class="image__box">
            <div class="col-c-1">
              <a href="./assets/latest/Aqua - Swimming Pool.webp" data-lightbox="mygallery">
                <img src="./assets/latest/Aqua - Swimming Pool.webp" alt="">
              </a>
            </div>
            <div class="double__container">
              <div class="col-c-2">
                <a href="./assets/latest/Anniversary Suite.jpg" data-lightbox="mygallery">
                  <img src="./assets/latest/Anniversary Suite.jpg" alt="">
                </a>
              </div>
              <div class="col-c-2">
                <a href="./assets/latest/Deluxe Room Facade.jpg" data-lightbox="mygallery">
                  <img src="./assets/latest/Deluxe Room Facade.jpg" alt="">
                </a>
              </div>
            </div>
            <div class="double__container">
              <div class="col-c-2">
                <a href="./assets/latest/Deluxe Room Pathway.jpg" data-lightbox="mygallery">
                  <img src="./assets/latest/Deluxe Room Pathway.jpg" alt="">
                </a>
              </div>
              <div class="col-c-2">
                <a href="./assets/latest/Deluxe Room with Balcony.jpg" data-lightbox="mygallery">
                  <img src="./assets/latest/Deluxe Room with Balcony.jpg" alt="">
                </a>
              </div>
            </div>
            <div class="double__container">
              <div class="col-c-2">
                <a href="./assets/latest/Lobby Daytime.jpg" data-lightbox="mygallery">
                  <img src="./assets/latest/Lobby Daytime.jpg" alt="">
                </a>
              </div>
              <div class="col-c-2">
                <a href="./assets/latest/Mango Tree Lawn.jpg" data-lightbox="mygallery">
                  <img src="./assets/latest/Mango Tree Lawn.jpg" alt="">
                </a>
              </div>
            </div>
            <div class="double__container">
              <div class="col-c-2">
                <a href="./assets/latest/Suite Balcony View.jpg" data-lightbox="mygallery">
                  <img src="./assets/latest/Suite Balcony View.jpg" alt="">
                </a>
              </div>
              <div class="col-c-2">
                <a href="./assets/latest/Suite Facade - Daytime.jpg" data-lightbox="mygallery">
                  <img src="./assets/latest/Suite Facade - Daytime.jpg" alt="">
                </a>
              </div>
            </div>
            <div class="double__container">
              <div class="col-c-2">
                <a href="./assets/latest/Suite Room Facade - Night time.jpg" data-lightbox="mygallery">
                  <img src="./assets/latest/Suite Room Facade - Night time.jpg" alt="">
                </a>
              </div>
              <div class="col-c-2">
                <a href="./assets/latest/Suite Room Facade.jpg" data-lightbox="mygallery">
                  <img src="./assets/latest/Suite Room Facade.jpg" alt="">
                </a>
              </div>
            </div>
            <div class="double__container">
              <div class="col-c-2">
                <a href="./assets/latest/Suite Room.jpg" data-lightbox="mygallery">
                  <img src="./assets/latest/Suite Room.jpg" alt="">
                </a>
              </div>
              <div class="col-c-2">
                <a href="./assets/latest/The Central Lawn 2.jpg" data-lightbox="mygallery">
                  <img src="./assets/latest/The Central Lawn 2.jpg" alt="">
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-12 col-lg-5 col-sm-12 about__2img__container">
          <img src="./assets/img/about/about.JPG" class="img-fluid" alt="">
        </div>

      </div>
    </div>
  </section>
  <section class="event__wrapper" data-aos="fade-up" data-aos-offset="300">
    <div class=" container swiper__box">
      <div class="swiper mySwiperEvent">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="slider__container">
              <div class="img__container">
                <img src="./assets/latest/Suite Facade - Daytime.jpg" alt="">
              </div>
              <div class="content__container">
                <h3 class="event__caption"> Family Getaway</h3>
                <p class="event__content__desc">Create memorable moments with a multitude of offerings, all under one
                  roof. Families and couples can
                  check in for a luxurious stay to unwind and rediscover moments of togetherness.
                  Embark on a jungle safari ride, witness wildlife, spectacular views and,enjoy at the riverside grill
                  restaurant, savouring freshly handmade wood fired pizza
                </p>
                <!-- <a href="" class="main__btn">Discover Now</a> -->
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="slider__container">
              <div class="img__container">
                <img src="./assets/img/about/confrence.jpeg" alt="">
              </div>
              <div class="content__container">
                <h3 class="event__caption">Business Meet</h3>
                <p class="event__content__desc"> A perfect venue with state-of-the-art equipment to host conferences,
                  offsite meeting and bespoke
                  events at Corbett! We offer a plethora of indoor and outdoor event venues and banquet halls, along
                  with spacious lawns, performance deck and amphitheatre within the resorts premises. Our skilled event
                  planning team and F&B experts also provide recommendations and advice to make your guests swoon! </p>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="slider__container">
              <div class="img__container">
                <img src="./assets//latest/4.png" alt="">
              </div>
              <div class="content__container">
                <h3 class="event__caption">Destination Wedding</h3>
                <p class="event__content__desc"> The wide open lush green Central Lawns surround with easy access to
                  rooms is said to be a fairytale
                  setting for a large reception. The warm hospitality and an experience of decades at hosting wedding
                  and other grand events make Corbett Aamod Resort & Spa, an impeccable venue for destination wedding in
                  India. </p>
                  <a href="http://corbettswedding.com/" class="main__btn">Discover More</a>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <!-- <div class="swiper-pagination"></div> -->
      </div>
  </section>
  <!-- About section exit -->

  <!-- Rooms section -->
  <section class="rooms__wrapper" id="rooms">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 mb-3">
          <h6 class="text-center fw-bold fs-3">Our Rooms</h6>
        </div>
      </div>
      <div class="row m-0 ">
        <div class="col-md-6  mb-3" data-aos="fade-right" data-aos-offset="200" data-aos-easing="ease-in-sine">
          <div class="room__item">
            <img src="./assets/img/room/suite.jpeg" class="img-fluid" alt="room images here">
            <div class="room__item__wrapper">
              <div class="room__content">
                <h5 class="text-white mb-lg-5 text-decoration-underline">Family Accommodation</h5>
                <p class="text-white">A spacious suite room that has a comfortable bed with a view of calming scenery that is accentuated by an abundance of natural light and a mountain range view.</p>
                <a href="#booknow" class="main-btn border-white text-white mt-lg-5">Book Now</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6  mb-3 " data-aos="fade-left" data-aos-offset="200" data-aos-easing="ease-in-sine">
          <div class="room__item">
            <img src="./assets/img/room/delux.jpeg" class="img-fluid" alt="room images here">
            <div class="room__item__wrapper">
              <div class="room__content">
                <h5 class="text-white mb-lg-5 text-decoration-underline">Delux Accommodation</h5>
                <p class="text-white">Spacious, well appointed rooms with all modern amenities, overlooking the Himalayan range and the lush green lawns
                </p>
                <a href="#booknow" class="main-btn border-white text-white mt-lg-5">Book Now</a>
              </div>
            </div>
          </div>
        </div>
        <!-- <div class="col-md-4  mb-3">
          <div class="room__item">
            <img src="./assets/img/room/room3.webp" class="img-fluid" alt="room images here">
            <div class="room__item__wrapper">
              <div class="room__content">
                <h5 class="text-white mb-lg-5 text-decoration-underline">Royal Stay</h5>
                <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, earum.</p>
                <p class="text-white fw-bold mt-lg-4">₹2000 / Per night</p>
                <a href="#" class="main-btn border-white text-white mt-lg-5">Book Now</a>
              </div>
            </div>
          </div>
        </div> -->
      </div>
    </div>
  </section>

  <!-- Rooms Section Exit -->

  <!-- Services section -->
  <section class="services__wrapper" id="services" data-aos="fade-up" data-aos-offset="300">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 mb-3">
          <h6 class="text-center fw-bold fs-3">Our Experiences</h6>
        </div>
      </div>
      <div class="row align-items-center service__item__wrap">
        <div class="col-lg-7 p-lg-0">
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="spa" role="tabpanel">
              <img src="./assets/img/services/spa.png" class="img-fluid" alt="">
            </div>
            <div class="tab-pane fade" id="resturant" role="tabpanel">
              <img src="./assets/img/services/rest.png" class="img-fluid" alt="">
            </div>
            <div class="tab-pane fade" id="swimming" role="tabpanel">
              <img src="./assets/img/services/pool.png" class="img-fluid" alt="">
            </div>
            <div class="tab-pane fade" id="conference" role="tabpanel">
              <img src="./assets/img/services/conf.png" class="img-fluid" alt="">
            </div>
          </div>
        </div>
        <div class="col-lg-5 position-relative  service__content">
          <div class="service__menu__area">
            <ul class="nav">
              <li>
                <a href="#spa" data-bs-toggle="tab" class="active">
                  <span class="service__icon">
                    <img src="./assets/img/services/service-icon1.webp" alt="">
                  </span>
                  <h5>Health &amp; Wellness</h5>
                  <p>Whether you’ve got a weekend, a week or a whole month to shape up, slow down or simply bliss out,
                    we’ve got state of the art gym and spa to make it happen</p>
                </a>
              </li>
              <li>
                <a href="#resturant" data-bs-toggle="tab">
                  <span class="service__icon">
                    <img src="./assets/img/services/service-icon2.webp" alt="">
                  </span>
                  <h5>Food</h5>
                  <p>Enjoy lip-smacking cuisines from all over the world by our executive chefs, we have a separate
                    vegetarian kitchen and a riverside grill restaurant to boost</p>
                </a>
              </li>
              <li>
                <a href="#swimming" data-bs-toggle="tab">
                  <span class="service__icon">
                    <img src="./assets/img/services/service-icon3.webp" alt="">
                  </span>
                  <h5>Outdoors</h5>
                  <p>Take a plunge at the Aqua pool and sunken bar. Enjoy live performances at the amphitheatre,
                    Indulge in star gazing at nights</p>
                </a>
              </li>
              <li>
                <a href="#conference" data-bs-toggle="tab">
                  <span class="service__icon">
                    <img src="./assets/img/services/service-icon4.webp" alt="">
                  </span>
                  <h5>Events</h5>
                  <p>Impress your guests with our banquets that provide great venues for iconic celebrations, memorable
                    weddings and bespoke events</p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>
  <!-- Services section Exit -->

  <!-- Gallery section -->
  <section class="gallery__container" id="gallery" data-aos=" fade-up">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 mb-3">
          <h6 class="text-center fw-bold fs-3">Gallery</h6>
        </div>
      </div>
      <div class="gallery__box ">
        <div class=" image__box">
          <div class="image__container">
            <div class="image__item restaurant-veda">
              <a href="./assets/latest/Aqua - Swimming Pool.jpg" data-lightbox="mygallery">
                <img src="./assets/latest/Aqua - Swimming Pool.jpg" alt="">
              </a>
            </div>
            <div class="image__item riverside-grill">
              <a href="./assets/latest/Deluxe Room Facade.jpg" data-lightbox="mygallery">
                <img src="./assets/latest/Deluxe Room Facade.jpg" alt="">
              </a>
            </div>
            <div class="image__item riverside-grill">
              <a href="./assets/latest/Deluxe Room Pathway.jpg" data-lightbox="mygallery">
                <img src="./assets/latest/Deluxe Room Pathway.jpg" alt="">
              </a>
            </div>
            <div class="image__item riverside-garden">
              <a href="./assets/latest/Lobby Daytime.jpg" data-lightbox="mygallery">
                <img src="./assets/latest/Lobby Daytime.jpg" alt="">
              </a>
            </div>
            <div class="image__item Central-lawn">
              <a href="./assets/latest/Mango Tree Lawn.jpg" data-lightbox="mygallery">
                <img src="./assets/latest/Mango Tree Lawn.jpg" alt="">
              </a>
            </div>
            <div class="image__item the-deck">
              <a href="./assets/latest/Suite Balcony View.jpg" data-lightbox="mygallery">
                <img src="./assets/latest/Suite Balcony View.jpg" alt="">
              </a>
            </div>
            <div class="image__item mangrove-lawn">
              <a href="./assets/latest/Suite Room Facade - Night time.jpg" data-lightbox="mygallery">
                <img src="./assets/latest/Suite Room Facade - Night time.jpg" alt="">
              </a>
            </div>
            <div class="image__item banquet-1">
              <a href="./assets/latest/Suite Room Facade.jpg" data-lightbox="mygallery">
                <img src="./assets/latest/Suite Room Facade.jpg" alt="">
              </a>
            </div>
            <div class="image__item amphitheatre">
              <a href="./assets/latest/Suite Room.jpg" data-lightbox="mygallery">
                <img src="./assets/latest/Suite Room.jpg" alt="">
              </a>
            </div>
            <div class="image__item mango-grove">
              <a href="./assets/latest/2.png" data-lightbox="mygallery">
                <img src="./assets/latest/2.png" alt="">
              </a>
            </div>
            <div class="image__item banquet-2">
              <a href="./assets/latest/The Central Lawn.jpg" data-lightbox="mygallery">
                <img src="./assets/latest/The Central Lawn.jpg" alt="">
              </a>
            </div>
            <div class="image__item banquet-2">
              <a href="./assets/latest/1.png" data-lightbox="mygallery">
                <img src="./assets/latest/1.png" alt="">
              </a>
            </div>
            <div class="image__item banquet-2">
              <a href="./assets/latest/RIVER.jpg" data-lightbox="mygallery">
                <img src="./assets/latest/RIVER.jpg" alt="">
              </a>
            </div>
            <div class="image__item banquet-2">
              <a href="./assets/latest/3.png" data-lightbox="mygallery">
                <img src="./assets/latest/3.png" alt="">
              </a>
            </div>
            <div class="image__item banquet-2">
              <a href="./assets/latest/4.png" data-lightbox="mygallery">
                <img src="./assets/latest/4.png" alt="">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>
  <!-- Gallery Section Exit -->

  <!-- Contact section  -->
  <section class="contact__wrapper" id="contact" data-aos="fade-up">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 mb-3">
          <h6 class="text-center fw-bold fs-3">Contact Us</h6>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3473.688429056395!2d79.1455590144773!3d29.467107152569767!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390a139c086babf1%3A0xb3f20f4ffc92ede0!2sCorbett%20Aamod%20Spa%20%26%20Resort!5e0!3m2!1sen!2sin!4v1662984731341!5m2!1sen!2sin"
            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade" class=" rounded"></iframe>
        </div>
      </div>
      <div class="row gy-4 py-5 justify-content-center align-items-center">
        <div class="col-lg-6" data-aos="fade-right" data-aos-offset="200" data-aos-easing="ease-in-sine">
          <div class="row gy-4">
            <div class="col-md-12 shadow-sm">
              <div class="info__box">
                <i class="fas fa-map-marker-alt"></i>
                <h4>Address</h4>
                <p>Jim Corbett National Park
                  Village - Dhikuli, Ramnagar
                  District - Nainital, Uttarakhand
                  Pin- 244725</p>
              </div>
            </div>
            <div class="col-md-12 shadow-sm">
              <div class="info__box">
                <i class="fas fa-phone-alt"></i>
                <h4>Call Us</h4>
                <p>+91-9266666904, +91-9266666908, +91-9568500041</p>
              </div>
            </div>
            <div class="col-md-12 shadow-sm">
              <div class="info__box">
                <i class="fas fa-envelope"></i>
                <h4>Email Us</h4>
                <p>reservation@anandhotelsandresort.com <br> contact@anandhotelsandresort.com</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 form" data-aos="fade-left" data-aos-offset="200" data-aos-easing="ease-in-sine">
          <div class="container">
            <form method="POST" action="./contact.php">
              <div class="row">
                <div class="col">
                  <h5 class="text-center justify-content-center align-items-center my-5">Send us a Message</h5>
                </div>
              </div>
              <div class="row mb-4">
                <div class="col">
                  <input type="text" name="Name" class="form-control shadow-sm" placeholder="Full name" required>
                </div>
                <div class="col">
                  <input type="email" name="Email" class="form-control shadow-sm" placeholder="Email" required>
                </div>
              </div>
              <div class="row mb-4">
                <div class="col">
                  <input type="tel" maxlength="10" name="Number" class="form-control shadow-sm"
                    placeholder="Phone Number" required>
                </div>
              </div>
              <div class="row mb-4">
                <div class="col">
                  <input type="text" name="Subject" class="form-control shadow-sm" placeholder="Subject" required>
                </div>
              </div>
              <div class="row mb-4">
                <div class="col">
                  <textarea style="resize: none; height: 150px;" class=" form-control  shadow-sm" name="Message"
                    placeholder="Your message" required></textarea>
                </div>
              </div>
              <div class="row d-flex align-items-center justify-content-center">
                <div class="col">
                  <button class="main__btn" name="submit" type="submit">Submit</button>
                </div>
              </div>
            </form>
            <p id="msg" class="message"></p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Contact section Exit -->

  <!-- Footer section -->
  <footer class="footer__wrapper">
    <div class="footer__content d-flex align-items-center justify-content-center text-center text-white py-3">
      <span class="fs-6">© Copyright <a href="#" class="color__font">Hotel Anand Aamod.</a> All Rights
        Reserved</span>
    </div>
  </footer>
  <!-- Footer section exit -->

  <!-- date picker script  -->

  <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>

  <!-- Bootstrap 5 JS CDN Links -->
  <script src=" https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>

  <!-- Swiper JS -->
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

  <!-- jquery cdn  -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <!-- magnific popup cdnjs 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script> -->

  <!-- Animate on scroll script -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

  <!-- Custom Js Link -->
  <script src="./assets/js/main.js"></script>
  <script src="./assets/js/lightbox-plus-jquery.min.js"></script>
</body>

</html>