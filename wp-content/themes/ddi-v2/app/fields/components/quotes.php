<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$quotes = new FieldsBuilder('quotes');

$quotes
    ->addRepeater('quotes', [
        'label' => 'Quote',
    ])
        ->addTextarea('quotes_message')
        ->addText('quoter')
    ->endRepeater();
return $quotes;