<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$project = new FieldsBuilder('project');

$project
    ->setLocation('post_type', '==', 'project');

$project
    ->addImage('project_image', ['label' => 'Project Image'])
    ->addTextarea('project_description', ['label' => 'Project Description'])
    ->addRepeater('project_items', [
        'label' => 'Project items'
    ])
        ->addText('skills_used', ['label' => 'Skills Used'])
    ->endRepeater();

return $project;