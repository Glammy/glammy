<!DOCTYPE html>
<html>
    <!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
    <head>
        <meta charset="utf-8">
        <title>{{ $title }}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <link rel="shortcut icon" href="{{ URL::asset('images/favicon.ico') }}">

        <!-- CSS -->
        {!! Html::style('css/bootstrap.min.css')  !!}
        {!! Html::style('css/flexslider.css')  !!}
        {!! Html::style('css/fancySelect.css')  !!}
        {!! Html::style('css/animate.css')  !!}
        {!! Html::style('css/style.css') !!}

        <!-- FONTS -->
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
        <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    </head>
    <body>
        <!-- THE CONTENT -->
        @yield('Content')

        <!-- SCRIPTS -->
        <!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
        <!--[if IE]><html class="ie" lang="en"> <![endif]-->
        {!! Html::script('js/jquery.min.js') !!}
        {!! Html::script('js/bootstrap.min.js') !!}
        {!! Html::script('js/superfish.min.js')  !!}
        {!! Html::script('js/jquery.sticky.js')  !!}
        {!! Html::script('js/parallax.js')  !!}
        {!! Html::script('js/jquery.flexslider-min.js')  !!}
        {!! Html::script('js/jquery.jcarousel.js') !!}
        {!! Html::script('js/fancySelect.js') !!}
        {!! Html::script('js/animate.js') !!}
        {!! Html::script('js/myscript.js') !!}
    </body>
</html>