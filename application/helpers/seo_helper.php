<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * SEO Helper function
 *
 * Generates Meta tags for SEO
 *
 * @author    Henrik Oldenborg | Modify by tarikh
 * @version   1.0
 */

/**
 * meta_tags()
 *
 * Generates tags for title, description and robots
 * Using title and description from config file as default
 *
 * @access  public
 * @param   string  Title
 * @param   string  Description (155 characters)
 * @param   bool    Robots follow or no folow
 */

if(! function_exists('meta_tags')){
  function meta_tags($meta = [])
  {
    $CI =& get_instance();
    $CI->config->load('seo_config');

    if(!isset($meta['title']))
      $meta['title'] = $CI->config->item('seo_title');

    if(!isset($meta['desc']))
      $meta['desc'] = $CI->config->item('seo_desc');

    if(!isset($meta['robot']))
      $meta['robot'] = $CI->config->item('seo_robot');

    if(!isset($meta['image']))
      $meta['image'] = $CI->config->item('seo_image');

    if(!isset($meta['keywords']))
      $meta['keywords'] = $CI->config->item('seo_keywords');

    $html = '';

    //uses default set in seo_config.php

    $html .= '<title>'.$meta['title'].' - ' . $CI->config->item('client_name') . '</title>'."\n\t\t";
    $html .= '<meta name="title" content="'.$meta['title']. ' - ' .$CI->config->item('client_name'). '" . />'."\n\t\t";
    $html .= '<meta name="description" content="'.$meta['desc'].'"/>'."\n\t\t";
    $html .= '<meta name="keywords" content="'.$meta['keywords'].'">'."\n\t\t";
    $html .= '<link rel="canonical" href="'.current_url().'" />'."\n\t\t";
    $html .= '<meta property="og:url" content="'.current_url().'">'."\n\t\t";
    $html .= '<meta property="fb:app_id" content="167418833747986">'."\n\t\t";
    $html .= '<meta property="og:image" content="'.base_url($meta['image']).'">'."\n\t\t";
    $html .= '<meta property="og:description" content="'.$meta['desc'].'">'."\n\t\t";
    $html .= '<meta property="og:title" content="'.$meta['title'].'">'."\n\t\t";
    $html .= '<meta property="og:site_name" content="'.$meta['title'].'">'."\n\t\t";
    $html .= '<meta property="og:see_also" content="'.base_url().'">'."\n\t\t";
    $html .= '<meta name="twitter:card" content="summary">'."\n\t\t";
    $html .= '<meta name="twitter:url" content="'.current_url().'">'."\n\t\t";
    $html .= '<meta name="twitter:title" content="'.$meta['title']. '">'."\n\t\t";
    $html .= '<meta name="twitter:description" content="'.$meta['desc']. '">'."\n\t\t";
    $html .= '<meta name="twitter:image" content="'.base_url($meta['image']). '">'."\n\t\t";
    if($meta['robot'] == true){
      $html .= '<meta name="robots" content="index,follow"/>'."\n\t\t";

    } else {
      $html .= '<meta name="robots" content="noindex,nofollow"/>'."\n";
    }
    echo $html;
  }
}

/* End of file seo_helper.php */
/* Location: ./application/helpers/seo_helper.php */
