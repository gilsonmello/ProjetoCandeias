<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Curso'), ['action' => 'add']) ?></li>
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
<div class="cursos index large-9 medium-8 columns content">
    <h3><?= __('Cursos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('aula_id') ?></th>
                <th><?= $this->Paginator->sort('titulo') ?></th>
                <th><?= $this->Paginator->sort('descricao') ?></th>
                <th><?= $this->Paginator->sort('preco') ?></th>
                <th><?= $this->Paginator->sort('duracao') ?></th>
                <th><?= $this->Paginator->sort('data_cadastro') ?></th>
                <th><?= $this->Paginator->sort('data_duracao') ?></th>
                <th><?= $this->Paginator->sort('excluido') ?></th>
                <th><?= $this->Paginator->sort('vendido_separadamente') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cursos as $curso): ?>
            <tr>
                <td><?= $this->Number->format($curso->id) ?></td>
                <td><?= $this->Number->format($curso->aula_id) ?></td>
                <td><?= h($curso->titulo) ?></td>
                <td><?= h($curso->descricao) ?></td>
                <td><?= $this->Number->format($curso->preco) ?></td>
                <td><?= $this->Number->format($curso->duracao) ?></td>
                <td><?= h($curso->data_cadastro) ?></td>
                <td><?= h($curso->data_duracao) ?></td>
                <td><?= h($curso->excluido) ?></td>
                <td><?= h($curso->vendido_separadamente) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $curso->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $curso->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $curso->id], ['confirm' => __('Are you sure you want to delete # {0}?', $curso->id)]) ?>
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
