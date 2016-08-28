<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Aulas'), ['action' => 'index']) ?></li>
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
<div class="aulas form large-9 medium-8 columns content">
    <?= $this->Form->create($aula) ?>
    <fieldset>
        <legend><?= __('Add Aula') ?></legend>
        <?php
            echo $this->Form->input('titulo');
            echo $this->Form->input('ordem');
            echo $this->Form->input('disciplina_id', ['options' => $disciplinas]);
            echo $this->Form->input('data_cadastro');
            echo $this->Form->input('excluido');
            echo $this->Form->input('midias._ids', ['options' => $midias]);
            echo $this->Form->input('cursos._ids', ['options' => $cursos]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
