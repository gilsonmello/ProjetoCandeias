<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $seco->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $seco->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Secoes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="secoes form large-9 medium-8 columns content">
    <?= $this->Form->create($seco) ?>
    <fieldset>
        <legend><?= __('Edit Seco') ?></legend>
        <?php
            echo $this->Form->input('secao_id');
            echo $this->Form->input('titulo');
            echo $this->Form->input('link');
            echo $this->Form->input('referencia');
            echo $this->Form->input('classe_icone');
            echo $this->Form->input('nivel');
            echo $this->Form->input('excluido');
            echo $this->Form->input('usuarios._ids', ['options' => $usuarios]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
