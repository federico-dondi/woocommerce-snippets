<?php
/**
* Customize taxonomy query used by WOOF Product Filter plugin
*
* @param      array       $tax_query    the taxonomy query object used by WOOF
* @return     array       updated query
* @author     Federico Dondi
* @copyright	Federico Dondi - 09/02/2021
* @version    1.0
*/
function wc_woof_product_filter_custom_query($tax_query)
{
  if (is_search()) return;

  if (is_shop() ||
      is_product_category())
  {
    $tax_query[] = array(
      'taxonomy' => 'product_tag',
      'field' => 'slug',
      'terms' => array('slug-1', 'slug-2'),
      'operator' => 'NOT IN'
    );
  }

  return $tax_query;
}

add_filter('woof_get_tax_query', 'wc_woof_product_filter_custom_query');
?>