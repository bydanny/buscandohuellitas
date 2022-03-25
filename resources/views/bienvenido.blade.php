<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <!-- Site Title-->
    <title>Home</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="../images/favicon.ico" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Montserrat:400,700%7COpen+Sans:300,300italic,400,600,700,900">
    <link rel="stylesheet" href="../css/style.css">
		<!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="../vendors/images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="../vendors/js/html5shiv.min.js"></script>
		<![endif]-->
  </head>
  <body>
    <!-- Preloader-->
    <div class="preloader loaded">
      <div class="preloader-body">
        <div class="cssload-container">
          <div class="cssload-speeding-wheel"></div>
        </div>
        <p>Loading...</p>
      </div>
    </div>
    <!-- Page-->
    <div class="page text-center">
      <!-- Page Header-->
      <header class="page-head">
        <!-- RD Navbar-->     
      <div class="rd-navbar-wrap">
          <nav class="rd-navbar" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-sm-device-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fullwidth" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-sm-stick-up-offset="50px" data-lg-stick-up-offset="90px">
            <div class="rd-navbar-inner">
              <!-- RD Navbar Panel-->
              <div class="rd-navbar-panel">
                <!-- RD Navbar Toggle-->
                <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                <!-- RD Navbar Brand-->
                <div class="rd-navbar-brand"><a class="brand-name" href="index.html"><img src="../vendors/images/logo.png" width="162" height="61" alt=""></a></div>
              </div>
              <div class="rd-navbar-nav-wrap">
                <!-- RD Navbar Nav-->
                
                <ul class="rd-navbar-nav">
                  <li class="active"><a href="./">Home page</a></li>
                  <li><a href="gallery.html">Gallery</a></li>
                  <li><a href="about.html">About us</a>
                    <!-- RD Navbar Dropdown-->
                    <ul class="rd-navbar-dropdown">
                      <li><a href="#">history</a></li>
                      <li><a href="#">offers</a></li>
                      <li><a href="#">news</a>
                        <ul class="rd-navbar-dropdown">
                          <li><a href="#">fresh</a></li>
                          <li><a href="#">archive</a></li>
                          <li><a href="404.html">404</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li><a href="link.com">Links</a></li>
                  <li><a href="contacts.html">Contacts</a></li>
                  <!-- Poner un logo -->
                  <li><a href="login.html">Más +</a>
                    <!-- RD Navbar Dropdown -->
                    <ul class="rd-navbar-dropdown">
                      <li><a href="{{route('login')}}">Ingresar</a></li>
                      <li><a href="{{route('register')}}">Registrar</a></li>
                      
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
            @include('layouts.partials.login-modal')
          </nav>
        </div>

       
      </header>
      <!-- Page Content-->
      <main>
      @include('layouts.content')
      </main>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

      <!-- Page Footer-->
      <footer class="page-footer">
        <div class="container"><span>&#169;</span> <span id="copyright-year"></span>
          <hr class="divider divider-default divider-vertical"><a href="privacy.html">Privacy policy</a>
        </div>
      </footer>
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- PhotoSwipe Gallery-->
    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="pswp__bg"></div>
      <div class="pswp__scroll-wrap">
        <div class="pswp__container">
          <div class="pswp__item"></div>
          <div class="pswp__item"></div>
          <div class="pswp__item"></div>
        </div>
        <div class="pswp__ui pswp__ui--hidden">
          <div class="pswp__top-bar">
            <div class="pswp__counter"></div>
            <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
            <button class="pswp__button pswp__button--share" title="Share"></button>
            <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
            <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
            <div class="pswp__preloader">
              <div class="pswp__preloader__icn">
                <div class="pswp__preloader__cut">
                  <div class="pswp__preloader__donut"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
            <div class="pswp__share-tooltip"></div>
          </div>
          <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
          <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
          <div class="pswp__caption">
            <div class="pswp__caption__cent"></div>
          </div>
        </div>
      </div>
    </div>
    <!-- Java script-->
    <script src="../js/core.min.js"></script>
    <script src="../js/script.js"></script>
  </body>
</html>