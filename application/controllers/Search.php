<?php
Class Search Extends CI_Controller
{
    function __Construct()
    {        
        parent::__Construct();

        $this->load->database();
        $this->load->model('mymodel');
    }

    function search_keyword()
    {
        $keyword = $this->input->post('keyword');
        $data['results'] = $this->mymodel->search($keyword);

        $this->load->view('view_result', $data);
    }
}
?>