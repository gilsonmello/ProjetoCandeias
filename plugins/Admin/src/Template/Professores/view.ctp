<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Professore'), ['action' => 'edit', $professore->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Professore'), ['action' => 'delete', $professore->id], ['confirm' => __('Are you sure you want to delete # {0}?', $professore->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Professores'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Professore'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Aulas'), ['controller' => 'Aulas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Aula'), ['controller' => 'Aulas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Cursos'), ['controller' => 'Cursos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Curso'), ['controller' => 'Cursos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Disciplinas'), ['controller' => 'Disciplinas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Disciplina'), ['controller' => 'Disciplinas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="professores view large-9 medium-8 columns content">
    <h3><?= h($professore->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Nome') ?></th>
            <td><?= h($professore->nome) ?></td>
        </tr>
        <tr>
            <th><?= __('Email') ?></th>
            <td><?= h($professore->email) ?></td>
        </tr>
        <tr>
            <th><?= __('Senha') ?></th>
            <td><?= h($professore->senha) ?></td>
        </tr>
        <tr>
            <th><?= __('Nome Foto') ?></th>
            <td><?= h($professore->nome_foto) ?></td>
        </tr>
        <tr>
            <th><?= __('Slug') ?></th>
            <td><?= h($professore->slug) ?></td>
        </tr>
        <tr>
            <th><?= __('Facebook') ?></th>
            <td><?= h($professore->facebook) ?></td>
        </tr>
        <tr>
            <th><?= __('Youtube') ?></th>
            <td><?= h($professore->youtube) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($professore->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Data Cadastro') ?></th>
            <td><?= h($professore->data_cadastro) ?></td>
        </tr>
        <tr>
            <th><?= __('Data Ultimo Acesso') ?></th>
            <td><?= h($professore->data_ultimo_acesso) ?></td>
        </tr>
        <tr>
            <th><?= __('Status') ?></th>
            <td><?= $professore->status ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th><?= __('Excluido') ?></th>
            <td><?= $professore->excluido ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Descricao') ?></h4>
        <?= $this->Text->autoParagraph(h($professore->descricao)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Aulas') ?></h4>
        <?php if (!empty($professore->aulas)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Titulo') ?></th>
                <th><?= __('Ordem') ?></th>
                <th><?= __('Iframe') ?></th>
                <th><?= __('Disciplina Id') ?></th>
                <th><?= __('Status') ?></th>
                <th><?= __('Excluido') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th><?= __('Deleted At') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($professore->aulas as $aulas): ?>
            <tr>
                <td><?= h($aulas->id) ?></td>
                <td><?= h($aulas->titulo) ?></td>
                <td><?= h($aulas->ordem) ?></td>
                <td><?= h($aulas->iframe) ?></td>
                <td><?= h($aulas->disciplina_id) ?></td>
                <td><?= h($aulas->status) ?></td>
                <td><?= h($aulas->excluido) ?></td>
                <td><?= h($aulas->created) ?></td>
                <td><?= h($aulas->modified) ?></td>
                <td><?= h($aulas->deleted_at) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Aulas', 'action' => 'view', $aulas->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Aulas', 'action' => 'edit', $aulas->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Aulas', 'action' => 'delete', $aulas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $aulas->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Cursos') ?></h4>
        <?php if (!empty($professore->cursos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Titulo') ?></th>
                <th><?= __('Slug') ?></th>
                <th><?= __('Descricao') ?></th>
                <th><?= __('Conteudo') ?></th>
                <th><?= __('Preco Sem Desconto') ?></th>
                <th><?= __('Preco') ?></th>
                <th><?= __('Duracao') ?></th>
                <th><?= __('Data Duracao') ?></th>
                <th><?= __('Carga Horaria') ?></th>
                <th><?= __('Imagem') ?></th>
                <th><?= __('Status') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th><?= __('Deleted At') ?></th>
                <th><?= __('Excluido') ?></th>
                <th><?= __('Midia Id') ?></th>
                <th><?= __('Visualizacoes') ?></th>
                <th><?= __('Valor Liquido Professores') ?></th>
                <th><?= __('Tempo Blocos') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($professore->cursos as $cursos): ?>
            <tr>
                <td><?= h($cursos->id) ?></td>
                <td><?= h($cursos->titulo) ?></td>
                <td><?= h($cursos->slug) ?></td>
                <td><?= h($cursos->descricao) ?></td>
                <td><?= h($cursos->conteudo) ?></td>
                <td><?= h($cursos->preco_sem_desconto) ?></td>
                <td><?= h($cursos->preco) ?></td>
                <td><?= h($cursos->duracao) ?></td>
                <td><?= h($cursos->data_duracao) ?></td>
                <td><?= h($cursos->carga_horaria) ?></td>
                <td><?= h($cursos->imagem) ?></td>
                <td><?= h($cursos->status) ?></td>
                <td><?= h($cursos->created) ?></td>
                <td><?= h($cursos->modified) ?></td>
                <td><?= h($cursos->deleted_at) ?></td>
                <td><?= h($cursos->excluido) ?></td>
                <td><?= h($cursos->midia_id) ?></td>
                <td><?= h($cursos->visualizacoes) ?></td>
                <td><?= h($cursos->valor_liquido_professores) ?></td>
                <td><?= h($cursos->tempo_blocos) ?></td>
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
    <div class="related">
        <h4><?= __('Related Disciplinas') ?></h4>
        <?php if (!empty($professore->disciplinas)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Titulo') ?></th>
                <th><?= __('Curso Id') ?></th>
                <th><?= __('Excluido') ?></th>
                <th><?= __('Slug') ?></th>
                <th><?= __('Status') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th><?= __('Deleted At') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($professore->disciplinas as $disciplinas): ?>
            <tr>
                <td><?= h($disciplinas->id) ?></td>
                <td><?= h($disciplinas->titulo) ?></td>
                <td><?= h($disciplinas->curso_id) ?></td>
                <td><?= h($disciplinas->excluido) ?></td>
                <td><?= h($disciplinas->slug) ?></td>
                <td><?= h($disciplinas->status) ?></td>
                <td><?= h($disciplinas->created) ?></td>
                <td><?= h($disciplinas->modified) ?></td>
                <td><?= h($disciplinas->deleted_at) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Disciplinas', 'action' => 'view', $disciplinas->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Disciplinas', 'action' => 'edit', $disciplinas->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Disciplinas', 'action' => 'delete', $disciplinas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $disciplinas->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
