<?php
/**
* Hide "Out of Stock" products when using WOOF Product Filter plugin
*
* @param      array       $req    the request object used by WOOF
* @return     array       updated request
* @author     Federico Dondi
* @copyright	Federico Dondi - 09/02/2021
* @version    1.0
*/
function wc_woof_product_filter_force_stock($req)
{
  if ($req['stock'] != 'instock')
      $req['stock'] = 'instock';

  return $req;
}

add_filter('woof_get_request_data', 'wc_woof_product_filter_force_stock');
?>