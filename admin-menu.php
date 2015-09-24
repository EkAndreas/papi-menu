<?php

namespace ekandreas\papimenu;

class AdminMenu
{

    function __construct()
    {

        add_action( 'admin_menu', __NAMESPACE__ . '\AdminMenu::menues' );
        add_action( 'parent_file', __NAMESPACE__ . '\AdminMenu::parent_file' );

    }

    static function menues()
    {

        add_menu_page( 'Papi Menu Test', 'Papi Menu Test', 'edit_others_posts', 'papi-menu-test',
            __NAMESPACE__ . '\AdminMenu::display', '', 3 );
        add_submenu_page( 'papi-menu-test', 'Article', 'Article', 'edit_others_posts', 'edit.php?post_type=article' );

    }

    static function parent_file( $parent_file )
    {
        global $current_screen;
        $post_type = $current_screen->post_type;
        if (
            $post_type == 'article'
        ) {
            $parent_file = 'papi-menu-test';
        }

        return $parent_file;
    }

    static function display()
    {

        ?>
        <p>Page intentionally left blank...</p>
        <?php

    }

}

new AdminMenu();