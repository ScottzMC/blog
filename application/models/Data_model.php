<?php

  class Data_model extends CI_Model{

    // Home

    public function display_banner($type){
      $this->db->where('type', $type);
      $query = $this->db->get('tbl_banner')->result();
      return $query;
    }

    public function display_blog_in_home(){
      $this->db->limit('8');
      $this->db->order_by('created_date', 'DESC');
      $query = $this->db->get('tbl_post')->result();
      return $query;
    }

    public function display_popular_blog_in_home(){
      $this->db->limit('9');
      $this->db->order_by('viewed', 'DESC');
      $query = $this->db->get('tbl_post')->result();
      return $query;
    }

    public function subscribe_user_notification($email){
      $escape_email = $this->db->escape_str($email);
      $query = $this->db->insert('tbl_post_notification', $escape_email);
      return $query;
    }

    // End of Home

    // Post

    public function display_post_by_title($id, $title){
      $this->db->where('id', $id);
      $query = $this->db->get('tbl_post')->result();
      return $query;
    }

    public function add_comment($data){
      $escape_data = $this->db->escape_str($data);
      $query = $this->db->insert('tbl_post_comment', $escape_data);
      return $query;
    }

    public function display_comment_by_title($id){
      $this->db->where('post_id', $id);
      $query = $this->db->get('tbl_post_comment')->result();
      return $query;
    }

    public function record_search_count() {
      $query = $this->db->count_all("tbl_post");
      return $query;
    }

    public function record_search_count_result($title){
      $escape_title = $this->db->escape_like_str($title);
      $query = $this->db->query("SELECT COUNT(title) AS total FROM tbl_post WHERE title LIKE '%$escape_title%'")->result();
      return $query;
    }

    public function fetch_search_data($limit, $start, $title){
      $escape_title = $this->db->escape_like_str($title);
      $this->db->limit($limit, $start);
      $query = $this->db->query("SELECT * FROM tbl_post WHERE title LIKE '%$escape_title%' ORDER BY title ASC ")->result();
      return $query;
    }

    // End of Post

    // Category

    public function record_category_count() {
      $query = $this->db->count_all("tbl_post");
      return $query;
    }

    public function fetch_category_data($limit, $start, $category){
      $this->db->limit($limit, $start);
      $query = $this->db->query("SELECT * FROM tbl_post WHERE category = '$category' ORDER BY category ASC ")->result();
      return $query;
    }

    // End of Category

    // Gallery

    public function display_gallery(){
      $query = $this->db->get('tbl_gallery')->result();
      return $query;
    }

    // End of Gallery

  }

?>
