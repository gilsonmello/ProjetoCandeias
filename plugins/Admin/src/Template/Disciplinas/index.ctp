<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Disciplina'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Simulados'), ['controller' => 'Simulados', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Simulado'), ['controller' => 'Simulados', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Perguntas'), ['controller' => 'Perguntas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pergunta'), ['controller' => 'Perguntas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Respostas'), ['controller' => 'Respostas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Resposta'), ['controller' => 'Respostas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Cursos'), ['controller' => 'Cursos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Curso'), ['controller' => 'Cursos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Professores'), ['controller' => 'Professores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Professore'), ['controller' => 'Professores', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="disciplinas index large-9 medium-8 columns content">
    <h3><?= __('Disciplinas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('titulo') ?></th>
                <th><?= $this->Paginator->sort('simulado_id') ?></th>
                <th><?= $this->Paginator->sort('excluido') ?></th>
                <th><?= $this->Paginator->sort('slug') ?></th>
                <th><?= $this->Paginator->sort('status') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($disciplinas as $disciplina): ?>
            <tr>
                <td><?= $this->Number->format($disciplina->id) ?></td>
                <td><?= h($disciplina->titulo) ?></td>
                <td><?= $disciplina->has('simulado') ? $this->Html->link($disciplina->simulado->id, ['controller' => 'Simulados', 'action' => 'view', $disciplina->simulado->id]) : '' ?></td>
                <td><?= $this->Number->format($disciplina->excluido) ?></td>
                <td><?= h($disciplina->slug) ?></td>
                <td><?= $this->Number->format($disciplina->status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $disciplina->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $disciplina->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $disciplina->id], ['confirm' => __('Are you sure you want to delete # {0}?', $disciplina->id)]) ?>
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
