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
            if ($block['acf_fc_layout'] == 'hero')
            {

                // Do any logic for this component here

                $this_block = (object) [
                    'block_type' => $block['acf_fc_layout'],
                    'hero_title' => $block['hero_title'],
                    'hero_subtitle' => $block['hero_subtitle']
                ];
                
                array_push($data, $this_block);
            }
        }

        $data = (object) $data;

        return $data;
    }
}