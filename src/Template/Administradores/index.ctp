<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Administradore'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="administradores index large-9 medium-8 columns content">
    <h3><?= __('Administradores') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('nome') ?></th>
                <th><?= $this->Paginator->sort('email') ?></th>
                <th><?= $this->Paginator->sort('senha') ?></th>
                <th><?= $this->Paginator->sort('status') ?></th>
                <th><?= $this->Paginator->sort('data_cadastro') ?></th>
                <th><?= $this->Paginator->sort('data_ultimo_acesso') ?></th>
                <th><?= $this->Paginator->sort('excluido') ?></th>
                <th><?= $this->Paginator->sort('invisivel') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($administradores as $administradore): ?>
            <tr>
                <td><?= $this->Number->format($administradore->id) ?></td>
                <td><?= h($administradore->nome) ?></td>
                <td><?= h($administradore->email) ?></td>
                <td><?= h($administradore->senha) ?></td>
                <td><?= h($administradore->status) ?></td>
                <td><?= h($administradore->data_cadastro) ?></td>
                <td><?= h($administradore->data_ultimo_acesso) ?></td>
                <td><?= h($administradore->excluido) ?></td>
                <td><?= h($administradore->invisivel) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $administradore->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $administradore->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $administradore->id], ['confirm' => __('Are you sure you want to delete # {0}?', $administradore->id)]) ?>
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
