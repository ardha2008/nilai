<?php 
$this->load->view('header'); 

if($pages=='home')$this->load->view('content/home');

if($pages=='login') $this->load->view('content/login');
    
$this->load->view('sidebar');

$this->load->view('footer'); 
 
 ?>