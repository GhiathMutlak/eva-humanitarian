

<!-- ========== Header Nav Start ========== -->
<header>
    <nav class="navbar navbar-inverse navbar-expand-lg header-nav fixed-top light-header">
       <div class="container">
          <a class="navbar-brand" href="#">
          <img src='img/bg/logo2.png' width="60" height="60" />
             <!-- <img src="http://www.placehold.it/150x50" alt=""> -->
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCodeply">
             <i class="icofont-navigation-menu"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarCodeply">
             <ul class="nav navbar-nav ml-auto">
                <li>
                   <a class="nav-link" href="#home">{{__('index.navHome')}}</a>
                  <!-- <span class="sub-menu-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icofont-rounded-down"></i></span>
                   <ul class="sub-menu">
                      <li><a href="index.html">Home Option 1</a></li>
                      <li><a href="index-01.html">Home Option 2</a></li>
                      <li><a href="index-02.html">Home Option 3</a></li>
                      <li><a href="index-03.html">Home Option 4</a></li>
                   </ul>-->
                </li>
                <li><a class="nav-link" href="#about">{{__('index.navAbout')}}</a></li>
                <li><a class="nav-link" href="#causes">{{__('index.navProject')}}</a></li>
                <li><a class="nav-link" href="#donate">{{__('index.navDonate')}}</a></li>
                <li><a class="nav-link" href="#gallery">{{__('index.navGallery')}}</a></li>
                <!--<li><a class="nav-link" href="#donors">Donors</a></li>
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
                </li>-->
                <li><a class="nav-link" href="#contact">{{__('index.navContact')}}</a></li>
               
             </ul>
             <ul class="nav navbar-nav">
               <li>
                   <a class="nav-link" href="#lang">{{__('index.navLanguage')}}</a>
                   <span class="sub-menu-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icofont-rounded-down"></i></span>
                   <ul class="sub-menu">
                      <li>
                         <a rel="alternate"
                        hreflang="{{ 'en' }}"
                        href="{{ LaravelLocalization::getLocalizedURL( 'en', null, [], true) }}">
                         English
                        </a>
                     </li>
                     <li>
                        <a rel="alternate"
                        hreflang="{{ 'tr' }}"
                        href="{{ LaravelLocalization::getLocalizedURL( 'tr', null, [], true) }}" >
                         Turkçe
                        </a>
                      </li>
                      <li>
                        <a rel="alternate"
                        hreflang="{{ 'ar' }}"
                        href="{{ LaravelLocalization::getLocalizedURL( 'ar', null, [], true) }}">
                        العربية
                        </a>
                      </li>
                   </ul>
                </li>
             </ul>
          </div>
       </div>
    </nav>
 </header>
 <!-- ========== Header Nav End ========== -->