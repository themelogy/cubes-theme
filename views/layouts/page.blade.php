<!doctype html>
<html>
<head>
    @include('partials.metadata')
</head>

<body class="overflow-hidden @yield('page')">

@include('partials.components.homebutton')
@include('partials.components.infobutton')
@include('partials.header.navigation')

@yield('content')

@include('partials.footer')

@include('partials.scripts')

</body>
</html>