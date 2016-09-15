<?php
use Migrations\AbstractMigration;

class CreateUsuarios extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change() {
        
        $table = $this->table('usuarios');

        $table->addColumn('nome', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false
        ]);

        $table->addColumn('regra', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false
        ]);

        $table->addColumn('senha', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false
        ]);

        $table->addColumn('foto', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false
        ]);
        $table->create();
    }
}
