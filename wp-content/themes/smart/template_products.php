<?php
/**
 * Template Name: Products Template
 *
 */

get_header(); ?>


<div class="row products">
	<div class="col-sm-4"></div>
    <div class="col-sm-4 product_content">
    
        <?php
            $product_content = get_post( 13 ); 
                //print_r($learnmore_content);
                echo $product_content->post_content;
        ?>
    </div>
    <div class="col-sm-2"></div>
</div>

<br><br>
<div class="row">
	<?php 
        
		$learnmore_content = get_post( 74 ); 
		//print_r($learnmore_content);
		echo $learnmore_content->post_content;
		
	?>
</div>

<?php get_footer(); ?>
