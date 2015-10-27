<?php 
	if (!defined('BASEPATH')) exit('No direct script access allowed');
	
	class Main extends CI_Controller {
	
		var $parent_page = "main";

	    function __construct() {
	        parent::__construct();
	        $this->load->helper('url');
	    }
	
	    function index() {
	        $this->_display();
	    }

	    function _display($page = 'main', $data = '' )
	    {
	    	
	    	//$this->load->view('header');
	    	$this->load->view($this->parent_page.'/'.$page , $data);//$this->parent_page.'/'.$page
	    	//$this->load->view('footer');
	    }

	    function page($page = 'main' , $process = '-1')
	    {
	        $data = null;
	    	switch ($process) {
	    		case '1':
	    			# code...
	    			break;    		
	    	}
	    	$this->_display($page,$data);
	    }

	    public function pecahhati($first = null , $second = null)
	    {
	    	if ($this->input->post()) {
	    		$word = $this->input->post();
	    		$first = $word['text1'];
	    		$second = $word['text2'];
	    	}
	    	$arr1 = $this->pecahkata($first);
	    	$arr2 = $this->pecahkata($second);
	    	print_r($arr1);
	    	echo "<br>";
	    	print_r($arr2);
	    	echo "<br>";
	    	$sama = $this->carisama($arr1 , $arr2);
	    	echo $sama;

	    	$kick = $this->kicksama($arr1);
	    	print_r($kick);
	    	
	    	

	    	
	    	
	    }

	    public function pecahkata($word = null)
	    {
	    	$arr = str_split($word);
	    	$size = sizeof($arr);
	    	$text = "";
	    	for ($i=0; $i < ($size - 1); $i++) { 
	    		$text = $text . $arr[$i] . $arr[$i+1];
	    		if ($i < ($size - 2)) {
	    			$text = $text . "|";
	    		}
	    	}
	    	$arr = explode("|", $text);
	    	return $arr;
	    } 

	    public function carisama($arr1 = null , $arr2 = null)
	    {
	    	$num = 0;
	    	$size1 = sizeof($arr1);
	    	$size2 = sizeof($arr2);
            for($i=0; $i < $size1; $i++)
            {
            	for($j= 0; $j < $size2; $j++) 
            	{
            		if($arr1[$i] == $arr2[$j])
            		{
            			$num++;
            		}
            	}
            }
            return $num;

	    } 

	   public function kicksama($arr1 = null)
	    {
	    	$num = 0;
	    	$size = sizeof($arr1);
	    	
	    	for($i=0; $i< $size; $i++)
	    	{
	    		for($j=$i; $j < $size; $j++)
	    		{
	    			if($arr1[$i] == $arr1[$j])
	    			{
	    				$temp[$num] = [$i];
	    				$num++;
	    			}
	    		}
	    	}

	    	$num=0;
	    	$num2=0;
	    	for ($i=0; $i< $size; $i++)
	    	{ 
	    		if($arr2[$i]!= $temp[$num])
	    		{
	    			$arr2[$num2] = $arr1[$i];
	    			$num2++;
	    		}
	    		else
	    		{
	    			$num++;
	    			if (sizeof($temp) == $num) 
	    			{
	    				break;
	    			}
	    			return $arr2;

	    		}
	    		   		    				
	    	}

	    }
	}
	        
?>