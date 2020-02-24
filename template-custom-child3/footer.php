 </div><!-- /.row -->

 </div><!-- /.container -->

 <footer class="blog-footer">
     <p>Blog template built for <a href="http://getbootstrap.com">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
     <p><a href="#">Back to top</a></p>

     <?php wp_nav_menu(array(
            'link_before'     => '<span class="text-dark font-weight-bold blog-nav-item navbar-default icon-bar" >',
            'link_after'      => '</span>',
            'container_class' => 'blog-nav-item ',
            // 'menu_id  '       => 'mymenu',
            'items_wrap'      => '<ul class="nav justify-content-end w-100 %2$s">%3$s</ul>',

        ));

        ?>
 </footer>
 <?php wp_footer(); ?>
 </body>

 </html>