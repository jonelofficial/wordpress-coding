<!-- This page run when redirect to new page (individual page) -->
<?= get_header() ?>

<?php while (have_posts()) : the_post() ?>
    <div class="page-banner">
        <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/ocean.jpg') ?>);"></div>
        <div class="page-banner__content container container--narrow">
            <h1 class="page-banner__title"><?php the_title(); ?></h1>
            <div class="page-banner__intro">
                <!-- <p>DONT FORGET TO REPLACE ME LATER</p> -->
            </div>
        </div>
    </div>

    <div class="container container--narrow page-section">



        <?php
        // "wp_get_post_parent_id" retrieves the ID of the parent post or page for a given post or page ID

        // "get_the_ID()" retrieves the ID of the current post or page in the WordPress Loop

        // "wp_get_post_parent_id(get_the_ID())", it will retrieve the ID of the parent post or page for the current post or page being displayed in the WordPress Loop

        $theParent = wp_get_post_parent_id(get_the_ID());
        if ($theParent) : ?>
            <div class="metabox metabox--position-up metabox--with-home-link">
                <p>
                    <a class="metabox__blog-home-link" href=" <?= get_permalink($theParent) ?>">
                        <i class="fa fa-home" aria-hidden="true"></i>Back to <?= get_the_title($theParent) ?>
                    </a>
                    <span class="metabox__main"><?= the_title() ?></span>

                </p>
            </div>
        <?php endif; ?>


        <?php
        $testArray = get_pages([
            "child_of" => get_the_ID()
        ]);
        $theParent = wp_get_post_parent_id(get_the_ID());

        if ($theParent or $testArray) : ?>
            <div class="page-links">
                <h2 class="page-links__title"><a href="<?= get_the_permalink($theParent) ?>"><?= get_the_title($theParent) ?></a></h2>
                <ul class="min-list">
                    <?php

                    if ($theParent) {
                        $findChildrenOf = $theParent;
                    } else {
                        $findChildrenOf = get_the_ID();
                    }
                    wp_list_pages([
                        "title_li" => NULL,
                        "child_of" => $findChildrenOf,
                        "sort_column" => "menu_order"
                    ])
                    ?>
                </ul>
            </div>
        <?php endif; ?>


        <div class="generic-content">
            <?php the_content(); ?>
        </div>

    </div>
<?php endwhile ?>

<?= get_footer() ?>