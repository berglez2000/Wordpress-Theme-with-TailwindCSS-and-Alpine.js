<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo get_the_title(  ); ?></title>
  <?php wp_head(  ); ?>
  <script src="//unpkg.com/alpinejs" defer></script>
</head>
<body>
  <header id="header" class="py-8 bg-slate-50 shadow">
    <div class="container mx-auto px-4">
      <a class="text-2xl uppercase font-semibold" href="<?php echo get_home_url(  ); ?>">Berglez Blog</a>
    </div>
  </header>
  <?php get_template_part( 'includes/block', 'banner' ); ?>
  <main id="main" class="p-12">