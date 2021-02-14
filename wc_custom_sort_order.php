<?php
/*
* Customize WooCommerce's products sort order
*
* @param    string        $sort_by    default sort order
* @return   string        custom sort order
* @access   public
* @author   Federico Dondi
* @version  1.0
*/
function wc_custom_sort_order($sort_by)
{
  if (is_shop() ||
      is_product_category())
  {
    return 'date'; // menu_order | popularity | rating | date | price | price-desc | rand
  }
  
  return $sort_by;
}

add_filter('woocommerce_default_catalog_orderby', 'wc_custom_sort_order');
?>

