<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @include('snippets.fonts')
</head>

<body>
    <div>
        <!-- TODO сделать проверку на корректное заполнение -->
        <form name="form" class="class='js--ajax-test" method="get">
            <input type="text" id="name" name="name" value="skill" maxlength="20" size="10" />
            <select name="pets" id="level-select">
                <option value="">--Please choose an level--</option>
                <option class="one" value="1">1</option>
                <option class="two" value="2">2</option>
                <option class="tre" value="3">3</option>
                <option class="four" value="4">4</option>
                <option class="five" value="5">5</option>
            </select>
            <input type="text" id="name" name="name" value="where used" maxlength="100" size="10" />
            <button class="js--ajax-test">add skill</button>
        </form>

        <?php

        use Illuminate\Http\RedirectResponse;
        use Illuminate\Http\Request;

        $request = new Request;
        $name = $request->input('post'); ?>
    </div>
    <div>
        <!-- TODO сделать тут добавление файлов для иконок -->
        <input type="file" id="name" name="name" value="icon" maxlength="20" size="10" />
        <input type="text" id="name" name="name" value="name" maxlength="1" size="10" />
        <input type="text" id="name" name="name" value="link to demo" maxlength="100" size="10" />
        <input type="text" id="name" name="name" value="link to code" maxlength="100" size="10" />
        <span><input type="checkbox">commercial</span>
        <button>add project</button>
    </div>
    <div>
        <input type="file">
        <select name="galleries" id="pet-select">
            <option value="">--Please choose an option--</option>
            <option value="dog">pets</option>
            <option value="cat">plants</option>
            <option value="hamster">stitches</option>
            <option value="parrot">drafts</option>
        </select>
        <x-test>$test</x-test>
    </div>
    <!-- TODO сделать тут табличку для редактирования уже имеющихся записей -->
    <table>
        <tr>
            <th>текст заголовка</th>
            <th>текст заголовка</th>
        </tr> <!--ряд с ячейками заголовков-->
        <tr>
            <td>данные</td>
            <td>данные</td>
        </tr> <!--ряд с  ячейками тела таблицы-->
    </table>
</body>

</html>