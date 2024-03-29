<?php
/**
Template Name: Hangout Registration Page
*/

/* Membership code start here */ 
/* Date:- 27/08/2013 By Ravi Prakash*/

	
global $wpdb;
include('plugin_function.php');
$ghanghout_enabled_membership=get_post_meta($post->ID, "ghanghout_enabled_membership", true);
$membership_pass=1;
$hangout_status	=	get_post_meta(get_the_ID(),'current_hangout_status',true);

if(isset($_GET['run_event'])){
$slug=$_GET['ghangout'];

$time_date=$_GET['run_event'];
$mail_add=$_GET['email'];
$time_date1=explode('_',$time_date);
 $date=base64_decode($time_date1[0]);
 $time=base64_decode($time_date1[1]);

$args=array(
'name' => $slug,
'post_type' => 'ghangout',
'post_status' => 'publish',
'posts_per_page' => 1
);
$current_date=date('Y-m-d');

if(strtotime($date)<strtotime($current_date)){
$url=get_permalink($my_posts[0]->ID );
$url_parts=explode("?",$url);
 if(count($url_parts) > 1)	{


$eventlinkURL = get_permalink( $my_posts[0]->ID )."&replay_preview=true";

}else{
$eventlinkURL = get_permalink( $my_posts[0]->ID )."?replay_preview=true";
}

wp_redirect($eventlinkURL);


}elseif(strtotime($date)==strtotime($current_date)){
$schedule_for_hangout="Today ".'_'.$time;
$url=get_permalink( $my_posts[0]->ID  );
$url_parts=explode("?",$url);
 if(count($url_parts) > 1)	{
$eventlinkURL = get_permalink( $my_posts[0]->ID )."&thankyou=true&schedule=$schedule_for_hangout";
}else{
$eventlinkURL = get_permalink( $my_posts[0]->ID )."?thankyou=true&schedule=$schedule_for_hangout";

}

wp_redirect($eventlinkURL);

}else{
$schedule_for_hangout=$date.'_'.$time;
$url=get_permalink($my_posts[0]->ID );
$url_parts=explode("?",$url);
 if(count($url_parts) > 1)	{

$eventlinkURL = get_permalink( $my_posts[0]->ID )."&thankyou=true&schedule=$schedule_for_hangout";

}else{
$eventlinkURL = get_permalink( $my_posts[0]->ID )."?thankyou=true&schedule=$schedule_for_hangout";
}
wp_redirect($eventlinkURL);

}
exit;


}
	
