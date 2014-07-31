<?php 


class Manage extends CI_Controller{
    
    function __construct(){
        parent::__construct();
    }
    
    function siswa($action=null,$id=null){
        if($action==null || $id==null)redirect('dashboard');
        
        
            $query=$this->db->get_where('siswa',array('siswa.id_siswa'=>$id));
            $kelas=$this->db->get('kelas');
            
            $data['title']  = "Edit $id";
            $data['pages']  = 'manage/siswa/edit';
            $data['seluruh'] = $query->result();
            $data['id'] = $id;
            
            $data['kelas'] = $kelas->result();
          // print_r($query->result());
            $this->load->view('home',$data);
        
    }
    
    function guru($action=null,$id=null){
        if($action==null || $id==null)redirect('dashboard');
        
        if($action=='edit'){
            $query=$this->db->get_where('guru',array('id_guru'=>$id));
            $data['title']  = "Edit $id";
            $data['pages']  = 'manage/guru/edit';
            $data['seluruh'] = $query->result();
            $data['id'] = $id;
            $this->load->view('home',$data);
        }
    }
}