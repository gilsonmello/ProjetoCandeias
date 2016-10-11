<?php
use Migrations\AbstractMigration;

class AddExcluidoCreatedModifiedToUsuariosSecoes extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('usuarios_secoes');
        
        $table->addColumn('excluido', 'integer', [
            'default' => 0
        ]);
        
        $table->addColumn('created', 'datetime', [
            'default' => null,
            'null' => true
        ]);
        $table->addColumn('modified', 'datetime', [
            'default' => null,
            'null' => true
        ]);
        $table->update();
    }
}
