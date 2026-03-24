<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog_model extends CI_Model
{
    public function bloginput($data, $id){
        if ($id == '') {
            $this->db->insert('blog', $data);
            $this->log_activity('blog', 'added', $data['title']);
            return $this->db->insert_id();
        } else {
            $this->db->where('id', $id);
            $this->db->update('blog', $data);
             $this->log_activity('blog', 'updated', $data['title']);
            return $id; 
        }
    }

    public function blogid($id){ 
        $this->db->select('*');
        $this->db->from('blog');
        $this->db->where('id',$id);
        $query=$this->db->get();
        return $query->row();
    }

    public function delete($id){
        $this->db->where_in('id', $id);
        $this->db->delete('blog');
    } 

    public function blog(){
        $this->db->order_by('id', 'ASC');
        return $this->db->get('blog')->result_array();
    }

    public function get_blogs_paginated($limit, $offset) {
        $this->db->order_by('id', 'ASC');
        $this->db->limit($limit, $offset);
        return $this->db->get('blog')->result_array();
    }

    public function get_total_blog() {
        return $this->db->count_all('blog'); // 'products' = your table name
    }

    private function log_activity($type, $action, $identifier) {
        $message = ucfirst($type) . ' ' . $action . ' (' . $identifier . ')';
        $this->db->insert('activity_logs', [
            'type' => $type,
            'message' => $message
        ]);
    }
}
