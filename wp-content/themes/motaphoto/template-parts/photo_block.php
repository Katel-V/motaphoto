<!-- Section GALERIE -->

<section id="containerPhoto" class="blocCatalogue">

<?php
//recuperer les photos

$args = array(
    'post_type'      => 'photo',
    'posts_per_page' => 8,
    'orderby'        => 'rand',
    'order'          => 'ASC',
);
$photo_block = new WP_Query($args);

// Vérification s'il y a des photos
if ($photo_block->have_posts()) :

  
    //boucle a mettre en place pour les afficher 1 a 1
        while ($photo_block->have_posts()) :
            $photo_block->the_post();
            get_template_part('template-parts/photo_preview');
        endwhile;

        // Réinitialisation de la requête
        wp_reset_postdata(); else :
        echo 'Aucune photo trouvée.';
endif;
?>

    <!-- BLOC CHARGER PLUS -->
     
    <div class="view-all-button">
        <button id="load-more-posts">Charger plus</button>
    </div>
</div>


