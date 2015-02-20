<?php snippet('header') ?>

  <main class="main" role="main">

    <?php if($page->heroImage() !='' && $page->heroImage() !='0'): ?>
    <picture class="hero-image">
      <img src="<?php echo $page->uid() ?>/<?php echo $page->heroImage() ?>"/>
    </picture>
    <?php elseif($page->heroCover() !='' && $page->heroCover() !='0'): ?>
    <div class="hero-cover">
    <?php $image = $page->images()->find( html($page->heroCover()) ) ?>
      <?php echo $image->caption()->kirbytext() ?>
    </div>
    <?php endif ?>

    <section class="article-content">
      <h1 class="article-title"><?php echo $page->title()->html() ?></h1>
      <ul class="article-meta">
    <?php if($page->date() !='' && $page->date() !='0'): ?>
        <li><b>Date:</b> <time datetime="<?php echo $page->date('c') ?>"><?php echo $page->date('M Y') ?></time></li>
    <?php endif ?>
    <?php if($page->tags() !='' && $page->tags() !='0'): ?>
        <li><b>Tags:</b> <?php echo $page->tags() ?></li>
    <?php endif ?>
      </ul>
      <div class="article-text">
        <?php echo $page->text()->kirbytext() ?>
      </div>
      <?php snippet('navigation') ?>
    </section>

  </main>

<?php snippet('footer') ?>