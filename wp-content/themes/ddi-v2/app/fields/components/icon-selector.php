<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$icon_selector = new FieldsBuilder('icon_selector');

$icon_selector
    ->addSelect('icon_selector')
    ->addChoices([
        'fa-phone' => 'Phone',
        'fa-envelope' => 'Mail',
        'fa-map-marker' => 'Location',
        'fa-eraser' => 'Art',
        'fa-vr-cardboard' => 'VR',
        'fa-code' => 'Dev'
    ]);

return $icon_selector;