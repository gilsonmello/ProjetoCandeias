<h3 class="blank1">Perguntas</h3>
<div class="row">
  <div class="col-md-12">
    <h3>
        <a href="<?php echo BASE.'/'.strtolower($this->plugin);?>/perguntas/add"><span class="label label-default">Adicionar</span></a>
    </h3>
  </div>
</div>
<br>
<div class="xs tabls">
    <div class="bs-example4" data-example-id="contextual-table">
        <table class="table">
            <thead>
                <tr>
                    <th>Enunciado</th>
                    <th>Status</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 0; foreach($perguntas as $pergunta):
                    if($i == 0){ ?>
                        <tr class="active">
                            <td width="65%"><?= $pergunta->enunciado ?></td>
                            <td><?= ($pergunta->status == 1) ? "Ativo": "Invativo" ?></td>
                            <td>
                                <h4>
                                    <a href="<?php echo BASE.'/'.  strtolower($this->plugin);?>/perguntas/edit/<?=$pergunta->id ?>"><span class="label label-primary">Editar</span></a>
                                    <a href="<?php echo BASE.'/'.  strtolower($this->plugin);?>/perguntas/view/<?=$pergunta->id ?>"><span class="label label-info">Ver</span></a>
                                    <a data-method="delete" href="<?php echo BASE.'/'.  strtolower($this->plugin);?>/perguntas/delete/<?=$pergunta->id ?>"><span class="label label-danger">Excluir</span></a>
                                </h4>
                            </td>
                        </tr>
                    <?php $i = 1;  ?>
                    <?php } else {?>
                    <tr>
                        <td><?= $pergunta->enunciado ?></td>
                        <td><?= ($pergunta->status == 1) ? "Ativo": "Invativo" ?></td>
                        <td>
                            <h4>
                                <a href="<?php echo BASE.'/'.  strtolower($this->plugin);?>/perguntas/edit/<?=$pergunta->id ?>"><span class="label label-primary">Editar</span></a>
                                <a href="<?php echo BASE.'/'.  strtolower($this->plugin);?>/perguntas/view/<?=$pergunta->id ?>"><span class="label label-info">Ver</span></a>
                                <a data-method="delete"  href="<?php echo BASE.'/'.  strtolower($this->plugin);?>/perguntas/delete/<?=$pergunta->id ?>"><span class="label label-danger">Excluir</span></a>
                            </h4>
                        </td>
                    </tr>
                  <?php $i = 0; }?>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>
</div>