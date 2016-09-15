<?php
use Migrations\AbstractMigration;

class CreateUsuariosSecoes extends AbstractMigration
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
        
        $table->addColumn('usuario_id', 'integer', [
            'default' => null,
            'null' => false
        ]);
        
        $table->addColumn('secao_id', 'integer', [
            'default' => null,
            'null' => false
        ]);
        
        $table->create();
    }
}
