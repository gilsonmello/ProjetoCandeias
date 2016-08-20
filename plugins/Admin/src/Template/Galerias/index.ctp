<h3 class="blank1">Basic Tables</h3>
<div class="xs tabls">
  <div class="bs-example4" data-example-id="contextual-table">
    <table class="table">
      <thead>
        <tr>
          <th>#</th>
          <th>Column heading</th>
          <th>Column heading</th>
          <th>Column heading</th>
        </tr>
      </thead>
      <tbody>
        <?php $i = 0; foreach($galerias as $galeria):
          if($i == 0){ ?>
            <tr class="active">
              <th scope="row"><?= $galeria->id ?></th>
              <td><?= $galeria->nome_arquivo ?></td>
              <td>Column content</td>
              <td>Column content</td>
            </tr>
          <?php $i = 1;  ?>
          <?php } else {?>
            <tr>
              <th scope="row"><?= $galeria->id ?></th>
              <td><?= $galeria->nome_arquivo ?></td>
              <td>Column content</td>
              <td>Column content</td>
            </tr>
          <?php $i = 0; }?>
        <?php endforeach;?>
      </tbody>
    </table>
  </div>
</div>