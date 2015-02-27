<nav role="navigation" class="nav-collapse">
  <ul class="menu cf">
    <?php foreach($pages->visible() as $p): ?>
    <li>
      <a <?php e($p->isOpen(), ' class="active"') ?> href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>
    </li>
    <?php endforeach ?>
    <li><a href="#contact" >Contact</a></li>
  </ul>
</nav>
