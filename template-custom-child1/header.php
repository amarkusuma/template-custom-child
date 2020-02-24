<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <div class="blog-masthead">
        <div class="container">
            <div class="blog-nav text-danger">
                <?php if (of_get_option('example_uploader')) { ?>
                    <img src="<?php echo of_get_option('example_uploader'); ?>" width="30px" />
                <?php } ?>
                <div class="text-danger nav">
                    <?php wp_nav_menu(array(
                        'link_before'     => '<span class="text-white font-weight-bold blog-nav-item navbar-default icon-bar" >',
                        'link_after'      => '</span>',
                        'container_class'       => 'blog-nav-item ',
                        'items_wrap'      => '<ul class="nav justify-content-end w-100 %2$s">%3$s</ul>',

                    ));

                    ?>
                </div>
            </div>
        </div>
    </div>

    <div class="container">

        <div class="blog-header">
            <h1 class="blog-title text-danger">Theme Child 1</h1>
            <?php if (of_get_option('example_textarea')) { ?>
                <p><?php echo of_get_option('example_textarea') ?></p>
            <?php } ?>
        </div>

        <div class="row">