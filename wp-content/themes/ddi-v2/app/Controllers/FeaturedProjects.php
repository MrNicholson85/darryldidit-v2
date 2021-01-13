<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class FeaturedProjects extends Controller
{
    protected $acf = true;

    public function featured_projects()
    {
        // Get all page builder fields
        $feat_projects = get_field('featured_projects');

        // Set up array
        $data = [];

        // Loop through each block
        foreach ($feat_projects as $project)
        {
            $this_block = (object) [
                'block_type' => $project['acf_fc_layout'] ?? null,
                'featured_projects' => $project['featured_projects'] ?? null,
            ];

            array_push($data, $this_block);
        }

        $data = (object) $data;

        return $data;
    }
}