<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class Pagebuilder extends Controller
{
    protected $acf = true;

    public function page_builder()
    {
        global $posts;

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
                    'section_effects' => $block['section_effects'],
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

            if($block['acf_fc_layout']  == 'featured_projects')
            {
                $this_block = (object) [
                    'block_type' => $block['acf_fc_layout'] ?? null,
                    'section_effects' => $block['section_effects'],
                    'link' => $block['cta_button'],
                ];

                array_push($data, $this_block);
            }

            if($block['acf_fc_layout'] == 'services')
            {
                $this_block = (object) [
                    'block_type' => $block['acf_fc_layout'] ?? null,
                    'section_effects' => $block['section_effects'],
                    'background_image' => $block['background_image']['sizes']['large'],
                    'title' => $block['title'],
                    'content' => $block['copy'],

                    'dev_icon' => $block['dev']['icon_selector'],
                    'dev_title' => $block['dev']['title'],
                    'dev_copy' => $block['dev']['content'],
                    'dev_link' => $block['dev']['url'],

                    'art_icon' => $block['art']['icon_selector'],
                    'art_title' => $block['art']['title'],
                    'art_copy' => $block['art']['content'],
                    'art_link' => $block['art']['url'],

                    'arvr_icon' => $block['arvr']['icon_selector'],
                    'arvr_title' => $block['arvr']['title'],
                    'arvr_copy' => $block['arvr']['content'],
                    'arvr_link' => $block['arvr']['url']
                ];

                array_push($data, $this_block);
            }

            if($block['acf_fc_layout'] == 'single_image_content')
            {
                $this_block = (object) [
                    'block_type' => $block['acf_fc_layout'] ?? null,
                    'section_effects' => $block['section_effects'],

                    //Image Content
                    'image' => $block['image_container']['image']['sizes']['large'],

                    //Content Container
                    'pre_title' => $block['content_container']['pre_title'],
                    'title' => $block['content_container']['title'],
                    'content' => $block['content_container']['content'],
                    'link' => $block['content_container']['link'],
                    
                ];
                array_push($data, $this_block);
            }

            if($block['acf_fc_layout'] == 'info_module')
            {
                $this_block = (object) [
                    'block_type' => $block['acf_fc_layout'] ?? null,
                    'title' => $block['content_title'] ?? null,
                    'content' => $block['contact_message'],
                    'phone_info' => $block['phone_info'],
                    'email_info' => $block['email_info'],
                    'location_info' => $block['location_info'],
                    'contact_form' => $block['contact_form_info'],
                    'map' => $block['map_info'],
                ];
                array_push($data, $this_block);
            }
        }

        $data = (object) $data;

        return $data;
    }
}