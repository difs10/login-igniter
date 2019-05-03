<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Crud_model extends CI_Model {
    public function __construct() {
        $this->load->database();
    }
    function createData() {
        $data = array (
            'nombre' => $this->input->post('nombre'),
            'rbd' => $this->input->post('rbd'),
            'fecha_registro' => $this->input->post('fecha_registro')
        );
        $this->db->insert('colegios', $data);
    }
    function getAllData() {
        $query = $this->db->query('SELECT * FROM colegios');
        return $query->result();
    }
    function getData($id) {
        $query = $this->db->query('SELECT * FROM colegios WHERE `id` =' .$id);
        return $query->row();
    }
    function updateData($id) {
        $data = array (
            'nombre' => $this->input->post('nombre'),
            'rbd' => $this->input->post('rbd'),
            'fecha_registro' => $this->input->post('fecha_registro')
        );
        $this->db->where('id', $id);
        $this->db->update('colegios', $data);
    }
    function deleteData($id) {
        $this->db->where('id', $id);
        $this->db->delete('colegios');
    }
}