<?php
use Migrations\AbstractMigration;

class CreateSecoes extends AbstractMigration
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
        $table = $this->table('secoes');
        
        $table->addColumn('secao_id', 'integer', [
            'default' => null,
            'null' => false
        ]);
        
        $table->addColumn('titulo', 'string', [
            'default' => null,
            'limit' => 100,
            'null' => false
        ]);
        
        $table->addColumn('link', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => true
        ]);
        
        $table->addColumn('referencia', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false
        ]);
        
        $table->addColumn('icone', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => true
        ]);
        
        $table->addColumn('nivel', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false
        ]);
        
        $table->addColumn('status', 'integer', [
            'default' => 1,
            'null' => false
        ]);
        
        $table->addColumn('excluido', 'integer', [
            'default' => 0,
            'null' => false
        ]);
        
        $table->create();
    }
}
