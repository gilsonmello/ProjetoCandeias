<?php

namespace Admin\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Aulas Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Disciplinas
 * @property \Cake\ORM\Association\HasMany $Iteracoes
 * @property \Cake\ORM\Association\HasMany $Visualizacoes
 * @property \Cake\ORM\Association\BelongsToMany $Midias
 * @property \Cake\ORM\Association\BelongsToMany $Cursos
 *
 * @method \Admin\Model\Entity\Aula get($primaryKey, $options = [])
 * @method \Admin\Model\Entity\Aula newEntity($data = null, array $options = [])
 * @method \Admin\Model\Entity\Aula[] newEntities(array $data, array $options = [])
 * @method \Admin\Model\Entity\Aula|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Admin\Model\Entity\Aula patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \Admin\Model\Entity\Aula[] patchEntities($entities, array $data, array $options = [])
 * @method \Admin\Model\Entity\Aula findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class AulasTable extends Table {

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config) {
        parent::initialize($config);

        $this->table('aulas');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Disciplinas', [
            'foreignKey' => 'disciplina_id',
            'joinType' => 'INNER',
            'className' => 'Admin.Disciplinas'
        ]);

//        $this->hasMany('Iteracoes', [
//            'foreignKey' => 'aula_id',
//            'className' => 'Admin.Iteracoes'
//        ]);
//        $this->hasMany('Visualizacoes', [
//            'foreignKey' => 'aula_id',
//            'className' => 'Admin.Visualizacoes'
//        ]);
//        $this->belongsToMany('Midias', [
//            'foreignKey' => 'aula_id',
//            'targetForeignKey' => 'midia_id',
//            'joinTable' => 'aulas_midias',
//            'className' => 'Admin.Midias'
//        ]);
//        $this->belongsToMany('Cursos', [
//            'foreignKey' => 'aula_id',
//            'targetForeignKey' => 'curso_id',
//            'joinTable' => 'cursos_aulas',
//            'className' => 'Admin.Cursos'
//        ]);
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
                ->integer('ordem')
                ->requirePresence('ordem', 'create')
                ->notEmpty('ordem');
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
        $rules->add($rules->existsIn(['disciplina_id'], 'Disciplinas'));

        return $rules;
    }

}
