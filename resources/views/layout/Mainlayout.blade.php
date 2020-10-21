<!DOCTYPE html>
<html lang="zxx">

<head>
    <title> @yield('title')</title>

    @include('layout.head')

</head>

<body>

    @yield('body-content')

    @include('layout.footerScript')

</body>

</html>