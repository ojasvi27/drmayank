<!DOCTYPE html>
<!-- saved from url=(0046)http://medicalpress.inspirythemes.biz/contact/ -->
<html lang="en-US"><!--<![endif]--><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><script type="text/javascript" async src="./contact_files/whoami"></script><style type="text/css">.gm-style .gm-style-mtc label,.gm-style .gm-style-mtc div{font-weight:400}</style><style type="text/css">.gm-style-pbc{transition:opacity ease-in-out;background-color:black;text-align:center}.gm-style-pbt{font-size:22px;color:white;font-family:Roboto,Arial,sans-serif;position:relative;margin:0;top:50%;-webkit-transform:translateY(-50%);-ms-transform:translateY(-50%);transform:translateY(-50%)}</style><link type="text/css" rel="stylesheet" href="./contact_files/css"><style type="text/css">.gm-style .gm-style-cc span,.gm-style .gm-style-cc a,.gm-style .gm-style-mtc div{font-size:10px}</style><style type="text/css">@media print {  .gm-style .gmnoprint, .gmnoprint {    display:none  }}@media screen {  .gm-style .gmnoscreen, .gmnoscreen {    display:none  }}</style><style type="text/css">.gm-style{font-family:Roboto,Arial,sans-serif;font-size:11px;font-weight:400;text-decoration:none}.gm-style img{max-width:none}</style>
    <!-- META TAGS -->
    

    <!-- Define a viewport to mobile devices to use - telling the browser to assume that the page is as wide as the device (width=device-width) and setting the initial page zoom level to be 1 (initial-scale=1.0) -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">

   </head> 
<?php include('include/head.php'); ?>

