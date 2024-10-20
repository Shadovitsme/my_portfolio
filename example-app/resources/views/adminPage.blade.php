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

    </div>
    <div>
        <a>projects</a>
        <form method="get">
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
        <form method="get">
            <input class="photofile" type="file">
            <select class="photoBase" name="galleries" id="pet-select">
                <option value="">--Please choose an option--</option>
                <option value="pets">pets</option>
                <option value="plants">plants</option>
                <option value="stitches">stitches</option>
                <option value="drafts">drafts</option>
            </select>
            <button class="ajaxForGallery">add photo to gallery</button>
        </form>
    </div>

    <select class="dataBases">
        <option value="">--Please choose an option--</option>
        <option class="dbSwitch" value="my_drafts">my_drafts</option>
        <option class="dbSwitch" value="my_plants">my_plants</option>
        <option class="dbSwitch" value="my_pets">my_pets</option>
        <option class="dbSwitch" value="my_stitches">my_stitches</option>
        <option class="dbSwitch" value="projects">projects</option>
        <option class="dbSwitch" value="skills">skills</option>
    </select>
    <x-tableAdminGenerate>$adminTable</x-tableAdminGenerate>

</body>

</html>