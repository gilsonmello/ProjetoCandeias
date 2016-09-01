<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Professore'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Aulas'), ['controller' => 'Aulas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Aula'), ['controller' => 'Aulas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Cursos'), ['controller' => 'Cursos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Curso'), ['controller' => 'Cursos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Disciplinas'), ['controller' => 'Disciplinas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Disciplina'), ['controller' => 'Disciplinas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="professores index large-9 medium-8 columns content">
    <h3><?= __('Professores') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('nome') ?></th>
                <th><?= $this->Paginator->sort('email') ?></th>
                <th><?= $this->Paginator->sort('senha') ?></th>
                <th><?= $this->Paginator->sort('nome_foto') ?></th>
                <th><?= $this->Paginator->sort('status') ?></th>
                <th><?= $this->Paginator->sort('data_cadastro') ?></th>
                <th><?= $this->Paginator->sort('data_ultimo_acesso') ?></th>
                <th><?= $this->Paginator->sort('excluido') ?></th>
                <th><?= $this->Paginator->sort('slug') ?></th>
                <th><?= $this->Paginator->sort('facebook') ?></th>
                <th><?= $this->Paginator->sort('youtube') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($professores as $professore): ?>
            <tr>
                <td><?= $this->Number->format($professore->id) ?></td>
                <td><?= h($professore->nome) ?></td>
                <td><?= h($professore->email) ?></td>
                <td><?= h($professore->senha) ?></td>
                <td><?= h($professore->nome_foto) ?></td>
                <td><?= h($professore->status) ?></td>
                <td><?= h($professore->data_cadastro) ?></td>
                <td><?= h($professore->data_ultimo_acesso) ?></td>
                <td><?= h($professore->excluido) ?></td>
                <td><?= h($professore->slug) ?></td>
                <td><?= h($professore->facebook) ?></td>
                <td><?= h($professore->youtube) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $professore->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $professore->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $professore->id], ['confirm' => __('Are you sure you want to delete # {0}?', $professore->id)]) ?>
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
