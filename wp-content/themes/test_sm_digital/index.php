<?php get_header(); ?>

<main>
    <div class="container">

        <?php if(have_posts()){
                while(have_posts()){
                    the_post(); ?>
                <!-- <h1 class='my-3'><?php the_title(); ?>!!</h1> -->
                <?php the_content(); ?>

            <?php }
        }?>

        <div class="main-nav">
            <nav>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Digital break</a></li>
                <li><a href="#">Tendencias digitales</a></li>
                <li><a href="#">Contenido gratuito</a></li>
            </nav>
        </div>

    </div>
</main>

<?php get_footer(); ?>