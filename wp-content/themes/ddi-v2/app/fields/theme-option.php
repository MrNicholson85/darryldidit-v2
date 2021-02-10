<?php

use StoutLogic\AcfBuilder\FieldsBuilder;

$options = new FieldsBuilder('theme_options');

$options
    ->setLocation('options_page', '==', 'theme-options');

$options
->addTab('contact_info', ['placement' => 'left']);
    
    

return $options;