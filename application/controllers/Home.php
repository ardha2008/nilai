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
    
    function auth(){
        $this->load->library('form_validation');
        
        $data['title']  = 'Login';
        $data['pages']  = 'login';
        
        $this->form_validation->set_rules('id', 'ID ', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('capt', 'Captha', 'required|matches[capt2]');
        
        $this->form_validation->set_message('matches', 'Invalid captcha');
		
        $id=$this->input->post('id');
        $password=$this->input->post('password');
        
        
        if ($this->form_validation->run() == FALSE){
			$this->load->view('home',$data);
		}else{
            $this->db->where('id_guru',$id);
            $this->db->where('password',$password);
            $query=$this->db->get('users');            
            if($query->num_rows() != 1 )exit('Password salah');
            redirect('dashboard');
		}
    }
    
}