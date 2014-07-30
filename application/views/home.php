<?php 
$this->load->view('header'); 
if($this->session->userdata('login')==true)$this->load->view('sidebar');
if($pages=='home')$this->load->view('content/home');

if($pages=='login') $this->load->view('content/login');
if($pages=='dashboard') $this->load->view('content/dashboard');
if($pages=='siswa') $this->load->view('content/siswa');
if($pages=='guru') $this->load->view('content/guru');
if($pages=='mapel') $this->load->view('content/mapel');
if($pages=='kelas') $this->load->view('content/kelas');

if($pages=='manage/siswa/edit') $this->load->view('content/manage/siswa');

$this->load->view('footer'); 
 
 ?>