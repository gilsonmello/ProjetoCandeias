<h3 class="blank1">Adiconar Curso</h3>
<div class="tab-content">
    <div class="tab-pane active" id="horizontal-form">
        <form class="form-horizontal" method="post" action="/ProjetoCandeias/admin/cursos/add" enctype="multipart/form-data">
            <div class="form-group">
                <label class="col-sm-2 control-label">Categorias</label>
                <div class="col-sm-8">
                    <select name="categorias[_ids][]" multiple="checkbox" class="form-control1">
                        <?php foreach($categorias as $categoria):?>
                            <option value="<?= $categoria->id ?>">
                                <?= $categoria->nome ?>
                            </option>
                        <?php endforeach;?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="focusedinput" class="col-sm-2 control-label">Título do Curso</label>
                <div class="col-sm-8">
                    <input name="titulo" class="form-control1" id="focusedinput" placeholder="Título do Curso" type="text">
                </div>
                <!--<div class="col-sm-2 jlkdfj1">
                    <p class="help-block">Your help text!</p>
                </div>-->
            </div>
            <div class="form-group">
                <label for="focusedinput" class="col-sm-2 control-label">Slug</label>
                <div class="col-sm-8">
                    <input name="slug" class="form-control1" id="focusedinput" placeholder="Slug" type="text">
                </div>
                <!--<div class="col-sm-2 jlkdfj1">
                    <p class="help-block">Your help text!</p>
                </div>-->
            </div>
            <div class="form-group">
                <label for="focusedinput" class="col-sm-2 control-label">Duração</label>
                <div class="col-sm-8">
                    <input name="duracao" class="form-control1" id="focusedinput" placeholder="Duração" type="text">
                </div>
                <!--<div class="col-sm-2 jlkdfj1">
                    <p class="help-block">Your help text!</p>
                </div>-->
            </div>
            <div class="form-group">
                <label for="focusedinput" class="col-sm-2 control-label">Descrição</label>
                <div class="col-sm-8">
                    <input name="descricao" class="form-control1" id="focusedinput" placeholder="Descrição" type="text">
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword" class="col-sm-2 control-label">Conteúdo</label>
                <div class="col-sm-8">
                    <input name="conteudo" class="form-control1" id="focusedinput" placeholder="Conteúdo" type="text">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-8 col-sm-offset-2">
                    <button type="submit" class="btn-success btn">Cadastrar</button>
                </div>
            </div>
        </form>
    </div>
</div>