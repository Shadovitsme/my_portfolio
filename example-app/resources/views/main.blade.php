<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @include('snippets.fonts')
</head>

<body>
    <x-header>$head</x-header>
    <div class="padding"></div>
    <x-contacts>$contacts</x-contacts>
    <div class="hi-text">
        <div class="textcols">
            <div class="textcols-item">
                <div class="big-Hello">Привет! </div>
                <hr>
                <div class="myName">Я - Каширская Юлия</div>
                <div class="little-about">Это мой сайт-портфолио. Здесь вы можете ознакомиться с материалами, <br />демонстрирующими мои навыки и найти контакты для связи.
                </div>
            </div>
            <div class="textcols-item">
                <img class="main-page-image" src="images/plaseholder.webp">
            </div>
        </div>
    </div>
</body>

</html>