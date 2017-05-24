<?php
/* Template Name : Produit
   Template Post Type : post,page
*/
get_header();
?>



<main>
    <h3><?php  the_title(); ?></h3>
        <img src="http://lorempixel.com/200/150/abstract" alt="image du produit" class="imgproduit">
        <article>
            <p><?php echo get_post_field('post_content');?> a</p>
            <h4><?php the_meta() ?></h4>
            <button type="button" name="button">Ajouter au panier</button>
        </article>
</main>
<?php
get_footer();
?>
