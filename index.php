<?php require ('inc/base.php')?>
<?php require ($_SERVER['ADDS'].'inc/sample.php')?>
<?php require ($_SERVER['ADDS'].'inc/meta.php')?>
<?php require ($_SERVER['ADDS'].'inc/header.php')?>
<div class="rancak-container">

  <section title="Home" id="Home" class="section-row section-cover content_center">
    <style><?php require ($_SERVER['ADDS'].'css/cover.css')?></style>
    <span class="width-max">
	  <div class="section-cover-content">
        <div class="scc-container">
          <h1 class="scc-title cd-headline clip">
            <span class="scc-label">The new website for</span>
            <span class="scc-words-wrapper cd-words-wrapper">
              <b class="is-visible">app&nbsp;landing</b>
              <b class="is-hidden">showcase</b>
              <b class="is-hidden">screenshoot</b>
            </span>
          </h1>
          <h2 class="scc-subtitle">SaaSio is the best software platform for running an internet business.</h2>
          <div class="scc-anchor">
            <button class="btn scc-button" onclick="functionforscroll('About')">
              <span>View More</span>
            </button>
          </div>
        </div>
      </div>
	  <div class="section-cover-image">
        <div class="sci-frame flex_ori thumb-loading">
          <img alt="img_title" class="lazyload" data-original="img/cover-img.png" />
        </div>
      </div>
	</span>
    <div class="waveWrapper waveAnimation">
      <div class="waveWrapperInner bgTop">
        <div class="wave waveTop" style="background-image: url('img/b-shapeup.png')"></div>
      </div>
      <div class="waveWrapperInner bgMiddle">
        <div class="wave waveMiddle" style="background-image: url('img/b-shapemiddle.png')"></div>
      </div>
      <div class="waveWrapperInner bgBottom">
        <div class="wave waveBottom" style="background-image: url('img/b-shapemiddle.png')"></div>
      </div>
    </div>
    <script defer rancak-hold="js/typer-new.js"></script>
  </section>





  <section title="About Us" id="About" class="section-row section-about content_center">
    <span class="width-max">
	  <div class="section-title">About Us</div>
	  <div class="section-subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus elementum turpis sed odio maximus dictum.</div>
      <div class="section-about-feature">
        <?php for ($i=1; $i <= 3 ; $i++) { ?>
		<div class="saf-box">
		  <div class="saf-icon content_center">
		    <?php require ($_SERVER['ADDS'].'img/icon/dev.svg')?>
		  </div>
		  <div class="saf-title">Lorem Ipsum</div>
		  <div class="saf-desc"><?php echo $random_summary[array_rand($random_summary)]; ?></div>
		</div>
		<?php } ?>
      </div>
	</span>
  </section>





  <section title="Our Team" id="Team" class="section-row section-team content_center">
    <span class="width-max">
	  <div class="section-title">Our Team</div>
      <div class="section-team-container">
        <?php for ($i=1; $i <= 4 ; $i++) { ?>
          <div class="stc-box">
            <div class="stc-photo flex_ori thumb-loading">
              <img alt="img_title" class="lazyload" data-original="img/sample/profile-<?php echo rand(1,10); ?>.jpg" />
            </div>
            <div class="stc-info">
              <h2 class="stc-name"><?php echo $random_name[array_rand($random_name)]; ?></h2>
              <h3 class="stc-title">Job Title</h3>
            </div>
          </div>
        <?php } ?>
      </div>
	</span>
  </section>





  <section title="Client's Review" id="Review" class="section-row section-review content_center">
    <span class="width-max">
	  <div class="section-title">Client's Review</div>
      <div class="section-review-container">
        <?php for ($i=1; $i <= 6 ; $i++) { ?>
          <div class="svc-box">
            <div class="svc-bubble">
              <?php echo $random_summary[array_rand($random_summary)]; ?>
            </div>
            <div class="svc-bottom">
              <div class="svc-point">
                <?php require ($_SERVER['ADDS'].'img/icon/point-down.svg')?>
              </div>
              <div class="svc-profile">
                <div class="svc-profile-thumb">
                  <div class="svc-profile-circle flex_ori thumb-loading">
                    <img alt="img_title" class="lazyload" data-original="img/sample/profile-<?php echo rand(1,10); ?>.jpg" />
                  </div>
                </div>
                <div class="svc-profile-info">
                  <div class="svc-profile-name"><?php echo $random_name[array_rand($random_name)]; ?></div>
                  <div class="svc-profile-title">Job Title at Company Name</div>
                </div>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>
	</span>
  </section>





  <section title="Contact" id="Contact" class="section-bottom">
    <span class="width-max">
	  <div class="section-bottom-container">
	    <div class="bottom-name">PT Adhi Daya Digital Sejahtera</div>
        <div class="bottom-address">
          <span>Jl Tebet Timur Dalam 8H Nomor 3,</span>
		  <span>Tebet Timur,</span>
		  <div>Jakarta Selatan, 12820.</div>
        </div>
		<div class="bottom-contact">
		  <a aria-label="000000000000" title="000000000000" class="bottom-contact-link" href="tel:000000000000">
		    <div class="bcl-icon"><?php require ($_SERVER['ADDS'].'img/icon/phone.svg')?></div>
		    <div class="bcl-label">+62 000 0000 0000</div>
		  </a>
		  <a aria-label="pay_joe@adds.id" title="pay_joe@adds.id" class="bottom-contact-link" href="mailto:pay_joe@adds.id">
		    <div class="bcl-icon"><?php require ($_SERVER['ADDS'].'img/icon/mail.svg')?></div>
		    <div class="bcl-label">pay_joe@adds.id</div>
		  </a>
		</div>
	  </div>
	</span>
	<div class="bottom-map">
	  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.168633244517!2d106.85608301527579!3d-6.241493562856407!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3a3f73c4065%3A0xaaeb5a200e418e4d!2sJl.%20Tebet%20Timur%20Dalam%20VIII%20H%20No.3%2C%20RT.11%2FRW.6%2C%20Tebet%20Tim.%2C%20Kec.%20Tebet%2C%20Kota%20Jakarta%20Selatan%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2012820!5e0!3m2!1sen!2sid!4v1656656706904!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	</div>
  </section>
  
</div>
<?php require ($_SERVER['ADDS'].'inc/footer.php')?>