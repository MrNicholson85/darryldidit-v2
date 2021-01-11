<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$pagebuilder = new FieldsBuilder('pagebuilder');

$pagebuilder
    ->setLocation('post_type', '==', 'pagebuilder')
    ->setLocation('post_type', '==', 'front_page');
  
$pagebuilder
    ->addFields(get_field_partial('partials.builder'));

return $pagebuilder;