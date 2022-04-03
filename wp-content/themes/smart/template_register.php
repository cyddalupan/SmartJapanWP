<?php
/**
 * Template Name: Register Template
 *
 */

get_header(); ?>
<div class="login-container">
<div class="row">
    <div class="col-xs-12 login-header">
        <h2>LOGIN</h2>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <input type="text" class="form-control login-form" placeholder="SMART World SIM Number">
    </div>
</div>
<div class="row">  
    <div class = "col-md-12">
          <input type="password" class="form-control login-form" id="pwd" placeholder="Password">       
    </div>   
</div>  
<div>  
    <div class="col-md-12 checkbox-spacing">
         <input type="checkbox" class="login-checkbox" name="remember_me" value="remember_me"> Remember me
    </div>
</div> 
<div class="row">
    <div class = "login-btn">
        <img src="<?php bloginfo( 'template_url' ); ?>/images/logon.png" alt="logon">
    </div>
</div>

<p class="login-parag">First time user? Register now<br>
Forgot User ID /Password</p>
</div><br/><br/>

<?php get_footer(); ?>
