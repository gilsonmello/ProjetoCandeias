<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Curso'), ['action' => 'edit', $curso->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Curso'), ['action' => 'delete', $curso->id], ['confirm' => __('Are you sure you want to delete # {0}?', $curso->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Cursos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Curso'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Aulas'), ['controller' => 'Aulas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Aula'), ['controller' => 'Aulas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Cupons Cursos Modulos Pacotes'), ['controller' => 'CuponsCursosModulosPacotes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cupons Cursos Modulos Pacote'), ['controller' => 'CuponsCursosModulosPacotes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Cursos Itens'), ['controller' => 'CursosItens', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cursos Iten'), ['controller' => 'CursosItens', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Iteracoes'), ['controller' => 'Iteracoes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Iteraco'), ['controller' => 'Iteracoes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Mensagens Curso Modulos Pacotes'), ['controller' => 'MensagensCursoModulosPacotes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Mensagens Curso Modulos Pacote'), ['controller' => 'MensagensCursoModulosPacotes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Pagamentos'), ['controller' => 'Pagamentos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pagamento'), ['controller' => 'Pagamentos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Pedidos Itens'), ['controller' => 'PedidosItens', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pedidos Iten'), ['controller' => 'PedidosItens', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Visualizacoes'), ['controller' => 'Visualizacoes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Visualizaco'), ['controller' => 'Visualizacoes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Matriculas'), ['controller' => 'Matriculas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Matricula'), ['controller' => 'Matriculas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Professores'), ['controller' => 'Professores', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Professore'), ['controller' => 'Professores', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="cursos view large-9 medium-8 columns content">
    <h3><?= h($curso->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Titulo') ?></th>
            <td><?= h($curso->titulo) ?></td>
        </tr>
        <tr>
            <th><?= __('Descricao') ?></th>
            <td><?= h($curso->descricao) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($curso->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Aula Id') ?></th>
            <td><?= $this->Number->format($curso->aula_id) ?></td>
        </tr>
        <tr>
            <th><?= __('Preco') ?></th>
            <td><?= $this->Number->format($curso->preco) ?></td>
        </tr>
        <tr>
            <th><?= __('Duracao') ?></th>
            <td><?= $this->Number->format($curso->duracao) ?></td>
        </tr>
        <tr>
            <th><?= __('Data Cadastro') ?></th>
            <td><?= h($curso->data_cadastro) ?></td>
        </tr>
        <tr>
            <th><?= __('Data Duracao') ?></th>
            <td><?= h($curso->data_duracao) ?></td>
        </tr>
        <tr>
            <th><?= __('Excluido') ?></th>
            <td><?= $curso->excluido ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th><?= __('Vendido Separadamente') ?></th>
            <td><?= $curso->vendido_separadamente ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Aulas') ?></h4>
        <?php if (!empty($curso->aulas)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Titulo') ?></th>
                <th><?= __('Ordem') ?></th>
                <th><?= __('Curso Id') ?></th>
                <th><?= __('Data Cadastro') ?></th>
                <th><?= __('Excluido') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($curso->aulas as $aulas): ?>
            <tr>
                <td><?= h($aulas->id) ?></td>
                <td><?= h($aulas->titulo) ?></td>
                <td><?= h($aulas->ordem) ?></td>
                <td><?= h($aulas->curso_id) ?></td>
                <td><?= h($aulas->data_cadastro) ?></td>
                <td><?= h($aulas->excluido) ?></td>
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
        <h4><?= __('Related Cupons Cursos Modulos Pacotes') ?></h4>
        <?php if (!empty($curso->cupons_cursos_modulos_pacotes)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Cupom Id') ?></th>
                <th><?= __('Pacote Id') ?></th>
                <th><?= __('Modpacote Id') ?></th>
                <th><?= __('Curso Id') ?></th>
                <th><?= __('Excluido') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($curso->cupons_cursos_modulos_pacotes as $cuponsCursosModulosPacotes): ?>
            <tr>
                <td><?= h($cuponsCursosModulosPacotes->id) ?></td>
                <td><?= h($cuponsCursosModulosPacotes->cupom_id) ?></td>
                <td><?= h($cuponsCursosModulosPacotes->pacote_id) ?></td>
                <td><?= h($cuponsCursosModulosPacotes->modpacote_id) ?></td>
                <td><?= h($cuponsCursosModulosPacotes->curso_id) ?></td>
                <td><?= h($cuponsCursosModulosPacotes->excluido) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'CuponsCursosModulosPacotes', 'action' => 'view', $cuponsCursosModulosPacotes->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'CuponsCursosModulosPacotes', 'action' => 'edit', $cuponsCursosModulosPacotes->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'CuponsCursosModulosPacotes', 'action' => 'delete', $cuponsCursosModulosPacotes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cuponsCursosModulosPacotes->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Cursos Itens') ?></h4>
        <?php if (!empty($curso->cursos_itens)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Curso Id') ?></th>
                <th><?= __('Item Id') ?></th>
                <th><?= __('Preco') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($curso->cursos_itens as $cursosItens): ?>
            <tr>
                <td><?= h($cursosItens->id) ?></td>
                <td><?= h($cursosItens->curso_id) ?></td>
                <td><?= h($cursosItens->item_id) ?></td>
                <td><?= h($cursosItens->preco) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'CursosItens', 'action' => 'view', $cursosItens->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'CursosItens', 'action' => 'edit', $cursosItens->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'CursosItens', 'action' => 'delete', $cursosItens->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cursosItens->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Iteracoes') ?></h4>
        <?php if (!empty($curso->iteracoes)): ?>
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
            <?php foreach ($curso->iteracoes as $iteracoes): ?>
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
        <h4><?= __('Related Mensagens Curso Modulos Pacotes') ?></h4>
        <?php if (!empty($curso->mensagens_curso_modulos_pacotes)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Curso Id') ?></th>
                <th><?= __('Mensagem Id') ?></th>
                <th><?= __('Modpacote Id') ?></th>
                <th><?= __('Pacote Id') ?></th>
                <th><?= __('Excluido') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($curso->mensagens_curso_modulos_pacotes as $mensagensCursoModulosPacotes): ?>
            <tr>
                <td><?= h($mensagensCursoModulosPacotes->id) ?></td>
                <td><?= h($mensagensCursoModulosPacotes->curso_id) ?></td>
                <td><?= h($mensagensCursoModulosPacotes->mensagem_id) ?></td>
                <td><?= h($mensagensCursoModulosPacotes->modpacote_id) ?></td>
                <td><?= h($mensagensCursoModulosPacotes->pacote_id) ?></td>
                <td><?= h($mensagensCursoModulosPacotes->excluido) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'MensagensCursoModulosPacotes', 'action' => 'view', $mensagensCursoModulosPacotes->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'MensagensCursoModulosPacotes', 'action' => 'edit', $mensagensCursoModulosPacotes->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'MensagensCursoModulosPacotes', 'action' => 'delete', $mensagensCursoModulosPacotes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mensagensCursoModulosPacotes->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Pagamentos') ?></h4>
        <?php if (!empty($curso->pagamentos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Curso Id') ?></th>
                <th><?= __('Pacote Id') ?></th>
                <th><?= __('Pedido Id') ?></th>
                <th><?= __('Professor Id') ?></th>
                <th><?= __('Custo Operacional') ?></th>
                <th><?= __('Valor Liquido Professores') ?></th>
                <th><?= __('Porcentagem') ?></th>
                <th><?= __('Data Cadastro') ?></th>
                <th><?= __('Excluido') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($curso->pagamentos as $pagamentos): ?>
            <tr>
                <td><?= h($pagamentos->id) ?></td>
                <td><?= h($pagamentos->curso_id) ?></td>
                <td><?= h($pagamentos->pacote_id) ?></td>
                <td><?= h($pagamentos->pedido_id) ?></td>
                <td><?= h($pagamentos->professor_id) ?></td>
                <td><?= h($pagamentos->custo_operacional) ?></td>
                <td><?= h($pagamentos->valor_liquido_professores) ?></td>
                <td><?= h($pagamentos->porcentagem) ?></td>
                <td><?= h($pagamentos->data_cadastro) ?></td>
                <td><?= h($pagamentos->excluido) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Pagamentos', 'action' => 'view', $pagamentos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Pagamentos', 'action' => 'edit', $pagamentos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Pagamentos', 'action' => 'delete', $pagamentos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pagamentos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Pedidos Itens') ?></h4>
        <?php if (!empty($curso->pedidos_itens)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Pedido Id') ?></th>
                <th><?= __('Curso Id') ?></th>
                <th><?= __('Preco') ?></th>
                <th><?= __('Usou Cupom') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($curso->pedidos_itens as $pedidosItens): ?>
            <tr>
                <td><?= h($pedidosItens->id) ?></td>
                <td><?= h($pedidosItens->pedido_id) ?></td>
                <td><?= h($pedidosItens->curso_id) ?></td>
                <td><?= h($pedidosItens->preco) ?></td>
                <td><?= h($pedidosItens->usou_cupom) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'PedidosItens', 'action' => 'view', $pedidosItens->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'PedidosItens', 'action' => 'edit', $pedidosItens->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'PedidosItens', 'action' => 'delete', $pedidosItens->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pedidosItens->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Visualizacoes') ?></h4>
        <?php if (!empty($curso->visualizacoes)): ?>
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
            <?php foreach ($curso->visualizacoes as $visualizacoes): ?>
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
        <h4><?= __('Related Matriculas') ?></h4>
        <?php if (!empty($curso->matriculas)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Aluno Id') ?></th>
                <th><?= __('Pedido Id') ?></th>
                <th><?= __('Curso Id') ?></th>
                <th><?= __('Data Cadastro') ?></th>
                <th><?= __('Data Liberacao') ?></th>
                <th><?= __('Data Expiracao') ?></th>
                <th><?= __('Data Cancelamento') ?></th>
                <th><?= __('Ativo') ?></th>
                <th><?= __('Excluido') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($curso->matriculas as $matriculas): ?>
            <tr>
                <td><?= h($matriculas->id) ?></td>
                <td><?= h($matriculas->aluno_id) ?></td>
                <td><?= h($matriculas->pedido_id) ?></td>
                <td><?= h($matriculas->curso_id) ?></td>
                <td><?= h($matriculas->data_cadastro) ?></td>
                <td><?= h($matriculas->data_liberacao) ?></td>
                <td><?= h($matriculas->data_expiracao) ?></td>
                <td><?= h($matriculas->data_cancelamento) ?></td>
                <td><?= h($matriculas->ativo) ?></td>
                <td><?= h($matriculas->excluido) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Matriculas', 'action' => 'view', $matriculas->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Matriculas', 'action' => 'edit', $matriculas->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Matriculas', 'action' => 'delete', $matriculas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $matriculas->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Professores') ?></h4>
        <?php if (!empty($curso->professores)): ?>
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
            <?php foreach ($curso->professores as $professores): ?>
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
