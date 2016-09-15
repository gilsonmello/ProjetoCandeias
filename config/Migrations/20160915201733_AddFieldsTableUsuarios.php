<?php
use Migrations\AbstractMigration;

class AddFieldsTableUsuarios extends AbstractMigration
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
        $table = $this->table('usuarios');
        
        $table->addColumn('cpf', 'string', [
            'default' => null,
            'limit' => 15,
            'null' => false
        ]);
        
        $table->addColumn('rg', 'string', [
            'default' => null,
            'limit' => 15,
            'null' => false
        ]);
        
        $table->addColumn('cnpj', 'string', [
            'default' => null,
            'limit' => 20,
            'null' => true
        ]);
        
        $table->addColumn('data_nascimento', 'date', [
            'default' => null,
            'null' => false
        ]);
        
        $table->addColumn('endereco', 'text', [
            'default' => null,
            'null' => false
        ]);
        
        $table->addColumn('numero', 'integer', [
            'default' => null,
            'null' => true
        ]);
        
        $table->addColumn('complemento', 'string', [
            'default' => null,
            'limit' => 140,
            'null' => true
        ]);
        
        $table->addColumn('bairro', 'string', [
            'default' => null,
            'limit' => 140,
            'null' => false
        ]);
        
        $table->addColumn('cidade', 'string', [
            'default' => null,
            'limit' => 50,
            'null' => false
        ]);
        
        $table->addColumn('estado', 'string', [
            'default' => null,
            'limit' => 2,
            'null' => false
        ]);
        
        $table->addColumn('cep', 'string', [
            'default' => null,
            'limit' => 10,
            'null' => false
        ]);
        
        $table->addColumn('telefone', 'string', [
            'default' => null,
            'limit' => 15,
            'null' => false
        ]);
        
        $table->addColumn('celular', 'string', [
            'default' => null,
            'limit' => 15,
            'null' => true
        ]);
        
        $table->addColumn('data_ultimo_acesso', 'datetime', [
            'default' => null,
            'null' => true
        ]);
        
        $table->addColumn('ip', 'string', [
            'default' => null,
            'limit' => 15,
            'null' => true
        ]);
        
        $table->addColumn('created', 'datetime', [
            'default' => null,
            'null' => true
        ]);
        
        $table->addColumn('modified', 'datetime', [
            'default' => null,
            'null' => true
        ]);
        
        $table->addColumn('deleted_at', 'datetime', [
            'default' => null,
            'null' => true
        ]);
        
        $table->update();
    }
}
