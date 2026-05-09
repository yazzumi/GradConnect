<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('output.css') }}">
    <link rel="icon" href="{{ asset('assets/images/isu-logo.png') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
    <title>@yield('title','GradConnect')</title>
</head>
<script src="{{asset('assets/jquery-4.0.0.min.js')}}"></script>
<body>
@yield('content')

</body>
</html>
