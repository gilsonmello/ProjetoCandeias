<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $professore->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $professore->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Professores'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Aulas'), ['controller' => 'Aulas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Aula'), ['controller' => 'Aulas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Cursos'), ['controller' => 'Cursos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Curso'), ['controller' => 'Cursos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Disciplinas'), ['controller' => 'Disciplinas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Disciplina'), ['controller' => 'Disciplinas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="professores form large-9 medium-8 columns content">
    <?= $this->Form->create($professore) ?>
    <fieldset>
        <legend><?= __('Edit Professore') ?></legend>
        <?php
            echo $this->Form->input('nome');
            echo $this->Form->input('email');
            echo $this->Form->input('senha');
            echo $this->Form->input('descricao');
            echo $this->Form->input('nome_foto');
            echo $this->Form->input('status');
            echo $this->Form->input('data_cadastro');
            echo $this->Form->input('data_ultimo_acesso');
            echo $this->Form->input('excluido');
            echo $this->Form->input('slug');
            echo $this->Form->input('facebook');
            echo $this->Form->input('youtube');
            echo $this->Form->input('aulas._ids', ['options' => $aulas]);
            echo $this->Form->input('cursos._ids', ['options' => $cursos]);
            echo $this->Form->input('disciplinas._ids', ['options' => $disciplinas]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
