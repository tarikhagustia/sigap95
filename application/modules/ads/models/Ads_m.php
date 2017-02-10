<?php
class Ads_m extends CI_Model
{
  public function get_leaderboard($kanal)
  {
    $this->db->select('*')->from('ads');
    $this->db->where('ads_location', $kanal);
    $this->db->where('ads_name', 'LA');
    $get = $this->db->get()->row();
    return $get;
  }
  public function get_haa()
  {
    $query = $this->db->get_where('fn_layout', ['layout_name' => 'HAA']);
    return $query;
  }
  public function get_hab()
  {
    $query = $this->db->get_where('fn_layout', ['layout_name' => 'HAB']);
    return $query;
  }
  public function get_kaa($kanal)
  {
    $query = $this->db->get_where('fn_layout', ['layout_name' => 'KAA', 'layout_location' => $kanal]);
    return $query->row();
  }
  public function get_nf($type)
  {
    $query = $this->db->get_where('fn_layout', ['layout_name' => $type]);
    return $query->row();
  }
}
 ?>
