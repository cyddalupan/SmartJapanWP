<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package Smart Japan
 * @subpackage Smart_Japan
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <?php endif; ?>
    <link href="<?php bloginfo( 'template_url' ); ?>/css/bootstrap.min.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  <?php wp_head(); ?> <!-- CSS -->
  <link href="<?php bloginfo( 'template_url' ); ?>/./index_files/main.css" media="screen, projection" rel="stylesheet" type="text/css">



</head>

<body>

<header> 
    <div class="row header-logo">
        <div class="col-md-2">
            <img class="header-logo" src="<?php bloginfo( 'template_url' ); ?>/images/smart_world_jp.jpg"/>
        </div> 
    </div>
    <div class="row custom-nav-header">
        <div class="col-xs-10">
            <div class="menu-main">
                <span class="menu-title">MENU</span>
                <span class="dropdown-logo glyphicon glyphicon-triangle-bottom" aria-hidden="true"></span>
            </div>
        </div>
        <div class="col-xs-2 accdown-logo menu-account">
            <img class="myaccount-logo" src="<?php bloginfo( 'template_url' ); ?>/images/login-signup.png"/>
        </div>
    </div>
    <div class="row header-menu">
        <div class="col-md-9 col-xs-12">
            <div class="custom-nav">
                <div class="original-navigation">
                    <?php wp_nav_menu ( ) ?>
                </div>
                <div class="account-only-navigation">
                    <div class="menu-header-nav-container">
                        <ul class="menu account-menu">
                            <li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item current_page_item menu-item-22"><a href="http://www.agoracrm.com/smart/login">LOGIN</a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item current_page_item signup-menu-header hide-login"><a href="http://www.agoracrm.com/smart/my-account">MY ACCOUNT</a></li>    
                        </ul>  
                    </div>
                </div>
            </div>
        </div>  
    </div>   
</header>