<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class General_model extends CI_Model
{
       public function profile(){
        $this->db->select('*');
        $this->db->from('general');
        $this->db->where('id', 1);
        // return $this->db->update('website', $data);
        return $this->db->get()->row();
    }

    public function auprofile($data, $id){
        if ($id == '') {
            $this->db->insert('general', $data);
            $insert_id = $this->db->insert_id();
            $this->log_activity('system', 'added', 'General settings');
            return $insert_id;
        } else {
            $this->db->where('id', $id);
            $this->db->update('general', $data);
            $this->log_activity('system', 'updated', 'General settings');
            return $id;
        }
    }
public function get_recent_activities($limit = 5)
{
   return $this->db
       ->order_by('created_at', 'DESC')
       ->limit($limit)
       ->get('activity_logs')
       ->result();
}

private function log_activity($type, $action, $identifier) {
   $message = ucfirst($type) . ' ' . $action . ' (' . $identifier . ')';
   $this->db->insert('activity_logs', [
       'type' => $type,
       'message' => $message
   ]);
}

}
