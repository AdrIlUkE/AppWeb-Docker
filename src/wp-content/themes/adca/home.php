<?php
/** 
 * Template Name: Plantilla de la llista de noticies
 * Template Post Type: page 
*/
?>

<?php get_header()?>

    <!--Div code news-->
    <section class="d-flex flex-column text-center vh-100 container-fluid">
        <div class="row mt-5 mx-5 text-center">
            
            <?php
            if (have_posts()){
                while (have_posts()){
                    the_post();
            ?>

            <div class="col-sm-4 p-2">
                <?php if(has_post_thumbnail()){
                    the_post_thumbnail('thumbnail', array('class' => 'img'));
                } ?>
                <h1 class="display-6 inter-bold mb-5 mt-5"><?php echo the_title(); ?></h1>
                <p class="inter-regular fs-6"> <?php echo the_excerpt(); ?> </p>
                <div class="row">
                    <div class="col-sm-6">
                        <p class="inter-regular fs-6"><?=get_the_date()?></p>
                    </div>
                    <div class="col-sm-6">
                        <p class="inter-bold fs-6">Read more</p>
                    </div>
                </div>
            </div>

            <?php
                }

            } else{
                _e('No hi ha posts disponibles');
            }
            ?>

        </div>

        <?php get_footer() ?>
        