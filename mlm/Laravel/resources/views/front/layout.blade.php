<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> YTM CASH</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon.ico')}}">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/slicknav.css')}}">
    <link rel="stylesheet" href="{{ asset('css/flaticon.css')}}">
    <link rel="stylesheet" href="{{ asset('css/progressbar_barfiller.css')}}">
    <link rel="stylesheet" href="{{ asset('css/gijgo.css')}}">
    <link rel="stylesheet" href="{{ asset('css/animate.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/animated-headline.css')}}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{ asset('css/slick.css')}}">
    <link rel="stylesheet" href="{{ asset('css/nice-select.css')}}">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">

</head>
<body>
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="{{ asset('images/logo/loder.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
        <div class="header-area header-transparent">
            <div class="main-header ">
                <div class="header-bottom  header-sticky">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-2 col-lg-2">
                                
                                <div class="logo" style="width:500px;">
                                   
                                    
                                    <div id="logo_2">
                                        <div class="row">
                                        <div style="margin-left:15px;">
                                            <img width="80px" height="60px"  style=""src="{{ asset('images/hero/YTM-01.png')}}" alt="" data-animation="fadeInRight" data-delay="1s"/><span>
                                                
                                       <a href="/" style="  font-size: 40px !important;font-style: italic;font-family: a;margin-top: 10px !important;">
                                        
                                        YTMCash
                                        </a>       </span>
                                                      </div>                                      
                                        </div>
                                                <div style="float: left !important;">
                                                     <a href="/" style="  font-size: 15px !important;font-style: italic;font-family: a;">YTMCASH Is The Fastest Way To Grow Your Income.</a>
                                       
                                        </div>        
                                    </div>
                                </div>

                            </div> <!-- above logo -->
                            <div class="col-xl-10 col-lg-10">
                                <div class="menu-wrapper d-flex align-items-center justify-content-end">
                                    <!-- Main-menu -->
                                    <div class="main-menu d-none d-lg-block">
                                        <nav>
                                            <ul id="navigation">

                                                @if(Auth::check())
                                                <li><a href="/dashboard">Dashboard</a></li>
                                                <li><a href="/transactions">Transaction</a></li>
                                                <li><a href="/members">My Team</a></li>
                                                @if(Auth::user()->is_admin == false) <li><a href="/activity">Activity</a></li>@endif
                                                @if(Auth::user()->is_admin == false)  <li><a href="/deposit">Deposit</a></li>@endif
                                                @if(Auth::user()->is_admin == false)  <li><a href="/withdraw">withdraw</a></li>@endif
                                                <li class="button-header margin-left "><a href="/logout" class="btn">Sign Out </a></li>
                                                <!-- <li><a href="/dashboard">User : {{Auth::user()->full_name}}</a></li> -->
                                                @else
                                                <li><a href="/">Home</a></li>
                                                <li class="button-header margin-left "><a href="/register" class="btn">Sign Up</a></li>
                                                <li class="button-header"><a href="/login" class="btn3">Sign In</a></li>
                                                @endif

                                                <li><a href="/blog">News</a></li>
                                                <!-- <li><a href="contact.html">Contact</a></li> -->
                                                <!-- Button -->

                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <!-- Header End -->
    </header>


    @yield('content')


<footer>
    <div class="footer-wrappr " data-background="{{ asset('images/gallery/footer-bg.png')}}">
        <!-- footer-bottom area -->
        <div class="footer-bottom-area">
            <div class="container">
                <div class="footer-border">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="footer-copy-right text-center">
                                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved  by  YTMCash
                                  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>

                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </footer>
  <!-- Scroll Up -->
  <div id="back-top" >
    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>

<!-- JS here -->

<script src="{{ asset('js/vendor/modernizr-3.5.0.min.js')}}"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src="{{ asset('js/vendor/jquery-1.12.4.min.js')}}"></script>
<script src="{{ asset('js/popper.min.js')}}"></script>
<script src="{{ asset('js/bootstrap.min.js')}}"></script>
<!-- Jquery Mobile Menu -->
<script src="{{ asset('js/jquery.slicknav.min.js')}}"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="{{ asset('js/owl.carousel.min.js')}}"></script>
<script src="{{ asset('js/slick.min.js')}}"></script>
<!-- One Page, Animated-HeadLin -->
<script src="{{ asset('js/wow.min.js')}}"></script>
<script src="{{ asset('js/animated.headline.js')}}"></script>
<script src="{{ asset('js/jquery.magnific-popup.js')}}"></script>

<!-- Date Picker -->
<script src="{{ asset('js/gijgo.min.js')}}"></script>

<!-- Video bg -->
<script src="{{ asset('js/jquery.vide.js')}}"></script>

<!-- Nice-select, sticky -->
<script src="{{ asset('js/jquery.nice-select.min.js')}}"></script>
<script src="{{ asset('js/jquery.sticky.js')}}"></script>
<!-- Progress -->
<script src="{{ asset('js/jquery.barfiller.js')}}"></script>

<!-- counter , waypoint,Hover Direction -->
<script src="{{ asset('js/jquery.counterup.min.js')}}"></script>
<script src="{{ asset('js/waypoints.min.js')}}"></script>
<script src="{{ asset('js/jquery.countdown.min.js')}}"></script>
<script src="{{ asset('js/hover-direction-snake.min.js')}}"></script>

<!-- contact js -->

<script src="{{ asset('js/jquery.form.js')}}"></script>
<script src="{{ asset('js/jquery.validate.min.js')}}"></script>
<script src="{{ asset('js/mail-script.js')}}"></script>
<script src="{{ asset('js/jquery.ajaxchimp.min.js')}}"></script>

<!-- Jquery Plugins, main Jquery -->
<script src="{{ asset('js/plugins.js')}}"></script>
<script src="{{ asset('js/main.js')}}"></script>

<script src="{{ asset('js/waypoints.min.js')}}"></script>
<script src="{{ asset('js/bootstrap-waitingfor.js')}}"></script>
<script src="{{ asset('js/contact.js')}}"></script>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/638dbc8cdaff0e1306daf5f8/1gjgqh1e7';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script-->

</body>
</html>
