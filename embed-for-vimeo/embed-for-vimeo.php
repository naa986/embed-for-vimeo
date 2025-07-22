<?php
/*
Plugin Name: Embed for Vimeo
Version: 1.0.4
Plugin URI: https://noorsplugin.com/embed-for-vimeo-wordpress-plugin/
Author: naa986
Author URI: https://noorsplugin.com/
Description: Embed Vimeo videos in WordPress with arguments
Text Domain: embed-for-vimeo
Domain Path: /languages
License: GPLv2 or later 
*/

if(!defined('ABSPATH')){
    exit;
}
if(!class_exists('EMBED_FOR_VIMEO'))
{
    class EMBED_FOR_VIMEO
    {
        var $plugin_version = '1.0.4';
        var $plugin_url;
        var $plugin_path;
        function __construct()
        {
            define('EMBED_FOR_VIMEO_VERSION', $this->plugin_version);
            define('EMBED_FOR_VIMEO_SITE_URL', site_url());
            define('EMBED_FOR_VIMEO_URL', $this->plugin_url());
            define('EMBED_FOR_VIMEO_PATH', $this->plugin_path());
            $this->plugin_includes();
        }
        function plugin_includes()
        {
            add_action('plugins_loaded', array($this, 'plugins_loaded_handler'));
            add_filter('embed_oembed_html', 'embedforvimeo_process_video', 10, 4);
        }
        function plugin_url()
        {
            if($this->plugin_url){
                return $this->plugin_url;
            }
            return $this->plugin_url = plugins_url( basename( plugin_dir_path(__FILE__) ), basename( __FILE__ ) );
        }
        function plugin_path(){ 	
            if ($this->plugin_path){
                return $this->plugin_path;	
            }
            return $this->plugin_path = untrailingslashit( plugin_dir_path( __FILE__ ) );
        }
        function plugins_loaded_handler()
        {
            load_plugin_textdomain('embed-for-vimeo', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/'); 
        }              
    }
    
    new EMBED_FOR_VIMEO();
}

function embedforvimeo_process_video($html, $url, $attr, $post_ID)
{
    if(is_admin()){
        return $html;
    }
    $data = array();
    $parsed_url = parse_url($url);
    if(isset($parsed_url['query']) && !empty($parsed_url['query'])){
        parse_str($parsed_url['query'], $data);
    }
    else{
        return $html; 
    }
    $pattern = '/src="([^"]*vimeo\.com[^"]*)"/';
    $src = '';
    preg_match($pattern, $html, $matches);
    if(isset($matches[1]) && !empty($matches[1])){
        $src = $matches[1];
    }
    else{
        return $html;
    }
    //
    if(isset($data['airplay']) && $data['airplay']=="false"){
        if(strpos($src, 'airplay') === false){
            $src = add_query_arg('airplay', 'false', $src);
            $html = preg_replace($pattern, 'src="'.$src.'"', $html);
        }
    }
    //
    if(isset($data['autopause']) && $data['autopause']=="false"){
        if(strpos($src, 'autopause') === false){
            $src = add_query_arg('autopause', 'false', $src);
            $html = preg_replace($pattern, 'src="'.$src.'"', $html);
        }
    }
    //
    if(isset($data['byline']) && $data['byline']=="false"){
        if(strpos($src, 'byline') === false){
            $src = add_query_arg('byline', 'false', $src);
            $html = preg_replace($pattern, 'src="'.$src.'"', $html);
        }
    }
    //
    if(isset($data['cc']) && $data['cc']=="false"){
        if(strpos($src, 'cc') === false){
            $src = add_query_arg('cc', 'false', $src);
            $html = preg_replace($pattern, 'src="'.$src.'"', $html);
        }
    }
    //
    if(isset($data['title']) && $data['title']=="false"){
        if(strpos($src, 'title') === false){
            $src = add_query_arg('title', 'false', $src);
            $html = preg_replace($pattern, 'src="'.$src.'"', $html);
        }
    }
    //
    $html = apply_filters('embed_for_vimeo_oembed_html', $html, $url, $attr, $post_ID, $data, $src, $pattern);
    return $html; 
}
