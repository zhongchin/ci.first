<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/3/29
 * Time: 22:51
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends MY_Controller {

    public function __construct()
    {
        parent::__construct();

    }

    public function index()
    {
        $this->load->model('settings');
        $settings=$this->settings->fetchAll();
        foreach($settings as $k=>$v){
            $data['settings'][$v['key']]=$v['value'];
        }

        $this->load->view('front/index',$data);
    }

}

/* End of file index.php */
/* Location: ./application/controllers/index.php */