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

    /**
     * To get employee details ...
     * @param $employee_id
     * @return mixed
     * @author MsM Robin
     * @date 2024-08-01
     */
    public function getEmployeeDetails($employee_id = null)
    {
        $query = $this->db->query('SELECT * FROM employees')
            ->join('departments', 'employees.department_id = departments.ID')
            ->join('designations', 'employees.designation_id = designations.ID')
            ->join('cities', 'employees.city_id = cities.ID');

        if ($employee_id) {
            return $query->where('employees.ID', $employee_id)->order_by('employees.ID', 'DESC')->get()->row();
        }
        else {
            return $query->order_by('employees.ID', 'DESC')->get()->result();
        }
    }

    public function findBy($id)
    {
        $query = $this->db->get_where('employees', ['ID' => $id]);
        return $query->row();
    }

    public function updateEmployee($id, $data)
    {
        $this->db->where('ID', $id);
        $this->db->update('employees', $data);

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
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
