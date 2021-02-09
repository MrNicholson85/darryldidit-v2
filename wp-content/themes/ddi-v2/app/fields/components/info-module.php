<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$info_module = new FieldsBuilder('info_module');

$info_module
->addText('content_title', [
        'label' => 'Contact Title',
    ])
    ->addTextarea('contact_message', [
        'label' => 'Contact Message'
    ])

    ->addGroup('phone_info', [
        'wrapper' => [
            'width' => '33%'
        ]
    ])
        ->addSelect('icon_select')
        ->addChoices([
            'fa-phone' => 'Phone',
            'fa-envelope' => 'Mail',
            'fa-map-marker' => 'Location',
        ])
        ->addText('call_me', [
            'label' => 'Pre Title'
        ])
        ->addText('phone_number') 
    ->endGroup()
    
    ->addGroup('email_info', [
        'wrapper' => [
            'width' => '34%'
        ]
    ])
        ->addSelect('icon_select', [
            'label' => 'Icon',
        ])
        ->addChoices([
            'fa-phone' => 'Phone',
            'fa-envelope' => 'Mail',
            'fa-map-marker' => 'Location',
        ])
        ->addText('email_me', [
            'label' => 'Pre title'
        ])
        ->addText('email_address') 
    ->endGroup()
    
    ->addGroup('location_info', [
        'wrapper' => [
            'width' => '33%'
        ]
    ])
        ->addSelect('icon_select')
        ->addChoices([
            'fa-phone' => 'Phone',
            'fa-envelope' => 'Mail',
            'fa-map-marker' => 'Location',
        ])
        ->addText('visit_me', [
            'label' => 'Pre Title'
        ])
        ->addText('address') 
    ->endGroup()
    
    
    ->addGroup('contact_form_info', [
        'label' => 'Form info',
        'wrapper' => [
            'width' => '50%'
        ]
    ])
        ->addWYSIWYG('contact_form') 
    ->endGroup()
    
    ->addGroup('map_info', [
        'wrapper' => [
            'width' => '50%'
        ]
    ])
        ->addWYSIWYG('map', [
            'label' => 'Map',
        ])
    ->endGroup();

    return $info_module;