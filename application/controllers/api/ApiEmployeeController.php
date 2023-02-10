<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH .'libraries/RestController.php';
require APPPATH .'libraries/Format.php';
use chriskacerguis\RestServer\RestController;

class ApiEmployeeController extends RestController
{
    function __construct()
    {
        parent:: __construct();
        $this->load->model('EmployeeModel');   
    }
    // SELECT
    public function index_get(){
        // echo 'I am restful api aman';exit;
        $res = $this->EmployeeModel->getEmployee();
        $this->response($res,200);
    }
    // ADD
    public function storeEmployee_post(){
        $i_par = $this->input->get();
        $this->EmployeeModel->addEmployee($i_par);
        $this->response("inserted successfully");
    }

    // delete
    public function removeEmployee_post(){
        $i_par = $this->input->get();
        $this->EmployeeModel->remove($i_par);
        $this->response("record deleted successfully...");
    }

    public function updateEmployee_post(){
        $i_par = $this->input->get();
        $this->EmployeeModel->updateEmp($i_par);
        $this->response("Record updated successfully...");
    }
}

?>

grid: {
            padding: {
                top: 20,
                right: 0,
                bottom: 0,
                left: -80
            }
        },

        apexcharts-legend apexcharts-align-left apx-legend-position-left