<?php if($page->heroCover() !='' && $page->heroCover() !='0'): ?>
.hero-cover{ background-image:url("<?php echo $page->uid() ?>/<?php echo $page->heroCover() ?>"); color:<?php echo $page->heroColor() ?>; }
<?php endif ?>
<?php if($page->customCSS() !=''): ?>
<?php echo $page->customCSS() ?>
<?php endif ?>
<?php if($page->customColor() !=''): ?>
a:hover, .menu a:hover, .menu .active { color:<?php echo $page->customColor() ?>; }
.contact a:hover { border-bottom-color: <?php echo $page->customColor() ?>; }
.has-tooltip .tooltip { background:<?php echo $page->customColor() ?>; }
.has-tooltip .tooltip:after { border-top-color:<?php echo $page->customColor() ?>; }
<?php endif ?>