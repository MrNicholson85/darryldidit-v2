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
->addTab('contact_info', ['placement' => 'left']);
    
    

return $options;