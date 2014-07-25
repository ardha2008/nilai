<?php 
$this->load->view('header'); 
if($this->session->userdata('login')==true)$this->load->view('sidebar');
if($pages=='home')$this->load->view('content/home');

if($pages=='login') $this->load->view('content/login');
if($pages=='dashboard') $this->load->view('content/dashboard');
    
if($pages=='siswa') $this->load->view('content/siswa');
if($pages=='guru') $this->load->view('content/guru');

$this->load->view('footer'); 
 
 ?>