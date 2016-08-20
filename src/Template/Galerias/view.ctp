<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Galeria'), ['action' => 'edit', $galeria->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Galeria'), ['action' => 'delete', $galeria->id], ['confirm' => __('Are you sure you want to delete # {0}?', $galeria->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Galerias'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Galeria'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="galerias view large-9 medium-8 columns content">
    <h3><?= h($galeria->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Nome Arquivo') ?></th>
            <td><?= h($galeria->nome_arquivo) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($galeria->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($galeria->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($galeria->modified) ?></td>
        </tr>
        <tr>
            <th><?= __('Delete At') ?></th>
            <td><?= h($galeria->delete_at) ?></td>
        </tr>
    </table>
</div>
