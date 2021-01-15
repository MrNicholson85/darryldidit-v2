<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class Pagebuilder extends Controller
{
    protected $acf = true;

    public function page_builder()
    {
        // Get all page builder fields
        $page_builder = get_field('components');

        // Set up array
        $data = [];

        // Loop through each block
        foreach ($page_builder as $block)
        {
            /**
             * Hero Component
             */
            if ($block['acf_fc_layout'] == 'hero')
            {
                // Do any logic for this component here
                $this_block = (object) [
                    'block_type' => $block['acf_fc_layout'] ?? null,
                    'hero_data' => $block['hero_image'],
                    'hero_title' => $block['hero_title'],
                    'hero_subtitle' => $block['hero_subtitle'],
                ];
                
                array_push($data, $this_block);
            }

            if ($block['acf_fc_layout'] == 'content_skills')
            {
                $this_block = (object) [
                    'block_type' => $block['acf_fc_layout'] ?? null,
                    'about_title' => $block['about']['title'] ?? null,
                    'about_description' => $block['about']['content_description'] ?? null,

                    'skill_title' => $block['skills']['skill_title'] ?? null,
                    'skill_list' => $block['skills']['skill_list'] ?? null,
                ];

                array_push($data, $this_block);
            }

            if($block['acf_fc_layout']  == 'quotes')
            {
                $this_block = (object) [
                    'block_type' => $block['acf_fc_layout'] ?? null,
                    'quotes' => $block['quotes'],
                ];

                array_push($data, $this_block);
            }

            if($block['acf_fc_layout']  == 'feature_projects')
            {
                $this_block = (object) [
                    'block_type' => $block['acf_fc_layout'] ?? null,
                    'projects' => $block['feature_projects'],
                ];

                array_push($data, $this_block);
            }
        }

        $data = (object) $data;

        return $data;
    }
}