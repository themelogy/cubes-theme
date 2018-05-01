<!doctype html>
<html>
<head>
    @include('partials.metadata')
</head>

<body class="overflow-hidden @yield('page')">

@yield('content')

@include('partials.scripts')
</body>
</html>