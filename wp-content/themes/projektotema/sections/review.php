<?php 

$atsiliepimuUzklausa = new WP_Query(array(
  'post_type'     =>    'review',
  'orderby'       =>    'date',
  'order'         =>    'ASC',
  'posts_per_page'=>    '5'
));

$veiduUzklausa = new WP_Query(array(
  'post_type'     => 'faces',
  'orderby'       => 'date',
  'order'         => 'ASC',
  'posts_per_page'=> '5'

));

 ?>

<section class="review" id="review">
    	<div class="container review-flex">
    		<div class="quotation">
    			<h2><?php the_field('kabutes', 28); ?></h2>			
    		</div>
        <div class="siemaText">
          <?php 
          $j=0;

          if ($atsiliepimuUzklausa->have_posts()):
            while ($atsiliepimuUzklausa->have_posts()):
              $atsiliepimuUzklausa->the_post();
              $j++;
              
           ?>
          <div data-tekstas="<?php echo $j ?>">
            <div class="review-paragraph">
              <p ><?php the_field('atsiliepimas', get_the_ID()); ?></p>
            </div>
            <div class="review-name">
              <h4 ><?php the_field('vardas', get_the_ID()); ?></h4>
            </div>
            <div class="review-position">
              <h4 ><?php the_field('pareigos', get_the_ID()); ?></h4>
            </div>
          </div>
          <?php endwhile; endif; ?>
        </div>          
    		<div class="review-pictures">
          <div><span class="icon-keyboard_arrow_left"></span></div>
    			<ul>

            <?php 

            $i = 0;

            if ($veiduUzklausa->have_posts()):
              while ($veiduUzklausa->have_posts()):
                $veiduUzklausa->the_post();
                $i++;
                if ($i==3) {
            ?>
            
                  <li><img data-nuotrauka="<?php echo $i ?>" class="active" src="<?php the_field('veidas', get_the_ID()); ?>" alt="veidukas<?php echo $i ?>"></li>
                <?php

                } else {

                ?>
                  <li><img data-nuotrauka="<?php echo $i ?>" src="<?php the_field('veidas', get_the_ID()); ?>" alt="veidukas<?php echo $i ?>"></li>

                <?php
                  
                }
                
                ?>

            
            <?php endwhile; endif; ?>
    				
    			</ul>
          <div><span class="icon-keyboard_arrow_right"></span></div>
    		</div>
    	</div>
    </section>