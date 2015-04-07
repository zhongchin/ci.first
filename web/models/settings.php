<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Settings extends CI_Model {

    public $table="common_setting";

    public function __construct()
    {
        parent::__construct();
        
    }
      /**
       * undocumented function
       *
       * @return void
       * @author 
       **/
      public function fetchAll()
      {
       // return "hellos";
        return  $this->db->select()->get($this->table)->result_array();
      }
      public function getValueByKey($key){
          return $this->db->where($key)->get()->return_array();
      }



}

/* End of file  */
/* Location: ./application/models/ */