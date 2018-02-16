<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Kangkoding') }}</title>

    <!-- Styles -->
    <link rel="shortcut icon" type="image/png" href="/img/icon/logo.jpg"/>
    <!-- Styles -->

    <link rel="stylesheet" href="/js/fancybox/jquery.fancybox-1.3.4.css" media="screen" />
  	<link rel="stylesheet" href="/css/base.css">
  	<link rel="stylesheet" href="/css/amazium.css">
  	<link rel="stylesheet" href="/css/iview.css">

  	<link rel="stylesheet" href="/css/style.css">
  	<link rel="stylesheet" href="/css/elements.css">
  	<link rel="stylesheet" href="/css/sb.css">
  	<link rel="stylesheet" href="/css/layout.css">
  	<link rel="stylesheet" href="/skin/orange.css">

    <link href="/css/font-awesome.min.css" rel="stylesheet" />
    <!-- <link href="/css/app.css" rel="stylesheet"> -->
    <link href="/css/header.css" rel="stylesheet">
    <link href="/css/footer.css" rel="stylesheet">
    <link href="/css/jquery-ui.min.css" rel="stylesheet">
    <link href="/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="/css/highcharts.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">

    <script src="/js/app.js"></script>
    <!-- <script src="/js/jquery-1.12.4.min.js"></script> -->
    <script src="/js/jquery-1.8.3.min.js"></script>

    <script src="/js/raphael-min.js" type="text/javascript"></script>
    <script src="/js/jquery.easing.1.3.js" type="text/javascript"></script>

    <script src="/js/iview/iview.js"></script>
    <script src="/js/iview/function.js"></script>

    <script src="/js/bw/jquery.blackandwhite.min.js"></script>
    <script src="/js/bw/function.js"></script>

    <script type="text/javascript" src="/js/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
  	<script type="text/javascript" src="/js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
  	<script src="/js/fancybox/function.js"></script>

    <script src="/js/tooltips.js"></script>

  	<script src="/js/twitter/jquery.tweet.js"></script>
  	<script src="/js/twitter/function.js"></script>

  	<script src="/js/functions.js"></script>


    <script src="/js/jquery-ui.min.js"></script>
    <script src="/js/jquery.dataTables.min.js"></script>
    <script src="/js/jquery.priceformat.min.js"></script>
    {{-- <script src="/js/highcharts.js"></script> --}}
    <script src="/js/highstock.js"></script>
    <script src="/js/spin.min.js"></script>
<link rel="stylesheet" href="/js/fancybox/jquery.fancybox-1.3.4.css" media="screen" />
    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body id="body">
    @include('includes.header')
    @yield('content')
    @include('includes.footer')
</body>
</html>
