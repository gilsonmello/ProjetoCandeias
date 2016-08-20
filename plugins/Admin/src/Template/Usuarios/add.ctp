<div class="tab-content">
    <div class="tab-pane active" id="horizontal-form">
        <form class="form-horizontal" method="post" action="<?php echo BASE.'/'.strtolower($this->plugin);?>/usuarios/add">
            <div class="form-group">
                <label for="focusedinput" class="col-sm-2 control-label">Nome</label>
                <div class="col-sm-8">
                    <input name="nome" type="text" class="form-control1" id="focusedinput" placeholder="Nome">
                </div>
                <!--<div class="col-sm-2 jlkdfj1">
                    <p class="help-block">Your help text!</p>
                </div>-->
            </div>
            <div class="form-group">
                <label for="focusedinput" class="col-sm-2 control-label">E-mail</label>
                <div class="col-sm-8">
                    <input name="email" type="text" class="form-control1" id="focusedinput" placeholder="E-mail">
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword" class="col-sm-2 control-label">Senha</label>
                <div class="col-sm-8">
                    <input name="senha" type="password" class="form-control1" id="inputPassword" placeholder="Senha">
                </div>
            </div>
            <div class="form-group">
                <label for="checkbox" class="col-sm-2 control-label">Checkbox</label>
                <div class="col-sm-8">
                    <div class="checkbox-inline1">
                        <label>
                            <input id="checarTodos" type="checkbox"> Todos
                        </label>
                    </div>
                    <br>
                    <?php foreach($todasSecoes as $secao):?>
                        <div class="checkbox-inline1">
                            <label>
                                <input class="secoes" name="secoes[_ids][]" value="<?= $secao->id ?>" type="checkbox"> <?= $secao->titulo ?>
                            </label>
                            </br>
                            
                            <?php foreach($secao->sub_secao as $subSecao):?>
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                <label>
                                    <input class="subSecoes" name="secoes[_ids][]" value="<?= $subSecao->id ?>" type="checkbox"> <?= $subSecao->titulo ?>
                                </label>
                                </br>
                            <?php endforeach;?>
                        </div>
                    <?php endforeach;?>
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