<div class="grid_3 grid_5">
    <h3>Gerenciamento do Curso</h3>
    <br>
    <div class="but_list">
        <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
            <ul id="myTab" class="nav nav-tabs" role="tablist">
                <li role="presentation">
                    <a href="#area_curso" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">
                        Curso
                    </a>
                </li>
                <li role="presentation" class="active">
                    <a href="#area_curso_disciplina" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">
                        Disciplina
                    </a>
                </li>

                <li id="tab_aulas" role="presentation" style="display: none;">
                    <a href="#area_curso_aulas" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile" >
                        Aulas
                    </a>
                </li>


            </ul>
            <div id="myTabContent" class="tab-content">
                <div class="tab-pane fade in " id="area_curso" role="tabpanel" aria-labelledby="home-tab">
                    <form class="form-horizontal" method="post" action="/ProjetoCandeias/admin/cursos/edit/<?php echo $curso->id ?>">
                        <div class="form-group">
                            <label for="focusedinput" class="col-sm-2 control-label">Título do Curso</label>
                            <div class="col-sm-8">
                                <input name="titulo" value="<?php echo $curso->titulo ?>" class="form-control1" id="focusedinput" placeholder="Título do Curso" type="text">
                            </div>
                            <!--<div class="col-sm-2 jlkdfj1">
                                <p class="help-block">Your help text!</p>
                            </div>-->
                        </div>
                        <div class="form-group">
                            <label for="focusedinput" class="col-sm-2 control-label">Descrição</label>
                            <div class="col-sm-8">
                                <input name="descricao" value="<?php echo $curso->descricao ?>" class="form-control1" id="focusedinput" placeholder="Descrição" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword" class="col-sm-2 control-label">Conteúdo</label>
                            <div class="col-sm-8">
                                <input name="conteudo" value="<?php echo $curso->conteudo ?>" class="form-control1" id="focusedinput" placeholder="Conteúdo" type="text">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-8 col-sm-offset-2">
                                <button class="btn-success btn">Cadastrar</button>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- Área de cadastro de disciplina-->
                <div class="tab-pane fade in active" id="area_curso_disciplina" role="tabpanel" aria-labelledby="home-tab">
                    <div class="xs tabls">
                        <div class="bs-example4" data-example-id="contextual-table">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Nome</th>
                                        <th>Aulas</th>
                                        <th>Excluir</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php foreach ($curso->disciplinas as $disciplina): ?>
                                        <tr>
                                            <td><?= $disciplina->titulo ?></td>
                                            <td><h4>
                                                    <a href="#" data-target-id="<?= $disciplina->id ?>" data-method="edit-module">
                                                        <span class="label label-primary">Ver aulas</span>
                                                    </a>
                                            </td></h4>

                                            <td><h4>
                                                    <a href="#" value="<?= $disciplina->titulo ?>" data-target-id="<?= $disciplina->id ?>" data-method="delete">
                                                        <span class="label label-danger">Excluir</span>
                                                    </a>
                                                </h4>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <br>
                    <form id="disciplinas-add" class="form-horizontal" method="post" action="">
                        <input id="curso_id" type="hidden" value="<?= $curso->id ?>">
                        <div class="form-group">
                            <label for="focusedinput" class="col-sm-2 control-label">Título do Curso</label>
                            <div class="col-sm-8">
                                <input name="titulo" value="" class="form-control1" id="disciplina_titulo" placeholder="Título do Curso" type="text">
                            </div>
                            <!--<div class="col-sm-2 jlkdfj1">
                                <p class="help-block">Your help text!</p>
                            </div>-->
                        </div>
                        <div class="form-group">
                            <label for="focusedinput" class="col-sm-2 control-label">Slug</label>
                            <div class="col-sm-8">
                                <input name="slug" value="" class="form-control1" id="disciplina_slug" placeholder="Título do Curso" type="text">
                            </div>
                            <!--<div class="col-sm-2 jlkdfj1">
                                <p class="help-block">Your help text!</p>
                            </div>-->
                        </div>
                        <div class="form-group">
                            <div class="col-sm-8 col-sm-offset-2">
                                <button class="btn-success btn cadastrar_disciplina">Cadastrar</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- Fim da área de cadastro de disciplina-->

                <!-- Área de cadastro de disciplina-->
                <div class="tab-pane fade in" id="area_curso_aulas" role="tabpanel" aria-labelledby="home-tab">
                    <div class="xs tabls">
                        <div class="bs-example4" data-example-id="contextual-table">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Título</th>
                                        <th>Ordem</th>
                                        <th>Iframe</th>
                                        <th>Excluir</th>
                                    </tr>
                                </thead>
                                <tbody>




                                </tbody>
                            </table>
                        </div>
                    </div>
                    <br>
                    <form id="aulas-add" class="form-horizontal" method="post" action="">
                        <input type="hidden" id="disciplina_id" data-target-disciplina-id="">
                        <div class="form-group">
                            <label for="focusedinput" class="col-sm-2 control-label">Título</label>
                            <div class="col-sm-8">
                                <input name="titulo" value="" class="form-control1" id="disciplina_aulas_titulo" placeholder="Título" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="focusedinput" class="col-sm-2 control-label">Ordem</label>
                            <div class="col-sm-8">
                                <input name="ordem" value="" class="form-control1" id="disciplina_aulas_ordem" placeholder="Exemplo: 1 ou 2" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="focusedinput" class="col-sm-2 control-label">Aulas</label>
                            <div class="col-sm-8">
                                <input name="titulo" value="" class="form-control1" id="disciplina_aulas_iframe" placeholder="Iframe" type="text">
                            </div>
                        </div>
                        <div class="form-group cad-professor">
                            <div class="col-sm-8 col-sm-offset-2">
                                <button class="btn-success btn">Cadastrar</button>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- Fim da área de cadastro de disciplina-->

            </div>
        </div>
    </div>
</div>

<script src="<?php echo BASE . '/' . strtolower($this->plugin); ?>/js/disciplinas/add.js"></script>