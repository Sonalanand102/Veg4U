<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Vue - Clean Minimal eCommerce HTML Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        {{-- stylesheets --}}
        @include('frontEnd.layouts.includes.stylesheet')
        </head>
    <body>


        {{-- header starts --}}
        @include('frontEnd.layouts.includes.header')
        {{-- header ends --}}


        {{-- main content starts --}}
        @yield('frontend_content')
        {{-- main content ends --}}

        

        {{-- footer starts --}}
        @include('frontEnd.layouts.includes.footer')
        {{-- footer ends --}}
       




        {{-- scripts starts --}}
        @include('frontEnd.layouts.includes.js')
        {{-- scripts ends --}}
    </body>
</html>

