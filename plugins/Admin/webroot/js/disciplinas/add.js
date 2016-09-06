/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(function () {
    CKEDITOR.replace( 'teste' );
        
    //Variável que irá conter o id de cada disciplina clicada
    var disciplina_id;

//Função para adicionar disciplinas ao curso selecionado
    $('#disciplinas-add').submit(function (e) {
        e.preventDefault();
        e.stopPropagation();
        //Fazendo requisão via ajax, método post
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
                //Se o servidor retornar ok
                if (retorno.sucesso == 'ok') {
                    var html = '';
                    html += '<tr>';
                    html += '<td>' + retorno.titulo + '';
                    html += '</td>';
                    html += '<td>';
                    html += '<h4>';
                    html += '<a href="#" value="' + retorno.titulo + '" data-target-id="' + retorno.id + '" data-method="edit-module">';
                    html += '<span class="label label-primary"> Ver aulas </span>';
                    html += '</a>';
                    html += '</h4>';
                    html += '</td>';
                    html += '<td>';
                    html += '<h4>';
                    html += '<a href="#" value="' + retorno.titulo + '" data-target-id="' + retorno.id + '" data-method="delete">';
                    html += '<span class="label label-danger">Excluir</span>';
                    html += '</a>';
                    html += '</h4>';
                    html += '</td>';
                    html += '</tr>';
                    html = $(html);
                    html.hide();
                    $('#area_curso_disciplina table tbody').append(html);
                    html.fadeIn('slow');
                    $('#disciplina_titulo').val('');
                    $('#disciplina_slug').val('');
                }
            }
        });
    });

    //Função para visualizar todas as aulas cadastradas na disciplina selecionada
    $(document).on('click', '#area_curso_disciplina table tbody a ', function (e) {
        e.preventDefault();
        e.stopPropagation();
        //Todas as tr da tabela
        var tr = $('#area_curso_disciplina table tbody a').parent().parent().parent();
        //Percorrendo todas as tr da tabela
        tr.each(function (index) {
            //Removendo de todas as tr a classe success
            $(this).removeClass('success');
        });
        //Fim loop

        //Adicionando a classe success a tr que o usuário clicou
        $(this).parent().parent().parent().addClass('success');
        //Metódo utilizado no link
        var metodo = $(this).attr('data-method');
        //Pegando o id da disciplina pela tag <a> através atributo data-target-id
        disciplina_id = $(this).attr('data-target-id');
        if (metodo == 'edit-module') {
            //Fazendo requisão via ajax, método post, parâmetro o id da disciplina
            $.ajax({
                method: "POST",
                url: BASE + "/disciplinas/view/" + disciplina_id,
                dataType: "JSON",
                data: {
                    disciplina_id: disciplina_id,
                },
                success: function (retorno, textStatus, jqXHR) {
                    var html = '';
                    //Se o servidor retornar ok
                    if (retorno.sucesso == 'ok') {
                        //Se houver alguma aula na disciplina
                        if (retorno.disciplina.aulas.length > 0) {

                            //Loop para imprimir todas as aulas da disciplina clicada
                            for (var i = 0; i < retorno.disciplina.aulas.length; i++) {
                                //Concatenando HTML para ser inserido na tabela #area_curso_aulas
                                html += '<tr>';
                                html += '<td>' + retorno.disciplina.aulas[i].titulo + '</td>';
                                html += '<td><h4>';
                                html += '<span class="label label-default">' + retorno.disciplina.aulas[i].ordem + '</span>';
                                html += '<h4>';
                                html += '</td>';
                                html += '<td><h4>';
                                html += '<span class="label label-default">' + retorno.disciplina.aulas[i].iframe + '</span>';
                                html += '</h4>';
                                html += '</td>';
                                html += '<td><h4>';
                                html += '<a href="#" value="' + retorno.disciplina.aulas[i].titulo + '" data-target-id="' + retorno.disciplina.aulas[i].id + '" name="edit-module-' + retorno.disciplina.aulas[i].id + '" data-method="delete">';
                                html += '<span class="label label-danger">Excluir</span>';
                                html += '</a>';
                                html += '</h4>';
                                html += '</td>';
                                html += '</tr>';
                                //Fim concatenação
                            }
                            //Fim do loop
                        }
                        //Adicionando html a tabela na #area_curso_aulas
                        $('#area_curso_aulas table tbody').html(html);
                        //Atribuindo ao input hidden o valor da disciplina clicada no atributo data-target-disciplina-id
                        $('#disciplina_id').attr('data-target-disciplina-id', disciplina_id);
                        //Alterando o css da #tab_aulas para block a tab de aulas
                        $('ul #tab_aulas').css({
                            display: 'block'
                        });
                    }
                }
            });
        }
    });
    //Função para deletar disciplinas
    $(document).on('click', '#area_curso_disciplina table tbody a', function (e) {
        e.preventDefault();
        e.stopPropagation();
        var elemento = $(this);
        var metodo = elemento.attr('data-method');
        var id = elemento.attr('data-target-id');
        if (metodo == 'delete') {
            var confirmacao = confirm("Deseja deletar a Disciplina: " + elemento.attr('value') + " ?");
            if (confirmacao) {
                $.ajax({
                    method: "POST",
                    url: BASE + "/disciplinas/delete/" + id,
                    dataType: "JSON",
                    data: {
                        id: id
                    },
                    success: function (retorno, textStatus, jqXHR) {
                        if (retorno.sucesso = "ok") {
                            if ($('#tab_aulas').attr('style') == 'display: block;') {
                                $('#tab_aulas').attr('style', 'display: none;');
                            }
                            $(elemento).parent().parent().parent().fadeOut('slow').promise().done(function(){
                                $(this).remove();
                            });
                        }
                    }
                });
            }
        }
    });
    //Função para adicionar aulas a disciplina selecionada
    $('#aulas-add').submit(function (e) {
        var formulario = $(this);
        e.preventDefault();
        e.stopPropagation();
        $.ajax({
            method: "POST",
            url: BASE + "/aulas/add",
            dataType: "JSON",
            data: {
                titulo: $('#disciplina_aulas_titulo').val(),
                ordem: $('#disciplina_aulas_ordem').val(),
                iframe: $('#disciplina_aulas_iframe').val(),
                disciplina_id: disciplina_id
            },
            success: function (retorno) {
                if (retorno.sucesso == 'ok') {
                    $('#disciplina_aulas_titulo').val('');
                    $('#disciplina_aulas_ordem').val('');
                    $('#disciplina_aulas_iframe').val('');
                    var html = '<tr>';
                    html += '<td>' + retorno.titulo + '</td>';
                    html += '<td><h4><span class="label label-default">' + retorno.ordem + '</span></h4></td>';
                    html += '<td><h4><span class="label label-default">' + retorno.iframe + '</span></h4></td>';
                    html += '<td><h4>';
                    html += '<a href="#" value="' + retorno.titulo + '" data-target-id="' + retorno.id + '" name="edit-module-' + retorno.id + '" data-method="delete"><span class="label label-danger">Excluir</span></a></h4></td>';
                    html += '</tr>';
                    html = $(html);
                    html.hide();
                    $('#area_curso_aulas .table tbody').append(html);
                    html.fadeIn('slow');
                }
            }
        });
    });
    //Função para deletar aula da disciplina selecionada
    $(document).on('click', '#area_curso_aulas table a', function (e) {
        e.preventDefault();
        e.stopPropagation();
        var elemento = $(this);
        var confirmacao = confirm("Deseja deletar a Aula: " + elemento.attr('value') + " ?");
        if (confirmacao) {
            if (elemento.attr('data-method') == 'delete') {
                var aula_id = $(this).attr('data-target-id');
                var disciplina_id = $('#disciplina_id').attr('data-target-disciplina-id');
                $.ajax({
                    method: "POST",
                    url: BASE + "/aulas/delete/" + aula_id,
                    dataType: "JSON",
                    data: {
                    },
                    success: function (retorno, textStatus, jqXHR) {
                        if (retorno.sucesso == 'ok') {
                            console.log(elemento);
                            $(elemento).parent().parent().parent().fadeOut('slow').promise().done(function(){
                                $(this).remove();
                            });
                        }
                    }
                });
            }
        }
    });
    //Função para abrir poup
    $(document).on('click', '#area_curso_professores table a', function (e) {
        e.preventDefault();
        e.stopPropagation();
        var elemento = $(this);
        var alturaDocumento = $(document).height();
        var larguraDocumento = $(document).width();
        $('.background-popup').css({
            "top": 0,
            "left": 0,
            "bottom": 0,
            "right": 0,
            "height": alturaDocumento + "px",
            "width": larguraDocumento + "px"
        });

        $('.popup .grid').css({
            "margin": "27% auto",
            "padding": "3em"
        });
        $('.popup').css({
            "z-index": "600",
            "top": 0,
            "left": 0,
            "bottom": 0,
            "right": 0,
            "height": (alturaDocumento / 2) + "px",
            "width": larguraDocumento + "px",
            "margin": "auto"
        }).fadeIn('slow');

        $('#professor_id').val(elemento.attr('data-target-id'));
    });
    //Função para fechar popup
    function fecharPopup(elemento) {
        elemento.fadeOut('slow');
    }

    $(document).on('click', '.popup-close', function (e) {
        e.preventDefault();
        e.stopPropagation();
        fecharPopup($(this).parent());
    });
    //Função para deletar aula da disciplina selecionada
    $(document).on('click', '.editar_professor_curso', function (e) {
        e.preventDefault();
        e.stopPropagation();

        $.ajax({
            method: "POST",
            data: {
                professor_id: $('#professor_id').val(),
                professor_nome: $('#professor_nome').val()
            },
            url: BASE + "/professor/edit/" + professor_id,
            dataType: "JSON",
            success: function (data, textStatus, jqXHR) {

            }
        });
    });
    
    //Função para deletar professores do curso
    $('.chosen-select').chosen({width: "500px", height: "100px", disable_search_threshold: 10}).change(function (e, params) {
        var selecionado = params.selected;
        var deselecionado = params.deselected;
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
    
    //Função para inserir professores no curso
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


