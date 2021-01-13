<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$feature_projects = new FieldsBuilder('feature_projects');

$feature_projects
    ->addPostObject('feature_projects', [
        'label' => 'Feature Projects',
        'post_type' => 'projects',
        'multiple' => 1,
        'post_type' => [],
        'taxonomy' => [],
    ]);
return $feature_projects;