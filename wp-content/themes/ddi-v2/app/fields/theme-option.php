<?php

use StoutLogic\AcfBuilder\FieldsBuilder;

acf_add_options_page([
    'page_title' => get_bloginfo('name'),
    'menu_title' => 'Theme Options',
    'menu_slug' => 'theme-options',
    'update_button' => 'Update Options',
    'capability' => 'edit_theme_options',
    'position' => '999',
    'autoload' => true,
]);

$options = new FieldsBuilder('theme_options', [
    'style' => 'seamless',
]);

$options
    ->setLocation('options_page', '==', 'theme-options');

$options
    ->addTab('general')
    ->setConfig('placement', 'left')
    ->addGroup('col_1', [
        'label' => 'Column 1',
        'wrapper' => [
            'width' => '33%'
        ]
    ])
    ->addImage('logo')
    ->endGroup()
    ->addGroup('col_2', [
        'label' => 'Column 2',
        'wrapper' => [
            'width' => '33%'
        ]
    ])
    ->addText('address')
    ->addText('phone')
    ->addtext('email')
    ->endGroup()
    ->addGroup('col_3', [
        'label' => 'Column 3',
        'wrapper' => [
            'width' => '34%'
        ]
    ])
    ->addWysiwyg('form', [
        'label' => 'Newsletter Form'
    ])
    ->endGroup()


    ->addTab('tracking')
    ->setConfig('placement', 'left')
    ->addText('gtm')
    ->setConfig('label', 'Google Tag Manager')

    ->addTab('advanced')
    ->setConfig('placement', 'left')

    ->addTrueFalse('debug')
    ->setConfig('ui', '1');

acf_add_local_field_group($options->build());
