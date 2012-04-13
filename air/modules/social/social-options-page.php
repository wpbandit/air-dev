<div class="postbox">
	<div class="handlediv" title="Click to toggle"><br></div>
	<h3 class="hndle"><?php _e('Create New Item','sprout'); ?></h3>
	
	<div class="inside">
		<div class="bandit-sb-form">
			<p id="menu-item-url-wrap">
				<label class="howto" for="social-item-url">
					<span>URL</span>
					<input id="social-item-url" name="bandit_social[url]" type="text" class="code menu-item-textbox" value="http://">
				</label>
			</p>
			<p id="menu-item-name-wrap">
				<label class="howto" for="social-item-name">
					<span>Label</span>
					<input id="social-item-name" name="bandit_social[name]" type="text" class="regular-text menu-item-textbox">
				</label>
			</p>
			<p id="menu-item-name-wrap">
				<label class="howto" for="custom-menu-item">
					<span>Icon URL</span>
					<input id="social-item-icon" name="bandit_social[icon]" type="text" class="regular-text menu-item-textbox">
				</label>
			</p>
			<p class="button-controls">
				<span class="add-to-menu">
					<img class="waiting" src="<?php echo admin_url('images/wpspin_light.gif'); ?>" alt="">
					<input type="hidden" name="bandit_social[action]" value="new" />
					<input type="submit" id="bandit_social_submit" class="button-secondary submit-add-to-menu" value="Add Item">
				</span>
			</p>
		</div>
	</div><!-- #inside -->
</div><!-- #postbox -->	