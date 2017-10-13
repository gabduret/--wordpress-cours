<?php get_header(); //appel du template header.php  ?>

<div id="content" class="container">
    <div class="row">
        <h1 class="col-sm-12">Contenu Principal</h1>
    </div>
    <div class="row">
        <?php
        // boucle WordPress
        if (have_posts()){
            while (have_posts()){
                the_post();
        ?>
                <article class="col-sm-12 col-md-4">
                    <?php
                        if(has_post_thumbnail( ))
                        {
                            echo '<div class="thumbnail">';
                            the_post_thumbnail('hub_article_thumbnail');
                            echo '</div>';
                        }
                    ?>            
                    <h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
                    <h5>Posté le <?php the_time('F jS, Y') ?></h5>
                    <p><?php the_excerpt(); ?></p>
                </article>
        <?php
        }
        }
        else {
        ?>
        Nous n'avons pas trouvé d'article répondant à votre recherche
        <?php
        }
        ?>
        <div class="pagination">
            <?php wp_pagenavi(); ?>
        </div>
    </div>
</div> <!-- /content -->

<?php get_footer(); //appel du template footer.php ?>
