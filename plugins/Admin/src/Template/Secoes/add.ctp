<div class="tab-content">
    <div class="tab-pane active" id="horizontal-form">
        <form class="form-horizontal" method="post" action="<?php echo BASE.'/'.strtolower($this->plugin);?>/secoes/add">
            <div class="form-group">
                <label for="focusedinput" class="col-sm-2 control-label">Título</label>
                <div class="col-sm-8">
                    <input name="titulo" type="text" class="form-control1" id="focusedinput" placeholder="Título">
                </div>
                <!--<div class="col-sm-2 jlkdfj1">
                    <p class="help-block">Your help text!</p>
                </div>-->
            </div>
            <div class="form-group">
                <label for="focusedinput" class="col-sm-2 control-label">Link</label>
                <div class="col-sm-8">
                    <input name="link" type="text" class="form-control1" id="focusedinput" placeholder="link">
                </div>
            </div>
            <div class="form-group">
                <label for="focusedinput" class="col-sm-2 control-label">Referência</label>
                <div class="col-sm-8">
                    <input name="referencia" type="text" class="form-control1" id="focusedinput" placeholder="Referência">
                </div>
            </div>
            <div class="form-group">
                <label for="focusedinput" class="col-sm-2 control-label">Nível</label>
                <div class="col-sm-8">
                    <div class="radio block"><label><input name="nivel" type="radio"> 1</label></div>
                    <div class="radio block"><label><input name="nivel" type="radio"> 2</label></div>
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