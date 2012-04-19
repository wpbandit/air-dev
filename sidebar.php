<ul id="sidebar">
	<?php if (is_home()) { ?>
		<?php dynamic_sidebar('sidebar'); ?>
		
	<?php } elseif (is_single()) { ?>
		<?php dynamic_sidebar('sidebar-single'); ?>
		
	<?php } elseif (is_archive()) { ?>
		<?php dynamic_sidebar('sidebar-archive'); ?>
		
	<?php } elseif (is_page()) { ?>
		<?php dynamic_sidebar('sidebar-page'); ?>
		
	<?php } elseif (is_search()) { ?>
		<?php dynamic_sidebar('sidebar-search'); ?>
		
	<?php } elseif (is_404()) { ?>
		<?php dynamic_sidebar('sidebar-404'); ?>

	<?php } else { ?>
		<?php dynamic_sidebar('sidebar'); ?>
	<?php } ?>
</ul>