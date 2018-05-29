<footer style="background: linear-gradient(to bottom, rgba(2, 87, 130, 0.9), rgba(0, 80, 131, 0.9) ), url(<?php the_field('footerio_backroundas', 28); ?>);
  margin-top: 120px;
  background-repeat: no-repeat;
  background-size: cover;
  background-position: 50% 50%;">
  	<div class="container" >
  		<div class="footer-container">
  			<div class="fotter-column1">
          <div>
            <h3><?php the_field('logotipas', 28); ?></h3>
          </div>
  				<div>
  					<p class="extendet-p" style="width: 470px"><?php the_field('aprasymas1', 28); ?></p>
  				</div>
  				<div>
  					<p class="extendet-p" style="width: 470px"><?php the_field('aprasymas2', 28); ?></p>
  				</div>
  			</div >
  			<div class="fotter-column2">
          <div>
            <h3><?php the_field('miestas1', 28); ?></h3>
          </div>
          <div>
  				  <p><?php the_field('adresas1', 28); ?></p>
          </div>
          <div>
            <p><?php the_field('kontaktai1', 28); ?></p>
          </div>
  			</div>
  			<div class="fotter-column3">
          <div>
            <h3><?php the_field('miestas2', 28); ?></h3>
          </div>
          <div>
            <p><?php the_field('adresas2', 28); ?></p>
          </div>
          <div>
  				  <p><?php the_field('kontaktai2', 28); ?></p>
          </div>
  			</div>
  		</div>
  	</div>
  </footer>
  <?php wp_footer(); ?>
</body>
</html>