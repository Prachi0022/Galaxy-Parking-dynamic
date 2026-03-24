<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category_model extends CI_Model
{
    public function categoryinput($data, $id){
        if ($id == '') {
            $this->db->insert('category', $data);
            $this->log_activity('category', 'added', $data['category_name']);
            return $this->db->insert_id();
        } else {
            $this->db->where('id', $id);
            $this->db->update('category', $data);
            $this->log_activity('category', 'added', $data['category_name']);
            return $id;
        }
    }
  
    public function categoryid($id){ 
        $this->db->select('*');
        $this->db->from('category');
        $this->db->where('id',$id);
        $query=$this->db->get();
        return $query->row();
    }

    public function categoryname($id){ 
        $this->db->select('*');
        $this->db->from('category');
        $this->db->where('category_name',$id);
        $query=$this->db->get();
        return $query->row();
    }

    public function delete($id){
        $this->db->where_in('id', $id);
        $this->db->delete('category');
    } 

   public function category(){
        $this->db->order_by('id', 'ASC');
        return $this->db->get('category')->result_array();
    }

   public function add_gallery_images($data) {
        $this->db->insert('gallery_img', $data);
        $this->log_activity('gallery_img', 'added', isset($data['title']) ? $data['title'] : 'New images');
        return $this->db->insert_id();
    }

    public function get_gallery_images($category_id = null) {
        $this->db->select('g.*, c.category_name as title');
        $this->db->from('gallery_img g');
        $this->db->join('category c', 'g.category_id = c.id', 'left');
        if ($category_id) {
            $this->db->where('g.category_id', $category_id);
        }
        $this->db->where('g.status', 1);
        $this->db->order_by('g.created_at', 'DESC');
        return $this->db->get()->result_array();
    }

    public function count_gallery() {

        // Category-wise
        $this->db->select('c.id, c.category_name, COUNT(g.id) as count');
        $this->db->from('category c');
        $this->db->join('gallery_img g', 'g.category_id = c.id AND g.status = 1', 'left');
        $this->db->group_by('c.id');
        $categories = $this->db->get()->result_array();

        // Total
        $this->db->select('COUNT(*) as total');
        $this->db->from('gallery_img');
        $this->db->where('status', 1);
        $total = $this->db->get()->row_array();

        return [
            'total' => $total['total'],
            'categories' => $categories
        ];
    }

    public function get_dashboard_counts() {
        $sql = "
            SELECT 
                (SELECT COUNT(*) FROM products) AS product_count,
                (SELECT COUNT(*) FROM blog) AS blog_count,
                (SELECT COUNT(*) FROM gallery_img WHERE status = 1) AS gallery_count,
                (SELECT COUNT(*) FROM career WHERE status = 'Active') AS career_count
        ";

        return $this->db->query($sql)->row_array();
    }

    public function delete_gallery_image($id) {
        $image = $this->get_gallery_image_by_id($id);
        if ($image) {
            // Delete physical files
            $images = json_decode($image['images'], true);
            if (is_array($images)) {
                foreach ($images as $img) {
                    @unlink(FCPATH . 'upload/gallery/' . $img);
                }
            }
        }
        $this->db->where('id', $id);
        $this->db->delete('gallery_img');
        return true;
    }

    public function get_gallery_image_by_id($id) {
        $this->db->select('*');
        $this->db->from('gallery_img');
        $this->db->where('id', $id);
        return $this->db->get()->row_array();
    }


 private function log_activity($type, $action, $identifier) {
        $message = ucfirst($type) . ' ' . $action . ' (' . $identifier . ')';
        $this->db->insert('activity_logs', [
            'type' => $type,
            'message' => $message
        ]);
    }
}
