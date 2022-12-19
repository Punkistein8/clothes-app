<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model("loginm");
  }

  public function index()
  {
    $this->load->view('header');
    $this->load->view('login/index');
    $this->load->view('footer');
  }

  public function validarLogin()
  {
    $datos = array(
      'user_usu' => $this->input->post('user_usu'),
      'pass_usu' => $this->input->post('pass_usu')
    );
    $usuario = $this->loginm->validarLogin($datos);
    if ($usuario) {
      $this->session->set_userdata('usuario', $usuario);
      redirect('Hombres/indexPriv');
    } else {
      $this->session->set_flashdata('error', 'Usuario o contraseña incorrectos');
      redirect(base_url('Hombres/index'));
    }
  }
}
