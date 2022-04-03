<article id="slider">
	<input checked="" type="radio" name="slider" id="slide1" selected="true">
	<input type="radio" name="slider" id="slide2" selected="false">
	<input type="radio" name="slider" id="slide3" selected="true">
	<input type="radio" name="slider" id="slide4" selected="true">
	<input type="radio" name="slider" id="slide5" selected="true">

	<!-- The Slider -->
	<div id="slides">
		<div id="overflow">
			<div class="inner">
				<article>
					<div class="row free_calls">
                    	<div class = "row">
                            <div class="col-sm-12">

                                     <div class="slider1_girl">
										<?php 
                                            $learnmore_content = get_post( 44 ); 
                                            //print_r($learnmore_content);
                                            echo $learnmore_content->post_content;
                                        ?>
                                    </div>
                                    
										<?php // echo get_the_post_thumbnail(44, 'full'); ?>
                            		
                            </div>
                        </div>
                        </div>
					</article>
                    
                    <article>
						<div class="row slide2">
                         
                            <div class="col-sm-12 ">
                          		 <div class="slider2_girl">
                                    <h1>
                                            <?php
                                            $post_id = 204;
                                            $queried_post = get_post($post_id);
                                            $title = $queried_post->post_title;
                                            echo $title;
                                            //echo $queried_post->post_content;
                                        ?>
                                        
                                        </h1>
                                    
                                    <div class="row">
                                    <div class="col-sm-4"></div>
                                    <div class="col-sm-4 slide2_content">
                                        <?php 
                                            $learnmore_content = get_post( 204 ); 
                                            //print_r($learnmore_content);
                                            echo $learnmore_content->post_content;
                                        ?>
    
                                    </div>
                                    <div class="col-sm-4"></div>
                                    </div>
								</div>
                            </div>
                        </div>
					</article>
                    
                    <article>
                    
                    <div class="row slide3">
                            <div class="col-sm-12">
                                 <div class="slider3_girl slider2_girl">
                                    <h1>
        
                                        <?php
                                            $post_id = 203;
                                            $queried_post = get_post($post_id);
                                            $title = $queried_post->post_title;
                                            echo $title;
                                            //echo $queried_post->post_content;
                                        ?>
                                        
                                        </h1>
                                        <div class="row">
                                        <div class="col-sm-4"></div>
                                        <div class="col-sm-4 slide2_content">
                                            <?php 
                                                $learnmore_content = get_post( 203 ); 
                                                //print_r($learnmore_content);
                                                echo $learnmore_content->post_content;
                                            ?>
        
                                        </div>
                                        <div class="col-sm-4"></div>
                                        </div>
                                 </div>
                            </div>
                        </div>
                    
				</article>
			</div> <!-- .inner -->
		</div> <!-- #overflow -->
	</div> <!-- #slides -->

	<!-- Controls and Active Slide Display -->
	<div id="controls">
		<label for="slide1"></label>
		<label for="slide2"></label>
		<label for="slide3"></label>
		<!--<label for="slide4"></label>
		<label for="slide5"></label>-->
	</div> <!-- #controls -->
	
	<div id="active">
		<label for="slide1"></label>
		<label for="slide2"></label>
		<label for="slide3"></label>
		<!--<label for="slide4"></label>
		<label for="slide5"></label>-->	
	</div> <!-- #active -->
</article> <!-- #slider -->
