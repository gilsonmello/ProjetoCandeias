<?php

namespace Admin\Controller;

use Admin\Controller\AppController;
use Cake\ORM\Query;

/**
 * Disciplinas Controller
 *
 * @property \Admin\Model\Table\DisciplinasTable $Disciplinas
 */
class DisciplinasController extends AppController {

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index() {
        $this->paginate = [
            'contain' => []
        ];
        $disciplinas = $this->paginate($this->Disciplinas);

        $this->set(compact('disciplinas'));
        $this->set('_serialize', ['disciplinas']);
    }

    /**
     * View method
     *
     * @param string|null $id Disciplina id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null) {
        $retorno = [];

        $disciplina = $this->Disciplinas->get($id, [
            'contain' => [
                'Aulas' => [
                    'queryBuilder' => function (Query $q) {
                        return $q->order(['Aulas.ordem' => 'ASC']);
                    }
                        ]
                    ]
                ]);
                if (!empty($disciplina) && isset($disciplina)) {
                    $retorno['disciplina'] = $disciplina;
                    $retorno['sucesso'] = 'ok';
                } else {
                    $retorno['sucesso'] = 'no';
                }
                die(json_encode($retorno));
                $this->set('disciplina', $disciplina);
                $this->set('_serialize', ['disciplina']);
            }

            /**
             * Add method
             *
             * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
             */
            public function add() {
                $retorno = [];
                $disciplina = $this->Disciplinas->newEntity();
                if ($this->request->is('ajax')) {
                    $disciplina = $this->Disciplinas->patchEntity($disciplina, $this->request->data);
//            die(var_dump($disciplina));

                    if ($this->Disciplinas->save($disciplina)) {
                        $retorno['sucesso'] = 'ok';
                        $retorno['id'] = $disciplina->id;
                        $retorno['titulo'] = $this->request->data['titulo'];
                        $retorno['curso_id'] = $this->request->data['curso_id'];
                        $retorno['slug'] = $this->request->data['slug'];
                    } else {
                        $retorno['sucesso'] = 'no';
                    }
                    die(json_encode($retorno));
                }
            }

            /**
             * Edit method
             *
             * @param string|null $id Disciplina id.
             * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
             * @throws \Cake\Network\Exception\NotFoundException When record not found.
             */
            public function edit($id = null) {
                $retorno = [];
                $disciplina = $this->Disciplinas->get($id, [
                    'contain' => ['Aulas']
                ]);

                if ($this->request->is(['patch', 'post', 'put', 'ajax'])) {
                    $disciplina = $this->Disciplinas->patchEntity($disciplina, $this->request->data);
                    if ($this->Disciplinas->save($disciplina)) {
                        $this->Flash->success(__('The disciplina has been saved.'));

                        return $this->redirect(['action' => 'index']);
                    } else {
                        $this->Flash->error(__('The disciplina could not be saved. Please, try again.'));
                    }
                }
            }

            /**
             * Delete method
             *
             * @param string|null $id Disciplina id.
             * @return \Cake\Network\Response|null Redirects to index.
             * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
             */
            public function delete($id = null) {
                $retorno = [];
                $disciplina = $this->Disciplinas->get($id, [
                    'contain' => ['Aulas']
                ]);
                $this->request->data['status'] = 0;
                $this->request->data['excluido'] = 1;
                $this->request->data['deleted_at'] = date('Y-m-d H:i:s');
                foreach ($disciplina->aulas as $aula) {
                    $this->request->data['aulas'][] = [
                        'id' => $aula->id,
                        'status' => 0,
                        'excluido' => 1,
                        'deleted_at' => date('Y-m-d H:i:s')
                    ];
                }
                $disciplina = $this->Disciplinas->patchEntity($disciplina, $this->request->data, ['associated' => ['Aulas' => ['accessibleFields' => ['id' => true]]]]);
                $this->request->allowMethod(['post', 'delete', 'ajax']);
                if ($this->Disciplinas->save($disciplina, ['associated' => ['Aulas']])) {
                    $retorno['sucesso'] = 'ok';
                } else {
                    $retorno['sucesso'] = 'no';
                }
                die(json_encode($retorno));
            }

        }
