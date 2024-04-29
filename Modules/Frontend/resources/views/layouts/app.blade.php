<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <title> @yield('meta_title') @empty($__env->yieldContent('meta_title'))
        @themeSettings('website_name')
    @endempty </title>
    <style>
        /* CRITICAL STYLE */
    </style>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" itemprop="description" content="@yield('meta_description')">
    <meta name="keywords" itemprop="keywords" content="@yield('meta_keywords')">
    <meta name="csrf-param" content="_csrf-frontend">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- <meta name="robots" content="noindex, nofollow"> -->

    <link rel="canonical" href="https://ux.intersmarthosting.in/3RTSmartGold/">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('frontend/images/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('frontend/images/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('frontend/images/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('frontend/images/site.webmanifest') }}">

    <meta property="og:url" content="https://ux.intersmarthosting.in/3RTSmartGold/">
    <meta property="og:type" content="website">
    <meta property="og:title" content="@yield('meta_title')">
    <meta property="og:description" ccontent="@yield('meta_description')">
    <meta property="og:image" content="">
    <meta property="og:site_name" content="3RTSmartGold">
    <meta name="twitter:card" content="3RTSmartGold">
    <meta name="twitter:title" content="@yield('meta_title')">
    <meta name="twitter:description" content="@yield('meta_description')">
    <meta name="twitter:image" content="og_img.png">
    <meta name="twitter:image:alt" content="3RTSmartGold">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="msapplication-TileColor" content="#000000">
    <meta name="theme-color" content="#ffffff">
    <meta name="mobile-web-app-capable" content="yes">

    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "WebPage",
            "name": "3RTSmartGold",
            "description": "A brief description of your page content."
        }
    </script>

    <!-- FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- JQUERY -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
        /* INITIAL STYLE */
    </style>

    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/css/app.min.css') }}">
</head>

<body class="<?= basename($_SERVER["SCRIPT_FILENAME"], '.php') == 'login' ? 'noHeadFoot' : '' ?> ">

    @include('frontend::layouts.header')
