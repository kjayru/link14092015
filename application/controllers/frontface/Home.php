<?php 
class Home extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
	$this->load->helper('form');
	$this->load->helper('url');
	$this->load->model("ValidarModel");
  }
  
  public function Index()
  {
	  echo "seccion inicial";
  }
  public function ComoFunciona()
  {
	  
  }
  public function Casos()
  {
  }
  public function Blog()
  {
	  
  }
  public function Ayuda()
  {
	  
  }
  public function Nosotros()
  {
	  
  }
  public function Ingresa()
  {
	$attributes = array('class' => 'form', 'id' => 'formdata',"method"=>"post");
	echo form_open("/gets/index.php/frontface/home/validar",$attributes);
	$data = array(
        'name'          => 'usuario',
        'id'            => 'usuario',
        'type'          => 'text'
	 );
	echo form_input($data);

	$data = array(
        'name'          => 'clave',
        'id'            => 'clave',
        'type'          => 'password'
	 );
	echo form_input($data);
	echo form_submit("enviar","Enviar");	
	echo form_close();
	
  }
  public function Validar()
  {
	
  	$result = $this->ValidarModel->validar();
	print_r($result);
	redirect('/gets/index.php/backend/dashboard', 'refresh');
  }
  
}