<?php
/*
Plugin Name: plug-in projet 2
Plugin URI: https://mon-siteweb.com/
Description: plug-in de style ou de gestion d'artiste de festival
Author: jemappellepaul
Version: 1.0
Author URI: http://mon-siteweb.com/
*/

register_activation_hook(__FILE__, function () {
    // Je suis activé
    touch(__DIR__ . '/Gestion');
 });

 register_deactivation_hook(__FILE__, function () {
    // Je suis désactivé
    unlink(__DIR__ . '/Gestion');
 });

 

 function plugin_init() {
    register_post_type('Gestion', [
         'label' => 'GDAs',
         'public' => true,
         'menu_position' => 3,
         'menu_icon' => 'dashicons-megaphone',
         'supports' => [''],
         'show_in_rest' => false,
         'has_archive' => true,
    ]);
   }
   add_action('init', 'plugin_init')
?>
