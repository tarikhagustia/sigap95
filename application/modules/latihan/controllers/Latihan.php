<?php
class Latihan extends MX_Controller
{
    public function index()
    {
      $config['image_library'] = 'gd2';
      $config['source_image'] = 'assets/images/news/Screenshot_10.png';
      $config['create_thumb'] = TRUE;
      $config['maintain_ratio'] = TRUE;
      $config['width']         = 120;
      $config['height']       = 90;
      $this->load->library('image_lib', $config);
      $this->image_lib->resize();
    }
}
?>
