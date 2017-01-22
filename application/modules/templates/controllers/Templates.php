<?php
class Templates extends FrontEndController
{
  public function __construct()
  {
    parent::__construct();
  }
  public function get_news_templates($data = null)
  {
    $this->load->view('main_v', $data);
  }
  public function get_mainteance_templates()
  {
    $this->load->view('mainteance_v');
  }
  public function get_admin_templates($data)
  {
    $this->load->view('admin_v', $data);
  }
  public function get_admin_login_templates($data)
  {
    $this->load->view('admin_login_v', $data);
  }
  public function get_user_login_templates($data)
  {
    $this->load->view('user_login_v', $data);
  }
  public function get_user_register_templates($data)
  {
    $this->load->view('user_register_v', $data);
  }
}
