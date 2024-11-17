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
            <tr>
                <th class="first_column_port"> Название</th>
                <th class="second_column_port">Демонстрация</th>
                <th class="third_column_port">Код</th>
                <th class="four_column_port">Описание</th>
            </tr> <!--ряд с ячейками заголовков-->
            <x-portfolioTable>$portfolioTable</x-portfolioTable>

        </table>

    </div>
</body>

</html>