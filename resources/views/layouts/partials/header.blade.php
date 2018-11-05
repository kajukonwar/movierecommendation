<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>One Movies an Entertainment Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="One Movies Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
    function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="{{asset('css/vendor/template/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href="{{asset('css/vendor/template/style.css')}}" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="{{asset('css/vendor/template/contactstyle.css')}}" type="text/css" media="all" />
<link rel="stylesheet" href="{{asset('css/vendor/template/faqstyle.css')}}" type="text/css" media="all" />
<link href="{{asset('css/vendor/template/single.css')}}" rel='stylesheet' type='text/css' />
<link href="{{asset('css/vendor/template/medile.css')}}" rel='stylesheet' type='text/css' />
<!-- banner-slider -->
<link href="{{asset('css/vendor/template/jquery.slidey.min.css')}}" rel="stylesheet">
<!-- //banner-slider -->
<!-- pop-up -->
<link href="{{asset('css/vendor/template/popuo-box.css')}}" rel="stylesheet" type="text/css" media="all" />
<!-- //pop-up -->
<!-- font-awesome icons -->
<link rel="stylesheet" href="{{asset('css/vendor/template/font-awesome.min.css')}}" />
<!-- //font-awesome icons -->
<!-- js -->
<script type="text/javascript" src="{{asset('js/vendor/template/jquery-2.1.4.min.js')}}"></script>
<!-- //js -->
<!-- banner-bottom-plugin -->
<link href="{{asset('css/vendor/template/owl.carousel.css')}}" rel="stylesheet" type="text/css" media="all">
<script src="{{asset('js/vendor/template/owl.carousel.js')}}"></script>
<script>
  $(document).ready(function() { 
    $("#owl-demo").owlCarousel({
   
      autoPlay: 3000, //Set AutoPlay to 3 seconds
   
      items : 5,
      itemsDesktop : [640,4],
      itemsDesktopSmall : [414,3]
   
    });
   
  }); 
</script> 
<!-- //banner-bottom-plugin -->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="{{asset('js/vendor/template/move-top.js')}}"></script>
<script type="text/javascript" src="{{asset('js/vendor/template/easing.js')}}"></script>
<script type="text/javascript">
  jQuery(document).ready(function($) {
    $(".scroll").click(function(event){   
      event.preventDefault();
      $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
    });
  });
</script>
<!-- start-smoth-scrolling -->
</head>
  
<body>
<!-- header -->
  <div class="header">
    <div class="container">
      <div class="w3layouts_logo">
        <a href="index.html"><h1>One<span>Movies</span></h1></a>
      </div>
      <div class="w3_search">
        <form action="#" method="post">
          <input type="text" name="Search" placeholder="Search" required="">
          <input type="submit" value="Go">
        </form>
      </div>
      <div class="w3l_sign_in_register">
        <ul>
          <li><i class="fa fa-phone" aria-hidden="true"></i> (+000) 123 345 653</li>
          <li><a href="#" data-toggle="modal" data-target="#myModal">Login</a></li>
        </ul>
      </div>
      <div class="clearfix"> </div>
    </div>
  </div>
<!-- //header -->
<!-- bootstrap-pop-up -->
  <div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          Sign In & Sign Up
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>            
        </div>
        <section>
          <div class="modal-body">
            <div class="w3_login_module">
              <div class="module form-module">
                <div class="toggle"><i class="fa fa-times fa-pencil"></i>
                <div class="tooltip">Click Me</div>
                </div>
                <div class="form">
                <h3>Login to your account</h3>
                <form action="#" method="post">
                  <input type="text" name="Username" placeholder="Username" required="">
                  <input type="password" name="Password" placeholder="Password" required="">
                  <input type="submit" value="Login">
                </form>
                </div>
                <div class="form">
                <h3>Create an account</h3>
                <form action="#" method="post">
                  <input type="text" name="Username" placeholder="Username" required="">
                  <input type="password" name="Password" placeholder="Password" required="">
                  <input type="email" name="Email" placeholder="Email Address" required="">
                  <input type="text" name="Phone" placeholder="Phone Number" required="">
                  <input type="submit" value="Register">
                </form>
                </div>
                <div class="cta"><a href="#">Forgot your password?</a></div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
  <script>
    $('.toggle').click(function(){
      // Switches the Icon
      $(this).children('i').toggleClass('fa-pencil');
      // Switches the forms  
      $('.form').animate({
      height: "toggle",
      'padding-top': 'toggle',
      'padding-bottom': 'toggle',
      opacity: "toggle"
      }, "slow");
    });
  </script>
<!-- //bootstrap-pop-up -->