<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Site Title -->
    <title>{{setting('site.title')}} |  @yield('title')</title>
    <!-- Author Meta -->
    <meta name="author" content="Davit Gakokia | WWW.DIEM.GE ">
    <!-- Meta Description -->
    <meta name="description" content="{{ setting('site.description') }}">
    <!-- Meta Keyword -->
    <meta name="keywords" content="{{ setting('site.keywords') }}">

    <link rel="apple-touch-icon" sizes="57x57" href="images/favicon//apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="images/favicon//apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/favicon//apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="images/favicon//apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/favicon//apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="images/favicon//apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="images/favicon//apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="images/favicon//apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicon//apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="images/favicon//android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon//favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="images/favicon//favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon//favicon-16x16.png">
    <link rel="manifest" href="images/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

    <!-- Geo Fonts CDN -->
    <link rel="stylesheet" href="//cdn.web-fonts.ge/fonts/bpg-le-studio-04/css/bpg-le-studio-04.min.css">
    <link rel="stylesheet" href="//cdn.web-fonts.ge/fonts/bpg-nino-medium/css/bpg-nino-medium.min.css">
    <link rel="stylesheet" href="//cdn.web-fonts.ge/fonts/alk-sanet/css/alk-sanet.min.css">
    <link rel="stylesheet" href="//cdn.web-fonts.ge/fonts/alk-rounded-mtav-med/css/alk-rounded-mtav-med.min.css">

    <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-5CBFX1N3VX"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-5CBFX1N3VX');
        </script>
    <!--// Google Analytics -->

    <!-- Facebook Pixel Code -->
        <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '373729473676127');
        fbq('track', 'PageView');
        </script>
        <noscript>
        <img height="1" width="1" style="display:none"
        src="https://www.facebook.com/tr?id=373729473676127&ev=PageView&noscript=1"/>
        </noscript>
    <!-- End Facebook Pixel Code -->
 

    <style>
        h2,a ,h4{
            font-family: "ALK Rounded Mtav Med", sans-serif;
        }
        h3 {
            font-family: "BPG LE Studio 04", sans-serif;
        }
        p{
            font-family: "BPG Nino Medium", sans-serif !important;
        }
        h1,span{
            font-family: "ALK Sanet", sans-serif;
        }
    </style>
</head>