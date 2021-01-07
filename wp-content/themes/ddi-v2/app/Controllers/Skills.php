<?php

namespace App;

    function skills( $data ) {

        $skills = get_field('skill_list');

        if ( $skills ) {
            $data['skill_name'] = 'skill_name';
            $data['skill_level'] = 'skill_level';
        }

        return $data;
    }
    add_filter( 'sage/template/page/data', 'App\\skills' );
