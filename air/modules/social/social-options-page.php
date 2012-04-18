<div id="air-social" class="air-module-container">

<div class="air-form-box">
	<h3>Create New Item</h3>

	<p>
		<label for="social-item-url"><span>URL</span></label>
		<input id="social-item-url" name="bandit_social[url]" type="text" class="large-text" value="http://">
	</p>
			
	<p>
		<label for="social-item-name"><span>Label</span></label>
		<input id="social-item-name" name="bandit_social[name]" type="text" class="large-text">
	</p>

	<p>
		<label for="custom-menu-item"><span>Icon URL</span></label>
		<input id="social-item-icon" name="bandit_social[icon]" type="text" class="large-text">
	</p>

	<input type="submit" id="bandit_social_submit" class="button-secondary" value="Add Item">
</div>

<div class="air-icons-box">
	<h3>Icons</h3>

	<div id="air-icon-tabs">
		<ul class="air-icon-tab">
			<li><a class="air-icon-tab-link" href="#air-default-icons">Default</a></li>
		</ul>
		
		<div id="air-default-icons">
			<?php echo air_social::default_icon_list(); ?>
		</div>
	</div>
</div>

</div><!-- end .air-module-container -->