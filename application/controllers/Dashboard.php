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
    
    function kelas(){
        $data['title']  = 'Kelas';
        $data['pages']  = 'kelas';
        
        $data['seluruh']    = $this->db->get('kelas');
        
        $this->load->view('home',$data);
    }
    
    function mapel(){
        $data['title']  = 'Mata Pelajaran';
        $data['pages']  = 'mapel';
        
        $data['seluruh']    = $this->db->get('mapel');
        
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
        
        if(isset($_POST['update_siswa'])){
            $data=array(
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'id_kelas' => $this->input->post('kelas'),
            );
            
            $id=$this->input->post('id');
            $this->db->where('id_siswa',$id);
            $query=$this->db->update('siswa',$data);
            $this->session->set_userdata('message','update');
            if($query)redirect('manage/siswa/edit/'.$id);
        }
        
        if(isset($_POST['kelas'])){
            $data=array(
            'nama'=>$this->input->post('nama')
            );
            
            $query=$this->db->insert('kelas',$data);
            if($query){
                redirect('kelas');
            }
        }
        
        if(isset($_POST['mapel'])){
            $data=array(
            'nama'=>$this->input->post('nama')
            );
            
            $query=$this->db->insert('mapel',$data);
            if($query){
                redirect('mapel');
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
        
        if(isset($_POST['update_guru'])){
            $data=array(
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            );
            
            $id=$this->input->post('id');
            $this->db->where('id_guru',$id);
            $query=$this->db->update('guru',$data);
            $this->session->set_userdata('message','update');
            if($query)redirect('manage/guru/edit/'.$id);
        }
        
    }
    
    function lihat($kelas){
        $query=$this->db->where('siswa.id_kelas',$kelas)->get('siswa');
        
        $data['title']  = "Data Kelas $kelas";
        $data['pages'] = 'lihat/kelas';
        $data['seluruh'] = $query->result();
        
        $this->load->view('home',$data);
    }
    
    function delete($tabel=null,$id=null){
        if($tabel==null or $id==null) redirect('','','404');
        
        if($tabel=='guru') $kolom='id_guru';
        if($tabel=='siswa') $kolom='id_siswa';
        if($tabel=='mapel') $kolom='id_mapel';
                
        $this->db->where($kolom,$id);
        $this->db->delete($tabel);
        
        redirect($tabel);
    }
}