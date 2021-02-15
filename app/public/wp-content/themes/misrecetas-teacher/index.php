<?php get_header(); ?>

<main class="grid">

<?php
    $args = array (
        'posts_per_page' => 4,
        'post_status' => 'publish',
        'post_type' => 'post',
    );

    $recetas = new WP_Query($args);

    print_r($recetas)
?>
    
    <section class="col-desk-10 col-tab-8 col-mob-12 separator-block">  
        <div class="grid">
            <div class="col-desk-6 col-tab-6 mb-2">
                <h2 class="head-strong txt-center mb-05"><?php the_title(); ?></h2>                            
                <img class="img-md" src="<?php echo get_stylesheet_directory_uri(); ?>/_resources/lubina-con-hummus-de-guisantes.jpg">
            </div>
            <div class="col-desk-6 col-tab-6 mb-2">
                <h2 class="head-strong txt-center mb-05">Tiramisú express</h2>
                <img class="img-md" src="<?php echo get_stylesheet_directory_uri(); ?>/_resources/tiramisu-express.jpg">
            </div>
            <div class="col-desk-6 col-tab-6 mb-2">
                <h2 class="head-strong txt-center mb-05">Espaguettis de calabacín</h2>
                <img class="img-md" src="<?php echo get_stylesheet_directory_uri(); ?>/_resources/espaguetis-de-calabacin.jpg">
            </div>
            <div class="col-desk-6 col-tab-6 mb-2">
                <h2 class="head-strong txt-center mb-05">Vichyssoise de esparragos</h2>
                <img class="img-md" src="<?php echo get_stylesheet_directory_uri(); ?>/_resources/vichyssoise-de-esparragos-blancos.jpg">
            </div>
            
        </div>
    </section>


    <aside class="col-desk-2 col-tab-4 col-mob-12">  

        <h2 class="head-strong txt-center mb-05">Menu del día</h2>

        <div class="bg-light pad-1 rounded">
            <div class="grid">
                <div class="col-mob-4 mb-1">
                    <h3 class="fnt-md head-strong mb-05 txt-center">Entrante</h3>
                    <img class="img-md rounded" src="<?php echo get_stylesheet_directory_uri(); ?>/_resources/vichyssoise-de-esparragos-blancos.jpg">
                </div>
                <div class="col-mob-4 mb-1">
                    <h3 class="head-strong mb-05 txt-center">Principal</h3>
                    <img class="img-md rounded" src="<?php echo get_stylesheet_directory_uri(); ?>/_resources/lubina-con-hummus-de-guisantes.jpg">
                </div>
                <div class="col-mob-4 mb-1">
                    <h3 class="head-strong mb-05 txt-center">Postre</h3>
                    <img class="img-md rounded" src="<?php echo get_stylesheet_directory_uri(); ?>/_resources/tiramisu-express.jpg">
                </div>
            </div>                            
        </div>    
    </aside>
    
</main>  

<?php get_footer(); ?>