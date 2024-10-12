<div class="ajaxMenuBeckground">
    <script type="text/javascript">
        function focusMe(button) {
            var elem = document.getElementsByClassName("button-selected")[0];
            console.log(elem);
            // if element having class `"button-selected"` defined, do stuff
            // TODO понять как подключить жаваскрипт из апп.жс
            if (elem) {
                elem.className = "";
            } else {
                button.className = "button-selected";

            }
        }
    </script>

    <div class="ajaxBlocks">
        <span>Собери свой стек!</span>
    </div>
    <div class='button-block'>
        <button id='skillsButton' onClick="focusMe(this);">Придумать как делать <br /> эти кнопки из бд</button>
        <!-- TODO придумать как генерировать кнопки по данным из бд -->
    </div>
    <div class="ajaxBlocks">
        <input type="checkbox">
        <span>Есть опыт коммерческой разработки</span>
    </div>

</div>