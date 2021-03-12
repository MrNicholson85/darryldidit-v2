<?php

/**
 * Plugin Name: Custom API
 * Plugin URI: https://darryldidit.com
 * Description: Custom API
 * Version: 1.0
 * Author: Darryl Nichoslon
 * Authoe URI: https:darryldidit.com
 */
function wl_posts() {
    $args = [
        'numberposts' => 99999,
        'post_type' => 'project'
    ];

    $posts = get_posts($args);

    $data = [];

    $i = 0;

    var_dump($posts);
    foreach($posts as $post) {
        $data[$i]['id'] = $post->ID;
        $data[$i]['title'] = $post->post_title;
        $data[$i]['project_select'] = $post->project_select;
        $i++;
    }

    return $data;
}

 add_action('rest_api_init', function(){
    register_rest_route('wl/v1', 'posts', [
        'methods' => 'GET',
        'callback' => 'wl_posts',
    ]);
 });