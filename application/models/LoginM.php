<?php
class LoginM extends CI_Model
{
  function __construct()
  {
    parent::__construct();
    $this->load->database();
  }
  #Metodo para validar el login
  public function validarLogin($datos)
  {
    $this->db->where('user_usu', $datos['user_usu']);
    $this->db->where('pass_usu', $datos['pass_usu']);
    $usuario = $this->db->get('usuarios');
    if ($usuario->num_rows() > 0) {
      return $usuario->row();
    } else {
      return false;
    }
  }
}
