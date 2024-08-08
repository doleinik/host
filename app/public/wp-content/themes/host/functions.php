<?php
function localize_ajax_url()
{
    wp_localize_script('jquery', 'ajax_object', array('ajax_url' => admin_url('admin-ajax.php')));
}

add_action('wp_enqueue_scripts', 'localize_ajax_url');

require_once 'init/post-types.php';
