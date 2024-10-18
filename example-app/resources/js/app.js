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

// ajax for projects
$('.ajaxForAddingProjects').on('click', () => {
    if ( $('.projectName').val() === '' && $('.linkToDemo').val() === '' && $('.linkToCode').val() === ''){
        alert('Не все поля заполнены');
    }
    else {
        $.ajax(
            {
                url: '/apiProject',
                method: 'get',
                dataType: 'html',
                data: {
                    'iconPath' : $('.icon').val(),
                    'projectName' : $('.projectName').val(),
                    'linkToDemo' : $('.linkToDemo').val(),
                    'linkToCode' : $('.linkToCode').val(),
                    'commercial' : $('.commercial').val()
                },
                success: function(data){ 
                    alert(data)  /* функция которая будет выполнена после успешного запроса.  */
                }
                
            }
        )
    }

}
)

$('.ajaxForGallery').on('click', () => {
    if ( $('.photofile').val() === '' && $('.photoBase').val() === '' ){
        alert('Не все поля заполнены');
    }
    else {
        $.ajax(
            {
                url: '/apiPhoto',
                method: 'get',
                dataType: 'html',
                data: {
                    'photo' : $('.photofile').val(),
                    'photoBase' : $('.photoBase').val(),
                },
                success: function(data){ 
                    alert(data)  /* функция которая будет выполнена после успешного запроса.  */
                }
                
            }
        )
    
    }
}
)

var selectarray = [];
var skillLevelArray = [];
//чтобы кнопки меняли цвет при нажатии
$(document).on('click', 'button', function() {
    if ($(this).attr('value') == 1 && ($(this).attr('class') == 'button-selected' || $(this).attr('class') == 'button-not-selected')) {
        $(this).removeClass('button-selected');
         $(this).toggleClass("button-not-selected");
        $(this).removeAttr('value');
        $(this).attr('value', '0');
        if ($(this).attr('id') == 'skill'){
            selectarray.splice(selectarray.indexOf($(this).text()),1);
        }
        {
            skillLevelArray.splice(skillLevelArray.indexOf($(this).text()),1);
        }

    } else {
        $(this).removeClass('button-not-selected');
        $(this).toggleClass("button-selected");
        $(this).removeAttr('value');
        $(this).attr('value', '1');
        if ($(this).attr('id') == 'skill'){
            selectarray.push(($(this).text()));
        }
        else {
            skillLevelArray.push(($(this).text()));
 
        }

    }
    $.ajax(
        {
            url: '/apiSearchSkills',
            method: 'get',
            dataType: 'html',
            data: {
                'skills' : selectarray,
                'levels' : skillLevelArray,
            },
            success: function(data){ 
 /* функция которая будет выполнена после успешного запроса.  */
                $('.skillTable').replaceWith(data);
            }
            
        }
    )

});

