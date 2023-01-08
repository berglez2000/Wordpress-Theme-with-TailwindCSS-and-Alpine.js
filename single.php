<?php get_header(  ); ?>

<div class="container mx-auto px-4">

    <h1 class="text-center text-3xl font-semibold mb-8"><?php echo get_the_title(  ); ?></h1>

    <?php 
    
        if(have_posts(  )){
            while(have_posts(  )){
                the_post(  );
                the_content(  );
            }
        }

    ?>
</div>

<?php get_footer(  ); ?>