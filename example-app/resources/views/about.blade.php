<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Обо мне</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @include('snippets.fonts')
</head>

<body>
    <x-header>$head</x-header>
    <x-contacts>$contacts</x-contacts>

    <div class="hi-text">
        <div class="textcols">
            <div class="textcols-item">
                <img class="main-page-image" src="images/plaseholder.webp">
                <img class="main-page-image" src="images/plaseholder.webp">
                <img class="main-page-image" src="images/plaseholder.webp">
                <img class="main-page-image" src="images/plaseholder.webp">

            </div>
            <div class="textcols-item">
                <div>Это мои рисунки</div>
                <div>Это мои питомцы</div>
                <div>Это мои растения</div>
                <div>Это моя вышивка</div>
            </div>

        </div>
    </div>

</body>

</html>