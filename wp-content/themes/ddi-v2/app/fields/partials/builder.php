<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$builder = new FieldsBuilder('builder');

$builder
    ->addTab('builder', ['placement' => 'left'])
        ->addFlexibleContent('components', ['button_label' => 'Add Component'])
            ->addLayout(get_field_partial('components.button'))
            ->addLayout(get_field_partial('components.hero'))
            ->addLayout(get_field_partial('components.content-skills'));

return $builder;