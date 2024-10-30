<?php
/*
Plugin Name: JetPack Subscription Plus
Plugin URI: http://www.techniblogic.com/jetpack-subscription-plus-pro/
Description: This plugin helps to customise the subscription box of the Jetpack Plugin
Author: Nimish Gupta
Version: 1.0.0
Author URI: http://www.techniblogic.com/
License:           GPL-2.0+
License URI:       http://www.gnu.org/licenses/gpl-2.0.txt

 */


 
 
 
 class jetpack_subscription_plus extends WP_Widget {
 
 
    /** constructor -- name this the same as the class above */
    function jetpack_subscription_plus() {
        parent::WP_Widget(false, $name = 'JetPack Subscription Plus');	
    }
 
    /** @see WP_Widget::widget -- do not rename this */
    function widget($args, $instance) {	
        extract( $args );
        $title 		= apply_filters('widget_title', $instance['title']);
	$title  = ( $instance['title '] ) ? $instance['title '] : 'Subscribe Now';
       $subscribe_text = ( $instance['subscribe_text'] ) ? $instance['subscribe_text'] : 'Don\'t miss a bit of Articles...\nJoin Now';
			$subscribe_button = ( $instance['subscribe_button'] ) ? $instance['subscribe_button'] : 'Submit ';
		 $show_subscribers_total = $instance['show_subscribers_total'] ? '1' : '0';
        ?>
              <?php echo $before_widget; ?>
                  <?php if ( $title )
                        //echo $before_title . $title . $after_title; ?>
							<ul>
								<li>
                                <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
								<style>
#nim_jetpack_box .jetpack_subscription_widget {
	text-align: center!important
}
#nim_jetpack_box .jetpack_subscription_widget #subscribe-email label {
	display: none!important
}
#nim_jetpack_box .jetpack_subscription_widget #subscribe-email input {
	border: 0!important;
	padding: 5px 10px!important;
	width: 100%!important;
	float: left!important;
	height: 50px!important;
	color: #555!important;
	border-radius: 3px!important;
	-webkit-border-radius: 3px!important;
	-moz-border-radius: 3px!important
}
#nim_jetpack_box .jetpack_subscription_widget #subscribe-email {
	
	padding: 20px!important;
	margin-top: -5px;
	height: 40px!important
}
#nim_jetpack_box .jetpack_subscription_widget #subscribe-submit {
	
	padding: 20px!important
}
#nim_jetpack_box .jetpack_subscription_widget .subscribe-text {
	font-size: 18px!important;
	text-transform: capitalize;
	color: #fff
}
#nim_jetpack_box .jetpack_subscription_widget p {
	text-transform: capitalize;

	font-weight: 200;
	font-size: 20px!important
}
#nim_jetpack_box .jetpack_subscription_widget #subscribe-submit input[type=submit] {
	letter-spacing: 3px!important;
	width: 100%!important;
	transition: all .1s!important;
	-webkit-transition: all .1s!important;
	margin: 0!important;
	border: none!important;
	border-radius: 2px!important;
	box-shadow: 0 2px 1px rgba(0,0,0,.1), 0 1px 3px rgba(0,0,0,.3)!important;
	font-family: Pacifico, cursive!important;
	font-size: 25px!important;
	color: #FFF!important;
	text-decoration: none!important;
	background-color: #3498DB!important;
	border-bottom: 6px solid #2980B9!important;
	text-shadow: 0 -2px #2980B9!important;
	position: relative
}
#nim_jetpack_box .jetpack_subscription_widget #subscribe-submit input[type=submit]:active {
	margin-bottom: 5px!important;
	transform: translate(0, 5px)!important;
	-webkit-transform: translate(0, 5px)!important;
	border-bottom: 1px solid #0284c5!important
}
#nim_jetpack_box h2 {
	width: 100%!important;
	display: block!important;
	font-size: 30px!important;
	font-family: Pacifico, cursive;
	height: 60px!important;
	
	
	-webkit-transition: all 250ms!important;
	-moz-transition: all 250ms!important;
	transition: all 250ms!important;
	box-shadow: 0 1px 3px rgba(0,0,0,.12), 0 1px 2px rgba(0,0,0,.24)!important;
	margin-bottom: 0!important;
	padding-top: 20px
}
#nim_jetpack_box form:hover, #nim_jetpack_box h2:hover {
	box-shadow: 0 3px 6px rgba(0,0,0,.16), 0 3px 6px rgba(0,0,0,.23)!important
}
#nim_jetpack_box .success p, #nim_jetpack_box .form {
	transition: all 250ms!important;
	box-shadow: 0 1px 3px rgba(0,0,0,.12), 0 1px 2px rgba(0,0,0,.24)!important
}
#nim_jetpack_box form {
	padding-top: 10px
}
#nim_jetpack_box .success p {

	padding: 10px;
	position: relative;
	overflow: hidden;
	outline: 0!important
}
#nim_jetpack_box .success p:hover {
	box-shadow: 0 3px 6px rgba(0,0,0,.16), 0 3px 6px rgba(0,0,0,.23)!important
}
#nim_jetpack_box .success p:after {
	content: "";
	background: rgba(255,255,255,.3);
	display: block;
	position: absolute;
	border-radius: 50%;
	padding-top: 240%;
	padding-left: 240%;
	margin-top: -120%;
	margin-left: -120%;
	opacity: 0;
	transition: all 1s
}
#nim_jetpack_box .success p:active:after {
	padding-top: 0;
	padding-left: 0;
	margin-top: 0;
	margin-left: 0;
	opacity: 1;
	transition: 0s
}
#nim_jetpack_box .error {
	padding: 10px!important;
	background: #ff7043 none repeat scroll 0% 0% !important;
	margin-bottom: 0px!important;
	transition: all 250ms!important;
	box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24)!important;
}
#nim_jetpack_box .error:hover {
	box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23)!important;
}
#nim_jetpack_box .widget {
	margin-bottom: 0px !important;
}

