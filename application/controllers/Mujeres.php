<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mujeres extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model("mujer");
  }

  public function index()
  {
    $data["listaMujeres"] = $this->mujer->getMujeres();
    $this->load->view('header');
    $this->load->view('mujeres/index', $data);
    $this->load->view('footer');
  }
}
