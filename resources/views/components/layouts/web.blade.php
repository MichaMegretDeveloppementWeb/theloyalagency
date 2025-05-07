<!doctype html>
<html lang="fr">
<head>

    <!--Metas-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>The Loyal Agency - @yield('title', 'Fidélisation et relationnel client')</title>

    <meta name="description" content="@yield('description', "The Loyal Agency, spécialisée dans la fidélisation client, vous aide à maximiser la valeur de vos relations commerciales et à améliorer votre rentabilité en transformant vos clients en partenaires de croissance.")">

    <link rel="icon" href="{{ asset('assets/images/commons/browser-crown-icon.webp') }}" />

    <link rel="canonical" href="@yield('canonical-url', config('app.url'))" />

    <!--Fonts-->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=quicksand:300,400,500|ephesis:400|literata:100,200,300,400,500" rel="stylesheet" />

    <!--CSS-->
    <link rel="stylesheet" href="{{ asset("assets/css/commons.css?v=".now()->toDateTimeString()) }}">
    <link rel="stylesheet" href="{{ asset("assets/css/web/main-header.css?v=".now()->toDateTimeString())}}">
    @yield('styles')

    <!--JS-->
    <script src="{{ asset("assets/js/commons.js") }}"></script>
    <script type="module" src="{{ asset("assets/js/web/main-header.js") }}"></script>
    @yield('scripts')

</head>

    <body>

        <div id="wrapper">

            @if($header)
                {{ $header }}
            @endif

            <main id="page_content" {{ $attributes->merge(['class' => '']) }}>

                {{ $slot }}

            </main>

            <footer id="main_footer">

            </footer>

        </div>

    </body>

</html>
