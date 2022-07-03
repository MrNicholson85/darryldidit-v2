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
            'posts_per_page'=>'-1',
        ]);
        
        foreach($project_items as $pi)
        {
            $post_data = [
                'title' => get_the_title($pi),
                'permalink' => get_the_permalink($pi),
                'project_image' => get_field('project', $pi),
                'project_decription' => get_field('project_description', $pi),
                'Skills_loop' => get_field('project_items', $pi),
                'project_type' => get_field('project_type', $pi),
            ];
            array_push($data, (object) $post_data,);
        }
        return $data;
    }

    public function singleProject()
    {
        $data = [];
        global $post;
        $project = get_field('project', $post);

        if($project):
            $this_layout = [
                'project_title' => get_the_title($post),
                'project_select' => $project['project_media']['project_select'],
                'project_images' => $project['project_media']['project_images'],
                'project_image_feat' => $project['project_media']['project_images'][0],
                'project_video' => $project['project_media']['video'],
                'project_description' => $project['project_content']['project_description'],
                'project_cta' => $project['project_content']['project_cta'],
                'project_skills' => $project['project_content']['project_items'],
            ];
            array_push($data, (object) $this_layout);
        return $data;
        endif;
    }
}
