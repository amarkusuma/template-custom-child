<?php get_header(); ?>
<div class="container ">

    <div class="row blog-post">
        <h3>Team Member</h3>
        <?php
        $id = get_the_ID();
        $position   = get_post_meta($id, 'position', true);
        $email      = get_post_meta($id, 'email', true);
        $website    = get_post_meta($id, 'website', true);
        $image      = get_post_meta($id, 'image', true);

        ?>

        <table class="table-form" border="0" width="100%" cellpadding="0" cellspacing="0" style="color: crimson ;font-size: 20px">

            <tr>
                <td width="35%"> Position </td>
                <td width="1%">:</td>
                <td> <?php echo $position ?></td>
            </tr>

            <tr>
                <td width="35%"> Email </td>
                <td width="1%">:</td>
                <td> <?php echo $email ?></td>
            </tr>

            <tr>
                <td width="35%"> Website </td>
                <td width="1%">:</td>
                <td> <?php echo $website ?></td>
            </tr>

            <tr>
                <td width="35%"> Image </td>
                <td width="1%">:</td>
                <td><img src="<?php echo wp_get_attachment_url($image) ?>" alt=""></td>
            </tr>

        </table>

    </div>
    <br><br>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>