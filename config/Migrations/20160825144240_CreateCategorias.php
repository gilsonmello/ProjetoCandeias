<?php
use Migrations\AbstractMigration;

class CreateCategorias extends AbstractMigration
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
        $table = $this->table('categorias');
        
        $table->addColumn('nome', 'string', [
            'default' => null,
            'limit' => 40,
            'null' => true
        ]);
        
        $table->addColumn('slug', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => true
        ]);
        
        $table->addColumn('status', 'integer', [
            'default' => 1,
            'null' => false
        ]);
        
        $table->addColumn('excluido', 'integer', [
            'default' => 0,
            'null' => false
        ]);
        
        $table->addColumn('created', 'datetime', [
            'default' => null,
            'null' => true
        ]);
        $table->addColumn('modified', 'datetime', [
            'default' => null,
            'null' => true
        ]);
        $table->create();
    }
}
