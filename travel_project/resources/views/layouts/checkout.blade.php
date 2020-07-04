<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @include('includes.frontend.style')
</head>
<body>
    
    @include('includes.frontend.header-checkout')
    @yield('content')
    @include('includes.frontend.footer')
    @include('includes.frontend.script')
</body>
</html>