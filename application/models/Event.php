<?php
class Event extends CI_Model {
        
        public function __construct()
        {
                parent::__construct();
                // Your own constructor code
        }

        public function insert($data){
                return $this->db->insert('tb_event', $data);
        }

        public function update($id,$data){
                return $this->db->update('tb_event', $data,array('id' => $id));
        }

        public function delete($id){
                return $this->db->delete('tb_event', array('id' => $id));       
        }

        public function getAllData($limit, $start, $st = NULL){
                if($st === NULL){$st="";}
                $this->db->like('title',$st,'both');
                $this->db->limit($limit, $start);
                $query = $this->db->get('tb_event');
                return $query->result();
        }

        public function getDataById($id){
                return $this->db->get_where('tb_event', array('id' => $id))->row();
        }

        public function getDataForShow(){
                // $this->db->where('date_end >', date('Y-m-d'));
                // $this->db->order_by('date_start','ASC');
                $this->db->limit(6);
                $query = $this->db->get('tb_event');
                return $query->result();
        }

        public function getNumData($st = NULL){
                if($st === NULL){$st="";}
                $this->db->like('title',$st,'both');
                return $this->db->count_all_results('tb_event');
        }

        public function getDataForJson(){
                $query = $this->db->get('tb_event');
                return $query->result_array();       
        }
}

?>