<?php
/**
* uncheck "Terms & Conditions" checkbox by default
*
* @param  	  void
* @return     void
* @author     Federico Dondi
* @copyright	Federico Dondi - 29/01/2021
* @version    1.0
*/
add_filter('woocommerce_terms_is_checked_default', '__return_false', 10);
?>