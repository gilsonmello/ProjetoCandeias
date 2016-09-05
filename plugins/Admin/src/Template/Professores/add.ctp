<h3 class="blank1">Adicionar Professor</h3>
<div class="tab-content">
    <div class="tab-pane active" id="horizontal-form">
        <?=
        $this->Form->create('Professores', [
            'type' => 'file',
            'url' => [
                'controller' => 'Professores',
                'action' => 'add'
            ],
            'class' => 'form-horizontal'
        ]);
        ?>
        <div class="form-group">
            <label for="focusedinput" class="col-sm-2 control-label">Nome</label>
            <div class="col-sm-8">
                <input name="nome" class="form-control1" id="focusedinput" placeholder="Default Input" type="text">
            </div>
        </div>
        <div class="form-group">
            <label for="focusedinput" class="col-sm-2 control-label">E-mail</label>
            <div class="col-sm-8">
                <input name="email" class="form-control1" id="focusedinput" placeholder="Default Input" type="text">
            </div>
        </div>
        <div class="form-group">
            <label for="focusedinput" class="col-sm-2 control-label">Senha</label>
            <div class="col-sm-8">
                <input name="senha" class="form-control1" id="focusedinput" placeholder="*****" type="password">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-8 col-sm-offset-2">
                <button class="btn-success btn" type="submit">Submit</button>
            </div>
        </div>
        <?php echo $this->Form->end(); ?>
    </div>
</div>