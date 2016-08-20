<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Seco'), ['action' => 'edit', $seco->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Seco'), ['action' => 'delete', $seco->id], ['confirm' => __('Are you sure you want to delete # {0}?', $seco->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Secoes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Seco'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="secoes view large-9 medium-8 columns content">
    <h3><?= h($seco->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Titulo') ?></th>
            <td><?= h($seco->titulo) ?></td>
        </tr>
        <tr>
            <th><?= __('Link') ?></th>
            <td><?= h($seco->link) ?></td>
        </tr>
        <tr>
            <th><?= __('Referencia') ?></th>
            <td><?= h($seco->referencia) ?></td>
        </tr>
        <tr>
            <th><?= __('Classe Icone') ?></th>
            <td><?= h($seco->classe_icone) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($seco->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Secao Id') ?></th>
            <td><?= $this->Number->format($seco->secao_id) ?></td>
        </tr>
        <tr>
            <th><?= __('Nivel') ?></th>
            <td><?= $this->Number->format($seco->nivel) ?></td>
        </tr>
        <tr>
            <th><?= __('Excluido') ?></th>
            <td><?= $this->Number->format($seco->excluido) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Usuarios') ?></h4>
        <?php if (!empty($seco->usuarios)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Nome') ?></th>
                <th><?= __('Email') ?></th>
                <th><?= __('Regra') ?></th>
                <th><?= __('Senha') ?></th>
                <th><?= __('Arquivo Foto') ?></th>
                <th><?= __('Sexo') ?></th>
                <th><?= __('Rg') ?></th>
                <th><?= __('Cpf') ?></th>
                <th><?= __('Cnpj') ?></th>
                <th><?= __('Data Nascimento') ?></th>
                <th><?= __('Logradouro') ?></th>
                <th><?= __('Numero') ?></th>
                <th><?= __('Complemento') ?></th>
                <th><?= __('Bairro') ?></th>
                <th><?= __('Cidade') ?></th>
                <th><?= __('Estado') ?></th>
                <th><?= __('Cep') ?></th>
                <th><?= __('Telefone') ?></th>
                <th><?= __('Celular') ?></th>
                <th><?= __('Data Ultimo Acesso') ?></th>
                <th><?= __('Status') ?></th>
                <th><?= __('Excluido') ?></th>
                <th><?= __('Session Id') ?></th>
                <th><?= __('Endereco') ?></th>
                <th><?= __('Ip') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th><?= __('Deletado') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($seco->usuarios as $usuarios): ?>
            <tr>
                <td><?= h($usuarios->id) ?></td>
                <td><?= h($usuarios->nome) ?></td>
                <td><?= h($usuarios->email) ?></td>
                <td><?= h($usuarios->regra) ?></td>
                <td><?= h($usuarios->senha) ?></td>
                <td><?= h($usuarios->arquivo_foto) ?></td>
                <td><?= h($usuarios->sexo) ?></td>
                <td><?= h($usuarios->rg) ?></td>
                <td><?= h($usuarios->cpf) ?></td>
                <td><?= h($usuarios->cnpj) ?></td>
                <td><?= h($usuarios->data_nascimento) ?></td>
                <td><?= h($usuarios->logradouro) ?></td>
                <td><?= h($usuarios->numero) ?></td>
                <td><?= h($usuarios->complemento) ?></td>
                <td><?= h($usuarios->bairro) ?></td>
                <td><?= h($usuarios->cidade) ?></td>
                <td><?= h($usuarios->estado) ?></td>
                <td><?= h($usuarios->cep) ?></td>
                <td><?= h($usuarios->telefone) ?></td>
                <td><?= h($usuarios->celular) ?></td>
                <td><?= h($usuarios->data_ultimo_acesso) ?></td>
                <td><?= h($usuarios->status) ?></td>
                <td><?= h($usuarios->excluido) ?></td>
                <td><?= h($usuarios->session_id) ?></td>
                <td><?= h($usuarios->endereco) ?></td>
                <td><?= h($usuarios->ip) ?></td>
                <td><?= h($usuarios->created) ?></td>
                <td><?= h($usuarios->modified) ?></td>
                <td><?= h($usuarios->deletado) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Usuarios', 'action' => 'view', $usuarios->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Usuarios', 'action' => 'edit', $usuarios->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Usuarios', 'action' => 'delete', $usuarios->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usuarios->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
