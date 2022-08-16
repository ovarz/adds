<header>
  <span class="width-max">
    <a aria-label="ADDS" title="ADDS" class="sticky-link header-logo content_center" href="index.php">
      <img alt="Logo ADDS" src="img/logo.png" width="582" height="275">
    </a>
	<?php if($web == 'adds') { ?>
	  <?php require ($_SERVER['ADDS'].'inc/menu.php')?>
	<?php } ?>
	<?php if($web == 'scoutdb') { ?>
	  <?php require ($_SERVER['ADDS'].'scoutdb/inc/menu.php')?>
	<?php } ?>
    <button title="Menu" class="sticky-link header-menu-toggle content_center mobile-only">
      <span>
        <div class="htm-line htm-line-1"></div>
        <div class="htm-line htm-line-2"></div>
        <div class="htm-line htm-line-3"></div>
      </span>
    </button>
  </span>
</header>