<?php
/**
 * Template Name: My Account Template
 *
 */

get_header(); 
?>

<div class="my-account-container">
 <div class="col-md-12 login-header">
	<h2>My Account</h2>
    <div class="my-account-text">
       <p>Welcome back Des!<br/><br/>
    		Your Volume Data Usage is:<br/><span class="data-usage">5GB out of 10GB</span>
    	<br/><br/><img src="<?php bloginfo( 'template_url' ); ?>/images/status-bar.png"/>
    	<br/><br/><br/><br/>
    	</p>
    </div>
 		
 </div>   
 
</div>

<?php get_footer(); ?>
