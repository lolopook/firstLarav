<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lavacars</title>
    <link rel="shortcut icon" href="https://apache.org/favicons/android-chrome-192x192.png" type="image/x-icon">

    @vite(["resources/css/app.css","resources/js/app.js"])
</head>
<body>
    {{-- ici --}}

    @include("layouts.partials.header")

    @yield("content")

</body>
</html>