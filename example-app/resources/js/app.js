import jQuery from 'jquery';

window.$ = jQuery;

$('.js--ajax-test').on('click', () => {
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
            }
        }
)
});

// //чтобы кнопки меняли цвет при нажатии
// document.addEventListener("DOMContentLoaded", () => {
//     var button = document.getElementsByClassName('js--button')[0];
//     var clicked = false;
//     button.addEventListener('click', () => {
//     if (clicked) {
//         button.className = "button-not-selected js--button";
//     } else {
//         button.className = "button-selected js--button";

//     }
//     clicked = !clicked;
//     }
//     )
// });