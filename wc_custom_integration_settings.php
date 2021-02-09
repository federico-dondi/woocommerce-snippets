<?php
/**
* customize the WooCommerce > Settings > Integrations options
*
* @param  	  array  $integrations  WooCommerce default Integrations options
* @return     array  the updated options
* @author     Federico Dondi
* @copyright	Federico Dondi - 29/01/2021
* @version    1.0
*/
function wc_custom_integration_settings($integrations)
{
  array_push($integrations, ...);
  array_push($integrations, ...);

  return $integrations;
}

add_filter('woocommerce_integrations', 'wc_custom_integration_settings', 10, 1);
?>