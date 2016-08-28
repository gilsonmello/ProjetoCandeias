<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Aula'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Disciplinas'), ['controller' => 'Disciplinas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Disciplina'), ['controller' => 'Disciplinas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Iteracoes'), ['controller' => 'Iteracoes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Iteraco'), ['controller' => 'Iteracoes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Visualizacoes'), ['controller' => 'Visualizacoes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Visualizaco'), ['controller' => 'Visualizacoes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Midias'), ['controller' => 'Midias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Midia'), ['controller' => 'Midias', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Cursos'), ['controller' => 'Cursos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Curso'), ['controller' => 'Cursos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="aulas index large-9 medium-8 columns content">
    <h3><?= __('Aulas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('titulo') ?></th>
                <th><?= $this->Paginator->sort('ordem') ?></th>
                <th><?= $this->Paginator->sort('disciplina_id') ?></th>
                <th><?= $this->Paginator->sort('data_cadastro') ?></th>
                <th><?= $this->Paginator->sort('excluido') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($aulas as $aula): ?>
            <tr>
                <td><?= $this->Number->format($aula->id) ?></td>
                <td><?= h($aula->titulo) ?></td>
                <td><?= $this->Number->format($aula->ordem) ?></td>
                <td><?= $aula->has('disciplina') ? $this->Html->link($aula->disciplina->id, ['controller' => 'Disciplinas', 'action' => 'view', $aula->disciplina->id]) : '' ?></td>
                <td><?= h($aula->data_cadastro) ?></td>
                <td><?= h($aula->excluido) ?></td>
                <td><?= h($aula->created) ?></td>
                <td><?= h($aula->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $aula->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $aula->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $aula->id], ['confirm' => __('Are you sure you want to delete # {0}?', $aula->id)]) ?>
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
