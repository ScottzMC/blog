<?php

  class Notification extends CI_Controller{

    public function index(){
      $status = $this->session->userdata('ustatus');
      $data['notification'] = $this->Admin_model->display_post_notification();

      if(!empty($status) && $status == "Admin"){
        $this->load->view('admin/notification', $data);
      }else{
        redirect('home');
      }
    }
  }

?>
