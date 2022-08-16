<?php $web='scoutdb'; require ('../inc/base.php')?>
<?php require ($_SERVER['ADDS'].'inc/sample.php')?>
<?php require ($_SERVER['ADDS'].'inc/meta.php')?>
<?php require ($_SERVER['ADDS'].'inc/header.php')?>
<div class="rancak-container">

  <section title="Home" id="Home" class="section-row section-cover content_center">
    <style><?php require ($_SERVER['ADDS'].'css/cover.css')?></style>
	<div class="cover-bg">
	
	  <script async>
		$(window).on('load',function(){
		  $('.cover-bg').append("<video autoplay=\"\" loop muted><source src=\"embed/scoutdb-cover.mp4\" type=\"video/mp4\"></video>");
		});
	  </script>
	</div>
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





  <section title="About ScoutDB" id="About" class="section-row section-about content_center">
    <span class="width-max">
	  <div class="section-title">About ScoutDB</div>
	  <div class="section-subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus elementum turpis sed odio maximus dictum.</div>
      <div class="section-container section-about-feature">
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





  <section title="Feature" id="Feature" class="section-row section-product content_center">
    <span class="width-max">
	  <div class="section-title">Feature</div>
      <div class="section-container section-product-container section-strimid">
        <div class="product-preview">
		  <div class="product-preview-frame flex_ori thumb-loading">
		    <iframe width="560" height="315" class="lazyload" data-original="embed/strimid.php" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		  </div>
		</div>
        <div class="product-info">
		  <h2 class="product-title">Strim.id</h2>
		  <h3 class="product-desc">
		    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tincidunt felis vitae metus sollicitudin convallis. Quisque imperdiet lorem eget libero porta pulvinar. Fusce sem nulla, volutpat nec hendrerit eget</p> 
			<p>suscipit a dui. Donec nec maximus leo. Quisque porttitor vitae metus non tempus. Aenean quis rutrum libero.</p>
		  </h3>
          <div class="product-info-more">
            <a aria-label="Strim.id" title="Strim.id" class="btn product-info-btn" href=" ">
              More Info &raquo;
            </a>
          </div>
		</div>
      </div>
	</span>
  </section>





  <section title="Client's Review" id="Review" class="section-row section-review content_center">
    <span class="width-max">
	  <div class="section-title">Client's Review</div>
      <div class="section-container section-review-container">
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
	  <div class="section-container section-bottom-container">
	    <div class="bottom-name">PT Adhi Daya Digital Sejahtera</div>
        <div class="bottom-address">
		  <span>Ruko Villa Melati Mas SR.15 Nomor 23,</span>
		  <span>Kel. Pondok Jagung Timur,</span>
		  <span>Kec. Serpong Utara,</span><br/>
		  <span>Kota Tangerang Selatan,</span>
		  <span>Provinsi Banten, 15320.</span>
        </div>
		<div class="bottom-contact">
		  <a aria-label="085959596495" title="085959596495" class="bottom-contact-link" href="tel:085959596495">
		    <div class="bcl-icon"><?php require ($_SERVER['ADDS'].'img/icon/phone.svg')?></div>
		    <div class="bcl-label">+62 8595 9596 495</div>
		  </a>
		  <a aria-label="admin@adds.id" title="admin@adds.id" class="bottom-contact-link" href="mailto:admin@adds.id">
		    <div class="bcl-icon"><?php require ($_SERVER['ADDS'].'img/icon/mail.svg')?></div>
		    <div class="bcl-label">admin@adds.id</div>
		  </a>
		</div>
	  </div>
	</span>
	<div class="section-container bottom-map">
	  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3965.9270571540437!2d106.657202!3d-6.273322!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xca915395bd4a019a!2sFivestar5*2A%20Studio!5e0!3m2!1sen!2sid!4v1660359848957!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	</div>
  </section>
  
</div>
<?php require ($_SERVER['ADDS'].'inc/footer.php')?>