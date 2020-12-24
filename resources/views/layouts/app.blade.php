<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/bootstrap.min.js') }}" defer></script>
    @yield("head")
</head>
<body>
<nav class="navbar navbar-dark bg-dark" aria-label="First navbar example">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">ZUSO</a>
        <a class="navbar-brand" type="button" href="#" onclick="logout()">
            Logout
        </a>
        <form id="logout-form" class="visually-hidden"
              method="post" action="{{ route("logout") }}">
            @csrf
        </form>
    </div>
</nav>
<main class="container py-5">
    @yield("content")
</main>
<script>
    function logout() {
        document.getElementById('logout-form').submit();
    }
</script>
@yield("javascripts")
</body>
</html>
