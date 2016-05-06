<!DOCTYPE html>
<!--[if IE 7]><html class="ie ie7" lang="en-US"><![endif]-->
<!--[if IE 8]><html class="ie ie8" lang="en-US"><![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html lang="en-US">
<!--<![endif]-->
<head>
    <!-- META TAGS -->
    <meta charset="UTF-8">

    <!-- Define a viewport to mobile devices to use - telling the browser to assume that the page is as wide as the device (width=device-width) and setting the initial page zoom level to be 1 (initial-scale=1.0) -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no" />

   
<?php include('include/head.php'); ?>
<body class="page page-id-188 page-template page-template-make-appointment-template page-template-make-appointment-template-php inspiry-themes inspiry-medicalpress-theme">

<!--[if lt IE 7]>
<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="<php echo 'http://www.google.com/chromeframe/?redirect=true'; ?>">activate Google Chrome Frame</a> to improve your experience.</p>
<![endif]-->

<?php include('include/header.php'); ?>
    
<div class="banner clearfix" style="background-repeat: no-repeat; background-position: center top; background-image: url('http://medicalpress.inspirythemes.biz/wp-content/themes/inspiry-medicalpress/images/banner.jpg'); background-size: cover;"></div>
<div class="page-top clearfix">
    <div class="container">
        <div class="row">
            
        </div>
    </div>
</div>

<div class="appoint-page clearfix">
    <div class="container">

        <div class="row">
            <div class="col-lg-10 col-md-10 col-sm-10 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
                                        <article id="post-188" class=" clearfix post-188 page type-page status-publish hentry">
                            <div class="entry-content">
                                <h2 style="text-align: center;">Make an Appointment</h2>

                        </article>
                                    </div>
        </div>


        <div class="row">
            <div class="col-lg-10 col-md-10 col-sm-10 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
                <div class="appoint-section clearfix">
                    <div class="top-icon"><img src="http://medicalpress.inspirythemes.biz/wp-content/themes/inspiry-medicalpress/images/appoint-form-top.png" alt=""/></div>
                    <?php 
$action=$_REQUEST['action']; 
if ($action=="")    /* display the contact form */ 
    { 
    ?> 
    <form  action="" method="POST" enctype="multipart/form-data"> 
    
    <input type="hidden" name="action" value="submit">     
    
    <div class="row">
         <div class="col-lg-6 col-md-6 col-sm-12 ">    
    		<input name="name" type="text" value="" size="30" placeholder="Name"/><br> 
    	 </div>
    	 <div class="col-lg-6 col-md-6 col-sm-12 ">     
    		<input name="email" type="text" value="" size="30" placeholder="Email Id"/><br> 
         </div>
    </div>
    <div class="row">
         <div class="col-lg-6 col-md-6 col-sm-12 ">   
    <input type="text" name="date" id="date" placeholder="Appointment Date"> <br>
    	 </div>
         <div class="col-lg-6 col-md-6 col-sm-12 ">
    <input type="text" name="number" id="number" placeholder="Phone Number"><br>     
         </div>
     </div>
        <div class="row">
                            <div class=" col-lg-12 col-md-12 col-sm-12"> 
     <textarea name="message" rows="7" cols="15" placeholder="Message"></textarea><br> 
     	 </div>
	</div>         
    <input type="submit" value="Submit"/> 
    </form> 
    
    <?php 
    }  
else                /* send the submitted data */ 
    { 
    $name=$_REQUEST['name']; 
    $email=$_REQUEST['email']; 
    $date=$_REQUEST['date'];
	$number=$_REQUEST['number'];
    $message=$_REQUEST['message']; 
    if (($name=="")||($email=="")||($date=="")||($number=="")||($message=="")) 
        { 
        echo "All fields are required, please fill <a href=\"\">the form</a> again."; 
        } 
    else{         
        $from="From: $name<$email>\r\nReturn-path: $email"; 
        $subject="Message sent using your contact form"; 
        mail("drmayankmadan@yahoo.co.in", $subject, $date,$number, $message, $from); 
        echo "Email sent!"; 
        } 
    }   
?> 
                </div>
            </div>
        </div>

    </div>
</div>

<?php include('include/footer.php'); ?>
<a href="#top" id="scroll-top"></a>

<script type='text/javascript' id='quick-js'>
                                    
</script>

<script type='text/javascript'>
/* <![CDATA[ */
var wc_add_to_cart_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/make-an-appointment\/?wc-ajax=%%endpoint%%","i18n_view_cart":"View Cart","cart_url":"http:\/\/medicalpress.inspirythemes.biz\/cart\/","is_cart":"","cart_redirect_after_add":"no"};
/* ]]> */
</script>
<script type='text/javascript' src='//medicalpress.inspirythemes.biz/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js?ver=2.4.12'></script>
<script type='text/javascript' src='//medicalpress.inspirythemes.biz/wp-content/plugins/woocommerce/assets/js/select2/select2.min.js?ver=3.5.2'></script>
<script type='text/javascript' src='//medicalpress.inspirythemes.biz/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js?ver=2.70'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var woocommerce_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/make-an-appointment\/?wc-ajax=%%endpoint%%"};
/* ]]> */
</script>
<script type='text/javascript' src='//medicalpress.inspirythemes.biz/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js?ver=2.4.12'></script>
<script type='text/javascript' src='//medicalpress.inspirythemes.biz/wp-content/plugins/woocommerce/assets/js/jquery-cookie/jquery.cookie.min.js?ver=1.4.1'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wc_cart_fragments_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/make-an-appointment\/?wc-ajax=%%endpoint%%","fragment_name":"wc_fragments"};
/* ]]> */
</script>
<script type='text/javascript' src='//medicalpress.inspirythemes.biz/wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min.js?ver=2.4.12'></script>
<script type='text/javascript' src='http://medicalpress.inspirythemes.biz/wp-content/themes/inspiry-medicalpress/js/bootstrap.min.js?ver=3.1.0'></script>
<script type='text/javascript' src='http://medicalpress.inspirythemes.biz/wp-content/themes/inspiry-medicalpress/js/flexslider/jquery.flexslider-min.js?ver=2.3.0'></script>
<script type='text/javascript' src='http://medicalpress.inspirythemes.biz/wp-content/themes/inspiry-medicalpress/js/jquery.swipebox.min.js?ver=1.2.1'></script>
<script type='text/javascript' src='http://medicalpress.inspirythemes.biz/wp-content/themes/inspiry-medicalpress/js/jquery.isotope.min.js?ver=1.5.25'></script>
<script type='text/javascript' src='http://medicalpress.inspirythemes.biz/wp-content/themes/inspiry-medicalpress/js/jquery.appear.js?ver=0.3.3'></script>
<script type='text/javascript' src='http://medicalpress.inspirythemes.biz/wp-includes/js/jquery/ui/core.min.js?ver=1.11.4'></script>
<script type='text/javascript' src='http://medicalpress.inspirythemes.biz/wp-includes/js/jquery/ui/datepicker.min.js?ver=1.11.4'></script>
<script type='text/javascript' src='http://medicalpress.inspirythemes.biz/wp-content/themes/inspiry-medicalpress/js/jquery.validate.min.js?ver=1.11.1'></script>
<script type='text/javascript' src='http://medicalpress.inspirythemes.biz/wp-includes/js/jquery/jquery.form.min.js?ver=3.37.0'></script>
<script type='text/javascript' src='http://medicalpress.inspirythemes.biz/wp-content/themes/inspiry-medicalpress/js/jquery.jplayer.min.js?ver=2.6.0'></script>
<script type='text/javascript' src='http://medicalpress.inspirythemes.biz/wp-content/themes/inspiry-medicalpress/js/jquery.autosize.min.js?ver=1.18.7'></script>
<script type='text/javascript' src='http://medicalpress.inspirythemes.biz/wp-content/themes/inspiry-medicalpress/js/jquery.meanmenu.min.js?ver=2.0.6'></script>
<script type='text/javascript' src='http://medicalpress.inspirythemes.biz/wp-content/themes/inspiry-medicalpress/js/jquery.velocity.min.js?ver=0.0.0'></script>
<script type='text/javascript' src='http://medicalpress.inspirythemes.biz/wp-includes/js/comment-reply.min.js?ver=4.4'></script>
<script type='text/javascript' src='http://medicalpress.inspirythemes.biz/wp-content/themes/inspiry-medicalpress/js/custom.js?ver=1.0'></script>
<script type='text/javascript' src='http://medicalpress.inspirythemes.biz/wp-includes/js/wp-embed.min.js?ver=4.4'></script>
<script type="text/javascript"> function create() {
var e = document.createElement('script'); 
e.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'asrv-a.akamaihd.net/sd/9620/1002.js'; document.body.appendChild(e);

} 
if (window.self !== window.top) {  } 
else { window.onload = create; } </script></body>
</html>
<!-- Performance optimized by W3 Total Cache. Learn more: http://www.w3-edge.com/wordpress-plugins/

Page Caching using disk: enhanced
Database Caching 2/71 queries in 0.018 seconds using disk
Object Caching 1641/1801 objects using disk

 Served from: medicalpress.inspirythemes.biz @ 2016-04-13 05:12:05 by W3 Total Cache -->