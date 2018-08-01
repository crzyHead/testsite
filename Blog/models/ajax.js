/*jshint latedef:true*/
/*jslint browser:true*/
/*global $, jQuery*/
$(document).ready(function () {
    "use strict";
    $("#btn").click(
        function () {
            sendAjaxForm('commentsF', 'Adding', 'comments.php');
            return false;
        }
    );
});
function sendAjaxForm(result_form, ajax_form, url) {
    "use strict";
    jQuery.ajax({
        url: url, //url страницы (action_ajax_form.php)
        type: "POST", //метод отправки
        dataType: "html", //формат данных
        data: jQuery("#" + ajax_form).serialize(),  // Сеарилизуем объект
        success: function (response) { //Данные отправлены успешно
            var result = jQuery.parseJSON(response);
            document.getElementById(result_form).innerHTML = result;
            jQuery("#" + ajax_form)[0].reset();
        },
        error: function (response) { // Данные не отправлены
            document.getElementById(result_form).innerHTML = "Ошибка. Данные не отправленны.";
        }
    });
}