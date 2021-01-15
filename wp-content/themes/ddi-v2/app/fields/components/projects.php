<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$single_projects = new FieldsBuilder('single_projects');

$single_projects
    ->addPostObject('single_projects', [
        'label' => 'single Projects',
        'post_type' => 'projects',
        'multiple' => 1,
        'post_type' => [],
        'taxonomy' => [],
    ]);
return $single_projects;