<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Categoria'), ['action' => 'edit', $categoria->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Categoria'), ['action' => 'delete', $categoria->id], ['confirm' => __('Are you sure you want to delete # {0}?', $categoria->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Categorias'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Categoria'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Cursos'), ['controller' => 'Cursos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Curso'), ['controller' => 'Cursos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="categorias view large-9 medium-8 columns content">
    <h3><?= h($categoria->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($categoria->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Slug') ?></th>
            <td><?= h($categoria->slug) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($categoria->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $this->Number->format($categoria->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Excluido') ?></th>
            <td><?= $this->Number->format($categoria->excluido) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data Cadastro') ?></th>
            <td><?= h($categoria->data_cadastro) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Cursos') ?></h4>
        <?php if (!empty($categoria->cursos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Assunto Id') ?></th>
                <th scope="col"><?= __('Modpacote Id') ?></th>
                <th scope="col"><?= __('Professor Id') ?></th>
                <th scope="col"><?= __('Preco') ?></th>
                <th scope="col"><?= __('Duracao') ?></th>
                <th scope="col"><?= __('Data Cadastro') ?></th>
                <th scope="col"><?= __('Data Duracao') ?></th>
                <th scope="col"><?= __('Excluido') ?></th>
                <th scope="col"><?= __('Vendido Separadamente') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($categoria->cursos as $cursos): ?>
            <tr>
                <td><?= h($cursos->id) ?></td>
                <td><?= h($cursos->assunto_id) ?></td>
                <td><?= h($cursos->modpacote_id) ?></td>
                <td><?= h($cursos->professor_id) ?></td>
                <td><?= h($cursos->preco) ?></td>
                <td><?= h($cursos->duracao) ?></td>
                <td><?= h($cursos->data_cadastro) ?></td>
                <td><?= h($cursos->data_duracao) ?></td>
                <td><?= h($cursos->excluido) ?></td>
                <td><?= h($cursos->vendido_separadamente) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Cursos', 'action' => 'view', $cursos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Cursos', 'action' => 'edit', $cursos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Cursos', 'action' => 'delete', $cursos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cursos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
