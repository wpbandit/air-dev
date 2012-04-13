<div id="air-wrap">

	<div id="air-header">
		<a id="wpbandit-logo" href="http://wpbandit.com">WPBandit</a>
		<div id="air-theme-version"><?php echo Air::get_config('theme_name').' '.Air::get_config('theme_version'); ?></div>
		<div id="air-air-version"><?php echo Air::TEXT_Name.' '.Air::TEXT_Version; ?></div>
	</div><!--/air-header-->

	<div id="air-content">

		<div id="air-sidebar">
			<ul id="air-menu">
				<li class="air-menu-title">Theme Modules</li>
				<?php Air::print_theme_admin_menu(); ?>
			</ul>
		</div><!--/air-sidebar-->

		<div id="air-main">

			<div id="air-subheader">
				<ul id="air-headmenu">
					<li><a href="#"><i class="air-icon air-icon-changelog"></i>View Changelog</a></li>
					<li><a href="http://member.wpbandit.com/forums/" target="_blank"><i class="air-icon air-icon-forums"></i>View Forums</a></li>
				</ul>
			</div><!--/air-subheader-->

			<form method="post" action="options.php">
				<div id="air-main-inner" class="air-text">
					<div class="air-section">
						
					<?php if(isset($_GET['settings-updated']) && ('true'===$_GET['settings-updated'])): ?>
						<div id="air-save-notice">
							<p>Settings saved.</p>
						</div>
					<?php endif; ?>

						<?php require(AIR_PATH.'/modules/'.$section.'/'.$section.'-options-page.php'); ?>
						
					</div>
					<div class="air-clear"></div>
				</div><!--/air-main-inner-->
			
				<div id="air-footer">
					<p class="submit air-submit">
						<input type="submit" class="button-secondary" value="Reset Options" />
						<input type="submit" class="button-primary" value="Save Changes" />
					</p>
				</div><!--/air-footer-->
			</form>

		</div><!--/air-main-->

		<div class="air-clear"></div>
	</div><!--/air-content-->

</div><!--/air-wrap-->