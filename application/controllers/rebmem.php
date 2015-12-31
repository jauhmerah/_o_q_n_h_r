<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Rebmem extends MY_Controller 
{
        
        var $parent_page = "rebmem";

      	function __construct()
      	{
                  parent::__construct(); 
      	}
        
        private function viewpage($page='v_mainpage', $data=array())
        {
            echo $this->load->view('v_header', $data, true);
            echo $this->load->view($this->parent_page.'/'.'v_menu', $data, true);
            echo $this->load->view($this->parent_page.'/'.$page, $data, true);
            echo $this->load->view('v_footer', $data, true);
        }


       public function index()
       {
            $this->viewpage('v_mainpage');
       }
       
       public function lala()
       {

        echo 'minin';
       } 

		
		
        
		
        
        function _example_output($page, $output = null)
    	{
                $this->viewpage($page, $output);
    	} 
}
