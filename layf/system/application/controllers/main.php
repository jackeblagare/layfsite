<?php

class Main extends Controller{

    function Main(){
		parent::Controller();
		$this->load->helper('url');
		$this->load->helper('form');
	}
    
	function index(){
		$this->load->view('main_view');
	}
	
	function about(){
		$this->load->view('about_view');
	}
	
	function events(){
		$this->load->view('events_view');
	}
	
	function gallery(){
		$this->load->view('gal_view');
	}
	
	function links(){
		$this->load->view('links_view');
	}
	
	function wall(){
		$this->load->view('wall_view');
	}	
	
	
}
?>