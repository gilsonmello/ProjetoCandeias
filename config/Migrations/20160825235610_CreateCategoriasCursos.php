<?php

use Migrations\AbstractMigration;

class CreateCategoriasCursos extends AbstractMigration {

    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change() {

        $table = $this->table('categorias_cursos');

        $table->addColumn('curso_id', 'integer', [
            'null' => false
        ]);
        $table->addColumn('categoria_id', 'integer', [
            'null' => false
        ]);

        $table->create();
    }

}
