<?php

namespace Admin\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\Event\Event;
use ArrayObject;

/**
 * Disciplinas Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Simulados
 * @property \Cake\ORM\Association\HasMany $Perguntas
 * @property \Cake\ORM\Association\HasMany $Respostas
 * @property \Cake\ORM\Association\BelongsToMany $Cursos
 * @property \Cake\ORM\Association\BelongsToMany $Professores
 *
 * @method \Admin\Model\Entity\Disciplina get($primaryKey, $options = [])
 * @method \Admin\Model\Entity\Disciplina newEntity($data = null, array $options = [])
 * @method \Admin\Model\Entity\Disciplina[] newEntities(array $data, array $options = [])
 * @method \Admin\Model\Entity\Disciplina|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Admin\Model\Entity\Disciplina patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \Admin\Model\Entity\Disciplina[] patchEntities($entities, array $data, array $options = [])
 * @method \Admin\Model\Entity\Disciplina findOrCreate($search, callable $callback = null)
 */
class DisciplinasTable extends Table {

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config) {
        parent::initialize($config);
        $this->addBehavior('Timestamp');
        $this->table('disciplinas');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Cursos', [
        ]);

        $this->hasMany('Aulas', [
            'dependent' => true,
            'cascadeCallbacks' => true,
        ]);
    }

    public function beforeFind(Event $event, Query $data, ArrayObject $options, $primary) {
        $data->where(['Disciplinas.status' => 1, 'Disciplinas.excluido' => 0]);
    }

    public function beforeDelete() {

    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator) {
        $validator
                ->integer('id')
                ->allowEmpty('id', 'create');

        $validator
                ->requirePresence('titulo', 'create')
                ->notEmpty('titulo');

        $validator
                ->requirePresence('slug', 'create')
                ->notEmpty('slug');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
//    public function buildRules(RulesChecker $rules) {
//        $rules->add($rules->existsIn([''], ''));
//
//        return $rules;
//    }
}
