<?php
get_header();?>
<main>
<h2>Spring Summer 2017</h2>
<ul>

<?php


$cats = get_categories();
foreach ($cats as $cat) {
    $args = array('category' => $cat->cat_ID);
    $posts = get_posts($args);

     foreach ($posts as $post) {
        setup_postdata($post);

        ?>
        <li>
                    
                            <img src="http://lorempixel.com/175/240" alt="buy">
                            <h3 class="buy"><?php the_category() ?></h3>
                            <span class="description"><?php the_title() ?></span>
                            <span class="price"><?php the_meta() ?></span>

                    </li>
<?php
    }
}
?>
</ul>
</main>

<?php
get_footer();?>
