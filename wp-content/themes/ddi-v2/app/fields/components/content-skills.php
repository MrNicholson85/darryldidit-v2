<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$content_skills = new FieldsBuilder('content_skills');

$content_skills
  ->addTrueFalse('section_effects', [
    'label' => 'Add section effects'
  ])
  ->addGroup('about', [
    'label' => 'About',
    'wrapper' => [
      'width' => '50%'
    ],
    'layout' => 'block',
  ])
    ->addText('title', [
      'label' => 'Title'
    ])
    ->addTextarea('content_description', [
      'label' => 'Description',
    ])
  ->endgroup()

  ->addGroup('skills', [
    'wrapper' => [
      'width' => '50%'
    ],
    'layout' => 'block',
  ])
  ->addText('skill_title', [
    'label' => 'Title'
  ])
    ->addRepeater('skill_list')
      ->addText('skill_name', [
        'label' => 'Skill Name',
        'wrapper' => [
          'width' => '60%',
        ],
      ])
      ->addSelect('skill_level', [
        'label' => 'Skill Level',
        'wrapper' => [
          'width' => '40%',
        ],
      ])
      ->addChoices([
        '1' => '1',
        '2' => '2',
        '3' => '3',
        '4' => '4',
        '5' => '5',
        '6' => '6',
        '7' => '7',
        '8' => '8',
        '9' => '9',
        '10' => '10',
      ])
    ->endRepeater()
  ->endgroup();

return $content_skills;