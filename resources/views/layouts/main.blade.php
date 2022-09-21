<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.css' integrity='sha512-HHsOC+h3najWR7OKiGZtfhFIEzg5VRIPde0kB0bG2QRidTQqf+sbfcxCTB16AcFB93xMjnBIKE29/MjdzXE+qw==' crossorigin='anonymous'/>     
        <link rel="stylesheet" href=" {{ asset('css/app.css') }}">
        <title>DC COMICS</title>
    </head>
    <body>

    <!-- header -->
    @include('includes.header')
    <!-- jumbotron -->
    @include('includes.jumbotron')
    <!-- main -->
    @yield('title')
    @yield('content')
    <!-- footer -->
    @include('includes.footer')
    </body>
</html>
