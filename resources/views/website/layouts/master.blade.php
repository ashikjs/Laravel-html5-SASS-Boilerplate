<!Doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

    <meta name="description"
          content="Google search description."/>
    <meta name="keywords"
          content="keyword"/>
    <meta name="author" content="MD Ashik">
    <meta name="robots" content="index, follow">
    <meta name="revisit-after" content="3 days ">

    <meta property="og:url" content="http://example.com/"/>
    <meta property="og:site_name" content="example"/>

    <title>{{ env('APP_NAME') }} || @yield('title')</title>

    <link rel="shortcut icon" type="image/x-icon" href="{{asset('website/img/favicon.png')}}">

    @yield('head_style')
    @include('website.layouts.partials.head_style')

    @include('website.layouts.partials.head_script')

    @include('website.layouts.partials.googleAnalytics')

</head>
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="//browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->

    <!-- Header -->
    @include('website.layouts.partials.header')
    <div class="container-fluid">
        <!-- Main Body Content -->
        @yield('page-content')
    </div>

    <!-- Footer -->
    @include('website.layouts.partials.footer')

    <!-- Body Script -->
    @include('website.layouts.partials.body_script')

    @yield('extra_scripts')
</body>
</html>
