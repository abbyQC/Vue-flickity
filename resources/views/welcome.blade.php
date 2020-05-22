<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">

</head>

<body>

    <div class="main-carousel" data-flickity='{ "cellAlign": "left", "contain": true }'>
        <img src="https://placeimg.com/640/480/any">
        <img src="https://placeimg.com/640/480/any?2">
        <img src="https://placeimg.com/640/480/any?3">
        <img src="https://placeimg.com/640/480/any?4">
        <img src="https://placeimg.com/640/480/any?5">
    </div>
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

</body>

</html>