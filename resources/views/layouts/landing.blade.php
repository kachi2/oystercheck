<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta description -->
    <meta name="description"
          content="">
    <meta name="author" content="">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
    <meta property="og:site_name" content=""/> <!-- website name -->
    <meta property="og:site" content=""/> <!-- website link -->
    <meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
    <meta property="og:description" content=""/> <!-- description shown in the actual shared post -->
    <meta property="og:image" content=""/> <!-- image link, make sure it's jpg -->
    <meta property="og:url" content=""/> <!-- where do you want your post to link to -->
    <meta property="og:type" content="article"/>

    <!--title-->
    <title>Oysterchecks</title>

    <!--favicon icon-->
    <link rel="shortcut icon" href="{{asset('/assets/images/favicon.png')}}">

    <!--google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700%7COpen+Sans:400,600&amp;display=swap" rel="stylesheet">

    <!--Bootstrap css-->
    <link rel="stylesheet" href="{{asset('/landing_assets/css/bootstrap.min.css')}}">
    <!--Magnific popup css-->
    <link rel="stylesheet" href="{{asset('/landing_assets/css/magnific-popup.css')}}">
    <!--Themify icon css-->
    <link rel="stylesheet" href="{{asset('/landing_assets/css/themify-icons.css')}}">
    <!--Fontawesome icon css-->
    <link rel="stylesheet" href="{{asset('/landing_assets/css/all.min.css')}}">
    <!--animated css-->
    <link rel="stylesheet" href="{{asset('/landing_assets/css/animate.min.css')}}">
    <!--ytplayer css-->
    <link rel="stylesheet" href="{{asset('/landing_assets/css/jquery.mb.YTPlayer.min.css')}}">
    <!--Owl carousel css-->
    <link rel="stylesheet" href="{{asset('/landing_assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('/landing_assets/css/owl.theme.default.min.css')}}">
    <!--custom css-->
    <link rel="stylesheet" href="{{asset('/landing_assets/css/style.css')}}">
    <!--responsive css-->
    <link rel="stylesheet" href="{{asset('/landing_assets/css/responsive.css')}}">

</head>
<body>

<!--loader start-->
<div id="preloader">
    <div class="loader1">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
</div>
<!--loader end-->

@include('partials.landing')

@yield('content')

@include('partials.landing_footer')


<button class="scroll-top scroll-to-target" data-target="html">
    <span class="ti-angle-up"></span>
</button>
<!--bottom to top button end-->


<!--jQuery-->
<script src="{{asset('/landing_assets/js/jquery-3.4.1.min.js')}}"></script>
<!--Popper js-->
<script src="{{asset('/landing_assets/js/popper.min.js')}}"></script>
<!--Bootstrap js-->
<script src="{{asset('/landing_assets/js/bootstrap.min.js')}}"></script>
<!--Magnific popup js-->
<script src="{{asset('/landing_assets/js/jquery.magnific-popup.min.js')}}"></script>
<!--jquery easing js-->
<script src="{{asset('/landing_assets/js/jquery.easing.min.js')}}"></script>
<!--jquery ytplayer js-->
<script src="{{asset('/landing_assets/js/jquery.mb.YTPlayer.min.js')}}"></script>
<!--Isotope filter js-->
<script src="{{asset('/landing_assets/js/mixitup.min.js')}}"></script>
<!--wow js-->
<script src="{{asset('/landing_assets/js/wow.min.js')}}"></script>
<!--owl carousel js-->
<script src="{{asset('/landing_assets/js/owl.carousel.min.js')}}"></script>
<!--countdown js-->
<script src="{{asset('/landing_assets/js/jquery.countdown.min.js')}}"></script>
<!--custom js-->
<script src="{{asset('/landing_assets/js/scripts.js')}}"></script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/61af7a68c82c976b71c03859/1fmancaoo';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</body>
</html>