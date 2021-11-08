<?php

  class Post extends CI_Controller{

    public function detail($id, $title){
      $data['detail'] = $this->Data_model->display_post_by_title($id, $title);
      $data['comment'] = $this->Data_model->display_comment_by_title($id);

      $submit = $this->input->post('submit_btn');

      if(isset($submit)){
        $fullname = html_escape($this->input->post('fullname'));
        $body = html_escape($this->input->post('body'));
        $date = date('Y-m-j H:i:s');

        $add_array = array(
          'post_id' => $id,
          'fullname' => $fullname,
          'body' => $body,
          'created_date' => $date
        );

        $add_array = $this->security->xss_clean($add_array);

        $add_comment_data = $this->Data_model->add_comment($add_array);

        if($add_comment_data){ ?>
          <script>
          alert('Commented Successfully');
          window.location.href="<?php echo site_url('post/detail/'.$id.'/'.$title); ?>";
          </script>
  <?php }else{ ?>
          <script>
          alert('Comment was Unsuccessful');
          window.location.href="<?php echo site_url('post/detail/'.$id.'/'.$title); ?>";
          </script>
  <?php }
      }

      $this->load->view('site/post/detail', $data);
    }

    public function category($category){

      if(!empty($category)){
        $config['base_url'] = base_url()."post/category";
        $total_row = $this->Data_model->record_category_count();
        $config['total_rows'] = $total_row;
        $config['per_page'] = 8;
        $config['uri_segment'] = 4;
        $choice = $config['total_rows']/$config['per_page'];
        $config['num_links'] = round($choice);

        $config['full_tag_open'] = '<ul class="pagination flex-wrap">';
        $config['full_tag_close'] = '</ul>';

        $config['first_tag_open'] = '<li class="page-item"><a class="page-link">';
        $config['last_tag_open'] = '<li class="page-item"><a class="page-link">';

        $config['next_tag_open'] = '<li class="page-item"><a class="page-link"><i class="fa fa-chevron-right">';
        $config['prev_tag_open'] = '<li class="page-item"><a class="page-link"><i class="fa fa-chevron-left">';

        $config['num_tag_open'] = '<li class="page-item"><a class="page-link">';
        $config['num_tag_close'] = '</li><a>';

        $config['first_tag_close'] = '</a></li>';
        $config['last_tag_close'] = '</a></li>';

        $config['next_tag_close'] = '</i></a></li>';
        $config['prev_tag_close'] = '<i></a></li>';

        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link">';
        $config['cur_tag_close'] = '</a></li>';

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(4))? $this->uri->segment(4) : 0;

        $data["category"] = $this->Data_model->fetch_category_data($config["per_page"], $page, $category);

        $this->load->view('site/post/category', $data);
      }else{
        show_404();
      }
    }

    public function search(){
      $search_query = $this->input->post('search_query');

      $config['base_url'] = base_url()."post/search";
      $total_row = $this->Data_model->record_search_count();
      $config['total_rows'] = $total_row;
      $config['per_page'] = 8;
      $config['uri_segment'] = 3;
      $choice = $config['total_rows']/$config['per_page'];
      $config['num_links'] = round($choice);

      $config['full_tag_open'] = '<ul class="pagination flex-wrap">';
      $config['full_tag_close'] = '</ul>';

      $config['first_tag_open'] = '<li class="page-item"><a class="page-link">';
      $config['last_tag_open'] = '<li class="page-item"><a class="page-link">';

      $config['next_tag_open'] = '<li class="page-item"><a class="page-link"><i class="fa fa-chevron-right">';
      $config['prev_tag_open'] = '<li class="page-item"><a class="page-link"><i class="fa fa-chevron-left">';

      $config['num_tag_open'] = '<li class="page-item"><a class="page-link">';
      $config['num_tag_close'] = '</li><a>';

      $config['first_tag_close'] = '</a></li>';
      $config['last_tag_close'] = '</a></li>';

      $config['next_tag_close'] = '</i></a></li>';
      $config['prev_tag_close'] = '<i></a></li>';

      $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link">';
      $config['cur_tag_close'] = '</a></li>';

      $this->pagination->initialize($config);

      $page = ($this->uri->segment(3))? $this->uri->segment(3) : 0;

      $data['total'] = $this->Data_model->record_search_count_result($search_query);
      $data["search"] = $this->Data_model->fetch_search_data($config["per_page"], $page, $search_query);

      $this->load->view('site/post/search', $data);
    }
  }

?>
