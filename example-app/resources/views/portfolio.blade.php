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
    <div class="big-table-portfolio">
        <table class="PortfolioTable">
            <!-- TODO сделать заполнение таблицы из бд -->
            <!-- TODO сделать оформление по цсс -->
            <tr>
                <th class="first_column_port"></th>
                <th class="second_column_port">Демонстрация</th>
                <th class="third_column_port">Код</th>
                <th class="four_column_port">Описание</th>
            </tr> <!--ряд с ячейками заголовков-->
            <tr>
                <td><img class="portfolioIcon" src="images/plaseholder.webp"></td>
                <td>даdjfaddddddddddddddddddddddddddddddddddddddddddddddddddddlkdsjklsdjlkjsldjaslkdjlksdjlkjslkdjfнные</td>
                <!-- TODO сделать так чтобы длинный текст автоматом переносился а не уплывал -->
                <td>данdsafljklfjsdklfjsdlfjdslfjksdjflksdjldsjfljsdlfjsljsdlfjsdddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddalkные</td>
                <td>данdsafljklfjsdklfjsdlfjdslfjksdjflksdjldsjfljsdlfjsljsdlfjsdddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddalkные</td>
            </tr> <!--ряд с ячейками тела таблицы-->
            <tr>
                <td><img class="portfolioIcon" src="images/plaseholder.webp"></td>
                <td>даdjfaddddddddddddddddddddddddddddddddddddddddddddddddddddlkdsjklsdjlkjsldjaslkdjlksdjlkjslkdjfнные</td>
                <!-- TODO сделать так чтобы длинный текст автоматом переносился а не уплывал -->
                <td>данdsafljklfjsdklfjsdlfjdslfjksdjflksdjldsjfljsdlfjsljsdlfjsdddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddalkные</td>
                <td>данdsafljklfjsdklfjsdlfjdslfjksdjflksdjldsjfljsdlfjsljsdlfjsdddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddalkные</td>
            </tr> <!--ряд с ячейками тела таблицы-->
        </table>

    </div>
</body>

</html>