<?php 

$paslauguUzklausa = new WP_Query(array(
  'post_type'       =>    'services',
  'orderby'         =>    'date',
  'order'           =>    'ASC',
  'posts_per_page' =>    '6'

)); ?>

<section class="services" id="services">
      <div class="container">
        <div class="about-icons-container">
          <ul>

            <?php if ($paslauguUzklausa->have_posts()) :
                    while ($paslauguUzklausa->have_posts()):
                      $paslauguUzklausa->the_post();
               ?>
            <li>
              <div class="about-icon">
                <?php echo the_field('ikona', get_the_ID()); ?>
              </div>
              <div class="about-icon-name">
                <h3><?php the_field('paslaugos_pavadinimas', get_the_ID()); ?></h3>
              </div>
              <div class="about-icon-text">
                <p><?php the_field('paslaugos_aprasymas', get_the_ID()); ?></p>
              </div>
            </li>
            <?php endwhile; endif; ?>
          </ul>
        </div>
      </div>
    </section>