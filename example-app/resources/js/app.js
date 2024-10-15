import jQuery from 'jquery';

window.$ = jQuery;

$('.js--ajax-test').on('click', () => {
    console.log('ajax sent');
    $.ajax(
        {
            url: '/api',         /* Куда пойдет запрос */
            method: 'get',             /* Метод передачи (post или get) */
            dataType: 'html',          /* Тип данных в ответе (xml, json, script, html). */
            data: { 'skill': $('#name').val(),
                'level' : $('#level-select').val(),
                'project' : 'NULL'

            },   /* Параметры передаваемые в запросе. */
            success: function(data){   /* функция которая будет выполнена после успешного запроса.  */
                console.log(data);         /* В переменной data содержится ответ от index.php. */
            }
        }
)
});

//чтобы кнопки меняли цвет при нажатии
var clicked = false;
$(document).on('click', 'button', function() {
    if (clicked && ($(this).attr('class') == 'button-selected' || $(this).attr('class') == 'button-not-selected')) {
        $(this).removeClass('button-selected');
         $(this).toggleClass("button-not-selected");
        // $(this).attr("class")= "button-not-selected js--button";
    } else {
        $(this).removeClass('button-not-selected');
        $(this).toggleClass("button-selected");
        // $(this).attr("class")=  "button-selected js--button";

    }
    clicked = !clicked;
    console.log('Кнопка была нажата.');
});
