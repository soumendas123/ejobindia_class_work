<?php
class Login_controller extends CI_controller{
    function index(){
        $this->load->view('Userlogin');
    }
    function logincheck(){
        
        $this->load->model('Login_model');
        $flag['r']=$this->Login_model->check();
     
        if($flag)
        {
            if($flag['r']==1)
            {
//                $data['r']="Wrong user name or Password.";
                $this->load->view('Userlogin');
                
            }
            else if($flag['r']==2)
            {
              $this->load->view('Users_menu_view');
              $this->load->view('Users_allready_attnd_view');
                
            }
            else if($flag['r']==3)
            {
                $this->load->helper('url');
                redirect(base_url()."Admin");

            }
            else
            {
             $this->load->view('users_menu_view');
             $this->load->view('users_ques_view',$flag);
            }
                
        }
    }
    function newuser_reg(){
        $this->load->view('Newuser_page');
    }
    function newuser(){
        $this->load->model('Login_model');
        $flag=$this->Login_model->regis();
        if($flag=='true')
            $chk= "Registration successfull.";
        else 
            $chk= "Registration Failed.";
        
        $this->load->helper('url');
        redirect(base_url()."Login_controller/newuser_reg?a=".$chk);
        
    }
   function anscheck(){
        $this->load->model('Login_model');
        $ff=$this->Login_model->ans_check();
        $this->Login_model->update_user();
        if($ff==1)
        {
            $this->Login_model->marks_update();
            $this->load->view('Users_menu_view');
            $this->load->view('Users_success_view');
         }
    }
    
    function users_result(){
        $this->load->model('Login_model');
        $flag['r']=$this->Login_model->user_result();
        if($flag['r']!=0)
        {
            $this->load->view('Users_menu_view');
            $this->load->view('Winner_published',$flag);
        }
        else
        {
            $this->load->view('Users_menu_view');
            $this->load->view('Winnernot_published');
        }
    }
    function profile_show(){
        $this->load->model('Login_model');
        $rec['p']=$this->Login_model->profile_show();
        $this->load->view('Users_menu_view');
        $this->load->view('Users_profile_view',$rec);
            
    }
    function logout(){
        $this->load->library('session');
        $this->session->unset_userdata('uname');
        $this->load->helper('url');
        redirect(base_url()."Login_controller");
    }
}
?>