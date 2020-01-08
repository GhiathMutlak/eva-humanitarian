<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <!-- Page Title -->
      <title>Prottasha - Bootstrap 4 Charity Landing Page</title>
      <!-- Favicon -->
   <link rel="icon" href="{{ asset('favicon.ico') }}" />
      <!---IcoFont Icon font-->
      <link rel="stylesheet" href="{{ asset('css/icofont.min.css') }}">
      <!-- Bootsrap CSS -->
      <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
	    <!-- Animate CSS -->
      <link href="{{ asset('css/animate.min.css') }}" rel="stylesheet">
      <!-- Magnific Popup core CSS -->
      <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
      <!-- Magnific Popup core CSS -->
      <link rel="stylesheet" href="{{ asset('css/modal-video.min.css') }}">
      <!-- Swiper CSS -->
      <link rel="stylesheet" href="{{ asset('css/swiper.min.css') }}">
      <!-- Theme Style -->
      <link rel="stylesheet" href="{{ asset('css/style.css') }}">
      <!-- Global margin paddings CSS -->
      <link rel="stylesheet" href="{{ asset('css/margin-paddings.css') }}">
      <!-- Animate CSS -->
      <link href="{{ asset('css/animate.min.css') }}" rel="stylesheet">
      <!-- Responsive CSS -->
      <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
      <link rel="stylesheet" href="{{ asset('css/colors/green.css') }}">
      <!-- teamplate colors -->
      <!-- <link href="css/colors/green.css" rel="stylesheet"> -->
      <!-- <link href="css/colors/blue.css" rel="stylesheet"> -->
      <!-- <link href="css/colors/orange.css" rel="stylesheet"> -->
      <!-- <link href="css/colors/purple.css" rel="stylesheet"> -->
      <!-- <link href="css/colors/pink.css" rel="stylesheet"> -->
      <!-- <link href="css/colors/brown.css" rel="stylesheet"> -->
      <!-- <link href="css/colors/light-green.css" rel="stylesheet"> -->
      <!-- <link href="css/colors/light-blue.css" rel="stylesheet"> -->
      <!-- <link href="css/colors/light-orange.css" rel="stylesheet"> -->
      <!-- <link href="css/colors/light-purple.css" rel="stylesheet"> -->
      <!-- <link href="css/colors/olive.css" rel="stylesheet"> -->
      <!-- <link href="css/colors/gold.css" rel="stylesheet"> -->
   </head>
   <body data-spy="scroll" data-target="#navbarCodeply" data-offset="70">
      <div id="preloader-wrap">
          <div class="preloader"></div>
      </div>
      
      <!-- ========== Header Nav Start ========== -->
      <header>
         <nav class="navbar navbar-inverse navbar-expand-lg header-nav fixed-top light-header">
            <div class="container">
               <a class="navbar-brand" href="#">
                  Prottasha
                  <!-- <img src="http://www.placehold.it/150x50" alt=""> -->
               </a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCodeply">
                  <i class="icofont-navigation-menu"></i>
               </button>
               <div class="collapse navbar-collapse" id="navbarCodeply">
                  <ul class="nav navbar-nav ml-auto">
                     <li>
                        <a class="nav-link" href="#home">Home</a>
                        <span class="sub-menu-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icofont-rounded-down"></i></span>
                        <ul class="sub-menu">
                           <li><a href="index.html">Home Option 1</a></li>
                           <li><a href="index-01.html">Home Option 2</a></li>
                           <li><a href="index-02.html">Home Option 3</a></li>
                           <li><a href="index-03.html">Home Option 4</a></li>
                        </ul>
                     </li>
                     <li><a class="nav-link" href="#about">About</a></li>
                     <li><a class="nav-link" href="#causes">Causes</a></li>
                     <li><a class="nav-link" href="#donate">Donate</a></li>
                     <li><a class="nav-link" href="#gallery">Gallery</a></li>
                     <li><a class="nav-link" href="#donors">Donors</a></li>
                     <li><a class="nav-link" href="#volunteers">Volunteers</a></li>
                     <li>
                        <a class="nav-link" href="#blog">Blog</a>
                        <span class="sub-menu-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icofont-rounded-down"></i></span>
                        <ul class="sub-menu">
                          <li><a href="blog-full.html">Blog Full</a></li>
                          <li><a href="blog-2-col.html">Blog 2 col</a></li>
                          <li><a href="blog-3-col.html">Blog 3 col</a></li>
                          <li><a href="single-blog.html">Single blog</a></li>
                          <li><a href="single-left-sidebar.html">Single left sidebar</a></li>
                          <li><a href="single-right-sidebar.html">Single right sidebar</a></li>
                       </ul>
                     </li>
                     <li><a class="nav-link" href="#contact">Contact</a></li>
                  </ul>
               </div>
            </div>
         </nav>
      </header>
      <!-- ========== Header Nav End ========== -->
      <!-- ========== Slider Start ========== -->
      <section id="home">
        <div class="swiper-container hero-swiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
            <div class="hero-area hero-slide" style="background-image:url(img/hero/women.jpg);">
              <div class="overlay overlay-5"></div>
              <div class="container">
                  <div class="row full-height align-items-center text-center">
                    <div class="col p-100px-t p-50px-b slider-text">
                        <h4>Prottasha for hopeless peoples</h4>
                        <div class="divider-circle mt-4"></div>
                        <h2 class="text-capitalize m-35px-tb">We give a helping hand for<br>hopeless peoples</h2>
                        <div class="hero-btn-wrapper">
                          <a href="#contact" class="btn btn-default btn-default-outline">Contact us</a>
                          <a class="btn btn-default" href="#">Donate now</a>
                        </div>
                    </div>
                  </div>
              </div>
            </div>
            </div>
            <!--End single slide -->

            <div class="swiper-slide">
            <div class="hero-area hero-slide" style="background-image:url(img/hero/homeless.jpg);">
              <div class="overlay overlay-5"></div>
              <div class="container">
                  <div class="row full-height align-items-center text-center">
                    <div class="col p-100px-t p-50px-b">
                        <h4>Prottasha for homeless peoples</h4>
                        <div class="divider-circle mt-4"></div>
                        <h2 class="text-capitalize m-35px-tb">We give a helping hand for<br>homeless peoples</h2>
                        <div class="hero-btn-wrapper">
                          <a href="#contact" class="btn btn-default btn-default-outline">Contact us</a>
                          <a class="btn btn-default" href="#">Donate now</a>
                        </div>
                    </div>
                  </div>
              </div>
            </div>
          </div>
          <!--End single slide -->

          <div class="swiper-slide">
            <div class="hero-area hero-slide" style="background-image:url(img/hero/relefe.jpg);">
              <div class="overlay overlay-5"></div>
              <div class="container">
                  <div class="row full-height align-items-center text-center">
                    <div class="col p-100px-t p-50px-b">
                        <h4>Prottasha for happy life</h4>
                        <div class="divider-circle mt-4"></div>
                        <h2 class="text-capitalize m-35px-tb">We give a helping hand for<br>happy life</h2>
                        <div class="hero-btn-wrapper">
                          <a href="#contact" class="btn btn-default btn-default-outline">Contact us</a>
                          <a class="btn btn-default" href="#">Donate now</a>
                        </div>
                    </div>
                  </div>
              </div>
            </div>
          </div>
          <!--End single slide -->

          </div>
          
          <div class="swiper-pagination"></div>
          <!-- Pagenation -->
        </div>

      </section>
      <!-- ========== Slider End ========== -->
      <!-- ========== About Start ========== -->
      <section id="about" class="p-80px-tb bg-light">
         <div class="container">
            <div class="row">
               <div class="col-md-6 col-sm-12 col-xs-12 align-self-center">
                  <img class="img-responsive" src="img/about-us.jpg" alt="Helping hands">
               </div>
               <div class="col-md-6 col-sm-12 col-xs-12 align-self-center">
                  <div class="about-box diffuse-shadow p-45px sm-p-25px bg-white">
                     <h2>About us</h2>
                     <div class="divider-dashed m-25px-b"></div>
                    <p>In on announcing if of comparison pianoforte projection. Maids hoped gay yet bed asked blind dried point. On abroad danger likely regret twenty edward do.</p><p>Too horrible consider followed may differed age. An rest if more five mr of. Age just her rank met down way. Attended required so in cheerful an. Domestic replying she resolved him for did.Rather in lasted no within no.
                     Style never met and those among great. At no or september sportsmen he perfectly happiness attending. Depending listening delivered off new she procuring satisfied sex existence.</p>Person plenty answer to exeter it if. Law use assistance especially resolution cultivated did out sentiments unsatiable. Way necessary had intention happiness but september delighted his curiosity. Furniture furnished or on strangers neglected remainder engrossed.</p>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- ========== About End ========== -->
      <!-- Video Section Start -->
      <section class="p-100px-tb overlay overlay-6 parallax" style="background-image:url(img/bg/video-promo.jpeg)">
         <div class="container">
            <div class="row">
               <div class="col-sm-8 offset-sm-2 text-center promo-video">
                  <h1 class="m-0px-b">Let's Learn more</h1>
                  <h4 class="m-30px-b sm-m-25px-b">Want to learn more about us? Let's check the video</h4>
                  <div class="video-btn">
                     <button class="js-modal-btn" data-video-id="QIYcFth8ty4">
                        <i class="icofont-video-alt"></i>
                     </button>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Video Section End -->
      <!-- ========== Causes Start ========== -->
      <section id="causes" class="p-80px-tb bg-white">
         <div class="container">
            <div class="row">
               <div class="col-sm-8 offset-sm-2">
                  <div class="section-title text-center m-60px-b">
                     <h2>Our recent causes</h2>
                     <div class="divider-circle mx-auto"></div>
                     <p>Lose away off why half led have near bed. At engage simple father of period others except. My giving do summer of though narrow marked at.</p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="swiper-container causes-swiper p-60px-b">
                  <div class="swiper-wrapper">
                       <!-- Single causes item start -->
                      <div class="swiper-slide">
                        <div class="col">
                              <article class="content-box diffuse-shadow bg-light p-10px">
                                 <div class="btn-relative-img text-center overlay overlay-5">
                                    <img src="img/causes/1.jpg" alt="">
                                    <div class="lightbox-icons">
                                       <a href="img/causes/1.jpg" class="causes-lightbox" title="Donate for victims">
                                        <i class="icofont-image"></i>
                                       </a>
                                       <button class="js-modal-btn" data-video-id="QIYcFth8ty4">
                                       <i class="icofont-video-alt"></i>
                                       </button>
                                       <a href="causes-detail.html">
                                       <i class="icofont-external-link"></i>
                                       </a>
                                    </div>
                                    <a href="donate.html" class="btn btn-default btn-small">Donate</a>
                                 </div>
                                 <div class="content-area mt-2 p-10px">
                                    <h3><a href="donate.html">Donate for helpless</a></h3>
                                    <p>Much evil soon high in hope do view. Out may few northward.</p>
                                 </div>
                                 <div class="progress-bars m-35px-b m-10px-t p-10px-l p-10px-r">
                                    <div class="progress">
                                       <div class="progress-bar" data-value="30" style="width: 30%;"><span>30%</span></div>
                                    </div>
                                 </div>
                                 <footer class="content-footer p-10px-l p-10px-r">
                                    <p class="content-raised">
                                       Raised:<br><b>$1,299</b>
                                    </p>
                                    <p class="content-goal">
                                       Goal:<br><b>$12,000</b>
                                    </p>
                                    <p class="content-raised">
                                       Donors:<br><b>14 Donors</b>
                                    </p>
                                    <p class="content-goal">
                                       Time left:<br><b>222 days</b>
                                    </p>
                                 </footer>
                              </article>
                          </div>
                      </div>
                       <!-- Single causes item end -->
                       <!-- Single causes item start -->
                      <div class="swiper-slide">
                        <div class="col">
                              <article class="content-box diffuse-shadow bg-light p-10px">
                                 <div class="btn-relative-img text-center overlay overlay-5">
                                    <img src="img/causes/2.jpg" alt="">
                                    <div class="lightbox-icons">
                                       <a href="img/causes/2.jpg" class="causes-lightbox" title="Donate for victims">
                                       <i class="icofont-image"></i>
                                       </a>
                                       <button class="js-modal-btn" data-video-id="QIYcFth8ty4">
                                       <i class="icofont-video-alt"></i>
                                       </button>
                                       <a href="causes-detail.html">
                                       <i class="icofont-external-link"></i>
                                       </a>
                                    </div>
                                    <a href="donate.html" class="btn btn-default btn-small">Donate</a>
                                 </div>
                                 <div class="content-area mt-2 p-10px">
                                    <h3><a href="donate.html">Donate for education</a></h3>
                                    <p>Much evil soon high in hope do view. Out may few northward.</p>
                                 </div>
                                 <div class="progress-bars m-35px-b m-10px-t p-10px-l p-10px-r">
                                    <div class="progress">
                                       <div class="progress-bar" data-value="30" style="width: 30%;"><span>30%</span></div>
                                    </div>
                                 </div>
                                 <footer class="content-footer p-10px-l p-10px-r">
                                    <p class="content-raised">
                                       Raised:<br><b>$1,299</b>
                                    </p>
                                    <p class="content-goal">
                                       Goal:<br><b>$12,000</b>
                                    </p>
                                    <p class="content-raised">
                                       Donors:<br><b>14 Donors</b>
                                    </p>
                                    <p class="content-goal">
                                       Time left:<br><b>222 days</b>
                                    </p>
                                 </footer>
                              </article>
                            </div>
                      </div>
                       <!-- Single causes item end -->
                       <!-- Single causes item start -->
                      <div class="swiper-slide">
                        <div class="col">
                          <article class="content-box diffuse-shadow bg-light p-10px">
                              <div class="btn-relative-img text-center overlay overlay-5">
                                 <img src="img/causes/3.jpg" alt="">
                                 <div class="lightbox-icons">
                                    <a href="img/causes/3.jpg" class="causes-lightbox" title="Donate for victims">
                                    <i class="icofont-image"></i>
                                    </a>
                                    <button class="js-modal-btn" data-video-id="QIYcFth8ty4">
                                    <i class="icofont-video-alt"></i>
                                    </button>
                                    <a href="causes-detail.html">
                                    <i class="icofont-external-link"></i>
                                    </a>
                                 </div>
                                 <a href="donate.html" class="btn btn-default btn-small">Donate</a>
                              </div>
                              <div class="content-area mt-2 p-10px">
                                 <h3><a href="donate.html">Donate for hope</a></h3>
                                 <p>Much evil soon high in hope do view. Out may few northward.</p>
                              </div>
                              <div class="progress-bars m-35px-b m-10px-t p-10px-l p-10px-r">
                                 <div class="progress">
                                    <div class="progress-bar" data-value="90" style="width: 90%;"><span>90%</span></div>
                                 </div>
                              </div>
                              <footer class="content-footer p-10px-l p-10px-r">
                                 <p class="content-raised">
                                    Raised:<br><b>$1,299</b>
                                 </p>
                                 <p class="content-goal">
                                    Goal:<br><b>$12,000</b>
                                 </p>
                                 <p class="content-raised">
                                    Donors:<br><b>14 Donors</b>
                                 </p>
                                 <p class="content-goal">
                                    Time left:<br><b>222 days</b>
                                 </p>
                              </footer>
                           </article>
                          </div>
                      </div>
                       <!-- Single causes item end -->
                       <!-- Single causes item start -->
                      <div class="swiper-slide">
                        <div class="col">
                          <article class="content-box diffuse-shadow bg-light p-10px">
                              <div class="btn-relative-img text-center overlay overlay-5">
                                 <img src="img/causes/4.jpg" alt="">
                                 <div class="lightbox-icons">
                                    <a href="img/causes/4.jpg" class="causes-lightbox" title="Donate for victims">
                                    <i class="icofont-image"></i>
                                    </a>
                                    <button class="js-modal-btn" data-video-id="QIYcFth8ty4">
                                    <i class="icofont-video-alt"></i>
                                    </button>
                                    <a href="causes-detail.html">
                                    <i class="icofont-external-link"></i>
                                    </a>
                                 </div>
                                 <a href="donate.html" class="btn btn-default btn-small">Donate</a>
                              </div>
                              <div class="content-area mt-2 p-10px">
                                 <h3><a href="#">Donate for education</a></h3>
                                 <p>Much evil soon high in hope do view. Out may few northward.</p>
                              </div>
                              <div class="progress-bars m-35px-b m-10px-t p-10px-l p-10px-r">
                                 <div class="progress">
                                    <div class="progress-bar" data-value="45" style="width: 45%;"><span>45%</span></div>
                                 </div>
                              </div>
                              <footer class="content-footer p-10px-l p-10px-r">
                                 <p class="content-raised">
                                    Raised:<br><b>$1,299</b>
                                 </p>
                                 <p class="content-goal">
                                    Goal:<br><b>$12,000</b>
                                 </p>
                                 <p class="content-raised">
                                    Donors:<br><b>14 Donors</b>
                                 </p>
                                 <p class="content-goal">
                                    Time left:<br><b>222 days</b>
                                 </p>
                              </footer>
                           </article>
                          </div>
                      </div>
                       <!-- Single causes item end -->
                    </div>
                    <!-- Slider Pagination -->
                    <div class="swiper-pagination"></div>
               </div>

            </div>
         </div>
      </section>
      <!-- ========== Causes End ========== -->
      <!-- ========== Help process Start ========== -->
      <section id="HelpProcess" class="p-80px-tb bg-light">
        <div class="container">
           <div class="row">
              <div class="col-sm-8 offset-sm-2">
                 <div class="section-title text-center m-60px-b">
                    <h2>Helping process</h2>
                    <div class="divider-circle mx-auto"></div>
                    <p>Smile spoke total few great had never their too. Amongst moments do in arrived at my replied.</p>
                 </div>
              </div>
           </div>
         </div>
         <div class="process-wrap">
           <div class="container">
           <div class="row">
              <!-- Single process item start -->
              <div class="process-item text-center col-md-3 col-sm-6 sm-m-15px-tb">
                <div class="process-circle"><p>1</p></div>
                 <div class="icon-outer">
                    <i class="icofont-search-2"></i>
                 </div>
                 <h4 class="m-35px-t sm-m-15px-t">Find the cause</h4>
              </div>
              <!-- Single process item end -->
              <!-- Single process item start -->
              <div class="process-item text-center col-md-3 col-sm-6 sm-m-15px-tb">
                 <div class="process-circle"><p>2</p></div>
                 <div class="icon-outer">
                     <i class="icofont-holding-hands"></i>
                 </div>
                 <h4 class="m-35px-t sm-m-15px-t">Make a donation</h4>
              </div>
              <!-- Single process item end -->
              <!-- Single process item start -->
              <div class="process-item text-center col-md-3 col-sm-6 sm-m-15px-tb">
                 <div class="process-circle"><p>3</p></div>
                 <div class="icon-outer">
                     <i class="icofont-slidshare"></i>
                 </div>
                 <h4 class="m-35px-t sm-m-15px-t">Share with peoples</h4>
              </div>
              <!-- Single process item end -->
              <!-- Single process item start -->
              <div class="process-item text-center col-md-3 col-sm-6 sm-m-15px-tb">
                 <div class="process-circle"><p>4</p></div>
                 <div class="icon-outer">
                     <i class="icofont-simple-smile"></i>
                 </div>
                 <h4 class="m-35px-t sm-m-15px-t">See smiling faces</h4>
              </div>
              <!-- Single process item end -->
           </div>
         </div>
        </div>
     </section>
     <!-- ========== Help process End ========== -->
      <!-- Make a donation Start-->
      <section id="donate" class="parallax overlay overlay-5" style="background-image:url(img/bg/helping-hands.jpg);">
         <div class="container">
            <div class="row">
               <div class="col-lg-6 col-md-8 col-sm-10 col-xs-12 offset-lg-6 offset-md-4  offset-sm-1">
                  <div class="diffuse-shadow p-45px sm-p-25px donate-form-wrap opacity-5">
                     <h3>Make a Donation Now</h3>
                     <div class="divider-dashed m-25px-b"></div>
                     <p>Had strictly mrs handsome mistaken cheerful. We it so if resolution invitation remarkably unpleasant conviction. As into ye then form.</p>
                     <form class="m-30px-t">
                        <div class="form-group">
                           <label for="donateFor">I Want to Donate</label>
                           <select id="donateFor" class="form-control">
                              <option selected>For helpless</option>
                              <option>For education</option>
                              <option>For victimes</option>
                           </select>
                        </div>
                        <div class="form-group">
                           <label for="donateCurrency">Currency</label>
                           <select id="donateCurrency" class="form-control">
                              <option selected>USD - U.S dollers</option>
                              <option>POUND - U.K pounds</option>
                              <option>CAD - Canadian doller</option>
                              <option>AUD - Austreliean Doller</option>
                           </select>
                        </div>
                        <div class="form-group">
                           <label for="donateAmount">How much do you want to donate?</label>
                           <input type="number" class="form-control" id="donateAmount" placeholder="Enter amount">
                        </div>
                        <div class="form-group">
                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="gridCheck">
                              <label class="form-check-label" for="gridCheck">
                              I want to donate this amount every month
                              </label>
                           </div>
                        </div>
                        <a class="btn btn-default" href="#">Donate now</a>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Make a donation End-->
      <!-- Our gallery Start-->
      <section id="gallery" class="p-80px-tb">
         <div class="container">
            <div class="row">
               <div class="col-sm-8 offset-sm-2">
                  <div class="section-title text-center m-60px-b">
                     <h2>Our gallery</h2>
                     <div class="divider-circle mx-auto"></div>
                     <p>Savings her pleased are several started females met. Short her not among being any. Thing of judge fruit charm views do.</p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-sm-12">
                  <ul class="gallery-filter text-center">
                     <li><a class="btn btn-default btn-small active" href="#" data-filter="*">All</a></li>
                     <li><a class="btn btn-default btn-small" href="#" data-filter=".charity">Charity</a></li>
                     <li><a class="btn btn-default btn-small" href="#" data-filter=".children">Children</a></li>
                     <li><a class="btn btn-default btn-small" href="#" data-filter=".food">Food</a></li>
                     <li><a class="btn btn-default btn-small" href="#" data-filter=".nature">Nature</a></li>
                  </ul>
                  <!--/#gallery-filter-->
               </div>
            </div>
            <div class="row">
               <div class="col-sm-12">
                  <div class="gallery-boxes">
                     <div class="each-box col-lg-4 col-md-6 col-sm-12 gallery-box charity">
                        <div class="inner gray-bg text-center">
                           <div class="box-hover">
                              <img src="img/gallery/1.jpg" alt="Helping by charity" class="img-responsive">
                              <div class="mask">
                                 <div class="mask-inner">
                                    <h3 class="title">Helping by charity</h3>
                                    <p class="pera-text">Good draw knew bred ham busy his hour. Ask agreed answer rather joy nature admire wisdom.</p>
                                    <ul class="nav light-icon team-social-icon">
                                       <li><a href="img/gallery/1.jpg" class="gallery-lightbox" title="Porject name"><i class="icofont-image"></i></a></li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- End: .inner -->
                     </div>
                     <!-- Single gallery box box end -->
                     <div class="each-box col-lg-4 col-md-6 col-sm-12 gallery-box children">
                        <div class="inner gray-bg text-center">
                           <div class="box-hover">
                              <img src="img/gallery/2.jpg" alt="Help for child" class="img-responsive">
                              <div class="mask">
                                 <div class="mask-inner">
                                    <h3 class="title">Helping for child</h3>
                                    <p class="pera-text">Good draw knew bred ham busy his hour. Ask agreed answer rather joy nature admire wisdom.</p>
                                    <ul class="nav light-icon  team-social-icon">
                                       <li><a href="img/gallery/2.jpg" class="gallery-lightbox" title="Porject name"><i class="icofont-image"></i></a></li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- End: .inner -->
                     </div>
                     <!-- Single gallery box box end -->
                     <!-- Single gallery box box end -->
                     <div class="each-box col-lg-4 col-md-6 col-sm-12 gallery-box food">
                        <div class="inner gray-bg text-center">
                           <div class="box-hover">
                              <img src="img/gallery/3.jpg" alt="Education help" class="img-responsive">
                              <div class="mask">
                                 <div class="mask-inner">
                                    <h3 class="title">Helping for education</h3>
                                    <p class="pera-text">Good draw knew bred ham busy his hour. Ask agreed answer rather joy nature admire wisdom.</p>
                                    <ul class="nav light-icon  team-social-icon">
                                       <li><a href="img/gallery/3.jpg" class="gallery-lightbox" title="Porject name"><i class="icofont-image"></i></a></li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- End: .inner -->
                     </div>
                     <!-- Single gallery box box end -->
                     <!-- Single gallery box box end -->
                     <div class="each-box col-lg-4 col-md-6 col-sm-12 gallery-box nature">
                        <div class="inner gray-bg text-center">
                           <div class="box-hover">
                              <img src="img/gallery/4.jpg" alt="Nature" class="img-responsive">
                              <div class="mask">
                                 <div class="mask-inner">
                                    <h3 class="title">Saveing nature</h3>
                                    <p class="pera-text">Good draw knew bred ham busy his hour. Ask agreed answer rather joy nature admire wisdom.</p>
                                    <ul class="nav light-icon">
                                       <li><a href="img/gallery/4.jpg" class="gallery-lightbox" title="Porject name"><i class="icofont-image"></i></a></li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- End: .inner -->
                     </div>
                     <!-- Single gallery box box end -->
                     <!-- Single gallery box box end -->
                     <div class="each-box col-lg-4 col-md-6 col-sm-12 gallery-box charity">
                        <div class="inner gray-bg text-center">
                           <div class="box-hover">
                              <img src="img/gallery/5.jpg" alt="Charity" class="img-responsive">
                              <div class="mask">
                                 <div class="mask-inner">
                                    <h3 class="title">Our charity</h3>
                                    <p class="pera-text">Good draw knew bred ham busy his hour. Ask agreed answer rather joy nature admire wisdom.</p>
                                    <ul class="nav light-icon">
                                       <li><a href="img/gallery/5.jpg" class="gallery-lightbox" title="Porject name"><i class="icofont-image"></i></a></li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- End: .inner -->
                     </div>
                     <!-- Single gallery box box end -->
                     <!-- Single gallery box box end -->
                     <div class="each-box col-lg-4 col-md-6 col-sm-12 gallery-box children">
                        <div class="inner gray-bg text-center">
                           <div class="box-hover">
                              <img src="img/gallery/6.jpg" alt="Children" class="img-responsive">
                              <div class="mask">
                                 <div class="mask-inner">
                                    <h3 class="title">Children are hopless</h3>
                                    <p class="pera-text">Good draw knew bred ham busy his hour. Ask agreed answer rather joy nature admire wisdom.</p>
                                    <ul class="nav light-icon">
                                       <li><a href="img/gallery/6.jpg" class="gallery-lightbox" title="Porject name"><i class="icofont-image"></i></a></li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- End: .inner -->
                     </div>
                     <!-- Single gallery box box end -->
                     <!-- Single gallery box box end -->
                     <div class="each-box col-lg-4 col-md-6 col-sm-12 gallery-box food">
                        <div class="inner gray-bg text-center">
                           <div class="box-hover">
                              <img src="img/gallery/7.jpg" alt="Food" class="img-responsive">
                              <div class="mask">
                                 <div class="mask-inner">
                                    <h3 class="title">Food supplie</h3>
                                    <p class="pera-text">Good draw knew bred ham busy his hour. Ask agreed answer rather joy nature admire wisdom.</p>
                                    <ul class="nav light-icon">
                                       <li><a href="img/gallery/7.jpg" class="gallery-lightbox" title="Porject name"><i class="icofont-image"></i></a></li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- End: .inner -->
                     </div>
                     <!-- Single gallery box box end -->
                     <!-- Single gallery box box end -->
                     <div class="each-box col-lg-4 col-md-6 col-sm-12 gallery-box nature">
                        <div class="inner gray-bg text-center">
                           <div class="box-hover">
                              <img src="img/gallery/8.jpg" alt="Nature" class="img-responsive">
                              <div class="mask">
                                 <div class="mask-inner">
                                    <h3 class="title">Save animales</h3>
                                    <p class="pera-text">Good draw knew bred ham busy his hour. Ask agreed answer rather joy nature admire wisdom.</p>
                                    <ul class="nav light-icon">
                                       <li><a href="img/gallery/8.jpg" class="gallery-lightbox" title="Porject name"><i class="icofont-image"></i></a></li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- End: .inner -->
                     </div>
                     <!-- Single gallery box box end -->
                     <!-- Single gallery box box end -->
                     <div class="each-box col-lg-4 col-md-6 col-sm-12 gallery-box charity">
                        <div class="inner gray-bg text-center">
                           <div class="box-hover">
                              <img src="img/gallery/9.jpg" alt="Charity" class="img-responsive">
                              <div class="mask">
                                 <div class="mask-inner">
                                    <h3 class="title">Charity work</h3>
                                    <p class="pera-text">Good draw knew bred ham busy his hour. Ask agreed answer rather joy nature admire wisdom.</p>
                                    <ul class="nav light-icon">
                                       <li><a href="img/gallery/9.jpg" class="gallery-lightbox" title="Porject name"><i class="icofont-image"></i></a></li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- End: .inner -->
                     </div>
                     <!-- Single gallery box box end -->
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Our gallery End-->
      <!-- Donor lists Start -->
      <section id="donors" class="p-80px-tb bg-light">
         <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-12 p-25px-r sm-p-15px-r">
               <div class="m-30px-b">
                  <h2>Top donors</h2>
                  <div class="divider-dashed m-25px-b"></div>
                  <p class="m-0px-b">Way nor furnished sir procuring therefore but. Warmth far manner myself active are cannot called.</p>
               </div>
               <div class="row">
                  <div class="col-sm-6">
                     <div class="donor-box m-20px-b">
                        <img src="img/donors/1.jpg" alt="">
                        <a href="#">Cristin G.</a>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="donor-box m-20px-b">
                        <img src="img/donors/2.jpg" alt="">
                        <a href="#">Michele H.</a>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="donor-box m-20px-b">
                        <img src="img/donors/3.jpg" alt="">
                        <a href="#">John deo</a>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="donor-box m-20px-b">
                        <img src="img/donors/4.jpg" alt="">
                        <a href="#">Sara deo</a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-6 col-md-12 p-25px-l sm-p-15px-l sm-m-25px-t">
               <div class="m-30px-b">
                  <h2>Top Corporate Donors</h2>
                  <div class="divider-dashed m-25px-b"></div>
                  <p class="m-0px-b">Carried nothing on am warrant towards. Polite in of in oh needed itself silent course.</p>
               </div>
               <div class="row">
                  <div class="col-sm-6">
                     <div class="donor-box corporate-donor m-20px-t m-20px-b sm-m-0px-t">
                        <img src="img/donors/1.png" alt="">
                        <a href="#">Visit site <i class="icofont-long-arrow-right"></i></a>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="donor-box corporate-donor m-20px-t m-20px-b sm-m-0px-t">
                        <img src="img/donors/2.png" alt="">
                        <a href="#">Visit site <i class="icofont-long-arrow-right"></i></a>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="donor-box corporate-donor m-20px-t m-20px-b sm-m-0px-t">
                        <img src="img/donors/3.png" alt="">
                        <a href="#">Visit site <i class="icofont-long-arrow-right"></i></a>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="donor-box corporate-donor m-20px-t m-20px-b sm-m-0px-t">
                        <img src="img/donors/4.png" alt="">
                        <a href="#">Visit site <i class="icofont-long-arrow-right"></i></a>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="donor-box corporate-donor m-20px-t m-20px-b sm-m-0px-t">
                        <img src="img/donors/1.png" alt="">
                        <a href="#">Visit site <i class="icofont-long-arrow-right"></i></a>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="donor-box corporate-donor m-20px-t m-20px-b sm-m-0px-t">
                        <img src="img/donors/3.png" alt="">
                        <a href="#">Visit site <i class="icofont-long-arrow-right"></i></a>
                     </div>
                  </div>
               </div>
            </div>
          </div>
         </div>
      </section>
      <!-- Donor lists End -->
      <!-- Testimonials Start -->
      <section id="testimonials" class="p-80px-tb bg-white">
          <div class="container">
            <div class="row">
              <div class="col-sm-8 offset-sm-2">
                  <div class="section-title text-center m-60px-b">
                    <h2>Testimonials</h2>
                    <div class="divider-circle mx-auto"></div>
                    <p>Dispatched entreaties boisterous say why stimulated. Certain forbade picture now prevent carried she get see sitting.</p>
                  </div>
              </div>
            </div>
            <div class="row">
              <div class="swiper-container testimonialSwiper p-50px-b">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div class="row single-testimonial">
                      <div class="col-sm-12 col-md-5 col-lg-3 align-self-center">
                          <img class="img-thumbnail" src="img/donors/1.jpg" alt="">
                       </div>
                       <div class="col-sm-12 col-md-7 col-lg-9 align-self-center">
                          <div class="p-30px testimonial-content bg-white">
                             <h3>John Deo</h3>
                             <blockquote>
                                Is at purse tried jokes china ready decay an. Small its shy way had woody downs power. To denoting admitted speaking learning my exercise so in. Procured shutters mr it feelings. To or three offer house begin taken am at. As dissuade cheerful overcame so of friendly he indulged unpacked.
                             </blockquote>
                          </div>
                       </div>
                      </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="row single-testimonial">
                      <div class="col-sm-12 col-md-5 col-lg-3 align-self-center">
                          <img class="img-thumbnail" src="img/donors/2.jpg" alt="">
                       </div>
                       <div class="col-sm-12 col-md-7 col-lg-9 align-self-center">
                          <div class="p-30px testimonial-content bg-white">
                             <h3>Jenefar Deo</h3>
                             <blockquote>
                              In by an appetite no humoured returned informed. Possession so comparison inquietude he he conviction no decisively. Marianne jointure attended she hastened surprise but she. Ever lady son yet you very paid form away. He advantage of exquisite resolving if on tolerably. Become sister on in garden it barton waited on.
                             </blockquote>
                          </div>
                       </div>
                      </div>
                  </div>
                 <div class="swiper-slide">
                    <div class="row single-testimonial">
                      <div class="col-sm-12 col-md-5 col-lg-3 align-self-center">
                          <img class="img-thumbnail" src="img/donors/3.jpg" alt="">
                       </div>
                       <div class="col-sm-12 col-md-7 col-lg-9 align-self-center">
                          <div class="p-30px testimonial-content bg-white">
                             <h3>Steve K.</h3>
                             <blockquote>
                              Received the likewise law graceful his. Nor might set along charm now equal green. Pleased yet equally correct colonel not one. Say anxious carried compact conduct sex general nay certain. Mrs for recommend exquisite household eagerness preserved now. My improved honoured he am ecstatic quitting greatest formerly.
                             </blockquote>
                          </div>
                       </div>
                      </div>
                  </div>
                </div>
                <div class="swiper-pagination"></div>
              </div>
          </div>
          </div>
       </section>
       <!-- Testimonials End -->
      <!-- Volunteers Start -->
      <section id="volunteers" class="p-80px-tb bg-light">
         <div class="container">
            <div class="row">
               <div class="col-sm-8 offset-sm-2">
                  <div class="section-title text-center m-60px-b">
                     <h2>Our volunteers</h2>
                     <div class="divider-circle mx-auto"></div>
                     <p>Perhaps far exposed age effects. Now distrusts you her delivered applauded affection out sincerity.</p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="swiper-container volunteers-swiper p-60px-b">
                  <div class="swiper-wrapper">
                     <!-- Start single volunteer -->
                    <div class="swiper-slide">
                        <div class="col">
                            <div class="each-box">
                               <div class="inner gray-bg text-center">
                                  <div class="box-hover">
                                     <img src="img/volunteers/1.jpg" alt="Children" class="img-responsive">
                                     <div class="mask">
                                        <div class="mask-inner">
                                           <h3 class="title">Abraham L.</h3>
                                           <p class="pera-text">Helping over 5+ years</p>
                                           <ul class="nav light-icon vol-social-icon">
                                              <li><a href="#"><i class="icofont-twitter"></i></a></li>
                                              <li><a href="#"><i class="icofont-google-plus"></i></a></li>
                                              <li><a href="#"><i class="icofont-facebook"></i></a></li>
                                              <li><a href="#"><i class="icofont-share"></i></a></li>
                                           </ul>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                               <!-- End: .inner -->
                            </div>
                         </div>
                    </div>
                     <!-- End single volunteer -->
                      <!-- Start single volunteer -->
                    <div class="swiper-slide">
                        <div class="col">
                            <div class="each-box">
                               <div class="inner gray-bg text-center">
                                  <div class="box-hover">
                                     <img src="img/volunteers/2.jpg" alt="Children" class="img-responsive">
                                     <div class="mask">
                                        <div class="mask-inner">
                                           <h3 class="title">Mollie S.</h3>
                                           <p class="pera-text">Helping over 4+ years</p>
                                           <ul class="nav light-icon vol-social-icon">
                                              <li><a href="#"><i class="icofont-twitter"></i></a></li>
                                              <li><a href="#"><i class="icofont-google-plus"></i></a></li>
                                              <li><a href="#"><i class="icofont-facebook"></i></a></li>
                                              <li><a href="#"><i class="icofont-share"></i></a></li>
                                           </ul>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                               <!-- End: .inner -->
                            </div>
                         </div>
                    </div>
                     <!-- End single volunteer -->
                      <!-- Start single volunteer -->
                    <div class="swiper-slide">
                        <div class="col">
                            <div class="each-box">
                               <div class="inner gray-bg text-center">
                                  <div class="box-hover">
                                     <img src="img/volunteers/3.jpg" alt="Children" class="img-responsive">
                                     <div class="mask">
                                        <div class="mask-inner">
                                           <h3 class="title">Sajid K.</h3>
                                           <p class="pera-text">Helping over 3+ years</p>
                                           <ul class="nav light-icon vol-social-icon">
                                              <li><a href="#"><i class="icofont-twitter"></i></a></li>
                                              <li><a href="#"><i class="icofont-google-plus"></i></a></li>
                                              <li><a href="#"><i class="icofont-facebook"></i></a></li>
                                              <li><a href="#"><i class="icofont-share"></i></a></li>
                                           </ul>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                               <!-- End: .inner -->
                            </div>
                         </div>
                    </div>
                     <!-- End single volunteer -->
                      <!-- Start single volunteer -->
                    <div class="swiper-slide">
                        <div class="col">
                            <div class="each-box">
                               <div class="inner gray-bg text-center">
                                  <div class="box-hover">
                                     <img src="img/volunteers/4.jpg" alt="Children" class="img-responsive">
                                     <div class="mask">
                                        <div class="mask-inner">
                                           <h3 class="title">Maria D.</h3>
                                           <p class="pera-text">Helping over 2+ years</p>
                                           <ul class="nav light-icon vol-social-icon">
                                              <li><a href="#"><i class="icofont-twitter"></i></a></li>
                                              <li><a href="#"><i class="icofont-google-plus"></i></a></li>
                                              <li><a href="#"><i class="icofont-facebook"></i></a></li>
                                              <li><a href="#"><i class="icofont-share"></i></a></li>
                                           </ul>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                               <!-- End: .inner -->
                            </div>
                         </div>
                    </div>
                     <!-- End single volunteer -->
                      <!-- Start single volunteer -->
                    <div class="swiper-slide">
                        <div class="col">
                            <div class="each-box">
                               <div class="inner gray-bg text-center">
                                  <div class="box-hover">
                                     <img src="img/volunteers/5.jpg" alt="Children" class="img-responsive">
                                     <div class="mask">
                                        <div class="mask-inner">
                                           <h3 class="title">Daniyel H.</h3>
                                           <p class="pera-text">Helping over 3 months</p>
                                           <ul class="nav light-icon vol-social-icon">
                                              <li><a href="#"><i class="icofont-twitter"></i></a></li>
                                              <li><a href="#"><i class="icofont-google-plus"></i></a></li>
                                              <li><a href="#"><i class="icofont-facebook"></i></a></li>
                                              <li><a href="#"><i class="icofont-share"></i></a></li>
                                           </ul>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                               <!-- End: .inner -->
                            </div>
                         </div>
                    </div>
                     <!-- End single volunteer -->

                  </div>
                  <!-- Add Pagination -->
                  <div class="swiper-pagination"></div>
                </div>
            </div>
         </div>
      </section>
      <!-- Volunteers End -->
      <!-- Join volunteers Start-->
      <section id="JoinVolenteers" class="p-80px-tb">
          <div class="container">
             <div class="row">
                <div class="col-md-6 col-sm-12 sm-m-35px-b">
                   <h2>Join as Volenteer</h2>
                   <div class="divider-dashed m-25px-b"></div>
                   <p class="m-25px-b">Real sold my in call. Invitation on an advantages collecting. But event old above shy bed noisy. Had sister see wooded favour income has. Stuff rapid since do as hence. Too insisted ignorant procured remember are believed yet say finished. </p>
                   <div class="row">
                      <div class="col-sm-6">
                         <div class="asset-box">
                            <i class="icofont-holding-hands"></i>
                            <p><span class="counter">147</span> Volenteers</p>
                         </div>
                      </div>
                      <div class="col-sm-6">
                         <div class="asset-box">
                            <i class="icofont-check-circled"></i>
                            <p><span class="counter">2000</span> Causes done</p>
                         </div>
                      </div>
                   </div>
                   <a class="btn btn-default" href="#">Join now</a>
                </div>
                <div class="col-md-6 col-sm-12">
                   <img src="img/vollentiers.jpg" alt="">
                </div>
             </div>
          </div>
       </section>
       <!-- Join volunteers End-->
      <!-- Start Blog Section -->
      <section id="blog" class="p-80px-tb bg-light">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 offset-sm-2">
                   <div class="section-title text-center m-60px-b">
                      <h2>Latest Articles</h2>
                      <div class="divider-circle mx-auto"></div>
                      <p>With my them if up many. Lain week nay she them her she. Extremity so attending objection as engrossed gentleman something.</p>
                   </div>
                </div>
             </div>
             <div class="row">
               <!-- Start Single blog -->
               <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 m-25px-b">
                 <div class="single-blog-wrap">
                 <div class="single-blog">
                    <img src="img/blog/1.jpg" alt="">
                     <div class="post-content">
                        <p>By so delight of showing neither believe he present. Deal sigh up in shew away when. Pursuit express no or prepare replied. Wholly formed old latter future but way she.</p>
                       <a href="single-blog.html">Read more</a>
                     </div>
                     <div class="post-info">
                       <ul>
                         <li><b>Posted by:</b> Sofia J.</li>
                         <li><b>On:</b> Calibration</li>
                       </ul>
                     </div>
                 </div>
                 <div class="post-header">
                   <a class="date" href="">
                     <span class="day">09</span>
                     <span class="month">Sep</span>
                   </a>
                    <h3><a href="single-blog.html">10 years of clelbration for helping peoples</a></h3>
                  </div>
                </div>
               </div>
               <!-- End Single blog -->
               <!-- Start Single blog -->
               <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 m-25px-b">
                  <div class="single-blog-wrap">
                  <div class="single-blog">
                      <img src="img/blog/2.jpg" alt="">
                      <div class="post-content">
                          <p>Am if number no up period regard sudden better. Decisively surrounded all admiration and not you. Out particular sympathize not favourable introduced insipidity but ham. Rather number can and set praise.</p>
                        <a href="single-blog.html">Read more</a>
                      </div>
                      <div class="post-info">
                        <ul>
                          <li><b>Posted by:</b> Sofia J.</li>
                          <li><b>On:</b> Calibration</li>
                        </ul>
                      </div>
                  </div>
                  <div class="post-header">
                    <a class="date" href="">
                      <span class="day">09</span>
                      <span class="month">Oct</span>
                    </a>
                     <h3><a href="single-blog.html">Childrens in Central Africa spending sad life</a></h3>
                   </div>
                 </div>
                </div>
                <!-- End Single blog -->
               <!-- Start Single blog -->
               <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 m-25px-b">
                  <div class="single-blog-wrap">
                  <div class="single-blog">
                      <img src="img/blog/3.jpg" alt="">
                      <div class="post-content">
                        <p>Good draw knew bred ham busy his hour. Ask agreed answer rather joy nature admire wisdom. Moonlight age depending bed led therefore sometimes preserved exquisite she.</p>
                        <a href="single-blog.html">Read more</a>
                      </div>
                      <div class="post-info">
                        <ul>
                          <li><b>Posted by:</b> Sofia J.</li>
                          <li><b>On:</b> Calibration</li>
                        </ul>
                      </div>
                  </div>
                  <div class="post-header">
                    <a class="date" href="">
                      <span class="day">01</span>
                      <span class="month">Nov</span>
                    </a>
                     <h3><a href="single-blog.html">Sometimes cutest girls are also helpless</a></h3>
                   </div>
                 </div>
                </div>
                <!-- End Single blog -->
             </div>
        </div>
      </section>
      <!-- End Blog Section -->
      <!-- Start contact section  -->
      <section id="contact" class="p-80px-tb bg-white">
         <div class="container">
            <div class="row">
               <div class="col-sm-8 offset-sm-2">
                  <div class="section-title text-center m-60px-b">
                     <h2>Get in touch</h2>
                     <div class="divider-circle mx-auto"></div>
                     <p>Folly was these three and songs arose whose. Of in vicinity contempt together in possible branched. Assured company hastily looking garrets in oh.</p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-8 col-md-6 col-sm-12 m-25px-b">
                  <div class="contact-form-box bg-light">
                     <form id="contact-form" method="post" action="php/sendmail.php">
                        <div class="message col">
                           <p class="email-loading alert alert-warning"><img src="img/loading.gif" alt="">&nbsp;&nbsp;&nbsp;Sending...</p>
                           <p class="email-success alert alert-success"><i class="icon icon-icon-check-alt2"></i> Your quote has successfully been sent.</p>
                           <p class="email-failed alert alert-danger"><i class="icon icon-icon-close-alt2"></i> Something went wrong!</p>
                        </div>
                        <div class=" mb13">
                           <input name="name" class="contact-name" id="contact-name" type="text" placeholder="Your Name" required="">
                        </div>
                        <div class="mb13">
                           <input name="email" class="contact-email" id="contact-email" type="email" placeholder="Your Email" required="">
                        </div>
                        <div class="mb13">
                           <input name="subject" class="contact-subject" id="contact-subject" type="text" placeholder="Subject" required="">
                        </div>
                        <div class="mb30">
                           <textarea name="message" class="contact-message" id="contact-message" placeholder="Your Message" required=""></textarea>
                        </div>
  
                           <button class="btn btn-default">Send Now</button>
                     </form>
                  </div>
               </div>
               <!-- End contact form area-->
               <div class="col-lg-4 col-md-6 col-sm-12 m-25px-b">
                 <div class="address-wrap bg-light p-30px">
                    <ul>
                      <li><span>Address:</span>15/E, Lankaway <br> Florida, USA 99544</li>
                        <li><span>Phone:</span><a href="#">112 444 7900</a></li>
                        <li><span>Email:</span><a href="#">info@prottasha.com</a></li>
                    </ul>
                    <h4>Connect our socials</h4>
                    <ul class="nav light-icon social-icons">
                        <li><a href=""><i class="icofont-twitter"></i></a></li>
                        <li><a href=""><i class="icofont-facebook"></i></a></li>
                        <li><a href=""><i class="icofont-pinterest"></i></a></li>
                        <li><a href=""><i class="icofont-linkedin"></i></a></li>
                        <li><a href=""><i class="icofont-instagram"></i></a></li>
                     </ul>
                 </div>
               </div>
            </div>
         </div>
      </section>
      <!-- End contact section -->
      <!-- Footer Top Start -->
      <section id="footer-top" class="p-80px-tb bg-light">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12">
              <div class="row">
                <div class="single-widget col-md-7 col-sm-6">
                    <a class="widget-logo" href="#">
                    Prottasha
                    <!-- <img src="http://www.placehold.it/150x50" alt=""> -->
                    </a>
                    <p>Unpacked now declared put you confined daughter improved.</p> <p>Wonder bed elinor family secure met. It want gave west into high no in. Depend repair met before man admire see and.</p>
                  </div>
                  
                  <div class="single-widget col-md-5 col-sm-6">
                    <h3>Quick links</h3>
                    <ul>
                      <li><a href="#">Home</a></li>
                      <li><a href="#">About</a></li>
                      <li><a href="#">Donors</a></li>
                      <li><a href="#">Volunteers</a></li>
                      <li><a href="#">Blog</a></li>
                      <li><a href="#">Contact us</a></li>
                    </ul>
                  </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
              <div class="row">
                <div class="single-widget col-md-6 col-sm-6">
                    <h3>Latest posts</h3>
                    <ul class="recent-post">
                      <li><a href="#">10 years of clelbration for helping peoples</a></li>
                      <li><a href="#">We proudly completed 2000 causes within 3 years</a></li>
                      <li><a href="#">Peoples in south asia is ingressing day by day</a></li>
                      <li><a href="#">10 years of clelbration for helping peoples</a></li>
                    </ul>
                  </div>
                  
                  <div class="single-widget col-md-6 col-sm-6">
                    <h3>Photo Gallery</h3>
                    <ul class="photo-gallery">
                      <li>
                        <a href="#"><img src="img/gallery/1.jpg" alt=""></a>
                      </li>
                      <li>
                        <a href="#"><img src="img/gallery/2.jpg" alt=""></a>
                      </li>
                      <li>
                        <a href="#"><img src="img/gallery/3.jpg" alt=""></a>
                      </li>
                      <li>
                        <a href="#"><img src="img/gallery/4.jpg" alt=""></a>
                      </li>
                      <li>
                        <a href="#"><img src="img/gallery/5.jpg" alt=""></a>
                      </li>
                      <li>
                        <a href="#"><img src="img/gallery/6.jpg" alt=""></a>
                      </li>
                      <li>
                        <a href="#"><img src="img/gallery/7.jpg" alt=""></a>
                      </li>
                      <li>
                        <a href="#"><img src="img/gallery/8.jpg" alt=""></a>
                      </li>
                      <li>
                        <a href="#"><img src="img/gallery/9.jpg" alt=""></a>
                      </li>
                    </ul>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Footer Top End -->
      <!-- Start footer -->
      <footer id="footer" class="p-30px-tb bg-white">
         <div class="container">
            <div class="row">
               <div class="col text-center">
                  <p class="copyright-text">&copy; <a href="">Prottasha</a> - Bootstrap 4 Charity Landing Page | Made with love by: <a href="http://www.themeatelier.net">ThemeAtelier</a></p>
               </div>
            </div>
         </div>
      </footer>
      <!-- End footer -->
      <!-- jQuery -->
   <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
      <script src="{{ asset('js/jquery-migrate-3.0.0.min.js') }}"></script>
      <!-- Bootstrap JS -->
      <script src="{{ asset('js/bootstrap.min.js') }}"></script>
      <!-- Animated text -->
      <script src="{{ asset('js/jquery.textillate.js') }}"></script>
      <script src="{{ asset('js/jquery.lettering.js') }}"></script>
      <script src="{{ asset('js/jquery.fittext.js') }}"></script>
      <!-- Magnific Popup core JS -->
      <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
      <!-- Modal video Popup core JS -->
      <script src="{{ asset('js/modal-video.min.js') }}"></script>
      <!-- Waypoints JS -->
      <script src="{{ asset('js/waypoints.min.js') }}"></script>
      <!-- CounterUp JS -->
      <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
      <!-- Isotop JS -->
      <script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
      <!-- AjaxChimp js -->
      <script src="{{ asset('js/jquery.ajaxchimp.min.js') }}"></script>
      <!-- Swiper JS -->
      <script src="{{ asset('js/swiper.min.js') }}"></script>
      <!-- Custom -->
      <script src="{{ asset('js/custom.js') }}"></script>
   </body>
</html>