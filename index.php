<?php
require 'databaseConfig.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['number']; // Hash the password for security

  // Validate and sanitize input as needed

  // Insert data into the database
  $query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
  mysqli_query($conn, $query);

  // Close the database connection
  mysqli_close($conn);
  $url = "https://www.youtube.com/embed/0AWIAxqKeNY";
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pipskart</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css?v=1.2" rel="stylesheet">
  <!-- whatsapp -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

  <!-- Owl Carousel CSS -->
  <link rel="stylesheet" href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.carousel.min.css">

  <link rel="stylesheet" href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.theme.default.min.css">







</head>

<body>
  <a href="https://chat.whatsapp.com/DnZuUuk5eN1ENX3sdSYN3T" class="float" target="_blank">
    <i class="fa fa-whatsapp my-float"></i>
  </a>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container-fluid d-flex align-items-center justify-content-between " style="height: 80;">

      <div class="logo d-flex">
        <img src="assets/img/logo 2.png" alt="">
        <h1 class="text-light"><a href="index.html"><span>PIPSKART </span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>



    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="container-fluid d-flex align-items-center">

    <div class="container-fluid">
      <div class="row ">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1>INDIA’S LEADING FOREX TRADING COMMUNITY</h1>
          <h2>We have helped 100+ Traders achieve mind blowing trading results by helping them understand the real
            reason behind big price moves through smart money concepts</h2>
          <div>
            <a href="#about" class="btn-get-started" onclick="openForm()">Register Now</a>
            <a href="#about" class=" btn2 scrollto">Know More</a>
          </div>

        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img">
          <img src="assets/img/RocketDollar 1.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">
    <div class=" d-none d-md-block container-fluid p-0">
      <iframe width="1920" height="1080" src="https://youtube.com/embed/PGf0yzYZWww?feature=share&rel=0" allowfullscreen="true">
      </iframe>
    </div>
    <div class=" d-block d-md-none container-fluid p-0">
      <iframe width="430" height="800" src="https://youtube.com/embed/wJrUtyl9Hvo?feature=share&rel=0" allowfullscreen="true">
      </iframe>
    </div>
    <div class="call-to-action" style="background-color: white;color:black;">
      <h2>Seats Are Filling Very Fast</h2>
      <div class="timer" id="timer"></div>
      <br>
      <button href="" class="btn-get-started scrollto" onclick="openForm()" id="registerBtn">Register Now At Just Rs. 999</button>
    </div>



    <!-- ======= About Section ======= -->
    <section id="" class="container about mb-5">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-lg-5 d-flex align-items-center justify-content-center about-img">
            <img src="assets/img/money1.PNG" class="img-fluid" alt="" data-aos="zoom-in" style="border-radius: 25px;">
          </div>
          <div class="col-lg-7 pt-5 pt-lg-0 d-flex justify-content-center flex-column">
            <h3 data-aos="fade-up">Accelarate Growth</h3>
            <p data-aos="fade-up" data-aos-delay="100">
              The pipskart's trading course offers comprehensive learning opportunities for understanding the forex
              market fundamentals. From grasping the inner workings of the market to implementing logical thinking for
              potential earnings, our streamlined strategies aim to empower you, fostering financial independence
            </p>
          </div>
        </div>
        <div class="row justify-content-between mt-5 ">
          <div class="col-lg-7 pt-5 pt-lg-0 d-flex justify-content-center flex-column">
            <h3 data-aos="fade-up">Forex trading, Simplified like never before</h3>
            <p data-aos="fade-up" data-aos-delay="100">
              Over time, pipskart's approach to trading has evolved, and we believe that individuals without prior
              experience or market knowledge can achieve consistent profitability and positively transform their
              financial circumstances through learning from our program.
            </p>
          </div>
          <div class="col-lg-5 d-flex align-items-center justify-content-center about-img">
            <img src="assets/img/AccGrth.PNG" class="img-fluid" alt="" data-aos="zoom-in" style="border-radius: 25px;">
          </div>
        </div>
      </div>
    </section><!-- End About Section -->




    <!-- ======= Services Section ======= -->
    <section id="services" class="container services section-bg mb-5">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <p>After attending this webinar you will able to ,</p>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-4 d-flex " data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title"><a href="">Generate Upto 8% - 12% Monthly Returns Consistently.</a></h4>

            </div>
          </div>
          <div class="col-md-6 col-lg-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="">Trade Big Moves Before They Happen.</a></h4>

            </div>
          </div>
          <div class="col-md-6 col-lg-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title"><a href="">Trade Like A Professional Forex Trader.</a></h4>

            </div>
          </div>
        </div>
      </div>
    </section><!-- End Services Section -->









    <!-- ======= What to expect Section ======= -->
    <section id="services" class="container services section-bg mb-5">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <p>What to expect from this Webinar ? </p>
        </div>
        <div class="row">
          <div class="col-md-7 col-lg-7 left-text " data-aos="zoom-in" data-aos-delay="100">
            <div class="text-points">
              <div class="px-4  ">
                <img src="assets/img/Frame.jpg" style="width: 10;"></img>
              </div>
              <h4>2 day live webinar</h4>
            </div>
            <div class="text-points">
              <div class="px-4 ">
                <img src="assets/img/Frame.jpg" style="width: 10;"></img>
              </div>
              <h4> Learn smart money concepts from basics</h4>
            </div>
            <div class="text-points">
              <div class="px-4">
                <img src="assets/img/Frame.jpg" style="width: 10;"></img>
              </div>
              <h4> 2 Live QnA session at the end of each day</h4>
            </div>
            <div class="text-points">
              <div class="px-4">
                <img src="assets/img/Frame.jpg" style="width: 10;"></img>
              </div>
              <h4>Get Free E-book</h4>
            </div>
            <div class="text-points">
              <div class="px-4">
                <img src="assets/img/Frame.jpg" style="width: 10;"></img>
              </div>
              <h4>Access to Community on WhatsApp for daily Forex and Indian Market updates</h4>
            </div>
          </div>
          <div class="col-md-5 col-lg-5 " data-aos="zoom-in" data-aos-delay="200">
            <div class="expect-img">
              <img src="assets/img/Group 1.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End What to expect Section -->




    <!-- ======= What u will learn in this seminar Section ======= -->
    <section id="services" class="services section-bg mb-5">
      <div class="container testimonial-section" data-aos="fade-up">
        <div class="section-title">
          <p>What will you learn in this seminar ? </p>
        </div>
        <div class="row section-6">
          <div class="col-md-6 col-lg-4 " data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box" id="faq-card">
              <img src="assets/img/Speech_Bubble.jpg" alt="">
              <h4 class="title"><a href="">Why retail traders lose in the market?</a></h4>
              <h6 class="sub-title">Retail trading is inefficient when it comes to making big in the trading journey. Retail trading is based on indicators and patterns which do not provide the desired outcomes. It is a trap made by the elites, only to take out your stoploss.
                The answer to success in market is institutional trading. Institutional trading is the future of trading.</h6>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box" id="faq-card">
              <img src="assets/img/Speech_Bubble.jpg" alt="" style="width: 70;">
              <h4 class="title"><a href="">How can I know where the institutions are entering in the market ?</a></h4>
              <h6 class="sub-title">Research shows that of all the orders in the financial markets more than 79% orders are executed by algorithms. This is exactly how the institutions place their orders & while doing so they leave behind some footprints which we can spot to analyze the next entry of an institutional entity.</h6>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box" id="faq-card">
              <img src="assets/img/Speech_Bubble.jpg" alt="" style="width: 70;">
              <h4 class="title"><a href="">How can you catch the big moves before they happen ?</a></h4>
              <h6 class="sub-title">Professional traders grasp retail tactics, such as chart patterns, to exploit market traps. Mastering institutional order flow empowers you to navigate trades seamlessly, aligning with major players like James Bond.</h6>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End What u will learn in this seminar Section -->

    <div class="call-to-action container-fluid">

      <div class="webinar-details">
        <h3>Webinar Date : 20th and 21st Jan, 2024</h3>
        <h3>Webinar Time : 2PM to 5PM</h3>
      </div>

      <br>
      <button href="" class="btn-get-started scrollto" onclick="openForm()" id="registerBtn">Register Now At Just <span style="font-weight: 550;">Rs. 2499</span><br> Rs. 999 </button>
      <br>
      <h3>Book Seat now to get <span class="">40% DISCOUNT + Free Consultation Call</span> </h3>
    </div>







    <!-- Fixed Icon boxes -->
    <div class="container mt-5">
      <div class="section-title">
        <p>Meet your coaches </p>
      </div>
      <div class="row" id="iconBoxContainer">
        <div class="large-12 columns">
          <div class="owl-carousel owl-theme">
            <div class="item" style="margin: 20px 20px;">
              <div class=" icon-box" data-aos="zoom-in" data-aos-delay="100">
                <div class="avatar"><img src="assets/img/Sayali Dhole.jpeg" alt="" style="width: 90px; height:90px; border-radius:50px;border:8px solid white "></div>
                <h4 class="title"><a href="#">Sayali Dhole</a></h4>
                <p class="description">well, what can I say? I genuinely have no words because of the support and feeling of companionship I've felt whenever I've been in class, even support for after class has been great for me.

                  from me, I would like to give 10/10. For me, It's ⭐⭐⭐⭐⭐</p>
              </div>
            </div>
            <div class="item">
              <div class=" icon-box" data-aos="zoom-in" data-aos-delay="200">
                <div class="icon"><img src="assets/img/Tejas_review.png" alt="" style="width: 110px; height:110px; border-radius:50px; "></div>
                <h4 class="title"><a href="#">Rushikesh</a></h4>
                <p class="description">Akshat sir I'm so glad that I you and joined pipskart's forex masterclass. Before joining the class I didn't have any clarity in my life regrading future . But now I'm kind of clear what I have to pursue in my life.😊Thanks to you. <br>⭐⭐⭐⭐</p>
              </div>

            </div>
            <div class="item">
              <div class=" icon-box" data-aos="zoom-in" data-aos-delay="300">
                <div class="icon"><img src="assets/img/Sanika Pawar.jpeg" alt="" style="width: 90px; height:90px; border-radius:50px; border:8px solid white"></div>
                <h4 class="title"><a href="#">Sanika Pawar</a></h4>
                <p class="description">So talking about your teaching is best and you are covering each and every topic from scratch and explaining the same with the same energy even if we ask it 10 times ...And never felt bothered to ask a little or even so basic questions. <br>⭐⭐⭐⭐⭐</p>
              </div>
            </div>
            <div class=" item">
              <div class="  icon-box" data-aos="zoom-in" data-aos-delay="400">
                <div class="icon"><img src="assets/img/Anurag Kale.jpeg" alt="" style="width: 90px; height:90px; border-radius:50px;border:8px solid white "></div>
                <h4 class="title"><a href="#">Anurag kale</a></h4>
                <p class="description">Pipskart's program fosters financial independence through mentorship, not just education. Instructors guide a transformative journey, adapting course material to market dynamics. It equips you with skills for a dynamic market, and ongoing support ensures a continuous learning process beyond course completion. <br>⭐⭐⭐⭐</p>
              </div>
            </div>
            <div class=" item">
              <div class=" icon-box" data-aos="zoom-in" data-aos-delay="500">
                <div class="icon"><img src="assets/img/Rushikesh.png" alt="" style="width: 110px; height:110px; border-radius:50px; "></div>
                <h4 class="title"><a href="#">Tejas</a></h4>
                <p class="description">The pipskart's trading course offers comprehensive learning opportunities for understanding the forex market fundamentals. From grasping the inner workings of the market to implementing logical thinking for potential earnings, our streamlined strategies aim to empower you, fostering financial independence <br>⭐⭐⭐⭐⭐</p>
              </div>
            </div>
            <div class=" item">
              <div class=" icon-box" data-aos="zoom-in" data-aos-delay="500">
                <div class="icon"><img src="assets/img/Rushikesh.png" alt="" style="width: 110px; height:110px; border-radius:50px; "></div>
                <h4 class="title"><a href="#">Tejas</a></h4>
                <p class="description">The pipskart's trading course offers comprehensive learning opportunities for understanding the forex market fundamentals. From grasping the inner workings of the market to implementing logical thinking for potential earnings, our streamlined strategies aim to empower you, fostering financial independence <br>⭐⭐⭐⭐⭐</p>
              </div>
            </div>
            <div class=" item">
              <div class=" icon-box" data-aos="zoom-in" data-aos-delay="500">
                <div class="icon"><img src="assets/img/Rushikesh.png" alt="" style="width: 110px; height:110px; border-radius:50px; "></div>
                <h4 class="title"><a href="#">Tejas</a></h4>
                <p class="description">The pipskart's trading course offers comprehensive learning opportunities for understanding the forex market fundamentals. From grasping the inner workings of the market to implementing logical thinking for potential earnings, our streamlined strategies aim to empower you, fostering financial independence <br>⭐⭐⭐⭐⭐</p>
              </div>
            </div>

              
          </div>
        </div>
      </div>
    </div>


    <!-- End review Section -->





    <!-- Co-founders info start-->
    <section id="services" class=" container services section-bg mb-5">
      <div class="container testimonial-section" data-aos="fade-up">
        <div class="section-title">
          <p>Meet your coaches </p>
        </div>
        <div class="section-7">
          <div class="row col-md-12 col-lg-12 item-1 " data-aos="zoom-in" data-aos-delay="100">
            <div class="container col-lg-7">
              <h2>SORAB</h2>
              <h5>CEO & Founder at Pipskart</h5>
              <p>Hello Everyone !
                I am Sorab, Founder & Managing Director at Pipskart. I am a Full Time Forex Trader, Investor, Mentor
                having trained over hundreds of students the art of Forex trading from absolute basics. My Mission is to
                Educate, Train, Fund & help traders all over India</p>
            </div>
            <div class="section7-img col-lg-5">
              <img src="assets/img/Sourabh.png" alt="" style="width: 70;">
            </div>
          </div>
          <br>
          <br>
          <div class="row col-md-12 col-lg-12 item-1 " data-aos="zoom-in" data-aos-delay="100">
            <div class="section7-img col-lg-5">
              <img src="assets/img/Akshat.png" alt="" style="width: 70;">
            </div>
            <div class="container col-lg-7">
              <h2>AKSHAT</h2>
              <h5>CFO & Founder at Pipskart</h5>
              <p>
                Hey Folks !
                I am Akshat, a seasoned full-time Forex trader with a passion for precision and profit. With nearly 3
                years of hands-on experience navigating the dynamic currency markets, I am dedicated to sharing my
                expertise and insights, empowering traders to thrive in the world of Forex.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Co-founders info end-->




    <div class="container mt-5">
      <div class="section-title">
        <p>Get ready to be blown away with our LIVE TRADES </p>
      </div>
      <div class="stock-img">
        <div class="row stock-items">
          <div class=" stock-item">
            <p>XAU/USD</p><img src="assets/img/image_1.png" alt="">
          </div>
          <div class="  stock-item">
            <p>EUR/JPY</p><img src="assets/img/image_2.png" alt="">
          </div>
          <div class="  stock-item">
            <p>USD/JPY</p><img src="assets/img/image_3.png" alt="">
          </div>
        </div>
      </div>

    </div>


    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class=" container faq section-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <p>Frequently Asked Questions</p>
        </div>
        <ul class="faq-list" data-aos="fade-up" data-aos-delay="100">
          <li>
            <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">How long the webinar will be? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq1" class="collapse" data-bs-parent=".faq-list">
              <p>
                The webinar will be of two days, 3 hours per day.
              </p>
            </div>
          </li>
          <li>
            <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">How can I contact the company once
              I've paid the fees? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq2" class="collapse" data-bs-parent=".faq-list">
              <p>
                Kindly send a screenshot of your payment confirmation & your email address & phone number used while
                making a payment. A client manager will be assigned to help you in every aspect of your journey with us.
                You can always call us on “9359558997” & mail us at ______________
              </p>
            </div>
          </li>
          <li>
            <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">what’s your membership fees? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq3" class="collapse" data-bs-parent=".faq-list">
              <p>
                - The cost for webinar is only ₹999/-
                Our Forex Masterclass fee is only ₹17,999/-
              </p>
            </div>
          </li>
          <li>
            <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">Is the training beginner friendly? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq4" class="collapse" data-bs-parent=".faq-list">
              <p>
                Yes, we have designed all of our courses & webinars in such a way it takes you from very basics to
                advanced levels in a very simple, clear & friendly language that even a school kid can learn without any
                prior financial knowledge, so that you won't feel left out.
              </p>
            </div>
          </li>
          <li>
            <div data-bs-toggle="collapse" href="#faq5" class="collapsed question">Are the mentors qualified enough? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq5" class="collapse" data-bs-parent=".faq-list">
              <p>
                The mentors has rich experience in the forex trading. Having learnt from veterans in the field of forex
                market, mentors have adapted a unique and effective approach with their own powerful strategies using
                which anyone can make money consistently from forex trading. You can find more about your mentors on
                instagram “@the.akshatkatarnavare” & “@sorab_7”
              </p>
            </div>
          </li>
          <li>
            <div data-bs-toggle="collapse" href="#faq6" class="collapsed question">Is trading risky? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq6" class="collapse" data-bs-parent=".faq-list">
              <p>
                Yes, it is risky for those who trade without any proper knowledge and training.
              </p>
            </div>
          </li>
        </ul>
      </div>
    </section>
    <!-- End F.A.Q Section -->

    <section id="services" class="services section-bg mb-5">
      <div class="container testimonial-section" data-aos="fade-up">
        <div class="section-title">
          <p>Stay Connected with this </p>
          <h4>Follow our social handles, to latest updates and trading geeks</h4>
        </div>
        <div class="socials-connect">
          <a href="https://instagram.com/pipskart?igshid=OGQ5ZDc2ODk2ZA==" target="_blank"> <img src="assets/img/Instagram3D 1.png" alt=""></a>
          <a href=""><img src="assets/img/Facebook3D 1.png" alt=""></a>
          <a href=""> <img src="assets/img/Linkedin3D 1.png" alt=""></a>
          <a href="https://t.me/pipskart" target="_blank"> <img src="assets/img/Telegran3D 1.png" alt=""></a>
          <a href="https://x.com/pipskart?s=11" target="_blank"><img src="assets/img/Twitter3D 1.png" alt=""></a>
          <a href="https://youtube.com/@Pipskart?si=x76Gb-VZw_s3Ov49" target="_blank"> <img src="assets/img/Youtube3D 1.png" alt=""></a>
        </div>
      </div>
    </section>

  </main><!-- End #main -->







  <div id="overlay"></div>

  <div id="popup-form">
    <div class="head-title">

    </div>


    <form id="myForm" action="register.php" enctype="multipart/form-data" method="post">

      <input type="hidden" name="step" value="step1" id="step">
      <div class="form-step active" id="step1">
        <h2>Register</h2>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" placeholder="Enter Name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="Enter mail" required>

        <label for="number">Number:</label>
        <input type="tel" id="number" name="number" placeholder="Enter Whatsapp Number" required>

        <div class="buttons-step1">
          <!-- <button class="btn-next" type="button" onclick="nextStep('step1', 'step2')">Next</button> -->
          <button class="btn-apply" type="button" onclick="register()">Register</button>
        </div>
      </div>
    </form>
    <form id="myForm" action="submit.php" enctype="multipart/form-data" method="post">

      <div class="form-step" id="step2">
        <h2>Initiate Your Booking</h2>
        <h5>Confirm your Registration</h5>


        <label for="phone_step2">Verify Phone Number:</label>
        <input type="tel" id="phone_step2" name="phone_step2" required>
        <h5>Make Payment Via : </h5>

        <div class="QR-img my-2">
          <img src="assets/img/QR Code.jpeg" alt="">
        </div>
        <!-- <div class="QR-img my-2">
          <img src="assets/img/QR Code.jpeg" alt="">
        </div> -->

        <br><br>
        <label for="photo">Upload Transaction Screenshot of Payment : </label>
        <!-- <input type="file" id="photo" name="photo" accept="image/*" required> -->
        <input id="photo" type="file" accept="image/*" />

        <img id="preview" style="display:none; max-width: 100%; max-height: 200px; margin-top: 10px;">

        <div class="container ">
          <button class="btn-submit" type="button" onclick="submitForm()">Submit</button>
        </div>


        <!-- <button type="button" onclick="prevStep('step1', 'step2')">Previous</button> -->
      </div>
    </form>


  </div>



  <!-- 
  <div id="overlay"></div>

  <div id="popup-form">
    <form action="register.php" method="post" id="myForm">

      <h3 class="my-5">Register for your seat</h3>
  
      <label for="username">Full Name :</label>
      <input type="text" id="username" name="username" required placeholder="Enter Your Name">

      <label for="email">Email :</label>
      <input type="email" id="email" name="email" required placeholder="Enter Email">

      <label for="number">Phone Number :</label>
      <input type="number" id="number" name="number" required placeholder="Enter Phone Number">
      <div class="register">
        <button type="button" onclick="registerUser()">Register</button>
      </div>

    </form>
  </div> -->







  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container-fluid">
        <div class="row">

          <div class="col-lg-6 col-md-6 col-sm-12 footer-contact">
            <div class=" d-flex flex-column">
              <div class="d-flex justify-content-start align-items-center ">
                <img src="assets/img/logo 2.png" alt="">
                <h1 class="text-light" style="color: rgb(0, 0, 0);"><a href="index.html"><span>PIPSKART</span></a></h1>
              </div>

              <h5>Your Path to Proficiency in Financial Markets</h5>
              <p>
                "At PIPSKART,
