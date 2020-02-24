<div class="col-sm-3 blog-sidebar ">

    <hr class="hidden-sm hidden-md hidden-lg">

    <div class="sidebar-module">
        <div class="sidebar-module sidebar-module-inset">
            <?php
            if (of_get_option('example_checkbox') == true) {
                dynamic_sidebar('primary');
            }
            ?>
        </div>
    </div>
    <hr class="hidden-sm hidden-md hidden-lg">

</div>