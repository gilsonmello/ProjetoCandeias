<?php

namespace Admin\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Usuarios Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Sessions
 * @property \Cake\ORM\Association\BelongsToMany $Secoes
 *
 * @method \Admin\Model\Entity\Usuario get($primaryKey, $options = [])
 * @method \Admin\Model\Entity\Usuario newEntity($data = null, array $options = [])
 * @method \Admin\Model\Entity\Usuario[] newEntities(array $data, array $options = [])
 * @method \Admin\Model\Entity\Usuario|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Admin\Model\Entity\Usuario patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \Admin\Model\Entity\Usuario[] patchEntities($entities, array $data, array $options = [])
 * @method \Admin\Model\Entity\Usuario findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class UsuariosTable extends Table {

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config) {
        parent::initialize($config);

        $this->table('usuarios');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
        $this->belongsToMany('Secoes', [
            'foreignKey' => 'usuario_id',
            'targetForeignKey' => 'secao_id',
            'joinTable' => 'usuarios_secoes',
            'className' => 'Admin.Secoes',
        ]);
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
                ->allowEmpty('nome');

        $validator
                ->email('email')
                ->allowEmpty('email');

        $validator
                ->allowEmpty('regra');

        $validator
                ->allowEmpty('senha');

        $validator
                ->allowEmpty('arquivo_foto');

        $validator
                ->integer('sexo')
                ->allowEmpty('sexo');

        $validator
                ->allowEmpty('rg');

        $validator
                ->allowEmpty('cpf');

        $validator
                ->allowEmpty('cnpj');

        $validator
                ->date('data_nascimento')
                ->allowEmpty('data_nascimento');

        $validator
                ->allowEmpty('logradouro');

        $validator
                ->allowEmpty('numero');

        $validator
                ->allowEmpty('complemento');

        $validator
                ->allowEmpty('bairro');

        $validator
                ->allowEmpty('cidade');

        $validator
                ->allowEmpty('estado');

        $validator
                ->allowEmpty('cep');

        $validator
                ->allowEmpty('telefone');

        $validator
                ->allowEmpty('celular');

        $validator
                ->dateTime('data_ultimo_acesso')
                ->allowEmpty('data_ultimo_acesso');

        $validator
                ->boolean('status')
                ->requirePresence('status', 'create')
                ->notEmpty('status');

        $validator
                ->boolean('excluido')
                ->requirePresence('excluido', 'create')
                ->notEmpty('excluido');

        $validator
                ->allowEmpty('endereco');

        $validator
                ->allowEmpty('ip');

        $validator
                ->dateTime('deletado')
                ->allowEmpty('deletado');

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
        $rules->add($rules->existsIn(['session_id'], 'Sessions'));

        return $rules;
    }

}
