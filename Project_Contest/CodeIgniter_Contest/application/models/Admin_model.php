 <?php
class Admin_model extends CI_Model{
    function insert_rec(){
        $this->load->database();
        $rec=array('qid'=>$this->input->post('qid'),
                  'question'=>$this->input->post('q_txtarea'),
                  'optns1'=>$this->input->post('opt1'),
                  'optns2'=>$this->input->post('opt2'),
                  'crrct_ans'=>$this->input->post('crct_ans'),
                  'q_date'=>$this->input->post('q_dt'));
        
        if($this->db->insert('questions',$rec))
            return "true";
        else
            return "false";
    }
    
    function q_show(){
        $this->load->database();
        $qtable=$this->db->get('questions');
        return $qtable->result();
    }
    function q_remove(){
        $this->load->database();
        $this->db->where('qid',$this->input->post('txthid'));
        $this->db->delete('questions');
    }
    function showusers(){
        $this->load->database();
        $query=$this->db->get('users');
        return $query->result();
    }
    function userwinner(){
        $this->load->database();
        $query=$this->db->query("select * from users where marks=(select max(marks) from users)");
        return $query->result();
    }
    function user_remove(){
        $this->load->database();
        $this->db->where('uid',$this->input->post('txthid'));
        $this->db->delete('users');
    }
    function winner_publish(){
        $winnerid=$this->input->post('txthid');
        $result=$this->db->query("update users set status = 'winner' where uid='$winnerid'");
        if($result)
            echo "Winner Published...";
    }
   }
?>