<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="keywords" content="
        MHI,
        Home Building,
        Maintenance,
        Construction Consulting,
        Landscaping,
        Waterproofing,
        Commercial Inspections,
        Residential Inspections" />
        <title>{{ config('app.name', 'Laravel') }}</title>
        <meta name="description" content="Markley Home Inspections is a company run by Keith Markley,
        who has served the local Eureka area for over 47 years." />
        <meta name="image" content="{{ asset('welcome.jpg') }}" />
        <meta property="og:title" content="{{ config('app.name', 'Laravel') }}">
        <meta property="og:description" content="Markley Home Inspections is a company run by Keith Markley,
        who has served the local Eureka area for over 47 years.">
        <meta property="og:image" content="{{ asset('welcome.jpg') }}">
        <meta property="og:url" content="{{ url('') }}">

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
        @livewireScripts
    </body>
</html>
