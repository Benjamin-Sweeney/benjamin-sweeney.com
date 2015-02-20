<?php snippet('header') ?>
<script>
    $(function(){
        $(".element").typed({
            strings: ["<?php echo $page->typed() ?>"],
            typeSpeed: 30,
            onStringTyped: function() {
		        $(".intro-delay").typed({
		            strings: ["^100.^100.^100 ^100and sometimes gifs."],
		            typeSpeed: 50,
		            startDelay: 6000,
		            showCursor: false
		        });
            }
        });
    });
</script>

  <main class="main" role="main">

    <div class="intro">
	    <p><span class="element"></span></p>
	    <p><?php echo $page->typedcaption() ?></p>
    </div>

    <div class="text">
      <?php echo $page->text()->kirbytext() ?>
    </div>
  <?php if(page('writing')->isVisible()): ?>
    <?php snippet('writings') ?>
    <hr>
  <?php endif ?>
  <?php if(page('projects')->isVisible()): ?>
    <?php snippet('projects') ?>
  <?php endif ?>

  </main>

<?php snippet('footer') ?>