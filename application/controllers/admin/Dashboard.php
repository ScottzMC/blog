<?php

  class Dashboard extends CI_Controller{

    public function index(){
      $status = $this->session->userdata('ustatus');

      if(!empty($status) && $status == "Admin"){
        $data['count_post'] = $this->Admin_model->count_total_post();
        $data['count_gallery'] = $this->Admin_model->count_total_gallery();
        $data['count_comment'] = $this->Admin_model->count_total_comment();
        $data['count_notification'] = $this->Admin_model->count_total_subscribed_notification();
        $data['count_sum'] = $this->Admin_model->count_total_viewed_post();
        $data['count_affliate'] = $this->Admin_model->count_total_affliate_post();

        $data['latest_post'] = $this->Admin_model->display_latest_post();
        $data['viewed_post'] = $this->Admin_model->display_viewed_post();
        $data['most_post'] = $this->Admin_model->most_viewed_post();
        $data['most_comment'] = $this->Admin_model->most_post_comment();
        $data['most_contact'] = $this->Admin_model->most_message_contact();

        $this->load->view('admin/dashboard', $data);
      }else{
        redirect('home');
      }
    }

    public function delete_contact(){
      $id = $this->input->post('deleted_id');
      $this->Admin_model->delete_contact_message($id);
    }

    public function delete_comment(){
      $id = $this->input->post('deleted_id');
      $this->Admin_model->delete_post_comment($id);
    }
  }

?>
