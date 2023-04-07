<!-- This page run when redirect to new page -->
<?= get_header() ?>

<?php while (have_posts()) : the_post() ?>
    <h2> This is a new page of <?= the_title() ?></h2>
    <p> <?= the_content() ?> </p>
    <hr>
<?php endwhile ?>

<?= get_footer() ?>