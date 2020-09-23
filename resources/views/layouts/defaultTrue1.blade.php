<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Creative - Bootstrap Admin Template</title>
  <script src="{{ asset('js/app.js') }}" defer></script>
  <!-- Bootstrap CSS -->
  <link href="{{asset('assetsd/css/bootstrap.min.css')}}" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="{{asset('assetsd/css/bootstrap-theme.css')}}" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{asset('assetsd/css/elegant-icons-style.css')}}" rel="stylesheet" />
  <link href="{{asset('assetsd/css/font-awesome.min.css')}}" rel="stylesheet" />
  <!-- full calendar css-->
  <link href="{{asset('assetsd/fullcalendar/fullcalendar/bootstrap-fullcalendar.css')}}" rel="stylesheet" />
  <link href="{{asset('assetsd/fullcalendar/fullcalendar/fullcalendar.css')}}" rel="stylesheet" />
  <!-- easy pie chart-->
  <link href="{{asset('assetsd/jquery-easy-pie-chart/jquery.easy-pie-chart.css')}}" rel="stylesheet" type="text/css" media="screen" />
  <!-- owl carousel -->
  <link rel="{{asset('assetsd/stylesheet" href="css/owl.carousel.css" type="text/css')}}">
  <link href="{{asset('assetsD/css/jquery-jvectormap-1.2.2.css')}}" rel="stylesheet">
  <!-- Custom styles -->
  <link rel="{{asset('assetsd/stylesheet" href="css/fullcalendar.css')}}">
  <link href="{{asset('assetsd/css/widgets.css')}}" rel="stylesheet">
  <link href="{{asset('assetsd/css/style.css')}}" rel="stylesheet">
  <link href="{{asset('assetsd/css/monstyle.css')}}" rel="stylesheet">
  <link href="css/style-responsive.css')}}" rel="stylesheet" />
  <link href="css/xcharts.min.css')}}" rel=" stylesheet">
  <link href="css/jquery-ui-1.10.4.min.css')}}" rel="stylesheet">
  <!-- =======================================================
    Theme Name: NiceAdmin
    Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <!-- container section start -->
 <section id="container" class="">

  <header class="header dark-bg">
    <div class="toggle-nav">
      <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
    </div>

    <!--logo start-->
    <a href="index.html" class="logo">EMPLOI DU <span class="lite">TEMPS</span></a>
    <!--logo end-->

    <div class="nav search-row" id="top_menu">
      <!--  search form start -->
      <ul class="nav top-menu">
        <li>
          <form class="navbar-form">
            <input class="form-control" placeholder="RECHERCHE" type="text">
          </form>
        </li>
      </ul>
      <!--  search form end -->
    </div> 
    <div class="top-nav notification-row">
    <ul class="nav pull-right top-menu">
    @guest
                          <li class="dropdown">
                              <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                          </li>
                          @if (Route::has('register'))
                              <li class="nav-item">
                          
                              </li>
                          @endif
                      @else
                          <li class="nav-item dropdown">
                              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                  {{ Auth::user()->name }} <span class="caret"></span>
                              </a>

                              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                  <a class="dropdown-item" href="{{ route('logout') }}"
                                     onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                                      {{ __('Logout') }}
                                  </a>

                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                      @csrf
                                  </form>
                                  
                              </div>
                          </li>
                      @endguest
  
    
                  </ul>
    </div>
 
      <!-- notificatoin dropdown end-->
    </div>
  </header>
  <!--header end-->

    <!--sidebar end-->

    <!--main content start-->
    @yield('content')
    <!--main content end-->
  </section>
  <!-- container section start -->

  <!-- javascripts -->
  <script src="{{asset('assetsd/js/jquery.js')}}"></script>
  <script src="{{asset('assetsd/js/jquery-ui-1.10.4.min.js')}}"></script>
  <script src="{{asset('assetsd/js/jquery-1.8.3.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('assetsd/js/jquery-ui-1.9.2.custom.min.js')}}"></script>
  <!-- bootstrap -->
  <script src="{{asset('assetsd/js/bootstrap.min.js')}}"></script>
  <!-- nice scroll -->
  <script src="{{asset('assetsd/js/jquery.scrollTo.min.js')}}"></script>
  <script src="{{asset('assetsd/js/jquery.nicescroll.js')}}" type="text/javascript"></script>
  <!-- charts scripts -->
  <script src="{{asset('assetsd/jquery-knob/js/jquery.knob.js')}}"></script>
  <script src="{{asset('assetsd/js/jquery.sparkline.js')}}" type="text/javascript"></script>
  <script src="{{asset('assetsd/jquery-easy-pie-chart/jquery.easy-pie-chart.js')}}"></script>
  <script src="{{asset('assetsd/js/owl.carousel.js')}}"></script>
  <!-- jQuery full calendar -->
  <script src="{{asset('assetsd/js/fullcalendar.min.js')}}"></script>
    <!-- Full Google Calendar - Calendar -->
  <script src="{{asset('assetsd/fullcalendar/fullcalendar/fullcalendar.js')}}"></script>
    <!--script for this page only-->
    <script src="{{asset('assetsd/js/calendar-custom.js')}}"></script>
    <script src="{{asset('assetsd/js/jquery.rateit.min.js')}}"></script>
    <!-- custom select -->
    <script src="{{asset('assetsd/js/jquery.customSelect.min.js')}}"></script>
    <script src="{{asset('assetsd/assets/chart-master/Chart.js')}}"></script>

    <!--custome script for all page-->
    <script src="{{asset('assetsd/js/scripts.js')}}"></script>
    <!-- custom script for this page-->
    <script src="{{asset('assetsd/js/sparkline-chart.js')}}"></script>
    <script src="{{asset('assetsd/js/easy-pie-chart.js')}}"></script>
    <script src="{{asset('assetsd/js/jquery-jvectormap-1.2.2.min.js')}}"></script>
    <script src="{{asset('assetsd/js/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script src="{{asset('assetsd/js/xcharts.min.js')}}"></script>
    <script src="{{asset('assetsd/js/jquery.autosize.min.js')}}"></script>
    <script src="{{asset('assetsd/js/jquery.placeholder.min.js')}}"></script>
    <script src="{{asset('assetsd/js/gdp-data.js')}}"></script>
    <script src="{{asset('assetsd/js/morris.min.js')}}"></script>
    <script src="{{asset('assetsd/js/sparklines.js')}}"></script>
    <script src="{{asset('assetsd/js/charts.js')}}"></script>
    <script src="{{asset('assetsd/js/jquery.slimscroll.min.js')}}"></script>
    <script>
      //knob
      $(function() {
        $(".knob").knob({
          'draw': function() {
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
        $("#owl-slider").owlCarousel({
          navigation: true,
          slideSpeed: 300,
          paginationSpeed: 400,
          singleItem: true

        });
      });

      //custom select box

      $(function() {
        $('select.styled').customSelect();
      });

      /* ---------- Map ---------- */
      $(function() {
        $('#map').vectorMap({
          map: 'world_mill_en',
          series: {
            regions: [{
              values: gdpData,
              scale: ['#000', '#000'],
              normalizeFunction: 'polynomial'
            }]
          },
          backgroundColor: '#eef3f7',
          onLabelShow: function(e, el, code) {
            el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
          }
        });
      });
    </script>

</body>

</html>
