<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class App extends Controller
{
    protected $acf = true;

    public function siteName()
    {
        return get_bloginfo('name');
    }

    public static function title()
    {
        if (is_home()) {
            if ($home = get_option('page_for_posts', true)) {
                return get_the_title($home);
            }
            return __('Latest Posts', 'sage');
        }
        if (is_archive()) {
            return get_the_archive_title();
        }
        if (is_search()) {
            return sprintf(__('Search Results for %s', 'sage'), get_search_query());
        }
        if (is_404()) {
            return __('Not Found', 'sage');
        }
        return get_the_title();
    }

    public function projectLoop()
    {
        $data = [];
        $project_items = get_posts([
            'post_type' => 'project',
            'posts_per_page'=>'10',
        ]);
        
        foreach($project_items as $pi)
        {
            $post_data = [
                'title' => get_the_title($pi),
                'permalink' => get_the_permalink($pi),
                'project_image' => get_field('project_image', $pi),
                'project_decription' => get_field('project_description', $pi),
                'Skills_loop' => get_field('project_items', $pi),
            ];

            array_push($data, (object) $post_data,);
        }
        return $data;
    }

    public function singleProject()
    {
        global $post;

        return(object) [
            'project_title' => get_the_title($post),
            'project_image' => get_field('project_image', $post) ?? null,
            'project_content' => get_field('project_description', $post) ?? null,
            'project_skills' => get_field('project_items', $post) ?? null
        ];
    }
}
