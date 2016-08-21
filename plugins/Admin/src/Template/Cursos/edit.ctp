<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $curso->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $curso->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Cursos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Aulas'), ['controller' => 'Aulas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Aula'), ['controller' => 'Aulas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Cupons Cursos Modulos Pacotes'), ['controller' => 'CuponsCursosModulosPacotes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cupons Cursos Modulos Pacote'), ['controller' => 'CuponsCursosModulosPacotes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Cursos Itens'), ['controller' => 'CursosItens', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cursos Iten'), ['controller' => 'CursosItens', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Iteracoes'), ['controller' => 'Iteracoes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Iteraco'), ['controller' => 'Iteracoes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Mensagens Curso Modulos Pacotes'), ['controller' => 'MensagensCursoModulosPacotes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Mensagens Curso Modulos Pacote'), ['controller' => 'MensagensCursoModulosPacotes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Pagamentos'), ['controller' => 'Pagamentos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pagamento'), ['controller' => 'Pagamentos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Pedidos Itens'), ['controller' => 'PedidosItens', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pedidos Iten'), ['controller' => 'PedidosItens', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Visualizacoes'), ['controller' => 'Visualizacoes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Visualizaco'), ['controller' => 'Visualizacoes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Matriculas'), ['controller' => 'Matriculas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Matricula'), ['controller' => 'Matriculas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Professores'), ['controller' => 'Professores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Professore'), ['controller' => 'Professores', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="cursos form large-9 medium-8 columns content">
    <?= $this->Form->create($curso) ?>
    <fieldset>
        <legend><?= __('Edit Curso') ?></legend>
        <?php
            echo $this->Form->input('aula_id');
            echo $this->Form->input('titulo');
            echo $this->Form->input('descricao');
            echo $this->Form->input('preco');
            echo $this->Form->input('duracao');
            echo $this->Form->input('data_cadastro');
            echo $this->Form->input('data_duracao');
            echo $this->Form->input('excluido');
            echo $this->Form->input('vendido_separadamente');
            echo $this->Form->input('matriculas._ids', ['options' => $matriculas]);
            echo $this->Form->input('professores._ids', ['options' => $professores]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
