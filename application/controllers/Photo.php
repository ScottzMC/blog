<?php

  class Photo extends CI_Controller{

    public function index(){
      $data['gallery'] = $this->Data_model->display_gallery();

      $this->load->view('site/gallery', $data);
    }
  }

?>
