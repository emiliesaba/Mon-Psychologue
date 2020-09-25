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
  <link href="{{asset('asset/css/elegant-icons-style.css')}}" rel="stylesheet" />
  <link href="{{asset('asset/css/font-awesome.min.css')}}" rel="stylesheet" />
  <!-- full calendar css-->
  <link href="{{asset('assetsd/fullcalendar/fullcalendar/bootstrap-fullcalendar.css')}}" rel="stylesheet" />
  <link href="{{asset('assetsd/fullcalendar/fullcalendar/fullcalendar.css')}}" rel="stylesheet" />
  <!-- easy pie chart-->
  <link href="{{asset('assetsd/jquery-easy-pie-chart/jquery.easy-pie-chart.css')}}" rel="stylesheet" type="text/css" media="screen" />
  <!-- owl carousel -->
  <link rel="{{asset('asset/stylesheet" href="css/owl.carousel.css" type="text/css')}}">
  <link href="{{asset('asset/css/jquery-jvectormap-1.2.2.css')}}" rel="stylesheet">
  <!-- Custom styles -->
  <link rel="{{asset('asset/stylesheet" href="css/fullcalendar.css')}}">
  <link href="{{asset('asset/css/widgets.css')}}" rel="stylesheet">
  <link href="{{asset('asset/css/style.css')}}" rel="stylesheet">
  <link href="{{asset('asset/css/monstyle.css')}}" rel="stylesheet">
  <link href="{{asset('css/style-responsive.css')}}" rel="stylesheet" />
  <link href="{{asset('css/xcharts.min.css')}}" rel=" stylesheet">
  <link href="{{asset('css/jquery-ui-1.10.4.min.css')}}" rel="stylesheet">
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

  <header class="header white-bg">
    <div class="toggle-nav">
      <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
    </div>

    <!--logo start-->
    <a href="index.html" class="logo text-success">Mon<span class="text-success">Psychologue</span></a>
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
    <div class="top-nav notification-row green">
    <ul class="nav pull-right top-menu">
    @guest
                          <li class="dropdown">
                              <a class="nav-link text-success" href="{{ route('login') }}">{{ __('Login') }}</a>
                          </li>
                          @if (Route::has('register'))
                              <li class="nav-item">
                                  <a class="nav-link text-success" href="{{ route('register') }}">{{ __('Register') }}</a>
                              </li>
                          @endif
                      @else
                          <li class="nav-item dropdown">
                              <a id="navbarDropdown text-success" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                  {{ Auth::user()->name }} <span class="caret"></span>
                              </a>

                              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                  <a class="dropdown-item text-success" href="{{ route('logout') }}"
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

    <aside>
      <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu dark-bg">
          <li class="active">
            <a class="" href="/home">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
          </li>
          @can('manage-users')
          <li class="sub-menu">
            <a href="{{route('admin.users.index')}}" class="">
                          <i class="icon_document_alt"></i>
                          <span>Utilisateur</span>
                        
                      </a>
          </li>
          @endcan
          <li>
            <a class="" href="{{route('documents.index')}}">
                          <i class="icon_genius"></i>
                          <span>Documents</span>
                      </a>
          </li>
          <li>
            <a class="" href="chart-chartjs.html">
                          <i class="icon_piechart"></i>
                          <span>groupe</span>

                      </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_documents_alt"></i>
                          <span>LOGOUT</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="profile.html">Profile</a></li>
              <li><a class="" href="login.html"><span>Login Page</span></a></li>
              <li><a class="" href="contact.html"><span>Contact Page</span></a></li>
              <li><a class="" href="blank.html">Blank Page</a></li>
              <li><a class="" href="404.html">404 Error</a></li>
            </ul>
          </li>

        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->

    <!--main content start-->
    @yield('content')
    <!--main content end-->
  </section>
  <!-- container section start -->

  
  <!-- javascripts -->
  <script src="{{asset('asset/js/jquery.js')}}"></script>
  <script src="{{asset('asset/js/jquery-ui-1.10.4.min.js')}}"></script>
  <script src="{{asset('asset/js/jquery-1.8.3.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('asset/js/jquery-ui-1.9.2.custom.min.js')}}"></script>
  <!-- bootstrap -->
  <script src="{{asset('asset/js/bootstrap.min.js')}}"></script>
  <!-- nice scroll -->
  <script src="{{asset('asset/js/jquery.scrollTo.min.js')}}"></script>
  <script src="{{asset('asset/js/jquery.nicescroll.js')}}" type="text/javascript"></script>
  <!-- charts scripts -->
  <script src="{{asset('assetsd/jquery-knob/js/jquery.knob.js')}}"></script>
  <script src="{{asset('asset/js/jquery.sparkline.js')}}" type="text/javascript"></script>
  <script src="{{asset('assetsd/jquery-easy-pie-chart/jquery.easy-pie-chart.js')}}"></script>
  <script src="{{asset('asset/js/owl.carousel.js')}}"></script>
  <!-- jQuery full calendar -->
  <<script src="{{asset('asset/js/fullcalendar.min.js')}}"></script>
    <!-- Full Google Calendar - Calendar -->
    <script src="{{asset('assetsd/fullcalendar/fullcalendar/fullcalendar.js')}}"></script>
    <!--script for this page only-->
    <script src="{{asset('asset/js/calendar-custom.js')}}"></script>
    <script src="{{asset('asset/js/jquery.rateit.min.js')}}"></script>
    <!-- custom select -->
    <script src="{{asset('asset/js/jquery.customSelect.min.js')}}"></script>
    <script src="{{asset('assetsd/chart-master/Chart.js')}}"></script>

    <!--custome script for all page-->
    <script src="{{asset('asset/js/scripts.js')}}"></script>
    <!-- custom script for this page-->
    <script src="{{asset('asset/js/sparkline-chart.js')}}"></script>
    <script src="{{asset('asset/js/easy-pie-chart.js')}}"></script>
    <script src="{{asset('asset/js/jquery-jvectormap-1.2.2.min.js')}}"></script>
    <script src="{{asset('asset/js/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script src="{{asset('asset/js/xcharts.min.js')}}"></script>
    <script src="{{asset('asset/js/jquery.autosize.min.js')}}"></script>
    <script src="{{asset('asset/js/jquery.placeholder.min.js')}}"></script>
    <script src="{{asset('asset/js/gdp-data.js')}}"></script>
    <script src="{{asset('asset/js/morris.min.js')}}"></script>
    <script src="{{asset('asset/js/sparklines.js')}}"></script>
    <script src="{{asset('asset/js/charts.js')}}"></script>
    <script src="{{asset('asset/js/jquery.slimscroll.min.js')}}"></script>
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
