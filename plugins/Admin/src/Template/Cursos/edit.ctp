<div class="tab-content">
    <div class="tab-pane active" id="horizontal-form">
        <form class="form-horizontal" method="post" action="<?php echo BASE.'/'.strtolower($this->plugin).'/usuarios/edit/'. $curso->id;?>">
            <div class="form-group">
                <label for="focusedinput" class="col-sm-2 control-label">Título</label>
                <div class="col-sm-8">
                    <input name="titulo" value="<?= $curso->titulo ?>" type="text" class="form-control1" id="focusedinput" placeholder="Título">
                </div>
                <!--<div class="col-sm-2 jlkdfj1">
                    <p class="help-block">Your help text!</p>
                </div>-->
            </div>
            <div class="form-group">
                <label for="focusedinput" class="col-sm-2 control-label">Descrição"</label>
                <div class="col-sm-8">
                    <input name="descricao" value="<?= $curso->descricao ?>" type="text" class="form-control1" id="focusedinput" placeholder="Descrição">
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword" class="col-sm-2 control-label">Conteúdo</label>
                <div class="col-sm-8">
                    <input name="conteudo" value="<?= $curso->conteudo ?>" type="text" class="form-control1" id="inputPassword" placeholder="Conteúdo">
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

<script src="<?php echo BASE.'/'.strtolower($this->plugin);?>/js/usuarios/index.js"></script>