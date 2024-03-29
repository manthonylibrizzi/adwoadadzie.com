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
<link rel='stylesheet' href='<?php echo site_url();?>/wp-content/plugins/RunClickPlugin/css/bootstrap.css' type='text/css' media='all' />
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
include_once('plugin_function.php');
$keep_reg_form	=	get_post_meta($post->ID,"keep_registration_form",true);	
$uploads = wp_upload_dir();
$uploads_dir = $uploads['baseurl'];
$enable_header=get_post_meta($post->ID, "ghanghout_make_live_enable_header", true);
$enable_sharing=get_post_meta($post->ID, "ghanghout_make_live_enable_sharing", true);

$logo_src=get_post_meta($post->ID, "ghanghout_make_live_logo", true);
if($logo_src!=''){
	$logo =  $uploads_dir.'/'.$logo_src;
}
$logo_text=get_post_meta($post->ID, "ghanghout_make_live_logo_text", true);
$logo_family=get_post_meta($post->ID, "ghanghout_make_live_logo_family", true);
$logo_size=get_post_meta($post->ID, "ghanghout_make_live_logo_size", true);
$logo_style=get_post_meta($post->ID, "ghanghout_make_live_logo_style", true);
$logo_color=get_post_meta($post->ID, "ghanghout_make_live_logo_color", true);
$logo_height=get_post_meta($post->ID, "ghanghout_make_live_logo_height", true);
$logo_spacing=get_post_meta($post->ID, "ghanghout_make_live_logo_spacing", true);
$logo_shadow=get_post_meta($post->ID, "ghanghout_make_live_logo_shadow", true);

if($logo_style=='Normal')$logo_style='normal';$logo_weight='normal';
if($logo_style=='Italic')$logo_style='italic';$logo_weight='normal';
if($logo_style=='Bold')$logo_style='normal';$logo_weight='bold';
if($logo_style=='Bold/Italic')$logo_style='italic';$logo_weight='bold';

if($logo_shadow=='Small'){$logo_shadow="1px 1px #777";}
elseif($logo_shadow=='Medium'){$logo_shadow="2px 2px #777";}
elseif($logo_shadow=='Large'){$logo_shadow="3px 3px #777";}
else{$logo_shadow = 'false';}
$layout	=	get_post_meta($post->ID,'g_hangout_make_live_layout_type',true);

// code for Stats
	$ip_addr = $_SERVER['REMOTE_ADDR'];
	$stat_result	=	$wpdb->get_results("select * from ".$wpdb->prefix."ghangout_stats where IP='".$ip_addr."' and live='1' and post_id='".get_the_ID()."'");
	if(count($stat_result) <= 0 )
	{
		$wpdb->query("INSERT INTO ".$wpdb->prefix."ghangout_stats Values('','".get_the_ID()."','".$ip_addr."','0','0','1','0')");	
	}
// code for Stats
	?>
	<style type="text/css">
	.logoText {
		font-family:<?php echo $logo_family; ?>; font-size:<?php echo $logo_size; ?>; font-weight:<?php echo $logo_weight; ?>; text-shadow:<?php echo $logo_shadow; ?>; line-height:<?php echo $logo_height; ?>; letter-spacing:<?php echo $logo_spacing; ?>px; color:<?php echo $logo_color; ?>;
	}
