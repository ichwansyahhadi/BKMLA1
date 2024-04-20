<?php
class Admin extends CI_Model {
        
        public function __construct()
        {
                parent::__construct();
                // Your own constructor code
        }

        public function insert($data){
                return $this->db->insert('tb_admin', $data);
        }

        public function update($id,$data){
                return $this->db->update('tb_admin', $data,array('id' => $id));
        }

        public function delete($id){
                return $this->db->delete('tb_admin', array('id' => $id));       
        }

        public function getAllData(){
                $query = $this->db->get('tb_admin');
                return $query->result();
        }

        public function getDataById($id){
                return $this->db->get_where('tb_admin', array('id' => $id))->row();
        }

        public function getDataByUserPass($username,$password){
                return $this->db->get_where('tb_admin', array('username' => $username,'password' => md5($password)))->row();
        }

        public function getNotification(){
                $this->db->select(" * from(select 'New Story' Message, count(*) Total from tb_story where tb_story.read=0 union select 'New Comment' Message, count(*) Total from tb_comment where tb_comment.read=0) a where total>0");
                return $this->db->get();
        }
}

?>