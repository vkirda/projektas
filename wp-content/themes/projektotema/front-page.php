
<!-- paima headeri -->
<?php get_header(); ?>
  <main>
    <!-- sekcijos sudetos i sections foldzeri su situo metodu jas is ten paimam-->
    <?php get_template_part('sections/about'); ?>

    <?php get_template_part('sections/services'); ?>
    
    <?php get_template_part('sections/portfolio'); ?>

    <?php get_template_part('sections/review'); ?>
    
    <?php get_template_part('sections/contact'); ?>

  </main>
 <?php get_footer(); ?>