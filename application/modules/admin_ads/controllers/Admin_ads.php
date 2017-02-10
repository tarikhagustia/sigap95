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
}
?>
