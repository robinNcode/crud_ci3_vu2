<?php 
if (!function_exists('d')) {
    function d($data) {
        echo '<pre>';
        print_r($data);
        echo '</pre>';
    }
}

if (!function_exists('dd')) {
    function dd($data) {
        d($data);
        die();
    }
}

if (!function_exists('asset_url')) {
    function asset_url($path = '') {
        $CI =& get_instance();

        return str_replace('/index.php', '', $CI->config->base_url('assets/' . ltrim($path, '/')));
    }
}
