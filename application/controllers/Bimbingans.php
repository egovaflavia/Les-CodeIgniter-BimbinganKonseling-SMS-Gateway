<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Bimbingans extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //Load Dependencies
        $this->load->model('Mbimbingans');
        $this->load->library("form_validation");
    }

    // List all your items
    public function index($offset = 0)
    {
        $data['databimbingans'] = $this->Mbimbingans->getAll();
        $this->load->view('bimbingans/index', $data);
    }

    // Add a new item
    public function add()
    {
        $this->load->view('Tatib/add');
    }

    //Update one item
    public function update($id = NULL)
    {
    }

    //Delete one item
    public function delete($id = NULL)
    {
    }
}

/* End of file Controllername.php */
