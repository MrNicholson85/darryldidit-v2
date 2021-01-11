<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;


$general = new FieldsBuilder('general');

$general
    ->addTab('general', ['placement' => 'left'])
        ->addTrueFalse('enabl_social_sharing', ['ui' => 1])

    ->addTrueFalse('enable_featured_image', ['ui' => 1])
        ->setDefaultValue('1')
        ->setInstructions('Enables automatically displaying the featured images befor the content.');
        
return $general;