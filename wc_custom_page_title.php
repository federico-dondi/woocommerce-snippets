<?php
/**
* customize WooCommerce's page title
*
* @param  	  string  $title original title
* @return     string  updated title
* @author     Federico Dondi
* @copyright	Federico Dondi - 29/01/2021
* @version    1.0
*/
function wc_custom_page_title($title)
{
  return 'Your custom WooCommerce\' page title.';
}

add_filter('woocommerce_page_title', 'wc_custom_page_title', 10, 1);
?>