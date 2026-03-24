<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Case_model extends CI_Model
{
    public function caseinput($data, $id){
        if ($id == '') {
            $this->db->insert('casestudy', $data);
            $insert_id = $this->db->insert_id();
            $this->log_activity('casestudy', 'added', $data['title'] ?? 'Unknown');

            return $insert_id;
        } else {
            $this->db->where('id', $id);
            $this->db->update('casestudy', $data);
            $this->log_activity('casestudy', 'updated', $data['title'] ?? 'Unknown');

            return $id;
        }
    }

    public function caseid($id){ 
        $this->db->select('*');
        $this->db->from('casestudy');
        $this->db->where('id',$id);
        $query=$this->db->get();
        return $query->row();
    } 

    public function delete_casestudy($id){
           return $this->db->where('id', $id)->delete('casestudy');
    }


    public function casestudy(){
        $this->db->order_by('id', 'ASC');
        return $this->db->get('casestudy')->result_array();
    }

    public function get_total_casestudy() {
        return $this->db->count_all('casestudy'); // 'products' = your table name
    }

    private function log_activity($type, $action, $identifier) {
        $message = ucfirst($type) . ' ' . $action . ' (' . $identifier . ')';
        $this->db->insert('activity_logs', [
            'type' => $type,
            'message' => $message
        ]);
    }
}
