<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StudentController extends CI_Controller {

    public function index() {
        $this->load->view('input_form');
    }

    public function process_form() {
        // Load the model
        $this->load->model('StudentModel');

        // Process form data
        $data = array(
            'name' => $this->input->post('name'),
            'nis' => $this->input->post('nis'),
            'class' => $this->input->post('class'),
            'birthdate' => $this->input->post('birthdate'),
            'birthplace' => $this->input->post('birthplace'),
            'address' => $this->input->post('address'),
            'gender' => $this->input->post('gender'),
            'religion' => $this->input->post('religion'),
        );

        // Save data to the model
        $this->StudentModel->save_data($data);

        // Load the view with the submitted data
        $this->load->view('result_view', $data);
    }
}
