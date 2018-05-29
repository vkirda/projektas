<section class="about" id="about">
      <div class="container">
        <div class="about-container">
          <div class="about-picture">
            <img  src= "<?php the_field('about_paveiksliukas', 28) ?>" alt="About us image">
            <div class="overlay"></div>
          </div>
          <div class="about-broshure">
            <div class="about-header2">
              <h2><?php the_field('about_us_h2', 28) ?></h2>
            </div>
            <div class="about-paragraph">
              <p><?php the_field('about_us_p', 28) ?></p>
            </div>
            <div class="about-button-container">
              <!-- target=_blank atidaro linka kitame tabe -->
              <a class="about-button" href="<?php the_field('about_us_link', 28) ?>" target="_blank"><?php the_field('about_mygtuko_tekstas', 28) ?></a>
            </div>
          </div>
        </div>
      </div>
</section>