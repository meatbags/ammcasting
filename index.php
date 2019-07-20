<?php get_template_part('header'); ?>

<div id='section-home' class='wrapper'>
  <div class='swiper-container'>
    <div class='swiper-wrapper'>
      <?php
        $carousel = get_field('carousel');
        foreach ($carousel as $slide): ?>
        <div class='swiper-slide'>
          <div class='slide-image'>
            <img src='<?php echo $slide['image']['url']; ?>'>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
    <div class='swiper-container__overlay'>
      <div class='swiper-container__overlay-inner'>
        <div class='swiper-container__overlay-info'>
          <?php $i = 0; ?>
          <?php foreach ($carousel as $slide): ?>
            <div class='slide-info' data-index='<?php echo $i++; ?>'>
              <div class='slide-title'><?php echo $slide['title']; ?></div>
              <div class='slide-subtitle'><?php echo $slide['subtitle']; ?></div>
            </div>
          <?php endforeach; ?>
        </div>
        <div class='swiper-pagination'></div>
      </div>
    </div>
    <div class='swiper-container__loading active'></div>
  </div>
  <div id='section-work' class='section'>
    <div class='section__inner'>
      <div class='grid'>
        <?php
          $work = get_field('work');
          foreach ($work as $item): ?>
            <div class='grid-item parallax'>
              <a href='<?php echo $item['url']; ?>' target='_blank'>
                <div class='grid-item__image'>
                  <img src='<?php echo $item['image']['url']; ?>'>
                </div>
                <div class='grid-item__info'>
                  <div class='grid-item__info-title'><?php echo $item['title']; ?></div>
                  <div class='grid-item__info-subtitle'><?php echo $item['subtitle']; ?></div>
                </div>
              </a>
            </div>
        <?php endforeach; ?>
        <?php
          $work = get_field('work');
          foreach ($work as $item): ?>
            <div class='grid-item parallax'>
              <a href='<?php echo $item['url']; ?>' target='_blank'>
                <div class='grid-item__image'>
                  <img src='<?php echo $item['image']['url']; ?>'>
                </div>
                <div class='grid-item__info'>
                  <div class='grid-item__info-title'><?php echo $item['title']; ?></div>
                  <div class='grid-item__info-subtitle'><?php echo $item['subtitle']; ?></div>
                </div>
              </a>
            </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
  <div id='section-credits' class='section'>
    <div class='section__inner'>
      <div class='credits parallax'>
        <?php
        $credits = get_field('credits');
        foreach ($credits as $section): ?>
          <div class='credit-section'>
            <div class='credit-section__title'><?php echo $section['credit_section_title']; ?></div>
            <div class='credit-section__rows'>
              <?php foreach($section['credit_section_items'] as $row): ?>
                <div class='credit-section__row'>
                  <div class='credit-section__row-title'><?php echo $row['title']; ?></div>
                  <div class='credit-section__row-subtitle'><?php echo $row['subtitle']; ?></div>
                  <div class='credit-section__row-credits'><?php echo $row['credits']; ?></div>
                </div>
              <?php endforeach; ?>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
  <div id='section-about' class='section'>
    <div class='section__inner'>
      <?php
        $about = get_field('about');
        foreach ($about as $item): ?>
          <div class='about'>
            <div class='about__pane parallax'>
              <div class='about__title'><?php echo $item['title']; ?></div>
              <div class='about__subtitle'><?php echo $item['subtitle']; ?></div>
              <div class='about__text'><?php echo $item['text']; ?></div>
            </div>
            <div class='about__pane parallax'>
              <div class='about__image'>
                <img src='<?php echo $item['image']['url']; ?>'>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
    </div>
  </div>
  <div id='section-contact' class='section'>
    <div class='section__inner'>
      <div class='contact parallax'>
        <div class='contact__inner'>
          <div class='contact__pane'>
            <div class='contact__map'>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d432910.26969652943!2d115.68135556230435!3d-32.039173761907946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2a32966cdb47733d%3A0x304f0b535df55d0!2sPerth+WA!5e0!3m2!1sen!2sau!4v1563598102406!5m2!1sen!2sau" frameborder="0" style="border:0"></iframe>
            </div>
          </div>
          <div class='contact__pane'>
            <div class='contact__title'>Contact</div>
            <div class='contact__subtitle'>Annie Murtagh-Monks Casting</div>
            <div class='contact__text'>
              Casting Services Western Australia - Film, TV and TVCs<br />
              Address Line 1, Address, WA, Postcode<br />
              Telephone: 0414 384 460<br />
              Email: <a href='mailto:annie@anniemmcasting.com.au'>annie@anniemmcasting.com.au</a><br /><br />
              <a href='https://www.facebook.com/ammonks' target='_blank'>Facebook</a>
              <a href='https://au.linkedin.com/in/annie-murtagh-monks-244a0818' target='_blank'>LinkedIn</a>
              <a href='https://www.imdb.com/name/nm0615426/' target='_blank'>IMDb</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_template_part('footer'); ?>
