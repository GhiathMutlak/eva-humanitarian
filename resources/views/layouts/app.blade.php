<!DOCTYPE html>
<html lang={{App::getLocale()}} dir={{App::getLocale()=='ar'? 'rtl':'ltr' }}>



    <head>

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="keywords" content="">
        <meta name="description" content="">
        <meta name="author" content="Ghiath MUTLAK">
        <meta http-equiv="X-UA-Compatible" content="IE=9">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>  </title>

        <!-- Font -->

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- CSS Files -->
        
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

        @if ( app()->getLocale() == 'ar' ) 
            <link href="https://fonts.googleapis.com/css?family=Cairo&display=swap" rel="stylesheet">
            <style type="text/css"> 
            p,.about-box h2{
                
                text-align: justify;
            }
            .section-title{
                text-align:center !important;
            }
           
            @font-face {
                    font-family: futura;
                    src: url('{{ asset('fonts/FE11043T.TTF') }}');
            }
            *{
                font-family:'Cairo', sans-serif;
            }
             </style> 
        @endif 

        {{-- @if ( app()->getLocale() == 'ar' ) --}}
            {{-- <link rel="stylesheet" href="{{ asset('css/font-awesome-rtl.css') }}" media="screen"> --}}
        {{-- @endif --}}
       
        {{-- @if ( app()->getLocale() == 'ar' ) --}}
            {{-- <link rel="stylesheet" href="{{ asset('css/style-rtl.css') }}" media="screen"> --}}
        {{-- @endif --}}

        {{-- @if ( app()->getLocale() == 'ar' ) --}}
            {{-- <link rel="stylesheet" href="{{ asset('css/custom-rtl.css') }}" media="screen"> --}}
        {{-- @endif --}}


        <link rel="shortcut icon" href="{{ asset('img/bg/logo2.png') }}" type="image/x-icon">
        <link rel="icon" href="{{ asset('img/bg/logo2.png') }}" type="image/x-icon">


    </head>

    <body data-spy="scroll" data-target="#navbarCodeply" data-offset="70">

    <div>

        <div>
            @include('includes.navbar')

            <div>

                @yield('content')

                {{--<div class="whatsapp">
                    <a href="https://api.whatsapp.com/send?phone=90553" target="_blank">
                        <i class="fab fa-whatsapp fa-3x" aria-hidden="true" style="color:#00E676;"></i>
                    </a>
                </div>--}}

            </div>

            @include('includes.footer')

         
        </div>

    </div>

    <!-- JS Files -->
   
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

