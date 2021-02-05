<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$featured_projects = new FieldsBuilder('featured_projects');

$featured_projects
    ->addPostObject('featured_projects', [
        'label' => 'Featured Project',
        'multiple' => 1,
        'return_format' => 'object',
    ])
    
    ->addLink('cta_button', [
        'label' => 'CTA Button',
        'required' => 0,
        'return_format' => 'array',
    ]);

return $featured_projects;