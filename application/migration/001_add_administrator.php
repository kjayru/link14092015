<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_add_administrador extends CI_Migration {

	public function up()
	{
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'INT',
				'constraint' => 5,
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			),
			'usuario' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
			),
			'clave' => array(
			   'type' => 'VARCHAR',
			   'constraint' => '100'
			),
			'nombre' => array(
				'type'=>'VARCHAR',
				'constraint' => '100'
			),
			'fecha' => array(
				'type' => 'timestamp'
			),
		));
		 $this->dbforge->add_key('id', TRUE);

		$this->dbforge->create_table('administrador');
	}
	public function down()
	{
		$this->dbforge->drop_table('administrador');
	}
}
	