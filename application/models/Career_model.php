<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Career_model extends CI_Model
{
    public function careerinput($data, $id){
        if ($id == '') {
            $this->db->insert('career', $data);
            $insert_id = $this->db->insert_id();
            $this->log_activity('career', 'added', $data['title'] ?? 'Unknown');

            return $insert_id;
        } else {
            $this->db->where('id', $id);
            $this->db->update('career', $data);
            $this->log_activity('career', 'updated', $data['title'] ?? 'Unknown');

            return $id;
        }
    }

    public function careerid($id){ 
        $this->db->select('*');
        $this->db->from('career');
        $this->db->where('id',$id);
        $query=$this->db->get();
        return $query->row();
    } 

    public function delete_career($id){
           return $this->db->where('id', $id)->delete('career');
    }


    public function career(){
        $this->db->order_by('id', 'ASC');
        return $this->db->get('career')->result_array();
    }

    public function get_total_career() {
        return $this->db->count_all('career'); // 'products' = your table name
    }

    private function log_activity($type, $action, $identifier) {
        $message = ucfirst($type) . ' ' . $action . ' (' . $identifier . ')';
        $this->db->insert('activity_logs', [
            'type' => $type,
            'message' => $message
        ]);
    }
}
