<?php
class Admin_featured extends AdminController
{
  public function __construct()
  {
    parent::__construct();
  }
  public function index()
  {
      $this->db->select('article_name, featured_video.created_at, category_name')->from('featured_video')
      ->join('article' , 'featured_video.article_id = article.article_id')
      ->join('category' , 'category.category_id = featured_video.category_id', 'LEFT');
      $get = $this->db->get();
      $data['featured'] = $get->result();
      $data['content'] = 'admin_featured/new_v';
      $this->templates->get_admin_templates($data);
  }
  public function simpan()
  {
    $news_list = $this->input->post('news_list');
    if ($this->input->post('category') == "") {
      $category_id = NULL;
      $this->db->query('DELETE FROM featured_video WHERE category_id IS NULL');
    }else{
      $category_id = $this->input->post('category');
      $this->db->query('DELETE FROM featured_video WHERE category_id = "'.$category_id.'"');
    }
    foreach ($news_list as $key => $value) {
      $insert[] = [
        "category_id" => $category_id,
        "article_id" => $value
      ];
    }
    $this->db->insert_batch('featured_video', $insert);
    $this->session->set_flashdata('success' , 'berhail menambahkan fetured video ke halaman home');
    redirect('myadmin/featured/home/video');
  }
}
 ?>
