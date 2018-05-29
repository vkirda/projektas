<section class="contact" id="contact">
    	<div class="container">
    		<div>
    			<h2 class="contact-header">Contact us</h2>
    		</div>
    		<div class="contact-container">
    			<div class="address">
    				<div>
    					<h3><?php the_field('contect_us_miestas', 28); ?></h3>
    				</div>
    				<div>
    					<p><?php the_field('contact_us_gatve', 28); ?></p>
    				</div>
    				<div>
    					<p><?php the_field('contact_us_valstija', 28); ?></p>
    				</div>
    				<div>
    					<p><?php the_field('contact_us_kodas', 28); ?></p>
    				</div>
    				<div>
                        <?php 

                            $location = get_field('map', 28);

                            if( !empty($location) ):
                        ?>
                        <div class="acf-map">
                            <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
                        </div>
                        <?php endif; ?>
    				</div>
    			</div>
    			<div class="form">
    				<form>
    					<div>
    						<input type="text" name="name" placeholder="  Name">
    					</div>
    					<div>
    						<input type="text" name="email" placeholder="  Email">
    					</div>
    					<div>
    						<input type="text" name="subject" placeholder="  Subject">
    					</div>
    					<div>
    						<textarea name="your message" cols="30" rows="10" placeholder=" Your Message"></textarea>
    					</div>
    				</form>
    			</div>
    		</div>
    		<div class="contact-button-container">
                <a class="contact-button" href="<?php the_field('contact_us_nuoroda', 28) ?>" target ="_blank">Download Broshure</a>
    		</div>
    	</div>
    </section>