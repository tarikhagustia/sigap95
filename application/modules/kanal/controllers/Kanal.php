<?php
class Kanal extends BeritaController
{
  public function __construct()
  {
    parent::__construct();
  }
  public function show_kanal($kanal = null)
  {
    $kanal_name = $this->db->get_where('category', ['category_url' => $kanal])->row();
    if(empty($kanal)): show_404(); endif;
    $data['meta']['title'] = $kanal_name->category_name;
    $data['content'] = 'kanal/kanal_v';
    $data['kanal'] = $kanal;
    $this->templates->get_news_templates($data);
  }
}
?>
