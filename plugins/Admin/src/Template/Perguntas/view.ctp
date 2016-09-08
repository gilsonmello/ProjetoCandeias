<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Pergunta'), ['action' => 'edit', $pergunta->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Pergunta'), ['action' => 'delete', $pergunta->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pergunta->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Perguntas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pergunta'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Respostas'), ['controller' => 'Respostas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Resposta'), ['controller' => 'Respostas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="perguntas view large-9 medium-8 columns content">
    <h3><?= h($pergunta->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Resp1') ?></th>
            <td><?= h($pergunta->resp1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Resp2') ?></th>
            <td><?= h($pergunta->resp2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Resp3') ?></th>
            <td><?= h($pergunta->resp3) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Resp4') ?></th>
            <td><?= h($pergunta->resp4) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Resp5') ?></th>
            <td><?= h($pergunta->resp5) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($pergunta->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Excluido') ?></th>
            <td><?= $this->Number->format($pergunta->excluido) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $this->Number->format($pergunta->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Resposta Certa') ?></th>
            <td><?= $this->Number->format($pergunta->resposta_certa) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($pergunta->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($pergunta->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Deleted At') ?></th>
            <td><?= h($pergunta->deleted_at) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Enunciado') ?></h4>
        <?= $this->Text->autoParagraph(h($pergunta->enunciado)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Respostas') ?></h4>
        <?php if (!empty($pergunta->respostas)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Resposta Valor') ?></th>
                <th scope="col"><?= __('Pergunta Id') ?></th>
                <th scope="col"><?= __('Disciplina Id') ?></th>
                <th scope="col"><?= __('Concluido') ?></th>
                <th scope="col"><?= __('Exluido') ?></th>
                <th scope="col"><?= __('Data Cadastro') ?></th>
                <th scope="col"><?= __('Simulado Id') ?></th>
                <th scope="col"><?= __('Aluno Id') ?></th>
                <th scope="col"><?= __('Porcentagem Erro') ?></th>
                <th scope="col"><?= __('Porcentagem Acerto') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($pergunta->respostas as $respostas): ?>
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
</div>
