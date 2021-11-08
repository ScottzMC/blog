<?php

  class Post extends CI_Controller{

    public function view(){
      $status = $this->session->userdata('ustatus');
      $data['post'] = $this->Admin_model->display_post();

      if(!empty($status) && $status == "Admin"){
        $this->load->view('admin/post/view', $data);
      }else{
        redirect('home');
      }
    }

    public function add(){
      $status = $this->session->userdata('ustatus');
      $data['menu_option'] = $this->Admin_model->display_menu();

      if(!empty($status) && $status == "Admin"){

        $submit = $this->input->post('submit_btn');

        if(isset($submit)){
          $shuffle = str_shuffle("ABCDUVXYZ");
          $unique = rand(000, 999);
          $code = $shuffle.$unique;

          $title = $this->input->post('title');
          $str_title = str_replace(' ', '-', $title);

          $category = $this->input->post('category');
          $str_category = str_replace(' ', '-', $category);

          $body = $this->input->post('body');
          $affliate = $this->input->post('affliate');
          $affliate_Status = $this->input->post('affliate_status');

          $files = $_FILES;
          $cpt1 = count($_FILES['fileToUpload']['name']);

          for($i=0; $i<$cpt1; $i++){
            $_FILES['fileToUpload']['name']= $files['fileToUpload']['name'][$i];
            $_FILES['fileToUpload']['type']= $files['fileToUpload']['type'][$i];
            $_FILES['fileToUpload']['tmp_name']= $files['fileToUpload']['tmp_name'][$i];
            $_FILES['fileToUpload']['error']= $files['fileToUpload']['error'][$i];
            $_FILES['fileToUpload']['size']= $files['fileToUpload']['size'][$i];

            $path = $_FILES['fileToUpload']['name'];

            $config1 = array(
                'upload_path'   => "./uploads/post/",
                'allowed_types' => "gif|jpg|png|jpeg",
                'overwrite'     => TRUE,
                'encrypt_name'  => FALSE,
                'max_size'      => "7000",
                'image_library'   => 'gd2',
                'maintain_ratio'  =>  TRUE
                // Can be set to particular file size
                //'max_height'    => "768",
                //'max_width'     => "1024"
            );

            $this->load->library('upload', $config1);
            $this->load->library('image_lib');
            $this->upload->initialize($config1);
            $this->image_lib->clear();
            $this->image_lib->initialize($config1);
            $this->image_lib->resize();

            $var = 1;

            $this->upload->do_upload('fileToUpload');
            $fileName = $_FILES['fileToUpload']['name'];
            //$images[] = $fileName1;
          }

          if(!$_FILES['fileToUpload']['name'][0]) {
              $fileName = "blog1.jpg";
          }

          $add_array = array(
            'title' => $str_title,
            'body' => $body,
            'category' => $str_category,
            'affliate_status' => $affliate_Status,
            'image' => $fileName
          );

          $add_data = $this->Admin_model->add_post($add_array);

          if($add_data){ ?>
            <script>
              alert('Added Post');
              window.location.href="<?php echo site_url('admin/post/view'); ?>";
            </script>
    <?php }else{ ?>
            <script>
              alert('Failed');
              window.location.reload();
            </script>
    <?php }
        }else{
          $this->load->view('admin/post/add', $data);
        }

      }else{
        redirect('home');
      }
    }

    public function edit($id){
      $status = $this->session->userdata('ustatus');
      $data['menu_option'] = $this->Admin_model->display_menu();
      $data['edit'] = $this->Admin_model->display_post_by_id($id);

      if(!empty($status) && $status == "Admin"){

        $submit = $this->input->post('submit_btn');

        if(isset($submit)){
          $shuffle = str_shuffle("ABCDUVXYZ");
          $unique = rand(000, 999);
          $code = $shuffle.$unique;

          $title = $this->input->post('title');
          $str_title = str_replace(' ', '-', $title);

          $category = $this->input->post('category');
          $str_category = str_replace(' ', '-', $category);

          $body = $this->input->post('body');
          $affliate_status = $this->input->post('affliate_status');

          $files = $_FILES;
          $cpt1 = count($_FILES['fileToUpload']['name']);

          for($i=0; $i<$cpt1; $i++){
            $_FILES['fileToUpload']['name']= $files['fileToUpload']['name'][$i];
            $_FILES['fileToUpload']['type']= $files['fileToUpload']['type'][$i];
            $_FILES['fileToUpload']['tmp_name']= $files['fileToUpload']['tmp_name'][$i];
            $_FILES['fileToUpload']['error']= $files['fileToUpload']['error'][$i];
            $_FILES['fileToUpload']['size']= $files['fileToUpload']['size'][$i];

            $path = $_FILES['fileToUpload']['name'];

            $config1 = array(
                'upload_path'   => "./uploads/post/",
                'allowed_types' => "gif|jpg|png|jpeg",
                'overwrite'     => TRUE,
                'encrypt_name'  => FALSE,
                'max_size'      => "7000",
                'image_library'   => 'gd2',
                'maintain_ratio'  =>  TRUE
                // Can be set to particular file size
                //'max_height'    => "768",
                //'max_width'     => "1024"
            );

            $this->load->library('upload', $config1);
            $this->load->library('image_lib');
            $this->upload->initialize($config1);
            $this->image_lib->clear();
            $this->image_lib->initialize($config1);
            $this->image_lib->resize();

            $var = 1;

            $this->upload->do_upload('fileToUpload');
            $fileName = $_FILES['fileToUpload']['name'];
            //$images[] = $fileName1;
          }

          if(isset($fileName) && !empty($fileName)){
            $edit_image = $this->Admin_model->edit_post_image($id, $fileName);
          }else if(!isset($fileName) && empty($fileName)){
            $edit_image = $this->Admin_model->edit_post_image($id, $banner);
          }

          $edit_title = $this->Admin_model->edit_post_title($id, $str_title);
          $edit_affliate = $this->Admin_model->edit_post_affliate($id, $affliate_status);
          $edit_category = $this->Admin_model->edit_post_category($id, $str_category);
          $edit_content = $this->Admin_model->edit_post_content($id, $body);

          if($edit_title || $edit_affliate || $edit_category || $edit_content){ ?>
            <script>
              alert('Edited Post');
              window.location.href="<?php echo site_url('admin/post/view'); ?>";
            </script>
    <?php }else{ ?>
            <script>
              alert('Failed');
              window.location.reload();
            </script>
    <?php }
        }else{
          $this->load->view('admin/post/edit', $data);
        }
      }else{
        redirect('home');
      }
    }

    public function delete_post(){
      $id = $this->input->post('deleted_id');
      $this->Admin_model->delete_post($id);
    }
  }

?>
