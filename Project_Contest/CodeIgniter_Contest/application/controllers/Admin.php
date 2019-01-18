<?php
class Admin extends CI_Controller{
//    public $chk;
    function index(){
        $this->load->view('Admin_dash');
    }
    function questions(){
        $this->load->view('Admin_dash');
        $this->load->model('Admin_model');
        $rec['q']=$this->Admin_model->q_show();
        $this->load->view('Admin_qinsert',$rec);
        
        }
    
    function q_insert(){
        $this->load->model('Admin_model');
        $flag=$this->Admin_model->insert_rec();
        if($flag=='true')
            {
            $this->load->view('Admin_dash');
            $rec['q']=$this->Admin_model->q_show();
            $this->load->view('Admin_qinsert',$rec);
            $this->load->view('Admin_success');
            
            }
        else
            {
            $this->load->view('Admin_dash');
            $this->load->view('Admin_unsuccess');
           
            }
   }
    function q_remove(){
        $this->load->model('Admin_model');
        $this->Admin_model->q_remove();
//        $this->load->view('Admin_qinsert');
        $this->questions();
    }
    function users(){
        $this->load->model('Admin_model');
        $rec['r']=$this->Admin_model->showusers();
        $this->load->view('Admin_dash');
        $this->load->view('Admin_user_view',$rec);
    }
    function user_remove(){
        $this->load->model('Admin_model');
        $this->Admin_model->user_remove();
        $this->users();
    }
    function winner(){
        $this->load->model('Admin_model');
        $rec['a']=$this->Admin_model->userwinner();
        $this->load->view('Admin_dash');
        $this->load->view('Admin_result_view',$rec);
    }
    function publish(){
        $this->load->model('Admin_model');
        $this->Admin_model->winner_publish();
    }
    
}
?>