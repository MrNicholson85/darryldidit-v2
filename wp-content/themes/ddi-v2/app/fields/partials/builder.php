<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$builder = new FieldsBuilder('builder');

$builder
  ->addTab('builder', ['placement' => 'left'])
    ->addFlexibleContent('components', ['button_label' => 'Add Component'])
      ->addLayout(get_field_partial('components.button'))
      ->addLayout(get_field_partial('components.hero'))
      ->addLayout(get_field_partial('components.content-skills'))
      ->addLayout(get_field_partial('components.quotes'))
      ->addLayout(get_field_partial('components.featured-projects'))
      ->addLayout(get_field_partial('components.info-module'))
      ->addLayout(get_field_partial('components.services'))
      ->addLayout(get_field_partial('components.single-image-content'))
      ->addLayout(get_field_partial('components.basic-content'))
      ->addLayout(get_field_partial('components.fifty-fifty-content'));

return $builder;