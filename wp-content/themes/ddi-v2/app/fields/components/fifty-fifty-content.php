<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$fifty_fifty_content = new FieldsBuilder('fifty_fifty_content');

$fifty_fifty_content
    ->addTrueFalse('section_effects', [
        'label' => 'Add section effects'
    ])
    ->addSelect('background_color', [
        'return_format' => 'value',
    ])
    ->addChoices([
        'primary_green' => 'Primary Site Green',
        'white' => 'White',
    ])

    ->addGroup('group_a', [
        'wrapper' => [
            'width' => '50%'
        ]
    ])
        ->addSelect('content_type')
        ->addChoices([
            'image' => 'Image',
            'content' => 'Content',
        ])
        ->addImage('image', [
            'return_format' => 'url',
        ])
        ->conditional('content_type', '==', 'image')
        ->addWYSIWYG('content')
        ->conditional('content_type', '==', 'content')
    ->endGroup()
    
    ->addGroup('group_b', [
        'wrapper' => [
            'width' => '50%'
        ]
    ])
    ->addSelect('content_type')
    ->addChoices([
        'image' => 'Image',
        'content' => 'Content',
    ])
        ->addImage('image', [
            'return_format' => 'url',
        ])
        ->conditional('content_type', '==', 'image')
        ->addWYSIWYG('content')
        ->conditional('content_type', '==', 'content')
    ->endGroup();

    return $fifty_fifty_content;