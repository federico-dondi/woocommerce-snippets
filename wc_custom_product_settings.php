<?php
/**
* customize the WooCommerce > Settings > Products options
*
* @param  	  array  $settings  WooCommerce default Product settings
* @return     array  the updated options
* @author     Federico Dondi
* @copyright	Federico Dondi - 29/01/2021
* @version    1.0
*/
function wc_custom_product_settings($settings)
{
  $option_id = array(
    'title' => __('Sales Page', 'wc_sales_page'),
    'id' => 'wc_sales_page',
    'type' => 'single_select_page',
    'default' => '',
    'class' => 'wc-enhanced-select-nostd',
    'css' => 'min-width: 300px;',
    'desc' => 'Description which appears under the input.',
    'desc_tip' => __('Description which appears when hovering over (?) icon.', 'wc_sales_page')
  );

  $offset = 0;
  $length = 2;

  $modified_settings = array_slice($settings, $offset, $length, true);
  	                   array_push($modified_settings, $option_id);                       

  return array_merge($modified_settings, array_slice($settings, $length, count($settings), true));
}

add_filter('woocommerce_product_settings', 'wc_custom_product_settings', 10, 1);
?>