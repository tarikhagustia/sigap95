<?php
class Home extends BeritaController
{
  public function __construct()
  {
    parent::__construct();
  }
  public function index()
  {
    $data['content'] = "home/home_v";
    $data['kanal'] = 'home';
    $this->templates->get_news_templates($data);
  }
}
 ?>
