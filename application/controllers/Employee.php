<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Employee_model','employee');
    }

    public function index(){
        $page_contents = [
            'title' => 'All Employees',
            'content_file_path' => 'employee/vue_ui/list_all',
            'js_files' => [
                'js/employee/all.js'
            ]
        ];

        $this->load->view('layout', $page_contents);

//        $this->layout_view('employee/all', [
//            'employees' => $this->employee->getAllEmployee()
//        ]);
    }

    public function add(){
        $page_contents = [
            'title' => 'Add new employee',
            'content_file_path' => 'employee/form',
            'js_files' => [
                'js/employee/add.js'
            ]
        ];

        $this->load->view('layout', $page_contents);
    }

    public function store(){
//        $json = $this->input->raw_input_stream;
//        $data = json_decode($json, true);
//        dd($data);
        $employee_info = [
            'name' => json_decode($this->input->post('emp_name')),
            'email' => $this->input->post('email'),
            'phone' => $this->input->post('phone'),
            'salary' => $this->input->post('salary'),
            'address' => $this->input->post('address'),
        ];

        dd($_POST);

        if($this->employee->addEmployee($employee_info)){
            echo "Employee Added Successfully!";
        }
        else{
            echo "Unable to add employee!";
        }
    }

    public function edit($employee_id){
        $page_contents = [
            'title' => 'Edit specific employee',
            'content_file_path' => 'employee/edit',
            'employee' => $this->employee->findBy($employee_id),
            'employee_id' => $employee_id
        ];

        $this->load->view('layout', $page_contents);
    }

    public function update(){
        $employee_id = $this->input->post('employee_id');
        
        $employee_info = [
            'name' => $this->input->post('emp_name'),
            'email' => $this->input->post('email'),
            'phone' => $this->input->post('phone'),
            'salary' => $this->input->post('salary'),
            'address' => $this->input->post('address'),
        ];

        if($this->employee->updateEmployee($employee_id, $employee_info)){
            echo "Employee info updated Successfully!";
            return redirect('employee/index');
        }
        else{
            echo "Unable to update!";
        }
    }

    public function delete($employee_id){
        if($this->employee->deleteEmployee($employee_id)){
            echo "Employee info deleted!";
            return redirect('employee/index');
        }
        else{
            echo "Unable to Delete!";
        }
    }
}