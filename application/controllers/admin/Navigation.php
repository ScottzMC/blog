<?php

  class Navigation extends CI_Controller{

    public function add(){
      $status = $this->session->userdata('ustatus');

      if(!empty($status) && $status == "Admin"){
        $submit = $this->input->post('submit_btn');

        if(isset($submit)){
          $category = $this->input->post('category');
          $str_category = str_replace(' ', '-', $category);
          $add_array = array(
            'category' => $str_category
          );

          $add_data = $this->Admin_model->add_menu($add_array);

          if($add_data){ ?>
            <script>
              alert('Added Menu');
              window.location.href="<?php echo site_url('admin/navigation/view'); ?>";
            </script>
    <?php }else{ ?>
            <script>
              alert('Failed');
              window.location.reload();
            </script>
    <?php }
        }else{
          $this->load->view('admin/navigation/add');
        }
      }else{
        redirect('home');
      }
    }

    public function view(){
      $status = $this->session->userdata('ustatus');

      if(!empty($status) && $status == "Admin"){
        $data['menu'] = $this->Admin_model->display_menu();

        $this->load->view('admin/navigation/view', $data);
      }else{
        redirect('home');
      }
    }

    public function delete_menu(){
      $id = $this->input->post('deleted_id');
      $this->Admin_model->delete_menu_title($id);
    }

    public function edit($id){
      $status = $this->session->userdata('ustatus');

      if(!empty($status) && $status == "Admin"){
        $data['edit_menu'] = $this->Admin_model->display_edit_menu($id);

        if(isset($submit)){
          $category = $this->input->post('category');
          $str_category = str_replace(' ', '-', $category);

          $edit_data = $this->Admin_model->edit_menu($id, $str_category);

          if($edit_data){ ?>
            <script>
              alert('Edited Menu');
              window.location.href="<?php echo site_url('admin/navigation/view'); ?>";
            </script>
    <?php }else{ ?>
            <script>
              alert('Failed');
              window.location.reload();
            </script>
    <?php }
        }else{
          $this->load->view('admin/navigation/edit', $data);
        }
      }else{
        redirect('home');
      }
    }

  }

?>
