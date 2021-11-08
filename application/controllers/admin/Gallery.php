<?php

  class Gallery extends CI_Controller{

    public function add(){
      $status = $this->session->userdata('ustatus');
      $data['menu_option'] = $this->Admin_model->display_menu();

      if(!empty($status) && $status == "Admin"){

        $submit = $this->input->post('submit_btn');

        if(isset($submit)){
          $category = $this->input->post('category');
          $str_category = str_replace(' ', '-', $category);

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
                'upload_path'   => "./uploads/gallery/",
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
            'category' => $str_category,
            'image' => $fileName
          );

          $add_data = $this->Admin_model->add_gallery($add_array);

          if($add_data){ ?>
            <script>
              alert('Added Gallery');
              window.location.href="<?php echo site_url('admin/gallery/view'); ?>";
            </script>
    <?php }else{ ?>
            <script>
              alert('Failed');
              window.location.reload();
            </script>
    <?php }
        }else{
          $this->load->view('admin/gallery/add', $data);
        }

      }else{
        redirect('home');
      }
    }

    public function edit($id){
      $status = $this->session->userdata('ustatus');
      $data['menu_option'] = $this->Admin_model->display_menu();
      $data['edit_gallery'] = $this->Admin_model->display_gallery_by_id($id);

      if(!empty($status) && $status == "Admin"){

        $submit = $this->input->post('submit_btn');

        if(isset($submit)){
          $gal_id = $this->input->post('id');
          $category = $this->input->post('category');
          $str_category = str_replace(' ', '-', $category);
          $banner = $this->input->post('banner');

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
                'upload_path'   => "./uploads/gallery/",
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
          }

          if(isset($fileName) && !empty($fileName)){
            $edit_image = $this->Admin_model->edit_gallery_image($gal_id, $fileName);
          }else if(!isset($fileName) && empty($fileName)){
            $edit_image = $this->Admin_model->edit_gallery_image($gal_id, $banner);
          }

          $edit_category = $this->Admin_model->edit_gallery_category($gal_id, $str_category);

          if($edit_category || $edit_image){ ?>
            <script>
              alert('Edited Gallery');
              window.location.href="<?php echo site_url('admin/gallery/view'); ?>";
            </script>
    <?php }else{ ?>
            <script>
              alert('Failed');
              window.location.reload();
            </script>
    <?php }
        }else{
          $this->load->view('admin/gallery/edit', $data);
        }
      }else{
        redirect('home');
      }
    }

    public function view(){
      $status = $this->session->userdata('ustatus');
      $data['menu_option'] = $this->Admin_model->display_menu();
      $data['gallery'] = $this->Admin_model->display_gallery();

      if(!empty($status) && $status == "Admin"){
        $this->load->view('admin/gallery/view', $data);
      }else{
        redirect('home');
      }
    }

    public function delete_menu(){
      $id = $this->input->post('deleted_id');
      $this->Admin_model->delete_gallery_image($id);
    }
  }

?>
