/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function () {

    $('#disciplinas-add').submit(function (e) {
        e.preventDefault();
        e.stopPropagation();
        $.ajax({
            method: "POST",
            url: BASE + "/disciplinas/add",
            dataType: "JSON",
            data: {
                titulo: $('#disciplina_titulo').val(),
                slug: $('#disciplina_slug').val(),
                curso_id: $('#curso_id').val()
            },
            success: function (retorno) {
                console.log(retorno);
            }
        });
    });

});


