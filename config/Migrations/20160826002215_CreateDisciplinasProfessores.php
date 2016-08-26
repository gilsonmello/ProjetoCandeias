<?php

use Migrations\AbstractMigration;

class CreateDisciplinasProfessores extends AbstractMigration {

    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change() {
        $table = $this->table('disciplinas_professores');
        $table->addColumn('disciplina_id', 'integer', [
            'null' => false
        ]);
        $table->addColumn('professor_id', 'integer', [
            'null' => false
        ]);
        $table->create();
    }

}
