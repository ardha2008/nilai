<?php 


class Manage extends CI_Controller{
    
    function __construct(){
        parent::__construct();
    }
    
    function siswa($action=null,$id=null){
        if($action==null || $id==null)redirect('dashboard');
        
        if($action=='edit'){
            $query=$this->db->get_where('siswa',array('id_siswa'=>$id));
            $data['title']  = "Edit $id";
            $data['pages']  = 'manage/siswa/edit';
            $data['seluruh'] = $query->result();
            $data['id'] = $id;
            $this->load->view('home',$data);
        }
    }
}