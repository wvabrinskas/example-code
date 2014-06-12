
<!DOCTYPE html>
<html>
	<head>
		<LINK REL="SHORTCUT ICON" HREF="/images/icon.ico">
		<title>iRepo</title>
		<link rel="stylesheet" type="text/css" href="style.css?version=?<?php echo time(); ?>">
		<script type="text/javascript">

		if (screen.width <= 699) {
		document.location = "/mobile/index.php";
		}
		
		</script>
	</head>
	<body bgcolor="Silver">
		<div id="fb-root"></div>
		
	<script defer="defer">(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=282606508431969";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>

	<div id="Content_logo">
	
	<img style="width:469px; height:150px " src="/images/logo.png"/>

	</div>

		<!-- Black Menu -->
		<ul id="menu" class="black">
			<li><a href="http://theirepo.com">Home</a></li>
			<li><a href="/downloads.html">Downloads</a></li>
			<li><a href="/contact.html">Contact</a></li>
			<li><a href="/uploads.html">Submit a Package</a></li>
			<li><a href="http://www.theirepo.com/wordpress/wp-login.php?action=register">
			<?PHP
			$location = $_SERVER['DOCUMENT_ROOT'];
 
				include ($location . '/wordpress/wp-config.php');
				
				include ($location . '/wordpress/wp-load.php');
				
				include ($location . '/wordpress/wp-includes/pluggable.php');	
				
				global $current_user;
				
				get_currentuserinfo();
				
			if(!is_user_logged_in()) {
			
				echo "Register";
				
			}else {
			
				echo " ";
				
			}?></a></li>
			<li><a href=<?PHP 
			
			$location = $_SERVER['DOCUMENT_ROOT'];
 
			include ($location . '/wordpress/wp-config.php');
			
			include ($location . '/wordpress/wp-load.php');
			
			include ($location . '/wordpress/wp-includes/pluggable.php');	
			
			global $current_user;
			
				get_currentuserinfo();
				
			if(!is_user_logged_in()) {
			
				echo "/wordpress/wp-login.php";
				
			} else {
			
				echo "/wordpress/wp-admin/";
				
			} ?> ><?PHP
				$location = $_SERVER['DOCUMENT_ROOT'];1
				
				include ($location . '/wordpress/wp-config.php');
				
				include ($location . '/wordpress/wp-load.php');
				
				include ($location . '/wordpress/wp-includes/pluggable.php');	
				
				global $current_user;
				
				get_currentuserinfo();
				
			if(!is_user_logged_in()) {
			
				echo "Login";
				
			}else {
			
				echo $current_user->user_login;
				
			}
			?></a></li>
            
			<li><!-- AddThis Button BEGIN -->
             </li>
		</ul>
	

	
<!-- Total DIV -->
<div id="Content">

<p>
<div class="fb-like" data-href="http://www.theirepo.com" data-send="true" data-layout="button_count" data-width="450" data-show-faces="true"></div>

</p>

<div id="RSS">
<!--blog information goes here-->


<?php
$posts = get_posts('numberposts=5&order=DSC&orderby=post_date');
foreach ($posts as $post) : start_wp(); ?>
<font size="5" face="verdana" color="White"><h1><a href="<?php the_permalink() ?>"  STYLE="TEXT-DECORATION: NONE" rel="bookmark" title="Read More"><?php the_title(); ?></a><br/></font></h1>
<font size="1" face="verdana" color="White">Posted On: <?php the_date();?> </font>
<font size="3" face="verdana" color="White"><?php the_excerpt(); ?> </font>
    
   <h2> <div class="addthis_toolbox addthis_default_style addthis_20x20_style">
    <a class="addthis_button_preferred_1"></a>
    <a class="addthis_button_preferred_2"></a>
    <a class="addthis_button_preferred_3"></a>
    <a class="addthis_button_preferred_4"></a>
    <a class="addthis_button_compact"></a>
    </div> </h2>
    <script type="text/javascript defer="defer"">var addthis_config = {"data_track_clickback":true};</script>
    <script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=ra-4d6fd6574bdbb202" defer="defer"></script>
    <!-- AddThis Button END -->
    <hr>


<?php
endforeach;
?>


</div> <!--RSS FEED ENDS HERE -->
<div id="Content_twitter">
<a class="twitter-timeline" href="https://twitter.com/william_vab" data-widget-id="407952472657780736">Tweets by @william_vab</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

</div>

<!--<div id="online">
<font size="2" face="verdana" color="White">Currently Online:
<?php
mysql_connect("localhost","root","a505af44f9");
mysql_select_db("login") or die(mysql_error());
 
$query = "SELECT * FROM username";
$onlines = mysql_query($query); 
while ($online = mysql_fetch_array($onlines)) { 

//echo $online['username'] . " ";

echo "<a href='members.html/?name=" . $online['username'] . "'" . ">" . $online['username'] . "</a>" . " ";



} ?>
</font>
</div> -->
<h2><div id="share_d">
<!-- AddThis Follow BEGIN -->

<div class="addthis_32x32_style addthis_default_style">
<a class="addthis_button_twitter_follow" addthis:userid="iphonerepo"></a>
</div>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-4d6fd6574bdbb202" defer="defer"></script>
<!-- AddThis Follow END --></h2>
				
</div> <!--CONTENT ENDS HERE -->

<div id="bottom">
<script type="text/javascript">
google_ad_client = "ca-pub-7317962924979644";
/* theirepo */
google_ad_slot = "4292795576";
google_ad_width = 728;
google_ad_height = 90;

</script>
<center><script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js" defer="defer">
</script></center>


</div>


</body>
</html>
