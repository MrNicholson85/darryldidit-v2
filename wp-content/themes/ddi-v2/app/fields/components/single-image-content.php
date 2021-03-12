<?php
namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$single_image_content = new FieldsBuilder('single_image_content');

$single_image_content
  ->addTrueFalse('section_effects', [
    'label' => 'Add section effects'
  ])
  ->addGroup('image_container', [
    'wrapper' => [
      'width' => '50%'
    ]
  ])
      ->addImage('image')
  ->endGroup()

  ->addGroup('content_container', [
    'wrapper' => [
      'width' => '50%'
    ]
  ])
      ->addText('pre_title')
      ->addText('title')
      ->addTextarea('content')
      ->addLink('link')
  ->endGroup();

return $single_image_content;