<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $disciplina->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $disciplina->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Disciplinas'), ['action' => 'index']) ?></li>
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
<div class="disciplinas form large-9 medium-8 columns content">
    <?= $this->Form->create($disciplina) ?>
    <fieldset>
        <legend><?= __('Edit Disciplina') ?></legend>
        <?php
            echo $this->Form->input('titulo');
            echo $this->Form->input('simulado_id', ['options' => $simulados]);
            echo $this->Form->input('excluido');
            echo $this->Form->input('slug');
            echo $this->Form->input('status');
            echo $this->Form->input('cursos._ids', ['options' => $cursos]);
            echo $this->Form->input('professores._ids', ['options' => $professores]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
