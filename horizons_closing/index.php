<?
  session_start();
  require 'inc/func.inc.php';
  $ip = getVisIpAddr();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.min.css">
    <link rel="stylesheet" href="css/all.min.css" type="text/css">
    <title>KTS -know and think then solve</title>
  </head>
  <body>
    <?$country = getCountry($ip)?>
    <input type="text" value="<?//echo getCountry($conn)?>" id="countryGet" hidden="">
    <div class="top-bar">
      <div class="container">
        <div class="row">
          <div class="col-6">
            For more iformation vist WHO website <a href="https://www.who.int">who</a>
          </div>
          <div class="col-6 text-right">
            <i class="fas fa-phone-alt mr-2"></i>For instant help call (105)
          </div>
        </div>
      </div>
    </div>
    <header class="mt-3">
      <div class="container">
        <div class="row">
          <div class="col-md-5">
            <div class="logo-area">
              <div class="container-fluid">
                <img class="img-fluid" src="img/logo.png">
              </div>
            </div>
          </div>
          <div class="col-md-7">
            <div class="menu">
              <div class="container-fluid">
                <ul class="list-unstyled">
                  <li class="d-inline ml-3"><a class="rounded active" href='index.php'>Home<a></li>
                  <li class="d-inline ml-3"><a class="rounded" href='covid19.php'>What is Covid-19<a></li>
                  <li class="d-inline ml-3"><a class="rounded" href='whtat_should.php'>What should you do<a></li>
                  <li class="d-inline ml-3"><a class="rounded" href='help.php'>Help us<a></li>
                  <li class="d-inline ml-3"><a class="rounded" href='signup.php'>Sign up<a></li>
                  <li class="d-inline ml-3"><a class="rounded" href='signin.php'>Sign in<a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <section class="carousel-sec mt-2">
      <img class="img-fluid" src="img/cover2.png">
      <div class="container">
        <!-- <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="..." class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="..." class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="..." class="d-block w-100" alt="...">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div> -->
      </div>
    </section>
    <section class="stats">
      <div class="container">
        <h2 class="text-center font-weight-bold mt-3 mb-4">Lastest local statistics</h2>
        <h3 class="font-weight-bold mb-2"><img src="https://www.countryflags.io/<?echo $country[1]?>/shiny/48.png" class="mr-3"><?echo $country[0]?></h3>
        <div class="country-stats">
          <?
          $country_stats = countryStats($country[1]);
          ?>
          <div class="row">
            <div class="col-md mt-2">
              <div class="stat-field">
                <div class="container-fluid">
                  <h6><b>New confirmed</b><br><?echo $country_stats[0]?></h6>
                </div>
              </div>
            </div>
            <div class="col-md mt-2">
              <div class="stat-field">
                <div class="container-fluid">
                  <h6><b>New deaths</b><br><?echo $country_stats[2]?></h6>
                </div>
              </div>
            </div>
            <div class="col-md mt-2">
              <div class="stat-field">
                <div class="container-fluid">
                  <h6><b>New recovered</b><br><?echo $country_stats[4]?></h6>
                </div>
              </div>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-md mt-2">
              <div class="stat-field">
                <div class="container-fluid">
                  <h6><b>Total confirmed</b><br><?echo $country_stats[1]?></h6>
                </div>
              </div>
            </div>
            <div class="col-md mt-2">
              <div class="stat-field">
                <div class="container-fluid">
                  <h6><b>Total deaths</b><br><?echo $country_stats[3]?></h6>
                </div>
              </div>
            </div>
            <div class="col-md mt-2">
              <div class="stat-field">
                <div class="container-fluid">
                  <h6><b>Total recovered</b><br><?echo $country_stats[5]?></h6>
                </div>
              </div>
            </div>
          </div>
        </div>
          <a class="d-block font-italic font-weight-bold text-center text-white" href="https://covid19.who.int/region/emro/country/<?echo $country[1]?>">Need more information? click here</a>
      </div>
    </section>
    <section class="map-sec">
      <div class="container">
        <h2 class="text-center">Patients' timeline</h2>
        <p class="lead text-center">This map contains all confiremed casss' location timeline, please be aware when vist any of these places</p>
        <iframe class="mt-3 mb-3 map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d57634998.36284615!2d-1.4406492523896939!3d28.153759087344607!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xadd28c30ec90d79%3A0x44652457c0696504!2z2LTZhdin2YQg2KfZhNmF2K3Ziti3INin2YTYo9i32YTYs9mK!5e0!3m2!1sar!2seg!4v1590939421600!5m2!1sar!2seg" frameborder="0" style="border:0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>
    </section>
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-sm">
            <h4 class="footer-header"><i class="fas fa-info mr-1"></i> About us</h4>
            <p class="mt-3">
              We are 4 students from Egypt particpate NASA space apps challenge program with project, hopping it be useful at our fight with Covid-19.
            </p>
          </div>
          <div class="col-sm">
            <h4 class="footer-header"><i class="fas fa-link mr-1"></i> Important links</h4>
            <ul class="mt-3 list-unstyled">
              <li><a href='https://www.who.int'>World Health Organization</a><li>
              <li><a href="https://www.google.com/search?hl=en&sxsrf=ALeKk03pkVi9Qes57Lqzzvh53Np2Wp0fpg:1590942342266&q=COVID-19&sa=X&ved=2ahUKEwjwwKyJwt7pAhVPyYUKHVvKDKYQzmcoAHoECAsQAQ&biw=1280&bih=913">Covid-19 information center - Google</a></li>
              <li><a href='https://www.facebook.com/coronavirus_info'>Covid-19 information center - Facebook</a><li>
            </ul>
          </div>
          <div class="col-sm">
            <h4 class="footer-header">Follow us</h4>
            <ul class="mt-3 list-unstyled">
              <li><a href='https://covid19.spaceappschallenge.org/challenges/covid-challenges/human-factors/teams/horizons-closing/project'><i class="fas fa-rocket mr-1"></i> NASA space apps challenge</a><li>
            </ul>
          </div>
        </div>
      </div>
      <div class="end-bar">
        <div class="container">
          <p class="text-center font-weight-bold">Copyright (c) 2020 Copyright Holder All Rights Reserved.<p>
          </div>
        </div>
    </footer>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
      $(function(){
        var country = $('#countryGet').val();
        var URL = "https://api.covid19api.com/"
      })
    </script>
  </body>
</html>
