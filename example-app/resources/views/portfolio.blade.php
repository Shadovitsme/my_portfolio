<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Портфолио</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @include('snippets.fonts')
</head>

<body>
    <x-header>$head</x-header>
    <div class="padding"></div>
    <x-contacts>$contacts</x-contacts>
    <div class="textcols">
        <!-- TODO Заполнить это из бд -->
        <div class="textcols-item">
            <img class="main-page-image" src="images/plaseholder.webp">
        </div>
        <div class="textcols-item">
            <a href="https://github.com/Shadovitsme">демонстрация</a>
        </div>
        <div class="textcols-item">
            <a>код</a>
        </div>
    </div>
</body>

</html>