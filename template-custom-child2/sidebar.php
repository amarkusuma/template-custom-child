<div class="col-sm-3 blog-sidebar ">
    <div class="sidebar-module sidebar-module-inset">
        <h4>About</h4>
        <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
    </div>
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