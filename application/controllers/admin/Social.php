<?php

  class Social extends CI_Controller{

    public function view(){
      $status = $this->session->userdata('ustatus');

      if(!empty($status) && $status == "Admin"){
        $data['social'] = $this->Admin_model->display_social_media();

        $this->load->view('admin/social/view', $data);

      }else{
        redirect('home');
      }
    }

    public function add(){
      $status = $this->session->userdata('ustatus');

      if(!empty($status) && $status == "Admin"){
        $submit = $this->input->post('submit_btn');

        if(isset($submit)){
          $title = $this->input->post('title');
          $url = $this->input->post('url');
          $add_array = array(
            'title' => $title,
            'url' => $url
          );

          $add_data = $this->Admin_model->add_social_media($add_array);

          if($add_data){ ?>
            <script>
              alert('Added Social Media');
              window.location.href="<?php echo site_url('admin/social/view'); ?>";
            </script>
    <?php }else{ ?>
            <script>
              alert('Failed');
              window.location.reload();
            </script>
    <?php }
        }else{
          $this->load->view('admin/social/add');
        }
      }else{
        redirect('home');
      }
    }

    public function edit($id){
      $status = $this->session->userdata('ustatus');

      if(!empty($status) && $status == "Admin"){
        $data['edit'] = $this->Admin_model->display_social_media_by_id($id);

        if(isset($submit)){
          $submit = $this->input->post('submit_btn');

          $title = $this->input->post('title');
          $url = $this->input->post('url');

          $edit_title = $this->Admin_model->edit_social_title($id, $title);
          $edit_url = $this->Admin_model->edit_social_url($id, $url);

          if($edit_title || $edit_url){ ?>
            <script>
              alert('Edited Social Media');
              window.location.href="<?php echo site_url('admin/social/view'); ?>";
            </script>
    <?php }else{ ?>
            <script>
              alert('Failed');
              window.location.reload();
            </script>
    <?php }
        }else{
          $this->load->view('admin/social/edit', $data);
        }

      }else{
        redirect('home');
      }
    }

    public function delete_social(){
      $id = $this->input->post('deleted_id');
      $this->Admin_model->delete_social_media($id);
    }
  }

?>
