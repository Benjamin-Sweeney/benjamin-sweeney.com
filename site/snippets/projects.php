<section class="article-content">

  <?php if($page->id() == 'projects'): ?>

  <h1 class="section-header"><?php echo $page->title()->html() ?></h1>
  <ul class="showcase-projects">
    <?php foreach(page('projects')->children()->visible() as $project): ?>
    <li>
      <h3><a href="<?php echo $project->url() ?>"><?php echo $project->title()->html() ?></a></h3>
      <?php if($image = $project->heroImage() !='' && $page->heroImage() !='0'): ?>
      <a href="<?php echo $project->url() ?>">
        <img src="<?php echo $project->url() ?>/<?php echo $project->heroImage() ?>" alt="<?php echo $project->title()->html() ?>"/>
      </a>
      <?php endif ?>
      <?php if($image = $project->heroCover() !='' && $page->heroCover() !='0'): ?>
      <a class="article-preview" href="<?php echo $project->url() ?>">
        <img src="<?php echo $project->url() ?>/<?php echo $project->heroCover() ?>" alt="<?php echo $project->title()->html() ?>"/>
        <?php $cover = $project->images()->find( html($project->heroCover()) ) ?>
        <div class="article-preview-covermeta"><?php echo $cover->caption()->kirbytext() ?></div>
      </a>
      <?php endif ?>
    </li>
    <?php endforeach ?>
  </ul>

  <?php else: ?>

  <h1 class="section-header">Latest projects</h1>
  <ul class="showcase-projects">
    <?php foreach(page('projects')->children()->visible()->limit(3) as $project): ?>
    <li>
      <h3><a href="<?php echo $project->url() ?>"><?php echo $project->title()->html() ?></a></h3>
      <?php if($image = $project->heroImage() !='' && $page->heroImage() !='0'): ?>
      <a href="<?php echo $project->url() ?>">
        <img src="<?php echo $project->url() ?>/<?php echo $project->heroImage() ?>" alt="<?php echo $project->title()->html() ?>"/>
      </a>
      <?php endif ?>
      <?php if($image = $project->heroCover() !='' && $page->heroCover() !='0'): ?>
      <a class="article-preview" href="<?php echo $project->url() ?>">
        <img src="<?php echo $project->url() ?>/<?php echo $project->heroCover() ?>" alt="<?php echo $project->title()->html() ?>"/>
        <?php $cover = $project->images()->find( html($project->heroCover()) ) ?>
        <div class="article-preview-covermeta"><?php echo $cover->caption()->kirbytext() ?></div>
      </a>
      <?php endif ?>
    </li>
    <?php endforeach ?>
  </ul>
  
  <?php endif ?>

</section>