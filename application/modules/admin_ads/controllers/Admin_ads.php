<?php
class Admin_ads extends AdminController {
  public function __construct()
  {
    parent::__construct();
  }
  public function leaderboard()
  {
    $data['categorys'] = $this->db->get_where('ads' , ['ads_name' => 'LA'])->result();
    $data['content'] = "admin_ads/leaderboard_v";
    $this->templates->get_admin_templates($data);
  }
  public function leaderboard_post()
  {
    define('ADS_NAME', 'LA');
    $ads_location = $this->input->post('ads_location');
    $link = $this->input->post('link');
    $alt  = $this->input->post('alt');
    $ads_image = $this->input->post('ads_image');
    foreach ($ads_location as $key => $value) {
      $data = [
        'ads_link' => $link,
        'ads_alt' => $alt,
        'ads_image' => $ads_image
      ];
      $this->db->where('ads_id', $value);
      $this->db->update('ads' , $data);
    }
    $this->session->set_flashdata('success' , 'Berhasil menambahkan Iklan');
    redirect('myadmin/ads/leaderboard');
  }
  public function home_ads()
  {
    $data['categorys'] = $this->db->get_where('ads' , ['ads_name' => 'HAA'])->result();
    $data['content'] = "admin_ads/home_v";
    $this->templates->get_admin_templates($data);
  }
  public function home_ads_post()
  {

    $ads_location = $this->input->post('ads_location');
    $link = $this->input->post('link');
    $alt  = $this->input->post('alt');
    $ads_image = $this->input->post('ads_image');
    $data = [
      'ads_link' => $link,
      'ads_alt' => $alt,
      'ads_image' => $ads_image
    ];
    $this->db->where('ads_name', $ads_location);
    $this->db->update('ads' , $data);
    $this->session->set_flashdata('success' , 'Berhasil menambahkan Iklan');
    redirect('myadmin/ads/home');
  }
  public function kanal_ads()
  {
    $data['categorys'] = $this->db->get_where('ads' , ['ads_name' => 'KAA'])->result();
    $data['content'] = "admin_ads/kanal_v";
    $this->templates->get_admin_templates($data);
  }
  public function kanal_post()
  {
    $ads_location = $this->input->post('ads_location');
    $link = $this->input->post('link');
    $ads_name = $this->input->post('ads_name');
    $alt  = $this->input->post('alt');
    $ads_image = $this->input->post('ads_image');
    foreach ($ads_location as $key => $value) {
      $data = [
        'ads_link' => $link,
        'ads_alt' => $alt,
        'ads_image' => $ads_image
      ];
      $this->db->where('ads_location', $value);
      $this->db->where('ads_name', $ads_name);
      $this->db->update('ads' , $data);
    }
    $this->session->set_flashdata('success' , 'Berhasil menambahkan Iklan');
    redirect('myadmin/ads/kanal');
  }
  public function article_ads()
  {
    $data['content'] = "admin_ads/article_ads";
    $this->templates->get_admin_templates($data);
  }
  public function article_ads_post($type = "leaderboard")
  {
    $news_list = $this->input->post('news_list');
    $link = $this->input->post('link');
    $alt = $this->input->post('alt');
    $ads_image = $this->input->post('ads_image');
    foreach ($news_list as $key => $value) {
      $data = [
        'article_id' => $value,
        'ads_link' => $link,
        'ads_image' => $ads_image,
        'ads_alt' => $alt,
        'type' => $type
      ];
      $this->db->query("DELETE FROM ads_article WHERE article_id = '$value' AND type = '$type'");
      $this->db->insert('ads_article' , $data);
    }
    $this->session->set_flashdata('success' , 'Berhasil menambahkan Iklan');
    redirect('myadmin/ads/article');
  }
}
?>
