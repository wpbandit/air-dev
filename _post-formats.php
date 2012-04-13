<?php $meta=get_post_custom($post->ID); // GET POST META ?>

<?php if(has_post_format( 'audio' )): // AUDIO POST FORMAT
	$formats=array();
	foreach(explode('|','mp3|ogg') as $format)
		if(isset($meta['_bandit_audio_'.$format.'_url'])) {
			$format=(($format=='ogg')?'oga':$format);
			$formats[]=$format;
		}
?>

<?php if(!empty($formats)): ?>
<script type="text/javascript"> 
jQuery(document).ready(function(){
	if(jQuery().jPlayer) {
		jQuery("#jquery_jplayer_<?php the_ID(); ?>").jPlayer({
			ready: function () {
				jQuery(this).jPlayer("setMedia", {
					<?php if(in_array('mp3',$formats)) { echo 'mp3: "'.$meta['_bandit_audio_mp3_url'][0].'",'."\n"; } ?>
					<?php if(in_array('oga',$formats)) { echo 'oga: "'.$meta['_bandit_audio_ogg_url'][0].'",'."\n"; } ?>
				});
			},
			swfPath: "<?php echo get_template_directory_uri() ?>/js",
			cssSelectorAncestor: "#jp_interface_<?php the_ID(); ?>",
			supplied: "<?php echo implode(',',$formats); ?>"
		});
	}
});
</script>
<?php endif; ?>

			<div class="entry-format audio">
				<div id="jquery_jplayer_<?php the_ID(); ?>" class="jp-jplayer"></div>
				<div class="jp-audio">
					<div id="jp_interface_<?php the_ID(); ?>" class="jp-interface">
						<ul class="jp-controls">
							<li><a href="#" class="jp-play" tabindex="1">play</a></li>
							<li><a href="#" class="jp-pause" tabindex="1">pause</a></li>
							<li><a href="#" class="jp-mute" tabindex="1">mute</a></li>
							<li><a href="#" class="jp-unmute" tabindex="1">unmute</a></li>
						</ul>
						<div class="jp-progress-container">
							<div class="jp-progress">
								<div class="jp-seek-bar">
									<div class="jp-play-bar"></div>
								</div>
							</div>
						</div>
						<div class="jp-volume-bar-container">
							<div class="jp-volume-bar">
								<div class="jp-volume-bar-value"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
<?php endif; ?>


<?php if(has_post_format( 'gallery' )): // GALLERY POST FORMAT ?>
<?php $images=bandit::get_post_images(); ?>

<?php if(!empty($images)): ?>
<script type="text/javascript">
	jQuery(document).ready(function($){
		$("#slider-<?php the_ID(); ?>").slides({
			preload: true,
			preloadImage: '<?php echo get_template_directory_uri(); ?>/img/loading.gif',
			generatePagination: true,
			play: 7000,
			effect: 'fade',
			autoHeight: true,
			hoverPause: true,
			crossfade: true,
			bigTarget: true
		});
	});
</script>
<?php endif; ?>

			<div class="entry-format gallery clearfix">
				<?php if(!empty($images)): ?>
				<div id="slider-<?php the_ID(); ?>" class="slider-gallery clearfix">
					<div class="slides_container clearfix">
						<?php foreach($images as $image): ?>
							<div>
								<?php $image600=wp_get_attachment_image_src($image->ID,'post-format'); ?>
								<img src="<?php echo $image600[0]; ?>" width="<?php echo $image600[1]; ?>" height="<?php echo $image600[2]; ?>" alt="<?php echo $image->post_title; ?>">
								<?php if($image->post_excerpt): ?>
								<span class="caption-bar"><i><?php echo $image->post_excerpt; ?></i></span>
								<?php endif; ?>
							</div>
						<?php endforeach; ?>
					</div>
				</div>
				<?php endif; ?>
			</div>
<?php endif; ?>


<?php if(has_post_format( 'image' )): // IMAGE POST FORMAT ?>
<?php
$images=bandit::get_post_images();
if(!empty($images) && (1==count($images))) {
	$image600=wp_get_attachment_image_src($images[0]->ID,'post-format');
	$image600['title']=$images[0]->post_excerpt;
}
?>
			<div class="entry-format image clearfix">
				<div class="image-container">
					<?php echo (isset($meta['_bandit_image_url'][0])?'<a href="'.$meta['_bandit_image_url'][0].'">':''); ?>
						<?php if(has_post_thumbnail()) { the_post_thumbnail('post-format'); } ?>
						<?php if(isset($image600) && !has_post_thumbnail()) { echo '<img src="'.$image600[0].'" width="'.$image600[1].'" height="'.$image600[2].'" alt="'.$images[0]->post_title.'" >'; } ?>
					<?php echo (isset($meta['_bandit_image_url'][0])?'</a>':''); ?>
					<?php if($image600['title']): ?>
						<span class="caption-bar"><i><?php echo $image600['title']; ?></i></span>
					<?php endif; ?>
				</div>
			</div>
<?php endif; ?>


<?php if(has_post_format( 'link' )): // LINK POST FORMAT ?>
			<div class="entry-format link clearfix">
				<p>
					<a href="<?php echo (isset($meta['_bandit_link_url'][0])?$meta['_bandit_link_url'][0]:'#'); ?>">
						<?php echo (isset($meta['_bandit_link_title'][0])?$meta['_bandit_link_title'][0]:get_the_title()); ?> &rarr;
					</a>
				</p>
			</div>
<?php endif; ?>

<?php if(has_post_format( 'quote' )): // QUOTE POST FORMAT ?>
			<div class="entry-format quote clearfix">
				<blockquote>
					<?php echo (isset($meta['_bandit_quote'][0])?wpautop($meta['_bandit_quote'][0]):''); ?>
				</blockquote>
				<p class="quote-author"><?php echo (isset($meta['_bandit_quote_author'][0])?'&mdash; '.$meta['_bandit_quote_author'][0]:''); ?></p>
			</div>
<?php endif; ?>

<?php if(has_post_format( 'status' )): // STATUS POST FORMAT ?>
			<div class="entry-format status clearfix">
				<blockquote>
					<?php echo (isset($meta['_bandit_status'][0])?wpautop($meta['_bandit_status'][0]):''); ?>
				</blockquote>
			</div>
<?php endif; ?>

<?php if(has_post_format( 'chat' )): // CHAT POST FORMAT ?>
			<div class="entry-format chat clearfix">
				<blockquote>
					<?php echo (isset($meta['_bandit_chat'][0])?wpautop($meta['_bandit_chat'][0]):''); ?>
				</blockquote>
			</div>
<?php endif; ?>

<?php if (has_post_format( 'video' )): // VIDEO POST FORMAT ?>
			<div class="entry-format video clearfix">
<?php 
if(isset($meta['_bandit_video_url'][0])) {
	if(strpos($meta['_bandit_video_url'][0],'youtube.com')) {
		$video_id=strstr($meta['_bandit_video_url'][0],'=');
		$video_id=substr($video_id,1);
		echo '<iframe width="600" height="362" src="http://www.youtube.com/embed/'.$video_id.'?wmode=opaque" frameborder="0" allowfullscreen></iframe>';
	} else {
		global $wp_embed;
		$video = $wp_embed->run_shortcode('[embed width="600"]'.$meta['_bandit_video_url'][0].'[/embed]');
		echo $video;
	}
} elseif(isset($meta['_bandit_video_embed_code'][0])) {
	echo $meta['_bandit_video_embed_code'][0];
}
?>
			</div>
<?php endif; ?>