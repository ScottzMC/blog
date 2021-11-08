<?php

class Home extends CI_Controller {

	public function index(){
		$type = "Home";
		$data['banner'] = $this->Data_model->display_banner($type);
		$data['home_post'] = $this->Data_model->display_blog_in_home();
		$data['popular_post'] = $this->Data_model->display_popular_blog_in_home();

		$submit_news = html_escape($this->input->post('subscribe_btn'));

		if(isset($submit_news)){
			$email = $this->input->post('email');
			$array = array(
				'email' => $email,
				'subscribed' => 'Yes'
			);

			$array = $this->security->xss_clean($array);

			$newsletter_data = $this->Data_model->subscribe_user_notification($array);

			if($newsletter_data){ ?>
				<script>
					alert('Subscribed Successfully');
					window.location.href="<?php echo site_url('home'); ?>";
				</script>
<?php }else{ ?>
				<script>
					alert('Subscribed Failed');
					window.location.href="<?php echo site_url('home'); ?>";
				</script>
<?php }
		}

		$this->load->view('site/home', $data);
	}
}
