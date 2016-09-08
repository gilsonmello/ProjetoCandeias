<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $pergunta->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $pergunta->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Perguntas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Respostas'), ['controller' => 'Respostas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Resposta'), ['controller' => 'Respostas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="perguntas form large-9 medium-8 columns content">
    <?= $this->Form->create($pergunta) ?>
    <fieldset>
        <legend><?= __('Edit Pergunta') ?></legend>
        <?php
            echo $this->Form->input('enunciado');
            echo $this->Form->input('excluido');
            echo $this->Form->input('status');
            echo $this->Form->input('resposta_certa');
            echo $this->Form->input('resp1');
            echo $this->Form->input('resp2');
            echo $this->Form->input('resp3');
            echo $this->Form->input('resp4');
            echo $this->Form->input('resp5');
            echo $this->Form->input('deleted_at', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
