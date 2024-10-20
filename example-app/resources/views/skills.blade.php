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
            <button value='0' class="button-not-selected">
                <p class='one'>1</p>
            </button>
            <button value='0' class="button-not-selected">
                <p class='two'>2</p>
            </button>
            <button value='0' class="button-not-selected">
                <p class='three'>3</p>
            </button>
            <button value='0' class="button-not-selected">
                <p class='four'>4</p>
            </button>
            <button value='0' class="button-not-selected">
                <p class='five'>5</p>
            </button>
        </div>
        <div class="map_legend">
            <table class="map_legend_table">
                <tr>
                    <td class="one">1</td>
                    <td>Базовые навыки</td>
                </tr>
                <tr>
                    <td class="two">2</td>
                    <td>Ниже среднего</td>
                </tr>
                <tr>
                    <td class="three">3</td>
                    <td>Средний уровень</td>
                </tr>
                <tr>
                    <td class="four">4</td>
                    <td>Выше среднего</td>
                </tr>
                <tr>
                    <td class="five">5</td>
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