<?php
/**
* customize WooCommerce's page breadcrumb
*
* @param  	  array  $crumbs original breadcrumbs
* @return     array  updated breadcrumbs
* @author     Federico Dondi
* @copyright	Federico Dondi - 29/01/2021
* @version    1.0
*/
function wc_custom_page_breadcrumb($crumbs)
{
  $page_id = get_option('custom_page_id');

  $crumbs[] = array(
    get_the_title($page_id), 
    get_permalink($page_id)
  );

  return $crumbs;
}

add_filter('woocommerce_get_breadcrumb', 'wc_custom_page_breadcrumb', 10, 1);
?>