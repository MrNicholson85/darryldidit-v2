<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$basic_content = new FieldsBuilder('basic_content');

$basic_content
    ->addTrueFalse('section_effects', [
        'label' => 'Add section effects'
    ])
    ->addWysiwyg('content', [
        'label' => 'Basic Content',
    ]);

return $basic_content;