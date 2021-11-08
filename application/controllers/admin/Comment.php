<?php

  class Comment extends CI_Controller{

    public function view(){
      $status = $this->session->userdata('ustatus');
      $data['comment'] = $this->Admin_model->display_post_comment();

      if(!empty($status) && $status == "Admin"){
        $this->load->view('admin/comment/view', $data);
      }else{
        redirect('home');
      }
    }

    public function delete_comment(){
      $id = $this->input->post('deleted_id');
      $this->Admin_model->delete_comment($id);
    }
  }

?>
