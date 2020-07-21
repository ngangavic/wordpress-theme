<!DOCTYPE html>
<html>
<head>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">

    <?php
    wp_nav_menu(
            array(
                    "theme_location"=>"top-menu",
                "menu_class"=>"navbar-nav"
            )
    )
    ?>


</nav>