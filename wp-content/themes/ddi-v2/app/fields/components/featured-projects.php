<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$featured_projects = new FieldsBuilder('featured_projects');

$featured_projects
    ->addTrueFalse('section_effects', [
        'label' => 'Add section effects'
    ])
    ->addRelationship('featured_projects', [
        'multiple' => 1,
        'return_format' => 'object',
        'elements' => 'featured_image',
    ])
    
    ->addLink('cta_button', [
        'label' => 'CTA Button',
        'required' => 0,
        'return_format' => 'array',
    ]);

return $featured_projects;