<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Disciplina'), ['action' => 'edit', $disciplina->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Disciplina'), ['action' => 'delete', $disciplina->id], ['confirm' => __('Are you sure you want to delete # {0}?', $disciplina->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Disciplinas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Disciplina'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Simulados'), ['controller' => 'Simulados', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Simulado'), ['controller' => 'Simulados', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Perguntas'), ['controller' => 'Perguntas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pergunta'), ['controller' => 'Perguntas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Respostas'), ['controller' => 'Respostas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Resposta'), ['controller' => 'Respostas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Cursos'), ['controller' => 'Cursos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Curso'), ['controller' => 'Cursos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Professores'), ['controller' => 'Professores', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Professore'), ['controller' => 'Professores', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="disciplinas view large-9 medium-8 columns content">
    <h3><?= h($disciplina->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Titulo') ?></th>
            <td><?= h($disciplina->titulo) ?></td>
        </tr>
        <tr>
            <th><?= __('Simulado') ?></th>
            <td><?= $disciplina->has('simulado') ? $this->Html->link($disciplina->simulado->id, ['controller' => 'Simulados', 'action' => 'view', $disciplina->simulado->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Slug') ?></th>
            <td><?= h($disciplina->slug) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($disciplina->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Excluido') ?></th>
            <td><?= $this->Number->format($disciplina->excluido) ?></td>
        </tr>
        <tr>
            <th><?= __('Status') ?></th>
            <td><?= $this->Number->format($disciplina->status) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Perguntas') ?></h4>
        <?php if (!empty($disciplina->perguntas)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Titulo') ?></th>
                <th><?= __('Excluido') ?></th>
                <th><?= __('Status') ?></th>
                <th><?= __('Resposta Certa') ?></th>
                <th><?= __('Simulado Id') ?></th>
                <th><?= __('Disciplina Id') ?></th>
                <th><?= __('Resp1') ?></th>
                <th><?= __('Resp2') ?></th>
                <th><?= __('Resp3') ?></th>
                <th><?= __('Resp4') ?></th>
                <th><?= __('Resp5') ?></th>
                <th><?= __('Tipo Simulado') ?></th>
                <th><?= __('Resp Certa Errada') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($disciplina->perguntas as $perguntas): ?>
            <tr>
                <td><?= h($perguntas->id) ?></td>
                <td><?= h($perguntas->titulo) ?></td>
                <td><?= h($perguntas->excluido) ?></td>
                <td><?= h($perguntas->status) ?></td>
                <td><?= h($perguntas->resposta_certa) ?></td>
                <td><?= h($perguntas->simulado_id) ?></td>
                <td><?= h($perguntas->disciplina_id) ?></td>
                <td><?= h($perguntas->resp1) ?></td>
                <td><?= h($perguntas->resp2) ?></td>
                <td><?= h($perguntas->resp3) ?></td>
                <td><?= h($perguntas->resp4) ?></td>
                <td><?= h($perguntas->resp5) ?></td>
                <td><?= h($perguntas->tipo_simulado) ?></td>
                <td><?= h($perguntas->resp_certa_errada) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Perguntas', 'action' => 'view', $perguntas->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Perguntas', 'action' => 'edit', $perguntas->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Perguntas', 'action' => 'delete', $perguntas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $perguntas->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Respostas') ?></h4>
        <?php if (!empty($disciplina->respostas)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Resposta Valor') ?></th>
                <th><?= __('Pergunta Id') ?></th>
                <th><?= __('Disciplina Id') ?></th>
                <th><?= __('Concluido') ?></th>
                <th><?= __('Exluido') ?></th>
                <th><?= __('Data Cadastro') ?></th>
                <th><?= __('Simulado Id') ?></th>
                <th><?= __('Aluno Id') ?></th>
                <th><?= __('Porcentagem Erro') ?></th>
                <th><?= __('Porcentagem Acerto') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($disciplina->respostas as $respostas): ?>
            <tr>
                <td><?= h($respostas->id) ?></td>
                <td><?= h($respostas->resposta_valor) ?></td>
                <td><?= h($respostas->pergunta_id) ?></td>
                <td><?= h($respostas->disciplina_id) ?></td>
                <td><?= h($respostas->concluido) ?></td>
                <td><?= h($respostas->exluido) ?></td>
                <td><?= h($respostas->data_cadastro) ?></td>
                <td><?= h($respostas->simulado_id) ?></td>
                <td><?= h($respostas->aluno_id) ?></td>
                <td><?= h($respostas->porcentagem_erro) ?></td>
                <td><?= h($respostas->porcentagem_acerto) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Respostas', 'action' => 'view', $respostas->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Respostas', 'action' => 'edit', $respostas->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Respostas', 'action' => 'delete', $respostas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $respostas->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Cursos') ?></h4>
        <?php if (!empty($disciplina->cursos)): ?>
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
            <?php foreach ($disciplina->cursos as $cursos): ?>
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
    <div class="related">
        <h4><?= __('Related Professores') ?></h4>
        <?php if (!empty($disciplina->professores)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Nome') ?></th>
                <th><?= __('Email') ?></th>
                <th><?= __('Senha') ?></th>
                <th><?= __('Descricao') ?></th>
                <th><?= __('Nome Foto') ?></th>
                <th><?= __('Status') ?></th>
                <th><?= __('Data Cadastro') ?></th>
                <th><?= __('Data Ultimo Acesso') ?></th>
                <th><?= __('Excluido') ?></th>
                <th><?= __('Slug') ?></th>
                <th><?= __('Facebook') ?></th>
                <th><?= __('Youtube') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($disciplina->professores as $professores): ?>
            <tr>
                <td><?= h($professores->id) ?></td>
                <td><?= h($professores->nome) ?></td>
                <td><?= h($professores->email) ?></td>
                <td><?= h($professores->senha) ?></td>
                <td><?= h($professores->descricao) ?></td>
                <td><?= h($professores->nome_foto) ?></td>
                <td><?= h($professores->status) ?></td>
                <td><?= h($professores->data_cadastro) ?></td>
                <td><?= h($professores->data_ultimo_acesso) ?></td>
                <td><?= h($professores->excluido) ?></td>
                <td><?= h($professores->slug) ?></td>
                <td><?= h($professores->facebook) ?></td>
                <td><?= h($professores->youtube) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Professores', 'action' => 'view', $professores->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Professores', 'action' => 'edit', $professores->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Professores', 'action' => 'delete', $professores->id], ['confirm' => __('Are you sure you want to delete # {0}?', $professores->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
