<?php
/**
 * Template Name: Apply Template
 *
 */

get_header(); ?>


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
                    
                     <div class="continue_btn">
                         
                        <img src="<?php bloginfo( 'template_url' ); ?>/images/continue.jpg" alt="...">
                    </div>
                </div>
            </div>
            </div>
         <div class ="col-sm-5>">
        </div>
    </div>
</div>

<?php get_footer(); ?>
