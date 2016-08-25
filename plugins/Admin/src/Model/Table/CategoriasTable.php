<?php
namespace Admin\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Categorias Model
 *
 * @property \Cake\ORM\Association\BelongsToMany $Cursos
 *
 * @method \Admin\Model\Entity\Categoria get($primaryKey, $options = [])
 * @method \Admin\Model\Entity\Categoria newEntity($data = null, array $options = [])
 * @method \Admin\Model\Entity\Categoria[] newEntities(array $data, array $options = [])
 * @method \Admin\Model\Entity\Categoria|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Admin\Model\Entity\Categoria patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \Admin\Model\Entity\Categoria[] patchEntities($entities, array $data, array $options = [])
 * @method \Admin\Model\Entity\Categoria findOrCreate($search, callable $callback = null)
 */
class CategoriasTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {   
        $this->addBehavior('Timestamp');
        parent::initialize($config);

        $this->table('categorias');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsToMany('Cursos', [
            'foreignKey' => 'categoria_id',
            'targetForeignKey' => 'curso_id',
            'joinTable' => 'categorias_cursos',
            'className' => 'Admin.Cursos'
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
            ->requirePresence('nome', 'create')
            ->notEmpty('nome');

        $validator
            ->requirePresence('slug', 'create')
            ->notEmpty('slug');


        return $validator;
    }
}
