<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model
{
    public function productinput($data, $id){
        if ($id == '') {
            $this->db->insert('products', $data);
            $insert_id = $this->db->insert_id();
            $this->log_activity('product', 'added', $data['title'] ?? 'Unknown');

            return $insert_id;
        } else {
            $this->db->where('id', $id);
            $this->db->update('products', $data);
            $this->log_activity('product', 'updated', $data['title'] ?? 'Unknown');

            return $id;
        }
    }

    public function productsid($id){ 
        $this->db->select('*');
        $this->db->from('products');
        $this->db->where('id',$id);
        $query=$this->db->get();
        return $query->row();
    } 

    public function delete_product($id){
           return $this->db->where('id', $id)->delete('products');
    }


    public function product(){
        $this->db->order_by('id', 'ASC');
        return $this->db->get('products')->result_array();
    }

    public function get_total_products() {
        return $this->db->count_all('products'); // 'products' = your table name
    }

    private function log_activity($type, $action, $identifier) {
        $message = ucfirst($type) . ' ' . $action . ' (' . $identifier . ')';
        $this->db->insert('activity_logs', [
            'type' => $type,
            'message' => $message
        ]);
    }
}
