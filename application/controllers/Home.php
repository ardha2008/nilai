<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller{
    
    
    function __construct(){
        parent::__construct();
        
       // if($this->session->userdata('login')==true) redirect('dashboard');
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
            
            $get_data=$this->db->get_where('users',array('id_guru'=>$id));            
            
            if($query->num_rows() != 1 ){
                $this->session->set_userdata('message','login_failed');
                redirect('login');
            }
            
            foreach($get_data->result() as $row){
                $this->session->set_userdata('id',$row->id_guru);
            }
            $this->session->set_userdata('login',true);
            redirect('dashboard');
		}
    }
    
    function error(){
        echo 'not found';
    }
    
    function logout(){
        $this->session->sess_destroy();
        redirect('login');
    }
    
    function tes(){
        $string = 'Loren Insum Dolor sit amet';
        $output=explode(' ',$string);
        foreach($output as $string){
            echo substr($string,0,1);
        }
    }
    
}