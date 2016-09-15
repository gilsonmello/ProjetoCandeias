<?php

use Migrations\AbstractMigration;

class CreateCursos extends AbstractMigration {
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function up() {
        $table = $this->table('cursos');

        $table->addColumn('titulo', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false
        ]);

        $table->addColumn('slug', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false
        ]);

        $table->addColumn('descricao', 'text', [
            'default' => null,
            'null' => false
        ]);

        $table->addColumn('conteudo', 'text', [
            'default' => null,
            'null' => false
        ]);

        $table->addColumn('preco_sem_desconto', 'decimal', [
            'default' => null,
            'null' => false
        ]);

        $table->create();
    }
}
