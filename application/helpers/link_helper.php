<?php
if (!function_exists('link_article')) {
  function link_article($link)
  {
    $ci = &get_instance();
    $type = $ci->config->item('link_type');
    $parse = $ci->config->item('link_parse');
    $link = base_url($parse . $link . "." . $type);
    return $link;
  }
}
?>
