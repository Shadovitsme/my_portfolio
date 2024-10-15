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

    <table>
        <!-- TODO сделать заполнение таблицы из бд -->
        <!-- TODO сделать оформление по цсс -->
        <tr>
            <th>Навыки</th>
            <th>Уровень</th>
            <th>Где применялось</th>
        </tr> <!--ряд с ячейками заголовков-->
        <tr>
            <td>данные</td>
            <td>данные</td>
        </tr> <!--ряд с ячейками тела таблицы-->
    </table>

    <div class="ajaxMenuBeckground">
        <!-- <script type="text/javascript">
            function focusMe(button) {
                var elem = document.getElementsByClassName("button-selected")[0];
                console.log(elem);
                // if element having class `"button-selected"` defined, do stuff
                // TODO понять как подключить жаваскрипт из апп.жс
                if (elem) {
                    elem.className = "button-not-selected";
                } else {
                    button.className = "button-selected";

                }
            }
        </script> -->

        <div class="ajaxBlocks">
            <span>Собери свой стек!</span>
        </div>
        <div class='button-block'>
            <button class="button-not-selected js--button">Придумать как делать <br /> эти кнопки из бд</button>
            <!-- TODO придумать как генерировать кнопки по данным из бд -->
        </div>
        <div class="ajaxBlocks">
            <input type="checkbox">
            <span>Есть опыт коммерческой разработки</span>
        </div>
        <div class="ajaxBlocks">
            <button class="one">1</button>
            <button class="two">2</button>
            <button class="tre">3</button>
            <button class="four">4</button>
            <button class="five">5</button>
        </div>

    </div>
</body>

</html>