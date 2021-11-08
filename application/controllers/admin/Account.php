<?php

  class Account extends CI_Controller{

    public function login(){
      $this->form_validation->set_rules('email', 'Email Address', 'trim|valid_email');
      $this->form_validation->set_rules('password', 'Password', 'trim');

      $form_valid = $this->form_validation->run();
      $submit_login = $this->input->post('submit_btn');

      if($form_valid == FALSE){
        $this->load->view('admin/account/login');
      }else if(isset($submit_login)){
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $uresult = $this->Admin_model->validate($email, $password);
        if(count($uresult) > 0){
          $sess_data = array(
          'login' => TRUE,
          'uid' => $uresult[0]->id,
          'uemail' => $uresult[0]->email,
          'ustatus' => $uresult[0]->status
         );

         /*$cookie = array(
          'name'   => 'remember_me_token',
          'value'  => 'asokb0ro04mob00i3',
          'expire' => '720000000',
          'domain' => 'http://localhost/ClientProjects/BrainStorming',
          'path'   => '/'
          );

          set_cookie($cookie);*/
          $this->session->set_userdata($sess_data);
          $status = $this->session->userdata('ustatus');
          redirect('admin/dashboard');
        }else{ ?>
          <script>
            alert('Login Failed');
            window.location.href="<?php echo site_url('admin/account/login'); ?>";
          </script>
  <?php }
      }
    }

    public function register(){
      $this->form_validation->set_rules('email', 'Email Address', 'trim|valid_email|is_unique[tbl_user.email]');
      $this->form_validation->set_rules('password', 'Password', 'trim');
      $this->form_validation->set_rules('cpassword', 'Confirm Password', 'trim|matches[password]');

      $form_valid = $this->form_validation->run();
      $submit_register = $this->input->post('submit_btn');

      if($form_valid == FALSE){
        $this->load->view('admin/account/register');
      }else if(isset($submit_register)){
        $firstname = $this->input->post('firstname');
        $lastname = $this->input->post('lastname');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $hashed_password = $this->bcrypt->hash_password($password);

        $add_array = array(
          'firstname' => $firstname,
          'lastname' => $lastname,
          'email' => $email,
          'password' => $hashed_password,
        );

        $add_data = $this->Admin_model->create_user($add_array);

        if($add_data){ ?>
          <script>
            alert('Created Successfully');
            window.location.href="<?php echo site_url('login'); ?>";
          </script>
  <?php }else{ ?>
          <script>
            alert('Could not Create');
            window.location.reload();
          </script>
  <?php }
      }
    }

    public function logout(){
      // destroy session
      $data = array('login' => '', 'uid' => '', 'uemail' => '', 'ustatus' => '');
      $this->session->unset_userdata($data);
      $this->session->sess_destroy();
      #delete_cookie('remember_me_token', 'http://localhost/ClientProjects/Soup', '/');
      redirect('admin/account/login');
    }
  }

?>
