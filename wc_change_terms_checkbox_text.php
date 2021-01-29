<?php
/**
* customize "Terms & Conditions" checkbox text
*
* @param  	  string  $text original text
* @return     string  updated text
* @author     Federico Dondi
* @copyright	Federico Dondi - 29/01/2021
* @version    1.0
*/
function wc_change_terms_checkbox_text($text)
{
  return 'Your custom T&C disclaimer.';
}

add_filter('woocommerce_get_terms_and_conditions_checkbox_text', 'wc_change_terms_checkbox_text', 10, 1);
?>