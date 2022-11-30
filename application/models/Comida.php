<?php
class Comida extends CI_Model
{
  function __construct()
  {
    parent::__construct();
    $this->load->database();
  }
  # Método para insertar los datos de Comida
  public function insertarComida($datos)
  {
    return $this->db->insert("comida", $datos);
  }
  # Método para obtener los datos de una Comida
  public function getComidas()
  {
    $comidas = $this->db->get('comida');
    if ($comidas->num_rows() > 0) {
      return $comidas->result();
    } else {
      return false;
    }
  }
  # Método para borrar una comida por ID
  public function eliminarComida($id)
  {
    $this->db->where('id_com', $id);
    return $this->db->delete('comida');
  }
  # Método para obtener una comida por ID
  public function obtenerComidaPorId($id)
  {
    $this->db->where('id_com', $id);
    $comidas = $this->db->get('comida');
    if ($comidas->num_rows() > 0) {
      return $comidas->row();
    } else {
      return false;
    }
  }

  # Método para editar una comida por ID
  public function editarComidaPorId($id, $nuevosDatos)
  {
    $this->db->where('id_com', $id);
    return $this->db->update('comida', $nuevosDatos);
  }
}