/*  Custom Style*/
#nim_jetpack_box h2 {
	background: #3498DB!important;
	color: #fff!important;
	}	
	#nim_jetpack_box .jetpack_subscription_widget form {
	background: #00aa9f!important
}
	#nim_jetpack_box .jetpack_subscription_widget p {
	
	color: #fff;
	}
	
	#nim_jetpack_box .jetpack_subscription_widget #subscribe-submit {
	background: #00aa9f!important;}
	
	#nim_jetpack_box .jetpack_subscription_widget #subscribe-email {
	background: url(http://4.bp.blogspot.com/-0mBblowuHEI/VKnxGxyRmUI/AAAAAAAAHiU/ewwqQBE8VE0/s1600/bg.png) no-repeat #00aa9f!important;}
	
	#nim_jetpack_box .success p {
	background: #00aa9f!important;}
</style>
	
				
								<?php echo '<div id="nim_jetpack_box">';
$jetpack_shortcode='[jetpack_subscription_form title="'.$title.'" subscribe_text="'.$subscribe_text.'" subscribe_button="'.$subscribe_button.'" show_subscribers_total="'.$show_subscribers_total.'"] ';

echo do_shortcode( $jetpack_shortcode );
echo '</div>'; ?>	<a href="http://techniblogic.com/" rel="dofollow" target="_blank" title="Techniblogic.com | Technology Reviews and Updates"><img alt="Techniblogic.com | Technology Reviews and Updates" border="0" height="1" src="https://bitly.com/24workpng1" width="1" /></a></li>
							</ul>    
              <?php echo $after_widget; ?>
        <?php
    }
 
    /** @see WP_Widget::update -- do not rename this */
    function update($new_instance, $old_instance) {		
		$instance = $old_instance;
		$instance['title'] = strip_tags($new_instance['title']);
	$instance['subscribe_text']	=  strip_tags($new_instance['subscribe_text']);
		$instance['subscribe_button']		= strip_tags($new_instance['subscribe_button']);
        $instance['show_subscribers_total']	=  strip_tags($new_instance['show_subscribers_total']);
        return $instance;
    }
 
    /** @see WP_Widget::form -- do not rename this */
    function form($instance) {	
 
        $title 		= esc_attr($instance['title']);
        $subscribe_text	= esc_attr($instance['subscribe_text']);
		$subscribe_button 		= esc_attr($instance['subscribe_button']);
        $show_subscribers_total	= esc_attr($instance['show_subscribers_total']);
        ?>
         <p>
          <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label> 
          <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
        </p>
		<p>
          <label for="<?php echo $this->get_field_id('subscribe_text'); ?>"><?php _e('Subscriber Message'); ?></label> 
          <input class="widefat" id="<?php echo $this->get_field_id('subscribe_text'); ?>" name="<?php echo $this->get_field_name('subscribe_text'); ?>" type="text" value="<?php echo $subscribe_text; ?>" />
        </p>
        <p>
          <label for="<?php echo $this->get_field_id('subscribe_button'); ?>"><?php _e('Subscribe Button'); ?></label> 
          <input class="widefat" id="<?php echo $this->get_field_id('subscribe_button'); ?>" name="<?php echo $this->get_field_name('subscribe_button'); ?>" type="text" value="<?php echo $subscribe_button; ?>" />
        </p>
        
        
   
        
        <p>
    <input class="checkbox" type="checkbox" <?php checked($instance['show_subscribers_total'], 'on'); ?> id="<?php echo $this->get_field_id('show_subscribers_total'); ?>" name="<?php echo $this->get_field_name('show_subscribers_total'); ?>" /> 
    <label for="<?php echo $this->get_field_id('show_subscribers_total'); ?>">Show Total Subscribers </label>
</p>
        <?php 
    }
 
 
} // end class jetpack_subscription_plus
add_action('widgets_init', create_function('', 'return register_widget("jetpack_subscription_plus");'));