We guide our students to reach financial proficiency with innovative education. With a mission to empower traders with essential skills, we cultivate astute investors.
Together, we unlock the doors to abundant opportunities, fostering sustainable wealth creation."</p>
              <!-- Uncomment below if you prefer to use an image logo -->
              <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>
            <p>

            </p>
          </div>

          <div class="col-lg-6 col-md-6 col-sm-12footer-links">
            <h6>

              Pipskart,<br> Baner, Pune <br>MH-India. <br><br>
              <strong>Phone : </strong> +91 9359558997<br>
              <strong>Email : </strong>pipskart.business@gmail.com<br>
            </h6>

          </div>





        </div>
      </div>
    </div>

    <div class="container py-4">
      <div class="copyright">
        &copy; Copyrights | 2023 | All Right Reserved
      </div>
      <div class="credits">
        <!-- Designed by <a href="https://pipskart.com/">Pipskart</a> -->
      </div>
    </div>
  </footer><!-- End Footer -->



  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js" integrity="sha512-Jw9IyVcOXwESJSx6pgQypXMT9P7XJ4PejZ7QJ0lZqkFu/axfFRCrHrpme5hPwnHJ8z6R9rBKP/3ZbX5Sh//ujQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <!-- Owl Carousel JavaScript -->
  <script src="https://owlcarousel2.github.io/OwlCarousel2/assets/vendors/jquery.min.js"></script>
  <script src="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/owl.carousel.js"></script>



  <script>
    // scroll
    const flavoursContainer = document.getElementById('iconBoxContainer');
    const flavoursScrollWidth = flavoursContainer.scrollWidth;

    window.addEventListener('load', () => {
      self.setInterval(() => {
        if (flavoursContainer.scrollLeft !== flavoursScrollWidth) {
          flavoursContainer.scrollTo(flavoursContainer.scrollLeft + 1, 0);
        }
      }, 15);
    });


    // script for timer
    document.addEventListener("DOMContentLoaded", function() {
      // Get the last stored timestamp from localStorage
      let lastTimestamp = localStorage.getItem("timerTimestamp");

      // Calculate the remaining time (changed to 15 minutes)
      let currentTime = new Date().getTime();
      let elapsedTime = currentTime - (lastTimestamp || 0);
      let remainingTime = Math.max(0, 15 * 60 * 1000 - elapsedTime); // Adjusted for 15 minutes

      // Display the timer
      displayTimer(remainingTime);

      // Update the timer every second
      setInterval(function() {
        remainingTime -= 1000;
        displayTimer(remainingTime);

        // If the timer reaches zero, reset the timer and update the localStorage
        if (remainingTime <= 0) {
          remainingTime = 15 * 60 * 1000; // Adjusted for 15 minutes
          localStorage.setItem("timerTimestamp", new Date().getTime());
        }
      }, 1000);

      // Function to display the timer
      function displayTimer(time) {
        let minutes = Math.floor(time / (60 * 1000));
        let seconds = Math.floor((time % (60 * 1000)) / 1000);

        document.getElementById("timer").innerHTML = `Time Remaining: ${formatTime(minutes)}:${formatTime(seconds)}`;
      }

      // Function to format time (add leading zeros)
      function formatTime(value) {
        return value < 10 ? `0${value}` : value;
      }
    });


    function openForm() {
      document.getElementById("popup-form").style.display = "block";
      document.getElementById("overlay").style.display = "block";
    }

    function closeForm() {
      document.getElementById("popup-form").style.display = "none";
      document.getElementById("overlay").style.display = "none";
      resetForm();
    }
    document.getElementById("overlay").addEventListener("click", function() {
      closeForm();
    });

    function nextStep(currentStep, nextStep) {
      document.getElementById(currentStep).classList.remove("active");
      document.getElementById(nextStep).classList.add("active");
    }

    function prevStep(currentStep, prevStep) {
      document.getElementById(currentStep).classList.remove("active");
      document.getElementById(prevStep).classList.add("active");
    }

    function register() {
      // Get form data
      const name = document.getElementById('name').value;
      const email = document.getElementById('email').value;
      const number = document.getElementById('number').value;

      if (!name || !email || !number) {
        alert("Please enter all required fields.");
        return;
      }

      // Send data to the server using AJAX
      const xhr = new XMLHttpRequest();
      xhr.open('POST', 'register.php', true);
      xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
      xhr.onreadystatechange = function() {
        if (xhr.readyState === 4) {
          // Display the server response (success or error)
          alert(xhr.responseText);

          // If registration is successful, proceed to the next step
          if (xhr.status === 200 && xhr.responseText.includes("Registered successfully!")) {
            nextStep('step1', 'step2');
          }
        }
      };

      // Prepare the data to be sent
      const data = `name=${encodeURIComponent(name)}&email=${encodeURIComponent(email)}&number=${encodeURIComponent(number)}&step=step1`;
      xhr.send(data);
    }

    function submitForm() {

      document.getElementById("myForm").submit();
      alert("Seat Booked Successfully!!")
      closeForm();
      window.location.href = 'index.php';




    }

    function resetForm() {
      document.getElementById("step1").classList.add("active");
      document.getElementById("step2").classList.remove("active");
      document.getElementById("preview").style.display = "none";
    }

    // Display the uploaded image preview
    document.getElementById("photo").addEventListener("change", function() {
      const fileInput = this;
      const preview = document.getElementById("preview");

      if (fileInput.files && fileInput.files[0]) {
        const reader = new FileReader();

        reader.onload = function(e) {
          preview.src = e.target.result;
          preview.style.display = "block";
        };

        reader.readAsDataURL(fileInput.files[0]);
      }
    });





    var owl = $('.owl-carousel');
    owl.owlCarousel({
      margin: 10,
      loop: true,
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 2
        },
        1000: {
          items: 3
        }
      }
    })
  </script>

</body>

</html>