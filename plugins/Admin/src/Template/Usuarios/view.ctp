<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Usuario'), ['action' => 'edit', $usuario->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Usuario'), ['action' => 'delete', $usuario->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usuario->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Usuarios'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Usuario'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Secoes'), ['controller' => 'Secoes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Seco'), ['controller' => 'Secoes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="usuarios view large-9 medium-8 columns content">
    <h3><?= h($usuario->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Nome') ?></th>
            <td><?= h($usuario->nome) ?></td>
        </tr>
        <tr>
            <th><?= __('Email') ?></th>
            <td><?= h($usuario->email) ?></td>
        </tr>
        <tr>
            <th><?= __('Regra') ?></th>
            <td><?= h($usuario->regra) ?></td>
        </tr>
        <tr>
            <th><?= __('Senha') ?></th>
            <td><?= h($usuario->senha) ?></td>
        </tr>
        <tr>
            <th><?= __('Arquivo Foto') ?></th>
            <td><?= h($usuario->arquivo_foto) ?></td>
        </tr>
        <tr>
            <th><?= __('Rg') ?></th>
            <td><?= h($usuario->rg) ?></td>
        </tr>
        <tr>
            <th><?= __('Cpf') ?></th>
            <td><?= h($usuario->cpf) ?></td>
        </tr>
        <tr>
            <th><?= __('Cnpj') ?></th>
            <td><?= h($usuario->cnpj) ?></td>
        </tr>
        <tr>
            <th><?= __('Logradouro') ?></th>
            <td><?= h($usuario->logradouro) ?></td>
        </tr>
        <tr>
            <th><?= __('Numero') ?></th>
            <td><?= h($usuario->numero) ?></td>
        </tr>
        <tr>
            <th><?= __('Complemento') ?></th>
            <td><?= h($usuario->complemento) ?></td>
        </tr>
        <tr>
            <th><?= __('Bairro') ?></th>
            <td><?= h($usuario->bairro) ?></td>
        </tr>
        <tr>
            <th><?= __('Cidade') ?></th>
            <td><?= h($usuario->cidade) ?></td>
        </tr>
        <tr>
            <th><?= __('Estado') ?></th>
            <td><?= h($usuario->estado) ?></td>
        </tr>
        <tr>
            <th><?= __('Cep') ?></th>
            <td><?= h($usuario->cep) ?></td>
        </tr>
        <tr>
            <th><?= __('Telefone') ?></th>
            <td><?= h($usuario->telefone) ?></td>
        </tr>
        <tr>
            <th><?= __('Celular') ?></th>
            <td><?= h($usuario->celular) ?></td>
        </tr>
        <tr>
            <th><?= __('Session Id') ?></th>
            <td><?= h($usuario->session_id) ?></td>
        </tr>
        <tr>
            <th><?= __('Endereco') ?></th>
            <td><?= h($usuario->endereco) ?></td>
        </tr>
        <tr>
            <th><?= __('Ip') ?></th>
            <td><?= h($usuario->ip) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($usuario->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Sexo') ?></th>
            <td><?= $this->Number->format($usuario->sexo) ?></td>
        </tr>
        <tr>
            <th><?= __('Data Nascimento') ?></th>
            <td><?= h($usuario->data_nascimento) ?></td>
        </tr>
        <tr>
            <th><?= __('Data Ultimo Acesso') ?></th>
            <td><?= h($usuario->data_ultimo_acesso) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($usuario->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($usuario->modified) ?></td>
        </tr>
        <tr>
            <th><?= __('Deletado') ?></th>
            <td><?= h($usuario->deletado) ?></td>
        </tr>
        <tr>
            <th><?= __('Status') ?></th>
            <td><?= $usuario->status ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th><?= __('Excluido') ?></th>
            <td><?= $usuario->excluido ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Secoes') ?></h4>
        <?php if (!empty($usuario->secoes)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Secao Id') ?></th>
                <th><?= __('Titulo') ?></th>
                <th><?= __('Link') ?></th>
                <th><?= __('Referencia') ?></th>
                <th><?= __('Classe Icone') ?></th>
                <th><?= __('Nivel') ?></th>
                <th><?= __('Excluido') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($usuario->secoes as $secoes): ?>
            <tr>
                <td><?= h($secoes->id) ?></td>
                <td><?= h($secoes->secao_id) ?></td>
                <td><?= h($secoes->titulo) ?></td>
                <td><?= h($secoes->link) ?></td>
                <td><?= h($secoes->referencia) ?></td>
                <td><?= h($secoes->classe_icone) ?></td>
                <td><?= h($secoes->nivel) ?></td>
                <td><?= h($secoes->excluido) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Secoes', 'action' => 'view', $secoes->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Secoes', 'action' => 'edit', $secoes->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Secoes', 'action' => 'delete', $secoes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $secoes->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
