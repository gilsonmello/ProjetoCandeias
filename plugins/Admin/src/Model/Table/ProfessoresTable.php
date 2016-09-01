<?php

namespace Admin\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Professores Model
 *
 * @property \Cake\ORM\Association\BelongsToMany $Aulas
 * @property \Cake\ORM\Association\BelongsToMany $Cursos
 * @property \Cake\ORM\Association\BelongsToMany $Disciplinas
 *
 * @method \Admin\Model\Entity\Professore get($primaryKey, $options = [])
 * @method \Admin\Model\Entity\Professore newEntity($data = null, array $options = [])
 * @method \Admin\Model\Entity\Professore[] newEntities(array $data, array $options = [])
 * @method \Admin\Model\Entity\Professore|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Admin\Model\Entity\Professore patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \Admin\Model\Entity\Professore[] patchEntities($entities, array $data, array $options = [])
 * @method \Admin\Model\Entity\Professore findOrCreate($search, callable $callback = null)
 */
class ProfessoresTable extends Table {

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config) {
        parent::initialize($config);

        $this->table('professores');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsToMany('Cursos', [
            'foreignKey' => 'professor_id',
            'targetForeignKey' => 'curso_id',
            'joinTable' => 'cursos_professores',
            'className' => 'Admin.Cursos'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator) {
//        $validator
//                ->integer('id')
//                ->allowEmpty('id', 'create');
//
//        $validator
//                ->requirePresence('nome', 'create')
//                ->notEmpty('nome');
//
//        $validator
//                ->email('email')
//                ->requirePresence('email', 'create')
//                ->notEmpty('email');
//
//        $validator
//                ->requirePresence('senha', 'create')
//                ->notEmpty('senha');
//
//        $validator
//                ->requirePresence('descricao', 'create')
//                ->notEmpty('descricao');
//
//        $validator
//                ->requirePresence('nome_foto', 'create')
//                ->notEmpty('nome_foto');
//
//        $validator
//                ->boolean('status')
//                ->requirePresence('status', 'create')
//                ->notEmpty('status');
//
//        $validator
//                ->dateTime('data_cadastro')
//                ->requirePresence('data_cadastro', 'create')
//                ->notEmpty('data_cadastro');
//
//        $validator
//                ->dateTime('data_ultimo_acesso')
//                ->requirePresence('data_ultimo_acesso', 'create')
//                ->notEmpty('data_ultimo_acesso');
//
//        $validator
//                ->boolean('excluido')
//                ->requirePresence('excluido', 'create')
//                ->notEmpty('excluido');
//
//        $validator
//                ->requirePresence('slug', 'create')
//                ->notEmpty('slug');
//
//        $validator
//                ->requirePresence('facebook', 'create')
//                ->notEmpty('facebook');
//
//        $validator
//                ->requirePresence('youtube', 'create')
//                ->notEmpty('youtube');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules) {
        $rules->add($rules->isUnique(['email']));

        return $rules;
    }

}
