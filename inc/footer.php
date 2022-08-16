<footer class="content_center">
  <span class="width-max">
	<div class="footer-copyright">ADDS &copy;2022 - All Right Reserved</div>
	<div class="socmed-list">
	  <?php if($web == 'adds') { ?>
        <a aria-label="Facebook ADDS" title="Facebook ADDS" class="socmed-link socmed-link-fb content_center" 
        href="https://www.facebook.com/ScoutDB.ID/">
          <?php require ($_SERVER['ADDS'].'img/icon/facebook-default.svg')?>
        </a>
        <a aria-label="Instagram ADDS" title="Instagram ADDS" class="socmed-link socmed-link-ig content_center" 
        href="https://www.instagram.com/scoutdb.id/">
          <?php require ($_SERVER['ADDS'].'img/icon/instagram-default.svg')?>
        </a>
	  <?php } ?>
	  <?php if($web == 'scoutdb') { ?>
        <a aria-label="Facebook ScoutDB" title="Facebook ScoutDB" class="socmed-link socmed-link-fb content_center" 
        href="https://www.facebook.com/ScoutDB.ID/">
          <?php require ($_SERVER['ADDS'].'img/icon/facebook-default.svg')?>
        </a>
        <a aria-label="Instagram ScoutDB" title="Instagram ScoutDB" class="socmed-link socmed-link-ig content_center" 
        href="https://www.instagram.com/scoutdb.id/">
          <?php require ($_SERVER['ADDS'].'img/icon/instagram-default.svg')?>
        </a>
	  <?php } ?>
	  <!--
	  <a aria-label="Twitter ADDS" title="Twitter ADDS" class="socmed-link socmed-link-tw content_center" 
	  href=" ">
		<php require ($_SERVER['ADDS'].'img/icon/twitter-default.svg')?>
	  </a>
	  -->
	</div>
  </span>
</footer>



<div id="btt" class="content_center" title="Return To Top">
  <?php require ($_SERVER['ADDS'].'img/icon/back-to-top.svg')?>
</div>



<div class="popup-copied">
  <div class="popup-copied-alert">Link berhasil disalin</div>
</div>



<noscript id="deferred-styles">
  <link rel="stylesheet" type="text/css" href="css/hold.css?<?php echo $anticache; ?>" media="print" onload="this.media='all'"/>
</noscript>
<script defer>
  var loadDeferredStyles = function() {
	var addStylesNode = document.getElementById("deferred-styles");
	var replacement = document.createElement("div");
	replacement.innerHTML = addStylesNode.textContent;
	document.body.appendChild(replacement)
	addStylesNode.parentElement.removeChild(addStylesNode);
  };
  var raf = window.requestAnimationFrame || window.mozRequestAnimationFrame ||
	  window.webkitRequestAnimationFrame || window.msRequestAnimationFrame;
  if (raf) raf(function() { window.setTimeout(loadDeferredStyles, 0); });
  else window.addEventListener('load', loadDeferredStyles);
</script>

<script defer src="js/lazysizes.min.js"></script>
<script defer rancak-hold="js/scrollreveal.min.js"></script>
<script defer rancak-hold="js/rancak.js"></script>
</body>
</html>