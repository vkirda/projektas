<?php 
    $portfolioUzklausa = new WP_Query(array(
        'post_type'         =>      'portfolio',
        'posts_per_page'    =>      '4'
    ));

 ?>
<section class="portfolio" id="portfolio">
    	<div class="container">
          <h2 class="portfolio-header">Our Project</h2>
        </div>
        <div class="portfolio-container">
        	<ul>
                <?php
                    while ($portfolioUzklausa->have_posts()) :
                        $portfolioUzklausa->the_post();
                ?>
                <li><img src="<?php the_field('pav1', get_the_ID()); ?>" alt="slider-works"></li>
                <?php endwhile; ?>
        	</ul>
        </div>
        <div class="portfolio-button-container">
            <a class="portfolio-button" href="<?php the_field('portfolio_mygtuko_linkas', 28); ?>" target="_blank"><?php the_field('portfolio_mygtuko_tekstas', 28); ?></a>
        </div>
    </section>