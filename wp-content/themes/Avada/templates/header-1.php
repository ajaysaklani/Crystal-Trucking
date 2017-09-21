<?php

// Do not allow directly accessing this file.
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}
?>

<div class="fusion-header-sticky-height"></div>
<div class="fusion-header">
	<div class="krystal-top-nav fusion-row">
		
		<div class="krystal-logo"><?php avada_logo(); ?></div>
	
		<div class=" pull-right top-nav-top">
			<div class="btn-lan">
			<?php echo avada_secondary_nav();?>
		</div><!--// Language Switcher page-->
		<div>
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('top-header') ) : endif; ?>
		</div>
		</div>
	
	</div>
<div class="fusion-row">
	<div class="krystal-main-nav"><?php avada_main_menu(); ?></div>
	</div>
</div>

