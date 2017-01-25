<?php
class Admin_headline extends AdminController
{
  public function __construct()
  {
    parent::__construct();
  }
  public function home_headline()
  {
    $this->db->select('category_id, category_name')->from('category')
    ->where('is_active', true);
    $get = $this->db->get()->result();
    $data['categorys'] = $get;
    $this->db->select('article_name, breaking.created_at, category_name')->from('breaking')
    ->join('article' , 'breaking.article_id = article.article_id')
    ->join('category' , 'category.category_id = breaking.category_id', 'LEFT');
    $get = $this->db->get();
    $data['breakings'] = $get->result();
    $data['content'] = 'admin_headline/home_headline_v';
    $this->templates->get_admin_templates($data);
  }
  public function home_headline_add()
  {

    $category = ($this->input->post('category') == "") ? null : $this->input->post('category') ;
    if ($category == null) {
      $this->db->query('DELETE FROM breaking WHERE category_id IS NULL');
    }else{
      $this->db->query('DELETE FROM breaking WHERE category_id = "'.$category.'"');
    }
    $this->db->query('DELETE FROM breaking WHERE category_id IS NULL');
    $artiel_list = $this->input->post('news_list');
    foreach ($artiel_list as $key => $value) {
      $data[] = [
        "article_id" => $value,
        "category_id" => $category
      ];
    }
    $this->db->insert_batch('breaking' , $data);
    $this->session->set_flashdata('success', 'Data disimpan');
    redirect('myadmin/headline/home');
  }
}
?>
