<?php

class Employee_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function addEmployee($data)
    {
        return $this->db->insert('employees', $data);
    }

    public function getAllEmployee()
    {
        $query = $this->db->query('SELECT * FROM employees');
        return $query->result();
    }

    public function findBy($id) {
        $query = $this->db->get_where('employees', ['ID' => $id]);
        return $query->row();
    }

    public function updateEmployee($id,$data){
        $this->db->where('ID', $id);
        $this->db->update('employees', $data);

        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
        
    }

    public function deleteEmployee($id)
    {
        $this->db->where('ID', $id);
        $this->db->delete('employees');

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }
}
