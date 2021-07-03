<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Vendors extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->model('vendors_model');
        $this->load->helper('url_helper');
    }
    public function index()
    {
        $data['vendors'] = $this->vendors_model->get_vendors();
        $data['title'] = 'vendors archive';
        $this->load->view('templates/header', $data);
        $this->load->view('vendors/index', $data);
        $this->load->view('templates/footer');
    }
    public function view($slug = NULL)
    {
        $data['vendors_item'] = $this->vendors_model->get_vendors($slug);
        $data['title'] = $data['vendors_item']['title'];
        $this->load->view('templates/header', $data);
        $this->load->view('vendors/view', $data);
        $this->load->view('templates/footer');
    }
    public function create()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');
        $data['title'] = 'Create a Vendor';
        $this->form_validation->set_rules('title', 'Designation', 'required');
        $this->form_validation->set_rules('employee_name', 'Name', 'required');
        $this->form_validation->set_rules('employee_salary', 'Salary', 'required');
        $this->form_validation->set_rules('employee_age', 'Age', 'required');
    }
    public function save()
    {
        $this->form_validation->set_rules('title', 'Designation', 'required');
        $this->form_validation->set_rules('employee_name', 'Name', 'required');
        $this->form_validation->set_rules('employee_salary', 'Salary', 'required');
        $this->form_validation->set_rules('employee_age', 'Age', 'required');
        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/header');
            $this->load->view('vendors/create');
            $this->load->view('templates/footer');
        } else {
            $this->vendors_model->set_vendors();
            $this->load->view('templates/header');
            $this->load->view('vendors/success');
            $this->load->view('templates/footer');
        }
    }
    public function edit()
    {
        $id = $this->uri->segment(3);
        $this->load->helper('form');
        $this->load->library('form_validation');
        $data['title'] = 'Edit a vendors item';
        $data['vendors_item'] = $this->vendors_model->get_vendors_by_id($id);
        $this->form_validation->set_rules('title', 'Designation', 'required');
        $this->form_validation->set_rules('employee_name', 'Name', 'required');
        $this->form_validation->set_rules('employee_salary', 'Salary', 'required');
        $this->form_validation->set_rules('employee_age', 'Age', 'required');
        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('vendors/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $this->vendors_model->set_vendors($id);
            redirect(base_url() . 'index.php/vendors');
        }
    }
    public function delete()
    {
        $id = $this->uri->segment(3);
        $vendors_item = $this->vendors_model->get_vendors_by_id($id);
        $this->vendors_model->delete_vendors($id);
        redirect(base_url() . 'index.php/vendors');
    }
}
