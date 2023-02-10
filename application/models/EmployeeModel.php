<?php
class EmployeeModel extends CI_Model{
    function __construct()
    {
        parent::__construct();
    }

    public function getEmployee(){
        $this->db->select("vFirstName as name");
        $this->db->from("employees");
        $this->db->where("iEmployeeId",1);
        $res = $this->db->get()->result_array();
        // print_r($res);exit;
        return $res;
    }

    public function addEmployee($i_par = [])
    {
        $data = [
            "vFirstName"    => $i_par['vFirstName'],
            "vLastName"     => $i_par['vLastName'],
            "vEmail"        => $i_par['vEmail'],
            "vPassword"     => $i_par['vPassword'],
            "eStatus"       => $i_par['eStatus'],
            "gGender"       => $i_par['gGender'],
        ];
        $this->db->insert('employees',$data);
        return true;
    }

    public function remove($i_par = []){

        $this->db->where('iEmployeeId', $i_par['employee_id']);
        $this->db->delete('employees');
    }

    public function updateEmp($i_par = []){
        $data = [
            'vFirstName'    => $i_par['first_name'],
            "vLastName"     => $i_par['last_name']
        ];  
        $this->db->set($data);
        $this->db->where('iEmployeeId', $i_par['employee_id']);
        $this->db->update('employees', $data);
        return true;
    }
}
?>
