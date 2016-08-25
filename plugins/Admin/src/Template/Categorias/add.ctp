<div class="tab-content">
    <div class="tab-pane active" id="horizontal-form">
        <form class="form-horizontal" method="post" action="<?php echo BASE.'/'.strtolower($this->plugin);?>/categorias/add">
            <div class="form-group">
                <label for="focusedinput" class="col-sm-2 control-label">Nome</label>
                <div class="col-sm-8">
                    <input name="nome" type="text" class="form-control1" id="focusedinput" placeholder="Nome">
                </div>
            </div>
            <div class="form-group">
                <label for="focusedinput" class="col-sm-2 control-label">Slug</label>
                <div class="col-sm-8">
                    <input name="slug" type="text" class="form-control1" id="focusedinput" placeholder="">
                </div>
            </div><br>
            <div class="form-group">
                <div class="col-sm-8 col-sm-offset-2">
                    <button class="btn-success btn">Cadastrar</button>
                </div>
            </div>
        </form>
    </div>
</div>