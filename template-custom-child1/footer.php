 </div><!-- /.row -->

 </div><!-- /.container -->

 <footer class="blog-footer">

     <?php if (of_get_option('example_text')) { ?>
         <a href="#"><?php echo of_get_option('example_text') ?></a>
     <?php } ?>
     <?php wp_nav_menu(array(
            'link_before'     => '<span class="text-dark font-weight-bold blog-nav-item navbar-default icon-bar" >',
            'link_after'      => '</span>',
            'container_class' => 'blog-nav-item ',
            'items_wrap'      => '<ul class="nav justify-content-end w-100 %2$s">%3$s</ul>',

        ));

        ?>
 </footer>
 <?php wp_footer(); ?>
 </body>

 </html>