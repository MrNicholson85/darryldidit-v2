<?php

namespace App;

    function quotes( $data ) {

        $quotes = get_field('quotes');
    
        if ( $quotes ) {
            $data['message'] = 'message';
            $date['quoter'] = 'quoter';
        }
    
        return $data;
    }
    add_filter( 'sage/template/page/data', 'App\\quotes' );
