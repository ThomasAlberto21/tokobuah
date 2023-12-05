<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("users_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["users"] = $this->users_model->getAll();
        $this->load->view("admin/users/list", $data);
    }

    public function add()
    {
        $users = $this->users_model;
        $validation = $this->form_validation;
        $validation->set_rules($users->rules());

        if ($validation->run()) {
            $users->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/users/new_form");
    }


    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->users_model->delete($id)) {
            redirect(site_url('admin/users'));
        }
    }
}
