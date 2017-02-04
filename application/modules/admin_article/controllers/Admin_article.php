<?php
class Admin_article extends AdminController {
  public function __construct()
  {
    parent::__construct();
    $this->load->library(['format', 'slim']);
  }
  public function new_article()
  {
    $data['content'] = 'admin_article/new_v';
    $this->templates->get_admin_templates($data);
  }
  public function save_article()
  {
    $images = Slim::getImages();
    if ($images == false) {
      // Videos
      $url = "https://img.youtube.com/vi/".$this->input->post('article_video')."/default.jpg";
      $upload_dir = "assets/images/news/".$this->input->post('article_video') . ".jpg";
      file_put_contents($upload_dir, file_get_contents($url));
      $yt_embed = "https://www.youtube.com/embed/" . $this->input->post('article_video');
      $data = [
        'article_url' => $this->format->seoUrl($this->input->post('article_name')),
        'article_name' => $this->input->post('article_name'),
        'article_image_caption' => $this->input->post('article_caption'),
        'author_name' => $this->input->post('author_name'),
        'article_summary' => $this->input->post('article_summary'),
        'created_at' => date('Y-m-d H:i:s'),
        'article_type' => "video",
        'article_image_thumb' => $upload_dir,
        'article_video' => $yt_embed,
        'article_desc' => $this->input->post('article_desc')
      ];
      $this->db->insert('article', $data);
      $id = $this->db->insert_id();
      /* Insert to canals */
      foreach ($this->input->post('kanals') as $key => $value) {
        $batch[] = [
          'article_id' => $id,
          'category_id' => $value
        ];
      }
      $this->db->insert_batch('canal', $batch);
      $this->session->set_flashdata('success', 'Berhasil menambahkan Artikel baru');
      redirect('myadmin/article/list');
    } else {
        foreach ($images as $image) {
            $file = Slim::saveFile($image['output']['data'], $this->format->url_dash($image['input']['name']) , 'assets/images/news/');
        }
        $news_thumb = $file['path'];
        $get_name_file = explode('.', $file['name']);
        $get_name_file = "assets/images/news/" . $get_name_file[0] . "_thumb." . $get_name_file[1];
        $article_image_thumb = $get_name_file;
        // make thumbanil
        $config['image_library'] = 'gd2';
        $config['source_image'] = $news_thumb;
        $config['create_thumb'] = TRUE;
        $config['maintain_ratio'] = TRUE;
        $config['width']         = 120;
        $config['height']       = 90;
        $this->load->library('image_lib', $config);
        $this->image_lib->resize();

        $data = [
          'article_url' => $this->format->seoUrl($this->input->post('article_name')),
          'article_name' => $this->input->post('article_name'),
          'article_image_caption' => $this->input->post('article_caption'),
          'author_name' => $this->input->post('author_name'),
          'article_summary' => $this->input->post('article_summary'),
          'article_image_thumb' => $article_image_thumb,
          'created_at' => date('Y-m-d H:i:s'),
          'article_type' => "article",
          'article_image' => $news_thumb,
          'article_desc' => $this->input->post('article_desc')
        ];
        $this->db->insert('article', $data);
        $id = $this->db->insert_id();
        /* Insert to canals */
        foreach ($this->input->post('kanals') as $key => $value) {
          $batch[] = [
            'article_id' => $id,
            'category_id' => $value
          ];
        }
        $this->db->insert_batch('canal', $batch);
        $this->session->set_flashdata('success', 'Berhasil menambahkan Artikel baru');
        redirect('myadmin/article/list');
    }
  }
  public function list_()
  {
    $materis = $this->db->get('article')->result();
    $data['materis'] = $materis;
    $data['content'] = 'admin_article/list_v';
    $this->templates->get_admin_templates($data);
  }
  public function hapus($article_id)
  {
    $this->load->helper('file');
    $data = $this->db->get_where('article', ['article_id' => $article_id])->row();
    unlink("./".$data->article_image);
    $this->db->delete('article' , ['article_id' => $article_id]);
    $this->session->set_flashdata('success', 'Berhasil menghapus data');
    redirect('myadmin/article/list');
  }
  public function edit_view($article_id = null)
  {
    $data['content'] = 'admin_article/edit_v';
    $data['article'] = $this->db->get_where('article', ['article_id' =>  $article_id])->row();
    $this->templates->get_admin_templates($data);
  }

  public function edit_save()
  {
    $images = Slim::getImages();
    if ($images == false) {
        show_404();
    } else {
        foreach ($images as $image) {
            $file = Slim::saveFile($image['output']['data'], $this->format->url_dash($image['input']['name']) , 'assets/images/news/');
        }
        $news_thumb = $file['path'];
        $data = [
          'article_url' => $this->format->seoUrl($this->input->post('article_name')),
          'article_name' => $this->input->post('article_name'),
          'article_image_caption' => $this->input->post('article_caption'),
          'author_name' => $this->input->post('author_name'),
          'article_summary' => $this->input->post('article_summary'),
          'created_at' => date('Y-m-d H:i:s'),
          'article_type' => "article",
          'article_image' => $news_thumb,
          'article_desc' => $this->input->post('article_desc')
        ];
        $this->db->where('article_id' , $this->input->post('article_id'));
        $this->db->update('article', $data);
        $id = $this->input->post('article_id');
        /* Insert to canals */
        $this->db->query('DELETE FROM canal WHERE article_id = "'.$id.'"');
        foreach ($this->input->post('kanals') as $key => $value) {
          $batch = [
            'article_id' => $id,
            'category_id' => $value
          ];
          $this->db->insert('canal', $batch);
        }
        $this->session->set_flashdata('success', 'Berhasil menambahkan Artikel baru');
        redirect('myadmin/article/list');
    }
  }
  public function get_artilce($type = 'article')
  {
    $judul  = $this->input->get('article_name');
    $this->db->select('article_id, article_name');
    $this->db->from('article');
    $this->db->where('article_type' , $type);
    $this->db->like('article_name', $judul, '%');
    $this->db->order_by('article_name', 'ASC');
    $get = $this->db->get();
    // var_dump($get->result());
    $article = [];
    foreach ($get->result_array() as $key => $value) {
      $article[$key]['article_id'] = $value['article_id'];
      $article[$key]['article_name'] = $value['article_name'];
    }
    $this->output
        ->set_content_type('application/json')
        ->set_output(json_encode($article));
  }
}
