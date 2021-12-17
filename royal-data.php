<?php
/**
 * Plugin Name: Royal Data
 * Description: Plugin para capturar la informacion de los usuarios del plugin affiliate-wp para elementor
 * Version:     1.0.0
 * Author:      Frederick Mejia
 * Author URI:  https://malwareplague.com/
 */

 function registrando_royal_data(){
    require_once( __DIR__ . '/widgets/elementor-name-royal.php' );
    require_once( __DIR__ . '/widgets/elementor-image-royal.php' );
    require_once( __DIR__ . '/widgets/elementor-whatsapp-royal.php' );
    require_once( __DIR__ . '/widgets/elementor-link-royal.php' );
    require_once( __DIR__ . '/widgets/elementor-binance-royal.php' );
    require_once( __DIR__ . '/widgets/elementor-huobi-royal.php' );
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor_Name_Royal() );
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor_Image_Royal() );
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor_Whatsapp_Royal() );
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor_Link_Royal() );
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor_Binance_Royal() );
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor_Huobi_Royal() );
 }
 function add_query_vars_filter( $vars ){
   $vars[] = "query_var_name";
   return $vars;
  }
 add_filter( 'query_vars', 'add_query_vars_filter' );
 add_action('elementor/widgets/widgets_registered','registrando_royal_data');