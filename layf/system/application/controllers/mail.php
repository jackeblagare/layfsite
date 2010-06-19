<?php

class Mail extends Controller{

    function Mail(){
		parent::Controller();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('email');
		
	}
	function index()
{
    $config['protocol']    = 'smtp';
    $config['smtp_host']    = 'ssl://smtp.gmail.com';
    $config['smtp_port']    = '465';
    $config['smtp_timeout'] = '7';
    $config['smtp_user']    = 'jackeblagare@gmail.com';
    $config['smtp_pass']    = 'aelendil';
    $config['charset']    = 'utf-8';
    $config['newline']    = "\r\n";
    $config['mailtype'] = 'text'; // or html
    $config['validation'] = TRUE; // bool whether to validate email or not      

    $this->email->initialize($config);


    $this->email->from('jackeblagare@gmail.com', 'Jack');
    $this->email->to('jackeblagare@yahoo.com'); 

    $this->email->subject('Email Test');
    $this->email->message('Testing the email class.');  

    $this->email->send();

    echo $this->email->print_debugger();
     
}
	 }
?>