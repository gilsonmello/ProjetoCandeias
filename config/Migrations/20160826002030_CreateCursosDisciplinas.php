<?php

use Migrations\AbstractMigration;

class CreateCursosDisciplinas extends AbstractMigration {

    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change() {
        $table = $this->table('cursos_disciplinas');
        $table->addColumn('curso_id', 'integer', [
            'null' => false
        ]);
        $table->addColumn('disciplina_id', 'integer', [
            'null' => false
        ]);
        $table->create();
    }

}
