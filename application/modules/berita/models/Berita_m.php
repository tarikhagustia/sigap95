<?php
class Berita_m extends CI_Model
{
  public function __construct()
  {
    parent::__construct();
  }
  private function get_category_id($kanal_name)
  {

  }
  public function get_feed($category_url)
  {
    $this->db->select('article_url, article.article_id, category.category_id, article_name, article_image_thumb, article.created_at, article_view , article_summary');
    $this->db->from('article');
    $this->db->join('canal', 'article.article_id = canal.article_id');
    $this->db->join('category', 'canal.category_id = category.category_id');
    if($category_url != null):
      $this->db->where('category.category_url', $category_url);
    endif;
    $this->db->order_by('article.created_at', 'DESC');
    $this->db->group_by('article.article_id');
    $this->db->limit(20);
    $get = $this->db->get()->result();
    return $get;
  }
  public function get_popular($kanal)
  {
    $this->db->select('article_url, article.article_id, category.category_id, article_name, article_image_thumb, article.created_at, article_view , article_summary');
    $this->db->from('article');
    $this->db->join('canal', 'article.article_id = canal.article_id');
    $this->db->join('category', 'canal.category_id = category.category_id');
    if($kanal != null):
      $this->db->where('category.category_url', $kanal);
    endif;
    $this->db->where('DATEDIFF(CURDATE(), article.created_at) <=', 7);
    // $this->db->where('article_view >=', 150);
    $this->db->group_by('article.article_id');
    $this->db->order_by('article_view', 'DESC');
    $this->db->limit(6);
    $get = $this->db->get()->result();
    return $get;
  }
  public function get_tkp($kanal)
  {
    $this->db->select('fn_indeph.`indeph_id`, fn_news.news_id, news_title, news_url, news_thumb, news_desc, fn_category.category_id')
    ->from('fn_indeph')
    ->join('fn_news', 'fn_indeph.news_id = fn_news.news_id')
    ->join('fn_pages', 'fn_pages.news_id = fn_news.news_id')
    ->join('fn_category', 'fn_pages.category_id = fn_category.category_id');
    // ->where('date_from <=' , date('Y-m-d H:i:s'))
    // ->where('date_to >=', date('Y-m-d H:i:s'))
    if($kanal != NULL):
      $this->db->where('fn_category.category_name' , $kanal);
    endif;
    $this->db->order_by('indeph_timestamp', 'DESC');
    $get = $this->db->get()->row();
    return $get;
  }
  public function get_peoplesay($kanal)
  {
    $this->db->select('news_title, news_url, news_thumb, news_desc, peoplesay.created_at')->from('fn_news')
    ->join('peoplesay', 'fn_news.news_id = peoplesay.news_id');
    $get = $this->db->get()->result();
    return $get;
  }
  public function get_breaking($kanal)
  {
    if($kanal == null):
      $this->db->select('article_name, article_url, article_image, article.created_at, category.category_name')
      ->from('breaking')
      ->join('article', 'breaking.article_id = article.article_id')
      ->join('canal' , 'canal.article_id = article.article_id', 'LEFT')
      ->join('category', 'canal.category_id = category.category_id', 'LEFT')
      ->where('breaking.category_id', null)
      ->group_by('article.article_id');
      $get = $this->db->get()->result();
      return $get;
    else:
      $this->db->select('article_name, article_url, article_image, article.created_at, category.category_name')
      ->from('breaking')
      ->join('article', 'breaking.article_id = article.article_id')
      ->join('canal' , 'canal.article_id = article.article_id', 'LEFT')
      ->join('category', 'canal.category_id = category.category_id', 'LEFT')
      ->where('category.category_url' , $kanal)
      ->group_by('article.article_id');
      $get = $this->db->get()->result();
      return $get;
    endif;
  }

  public function get_aktualitas($kanal)
  {
    $this->db->select('news_title, news_url, news_thumb, news_desc')->from('fn_news')
    ->join('aktualitas', 'fn_news.news_id = aktualitas.news_id');
    $get = $this->db->get()->row();
    return $get;
  }
  public function get_wiskul()
  {
    $this->db->select('news_title, news_url, news_thumb, news_timestamp')
    ->from('fn_category')
    ->join('fn_pages', 'fn_pages.category_id = fn_category.category_id')
    ->join('fn_news', 'fn_pages.news_id = fn_news.news_id')
    ->where('category_name', 'wisata-kuliner')
    ->order_by('news_timestamp', 'DESC')
    ->limit(6);
    $get = $this->db->get()->result();
    return $get;
  }
  public function get_peristiwa()
  {
    $this->db->select('fokus_comment, fn_fokus.fokus_id, fokus_url, fokus_name')->from('fn_fokus')
    ->join('fn_news', 'fn_news.fokus_id = fn_fokus.fokus_id')
    ->join('fn_pages', 'fn_news.news_id = fn_pages.news_id')
    ->join('fn_category', 'fn_category.category_id = fn_category.category_id')
    ->group_by('fn_fokus.fokus_id')
    ->order_by('fokus_timestamp', 'DESC')
    ->limit(10);
    $get = $this->db->get()->result();
    return $get;
  }
  public function get_penelusuran()
  {
    $this->db->select('news_title, news_url, news_desc')->from('penelusuran')
    ->join('fn_news', 'penelusuran.news_id = fn_news.news_id');
    $get = $this->db->get()->row();
    return $get;
  }
  public function get_footer_canal($canal)
  {
    $this->db->select('article_url, article.article_id, category.category_id, article_name, article_image, article.created_at, article_view , article_summary, category_name');
    $this->db->from('article');
    $this->db->join('canal', 'article.article_id = canal.article_id');
    $this->db->join('category', 'canal.category_id = category.category_id');
    $this->db->where('category.category_url', $canal);
    $this->db->where('DATEDIFF(CURDATE(), article.created_at) <=', 7);
    $this->db->order_by('article.created_at', 'DESC');
    $this->db->group_by('article.article_id');
    $this->db->limit(4);
    $get = $this->db->get()->result();
    return $get;
  }
  public function get_featured_video($kanal)
  {
    $this->db->select('article_video, article_url, article.article_id, category.category_id, article_name, article_image, article.created_at, article_view , article_summary, category_name');
    $this->db->from('featured_video');
    $this->db->join('article', 'article.article_id = featured_video.article_id');
    $this->db->join('canal', 'article.article_id = canal.article_id');
    $this->db->join('category', 'canal.category_id = category.category_id');
    if ($kanal == null) {
      $this->db->where('featured_video.category_id', $kanal);
    }else{
      $this->db->where('category.category_url', $kanal);
    }
    $get = $this->db->get()->row();
    return $get;
  }
}
 ?>
