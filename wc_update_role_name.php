<?php
/**
* visually rename a WooCommerce user role
*
* @param  	  string  $role     the role to visually rename.
* @param      string  $new_name the renaming value.
* @return     bool    true if renaming was successful, false otherwise
* @author     Federico Dondi
* @copyright	Federico Dondi - 29/01/2021
* @version    1.0
*/
function wc_update_role_name($role, $new_name)
{
  if ($role != 'shop_manager' ||
      $role != 'customer')
      return false;

  global $wp_roles;

	if (isset($wp_roles) == false)
            $wp_roles = new WP_Roles();
            
  $wp_roles->roles[$role]['name'] = $new_name;
  $wp_roles->role_names[$role] = $new_name;

  return true;
}

add_action('init', function()
{
  wc_update_role_name('shop_manager', 'WooCommerce Administrator');
  wc_update_role_name('customer', 'WooCommerce Customer');
});
?>