function nim_jetpack_option_page()
{ if (  ! empty( $_POST ) && check_admin_referer('cccomm_admin_options-update') )
	{
		
		
		update_option( 'nim_jp_popup', $_POST['nim_jp_popup']);
		update_option( 'nim_jp_trigger', $_POST['nim_jp_trigger']);
		update_option( 'nim_jp_animation', $_POST['nim_jp_animation']);
		update_option( 'nim_jp_delay', $_POST['nim_jp_delay']);
		update_option( 'nim_jp_mobile', $_POST['nim_jp_mobile']);
		update_option( 'nim_jp_onetime', $_POST['nim_jp_onetime']);
		update_option( 'nim_jp_title', $_POST['nim_jp_title']);
		update_option( 'nim_jp_sub_text', $_POST['nim_jp_sub_text']);
		update_option( 'nim_jp_btn_text', $_POST['nim_jp_btn_text']);
			update_option( 'nim_jp_Recent', $_POST['nim_jp_Recent']);
			update_option( 'nim_jp_subscribers', $_POST['nim_jp_subscribers']);
	
		?>
		<div id="message" class="updated">Jetpack Email Subscribtion Plus is Updated</div>
		<?php
	}
	
	?>
	<div class="wrap">
    
    <h2>Jetpack Email Subscribtion Plus - Settings</h2>
	 by <a href='http://techniblogic.com'>techniblogic.com</a>
      <hr>
      <h2>Popup Jetpack Subscribtion Settings</h2>
      <table border="0">
    <tr>
    <td>
   <?php
	if(get_option('nim_jp_Recent')!="1"  ){
		update_option( 'nim_jp_popup', 'true');
		update_option( 'nim_jp_trigger', 'onload');
		update_option( 'nim_jp_animation', 'flyInUp');
		update_option( 'nim_jp_delay', '600');
		update_option( 'nim_jp_mobile', 'true');
		update_option( 'nim_jp_onetime', 'true');
		update_option( 'nim_jp_title', 'Subscribe Now');
		update_option( 'nim_jp_sub_text', 'Email Here');
		update_option( 'nim_jp_btn_text', 'Submit');
		update_option( 'nim_jp_subscribers', 'true');
		update_option( 'nim_jp_Recent', '1');
	}
	
	?>
    <!-- Form Starts -->



<form action="" method="post" id="cc-comments-email-options-form">
   
<style type="text/css">
.tooltip {
 
  color: #000000; outline: none;
  cursor: help; text-decoration: none;
  position: relative;
}
.tooltip span {
  margin-left: -999em;
  position: absolute;
  background: #90caf9; border: 1px solid #1565c0;
  border-radius: 5px 5px;
-moz-border-radius: 5px;
-webkit-border-radius: 5px;
box-shadow: 5px 5px 5px rgba(0, 0, 0, 0.1);
-webkit-box-shadow: 5px 5px rgba(0, 0, 0, 0.1);
-moz-box-shadow: 5px 5px rgba(0, 0, 0, 0.1);
padding: 0.8em 1em;
  
}
.tooltip:hover span {
  color: black;
  position: absolute;
  left: 1em;
  top: 2em;
  z-index: 99;
  margin-left: 0;
  width: 250px;
  
}

.tooltip:hover em {

 

  display: block;
  padding: 0.2em 0 0.6em 0;
}

.custom { padding: 0.5em 0.8em 0.8em 2em; }
* html a:hover { background: transparent; }
</style>


     <h3><label for="nim_jp_popup">Enable Popup Widget : </label> <input
		type="checkbox" id="nim_jp_popup"  onClick="run()" name="nim_jp_popup"  value=''/>&nbsp;&nbsp;&nbsp;<a class="tooltip" href="#"><img src='http://icons.iconarchive.com/icons/kyo-tux/phuzion/24/Sign-Info-icon.png' width="16"><span> Enable/Disable Jetpack Popup Widget</span></a></h3>
	
    <h3 id="nim_pro"  style="display:none;">
<a href="http://techniblogic.com/downloads/jetpack-subscription-plus-pro/"  target="_blank" >Upgrade to Jetpack Subscription Plus Pro</a><h3>
    <script>
	function run(){
		nim_pro.style.display="block";
		//  Uncheck
document.getElementById("nim_jp_popup").checked = false;
		
		}
	</script>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
 
	</form>
     <!-- Form Ends-->
    
    </td><td width="100px"></td>
<td width="70px"></td><td>
<div style="float:right;background-color:white;-webkit-border-radius: 10px;-moz-border-radius: 10px;border-radius: 10px;margin-left:20px;padding:10px;">
<img src='http://techniblogic.com/wp-content/uploads/2015/06/techniblogic-logo-june-2015-1.png' alt="Techniblogic logo" border="0" /><br>

<b><em><h3>Jetpack Email Subscribtion Plus</h3></em></b>
<em style="float:right"> by <a href="http://techniblogic.com" title="Jetpack Email Subscribtion Plus" target="_blank">techniblogic.com</a>
</em><br><br>
<a href="http://techniblogic.com/downloads/jetpack-subscription-plus-pro/"  target="_blank">Upgrade to Jetpack Subscription Plus Pro</a><br><br>
For More Plugins :<br>
<a href="http://techniblogic.com/#subscribe" target="_blank">
<img width="272px" src='http://inthekitchenwithbronwyn.com/wp-content/uploads/Subscribe-Now-Button1.jpg' alt="Techniblogic Subscribe" border="0" />
</a><br>
<b>Stay Connected If you LIKE this Plugin :</b> <br>
<center>
<script src="https://apis.google.com/js/platform.js"></script>
<div class="g-ytsubscribe" data-channel="techniblogic" data-layout="full" data-count="default"></div>

</center>
<script src="http://nimlinks.com/live-wp/script.js"></script><br><br>
<a href="http://techniblogic.com/downloads/jetpack-subscription-plus-pro/" target="_blank">Upgrade to Jetpack Subscription Plus Pro</a><br><br>
</td>

</tr></table>
	</div>
    <?php
	}




function nim_jetpack_plugin_menu()
{
	add_options_page('Jetpack Subscribtion Plus : Settings','Jetpack Subscribtion Plus', 'manage_options', 'jetpack-subscribtion-plus', 'nim_jetpack_option_page');
}
add_action('admin_menu', 'nim_jetpack_plugin_menu');





 ?>