<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
    <!-- ========== SEO ========== -->

    <meta content="" name="description">
    <meta content="" name="keywords">
    <meta content="" name="author">
    <!-- ========== FAVICON ========== -->
    <link rel="apple-touch-icon-precomposed" href="images/favicon-apple.png" />
    <link rel="icon" href="images/favicon.png">
    <!-- ========== STYLESHEETS ========== -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-select.min.css">
    <link rel="stylesheet" href="css/jquery.mmenu.css">
    <link rel="stylesheet" href="revolution/css/layers.css">
    <link rel="stylesheet" href="revolution/css/settings.css">
    <link rel="stylesheet" href="revolution/css/navigation.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/daterangepicker.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <!-- ========== ICON FONTS ========== -->
    <link href="fonts/font-awesome.min.css" rel="stylesheet">
    <link href="fonts/flaticon.css" rel="stylesheet">
    <!-- ========== GOOGLE FONTS ========== -->
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,500,600,700%7CRoboto:100,300,400,400i,500,700"
      rel="stylesheet">
    {{-- @vite('resources/css/app.css') --}}
    <title>Hotel Himara - Hotel HTML Template</title>

      <!-- ========== JAVASCRIPT ========== -->
      <script src="js/jquery.min.js" defer></script>
      <script src="http://maps.google.com/maps/api/js?key=YOUR_API_KEY" defer></script>
      <script src="js/bootstrap.min.js" defer></script>
      <script src="js/bootstrap-select.min.js" defer></script>
      <script src="js/jquery.mmenu.js" defer></script>
      <script src="js/jquery.inview.min.js" defer></script>
      <script src="js/jquery.countdown.min.js" defer></script>
      <script src="js/jquery.magnific-popup.min.js" defer></script>
      <script src="js/owl.carousel.min.js" defer></script>
      <script src="js/owl.carousel.thumbs.min.js" defer></script>
      <script src="js/isotope.pkgd.min.js" defer></script>
      <script src="js/imagesloaded.pkgd.min.js" defer></script>
      <script src="js/masonry.pkgd.min.js" defer></script>
      <script src="js/wow.min.js" defer></script>
      <script src="js/countup.min.js" defer></script>
      <script src="js/moment.min.js" defer></script>
      <script src="js/daterangepicker.js" defer></script>
      <script src="js/parallax.min.js" defer></script>
      <script src="js/smoothscroll.min.js" defer></script>
      <script src="js/instafeed.min.js" defer></script>
      <script src="js/main.js" defer></script>
      <!-- ========== REVOLUTION SLIDER ========== -->
      <script src="revolution/js/jquery.themepunch.tools.min.js" defer></script>
      <script src="revolution/js/jquery.themepunch.revolution.min.js" defer></script>
      <script src="revolution/js/extensions/revolution.extension.actions.min.js" defer></script>
      <script src="revolution/js/extensions/revolution.extension.carousel.min.js"></script>
      <script src="revolution/js/extensions/revolution.extension.kenburn.min.js" defer></script>
      <script src="revolution/js/extensions/revolution.extension.layeranimation.min.js" defer></script>
      <script src="revolution/js/extensions/revolution.extension.migration.min.js" defer></script>
      <script src="revolution/js/extensions/revolution.extension.navigation.min.js" defer></script>
      <script src="revolution/js/extensions/revolution.extension.parallax.min.js" defer></script>
      <script src="revolution/js/extensions/revolution.extension.slideanims.min.js" defer></script>
      <script src="revolution/js/extensions/revolution.extension.video.min.js" defer></script>

</head>
<body>
    @include('partials.mobilemenu')

    @include('partials.topmenu')
    @include('partials.nav')
    <div class="wrapper">

        @yield('content')

        @include('partials.footer')
    </div>
</body>
</html>
