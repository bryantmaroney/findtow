<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title>
	<?php
	global $page, $paged;
	wp_title( '|', true, 'right' ); ?>
</title>
<link rel="profile" href="http://gmpg.org/xfn/11" />

<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );
	wp_head();
?>
</head>

<body>

<div class="listing-pop" style="display:none;">
	<div class="listing-pop-close">✕</div>
	<div class="listing-pop-title">Create Listing</div>
	<div class="listing-pop-content">
		<?php echo do_shortcode('[gravityform id="2" title="false" description="false" ajax="true"]'); ?>
	</div>
</div>

<div class="login-pop" style="display:none;">
	<div class="listing-pop-close">✕</div>
	<div class="listing-pop-title">Login to Account</div>
	<form name="loginform" id="loginform" action="/wp-login.php"        
 method="post">
    <p class="login-username">
        <label for="user_login">Username</label>
        <input type="text" name="log" id="user_login" class="input" value="" size="20" />
        </p>
    <p class="login-password">
        <label for="user_pass">Password</label>
        <input type="password" name="pwd" id="user_pass" class="input" value="" size="20" />
    </p>
    <p class="login-submit">
        <input type="submit" name="wp-submit" id="wp-submit" class="button-primary" value="Log In" />
        <input type="hidden" name="redirect_to" value="/profile" />
        </p>
    </form>
</div>






