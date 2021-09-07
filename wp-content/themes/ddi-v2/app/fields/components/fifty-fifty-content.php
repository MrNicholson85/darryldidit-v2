<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$fifty_fifty_content = new FieldsBuilder('fifty_fifty_content');

$fifty_fifty_content

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
        ->addImage('image')
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
        ->addImage('image')
        ->conditional('content_type', '==', 'image')
        ->addWYSIWYG('content')
        ->conditional('content_type', '==', 'content')
    ->endGroup();

    return $fifty_fifty_content;