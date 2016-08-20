<?php
namespace Admin\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Secoes Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Secaos
 * @property \Cake\ORM\Association\BelongsToMany $Usuarios
 *
 * @method \Admin\Model\Entity\Seco get($primaryKey, $options = [])
 * @method \Admin\Model\Entity\Seco newEntity($data = null, array $options = [])
 * @method \Admin\Model\Entity\Seco[] newEntities(array $data, array $options = [])
 * @method \Admin\Model\Entity\Seco|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Admin\Model\Entity\Seco patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \Admin\Model\Entity\Seco[] patchEntities($entities, array $data, array $options = [])
 * @method \Admin\Model\Entity\Seco findOrCreate($search, callable $callback = null)
 */
class SecoesTable extends Table
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

        $this->table('secoes');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->hasMany('SubSecao', [
                'foreignKey' => 'secao_id',
                'joinType' => 'INNER',
                'className' => 'Admin.Secoes',
                'conditions' => [
                    'nivel <' => 3, 
                    'excluido' => 0,
                ],
                'order'      => ['SubSecao.titulo DESC']
        ]);

        /*$this->hasMany("SubSecaoNivel3" , [
                                    'foreignKey' => 'secao_id',
                                    'className'  => 'Admin.Secoes', 
                                    'conditions' => array('nivel' => 3, 'excluido' => 0),
                                    'order'      => array('SubSecaoNivel3.titulo')
        ]);*/

        $this->belongsToMany('Usuarios', [
            'foreignKey' => 'secao_id',
            'targetForeignKey' => 'usuario_id',
            'joinTable' => 'usuarios_secoes',
            'className' => 'Admin.Usuarios'
        ]);
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
            ->requirePresence('titulo', 'create')
            ->notEmpty('titulo');

        $validator
            ->requirePresence('link', 'create')
            ->notEmpty('link');

        $validator
            ->allowEmpty('referencia');

        $validator
            ->requirePresence('classe_icone', 'create')
            ->notEmpty('classe_icone');

        $validator
            ->integer('nivel')
            ->allowEmpty('nivel');

        $validator
            ->integer('excluido')
            ->requirePresence('excluido', 'create')
            ->notEmpty('excluido');

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
        $rules->add($rules->existsIn(['secao_id'], 'Secoes'));

        return $rules;
    }
}
