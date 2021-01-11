<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$pagebuilder = new FieldsBuilder('pagebuilder');

$pagebuilder
    ->setLocation('post_type', '==', 'pagebuilder');
  
$pagebuilder
    ->addFields(get_field_partial('partials.general'))
        ->removeField('enable_featured_image')
        
    ->addFields(get_field_partial('partials.header'))

    ->addFields(get_field_partial('partials.builder'));

return $pagebuilder;