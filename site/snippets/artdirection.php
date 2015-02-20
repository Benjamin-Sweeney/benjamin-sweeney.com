<?php foreach($page->files()->filterBy('extension', 'css') as $css): ?>
<?php echo css($css->url()) ?>
<?php endforeach ?>
<?php foreach($page->files()->filterBy('extension', 'js') as $js): ?>
<?php echo js($js->url()) ?>
<?php endforeach ?>
