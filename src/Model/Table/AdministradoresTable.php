<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Administradores Model
 *
 * @method \App\Model\Entity\Administradore get($primaryKey, $options = [])
 * @method \App\Model\Entity\Administradore newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Administradore[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Administradore|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Administradore patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Administradore[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Administradore findOrCreate($search, callable $callback = null)
 */
class AdministradoresTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('administradores');
        $this->displayField('id');
        $this->primaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('nome', 'create')
            ->notEmpty('nome');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmpty('email');

        $validator
            ->requirePresence('senha', 'create')
            ->notEmpty('senha');

        $validator
            ->boolean('status')
            ->requirePresence('status', 'create')
            ->notEmpty('status');

        $validator
            ->dateTime('data_cadastro')
            ->requirePresence('data_cadastro', 'create')
            ->notEmpty('data_cadastro');

        $validator
            ->dateTime('data_ultimo_acesso')
            ->requirePresence('data_ultimo_acesso', 'create')
            ->notEmpty('data_ultimo_acesso');

        $validator
            ->boolean('excluido')
            ->requirePresence('excluido', 'create')
            ->notEmpty('excluido');

        $validator
            ->boolean('invisivel')
            ->requirePresence('invisivel', 'create')
            ->notEmpty('invisivel');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['email']));

        return $rules;
    }
}
