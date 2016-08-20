<h3 class="blank1">Basic Tables</h3>
<div class="row">
  <div class="col-md-12">
    <h3>
      <a href="<?php echo BASE.'/'.strtolower($this->plugin);?>/usuarios/add"><span class="label label-default">Adicionar</span></a>
    </h3>
  </div>
</div>
<br>
<div class="xs tabls">
  <div class="bs-example4" data-example-id="contextual-table">
    <table class="table">
      <thead>
        <tr>
          <th><?= $this->Paginator->sort('id') ?> </th>
          <th><?= $this->Paginator->sort('nome') ?></th>
          <th>Ações</th>
        </tr>
      </thead>
      <tbody>
        <?php $i = 0; foreach($usuarios as $usuario):
          if($i == 0){ ?>
            <tr class="active">
              <th scope="row"> <?= $usuario->id ?></th>
              <td><?= $usuario->nome ?></td>
              <td>
                <h4>
                  <a href="<?php echo BASE.'/'.strtolower($this->plugin).'/usuarios/edit/'.$usuario->id;?>"><span class="label label-primary">Editar</span></a>
                  <a href="<?php echo BASE.'/'.strtolower($this->plugin).'/usuarios/view/'.$usuario->id;?>"><span class="label label-info">Ver</span></a>
                  <a href="<?php echo BASE.'/'.strtolower($this->plugin).'/usuarios/delete/'.$usuario->id;?>"><span class="label label-danger">Deletar</span></a>
                </h4>
              </td>
            </tr>
          <?php $i = 1;  ?>
          <?php } else {?>
            <tr>
              <th scope="row"> <?= $usuario->id ?></th>
              <td><?= $usuario->nome ?></td>
              <td>
                <h4>
                  <a href="<?php echo BASE.'/'.strtolower($this->plugin).'/usuarios/edit/'.$usuario->id;?>"><span class="label label-primary">Editar</span></a>
                  <a href="<?php echo BASE.'/'.strtolower($this->plugin).'/usuarios/view/'.$usuario->id;?>"><span class="label label-info">Ver</span></a>
                  <a href="<?php echo BASE.'/'.strtolower($this->plugin).'/usuarios/delete/'.$usuario->id;?>"><span class="label label-danger">Deletar</span></a>
                </h4>
              </td>
            </tr>
          <?php $i = 0; }?>
        <?php endforeach;?>
      </tbody>
    </table>
  </div>
</div>