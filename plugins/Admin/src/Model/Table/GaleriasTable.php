<?php
namespace Admin\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Galerias Model
 *
 * @method \Admin\Model\Entity\Galeria get($primaryKey, $options = [])
 * @method \Admin\Model\Entity\Galeria newEntity($data = null, array $options = [])
 * @method \Admin\Model\Entity\Galeria[] newEntities(array $data, array $options = [])
 * @method \Admin\Model\Entity\Galeria|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Admin\Model\Entity\Galeria patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \Admin\Model\Entity\Galeria[] patchEntities($entities, array $data, array $options = [])
 * @method \Admin\Model\Entity\Galeria findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class GaleriasTable extends Table
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

        $this->table('galerias');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');
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
            ->allowEmpty('nome_arquivo');

        $validator
            ->dateTime('delete_at')
            ->allowEmpty('delete_at');

        return $validator;
    }
}
