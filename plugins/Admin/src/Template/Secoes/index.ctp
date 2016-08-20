<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Seco'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="secoes index large-9 medium-8 columns content">
    <h3><?= __('Secoes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('secao_id') ?></th>
                <th><?= $this->Paginator->sort('titulo') ?></th>
                <th><?= $this->Paginator->sort('link') ?></th>
                <th><?= $this->Paginator->sort('referencia') ?></th>
                <th><?= $this->Paginator->sort('classe_icone') ?></th>
                <th><?= $this->Paginator->sort('nivel') ?></th>
                <th><?= $this->Paginator->sort('excluido') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($secoes as $seco): ?>
            <tr>
                <td><?= $this->Number->format($seco->id) ?></td>
                <td><?= $this->Number->format($seco->secao_id) ?></td>
                <td><?= h($seco->titulo) ?></td>
                <td><?= h($seco->link) ?></td>
                <td><?= h($seco->referencia) ?></td>
                <td><?= h($seco->classe_icone) ?></td>
                <td><?= $this->Number->format($seco->nivel) ?></td>
                <td><?= $this->Number->format($seco->excluido) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $seco->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $seco->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $seco->id], ['confirm' => __('Are you sure you want to delete # {0}?', $seco->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
