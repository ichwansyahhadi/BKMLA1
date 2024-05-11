<?php
class Newsletter_model extends CI_Model {
        
        public function __construct()
        {
                parent::__construct();
                // Your own constructor code
        }

        public function insert($data){
                return $this->db->insert('tb_newsletter', $data);
        }

        public function update($id,$data){
                return $this->db->update('tb_newsletter', $data,array('id' => $id));
        }

        public function delete($id){
                return $this->db->delete('tb_newsletter', array('id' => $id));       
        }

        public function getAllData(){
                $query = $this->db->get('tb_newsletter');
                return $query->result();
        }

        public function getDataById($id){
                return $this->db->get_where('tb_newsletter', array('id' => $id))->row();
        }

        public function getDataByUserPass($username,$password){
                return $this->db->get_where('tb_newsletter', array('username' => $username,'password' => md5($password)))->row();
        }
}

?>