<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('index');
	}
    
    public function getJsonCode(){
        $txtname=$this->input->post("txtname");
        $handle = curl_init();
        https://pixabay.com/api/?key=13945426-7ce8c1e8a44513d3e6997913f
        $url = "https://pixabay.com/api/videos/?key=13945426-7ce8c1e8a44513d3e6997913f&q=".urlencode($txtname); 
        curl_setopt($handle, CURLOPT_URL, $url);
        curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
        $output = curl_exec($handle);
        curl_close($handle);
        echo json_encode($output);
     }
}
 
