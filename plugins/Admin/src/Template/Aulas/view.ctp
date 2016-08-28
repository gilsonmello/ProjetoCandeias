<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Aula'), ['action' => 'edit', $aula->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Aula'), ['action' => 'delete', $aula->id], ['confirm' => __('Are you sure you want to delete # {0}?', $aula->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Aulas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Aula'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Disciplinas'), ['controller' => 'Disciplinas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Disciplina'), ['controller' => 'Disciplinas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Iteracoes'), ['controller' => 'Iteracoes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Iteraco'), ['controller' => 'Iteracoes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Visualizacoes'), ['controller' => 'Visualizacoes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Visualizaco'), ['controller' => 'Visualizacoes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Midias'), ['controller' => 'Midias', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Midia'), ['controller' => 'Midias', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Cursos'), ['controller' => 'Cursos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Curso'), ['controller' => 'Cursos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="aulas view large-9 medium-8 columns content">
    <h3><?= h($aula->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Titulo') ?></th>
            <td><?= h($aula->titulo) ?></td>
        </tr>
        <tr>
            <th><?= __('Disciplina') ?></th>
            <td><?= $aula->has('disciplina') ? $this->Html->link($aula->disciplina->id, ['controller' => 'Disciplinas', 'action' => 'view', $aula->disciplina->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($aula->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Ordem') ?></th>
            <td><?= $this->Number->format($aula->ordem) ?></td>
        </tr>
        <tr>
            <th><?= __('Data Cadastro') ?></th>
            <td><?= h($aula->data_cadastro) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($aula->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($aula->modified) ?></td>
        </tr>
        <tr>
            <th><?= __('Excluido') ?></th>
            <td><?= $aula->excluido ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Iteracoes') ?></h4>
        <?php if (!empty($aula->iteracoes)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Descricao') ?></th>
                <th><?= __('Data Cadastro') ?></th>
                <th><?= __('Tipo') ?></th>
                <th><?= __('Respondida') ?></th>
                <th><?= __('Aluno Id') ?></th>
                <th><?= __('Administrador Id') ?></th>
                <th><?= __('Pacote Id') ?></th>
                <th><?= __('Modpacote Id') ?></th>
                <th><?= __('Curso Id') ?></th>
                <th><?= __('Aula Id') ?></th>
                <th><?= __('Midia Id') ?></th>
                <th><?= __('Iteracao Id') ?></th>
                <th><?= __('Excluido') ?></th>
                <th><?= __('Privado') ?></th>
                <th><?= __('Status') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($aula->iteracoes as $iteracoes): ?>
            <tr>
                <td><?= h($iteracoes->id) ?></td>
                <td><?= h($iteracoes->descricao) ?></td>
                <td><?= h($iteracoes->data_cadastro) ?></td>
                <td><?= h($iteracoes->tipo) ?></td>
                <td><?= h($iteracoes->respondida) ?></td>
                <td><?= h($iteracoes->aluno_id) ?></td>
                <td><?= h($iteracoes->administrador_id) ?></td>
                <td><?= h($iteracoes->pacote_id) ?></td>
                <td><?= h($iteracoes->modpacote_id) ?></td>
                <td><?= h($iteracoes->curso_id) ?></td>
                <td><?= h($iteracoes->aula_id) ?></td>
                <td><?= h($iteracoes->midia_id) ?></td>
                <td><?= h($iteracoes->iteracao_id) ?></td>
                <td><?= h($iteracoes->excluido) ?></td>
                <td><?= h($iteracoes->privado) ?></td>
                <td><?= h($iteracoes->status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Iteracoes', 'action' => 'view', $iteracoes->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Iteracoes', 'action' => 'edit', $iteracoes->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Iteracoes', 'action' => 'delete', $iteracoes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $iteracoes->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Visualizacoes') ?></h4>
        <?php if (!empty($aula->visualizacoes)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Aluno Id') ?></th>
                <th><?= __('Matricula Id') ?></th>
                <th><?= __('Pacote Id') ?></th>
                <th><?= __('Modpacote Id') ?></th>
                <th><?= __('Curso Id') ?></th>
                <th><?= __('Aula Id') ?></th>
                <th><?= __('Midia Id') ?></th>
                <th><?= __('Data') ?></th>
                <th><?= __('Excluido') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($aula->visualizacoes as $visualizacoes): ?>
            <tr>
                <td><?= h($visualizacoes->id) ?></td>
                <td><?= h($visualizacoes->aluno_id) ?></td>
                <td><?= h($visualizacoes->matricula_id) ?></td>
                <td><?= h($visualizacoes->pacote_id) ?></td>
                <td><?= h($visualizacoes->modpacote_id) ?></td>
                <td><?= h($visualizacoes->curso_id) ?></td>
                <td><?= h($visualizacoes->aula_id) ?></td>
                <td><?= h($visualizacoes->midia_id) ?></td>
                <td><?= h($visualizacoes->data) ?></td>
                <td><?= h($visualizacoes->excluido) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Visualizacoes', 'action' => 'view', $visualizacoes->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Visualizacoes', 'action' => 'edit', $visualizacoes->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Visualizacoes', 'action' => 'delete', $visualizacoes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $visualizacoes->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Midias') ?></h4>
        <?php if (!empty($aula->midias)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Tipo') ?></th>
                <th><?= __('Titulo') ?></th>
                <th><?= __('Referencia') ?></th>
                <th><?= __('Status') ?></th>
                <th><?= __('Data Cadastro') ?></th>
                <th><?= __('Servidor Id') ?></th>
                <th><?= __('Excluido') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($aula->midias as $midias): ?>
            <tr>
                <td><?= h($midias->id) ?></td>
                <td><?= h($midias->tipo) ?></td>
                <td><?= h($midias->titulo) ?></td>
                <td><?= h($midias->referencia) ?></td>
                <td><?= h($midias->status) ?></td>
                <td><?= h($midias->data_cadastro) ?></td>
                <td><?= h($midias->servidor_id) ?></td>
                <td><?= h($midias->excluido) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Midias', 'action' => 'view', $midias->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Midias', 'action' => 'edit', $midias->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Midias', 'action' => 'delete', $midias->id], ['confirm' => __('Are you sure you want to delete # {0}?', $midias->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Cursos') ?></h4>
        <?php if (!empty($aula->cursos)): ?>
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
                <th><?= __('Data Cadastro') ?></th>
                <th><?= __('Excluido') ?></th>
                <th><?= __('Midia Id') ?></th>
                <th><?= __('Visualizacoes') ?></th>
                <th><?= __('Valor Liquido Professores') ?></th>
                <th><?= __('Tempo Blocos') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($aula->cursos as $cursos): ?>
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
                <td><?= h($cursos->data_cadastro) ?></td>
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
</div>
