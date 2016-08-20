<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Administradore'), ['action' => 'edit', $administradore->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Administradore'), ['action' => 'delete', $administradore->id], ['confirm' => __('Are you sure you want to delete # {0}?', $administradore->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Administradores'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Administradore'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="administradores view large-9 medium-8 columns content">
    <h3><?= h($administradore->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Nome') ?></th>
            <td><?= h($administradore->nome) ?></td>
        </tr>
        <tr>
            <th><?= __('Email') ?></th>
            <td><?= h($administradore->email) ?></td>
        </tr>
        <tr>
            <th><?= __('Senha') ?></th>
            <td><?= h($administradore->senha) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($administradore->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Data Cadastro') ?></th>
            <td><?= h($administradore->data_cadastro) ?></td>
        </tr>
        <tr>
            <th><?= __('Data Ultimo Acesso') ?></th>
            <td><?= h($administradore->data_ultimo_acesso) ?></td>
        </tr>
        <tr>
            <th><?= __('Status') ?></th>
            <td><?= $administradore->status ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th><?= __('Excluido') ?></th>
            <td><?= $administradore->excluido ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th><?= __('Invisivel') ?></th>
            <td><?= $administradore->invisivel ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