if($ghanghout_enabled_membership=="yes"){
	$ghangout_membership_Type = get_post_meta($post->ID, "ghangout_membership_Type", true);
	$ghangout_member_login_url = get_post_meta($post->ID,"ghangout_member_login_url",true);
	$ghangout_member_msg = get_post_meta($post->ID,"ghangout_member_msg",true);
	$member_msg = $ghangout_member_msg; 
	
	if($ghangout_membership_Type=='instamember'){
		$current_user = @stms_get_current_member();
		$user_id = $current_user->ID;
		if($user_id<1){
			$member_msg .='<a href="'.$ghangout_member_login_url.'">Click here to Login';
			$membership_pass=0;
		} else {

				/* For Event page */
				if($hangout_status == '1' || $hangout_status == ''){
					$ghangout_event_page_member_access = get_post_meta($post->ID, "ghangout_event_page_member_access", true);
					//print_r($ghangout_event_page_member_access);
					
					 $is_user = $wpdb->get_var('select member_id from '.$wpdb->prefix.'stms_transactions where product_id in('. $ghangout_event_page_member_access .') and member_id="'.$user_id.'"');
					 if($is_user==''){
						$membership_pass=0;
					 }
				}
				/* For Live page */
				if($hangout_status == '2'){
					$ghangout_live_page_member_access = get_post_meta($post->ID, "ghangout_live_page_member_access", true);
					$is_user = $wpdb->get_var('select member_id from '.$wpdb->prefix.'stms_transactions where product_id in('. $ghangout_live_page_member_access .') and member_id="'.$user_id.'"');
					 if($is_user==''){
						$membership_pass=0;
					 }
				}

				/* For Re Play page */
				if($hangout_status == '3'){
					$ghangout_replay_page_member_access = get_post_meta($post->ID, "ghangout_replay_page_member_access", true);
					$is_user = $wpdb->get_var('select member_id from '.$wpdb->prefix.'stms_transactions where product_id in('. $ghangout_replay_page_member_access .') and member_id="'.$user_id.'"');
					 if($is_user==''){
						$membership_pass=0;
					 }
				}
				
		}
	}
	else if($ghangout_membership_Type=='wpm'){
		$user_id = $current_user->ID;
		if($user_id<1){
			$membership_pass=0;
			$member_msg .='<a href="'.$ghangout_member_login_url.'">Click here to Login';
		} else {
			
				/* For Event page */
				if($hangout_status == '1' || $hangout_status == ''){
					$ghangout_event_page_member_access = get_post_meta($post->ID, "ghangout_event_page_member_access", true);
					//print_r($ghangout_event_page_member_access);
					
					 $is_user = $wpdb->get_var('select user_id from '.$wpdb->prefix.'wlm_userlevels where level_id in('. $ghangout_event_page_member_access .') and user_id="'.$user_id.'"');
					 if($is_user==''){
						$membership_pass=0;
					 }
				}
				/* For Live page */
				if($hangout_status == '2'){
					$ghangout_live_page_member_access = get_post_meta($post->ID, "ghangout_live_page_member_access", true);
					$is_user = $wpdb->get_var('select user_id from '.$wpdb->prefix.'wlm_userlevels where level_id in('. $ghangout_live_page_member_access .') and user_id="'.$user_id.'"');
					 if($is_user==''){
						$membership_pass=0;
					 }
				}

				/* For Re Play page */
				if($hangout_status == '3'){
					echo $ghangout_replay_page_member_access = get_post_meta($post->ID, "ghangout_replay_page_member_access", true);
					$is_user = $wpdb->get_var('select user_id from '.$wpdb->prefix.'wlm_userlevels where level_id in('. $ghangout_replay_page_member_access .') and user_id="'.$user_id.'"');
					 if($is_user==''){
						$membership_pass=0;
					 }
				}
										
			}
	} else {
		$sid = $_COOKIE['PHPSESSID'];
		$name = $sid.'_FULLNAME';
		$username =  $_SESSION[$name];
		if($username==''){
		$membership_pass=0;
		$member_msg .='<a href="'.$ghangout_member_login_url.'">Click here to Login';
		} else {
			$user_id ='test1@test1.com';
			/* For Event page */
			if($hangout_status == '1' || $hangout_status == ''){
				$ghangout_event_page_member_access = get_post_meta($post->ID, "ghangout_event_page_member_access", true);
				$prd = explode(',',$ghangout_event_page_member_access);
				$event_access='';
				foreach($prd as $prddata){
					
					if($event_access==''){
						$event_access .= "'".$prddata."'";
					} else {
						$event_access .= ",'".$prddata."'";
					}
				}
				
				
				 $is_user = $wpdb->get_var('select email from '.$wpdb->prefix.'msys_payments
				 where fk_prod_code in('. $event_access .') and email="'.$user_id.'" and is_refund=0');
				 if($is_user==''){
					$membership_pass=0;
				 }
			}
			/* For Live page */
			if($hangout_status == '2'){
				$ghangout_live_page_member_access = get_post_meta($post->ID, "ghangout_live_page_member_access", true);

				$prd = explode(',',$ghangout_live_page_member_access);
				$event_access='';
				foreach($prd as $prddata){
					
					if($event_access==''){
						$event_access .= "'".$prddata."'";
					} else {
						$event_access .= ",'".$prddata."'";
					}
				}

				$is_user = $wpdb->get_var('select email from '.$wpdb->prefix.'msys_payments
				 where fk_prod_code in('. $event_access .') and email="'.$user_id.'" and is_refund=0');
				 if($is_user==''){
					$membership_pass=0;
				 }
			}

			/* For Re Play page */
			if($hangout_status == '3'){
				 $ghangout_replay_page_member_access = get_post_meta($post->ID, "ghangout_replay_page_member_access", true);

				 $prd = explode(',',$ghangout_replay_page_member_access);
				$event_access='';
				foreach($prd as $prddata){
					
					if($event_access==''){
						$event_access .= "'".$prddata."'";
					} else {
						$event_access .= ",'".$prddata."'";
					}
				}

				$is_user = $wpdb->get_var('select email from '.$wpdb->prefix.'msys_payments
				 where fk_prod_code in('. $event_access .') and email="'.$user_id.'" and is_refund=0');
				 if($is_user==''){
					$membership_pass=0;
				 }
			}
		
		}
	}
} 
/* Membership code end here */global $post;
$slug	= $_REQUEST['ghangout'];


$args=array(
'name' => $slug,
'post_type' => 'ghangout',
'post_status' => 'publish',
'posts_per_page' => 1
);
$my_posts = get_posts( $args );





/* $ghangout_layout_array = get_post_meta($my_posts[0]->ID); */
$ghangout_layout_array = get_post_meta($post->ID);
$selected_theme=$ghangout_layout_array['google_hangout_theme'][0];
$ghangout_layout=str_replace('_',' ',$selected_theme);
if($ghangout_layout=="Default" ||$ghangout_layout=="" ){
	$blog_url=$post->guid;
	$layout=get_post_meta($post->ID, "g_hangout_layout_type", true);
	$year = date("Y",time());
	$logo_text=get_post_meta($post->ID, "ghanghout_logo_text", true);
	if($_GET['thankyou']== 'true')
	{
		include('content-thankyou.php');
	}
	elseif($_GET['replay_preview']== 'true')
	{
		include('content-replay-preview.php');
	}
	elseif(($hangout_status == '3') || ($_GET['replay_preview'] == 'true'))
	{
		include('content-replay.php');
	}
	elseif(($hangout_status == '2') || ($_GET['live_preview'] == 'true'))
	{
		include('content-live.php');
	}
	elseif(get_post_meta($post->ID, "hangout_public_private", true) == "private")
	{
		include('content-private.php');
	}
	elseif($hangout_status == '4')
	{
		include('content-close.php');
	}
	else
	{
	// code for Stats
 $ip_addr = $_SERVER['REMOTE_ADDR'];
 $ID	=	get_the_ID(); 
 $stat_result	=	$wpdb->get_results("select * from ".$wpdb->prefix."ghangout_stats where IP='".$ip_addr."' and event='1' and post_id='".get_the_ID()."'");
if(count($stat_result) <= 0 )
{

	$wpdb->query("INSERT INTO ".$wpdb->prefix."ghangout_stats Values('','".$ID."','".$ip_addr."','1','0','0','0')");	
}
// code for Stats
	?>
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US" >

	<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Language" content="en-us">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta name="distribution" content="global" />
	<title><?php the_title(); ?></title>
	<!-- Fonts +++++++++++++ -->	
		<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Kristi|Crafty+Girls|Yesteryear|Finger+Paint|Press+Start+2P|Spirax|Bonbon|Over+the+Rainbow" />	
	<!-- Style +++++++++++++ -->
	   <link rel="stylesheet" href="<?php echo plugins_url('RunClickPlugin/css/font-awesome.css')?>">
		<!--[if IE 7]>
		<link rel="stylesheet" href="css/font-awesome-ie7.min.css">
		<![endif]-->

	<!-- Js +++++++++++++ -->

	<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="http://code.jquery.com/ui/1.10.3/jquery-ui.min.js"></script>
	<script type="text/javascript" src="<?php echo plugins_url('RunClickPlugin/js/hangout_custom.js')?>"></script>
		
	<link rel='stylesheet' id='prefix-style-countdown-css-css'  href='<?php echo site_url();?>/wp-content/plugins/RunClickPlugin/css/countdown.css?ver=3.5.1' type='text/css' media='all' />
	<link rel='stylesheet' id='hangout-fonts-css'  href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700&#038;subset=latin,latin-ext' type='text/css' media='all' />
	<link rel='stylesheet' id='g_hangout_skin-css'  href='<?php echo site_url();?>/wp-content/plugins/RunClickPlugin/skins/basic/style.min.css?ver=3.5.1' type='text/css' media='all' />
	<script type='text/javascript' src='<?php echo site_url();?>/wp-includes/js/comment-reply.min.js?ver=3.5.1'></script>
	<script type='text/javascript' src='<?php echo site_url();?>/wp-includes/js/jquery/jquery.js?ver=1.8.3'></script>
	<script type='text/javascript' src='<?php echo site_url();?>/wp-content/plugins/RunClickPlugin/assets/js/jquery.easing.min.js?ver=3.5.1'></script>
	<script type='text/javascript' src='<?php echo site_url();?>/wp-content/plugins/RunClickPlugin/assets/js/jquery.autosize.min.js?ver=3.5.1'></script>
	<script type='text/javascript' src='<?php echo site_url();?>/wp-content/plugins/RunClickPlugin/assets/js/cookie.min.js?ver=3.5.1'></script>
	<script type='text/javascript'>
	/* <![CDATA[ */
	var g_hangout = {"ajaxurl": "<?php echo site_url(); ?>\/wp-admin\/admin-ajax.php","plugin_url":"<?php echo site_url(); ?>\/wp-content\/plugins\/RunClickPlugin","tr_no_one_online":"No one is online","tr_logout":"Logout","tr_sending":"Sending","tr_in_chat_header":"Now Chatting","tr_offline_header":"Contact us","use_css_anim":"1","delay":"2","is_admin":"","is_op":"1"};
	var site_url	=	"<?php echo site_url(); ?>";
	/* ]]> */
	</script>
	<script type='text/javascript' src='<?php echo site_url();?>/wp-content/plugins/RunClickPlugin/assets/js/App.min.js?ver=3.5.1'></script>
	<link rel="EditURI" type="application/rsd+xml" title="RSD" href="<?php echo site_url();?>/xmlrpc.php?rsd" />
	<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="<?php echo site_url();?>/wp-includes/wlwmanifest.xml" /> 

		<style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>
	<style type="text/css" media="print">#wpadminbar { display:none; }</style>

	<style type="text/css">
	.g-hangout-toolbar, .sc-cnv-wrap, .sc-msg-wrap, .g-hangout-wrapper, #g_hangout_box textarea.f-chat-line, #g_hangout_box p.sc-lead, #g_hangout_box .g-hangout-wrapper input, #g_hangout_box .g-hangout-wrapper textarea {
		background-color: #FFFFFF;
		color: #222222;
	}
	.g-hangout-toolbar a {
		color: #B9B9B9;
	}
	.g-hangout-toolbar a:hover {
		color: #878787;
	}
	#g_hangout_box .g-hangout-wrapper input, #g_hangout_box .g-hangout-wrapper textarea, #g_hangout_box textarea.f-chat-line {
		border-color: #CDCDCD;
	}
	#g_hangout_box .g-hangout-wrapper input:focus, #g_hangout_box .g-hangout-wrapper textarea:focus {
		background-color: #F5F5F5;
		border-color: #B9B9B9;
	}
	#g_hangout_box textarea.f-chat-line:focus {
		background-color: #FAFAFA;
		border-color: #B9B9B9;
	}
	#g_hangout_box .g-hangout-wrapper label {
		color: #878787;
	}
	#g_hangout_box form.g-hangout-reply {
		background-color: #F5F5F5;
		border-top: 1px solid #CDCDCD;
	}
	#g_hangout_box {
		width: 300px;
	}
	#g_hangout_box textarea.f-chat-line {
		width: 258px;
	}
	#g_hangout_box div.g-hangout-header {
		border-radius: 4px 4px 0 0;
	}
	.g-hangout-notification.warning, #g_hangout_box .g-hangout-wrapper .sc-start-chat-btn a, #g_hangout_box .g-hangout-wrapper input, #g_hangout_box .g-hangout-wrapper textarea {
		border-radius: 4px 4px 4px 4px;
	}
	#g_hangout_box .g-hangout-wrapper input, #g_hangout_box .g-hangout-wrapper textarea {
		width: 230px;
	}
	.g-hangout-wrapper {
		border-color: #EBEBEB;
		max-height: 380px;
	}
	.sc-cnv-wrap {
		border-color: #EBEBEB;
		max-height: 350px;
	}
	#g_hangout_box .g-hangout-wrapper .sc-start-chat-btn > a {
		background-color: #3A99D1;
		color: #FFFFFF;
	}
	#g_hangout_box .g-hangout-wrapper .sc-start-chat-btn > a:hover {
		background-color: #BF3723;
		color: #FFFFFF;
	}
	#g_hangout_box div.g-hangout-header {
		background-color: #BF3723;
		color: #FFFFFF;
	}
	.g-hangout-css-anim {
		transition: bottom 0.2s ease 0s;
	}	
	</style>	
	<!-- Developed By Ravi Prakash
	25 May 2013 -->
	
	<!-- new video code added by Arun Srivastava on 11/4/14 -->
