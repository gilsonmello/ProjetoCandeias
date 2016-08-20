<h3 class="blank1">Basic Forms</h3>
<div class="tab-content">
    <div class="tab-pane active" id="horizontal-form">
        <?= $this->Form->create('Galerias', [
                    'type' =>   'file',
                    'url' => [
                        'controller'    =>  'Galerias',
                        'action'        =>  'add'
                    ],
                    'class' => 'form-horizontal'
                ]);?>
            <div class="form-group">
                <label for="focusedinput" class="col-sm-2 control-label">Focused Input</label>
                <div class="col-sm-8">
                    <input class="form-control1" id="focusedinput" placeholder="Default Input" type="text">
                </div>
                <div class="col-sm-2">
                    <p class="help-block">Your help text!</p>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-8 col-sm-offset-2">
                    <label for="exampleInputFile">File input</label>
                    <input id="exampleInputFile" type="file" name="img">
                    <p class="help-block">Example block-level help text here.</p>
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