<?php

namespace Admin\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Cursos Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Aulas
 * @property \Cake\ORM\Association\HasMany $Aulas
 * @property \Cake\ORM\Association\HasMany $CuponsCursosModulosPacotes
 * @property \Cake\ORM\Association\HasMany $CursosItens
 * @property \Cake\ORM\Association\HasMany $Iteracoes
 * @property \Cake\ORM\Association\HasMany $Matriculas
 * @property \Cake\ORM\Association\HasMany $MensagensCursoModulosPacotes
 * @property \Cake\ORM\Association\HasMany $Pagamentos
 * @property \Cake\ORM\Association\HasMany $PedidosItens
 * @property \Cake\ORM\Association\HasMany $Visualizacoes
 * @property \Cake\ORM\Association\BelongsToMany $Matriculas
 * @property \Cake\ORM\Association\BelongsToMany $Professores
 *
 * @method \Admin\Model\Entity\Curso get($primaryKey, $options = [])
 * @method \Admin\Model\Entity\Curso newEntity($data = null, array $options = [])
 * @method \Admin\Model\Entity\Curso[] newEntities(array $data, array $options = [])
 * @method \Admin\Model\Entity\Curso|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Admin\Model\Entity\Curso patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \Admin\Model\Entity\Curso[] patchEntities($entities, array $data, array $options = [])
 * @method \Admin\Model\Entity\Curso findOrCreate($search, callable $callback = null)
 */
class CursosTable extends Table {

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config) {
        parent::initialize($config);

        $this->table('cursos');
        $this->displayField('id');
        $this->primaryKey('id');
        
        $this->belongsToMany('Categorias', [
            'foreignKey' => 'curso_id',
            'targetForeignKey' => 'categoria_id',
            'joinTable' => 'categorias_cursos',
            'className' => 'Admin.Categorias'
        ]);

//        $this->belongsTo('Aulas', [
//            'foreignKey' => 'aula_id',
//            'className' => 'Admin.Aulas'
//        ]);
//        $this->hasMany('Aulas', [
//            'foreignKey' => 'curso_id',
//            'className' => 'Admin.Aulas'
//        ]);
//        $this->hasMany('CuponsCursosModulosPacotes', [
//            'foreignKey' => 'curso_id',
//            'className' => 'Admin.CuponsCursosModulosPacotes'
//        ]);
//        $this->hasMany('CursosItens', [
//            'foreignKey' => 'curso_id',
//            'className' => 'Admin.CursosItens'
//        ]);
//        $this->hasMany('Iteracoes', [
//            'foreignKey' => 'curso_id',
//            'className' => 'Admin.Iteracoes'
//        ]);
//        $this->hasMany('Matriculas', [
//            'foreignKey' => 'curso_id',
//            'className' => 'Admin.Matriculas'
//        ]);
//        $this->hasMany('MensagensCursoModulosPacotes', [
//            'foreignKey' => 'curso_id',
//            'className' => 'Admin.MensagensCursoModulosPacotes'
//        ]);
//        $this->hasMany('Pagamentos', [
//            'foreignKey' => 'curso_id',
//            'className' => 'Admin.Pagamentos'
//        ]);
//        $this->hasMany('PedidosItens', [
//            'foreignKey' => 'curso_id',
//            'className' => 'Admin.PedidosItens'
//        ]);
//        $this->hasMany('Visualizacoes', [
//            'foreignKey' => 'curso_id',
//            'className' => 'Admin.Visualizacoes'
//        ]);
//        $this->belongsToMany('Matriculas', [
//            'foreignKey' => 'curso_id',
//            'targetForeignKey' => 'matricula_id',
//            'joinTable' => 'cursos_matriculas',
//            'className' => 'Admin.Matriculas'
//        ]);
//        $this->belongsToMany('Professores', [
//            'foreignKey' => 'curso_id',
//            'targetForeignKey' => 'professore_id',
//            'joinTable' => 'cursos_professores',
//            'className' => 'Admin.Professores'
//        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
//    public function validationDefault(Validator $validator) {
//        $validator
//                ->integer('id')
//                ->allowEmpty('id', 'create');
//
//        $validator
//                ->allowEmpty('titulo');
//
//        $validator
//                ->allowEmpty('descricao');
//
//        $validator
//                ->numeric('preco')
//                ->requirePresence('preco', 'create')
//                ->notEmpty('preco');
//
//        $validator
//                ->integer('duracao')
//                ->requirePresence('duracao', 'create')
//                ->notEmpty('duracao');
//
//        $validator
//                ->dateTime('data_cadastro')
//                ->requirePresence('data_cadastro', 'create')
//                ->notEmpty('data_cadastro');
//
//        $validator
//                ->date('data_duracao')
//                ->requirePresence('data_duracao', 'create')
//                ->notEmpty('data_duracao');
//
//        $validator
//                ->boolean('excluido')
//                ->requirePresence('excluido', 'create')
//                ->notEmpty('excluido');
//
//        $validator
//                ->boolean('vendido_separadamente')
//                ->requirePresence('vendido_separadamente', 'create')
//                ->notEmpty('vendido_separadamente');
//
//        return $validator;
//    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
//    public function buildRules(RulesChecker $rules) {
//        $rules->add($rules->existsIn(['aula_id'], 'Aulas'));
//
//        return $rules;
//    }
}