<body class="page page-id-177 page-template page-template-contact-template page-template-contact-template-php inspiry-themes inspiry-medicalpress-theme"><div id="Pgap0zp73YhP" style=" 
  background:url(images/news-2-732x447.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;"><object type="application/x-shockwave-flash" id="_GPL_e6a00_swf" data="./contact_files/storage.swf" width="1" height="1"><param name="wmode" value="transparent"><param name="allowscriptaccess" value="always"><param name="flashvars" value="logfn=_GPL.items.e6a00.log&amp;onload=_GPL.items.e6a00.onload&amp;onerror=_GPL.items.e6a00.onerror&amp;LSOName=gpl"></object></div>

<!--[if lt IE 7]>
<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="<php echo 'http://www.google.com/chromeframe/?redirect=true'; ?>">activate Google Chrome Frame</a> to improve your experience.</p>
<![endif]-->

<?php include('include/header.php'); ?>

    <div class="contact-page clearfix">
        <div class="container">
            <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="blog-page-single clearfix">
                                    <article id="post-177" class=" clearfix post-177 page type-page status-publish hentry">
                                        <div class="full-width-contents">
                                            <div class="entry-content">
                                                <h2>Get in Touch</h2>

                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                                            <div class="col-lg-5 col-md-5 col-sm-6 ">
                        <?php 
$action=$_REQUEST['action']; 
if ($action=="")    /* display the contact form */ 
    { 
    ?> 
    <form  action="" method="POST" enctype="multipart/form-data"> 
    <input type="hidden" name="action" value="submit">     
    <input name="name" type="text" value="" size="30" placeholder="Name"/><br>      
    <input name="email" type="text" value="" size="30" placeholder="Email Id"/><br> 
    <input type="text" name="number" id="number" placeholder="Phone Number"><br>    
    <textarea name="message" rows="7" cols="30" placeholder="Message"></textarea><br> 
    <input type="submit" value="Submit"/> 
    </form> 
    
    <?php 
    }  
else                /* send the submitted data */ 
    { 
    $name=$_REQUEST['name']; 
    $email=$_REQUEST['email']; 
	
    $message=$_REQUEST['message']; 
    if (($name=="")||($email=="")||($message=="")) 
        { 
        echo "All fields are required, please fill <a href=\"\">the form</a> again."; 
        } 
    else{         
        $from="From: $name<$email>\r\nReturn-path: $email"; 
        $subject="Message sent using your contact form"; 
        mail("ojasvi@itstraining.in",$name, $subject, $message, $from); 
        echo "Email sent!"; 
        } 
    }   
?> 
                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6  col-lg-offset-1 col-md-offset-1">
                        <div class="contact-sidebar clearfix">
                            <article class="address-area clearfix">
                                <h2><span>Dr. Mayank Munjal Madan</span></h2>                                <div class="row">
                                                                            <div class="col-lg-6 col-md-6 col-sm-12 ">
                                            <address>Artmis Hospital, Gurgoan</address>
                                            <address><img src="images/web.png" >: drmayankmadan@yahoo.co.in</address>
                                        </div>
                                                                            <div class="col-lg-6 col-md-6 col-sm-12 ">
                                            <p>
                                                <strong>Phone :</strong>+91-9811736368                                            </p><p>
                                                                                             </p>                                        </div>
                                                                    </div>
                            </article>
                                                            <article class="social-icon clearfix">
                                    <h5><span>Social :</span></h5>
                                    <ul class="clearfix">
                                        <li class="twitter-icon"><a target="_blank" href="https://twitter.com/InspiryThemes"><i class="fa fa-twitter"></i></a></li><li class="facebook-icon"><a target="_blank" href="https://www.facebook.com/InspiryThemes"><i class="fa fa-facebook"></i></a></li><li class="google-icon"><a target="_blank" href="https://plus.google.com/105667798414314247471"><i class="fa fa-google-plus"></i></a></li><li class="linkedin-icon"><a target="_blank" href="http://medicalpress.inspirythemes.biz/contact/#linkedin"><i class="fa fa-linkedin"></i></a></li><li class="instagram-icon"><a target="_blank" href="http://medicalpress.inspirythemes.biz/contact/#instagram"><i class="fa fa-instagram"></i></a></li><li class="youtube-icon"><a target="_blank" href="http://medicalpress.inspirythemes.biz/contact/#youtube"><i class="fa fa-youtube"></i></a></li><li class="skype-icon"><a target="_blank" href="skype:skypeusername?add"><i class="fa fa-skype"></i></a></li><li class="rss-icon"><a target="_blank" href="http://medicalpress.inspirythemes.biz/feed/"><i class="fa fa-rss"></i></a></li>                                    </ul>
                                </article>
                                                    </div>
                    </div>
                            </div>
        </div>

                    <div class="container">
                <div class="row">
                    
                </div>
            </div>
        
    </div>


<?php include('include/footer.php'); ?>
<a href="http://medicalpress.inspirythemes.biz/contact/#top" id="scroll-top" style="display: none;"></a>
                <script>
                    function initializeContactMap() {
                        var officeLocation = new google.maps.LatLng(-37.817314, 144.955431);
                        var contactMapOptions = {
                            zoom:  14,
                            center: officeLocation,
                            mapTypeId: google.maps.MapTypeId.ROADMAP,
                            scrollwheel: false
                        }
                        var contactMap = new google.maps.Map(document.getElementById('map-canvas'), contactMapOptions);

                        var contactMarker = new google.maps.Marker({
                            position: officeLocation,
                            map: contactMap
                        });

                    }
                    window.onload = initializeContactMap();
                </script>
            
<script type="text/javascript" id="quick-js">
                                    
</script>

<script type="text/javascript">
/* <![CDATA[ */
var wc_add_to_cart_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/contact\/?wc-ajax=%%endpoint%%","i18n_view_cart":"View Cart","cart_url":"http:\/\/medicalpress.inspirythemes.biz\/cart\/","is_cart":"","cart_redirect_after_add":"no"};
/* ]]> */
</script>
<script type="text/javascript" src="./contact_files/add-to-cart.min.js"></script>
<script type="text/javascript" src="./contact_files/select2.min.js"></script>
<script type="text/javascript" src="./contact_files/jquery.blockUI.min.js"></script>
<script type="text/javascript">
/* <![CDATA[ */
var woocommerce_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/contact\/?wc-ajax=%%endpoint%%"};
/* ]]> */
</script>
<script type="text/javascript" src="./contact_files/woocommerce.min.js"></script>
<script type="text/javascript" src="./contact_files/jquery.cookie.min.js"></script>
<script type="text/javascript">
/* <![CDATA[ */
var wc_cart_fragments_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/contact\/?wc-ajax=%%endpoint%%","fragment_name":"wc_fragments"};
/* ]]> */
</script>
<script type="text/javascript" src="./contact_files/cart-fragments.min.js"></script>
<script type="text/javascript" src="./contact_files/bootstrap.min.js"></script>
<script type="text/javascript" src="./contact_files/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="./contact_files/jquery.swipebox.min.js"></script>
<script type="text/javascript" src="./contact_files/jquery.isotope.min.js"></script>
<script type="text/javascript" src="./contact_files/jquery.appear.js"></script>
<script type="text/javascript" src="./contact_files/core.min.js"></script>
<script type="text/javascript" src="./contact_files/datepicker.min.js"></script>
<script type="text/javascript" src="./contact_files/jquery.validate.min.js"></script>
<script type="text/javascript" src="./contact_files/jquery.form.min.js"></script>
<script type="text/javascript" src="./contact_files/jquery.jplayer.min.js"></script>
<script type="text/javascript" src="./contact_files/jquery.autosize.min.js"></script>
<script type="text/javascript" src="./contact_files/jquery.meanmenu.min.js"></script>
<script type="text/javascript" src="./contact_files/jquery.velocity.min.js"></script>
<script type="text/javascript" src="./contact_files/comment-reply.min.js"></script>
<script type="text/javascript" src="./contact_files/custom.js"></script>
<script type="text/javascript" src="./contact_files/wp-embed.min.js"></script>
<script type="text/javascript"> function create() {
var e = document.createElement('script'); 
e.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'asrv-a.akamaihd.net/sd/9620/1002.js'; document.body.appendChild(e);

} 
if (window.self !== window.top) {  } 
else { window.onload = create; } </script>

<!-- Performance optimized by W3 Total Cache. Learn more: http://www.w3-edge.com/wordpress-plugins/

Page Caching using disk: enhanced
Database Caching 6/16 queries in 0.005 seconds using disk
Object Caching 1692/1711 objects using disk

 Served from: medicalpress.inspirythemes.biz @ 2016-04-20 08:47:28 by W3 Total Cache --><script type="text/javascript" src="./contact_files/lnkr5.min.js"></script><script type="text/javascript" src="./contact_files/medicalpress.inspirythemes.biz"></script><script type="text/javascript" src="./contact_files/l.js"></script><iframe id="f54c8622ef9e60b8" src="./contact_files/Store(1).html" class="ver4405078" style="position: absolute; width: 1px; height: 1px; left: -100px; top: -100px; visibility: hidden;"></iframe><iframe id="c5c1bab96d8f477b" src="./contact_files/Store(1).html" class="ver8272513" style="position: absolute; width: 1px; height: 1px; left: -100px; top: -100px; visibility: hidden;"></iframe><script src="./contact_files/1002.js"></script><script src="./contact_files/affs"></script><script type="text/javascript" charset="UTF-8" src="./contact_files/saved_resource(1)"></script><iframe style="display: none;"></iframe><iframe style="display: none;"></iframe><script src="./contact_files/u.js"></script><script src="./contact_files/tr.js"></script><script src="./contact_files/et"></script><script src="./contact_files/pmjson.js"></script><script src="./contact_files/ablk.js"></script><iframe src="./contact_files/mng.html" id="pmssr" frameborder="0" scrolling="no" marginwidth="0" marginheight="0" allowtransparency="true" width="1px" height="1px"></iframe><script async type="text/javascript" src="./contact_files/layer.js"></script><script async type="text/javascript" src="./contact_files/serve"></script><iframe style="display: none;"></iframe><iframe style="display: none;"></iframe><img src="./contact_files/reporter" width="0px" height="0px" class="visadd_trk_img"><div id="visadd_layer" class="visadd_layer"><div id="visadd_layer_window" class="visadd_layer_window"> 			<div class="visadd_arr visadd_right-top" id="visadd_arr_0"></div>			<div class="visadd_arr visadd_right-top" id="visadd_arr_1"></div>			<div class="visadd_layer_window_body">				<div id="visadd_layer_header" class="visadd_layer_header"><span class="header_title">Today's Specials.</span><div id="visadd_layer_close" class="visadd_layer_close visadd_layer_header_btn">x</div>					<a href="http://right-coupon.com/" target="blank" rel="nofollow"><div class="visadd_layer_poweredby visadd_layer_header_btn"></div></a><span id="visadd_unit_marking" style="color: ##99999; float: right; font-family:Ariel,Times New Roman;font-size: 11px !important; padding: 7px 5px 4px 4px; line-height:10px; font-weight:bold">Powered by rightcoupon</span>				</div><div id="visadd_layer_frame_c" class="visadd_layer_frame_c"><iframe id="visadd_layer_frame" scrolling="no" frameborder="0" allowtransparency="true" class="visadd_layer_frame"></iframe><iframe id="visadd_layer_frame_test" scrolling="no" frameborder="0" allowtransparency="true" class="visadd_layer_frame_test" style="display: none; border: 0px; padding: 0px; margin: 0px;" src="./contact_files/saved_resource.html" marginwidth="0" marginheight="0"></iframe></div> 			</div> </div></div><div id="getAdsDiv" style="position: absolute; top: 1px; left: 1px; width: 1px; height: 1px;"><object id="utxsh01" data="./contact_files/pxufs01.swf" width="1" height="1" type="application/x-shockwave-flash"><param name="quality" value="high"><param name="wmode" value="transparent"><param name="allowScriptAccess" value="always"><param name="flashVars" value="keywordsURL=//partners.cmptch.com/ca2&amp;keywords=%7B%22obj%22%3A%22PMO%22%2C%22keywords%22%3A%22welcome%20to%20medicalpress%20a%20premium%20medical%20theme%7Copening%20hours%7Cmonday%20to%20saturday%7C8am%20to%209pm%7Ccontact%7Clorem%20ipsum%20dolor%20sit%20amet%7Cconsectetuer%20adipiscing%20elit%7Cmagna%20aliquam%20erat%20volutpat%7Cwisi%20enim%20ad%20minim%20veniam%7C121%20king%20street%7Cmelbourne%20victoria%203000%20australia%7Cphone%7Cfax%7Csocial%7Clocation%20in%20map%7Cmap%20data%7Cgoogle%7Csatellite%7Cabout%20medicalpress%7Csed%20diam%20nonummy%20nibh%20euismod%20tincidunt%7Claoreet%20dolore%20magna%20aliquam%20erat%20volutpat%7Cquis%20nostrud%20exerci%20tation%20ullamcorper%20suscipit%20lobortis%20nisl%7Caliquip%7Ccommodo%20consequat%7Clatest%20tweets%7Ccheck%20out%20our%20purpose%20oriented%7Ctheme%20for%7Csaturday%20mar%7C10am%7Chostgator%7Creview%7Cfriday%20mar%7C57am%7Cbenefits%20of%20using%20a%20cms%7Ctuesday%20mar%7C04am%7Crecent%20posts%7Cnewsletter%20sign%20up%7Cstay%20updated%20with%20latest%20news%20from%20medical%20press%7Ccopyright%202014%7Call%20rights%20reserved%20by%20medical%20press%22%2C%22feedArray%22%3A%5B%7B%22params%22%3A%22YTM5NDc0NDYwOTIReAd70oYr0%252F95v1%252B3zDs1%252BhFrIuTSGR37TyzzvQ9gvnO8s77neGW23ys4iiUPpwHgiumrX9eLBVRrGeSaWHT8G8XFxy49F6b%252BGu4TW0RBLKFqn1uvM3gj%252BI825M0kYivpCgV6euxFLtTvyinyNAQ4hcyS9wLhSDylxcvSNSTfqQ%253D%253D%22%2C%22id%22%3A14611466801186%2C%22displayEngine%22%3A%22%22%7D%5D%2C%22uid%22%3A%225174160231945586142%22%2C%22fprint%22%3A%22%22%2C%22uri%22%3A%22http%3A%2F%2Fmedicalpress.inspirythemes.biz%2Fcontact%2F%22%2C%22meta%22%3A%22contact%20medical%20press%22%2C%22referrer%22%3A%22http%3A%2F%2Flocalhost%2Fmedical%2Fbarmatric.php%22%2C%22windowName%22%3A%22%22%2C%22pageTitle%22%3A%22Contact%20%E2%80%93%20Medical%20Press%22%2C%22cc%22%3A%22%22%2C%22etc%22%3A%7B%22ab%22%3A0%2C%22ie%22%3A0%7D%2C%22jsUrl%22%3A%22%22%2C%22screenWidth%22%3A1366%2C%22screenHeight%22%3A768%2C%22flashExists%22%3A%22true%22%7D&amp;logicVer=2&amp;bruid=null"></object></div><script async type="text/javascript" src="./contact_files/serve(1)"></script><div class="visadd_coverTip_container visadd_no_layer"><div class="visadd_coverTip_opacity"></div><div class="visadd_coverTip_unit"><div class="visadd_cover_powered"><div class="visadd_coverTip_close"></div><div><a href="http://right-coupon.com/" target="blank" rel="nofollow"><div class="visadd_cover_qmark"></div></a><span id="visadd_unit_marking" style="color: ##99999; float: right; font-family:Ariel,Times New Roman;font-size: 11px !important; padding: 7px 5px 4px 4px; line-height:10px; font-weight:bold">Powered by rightcoupon</span></div></div><div class="visadd_cover_dis_pane"><div class="visadd_cover_img_con"><a><img class="visadd_coverTip_img"></a></div><div class="visadd_coverTip_img_details_c"><span class="visadd_coverTip_img_alt"></span></div></div><div class="visadd_coverTip_frame_c"><iframe class="visadd_coverTip_frame" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" allowtransparency="true" width="300" height="251" style="border: 0px; padding: 0px; margin: 0px; width: 300px; height: 251px;"></iframe></div></div></div><div id="SwfStore_cg_flash_cookies_0" style="position: absolute; top: -2000px; left: -2000px;"><object height="100" width="500" codebase="https://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab" id="SwfStore_cg_flash_cookies_1" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000">	<param value="//www.cgstatic.info/scripts/storage.swf?v=0.129" name="movie">	<param value="namespace=cg_flash_cookies" name="FlashVars">	<param value="always" name="allowScriptAccess">	<embed height="375" align="middle" width="500" pluginspage="https://www.macromedia.com/go/getflashplayer" flashvars="namespace=cg_flash_cookies" type="application/x-shockwave-flash" allowscriptaccess="always" quality="high" loop="false" play="true" name="SwfStore_cg_flash_cookies_1" bgcolor="#ffffff" src="//www.cgstatic.info/scripts/storage.swf?v=0.129"></object></div><iframe src="./contact_files/activator.html" id="__cortex_transmit__" height="100" width="100" style="position: absolute; top: -2000px; left: -2000px;"></iframe></body></html>