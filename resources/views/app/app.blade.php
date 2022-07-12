<!DOCTYPE html>
<html>
<head>
    <title>@hasSection('template_title')@yield('template_title')
        | @endif {{ config('app.name', Lang::get('titles.app')) }}</title>
    <meta name="keywords" content="@yield('meta_keywords',env('META_KEYWORD'))">
    <meta name="description" content="@yield('meta_description',env("META_DESCRIPTION"))">
    <link rel="canonical" href="{{url()->current()}}"/>

    <meta property="og:site_name" content="@yield('og.site_name',env('APP_NAME'))"/>
    <meta property="og:type" content="@yield('og.type',env('OG_TYPE'))"/>
    <meta property="og:title" content="@yield('og.title'," The Most Engaging Media for Millennials and Gen-Z")"/>
    <meta name="twitter:creator" content="@yield('meta.twitter.creator','')">
    <meta name="twitter:image" content="@yield('meta.twitter.image','')"/>
    <meta name="twitter:image:width" content="@yield('meta.twitter.image.width',120)"/>
    <meta name="twitter:image:height" content="@yield('meta.twitter.image.height',120)"/>
    <meta name="twitter:image:type" content="@yield('meta.twitter.image.type','image/jpeg')">
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
    <link href="{{ mix('/dist/css/main.css') }}" rel="stylesheet">
</head>


<body>
@include("components.nav.default")
<main class="w-full relative overflow-x-hidden py-[60px]">
    @yield("layout")
</main>
</body>
</html>
