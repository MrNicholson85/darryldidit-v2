<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$hero = new FieldsBuilder('hero');

$hero
    ->addImage('hero_image')
    ->addText('hero_title')
    ->addText('hero_subtitle');

return $hero;