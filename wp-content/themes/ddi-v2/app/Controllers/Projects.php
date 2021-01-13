<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class Projects extends Controller
{
    protected $acf = true;

    public function projects()
    {
        // Get all page builder fields
        $page_builder = get_field('projects');

        // Set up array
        $data = [];
        
        foreach ($page_builder as $block)
        {
            $this_block = (object) [
                'block_type' => $block['acf_fc_layout'] ?? null,
                'projects' => $block['projects'] ?? null,
            ];

            array_push($data, $this_block);
        }
    
        $data = (object) $data;

        return $data;
    }
}