<!DOCTYPE html>
<html lang="en">
<head>
    <title>Od zera do WebDeva</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ URL::asset('img/favicon.ico') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ URL::asset('img/favicon.ico') }}co" type="image/x-icon"/>
    <meta name="description" content="Your description">
    <meta name="keywords" content="Your keywords">
    <meta name="dyktek" content="Krzysztof Stanio">
</head>

<!--CSS-->
<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css') }}"/>
<link rel="stylesheet" href="{{ URL::asset('css/style.css') }}"/>
<link rel="stylesheet" href="{{ URL::asset('css/animate.css') }}"/>
<link rel="stylesheet" href="{{ URL::asset('fonts/font-awesome.css') }}"/>
<link rel="stylesheet" href="{{ URL::asset('css/contact-form.css') }}"/>
<link rel="stylesheet" href="{{ URL::asset('search/search.css') }}"/>

<!--JS-->
<script type="text/javascript" src="{{ URL::asset('js/jquery.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/jquery-migrate-1.2.1.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/superfish.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/jquery.easing.1.3.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/jquery.mobilemenu.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/jquery.ui.totop.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/jquery.equalheights.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/sForm.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/jquery.equalheights.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/TMForm.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/modal.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/bootstrap-filestyle.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/wow/wow.js') }}"></script>

<script type="text/javascript">
    $(document).ready(function () {
        if ($('html').hasClass('desktop')) {
            new WOW().init();
        }
    });
</script>

<!--[if lt IE 9]>
<div style='text-align:center'><a
        href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode"><img
        src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42"
        width="820"
        alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."/></a>
</div>
<![endif]-->
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<link rel="stylesheet" href="{{ URL::asset('https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js') }}">
<link rel="stylesheet" href="{{ URL::asset('https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js') }}">
<link rel="stylesheet" href="{{ URL::asset('css/ie.css') }}"/>
<![endif]-->
<body>
<!--header-->
<header class="clearfix">
    <div class="container">
        <div class="box clearfix">
            <h1 class="navbar-brand navbar-brand_"><a href="{{URL::to('/') }}"><img
                            src="{{ URL::asset('img/logo.png') }}" alt="logo" width="130" height="130"></a></h1>
            <nav class="navbar navbar-default navbar-static-top tm_navbar clearfix" role="navigation">
                <ul class="nav sf-menu clearfix">
                    <li class="{{ Request::is('/') ? 'active sub-menu' : '' }}">
                        <a href="{{URL::to('/')}}">start</a></li>
                    <li class="{{ Request::is('blog') || Request::is('blog/*') ? 'active sub-menu' : '' }}">
                        <a href="{{URL::to('blog')}}">blog</a></li>
                    <li class="{{ Request::is('kurs') ? 'active sub-menu' : '' }}">
                        <a href="{{URL::to('kurs')}}">kurs</a></li>
                    <li class="{{ Request::is('absolwenci') || Request::is('absolwent/*') ? 'active sub-menu' : '' }}">
                        <a href="{{URL::to('absolwenci')}}">absolwenci kursu</a></li>
                    <li class="{{ Request::is('kontakt') ? 'active sub-menu' : '' }}">
                        <a href="{{URL::to('kontakt')}}">kontakt</a></li>
                </ul>
            </nav>
        </div>
    </div>

</header>

@section('footer')
    <footer>
        <div class="container">
            <p>Krzysztof Stanio &copy; <em id="copyright-year"></em></p>
            <p class="foo_address">Ketlinga 1<br>32-020 Kraków</p>
        </div>
    </footer>
    <script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/tm-scripts.js') }}"></script>
</body>
</html>


@stop

@yield('content')

@yield('footer')