<link rel="stylesheet" href="<?php echo plugins_url('RunClickPlugin/css/reveal.css');?>">
<script type="text/javascript">
var PLUGIN_URL = "<?php echo plugins_url('RunClickPlugin/');?>";
var eid        = "<?php echo $post->ID;?>";
</script>
<script src="<?php echo plugins_url('RunClickPlugin/js/jquery.reveal.js');?>" type="text/javascript"></script>
<script src="<?php echo plugins_url('RunClickPlugin/js/modernizr.custom.js');?>" type="text/javascript" ></script>
<script src="http://afarkas.github.io/webshim/js-webshim/minified/polyfiller.js"></script>
<script src="<?php echo plugins_url('RunClickPlugin/js/videoplayer_custom.js');?>" type="text/javascript"></script>
<!-- new video code added by Arun Srivastava on 11/4/14 -->
	</head>


	<?php
	include('ghangout-style.php');
	$uploads = wp_upload_dir();
	$uploads_dir = $uploads['baseurl'];
	$enable_header=get_post_meta($post->ID, "ghanghout_enable_header", true);
	$enable_sharing=get_post_meta($post->ID, "ghanghout_enable_sharing", true);

	$logo_src=get_post_meta($post->ID, "ghanghout_logo", true);
	if($logo_src!=''){
		$logo =  $uploads_dir.'/'.$logo_src;
	}
	$logo_text=get_post_meta($post->ID, "ghanghout_logo_text", true);
	$logo_family=get_post_meta($post->ID, "ghanghout_logo_family", true);
	$logo_size=get_post_meta($post->ID, "ghanghout_logo_size", true);
	$logo_style=get_post_meta($post->ID, "ghanghout_logo_style", true);
	$logo_color=get_post_meta($post->ID, "ghanghout_logo_color", true);
	$logo_height=get_post_meta($post->ID, "ghanghout_logo_height", true);
	$logo_spacing=get_post_meta($post->ID, "ghanghout_logo_spacing", true);
	$logo_shadow=get_post_meta($post->ID, "ghanghout_logo_shadow", true);

	if($logo_style=='Normal')$logo_style='normal';$logo_weight='normal';
	if($logo_style=='Italic')$logo_style='italic';$logo_weight='normal';
	if($logo_style=='Bold')$logo_style='normal';$logo_weight='bold';
	if($logo_style=='Bold/Italic')$logo_style='italic';$logo_weight='bold';

	if($logo_shadow=='Small'){$logo_shadow="1px 1px #777";}
	elseif($logo_shadow=='Medium'){$logo_shadow="2px 2px #777";}
	elseif($logo_shadow=='Large'){$logo_shadow="3px 3px #777";}
	else{$logo_shadow = 'false';}

		
	?>
	<style type="text/css">
		.logoText {
			font-family:<?php echo $logo_family; ?>; font-size:<?php echo $logo_size; ?>; font-weight:<?php echo $logo_weight; ?>; text-shadow:<?php echo $logo_shadow; ?>; line-height:<?php echo $logo_height; ?>; letter-spacing:<?php echo $logo_spacing; ?>px; color:<?php echo $logo_color; ?>;
		}
	</style>
	<?php	
	if($layout==1){
	$post_id = $post->ID;


	$headline=get_post_meta($post->ID, "ghanghout_headline", true);
	$headline = str_replace("\n","<br>", $headline);

	$headline_family=get_post_meta($post->ID, "ghanghout_headline_family", true);
	$headline_size=get_post_meta($post->ID, "ghanghout_headline_size", true);
	$headline_style=get_post_meta($post->ID, "ghanghout_headline_style", true);
	$headline_color=get_post_meta($post->ID, "ghanghout_headline_color", true);
	$headline_height=get_post_meta($post->ID, "ghanghout_headline_height", true);
	$headline_spacing=get_post_meta($post->ID, "ghanghout_headline_spacing", true);
	$headline_shadow=get_post_meta($post->ID, "ghanghout_headline_shadow", true);

	if($headline_style=='Normal')$headline_style='normal';$headline_weight='normal';
	if($headline_style=='Italic')$headline_style='italic';$headline_weight='normal';
	if($headline_style=='Bold')$headline_style='normal';$headline_weight='bold';
	if($headline_style=='Bold/Italic')$headline_style='italic';$headline_weight='bold';

	if($headline_shadow=='Small'){$headline_shadow="1px 1px #777";}
	elseif($headline_shadow=='Medium'){$headline_shadow="2px 2px #777";}
	elseif($headline_shadow=='Large'){$headline_shadow="3px 3px #777";}
	else{$headline_shadow = 'false';}

	$subhead=get_post_meta($post->ID, "ghanghout_subhead", true);
	$subhead = str_replace("\n","<br>", $subhead);
	$subhead_family=get_post_meta($post->ID, "ghanghout_subhead_family", true);
	$subhead_size=get_post_meta($post->ID, "ghanghout_subhead_size", true);
	$subhead_style=get_post_meta($post->ID, "ghanghout_subhead_style", true);
	$subhead_color=get_post_meta($post->ID, "ghanghout_subhead_color", true);
	$subhead_height=get_post_meta($post->ID, "ghanghout_subhead_height", true);
	$subhead_spacing=get_post_meta($post->ID, "ghanghout_subhead_spacing", true);
	$subhead_shadow=get_post_meta($post->ID, "ghanghout_subhead_shadow", true);

	if($subhead_style=='Normal')$subhead_style='normal';$subhead_weight='normal';
	if($subhead_style=='Italic')$subhead_style='italic';$subhead_weight='normal';
	if($subhead_style=='Bold')$subhead_style='normal';$subhead_weight='bold';
	if($subhead_style=='Bold/Italic')$subhead_style='italic';$subhead_weight='bold';

	if($subhead_shadow=='Small'){$subhead_shadow="1px 1px #777";}
	elseif($subhead_shadow=='Medium'){$subhead_shadow="2px 2px #777";}
	elseif($subhead_shadow=='Large'){$subhead_shadow="3px 3px #777";}
	else{$subhead_shadow = 'false';}


		$editorval =	get_post_meta($post_id,"ghanghout_option1editor",true);

	?>

	<?php include "ghangout-style.php"; ?>


	<style type="text/css">
		.ho_title_box h1{
			font-family:<?php echo $headline_family; ?>; font-size:<?php echo $headline_size; ?>; font-weight:<?php echo $headline_weight; ?>; text-shadow:<?php echo $headline_shadow; ?>; line-height:<?php echo $headline_height; ?>; letter-spacing:<?php echo $headline_spacing; ?>px; color:<?php echo $headline_color; ?>;
		}
		.ho_title_box h2{
			font-family:<?php echo $subhead_family; ?>; font-size:<?php echo $subhead_size; ?>; font-weight:<?php echo $subhead_weight; ?>; text-shadow:<?php echo $subhead_shadow; ?>; line-height:<?php echo $subhead_height; ?>; letter-spacing:<?php echo $subhead_spacing; ?>px; color:<?php echo $subhead_color; ?>;
		}
	</style>
	<body>
		<div id="wrap">
			<!-- Start Header -->
			<div id="ho_header">
				<div class="container">
					<div class="row-fluid">
						<div class="span4">
							<a class="logo" href="#">
							<?php if($logo){ ?>
								<?php if($enable_header == "checked"){ ?>
									<img border="0" src="<?php echo $logo; ?>">
								<?php } ?>		
							<?php }
							if($enable_header == "checked" and $logo=='') { ?>
							  <div class="logoText"><?php echo $logo_text; ?></div>
							<?php } ?>
							</a>
						</div>
						<div class="span8">
							<div class="ho_social_shear">
								<?php if($enable_sharing=='checked'){?>
								  <div class="sharing">
										<a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php the_permalink(get_the_ID()); ?>" data-lang="en" data-related="anywhereTheJavascriptAPI">Tweet</a>
										<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
									
										<!-- Facebook share button Start -->
										<iframe src="http://www.facebook.com/plugins/like.php?href=<?php echo get_permalink(get_the_ID());?>&amp;send=false&amp;layout=button_count&amp;width=100&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:100px; height:21px;" allowTransparency="true"></iframe>
										<!-- Facebook share button End -->
									
										<div class="g-plusone" data-href="<?php the_permalink(get_the_ID()); ?>" data-annotation="none" data-size="medium"></div>
										<script type="text/javascript">
										  window.___gcfg = {parsetags: 'onload'};
										  (function() {
											var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
											po.src = 'https://apis.google.com/js/plusone.js';
											var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
										  })();
										</script>
									</div>
								
								<?php } ?>
								<!-- AddThis Button END -->
							</div>
						</div>
					</div>
					<div class="clear"></div>
					<div class="row-fluid">
						<div class="ho_title_box">
							<?php if($headline){ ?>
								<h1><?php echo $headline; ?></h1>
							<?php } ?>	
							<?php if($subhead){ ?>
							<h2><?php echo $subhead; ?></h2>
							<?php } ?>	
						</div>
					</div>
				</div>
			</div>
			<!-- End Header -->
			<div class="clear"></div>
			<!-- Start Content -->
			<div id="ho_content">
				<div class="container">
					<?php
							
							if($membership_pass=='1'){
								//echo $event_content = apply_filters('the_content', $editorval); 
							
							echo do_shortcode('[ghangout_timer]');
							if(get_post_meta($post->ID, "hangout_registration", true)==1)
							{
							echo do_shortcode('[ghangout_reg_form]'); 
							}
							} else { ?>
									<div class="row-fluid ff-hh">
										<div class="ho_contentin">
											<div class="ho_registation">
												
													<div class="ho_block"><h2><?php echo $member_msg; ?></h2></div>
													
													<div class="clear"></div>
												
											</div>
										</div>
									</div>
							<?php }
						
					?>					
				</div>
			</div>
			<!-- End Content -->
			<div class="clear"></div>
		</div>
		
		<div class="clear"></div>
		
		<!-- Start Footer -->
		<div id="ho_footer">
			<div class="container">
				<div class="row-fluid">
					<div class="ho_copy">
					<?php 
					$attribution_link = get_option('attribution_link');
					if($attribution_link=='1'){
						$link = get_option('hangout_youtube_affiliate_link');
						if(get_option('hangout_youtube_affiliate_link')==''){
							$link = 'http://runclick.com';
						}
						echo '<a href="'.$link.'" target="_blank">Powered By runclick.com </a>';
					}
					?> 
					</div>
				</div>
			</div>
		</div>
		<!-- End Footer -->	
		<div class="clear"></div>	
	<?php }  else { ?>
	<?php //include "ghangout-style.php"; ?>
	<?php		$full_banner=get_post_meta($post->ID, "ghanghout_full_banner_image", true); ?>
	<body style="background:url('<?php echo $uploads_dir.'/'. $full_banner; ?>') center center fixed no-repeat; 
	-moz-background-size: cover; -webkit-background-size: cover; -o-background-size: cover; background-size: cover;">
		<div id="wrap">
			<!-- Start Header -->
			<div id="ho_header">
				<div class="container">
					<div class="row-fluid">
						<div class="span4">
							<?php if($logo){ ?>
								<?php if($enable_header == "checked"){ ?>
								<a class="logo" href="#"><img src="<?php echo $logo; ?>" alt="hangout" /></a>
								<?php } ?>
							<?php } elseif($enable_header == "checked") { ?>
							  <div class="logoText"><?php echo $logo_text; ?></div>
							<?php } ?>
						</div>
						<div class="span8">
							<div class="ho_social_shear">
								<!-- AddThis Button BEGIN -->
								<div class="addthis_toolbox addthis_default_style ">
								<?if($enable_sharing=='checked'):?>
								  <div class="sharing"><a href="https://twitter.com/share" class="twitter-share-button" data-counturl="<?php the_permalink();?>">Tweet</a>
									<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
				
									<!-- Facebook share button Start -->
										<iframe src="//www.facebook.com/plugins/like.php?href=<?php echo get_permalink(get_the_ID());?>&amp;send=false&amp;layout=button_count&amp;width=100&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:100px; height:21px;" allowTransparency="true"></iframe>
									<!-- Facebook share button End -->
									<g:plusone annotation="none" size="medium" href="<?php the_permalink();?>"></g:plusone></div>
								<?endif;?>
								</div>
								<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=xa-51af1019225062d6"></script>
								<!-- AddThis Button END -->
							</div>
						</div>
					</div>
					<div class="clear"></div>
				</div>
				
			</div>
			<!-- End Header -->
			<div class="clear"></div>
			<!-- Start Content -->
			<div id="ho_content" class="clearfix">
				<div class="container">
					<?php
					if($membership_pass=='1'){
								
						$ghanghout_timer_position=get_post_meta($post->ID, "ghanghout_timer_position", true); 
						if($ghanghout_timer_position=="top"){
						echo do_shortcode('[ghangout_timer]');
					
						if(get_post_meta($post->ID, "hangout_registration", true)==1)
							{
							echo do_shortcode('[ghangout_reg_form]'); 
							}
						} 
						else {
							
							
							if(get_post_meta($post->ID, "hangout_registration", true)==1)
							{
							echo do_shortcode('[ghangout_reg_form]'); 
							}
							echo do_shortcode('[ghangout_timer]');
						} 
						
						
					} else { ?>
						<div class="row-fluid ff-hh">
							<div class="ho_contentin">
								<div class="ho_registation">
									<div class="ho_block"><h2><?php echo $member_msg; ?>
									
									</h2></div>
										<div class="clear"></div>
								</div>
							</div>
						</div>
							<?php }?>
				</div>
			</div>
			<!-- End Content -->
			<div class="clear"></div>
		</div>
		<div class="clear"></div>
		<!-- Start Footer -->
		<div id="ho_footer">
			<div class="container">
				<div class="row-fluid">
					<?php 
						$attribution_link = get_option('attribution_link');
						if($attribution_link=='1'){
							$link = get_option('hangout_youtube_affiliate_link');
							if(get_option('hangout_youtube_affiliate_link')==''){
								$link = 'http://runclick.com';
							}
					?>
							<div class="ho_copy"><a href="<?php echo $link;?>" target="_blank">Powered By runclick.com </a></div>
					<?php } ?>
				</div>
			</div>
		</div>
		<!-- End Footer -->
	<?php																			
	}
	if(get_post_meta($post->ID, "chat_reg_off_replay", true) == "1")
	{	
		
		wp_google_hangout();
	}	
	?>

	</body>
	</html>
	<?php } 
} else {

		if($_GET['thankyou']== 'true')
		{
			include('themes/'.$ghangout_layout.'/thankyou.php');
		}
		elseif($_GET['replay_preview']== 'true')
		{
			if(get_post_meta($post->ID, "hangout_public_private", true) == "private"){
				include('themes/'.$ghangout_layout.'/close.php');
			}
			else{
				include('themes/'.$ghangout_layout.'/replay-preview.php');
			}
		}
		elseif(($hangout_status == '3') || ($_GET['replay_preview'] == 'true'))
		{
			if(get_post_meta($post->ID, "hangout_public_private", true) == "private"){
				include('themes/'.$ghangout_layout.'/close.php');
			}
			else{
				include('themes/'.$ghangout_layout.'/replay.php');
			}
		}
		elseif(($hangout_status == '2') || ($_GET['live_preview'] == 'true'))
		{
			if(get_post_meta($post->ID, "hangout_public_private", true) == "private"){
				include('themes/'.$ghangout_layout.'/close.php');
			}
			else{
				include('themes/'.$ghangout_layout.'/live.php');
			}
		}
		/*elseif(get_post_meta($post->ID, "hangout_public_private", true) == "private" && $hangout_status != '4')
		{
			include('themes/'.$ghangout_layout.'/private.php');
		}*/
		elseif($hangout_status == '4')
		{

			include('themes/'.$ghangout_layout.'/close.php');
		} else {
			include('themes/'.$ghangout_layout.'/event.php');
		}

}?>
