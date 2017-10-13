<?php get_header(); //appel du template header.php  ?>

<div id="content" class="container">
    <div class="row">
        <h1 class="col-sm-12"></h1>
    </div>
    <div class="row">
        <h2>Contenu Principal</h2>
        <?php
        // boucle WordPress
        if (have_posts()){
            while (have_posts()){
                the_post();
        ?>
                <article class="col-md-12">
                    <?php
                        if(has_post_thumbnail( ))
                        {
                            echo '<div class="thumbnail">';
                            the_post_thumbnail('full');
                            echo '</div>';
                        }
                    ?> 
                    <h3><?php the_title(); ?></h3>
                    <h5>Posté le <?php the_time('F jS, Y') ?></h5>
                    <p><?php the_content(); ?></p>
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
    </div>
</div> <!-- /content -->

<?php get_footer(); //appel du template footer.php ?>
