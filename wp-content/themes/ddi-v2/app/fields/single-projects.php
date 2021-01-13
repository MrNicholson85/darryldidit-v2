<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$project_single = new FieldsBuilder('project-single');

$project_single
    ->setLocation('post_type', '==', 'project')
    ->setGroupConfig('hide_on_screen', ['the_content'])
    ->setGroupConfig('style', 'seamless');
  
$project_single
    ->addGroup('project', [
        'label' => 'Project',
    ])
        ->addImage('Image', [
            'label' => 'Add Image',
            'return_format' => 'array',
        ])
        ->addTextarea('description', [
            'label' => 'Project Description',
        ])

        ->addRepeater('skills_used')
            ->addText('skill', [
                'label' => 'Skill Name',
            ])
        ->endRepeater()
    ->endGroup();
    
return $project_single;