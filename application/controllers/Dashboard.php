<?php 

class Dashboard extends CI_Controller{
    
    function __construct(){
        parent::__construct();
        if($this->session->userdata('login')!= true) redirect('login');
    }
    
    function index(){
        $data['title']  = 'Dashboard';
        $data['pages']  = 'dashboard';
        $this->load->view('home',$data);
    }
    
    function siswa(){
        $data['title']  = 'Siswa';
        $data['pages']  = 'siswa';
        
        $data['seluruh']    = $this->db->get('siswa');
        
        $this->load->view('home',$data);
    }
    
    function guru(){
        $data['title']  = 'Guru';
        $data['pages']  = 'guru';
        
        $data['seluruh']    = $this->db->get('guru');
        
        $this->load->view('home',$data);
    }
    
    function proses(){
        
        if(isset($_POST['siswa'])){
            $data=array(
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            );
            
            $input=$this->db->insert('siswa',$data);
            if($input){
                redirect('siswa');
            }
        }
        
        if(isset($_POST['guru'])){
            $data=array(
            'id_guru'=> $this->input->post('id'),
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            );
            
            $data2=array(
            'id_guru'=>$this->input->post('id'),
            'password'=>$this->input->post('password')
            );
            
            $input=$this->db->insert('guru',$data);
            $input2=$this->db->insert('users',$data2);
            
            if($input){
                redirect('guru');
            }
        }
    }
}