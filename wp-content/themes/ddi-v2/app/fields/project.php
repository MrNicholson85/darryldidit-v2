<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$project = new FieldsBuilder('project');

$project
  ->setLocation('post_type', '==', 'project')
  ->setGroupConfig('hide_on_screen', ['the_content'])
  ->setGroupConfig('style', 'seamless');

$project
  ->addSelect('project_type')
  ->addChoices([ 'select' => 'Select Type', 'arvr' => 'AR/VR', 'web-development' => 'Web Development', 'art-work' => 'Art Work'])
  ->addGroup('project')
    ->addGroup('project_media', [
      'wrapper' => [
        'width' => '50%',
      ]
    ])
      ->addSelect('project_select')
      ->addChoices([ 'images' => 'Images', 'videos' => 'Videos', ])
      ->addRepeater('project_images')
        ->conditional('project_select', '==', 'images')
        ->addImage('project_image', [
          'return_format' => 'array',
          'min' => 1,
        ])
      ->endRepeater()
      ->addOembed('video')
        ->conditional('project_select', '==', 'videos')
      ->endGroup()

      ->addGroup('project_content', [
        'wrapper' => [
          'width' => '50%'
        ]
      ])
        ->addWYSIWYG('project_description', ['label' => 'Project Description'])
        ->addLink('project_cta', [
          'return_format' => 'array',
        ])
        ->addRepeater('project_items', [
          'label' => 'Project items'
        ])
          ->addText('skills_used', ['label' => 'Skills Used'])
        ->endRepeater()
      ->endGroup()
  ->endGroup();
return $project;