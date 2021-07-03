<?php

defined('BASEPATH') or exit('No direct script access allowed');
class Vendors_model extends CI_Model {
    public function __construct()
    {
        $this->load->database();
    }
    public function get_vendors($slug = FALSE)
    {
        if ($slug === FALSE)
        {
            $query = $this->db->get('vendors');
            return $query->result_array();
        }
        $query = $this->db->get_where('vendors', array('slug' => $slug));
        return $query->row_array();
    }
    public function get_vendors_by_id($id = 0)
    {
        if ($id === 0)
        {
            $query = $this->db->get('vendors');
            return $query->result_array();
        }
        $query = $this->db->get_where('vendors', array('id' => $id));
        return $query->row_array();
    }
    public function set_vendors($id = 0)
    {
        $this->load->helper('url');
        $slug = url_title($this->input->post('title'), 'dash', TRUE);
        $data = array(
            'title' => $this->input->post('title'),
            'slug' => $slug,
            'employee_name' => $this->input->post('employee_name'),
            'employee_salary' => $this->input->post('employee_salary'),
            'employee_age' => $this->input->post('employee_age')
        );
        if ($id == 0) {
            return $this->db->insert('vendors', $data);
        } else {
            $this->db->where('id', $id);
            return $this->db->update('vendors', $data);
        }
    }
    public function delete_vendors($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('vendors');
    }
}