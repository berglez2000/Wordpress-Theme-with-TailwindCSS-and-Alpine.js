<?php 

$options_page = get_field('header', 'option');
$banner = $options_page['banner_image'];

?>
<div class="banner relative h-40 lg:h-52">
    <picture>
        <source media="(min-width: 768px)" srcset="<?php echo $banner['url']; ?>">
        <img src="<?php echo $banner['sizes']['medium']; ?>" 
            alt="<?php echo $banner['title']; ?>" 
            width="1920"
            height="400"
            loading="lazy"
            class="img h-full"
        />
    </picture>
    <div class="search absolute top-1/2 left-1/2 z-10 transform-center px-4 w-full sm:w-96">
        <?php get_template_part( 'includes/item', 'search' ) ?>
    </div>
</div>