<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$services = new FieldsBuilder('services');

$services
    ->addTrueFalse('section_effects', [
        'label' => 'Add section effects'
    ])
    ->addImage('background_image', [
        'label' => 'Background Image',
        'return_format' => 'array',
    ])
    ->addText('title')
    ->addTextArea('copy')
    ->addGroup('dev', [
        'label' => 'Web Development',
        'wrapper' => [
            'width' => '33%'
        ]
    ])
        ->addSelect('icon_selector')
        ->addChoices([
            'fa-phone' => 'Phone',
            'fa-envelope' => 'Mail',
            'fa-map-marker' => 'Location',
            'fa-eraser' => 'Art',
            'fa-vr-cardboard' => 'VR',
            'fa-code' => 'Dev'
        ])
        ->addText('title')
        ->addTextarea('content')
        ->addLink('url')
    ->endGroup()
    ->addGroup('arvr', [
        'label' => 'AR/VR',
        'wrapper' => [
            'width' => '34%'
        ]
    ])
        ->addSelect('icon_selector')
        ->addChoices([
            'fa-phone' => 'Phone',
            'fa-envelope' => 'Mail',
            'fa-map-marker' => 'Location',
            'fa-eraser' => 'Art',
            'fa-vr-cardboard' => 'VR',
            'fa-code' => 'Dev'
        ])
        ->addText('title')
        ->addTextarea('content')
        ->addLink('url')
    ->endGroup()
    ->addGroup('art', [
        'label' => 'Artwork',
        'wrapper' => [
            'width' => '33%'
        ]
    ])
        ->addSelect('icon_selector')
        ->addChoices([
            'fa-phone' => 'Phone',
            'fa-envelope' => 'Mail',
            'fa-map-marker' => 'Location',
            'fa-eraser' => 'Art',
            'fa-vr-cardboard' => 'VR',
            'fa-code' => 'Dev'
        ])
        ->addText('title')
        ->addTextarea('content')
        ->addLink('url')
    ->endGroup();
    
return $services;