import jQuery from 'jquery';

window.$ = jQuery;

//аякс админ панели для добавления скилов
$('.js--ajax-test').on('click', () => {

    if ($('.skills_name').val() === '' && $('.skills_level_selector').val() === '' && $('.project_selector').val() === ''){
        alert('Не все поля заполнены');
  
    }
    else{
    $.ajax(
        {
            url: '/api',         /* Куда пойдет запрос */
            method: 'get',             /* Метод передачи (post или get) */
            dataType: 'html',          /* Тип данных в ответе (xml, json, script, html). */
            data: { 'skill': $('#name').val(),
                'level' : $('#level-select').val(),
                'project' : $('.project_selector').val()

            },   /* Параметры передаваемые в запросе. */
            success: function(data){ 
                alert('Навык добавлен')  /* функция которая будет выполнена после успешного запроса.  */
            }
        }
)
}});

//чтобы кнопки меняли цвет при нажатии
$(document).on('click', 'button', function() {
    if ($(this).attr('value') == 1 && ($(this).attr('class') == 'button-selected' || $(this).attr('class') == 'button-not-selected')) {
        $(this).removeClass('button-selected');
         $(this).toggleClass("button-not-selected");
        $(this).removeAttr('value');
        $(this).attr('value', '0');
    } else {
        $(this).removeClass('button-not-selected');
        $(this).toggleClass("button-selected");
        // $(this).attr("class")=  "button-selected js--button";
        $(this).removeAttr('value');
        $(this).attr('value', '1');

    }
});
