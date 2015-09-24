<?php

namespace ekandreas\papimenu;

class PapiInit
{

    function __construct()
    {
        add_filter( 'papi/settings/directories', function ( $directories ) {
            $directories[] = dirname( __FILE__ ) . '/page-types';
            return $directories;
        } );
    }

}

new PapiInit();