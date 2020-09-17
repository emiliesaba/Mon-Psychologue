<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    <title>Carousel Template · Bootstrap</title>

    <link rel="canonical" href="{{asset('https://getbootstrap.com/docs/4.4/examples/carousel/')}}">
    <link href="{{asset('assets/img/favicon.png')}}" rel="icon">
    <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">
    <link href="{{asset('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900')}}" rel="stylesheet">
    <!-- Bootstrap core CSS -->
<link href="{{asset('dist/css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Favicons -->
  <!-- Template Main CSS File -->
  <link href="{{asset('assets2/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets2/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets2/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets2/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets2/vendor/venobox/venobox.css')}}" rel="stylesheet">
  <link href="{{asset('assets2/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets2/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('assets2/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('assets2/css/style.css')}}" rel="stylesheet" type="text/css">
<link rel="apple-touch-icon" href="{{asset('assets/img/favicons/apple-touch-icon.png')}}" sizes="180x180">
<link rel="icon" href="{{asset('assets/img/favicons/favicon-32x32.png')}}" sizes="32x32" type="image/png">
<link rel="icon" href="{{asset('assets/img/favicons/favicon-16x16.png')}}" sizes="16x16" type="image/png">
<link rel="manifest" href="{{asset('assets/img/favicons/manifest.json')}}">
<link rel="mask-icon" href="{{asset('assets/img/favicons/safari-pinned-tab.svg')}}" color="#563d7c">
<link rel="icon" href="{{asset('assets/img/favicons/favicon.ico')}}">
<meta name="msapplication-config" content="{{asset('assets/img/favicons/browserconfig.xml')}}">
<meta name="theme-color" content="#563d7c">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
  </head>
  <body>
    <header>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="index.php"><img class="logo" src="{{asset('assets/images/img7.png')}}"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item mx-3 titre active"><a class="nav-link" href="{{route('accueil')}}">ACCUEIL</a></li>
      <li class="nav-item mx-3 titre"><a class="nav-link" href="{{route('consultation')}}">Consultation</a></li>
      <li class="nav-item mx-3 titre"><a class="nav-link" href="{{route('psychotheque')}}">Psychotheque</a></li>
      <li class="nav-item mx-3 titre"><a class="nav-link" href="{{route('groupe')}}">Groupe de soutien</a></li>
      <li class="nav-item mx-3 titre"><a class="nav-link" href="{{route('inscription')}}">S'inscrire</a></li>
    </ul>
    <form class="form-inline mt-2 mt-md-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>
  </div>
</nav>

</header>