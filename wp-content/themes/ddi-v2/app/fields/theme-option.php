<?php

use StoutLogic\AcfBuilder\FieldsBuilder;

acf_add_options_page([
    'page_title' => get_bloginfo('name') . ' theme options',
    'menu_title' => 'Theme Options',
    'menu_slug'  => 'theme-options',
    'capability' => 'edit_theme_options',
    'position'   => '999',
    'autoload'   => true
]);

$options = new FieldsBuilder('theme_options');

$options
    ->setLocation('options_page', '==', 'theme-options');

$options
->addTab('contact_info', ['placement' => 'left'])
    ->addText('content_title', [
        'label' => 'Contact Title',
    ])
    ->addTextarea('contact_message', [
        'label' => 'Contact Message'
    ])

    ->addGroup('phone_info', [
        'label' => 'Phone info',
        'wrapper' => [
            'width' => '33%'
        ]
    ])
        ->addSelect('icon_select', [
            'label' => 'Icon',
        ])
        ->addChoices([
            'phone' => 'Phone',
            'mail' => 'Mail',
            'location' => 'Location',
        ])
        ->addText('pre_title', [
            'label' => 'Pre Title'
        ])
        ->addText('phone_number', [
            'label' => 'Phone Number'
        ]) 
    ->endGroup()
    
    ->addGroup('email_info', [
        'label' => 'Email info',
        'wrapper' => [
            'width' => '34%'
        ]
    ])
        ->addSelect('icon_select', [
            'label' => 'Icon',
        ])
        ->addChoices([
            'phone' => 'Phone',
            'mail' => 'Mail',
            'location' => 'Location',
        ])
        ->addText('pre_title', [
            'label' => 'Pre Title'
        ])
        ->addText('phone_number', [
            'label' => 'Phone Number'
        ]) 
    ->endGroup()
    
    ->addGroup('location_info', [
        'label' => 'Location info',
        'wrapper' => [
            'width' => '33%'
        ]
    ])
        ->addSelect('icon_select', [
            'label' => 'Icon',
        ])
        ->addChoices([
            'phone' => 'Phone',
            'mail' => 'Mail',
            'location' => 'Location',
        ])
        ->addText('pre_title', [
            'label' => 'Pre Title'
        ])
        ->addText('phone_number', [
            'label' => 'Phone Number'
        ]) 
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
        ->addGoogleMap('map', [
            'label' => 'Map',
        ])
    ->endGroup();
    

return $options;