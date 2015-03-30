<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/3/29
 * Time: 22:51
 */

class Index extends CI_Controller
{
    public function __construct(){
        parent::__construct();
    }
    public function index(){
       $this->load->view("front/index");
    }
} 