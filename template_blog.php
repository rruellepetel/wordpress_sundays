<?php
/* Template Name: Blog */
get_header();
?>

<?php



    $args = array('category' => '5',
                  'posts_per_page' => -1);
    $posts = get_posts($args);


     foreach ($posts as $post) {
         setup_postdata($post); ?>
        <li>

                            <h2 class="description"><?php the_title() ?></h2>
                            <div class="">
                                <?php the_content() ?></div>

                    </li>
<?php

     }

?>


<?php
get_footer();
?>
