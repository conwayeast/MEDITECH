<!doctype html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>MEDITECH</title>
  <script src="js/vendor/modernizr.js"></script>

  <script src="//use.edgefonts.net/source-sans-pro.js"></script>

  <!-- Main Stylesheet -->
  <link type="text/css" rel="stylesheet" href="css/main.css">

  <!-- IE 8 & 9 Polyfills and other fixes
         - This is a combination of multiple IE specific .js files that
           help Foundation 5 work on IE 8 & 9. - JC -->
  <!--[if lt IE 9]>
    <script src="js/ie-js-files/ieFixes.min.js"></script>
  <![endif]-->

</head>

<body>
<!-- HEADER -->
  <header>
    <div id="header" ><!-- class="hide-for-small" -->
      <div class="row header-hide">
        <!-- LOGO -->
          <div class="medium-6 columns">
            <h1 class="left logo"><a href="index.php">MEDITECH</a></h1>
          </div>
        <!-- SEARCH & LOGIN-->
          <div class="medium-6 columns">
            <div class="row topright">
              <!-- SEARCH -->
              <div class="medium-8 columns">
                <div class="row collapse">
                  <div class="small-8 columns">
                    <input type="text" placeholder="Search meditech.com">
                  </div>
                  <div class="small-4 columns">
                    <a href="#" class="button postfix">Search</a>
                  </div>
                </div>
              </div>
            <!-- LOGIN -->
              <div class="medium-4 columns">
                <a href="#" class="button tiny expand clogin">Customer Portal</a>
              </div>
            </div>
          </div>
        <!-- End SEACH & LOGIN -->
        </div>
      <!-- NAVIGATION -->
        <nav>
          <div class="row">
            <div class="columns">
              <ul class="menu mainmenu">
              <!-- SOLUTIONS -->
                <li class="first"><a href="solutions.php">EHR Solutions</a></li>
              <!-- EVENTS -->
                <li><a href="events.php">Events</a></li>
              <!-- NEWS -->
                <li><a href="news.php">News</a></li>
              <!-- ABOUT -->
                <li><a href="about.php">About</a></li>
              <!-- CONTACT -->
                <li><a href="contact.php">Contact</a></li>
              </ul>
            </div>
          </div>
        </nav>
      <!-- END NAVIGATION -->
    </div>
  </header>
<!-- END HEADER -->

<!-- ============================

        STICKY HEADER

================================= -->

<header>
  <div id="stickyNav">
    <!-- DESKTOP STICKY NAV -->
      <div id="desktopnav" class="row clearfix">
        <h1><a class="logo" href="#">M</a></h1>
        <!-- NAV -->
        <nav>
          <ul class="menu">
            <!-- SOLUTIONS -->
              <li><a href="solutions.php">EHR Solutions</a></li>
            <!-- EVENTS -->
              <li><a href="events.php">Events</a></li>
            <!-- NEWS -->
              <li><a href="news.php">News</a></li>
            <!-- ABOUT -->
              <li><a href="about.php">About</a></li>
            <!-- CONTACT -->
              <li><a href="contact.php">Contact</a></li>
          </ul>
          <!-- ICONS -->
            <ul class="buttons">
            <!-- SEARCH -->
              <li><a class="menu-icon search-menu sb-close" href="#"><!-- <img src="https://cdn3.iconfinder.com/data/icons/wpzoom-developer-icon-set/500/67-128.png"> --></a></li>
            <!-- CUSTOMER -->
              <li style="padding-left:0;"><a class="menu-icon login-menu sb-toggle-right" href=""><!-- <img src="img/customerlogin.svg"> --></a></li>
            </ul>
        </nav>
      </div>
    <!-- END DESKTOP STICKY NAV -->

    <!-- MOBILE STICKY NAV -->
      <nav id="mobilenav">
        <a class="menu-icon main-menu sb-toggle-left">Menu</a>
        <h1 class="logo"><a href="index.php">MEDITECH</a></h1>
        <a class="menu-icon login-menu sb-toggle-right" href="#"></a>
        <a class="menu-icon search-menu sb-close" href="#"></a>
        <div class="clear"></div>
      </nav>
    <!-- End MOBILE STICKY NAV -->

    <!-- SEARCH DROPDOWN -->
      <div id="search-form">
        <form class="searchform" role="search" method="get" id="searchform" action="">
          <div class="row collapse">
            <div class="small-8 columns">
              <input type="text" placeholder="Search meditech.com">
            </div>
            <div class="small-4 columns">
              <a href="#" class="button postfix">Search</a>
            </div>
          </div>
        </form>
      </div>
    <!-- END SEARCH DROPDOWN -->

  </div>
<!-- END STICKY HEADER -->
</header>

<!-- ============================

        BEGIN CONTENT

================================= -->

<section role="main">
  <div id="sb-site">
    <div id="page">
    <!-- END of HEADER INCLUDE file -->

