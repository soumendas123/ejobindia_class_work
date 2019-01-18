<?php
class Login_model extends CI_Model{
    
    function check(){
        $this->load->database();
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where("uname",$this->input->post('unametxt'));
        $this->db->where("pass",$this->input->post('upasstxt'));
        $query1=$this->db->get();
        $rec=$query1->result();
        foreach($rec as $row)
        {
            $attnq=$row->attn_qus;
            $uid=$row->uid;
        }
        if($query1->num_rows()>0)
        {
            if($this->input->post('unametxt')=='admin_sj' && 
               $this->input->post('upasstxt')==321)
                return 3;
            
            $this->session->set_userdata('uname',$this->input->post('unametxt'));
            $this->load->database();
            $this->db->select('*');
            $this->db->from('questions');
            $this->db->where('q_date',$this->input->post('txtdt'));
            $query=$this->db->get();
            
            
           foreach($query->result() as $rows)
            {
                $qd=$rows->qid; 
            }
            if($attnq==$qd)
                return 2;
            else
               return $query->result();
        }
        else
             return 1;
//        $this->profile_show($uid);
    }
    function ans_check(){
        $this->load->database();
        $this->load->library('session');
        $this->db->where("qid",$this->input->post('txthid'));
        $query=$this->db->get('questions');
        foreach($query->result() as $row)
        {
            if($row->crrct_ans==$this->input->post('radans'))
                return 1;
            else
                return 0;
        }
    }
    function marks_update(){
        
        $this->load->database();
        $this->load->library('session');
        $user=$this->session->userdata('uname');
        $this->db->query("update users set marks=marks+1 where uname= '$user'");
    }
    function update_user(){
        $this->load->database();
        $this->load->library('session');
        $un=$this->session->userdata('uname');
        $qid=$this->input->post('txthid');
        $this->db->query("update users set attn_qus='$qid' where uname= '$un'");
    }
    function user_result(){
        $q=$this->db->query("select * from users where status='winner'");
        if($q->num_rows()>0)
            return $q->result();
        else
            return "";
    }
    function __call($name,$args){
//        $this->load->library('session');
        if($name=='profile_show'){
            switch(count($args)){
                case 1: $u=$args[0];
                        echo $u;
                        break;
                case 0:  $un=$this->db->query("select * from users where                  uid='$u'");
                         return $un->result();
            }
        }
    }
    function profile_show(){
         $this->load->library('session');
        $user=$this->session->userdata('uname');
        $q=$this->db->query("select * from users where uname='$user'");
        return $q->result();
    }
    function regis(){
        $this->load->database();
        $urec=array('uname'=>$this->input->post('uname'),
                    'pass'=>$this->input->post('upass'),
                    'phnno'=>$this->input->post('uphn'),
                    'address'=>$this->input->post('uaddr'));
        if($this->db->insert('users',$urec))
            return true;
        else
            return false;
    }
}
?>
