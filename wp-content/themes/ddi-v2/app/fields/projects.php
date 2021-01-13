<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$project = new FieldsBuilder('project');

$project
    ->setLocation('page-type', '==', 'front_page')
    ->setGroupConfig('hide_on_screen', ['the_content'])
    ->setGroupConfig('style', 'seamless');
  
$project
    ->addText('Text');
    
return $project;