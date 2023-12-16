<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StudentModel extends CI_Model {

    public function save_data($data) {
        // Save data to the database or perform any other necessary actions
        // For simplicity, let's assume you have a 'students' table in your database
        $this->db->insert('students', $data);
    }
}
