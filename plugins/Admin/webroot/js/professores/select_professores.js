/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(function () {
    $('.chosen-select').chosen({width: "500px", disable_search_threshold: 10}).change(function () {

        var curso_id = $('#curso_id').val();
        var professores_ids = $(this).val();
        $.ajax({
            method: "POST",
            url: BASE + "/cursos/deleteProfessor/" + curso_id,
            dataType: "JSON",
            data: {
                "id": curso_id,
                "professores[_ids]": professores_ids
            },
            success: function (data, textStatus, jqXHR) {

            }
        });
    });



    $('#professores_curso').submit(function (e) {
        e.preventDefault();
        e.stopPropagation();
        var professores_id = $('.chosen-select').val();
        var curso_id = $('#curso_id').val();
        $.ajax({
            method: "POST",
            url: BASE + "/cursos/addProfessor/" + curso_id,
            dataType: "JSON",
            data: {
                "id": curso_id,
                "professores[_ids]": professores_id
            },
            success: function (data, textStatus, jqXHR) {

            }
        });
    });

});


