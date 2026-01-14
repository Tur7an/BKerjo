<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title','BKerjo')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
    referrerpolicy="no-referrer" />
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>

<header>
    @include('front.partials.nav')
</header>

<main class="max-w-7xl mx-auto px-4 py-10">
    @yield('content')
</main>


<footer>
    @include('front.partials.footer')
</footer>

</body>
</html>
