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
            <a aria-label="Download ScoutDB" title="Download ScoutDB" class="btn scc-button" href="scoutdb/">
              <span>Download ScoutDB</span>
            </a>
          </div>
        </div>
      </div>
	  <div class="section-cover-image">
        <div class="sci-frame flex_ori thumb-loading">
          <img alt="img_title" class="lazyload" data-original="scoutdb/img/cover-img.png" />
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
	</span>
  </section>





  <section title="Feature" id="Feature" class="section-row section-product content_center">
    <span class="width-max">
	  <div class="section-title">Feature</div>
	  
      <div class="section-container section-product-container section-feature section-feature-1">
        <div class="feature-image">
		  <div class="feature-image-frame flex_ori thumb-loading">
		    <img alt="img_title" class="lazyload" data-original="scoutdb/img/feature-1.png" />
		  </div>
		</div>
        <div class="product-info">
		  <h2 class="product-title">Daftarkan Pemain Sepakbola Muda Berbakat Anda</h2>
		  <h3 class="product-desc">
		    <p>Dapatkan kemudahan dalam mendaftarkan anak atau anak didik Anda, dan dapatkan kesempatan khusus untuk di ‘SCOUT’ oleh pencari bakat profesional.</p>
		  </h3>
		</div>
      </div>
	  
      <div class="section-container section-product-container section-feature section-feature-2">
        <div class="feature-image">
		  <div class="feature-image-frame flex_ori thumb-loading">
		    <img alt="img_title" class="lazyload" data-original="scoutdb/img/feature-2.png" />
		  </div>
		</div>
        <div class="product-info">
		  <h2 class="product-title">Nilai dan Ulas Pemain Secara Langsung</h2>
		  <h3 class="product-desc">
		    <p>Anda dapat menonton video dan memberikan penilaian secara langsung kepada masing-masing pemain. Penilaian dan ulasan Anda akan menentukan peringkat pemain.</p>
		  </h3>
		</div>
      </div>
	  
      <div class="section-container section-product-container section-feature section-feature-3">
        <div class="feature-image">
		  <div class="feature-image-frame flex_ori thumb-loading">
		    <img alt="img_title" class="lazyload" data-original="scoutdb/img/feature-3.png" />
		  </div>
		</div>
        <div class="product-info">
		  <h2 class="product-title">Temukan Pemain Muda Berbakat</h2>
		  <h3 class="product-desc">
		    <p>Tertarik untuk mencari pemain berbakat? Gunakan ScoutsDB untuk memantau dan menemukan potensi pemain berbakat sesuai kebutuhanmu.</p>
		  </h3>
		</div>
      </div>
	</span>
  </section>
  
</div>
<?php require ($_SERVER['ADDS'].'inc/footer.php')?>