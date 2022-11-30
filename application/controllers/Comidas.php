<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Comidas extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model("comida");
  }

  public function index()
  {
    $data["listaComidas"] = $this->comida->getComidas();
    $this->load->view('header');
    $this->load->view('comidas/index', $data);
    $this->load->view('footer');
  }
  public function guardarComida()
  {
    $datosNuevaComida = array(
      "id_com" => $this->input->post('id_com'),
      "nombre_com" => $this->input->post('nombre_com'),
      "precio_com" => $this->input->post('precio_com'),
      "foto_com" => $this->input->post('foto_com'),
    );
    if ($this->comida->insertarComida($datosNuevaComida)) {
      redirect('comidas'); //redirecciona a la vista index
    } else {
      echo "<h1>No</h1>";
    }
  }
  public function eliminarComida($id)
  {
    if ($this->comida->eliminarComida($id)) {
      redirect('comidas');
    } else {
      echo "<h1>No se pudo eliminar</h1>";
    }
  }
  public function cargarDatosComida($id)
  {
    $data["comidaEditar"] = $this->comida->obtenerComidaPorId($id);
    $this->load->view('header');
    $this->load->view('comidas/editar', $data);
    $this->load->view('footer');
  }

  public function editarComida($id)
  {
    $datosEditarComida = array(
      "nombre_com" => $this->input->post('nombre_com'),
      "precio_com" => $this->input->post('precio_com'),
      "foto_com" => $this->input->post('foto_com'),
    );

    if ($this->comida->editarComidaPorId($id, $datosEditarComida)) {
      redirect('comidas'); //redirecciona a la vista index
      echo print_r($datosEditarComida);
    } else {
      echo "<h1>Error al actualizar</h1>";
    }
  }
}
