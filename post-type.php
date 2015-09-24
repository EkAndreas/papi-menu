<?php

namespace ekandreas\papimenu;

class PostType
{

    function __construct()
    {
        add_action( 'init', __NAMESPACE__ . '\PostType::article_post_type' );
    }

    static function article_post_type() {

        $labels = array(
            'name'                => _x( 'Articles', 'Post Type General Name', 'papi-menu' ),
            'singular_name'       => _x( 'Article', 'Post Type Singular Name', 'papi-menu' ),
            'menu_name'           => __( 'Articles', 'papi-menu' ),
            'name_admin_bar'      => __( 'Post Type', 'papi-menu' ),
            'parent_item_colon'   => __( 'Parent Item:', 'papi-menu' ),
            'all_items'           => __( 'All Items', 'papi-menu' ),
            'add_new_item'        => __( 'Add New Item', 'papi-menu' ),
            'add_new'             => __( 'Add New', 'papi-menu' ),
            'new_item'            => __( 'New Item', 'papi-menu' ),
            'edit_item'           => __( 'Edit Item', 'papi-menu' ),
            'update_item'         => __( 'Update Item', 'papi-menu' ),
            'view_item'           => __( 'View Item', 'papi-menu' ),
            'search_items'        => __( 'Search Item', 'papi-menu' ),
            'not_found'           => __( 'Not found', 'papi-menu' ),
            'not_found_in_trash'  => __( 'Not found in Trash', 'papi-menu' ),
        );
        $args = array(
            'label'               => __( 'Article', 'papi-menu' ),
            'description'         => __( 'Articles', 'papi-menu' ),
            'labels'              => $labels,
            'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', ),
            'taxonomies'          => array( 'category', 'post_tag' ),
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => false,
            'menu_position'       => 5,
            'show_in_admin_bar'   => true,
            'show_in_nav_menus'   => true,
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'rewrite'             => false,
            'capability_type'     => 'page',
        );
        register_post_type( 'article', $args );

    }

}

new PostType();