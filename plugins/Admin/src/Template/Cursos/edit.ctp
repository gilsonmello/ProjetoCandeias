<div class="grid_3 grid_5">
    <h3>Gerenciamento do Curso</h3>
    <div class="but_list">
        <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
            <ul id="myTab" class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active">
                    <a href="#area_curso" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">
                        Curso
                    </a>
                </li>
                <li role="presentation">
                    <a href="#area_curso_professores" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">
                        Professores
                    </a>
                </li>
                <li role="presentation">
                    <a href="#area_curso_disciplina" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">
                        Disciplina
                    </a>
                </li>
            </ul>
            <div id="myTabContent" class="tab-content">
                <div class="tab-pane fade in active" id="area_curso" role="tabpanel" aria-labelledby="home-tab">
                    <form class="form-horizontal" method="post" action="/ProjetoCandeias/admin/cursos/edit/<?php echo $curso->id?>">
                        <div class="form-group">
                            <label for="focusedinput" class="col-sm-2 control-label">Título do Curso</label>
                            <div class="col-sm-8">
                                <input name="titulo" value="<?php echo $curso->titulo?>" class="form-control1" id="focusedinput" placeholder="Título do Curso" type="text">
                            </div>
                            <!--<div class="col-sm-2 jlkdfj1">
                                <p class="help-block">Your help text!</p>
                            </div>-->
                        </div>
                        <div class="form-group">
                            <label for="focusedinput" class="col-sm-2 control-label">Descrição</label>
                            <div class="col-sm-8">
                                <input name="descricao" value="<?php echo $curso->descricao?>" class="form-control1" id="focusedinput" placeholder="Descrição" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword" class="col-sm-2 control-label">Conteúdo</label>
                            <div class="col-sm-8">
                                <input name="conteudo" value="<?php echo $curso->conteudo?>" class="form-control1" id="focusedinput" placeholder="Conteúdo" type="text">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-8 col-sm-offset-2">
                                <button class="btn-success btn">Cadastrar</button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="tab-pane fade in" id="area_curso_professores" role="tabpanel" aria-labelledby="home-tab">
                    <form class="form-horizontal" method="post" action="">
                        <div class="form-group">
                            <label for="focusedinput" class="col-sm-2 control-label">Professor</label>
                            <div class="col-sm-8">
                                <input name="titulo" value="" class="form-control1" id="focusedinput" placeholder="Nome do Professor" type="text">
                            </div>
                        </div>
                        <div class="form-group cad-professor">
                            <div class="col-sm-8 col-sm-offset-2">
                                <button class="btn-success btn">Cadastrar</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="tab-pane fade" id="area_curso_disciplina" role="tabpanel" aria-labelledby="home-tab">
                    <form class="form-horizontal" method="post" action="/ProjetoCandeias/admin/cursos/edit/<?php echo $curso->id?>">
                        <div class="form-group">
                            <label for="focusedinput" class="col-sm-2 control-label">Título do Curso</label>
                            <div class="col-sm-8">
                                <input name="titulo" value="<?php echo $curso->titulo?>" class="form-control1" id="focusedinput" placeholder="Título do Curso" type="text">
                            </div>
                            <!--<div class="col-sm-2 jlkdfj1">
                                <p class="help-block">Your help text!</p>
                            </div>-->
                        </div>
                        <div class="form-group">
                            <label for="focusedinput" class="col-sm-2 control-label">Descrição</label>
                            <div class="col-sm-8">
                                <input name="descricao" value="<?php echo $curso->descricao?>" class="form-control1" id="focusedinput" placeholder="Descrição" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword" class="col-sm-2 control-label">Conteúdo</label>
                            <div class="col-sm-8">
                                <input name="conteudo" value="<?php echo $curso->conteudo?>" class="form-control1" id="focusedinput" placeholder="Conteúdo" type="text">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-8 col-sm-offset-2">
                                <button class="btn-success btn">Cadastrar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="<?php echo BASE.'/'.strtolower($this->plugin);?>/js/usuarios/index.js"></script>