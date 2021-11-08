<?php

  class Admin_model extends CI_Model{

    // Account

    public function validate($email, $password){
    	$escape_email = $this->db->escape_str($email);
      $escape_password = $this->db->escape_str($password);

	  	$this->db->where('email', $escape_email);
    	$query = $this->db->get('tbl_user');

    	if($query->num_rows() > 0){
      	$result = $query->row_array();
      	if($this->bcrypt->check_password($escape_password, $result['password'])){
		    	return $query->result();
      	}else{
    		return array();
      	}
	    }else{
      	return NULL;
    	}
  	}

    public function create_user($data){
      $escape_data = $this->db->escape_str($data);
      $query = $this->db->insert('tbl_user', $escape_data);
      return $query;
    }

    // End of Account

    // Dashboard

    public function count_total_post(){
      $query = $this->db->query("SELECT COUNT(*) AS total_post FROM tbl_post")->result();
      return $query;
    }

    public function count_total_gallery(){
      $query = $this->db->query("SELECT COUNT(*) AS total_gallery FROM tbl_gallery")->result();
      return $query;
    }

    public function count_total_comment(){
      $query = $this->db->query("SELECT COUNT(*) AS total_comment FROM tbl_post_comment")->result();
      return $query;
    }

    public function count_total_subscribed_notification(){
      $query = $this->db->query("SELECT COUNT(*) AS total_notification FROM tbl_post_notification WHERE subscribed = 'Yes' ")->result();
      return $query;
    }

    public function count_total_viewed_post(){
      $query = $this->db->query("SELECT SUM(viewed) AS total_viewed FROM tbl_post ")->result();
      return $query;
    }

    public function count_total_affliate_post(){
      $query = $this->db->query("SELECT SUM(affliate) AS total_affliate FROM tbl_post ")->result();
      return $query;
    }

    public function display_latest_post(){
      $this->db->limit('2');
      $this->db->order_by('created_date', 'DESC');
      $query = $this->db->get("tbl_post")->result();
      return $query;
    }

    public function display_viewed_post(){
      $this->db->limit('1');
      $this->db->order_by('viewed', 'DESC');
      $query = $this->db->get("tbl_post")->result();
      return $query;
    }

    public function most_viewed_post(){
      $this->db->limit('6');
      $this->db->order_by('viewed', 'DESC');
      $query = $this->db->get("tbl_post")->result();
      return $query;
    }

    public function most_post_comment(){
      $this->db->limit('6');
      $this->db->order_by('created_date', 'DESC');
      $query = $this->db->get("tbl_post_comment")->result();
      return $query;
    }

    public function most_message_contact(){
      $this->db->limit('6');
      $this->db->order_by('created_date', 'DESC');
      $query = $this->db->get("tbl_contact")->result();
      return $query;
    }

    public function delete_post_comment($id){
      $query = $this->db->query("DELETE FROM tbl_post_comment WHERE id = '$id' ");
      return $query;
    }

    public function delete_contact_message($id){
      $query = $this->db->query("DELETE FROM tbl_contact WHERE id = '$id' ");
      return $query;
    }

    // End of Dashboard

    // Navigation

    public function add_menu($data){
      $query = $this->db->insert('tbl_menu', $data);
      return $query;
    }

    public function edit_menu($id, $category){
      $query = $this->db->query("UPDATE tbl_menu SET category = '$category' WHERE id = '$id' ");
      return $query;
    }

    public function delete_menu_title($id){
      $query = $this->db->query("DELETE FROM tbl_menu WHERE id = '$id' ");
      return $query;
    }

    public function display_edit_menu($id){
      $this->db->where('id', $id);
      $query = $this->db->get('tbl_menu')->result();
      return $query;
    }

    // End of Navigation

    // Gallery

    public function display_menu(){
      $this->db->distinct();
      $this->db->order_by('category', 'ASC');
      $query = $this->db->get('tbl_menu')->result();
      return $query;
    }

    public function add_gallery($data){
      $query = $this->db->insert('tbl_gallery', $data);
      return $query;
    }

    public function display_gallery(){
      $this->db->order_by('category', 'ASC');
      $query = $this->db->get('tbl_gallery')->result();
      return $query;
    }

    public function display_gallery_by_id($id){
      $this->db->where('id', $id);
      $query = $this->db->get('tbl_gallery')->result();
      return $query;
    }

    public function edit_gallery_category($id, $category){
      $query = $this->db->query("UPDATE tbl_gallery SET category = '$category' WHERE id = '$id' ");
      return $query;
    }

    public function edit_gallery_image($id, $image){
      $query = $this->db->query("UPDATE tbl_gallery SET image = '$image' WHERE id = '$id' ");
      return $query;
    }

    public function delete_gallery_image($id){
      $query = $this->db->query("DELETE FROM tbl_gallery WHERE id = '$id' ");
      return $query;
    }

    // End of Gallery

    // Social Media

    public function display_social_media(){
      $this->db->order_by('title', 'ASC');
      $query = $this->db->get('tbl_social')->result();
      return $query;
    }

    public function display_social_media_by_id($id){
      $this->db->order_by('title', 'ASC');#
      $this->db->where('id', $id);
      $query = $this->db->get('tbl_social')->result();
      return $query;
    }

    public function add_social_media($data){
      $query = $this->db->insert('tbl_social', $data);
      return $query;
    }

    public function edit_social_title($id, $title){
      $query = $this->db->query("UPDATE tbl_social SET title = '$title' WHERE id = '$id' ");
      return $query;
    }

    public function edit_social_url($id, $url){
      $query = $this->db->query("UPDATE tbl_social SET url = '$url' WHERE id = '$id' ");
      return $query;
    }

    public function delete_social_media($id){
      $query = $this->db->query("DELETE FROM tbl_social WHERE id = '$id' ");
      return $query;
    }

    // End of Social Media

    // Post

    public function display_post(){
      $this->db->order_by('created_date', 'DESC');
      $query = $this->db->get('tbl_post')->result();
      return $query;
    }

    public function display_post_by_id($id){
      $this->db->where('id', $id);
      $query = $this->db->get('tbl_post')->result();
      return $query;
    }

    public function add_post($data){
      $query = $this->db->insert('tbl_post', $data);
      return $query;
    }

    public function edit_post_title($id, $title){
      $query = $this->db->query("UPDATE tbl_post SET title = '$title' WHERE id = '$id' ");
      return $query;
    }

    public function edit_post_category($id, $category){
      $query = $this->db->query("UPDATE tbl_post SET category = '$category' WHERE id = '$id' ");
      return $query;
    }

    public function edit_post_affliate($id, $affliate){
      $query = $this->db->query("UPDATE tbl_post SET affliate_status = '$affliate' WHERE id = '$id' ");
      return $query;
    }

    public function edit_post_content($id, $content){
      $query = $this->db->query("UPDATE tbl_post SET body = '$content' WHERE id = '$id' ");
      return $query;
    }

    public function edit_post_image($id, $image){
      $query = $this->db->query("UPDATE tbl_post SET image = '$image' WHERE id = '$id' ");
      return $query;
    }

    public function delete_post($id){
      $query = $this->db->query("DELETE FROM tbl_post WHERE id = '$id' ");
      return $query;
    }

    // End of Post

    // Post Comment

    public function display_post_comment(){
      $query = $this->db->query("SELECT tbl_post.id, tbl_post.code, tbl_post.title, tbl_post_comment.id, tbl_post_comment.post_id,
      tbl_post_comment.fullname, tbl_post_comment.body, tbl_post_comment.created_date FROM tbl_post INNER JOIN tbl_post_comment ON
      tbl_post.id = tbl_post_comment.post_id")->result();
      return $query;
    }

    public function delete_comment($id){
      $query = $this->db->query("DELETE FROM tbl_post_comment WHERE id = '$id' ");
      return $query;
    }

    // End of Post Comment

    // Newsletter

    public function display_post_notification(){
      $this->db->where('subscribed', 'Yes');
      $query = $this->db->get('tbl_post_notification')->result();
      return $query;
    }

    // End of Newsletter

  }

?>
