<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH .'libraries/RestController.php';
require APPPATH .'libraries/Format.php';
use chriskacerguis\RestServer\RestController;

class ApiDemoController extends RestController
{
    function __construct()
    {
        parent:: __construct();   
    }

    public function index_get(){
        echo 'I am restful api';exit;
    }
}

?>