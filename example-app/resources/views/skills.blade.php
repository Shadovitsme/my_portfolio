<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Навыки</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @include('snippets.fonts')
</head>

<body>

    <x-header>$head</x-header>
    <div class="padding"></div>
    <x-contacts>$contacts</x-contacts>
    <!-- TODO добавить кнопку найти -->
    <div class="ajaxMenuBeckground">
        <div class="ajaxBlocks">
            <span>Собери свой стек!</span>
        </div>
        <div class='button-block'>
            <button value='0' class="button-not-selected">Придумать как делать <br /> эти кнопки из бд</button>
            <!-- TODO придумать как генерировать кнопки по данным из бд -->
        </div>
        <div class="ajaxBlocks">
            <input type="checkbox">
            <span>Есть опыт коммерческой разработки</span>
        </div>
        <div class="button-block">
            <button value='0' class="button-not-selected" id="one">1</button>
            <button value='0' class="button-not-selected" id="two">2</button>
            <button value='0' class="button-not-selected" id="tre">3</button>
            <button value='0' class="button-not-selected" id="four">4</button>
            <button value='0' class="button-not-selected" id="five">5</button>
        </div>
        <div class="map_legend">
            <table class="map_legend_table">
                <tr>
                    <td id="one">1</td>
                    <td>Базовые навыки</td>
                </tr>
                <tr>
                    <td id="two">2</td>
                    <td>Ниже среднего</td>
                </tr>
                <tr>
                    <td id="tre">3</td>
                    <td>Средний уровень</td>
                </tr>
                <tr>
                    <td id="four">4</td>
                    <td>Выше среднего</td>
                </tr>
                <tr>
                    <td id="five">5</td>
                    <td>Владею <br /> на высоком уровне</td>
                </tr>

            </table>
        </div>

    </div>
    <div class="big-table">
        <table class="skillTable">
            <!-- TODO сделать заполнение таблицы из бд -->
            <!-- TODO сделать оформление по цсс -->
            <tr>
                <td class="first_column">Навыки</td>
                <td class="second_column">Уровень</td>
                <td class="third_column">Где применялось</td>
            </tr> <!--ряд с ячейками заголовков-->
            <tr>
                <td>данные</td>
                <td>даdjfalkdsjklsdjlkjsldjaslkdjlksdjlkjslkdjfнные</td>
                <!-- TODO сделать так чтобы длинный текст автоматом переносился а не уплывал -->
                <td>данdsafljklfjsdklfjsdlfjdslfjksdjflksdjldsjfljsdlfjsljsdlfjsalkные</td>
            </tr> <!--ряд с ячейками тела таблицы-->
        </table>

    </div>


</body>

</html>