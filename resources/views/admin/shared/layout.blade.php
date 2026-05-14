<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="icon" href="{{ asset('assets/images/isu-logo.png')}}" type="image">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>@yield('title', 'GradConnect')</title>
</head>
<body class="antialiased text-[#1a2e1a] px-10">
    @yield('content')
</body>
</html>
