<?php drupal_add_css(path_to_theme() . '/custom_style.css', array('group' => CSS_THEME, 'weight' => 9999));?>
<?php if (!empty($title)): ?>
<h3><?php print $title; ?></h3>
<?php endif; ?>
<ul class="taska-3-ul">
<?php foreach ($rows as $id => $row): ?>
<li <?php if ($classes_array[$id]): ?> class="<?php print $classes_array[$id]; ?>"<?php endif; ?>>
  <?php print $row; ?>
</li>
<?php endforeach; ?>
</ul>