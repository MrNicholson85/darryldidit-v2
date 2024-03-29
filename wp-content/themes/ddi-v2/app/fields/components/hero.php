<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$hero = new FieldsBuilder('hero');

$hero
    ->addImage('hero_image', [
        'label' => 'Add Image',
        'return_format' => 'url',
    ])
    ->addText('hero_title')
    ->addTextarea('hero_content');

return $hero;
