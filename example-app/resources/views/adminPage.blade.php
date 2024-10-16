<html lang="ru">
<!-- TODO технический долг нуждается в рефакторинге -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @include('snippets.fonts')
</head>

<body>
    <x-test>$test</x-test>
    <div>
        <form name="form" class="class='js--ajax-test" method="get">
            <!-- TODO добавить множественный выбор проектов -->
            <input type="text" class="skills_name" id="name" name="name" placeholder="skill" maxlength="20" size="10" />

            <select class="skills_level_selector" name="skills_leve;" id="level-select">
                <option value="">--Please choose an level--</option>
                <option class="one" value="1">1</option>
                <option class="two" value="2">2</option>
                <option class="tre" value="3">3</option>
                <option class="four" value="4">4</option>
                <option class="five" value="5">5</option>
            </select>

            <select class="project_selector" name="pets" id="level-select">
                <option value="">--Please choose an project--</option>
                <x-addProjects>$projects</x-addProjects>
            </select>
            <button class="js--ajax-test">add skill</button>

        </form>

        <?php

        use Illuminate\Http\RedirectResponse;
        use Illuminate\Http\Request;

        $request = new Request;
        $name = $request->input('post');
        ?>

    </div>
    <div>
        <a>projects</a>
        <form method="get">
            <!-- TODO сделать тут добавление файлов для иконок (перевод иконок в бинарники и обратно) -->
            <input type="file" class="icon" size="10" />
            <input type="text" class="projectName" name="name" placeholder="name" maxlength="100" size="10" />
            <input type="text" class="linkToDemo" name="name" placeholder="link to demo" maxlength="100" size="10" />
            <input type="text" class="linkToCode" name="name" placeholder="link to code" maxlength="100" size="10" />
            <span><input type="checkbox" class="commercial">commercial</span>
            <button class="ajaxForAddingProjects">add project</button>
        </form>

    </div>


    <a>photos</a>
    <div>
        <input type="file">
        <select name="galleries" id="pet-select">
            <option value="">--Please choose an option--</option>
            <option value="pets">pets</option>
            <option value="plants">plants</option>
            <option value="stitches">stitches</option>
            <option value="drafts">drafts</option>
        </select>
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