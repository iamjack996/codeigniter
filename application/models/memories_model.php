<?php

class memories_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

    public function get_memories($slug = FALSE){   //, $limit = FALSE, $offset = FALSE
			// if($limit){
			// 	$this->db->limit($limit, $offset);
			// }
			if($slug === FALSE){
				$this->db->order_by('memories.date', 'ASC');
				$query = $this->db->get('memories');
				return $query->result_array();
			}
			$query = $this->db->get_where('memories', array('slug' => $slug));
      // $query = $this->db->where('memories.slug', $slug);
			return $query->row_array();
		}

    public function create(){
      $data = array(
        'title' => $this->input->post('title'),
        'slug' => url_title($this->input->post('slug')),
        'ps' => $this->input->post('ps'),
        'date' => $this->input->post('date'),
        'type' => $this->input->post('type')
      );
      return $this->db->insert('memories', $data);
    }

    public function update($slug = FALSE){
      $data = array(
        'title' => $this->input->post('title'),
        'slug' => url_title($this->input->post('slug')),
        'ps' => $this->input->post('ps'),
        'date' => $this->input->post('date'),
        'type' => $this->input->post('type')
      );
      $this->db->where('slug', $data['slug']);
			return $this->db->update('memories', $data);
    }

    public function delete($slug = FALSE){
      $this->db->where('slug', $slug);
      $this->db->delete('memories');
    }

    public function ajaxUpdate(){
      $data = array(
        'slug' => $this->input->post('slug'),
        'ps' => $this->input->post('ps'),
      );
      $this->db->where('slug', $data['slug']);
			$this->db->update('memories', $data);
      if($this->db->affected_rows() > 0){
        return true;
      }else{
        return false;
      }
    }



  }

?>
