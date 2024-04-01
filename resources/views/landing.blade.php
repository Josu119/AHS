<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" href="{{asset('css/index.css')}}">
      <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
    <title>ApexHubSpot</title>
    @vite('resources/css/app.css')
</head>

<body class="font-semibold landing">
    <div id="navbar" > @include('navbar')</div>

    <div id="hero"> @include('hero') </div>
     
    <div id="features"> @include('features') </div>

    <div id="team"> @include('team') </div>

    <div id="footer"> @include('footer') </div>

     <script src="{{asset('javascript/index.js')}}"></script>
</body>

</html>
