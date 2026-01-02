<!doctype html>
<html lang="fr">
<head>

    <!--Metas-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield('title', 'The Loyal Agency - Fidélisation et relationnel client')</title>

    <meta name="description" content="@yield('description', "The Loyal Agency, spécialisée dans la fidélisation client, vous aide à maximiser la valeur de vos relations commerciales et à améliorer votre rentabilité en transformant vos clients en partenaires de croissance.")">

    <!--Favicons-->
    <link rel="icon" href="{{ asset('assets/favicon/favicon.ico') }}" sizes="48x48">
    <link rel="icon" href="{{ asset('assets/favicon/favicon.svg') }}" type="image/svg+xml">
    <link rel="icon" href="{{ asset('assets/favicon/favicon-96x96.png') }}" type="image/png" sizes="96x96">
    <link rel="apple-touch-icon" href="{{ asset('assets/favicon/apple-touch-icon.png') }}" sizes="180x180">
    <link rel="manifest" href="{{ asset('assets/favicon/site.webmanifest') }}">
    <meta name="theme-color" content="#1E58BE">

    <link rel="canonical" href="@yield('canonical-url', config('app.url'))" />

    <!--Fonts-->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=quicksand:300,400,500|ephesis:400|literata:100,200,300,400,500" rel="stylesheet" />

    <!--CSS-->
    <link rel="stylesheet" href="{{ asset("assets/css/commons.css") . "?v=".now()->toDateTimeString() }}">
    @stack('styles')

    <!--JS-->
    <script src="{{ asset("assets/js/commons.js") . "?v=".now()->toDateTimeString()}}"></script>
    @stack('scripts')


    @yield('livewire-styles')

</head>

    <body>

        <div id="wrapper">

            @isset($header)
                {{ $header }}
            @endisset

            <main id="page_content" {{ $attributes->merge(['class' => '']) }}>

                {{ $slot }}

            </main>

            @if($footer)
                {{ $footer }}
            @endif

        </div>

        @yield('livewire-scripts')

    </body>

</html>
