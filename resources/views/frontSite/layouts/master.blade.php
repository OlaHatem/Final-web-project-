<!DOCTYPE html>
<html lang="en">
<!-- Basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Site Metas -->
<title>Loxury - @yield('page_title')</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">
<!-- site icon -->
<link rel="icon" href="images/fevicon.png" type="image/png" />
<!-- Bootstrap core CSS -->
<link href="css/bootstrap.css" rel="stylesheet">
<!-- FontAwesome Icons core CSS -->
<link href="css/font-awesome.min.css" rel="stylesheet">
<!-- Custom animate styles for this template -->
<link href="css/animate.css" rel="stylesheet">
<!-- Custom styles for this template -->
<link href="style.css" rel="stylesheet">
<!-- Responsive styles for this template -->
<link href="css/responsive.css" rel="stylesheet">
<!-- Colors for this template -->
<link href="css/colors.css" rel="stylesheet">
<!-- light box gallery -->
<link href="css/ekko-lightbox.css" rel="stylesheet">
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

@yield('cssCode')
<![endif]-->
</head>
<body id="home_page" class="home_page">
<!-- loader -->
<div id="preloader">
    <img class="preloader" src="images/logo.png" alt="#">
</div>
<!-- end loader -->
<!-- header -->
<header class="header">

@include('frontSite.layouts.header')
@include('frontSite.layouts.menu')

</header>
<!-- end header -->


@yield('content')


<!-- footer -->
<footer class="footer layout_padding">
  @include('frontSite.layouts.footer')
</footer>

<!-- end footer -->
<!-- Core JavaScript
   ================================================== -->
<script src="js/jquery.min.js"></script>
<script src="js/tether.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/parallax.js"></script>
<script src="js/animate.js"></script>
<script src="js/ekko-lightbox.js"></script>
<script src="js/custom.js"></script>
@yield('jsCode')
</body>
</html>
