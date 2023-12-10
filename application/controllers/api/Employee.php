<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Employee_model', 'employee');
    }

    /**
     * To get all the employee info ...
     * [HttpGet]
     * @return JSON
     */
    public function index()
    {
        return $this->success_response('All Employee Found', $this->employee->getAllEmployee());
    }

    /**
     * To store employee info and return the operation status ...
     * [HttpPost]
     * @return JSON
     */
    public function store()
    {
        $json = $this->input->raw_input_stream;
        $employee_info = json_decode($json, true);

        if ($this->employee->addEmployee($employee_info)) {
            return $this->success_response('Employee info added successfully');
        } else {
            return $this->error_response('Unable to add');
        }
    }

    /**
     * To get specific employee id ...
     * [HttpGet]
     * @param $employee_id
     * @return JSON
     */
    public function edit($employee_id)
    {
        $employee_info = $this->employee->findBy($employee_id);

        if (!empty($employee_info)) {
            return $this->success_response('Employee info found!', $employee_info);
        }
        else
            $this->error_response('No employee data found!');
    }

    /**
     * To update the specific employee info ...
     * [HttpPost]
     * @return JSON
     */
    public function update(){
        $json = $this->input->raw_input_stream;
        $employee_info = json_decode($json, true);

        if($this->employee->updateEmployee($employee_info['ID'], $employee_info)){
            return $this->success_response('Employee data updated successfully!');
        }
        else{
            return $this->error_response('Unable to update!');
        }
    }


    /**
     * To delete the specific employee info ...
     * [HttpPost]
     */
    public function delete()
    {
        $employee_info = json_decode($this->input->raw_input_stream, true);

        if($this->employee->deleteEmployee($employee_info['ID'])){
            return $this->success_response('Employee data deleted successfully!');
        }
        else{
            return $this->error_response('Unable to delete!');
        }
    }

}