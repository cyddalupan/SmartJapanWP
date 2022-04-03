<?php
/**
 * Template Name: Homepage Template
 *
 */
get_header(); ?>
<?php
include('slider2.php');
?>
<div class="learnmore_section">
    <div class="row row_title_learnmore">
    <div class="col-sm-2">
    </div>
    <div class="title_learnmore col-sm-8">
            <h2>      
                <?php     $learnmore_title = get_post( 117 ); 
                //print_r($learnmore_title);
                echo $learnmore_title->post_content;
                 ?>
                </h2>
    </div>
    <div class="col-sm-2">
    </div>
    
    </div>
    <div class="row row_circle">
        <div class="col-sm-2">
    </div>
        <div class="col-sm-4">
			<div class="wordpress-post">
            <?php 
                $learnmore_content = get_post( 24 ); 
                //$learnmore_img =  get_the_post_thumbnail(24, 'thumbnail' );
               // print_r($learnmore_content);
                echo $learnmore_content->post_content;   
                //echo $learnmore_img;
            ?>
			</div>
            <div class="learnmore">
                <a href="products">
                	<img src="<?php bloginfo( 'template_url' ); ?>/images/learn-more.png" alt="...">
                </a>
        </div>
        </div>
        <div class="col-sm-4">
			<div class="wordpress-post">
            <?php 
                $learnmore_content = get_post( 102); 
                //print_r($learnmore_content);
                echo $learnmore_content->post_content;   
            ?>
			</div>
             <div class="learnmore">
                 <a href="products">
                    <img src="<?php bloginfo( 'template_url' ); ?>/images/learn-more.png" alt="...">
                 </a>
            </div>
     </div>
     <div class="col-sm-2">
    </div>
    </div>
</div>

<div class="container_applynow">
	<div class="row">
    	 <div class ="col-sm-5>">
        </div>
         <div class ="col-sm-2>">
           <h1><strong>APPLY NOW!</strong></h1>
           		<div class="form_cotent">
                   	 <form class="form-inline">
                          <div class="form-group">
                            <input type="text" class="form-control Content" id="input_applynow" placeholder="First Name">
                          </div>
                          <div class="form-group">
                            
                            <input type="text" class="form-control Content" id="input_applynow" placeholder="Last Name">
                          </div>
                    </form>
                    <form class="form-inline">
                          <div class="form-group">
                            <input type="text" class="form-control Content" id="input_applynow" placeholder="Date of Birth">
                          </div>
                          <div class="form-group"> 
                            <input type="text" class="form-control Content" id="input_applynow" placeholder="Gender">
                          </div>
                    </form>
                     <form class="form-inline">
                          <div class="form-group">
                            <input type="text" class="form-control Content" id="input_applynow" placeholder="Primary Mobile No.">
                          </div>
                          <div class="form-group">
                            
                            <input type="text" class="form-control Content" id="input_applynow" placeholder="Email">
                          </div>
                    </form>
                    <form class="form-inline">
                          <textarea class="form-control mailingInput" placeholder="Mailing/Delivery Address"></textarea>
                    </form>
                    <form class="form-inline">
                          <div class="form-group">
                            
                            <input type="text" class="form-control Content" id="input_prefecture" placeholder="Prefecture">
                          </div>
                    </form>
                    <div class="row row_continue_btn">
                    	<div class ="col-sm-3>">
                        </div>
                    
                        <div class ="col-sm-6>">
                             <div class="continue_btn">
                             
                            <img src="<?php bloginfo( 'template_url' ); ?>/images/continue.jpg" alt="...">
                        	</div>
                        </div>
                        <div class ="col-sm-3>">
                        </div>

                        
                        
                        
                    </div>
                </div>
            </div>
            </div>
         <div class ="col-sm-5>">
        </div>
    </div>
</div>
<div class="questions_concerns">
    <div class="row row_questions_concerns">
    <div class="col-sm-2">
    </div>
    <div class="title_learnmore col-sm-8">
            <h2>      
                <?php     $learnmore_title = get_post( 138 ); 
                //print_r($learnmore_title);
                echo $learnmore_title->post_content;
                 ?>
                </h2>
    </div>
    <div class="col-sm-2">
    </div>
    
    </div>
    <div class="row questions_concerns">
        <div class="col-sm-1">
    </div>
        <div class="col-sm-3">

            <?php 
                $learnmore_content = get_post( 64 ); 
                //$learnmore_img =  get_the_post_thumbnail(24, 'thumbnail' );
               // print_r($learnmore_content);
                echo $learnmore_content->post_content;   
                //echo $learnmore_img;
            ?>

        </div>
        <div class="col-sm-4">
            <?php 
                $learnmore_content = get_post( 136); 
                //print_r($learnmore_content);
                echo $learnmore_content->post_content;   
            ?>
     </div>
     <div class="col-sm-3">
            <?php 
                $learnmore_content = get_post( 143 ); 
                //print_r($learnmore_content);
                echo $learnmore_content->post_content;   
            ?>
     </div>
     <div class="col-sm-1">
    </div>
    </div>
</div>

<?php get_footer(); ?>