</style>
<?php 
if($layout==1){
$post_id = $post->ID;


$headline=get_post_meta($post->ID, "ghanghout_make_live_headline", true);
$headline = str_replace("\n","<br>", $headline);

$headline_family=get_post_meta($post->ID, "ghanghout_make_live_headline_family", true);
$headline_size=get_post_meta($post->ID, "ghanghout_make_live_headline_size", true);
$headline_style=get_post_meta($post->ID, "ghanghout_make_live_headline_style", true);
$headline_color=get_post_meta($post->ID, "ghanghout_make_live_headline_color", true);
$headline_height=get_post_meta($post->ID, "ghanghout_make_live_headline_height", true);
$headline_spacing=get_post_meta($post->ID, "ghanghout_make_live_headline_spacing", true);
$headline_shadow=get_post_meta($post->ID, "ghanghout_make_live_headline_shadow", true);

if($headline_style=='Normal')$headline_style='normal';$headline_weight='normal';
if($headline_style=='Italic')$headline_style='italic';$headline_weight='normal';
if($headline_style=='Bold')$headline_style='normal';$headline_weight='bold';
if($headline_style=='Bold/Italic')$headline_style='italic';$headline_weight='bold';

if($headline_shadow=='Small'){$headline_shadow="1px 1px #777";}
elseif($headline_shadow=='Medium'){$headline_shadow="2px 2px #777";}
elseif($headline_shadow=='Large'){$headline_shadow="3px 3px #777";}
else{$headline_shadow = 'false';}

$subhead=get_post_meta($post->ID, "ghanghout_make_live_subhead", true);
$subhead = str_replace("\n","<br>", $subhead);
$subhead_family=get_post_meta($post->ID, "ghanghout_subhead_family", true);
$subhead_size=get_post_meta($post->ID, "ghanghout_subhead_size", true);
$subhead_style=get_post_meta($post->ID, "ghanghout_make_live_subhead_style", true);
$subhead_color=get_post_meta($post->ID, "ghanghout_make_live_subhead_color", true);
$subhead_height=get_post_meta($post->ID, "ghanghout_make_live_subhead_height", true);
$subhead_spacing=get_post_meta($post->ID, "ghanghout_make_live_subhead_spacing", true);
$subhead_shadow=get_post_meta($post->ID, "ghanghout_make_live_subhead_shadow", true);

if($subhead_style=='Normal')$subhead_style='normal';$subhead_weight='normal';
if($subhead_style=='Italic')$subhead_style='italic';$subhead_weight='normal';
if($subhead_style=='Bold')$subhead_style='normal';$subhead_weight='bold';
if($subhead_style=='Bold/Italic')$subhead_style='italic';$subhead_weight='bold';

if($subhead_shadow=='Small'){$subhead_shadow="1px 1px #777";}
elseif($subhead_shadow=='Medium'){$subhead_shadow="2px 2px #777";}
elseif($subhead_shadow=='Large'){$subhead_shadow="1px 3px #777";}
else{$subhead_shadow = 'false';}


$editorval =	get_post_meta($post_id,"ghanghout_make_live_option1editor",true);

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
						if($enable_header == "checked" and $logo == '') { ?>
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
									<iframe src="//www.facebook.com/plugins/like.php?href=<?php echo get_permalink(get_the_ID());?>&amp;send=false&amp;layout=button_count&amp;width=100&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:100px; height:21px;" allowTransparency="true"></iframe>
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
					 $editorval = get_post_meta($post->ID,'ghanghout_make_live_option1editor',true);
					 echo $content1 = apply_filters('the_content', $editorval);
				}else { ?>
								<div class="row-fluid ff-hh">
									<div class="ho_contentin">
										<div class="ho_registation">
											
												<div class="ho_block"><h2><?php echo $member_msg; ?></h2></div>
												
												<div class="clear"></div>
											
										</div>
									</div>
								</div>
				<?php } ?>	

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
<?php		$full_banner=get_post_meta($post->ID, "ghanghout_make_live_full_banner_image", true); ?>
<body style="background:url('<?php echo $uploads_dir.'/'. $full_banner; ?>') center center fixed no-repeat; 
-moz-background-size: cover; -webkit-background-size: cover; -o-background-size: cover; background-size: cover;">
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
						if($enable_header == "checked" && $logo=='' ) { ?>
						  <div class="logoText"><?php echo $logo_text; ?></div>
						<?php } ?>
						</a>
					</div>
					<div class="span8">
						<div class="ho_social_shear">
							<!-- AddThis Button BEGIN -->
							<div class="addthis_toolbox addthis_default_style ">
							<?php if($enable_sharing=='checked'){?>
							  <div class="sharing">
									<a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php the_permalink(get_the_ID()); ?>" data-lang="en" data-related="anywhereTheJavascriptAPI">Tweet</a>
									<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
								
									<!-- Facebook share button Start -->
									<iframe src="//www.facebook.com/plugins/like.php?href=<?php echo get_permalink(get_the_ID());?>&amp;send=false&amp;layout=button_count&amp;width=100&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:100px; height:21px;" allowTransparency="true"></iframe>
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
					 $ghanghout_timer_position=get_post_meta($post->ID, "ghanghout_make_live_timer_position", true); 

					if($ghanghout_timer_position=="bottom"){
						?>
						<div class="span8">
							<div class="ho_box">
								<div class="ho_vedio">	
								<?php
							echo do_shortcode('[live_hangout]'); 
						
							echo do_shortcode('[ghangout_reg_form]'); 
						
					} 
					else {
						
							echo do_shortcode('[ghangout_reg_form]'); 
						
						
							echo do_shortcode('[live_hangout]'); 
						
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
if(get_post_meta($post->ID,'chat_make_off_replay',true)==1){
	wp_google_hangout();
}
?>
<?php 

$buybuttonhtml       = get_post_meta($post->ID,'buybuttonhtml',true);



$vote_question       = get_post_meta($post->ID, "vote_question", true);

$vote_options        = get_post_meta($post->ID, "vote_options", true);

$vote_correct_option = get_post_meta($post->ID, "vote_correct_option", true);



		

$form .= '<a href="javascript:void(0);" data-reveal-id="myModal" id="clicktoopenpopup">&nbsp;</a>

			<div id="myModal" class="reveal-modal bottom" style="top:400px;" rel="0">

				<h1>Please Fill Optin Form</h1>';

				$form	.=	'<div class="row-fluid ff-hh">
			<div class="md_body">
			<div class="ho_contentin">

				<div class="ho_registation1">

				
					<form id="contact_popup_form" method="post" name="contact_popup_form">


						<div class="row">

							<div class="ho_block">

								<input class="span12" id="event_reg_name" name="event_reg_name" type="text" placeholder="Enter Your Full Name" />

							</div>

						</div>

						<div class="row">

							<div class="ho_block">

								<input class="span12" id="event_reg_email" name="event_reg_email" type="text" placeholder="Enter Your Email" />

															

								

							</div>

						</div>

						<div class="row">

							<div class="ho_block">

								<input type="hidden" name="g_hangout_id" value="'.$post->ID.'" >

								<button type="button" name="submit" id="reg_popup_form_submit" class="hangout_btn btn btn-warning span12"><i class="icon-share-alt"></i> Register Now</button>

							</div>

						</div>

						<div class="clear"></div>

					</form>	

				</div>

			</div>
			</div>

		</div>

		<div class="clear"></div>

			</div>

		

		

			<a href="javascript:void(0);" data-reveal-id="myModal23" id="clicktoopenpopup2">&nbsp;</a>

			<div id="myModal23" class="reveal-modal"  rel="0">
			
				

				'.$buybuttonhtml.'

				<a class="close-reveal-modal" style="display:none;">&nbsp;</a>
			
			</div>

			

			<a href="javascript:void(0);" data-reveal-id="myvoteModal" id="clicktoopenpopup3">&nbsp;</a>

			<div id="myvoteModal" class="reveal-modal bottom" rel="0" style="top:400px;">

				<h1>Please Vote</h1><div class="md_body">';

				$form   .= '<div id="vote_hangout_form"><div id="voteoutput"></div>';

				$form   .= '<span>'.$vote_question.'</span>'."<br />";

				$options = explode('__', $vote_options);

				foreach($options as $option)

				{

					$form   .= '<div class="hh_vote"><input type="radio" name="vote_answer" class="vote_options" value="'.$option.'">&nbsp;'.$option."</div>";

				}

				$form   .= '<input type="button" class="hangout_btn btn btn-warning" value="Vote" id="addvotefrompop">';

				$form   .= '</div></div>

			</div>';

			$content1 .= '<div id="ajax_loader" style="position: fixed; width:300px; height: 300px; z-index: 1070; top: 600px; left: 600px; display: none; background: none; border: 0px solid #259BB8;"><img src="'.plugin_dir_url(__FILE__).'images/ajax-loader.gif"></div>';





	$content .=  $form;

	

	//global $post;

	//var_dump($post);
// echo for show pop form on live page
	echo $content;







?>		

<input type="text" id="buy_now_model_status">
<input type="text" id="vote_model_status">
<script>

jQuery(function ($) {
     
    setInterval(function () {
		  var ajaxurl = "<?php echo admin_url( 'admin-ajax.php' ); ?>";
		$.post(ajaxurl, {
 
                    action:     'live_popup_check',
                    post_id:    '<?php echo $post->ID; ?>'
 
                }, function (response) {
 
                    // If the server returns '1', then we can mark this post as read, so we'll hide the checkbox
                    // container. Next time the user browses the index, this post won't appear
                 //  alert(response);
				   resparr = response.split('-');
				   buymodel = $('#buy_now_model_status').val();
				   votemodel = $('#vote_model_status').val();
				   if(resparr[0]=='pull' && buymodel!='pull'){
						
					  $('.close-reveal-modal').trigger('click');
					  $('#buy_now_model_status').val('pull');
				   }
				   if(resparr[1]=='pull' && votemodel!='pull'){
					
					  $('.close-reveal-modal').trigger('click');
					  $('#vote_model_status').val('pull');
				   }
				   if(resparr[0]=='push' && buymodel!='push'){
						//alert('push');
						$('#myModal23').reveal({
							animation: 'fadeAndPop',                   //fade, fadeAndPop, none
							animationspeed: 800,                       //how fast animtions are
							closeonbackgroundclick: false,              //if you click background will modal close?
							dismissmodalclass: 'close-reveal-modal'    //the class of a button or element that will close an open modal
						});
						$('#buy_now_model_status').val('push');
						$('#myModal23').attr('rel', 1);
				  } 
				  
				  
				  
				  if(resparr[1]=='push' && votemodel!='push'){
						$('#myvoteModal').reveal({
							animation: 'fadeAndPop',                   //fade, fadeAndPop, none
							animationspeed: 800,                       //how fast animtions are
							closeonbackgroundclick: false,              //if you click background will modal close?
							dismissmodalclass: 'close-reveal-modal'    //the class of a button or element that will close an open modal
						});
						$('#myvoteModal').attr('rel', 1);
						$('#vote_model_status').val('push');
				  }
				  
				  
			}); }, 10000);
 
                });


</script>						
		
</body>
</html>