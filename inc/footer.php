<footer class="content_center">
  <span class="width-max">
	<div class="footer-copyright">ADDS &copy;2022 - All Right Reserved</div>
	<?php require ($_SERVER['ADDS'].'module/share-list.php')?>
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
<script defer rancak-hold="js/rancak.js"></script>
</body>
</html>