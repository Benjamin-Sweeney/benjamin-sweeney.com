<section class="article-content">

  <?php if($page->id() == 'writing'): ?>
  <h1 class="section-header"><?php echo $page->title()->html() ?></h1>
  <?php else: ?>
  <h1 class="section-header">Latest writings</h1>
  <?php endif ?>

  <ul class="showcase-writing">
    <?php foreach(page('writing')->children()->visible() as $article): ?>
    <li>
      <h3><a href="<?php echo $article->url() ?>"><?php echo $article->title()->html() ?></a></h3>
      <p><?php echo $article->text()->excerpt(80) ?> <a href="<?php echo $article->url() ?>">read&nbsp;more&nbsp;→</a></p>
      <?php if($image = $article->heroImage() !='' && $page->heroImage() !='0'): ?>
      <a href="<?php echo $article->url() ?>">
        <img src="<?php echo $article->url() ?>/<?php echo $article->heroImage() ?>" alt="<?php echo $article->title()->html() ?>"/>
      </a>
      <?php endif ?>
      <?php if($image = $article->heroCover() !='' && $page->heroCover() !='0'): ?>
      <a class="article-preview" href="<?php echo $article->url() ?>">
        <img src="<?php echo $article->url() ?>/<?php echo $article->heroCover() ?>" alt="<?php echo $article->title()->html() ?>"/>
      </a>
      <?php endif ?>
    </li>
    <?php endforeach ?>
  </ul>
</section>