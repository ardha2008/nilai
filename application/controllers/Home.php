<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller{
    
    
    function __construct(){
        parent::__construct();
    }
    
    function index(){
        $data['title']  = 'Home';
        $data['pages']  = 'home';
        $this->load->view('home',$data);
    }
    
    public function login(){
        
        $data['title']  = 'Login';
        $data['pages']  = 'login';
        $this->load->view('home',$data);
    }
    
}