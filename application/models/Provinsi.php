<?php
class Provinsi extends CI_Model {
        
        public function __construct()
        {
                parent::__construct();
                // Your own constructor code
        }

        public function insert($data){
                return $this->db->insert('tb_provinsi', $data);
        }

        public function update($id,$data){
                return $this->db->update('tb_provinsi', $data,array('id' => $id));
        }

        public function delete($id){
                return $this->db->delete('tb_provinsi', array('id' => $id));       
        }

        public function getAllData(){
                $query = $this->db->get('tb_provinsi');
                return $query->result();
        }

        public function getDataById($id){
                return $this->db->get_where('tb_provinsi', array('id' => $id))->row();
        }
}

?>