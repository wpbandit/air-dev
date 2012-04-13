<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
	<div>
		<input type="text" id="s" name="s" onblur="if(this.value=='')this.value='Enter your search...';" onfocus="if(this.value=='Enter your search...')this.value='';" value="Enter your search..." />
		<input type="submit" value="" id="searchsubmit">
	</div>
</form>