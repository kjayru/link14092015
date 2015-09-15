<?php 
Class ValidarModel extends CI_Model{
	 public function __construct()
        {
                parent::__construct();
        }
	public function validar()
	{
	  $this->usuario = $_POST["usuario"];
	  $this->clave	 = $_POST["clave"];	
	  return $this->usuario;
	}
}