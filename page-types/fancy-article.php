<?php

namespace ekandreas\papimenu;

class Fancy_Article_Page_Type extends \Papi_Page_Type
{

    public function page_type()
    {

        return [
            'post_type'   => 'article',
            'name'        => 'Fancy',
            'description' => 'A fancy test article',
        ];
    }

    public function register() {

        $this->remove( 'editor' );

        $this->box( 'test', [
            papi_property( [
                'title' => 'Url',
                'description' => 'This should default to value `http://whatever.com`',
                'slug'  => 'url',
                'type'  => 'text',
                'default' => 'http://whatever.com',
            ] ),
            papi_property( [
                'title' => 'Counter',
                'description' => 'This should default to value `0`',
                'slug'  => 'counter',
                'type'  => 'number',
                'default' => 0,
                'value' => 0
            ] ),
        ] );

    }

}
