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
    <div class="ajaxMenuBeckground">
        <div class="ajaxBlocks">
            <span>Собери свой стек!</span>
        </div>
        <div class='button-block'>
            <x-skillsButtons>$button</x-skillsButtons>
        </div>
        <div class="ajaxBlocks">
            <input type="checkbox">
            <span>Есть опыт коммерческой разработки</span>
        </div>
        <div class="button-block">
            <button value='0' class="button-not-selected" id="1">1</button>
            <button value='0' class="button-not-selected" id="2">2</button>
            <button value='0' class="button-not-selected" id="3">3</button>
            <button value='0' class="button-not-selected" id="4">4</button>
            <button value='0' class="button-not-selected" id="5">5</button>
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
                    <td id="three">3</td>
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
            <tr>
                <td class="first_column">Навыки</td>
                <td class="second_column">Уровень</td>
                <td class="third_column">Где применялось</td>
            </tr>
            <x-skillsTable>$skillsTable</x-skillsTable>
        </table>

    </div>


</body>

</html>