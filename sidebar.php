<ul id="sidebar">
	<?php if (is_home()) { ?>
		<?php dynamic_sidebar('sidebar-main'); ?>
	<?php } elseif (is_page()) { ?>
		<?php dynamic_sidebar('sidebar-page'); ?>
	<?php } elseif (is_single()) { ?>
		<?php dynamic_sidebar('sidebar-single'); ?>
	<?php } else { ?>
		<?php dynamic_sidebar('sidebar-main'); ?>
	<?php } ?>
</ul>