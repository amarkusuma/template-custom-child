<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <div class="fixed-header">
        <div class="container">
            <nav class="blog-nav text-danger">
                <?php if (of_get_option('example_uploader')) { ?>
                    <img src="<?php echo of_get_option('example_uploader'); ?>" width="30px" />
                <?php } ?>
                <div class="text-danger">
                    <?php wp_nav_menu(array(
                        'link_before'     => '<span class="text-white font-weight-bold blog-nav-item navbar-default icon-bar" >',
                        'link_after'      => '</span>',
                        'container_class'       => 'blog-nav-item ',
                        'items_wrap'      => '<ul class="nav justify-content-end ">%3$s</ul>',

                    ));

                    ?>
                </div>
            </nav>
        </div>
    </div>

    <div class="container">

        <div class="blog-header">
            <h1 class="blog-title text-primary">Create basic theme WordPress</h1>

        </div>

        <div class="row">