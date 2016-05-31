 <!DOCTYPE html>
<!--[if IE 7]><html class="ie ie7" lang="en-US"><![endif]-->
<!--[if IE 8]><html class="ie ie8" lang="en-US"><![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html lang="en-US">
<!--<![endif]-->
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<!-- META TAGS -->
<meta charset="UTF-8">

<!-- Define a viewport to mobile devices to use - telling the browser to assume that the page is as wide as the device (width=device-width) and setting the initial page zoom level to be 1 (initial-scale=1.0) -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="format-detection" content="telephone=no">

<?php include('include/head.php'); ?>
<script language="JavaScript">
<!--
function calculateBmi() {
var weight = document.bmiForm.weight.value
var height = document.bmiForm.height.value
if(weight > 0 && height > 0){	
var finalBmi = weight/(height/100*height/100)
document.bmiForm.bmi.value = finalBmi
if(finalBmi < 18.5){
document.bmiForm.meaning.value = "you are too thin."
}
if(finalBmi > 18.5 && finalBmi < 25){
document.bmiForm.meaning.value = "you are healthy."
}
if(finalBmi > 25){
document.bmiForm.meaning.value = "you are overweight."
}
}
else{
alert("Please Fill in everything correctly")
}
}
//-->
</script>
</head>
<body style="margin-bottom: 23px;" class="home page page-id-11 page-parent page-template page-template-home-template page-template-home-template-php inspiry-themes inspiry-medicalpress-theme">

<!--[if lt IE 7]>

<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="<php echo 'http://www.google.com/chromeframe/?redirect=true'; ?>">activate Google Chrome Frame</a> to improve your experience.</p>
<![endif]-->
<?php include('include/header.php'); ?>
<div class="home-slider clearfix">
  <div class="flexslider">
    <ul class="slides">
      <li class="flex-active-slide" style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 1; display: block; z-index: 2;"> <img draggable="false" src="images/slide-one.jpg" class="gallery-post-single" alt="Medical Services &lt;span&gt;That You Can Trust&lt;/span&gt;">
        <div class="content-wrapper clearfix">
          <div class="container">
            <div class="slide-content clearfix ">
              <h1>Medical Services <span>That You Can Trust</span></h1>
  
         
          </div>
        </div>
      </li>
      
      <li class="flex-active-slide" style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 1; display: block; z-index: 2;"> <img draggable="false" src="images/achiever.jpg" class="gallery-post-single" alt="Medical Services &lt;span&gt;That You Can Trust&lt;/span&gt;">
        <div class="content-wrapper clearfix">
          <div class="container">
            <div class="slide-content clearfix ">
              <h1 style="color:#FFF; padding:20px; margin:10px;">Dr. Mayank Madan Manjul Honours & Achievemnent</h1>
  
         
          </div>
        </div>
      </li>
      <li class="" style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;"> <img draggable="false" src="images/slide-two.jpg" class="gallery-post-single" alt="We &lt;span&gt;Care&lt;/span&gt; for &lt;span&gt;You&lt;/span&gt;">
        <div class="content-wrapper clearfix">
          <div class="container">
            <div class="slide-content clearfix ">
              <h1>We <span>Care</span> for <span>You</span></h1>
          </div>
        </div>
      </li>
      <li class="" style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;"> <img draggable="false" src="images/slide-three.jpg" class="gallery-post-single" alt="Qualified Staff With &lt;span&gt;Expertise in Services We Offer&lt;/span&gt;">
        <div class="content-wrapper clearfix">
          <div class="container">
            <div class="slide-content clearfix ">
              <h1>Qualified Staff With <span>Expertise in Services We Offer</span></h1>
            
          </div>
        </div>
      </li>
    </ul>
    <ul class="flex-direction-nav">
      <li><a class="flex-prev" href="#">Previous</a></li>
      <li><a class="flex-next" href="#">Next</a></li>
    </ul>
  </div>
  <div class="appointment clearfix">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-6  "> <span class="btn make-appoint">Make an Appointment <i class="fa fa-caret-down"></i></span> </div>
      </div>
      <div class="clearfix">
        <div class="appointment-form clearfix animated">
         <?php 
$action=$_REQUEST['action']; 
if ($action=="")    /* display the contact form */ 
    { 
    ?> 
    <form  action="" method="POST" enctype="multipart/form-data"> 
    
    <input type="hidden" name="action" value="submit">
            <div class="col-lg-3 col-md-3 col-sm-6  common">
            <input name="name" id="app-name" type="text" value="" size="30" placeholder="Name"/>              
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6  common">
            <input type="text" name="number" id="add-number" placeholder="Phone Number">              
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6  common">
            <input name="email" class="required email" type="text" value="" size="30" placeholder="Email Id"/>              
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6  common">
            <input type="text" name="date" id="date" class="hasDatepicker" placeholder="Appointment Date">		              
            </div>
            <div class="col-lg-11 col-md-11 col-sm-11 common">
            
              <input name="message" id="app-message" class="required" placeholder="Message" type="text">
            </div>
            <div class="col-lg-1 col-md-1 col-sm-1 common">
              <input type="submit" value="Submit"/> 
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
              <input name="action" value="make_appointment" type="hidden">
              <input name="nonce" value="6c5b34db58" type="hidden">
              <img src="images/white-loader.gif" id="appointment-loader" alt="Loading...">
              <div id="message-sent"></div>
            </div>
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
<div class="home-features clearfix">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-12 ">
        <div class="features-intro clearfix">
          <h2 ><span>Dr. Mayank Manjul </span> </h2>
          <p style="text-align:justify">Dr. Mayank is Advanced laparoscopic surgeon performing advance abdominal surgery, which includes laparoscopic Removal of stomach small intestine, hernia, hepatobiliary, acid reflux, adrenal spleen and colon surgery. Bariatric procedure viz. Sleeve gastrostomies and Roux-en-Y gastric bypass, Nissen's fundoplication for Reflux disorders, lap. Hysterectomy and surgery for ovarian tumors, variety of laparoscopic Colo-rectal surgeries, Laparoscopic Solid organ surgeries as splenectomy, cystogastrostomy and various other procedures.

  </p>
          <a class="read-more" href="doctor_profile.php">Doctor Mayank Profile</a> </div>
      </div>
      <div class="col-lg-8 col-md-8 col-sm-12 ">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6 single-feature">
            <div class="row">
              <div class="col-lg-3 col-md-3 col-sm-3 icon-wrapper"> <img src="images/people-1.png"> </div>
              <div class="col-lg-9 col-md-9 col-sm-9">
                <h3> Bariatic Surgery</h3>
                <p align="justify">Bariatric Surgery in India - 

Weight loss surgeries today are performed using Minimally Invasive Techniques i.e. Laparoscopic Surgery. Weight loss surgery is also called bariatric surgery, it is used to treat people who are dangerously obese
.

This type of treatment is medical treatment and surgical treatment are available to treat people with potentially life-threatening obesity when other treatments, such as lifestyle changes, haven't worked.

 

</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 single-feature">
            <div class="row">
              <div class="col-lg-3 col-md-3 col-sm-4 icon-wrapper"><img src="images/gym.png"> </div>
              <div class="col-lg-9 col-md-9 col-sm-9">
                  <h3> BMI INDEX </h3>
<form name="bmiForm" class="form-inline">
  <div class="form-group">
    <label for="exampleInputName2">Your Weight(kg):</label>
    <input type="text" name="weight" size="10" class="form-control">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail2">Your Height(cm): </label>
    <input type="text"  class="form-control" name="height" size="10">
  </div>
  <input type="button" value="Calculate BMI" onClick="calculateBmi()"></br>

 <div class="form-group">
    <label for="exampleInputEmail2">Your BMI </label>
    <input type="text" name="bmi" size="10" class="form-control" >
  </div>
  <div class="form-group">
    <label for="exampleInputEmail2">This mean: </label>
    <input type="text" name="meaning" size="25" class="form-control" >
  </div>
  
  <input type="reset" value="Reset" />
</form>


</div>
              </div>
            </div>
          </div>
          <div class="visible-lg clearfix"></div>
          <div class="visible-md clearfix"></div>
          <div class="visible-sm clearfix"></div>
          <div class="col-lg-6 col-md-6 col-sm-6 single-feature">
            <div class="row">
              <div class="col-lg-3 col-md-3 col-sm-3 icon-wrapper"> <img src="images/healthy.png"></div>
              <div class="col-lg-9 col-md-9 col-sm-9">
                <h3> Qualified Preventive Health Tips<span class="cg-intext-trigger "></span></a></span> </h3>

        
  <p>  Do not exercise the same muscles every day.</p>
  Lift weights with slow controlled movements.
    
               
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 single-feature">
            <div class="row">
              <div class="col-lg-3 col-md-3 col-sm-3 icon-wrapper"> <img src="images/people-2.png"> </div>
              <div class="col-lg-9 col-md-9 col-sm-9">
                <h3> <span id="cg_intext_rt_search_5" data-type-id="10" data-type="yahoo" class="cg-intext-span cg-intext-span-reset cgspnlink "><a target="_blank" href="" data-type-id="10" data-type="yahoo" class="cg-intext-link-replace cgspnlink" id="cg_intext_rt_search_5_link">International Patients<span class="cg-intext-trigger "></span></a></span> </h3>
              <p align="justify">  <a href="international.php" >If you are an international patient and are planning to travel to India for your medical treatments done by Dr. Mayank, Please visit our guidelines</a> </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="home-doctors  clearfix">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 ">
        <div class="slogan-section animated fadeInUp clearfix ae-animation-fadeInUp">
          <h2>Treatment Procedures</h2
        ></div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-6 text-center doctor-wrapper">
        <div class="common-doctor animated fadeInUp clearfix ae-animation-fadeInUp">
          <figure> <a href="" > <img src="images/1.jpg" class="attachment-gallery-post-single size-gallery-post-single wp-post-image" alt="doctor-2"> </a> </figure>
          <div class="text-content">
            <h5>Bariatic Surgery</h5>
            <div class="for-border"></div>
            <p align="justify"> Most weight loss surgeries today are performed using minimally invasive techniques (laparoscopic surgery). The most common bariatric surgery procedures are gastric bypass, sleeve gastrectomy.  treatment is medical treatment.  </p>
          </div>
        </div>
        <a class="read-more" href="barmatric.php">Read More</a> </div>
      <div class="col-lg-3 col-md-3 col-sm-6 text-center doctor-wrapper">
        <div class="common-doctor animated fadeInUp clearfix ae-animation-fadeInUp">
          <figure><img src="images/c1.jpg"></figure>
          <div class="text-content">
            <h5><a href="1.png">Hernia</a></h5>
            <div class="for-border"></div>
            <p align="justify"> A hernia occurs when an organ pushes through an opening in the muscle or tissue that holds it in place. For example, the intestines may break through a weakened area in the abdominal wall. Hernias are most common in the abdomen.<span id="cg_intext_rt_search_1" data-type-id="10" data-type="yahoo" class="cg-intext-span cg-intext-span-reset cgspnlink "><a data-type-id="10" data-type="yahoo" class="cg-intext-link-replace cgspnlink" id="cg_intext_rt_search_1_link"><span class="cg-intext-trigger "></span></a></span>  </p>
          </div>
        </div>
        <a class="read-more" href="hernia.php">Read More</a> </div>
      <div class="visible-sm clearfix"></div>
      <div class="col-lg-3 col-md-3 col-sm-6 text-center doctor-wrapper">
        <div class="common-doctor animated fadeInUp clearfix ae-animation-fadeInUp">
          <figure> <a href="" > <img src="images/acid1.jpg" class="attachment-gallery-post-single size-gallery-post-single wp-post-image" alt="doctor-4"  sizes="(max-width: 670px) 100vw, 670px" height="500" width="670"> </a> </figure>
          <div class="text-content">
            <h5><a href="acid_reflux.php">Acid Reflux</a></h5>
            <div class="for-border"></div>
            <p align="justify">Acid reflux is a fairly common digestive problem. It occurs when stomach content moves back into the esophagus, leading to a burning sensation in the chest. This is why acid reflux is commonly called heartburn.</span></a> </p>
          </div>
        </div>
        <a class="read-more" href="acid_reflux.php">Read More</a> </div>
      <div class="col-lg-3 col-md-3 col-sm-6 text-center doctor-wrapper">
        <div class="common-doctor animated fadeInUp clearfix ae-animation-fadeInUp">
          <figure>  <img src="images/gallbladder1.jpg" class="attachment-gallery-post-single size-gallery-post-single wp-post-image" alt="doctor-3"  sizes="(max-width: 670px) 100vw, 670px" height="500" width="670"></figure>
          <div class="text-content">
            <h5><a href="">Gall Bladder & Liver</a></h5>
            <div class="for-border"></div>
            <p align="justify"> The gallbladder is a small pouch that sits just under the liver. The gallbladder stores bile produced by the liver. After meals, the gallbladder is empty and flat, like a deflated balloon. Gallstones can lurk inside your gallbladder.   </p>
          </div>
        </div>
        <a class="read-more" href="gallbladder.php">Read More</a> </div>
      <div class="visible-sm clearfix"></div>
      <div class="hidden-sm clearfix"></div>
    </div>
  </div>
</div>
<div class="home-blog text-center clearfix">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="slogan-section animated fadeInUp clearfix ae-animation-fadeInUp">
          <h2>TESTIMONIALS</h2>
          
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-6 ">
            <article class="common-blog-post hentry animated fadeInRight clearfix ae-animation-fadeInRight">
              <figure> <a href="" title=""> <img src="images/5.jpg" class="attachment-blog-post-thumb size-blog-post-thumb wp-post-image" alt="news-2" height="447" width="732"> </a> </figure>
              <div class="text-content clearfix">
                <h5 class="entry-title"><a href="" rel="bookmark"></a></h5>
                <div class="entry-meta">
                 
                <div class="for-border"></div>
                <p>"I started off near 250 pounds and on my two year surgiversary am down to 120 pounds! Thanks Dr. Mayank </p>
              </div>
            </article>
            
             </div>
          <div class="col-lg-4 col-md-4 col-sm-6 ">
            <article class="common-blog-post hentry animated fadeInRight clearfix ae-animation-fadeInRight">
              <div class="gallery gallery-slider clearfix">
                <div style="overflow: hidden; position: relative;" class="">
                  <ul style="width: 1200%; transition-duration: 0.6s; transform: translate3d(-1440px, 0px, 0px);" class="slides">
                    <li style="width: 360px; float: left; display: block;" aria-hidden="true" class="clone"><a href="http://medicalpress.inspirythemes.biz/wp-content/uploads/2014/05/gallery-4.jpg" title=""><img draggable="false" src="images/1.png" alt="gallery-4"></a></li>
                    <li class="" style="width: 360px; float: left; display: block;"><a href="http://medicalpress.inspirythemes.biz/wp-content/uploads/2014/05/gallery-1.jpg" title=""><img draggable="false" src="images/a.jpg" alt="gallery-1"></a></li>
                    <li class="" style="width: 360px; float: left; display: block;"><a href="http://medicalpress.inspirythemes.biz/wp-content/uploads/2014/05/gallery-2.jpg" title=""><img draggable="false" src="images/66.jpg" alt="gallery-2"></a></li>                 </ul>
                </div>
          
                <ul class="flex-direction-nav">
                  <li><a class="flex-prev" href="#">Previous</a></li>
                  <li><a class="flex-next" href="#">Next</a></li>
                </ul>
              </div>
              <div class="text-content clearfix">
                
                <div class="entry-meta">
                 

                <div class="for-border"></div>
                <p>"This surgery gave me a new outlook and a second chance in life. Thanks Dr. Mayank changed our life!"</p>
              </div>
            </article> </div>
          <div class="col-lg-4 col-md-4 col-sm-6 ">
            <article class="common-blog-post hentry animated fadeInRight clearfix ae-animation-fadeInRight">
              <div class="video clearfix">
                <div class="video-wrapper clearfix">
                  <iframe src="//player.vimeo.com/video/75594702?title=0&amp;byline=0&amp;portrait=0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen="" frameborder="0"></iframe>
                </div>
              </div>
              <div class="text-content clearfix">
                <h5 class="entry-title"><a href="http://medicalpress.inspirythemes.biz/the-hero-in-all-of-us/" rel="bookmark"></a></h5>
                <div class="entry-meta">

                  , <span class="entry-author vcard"> by <a class="url fn" rel="author">John Doe</a> </span> </div>
                <div class="for-border"></div>
                <p>
"This is your life and health, it will pay off!! Thanks for change my life health is wealth,Thanks Dr Mayank" </p>
              </div>
            </article>
            <a href=""></a> </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="home-testimonial  clearfix">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 text-center">
        <div class="slogan-section animated fadeInUp clearfix ae-animation-fadeInUp">
          <h2>What patients say <span>About Dr Mayank</span></h2>
          <p></p>
        </div>
      </div>
      <div class="col-lg-10 col-md-10 col-sm-10 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 text-center">
        <div style="height: 393px;" class="flexslider-three animated fadeInUp ae-animation-fadeInUp">
          <ul class="slides">
            <li class="flex-active-slide" style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 1; display: block; z-index: 2;"> <img draggable="false" src="images/female.jpg"class="img-circle wp-post-image" alt="author-22" srcset="" height="100" width="200">
              <blockquote>
                <p>I was suffering from acute cholecystitis and was in severe pain and was luckily referred to Dr Mayank Madan.He operated upon me on an urgent basis and my gall bladder was removed (laproscopic cholecystectomy).I was out of hospital within 24 hours of surgery  and back to work in 3 days. I was suffering from acute cholecystitis and was in severe pain and was luckily referred to Dr Mayank Madan.He operated upon me on an urgent basis and my gall bladder was removed (laproscopic cholecystectomy).I was out of hospital within 24 hours of surgery  and back to work in 3 days.</p>
              </blockquote>
              <div class="testimonial-footer clearfix">
                <h3>kanika Ghai</h3>
                <div class="for-border"></div>
                <p><a target="_blank" href="http://wordpress.org/"></a></p>
              </div>
            </li>
            <li class="" style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;"> <img draggable="false" src="images/p.jpg" class="img-circle wp-post-image" alt="author-11" srcset="" height="350" width="300">
              <blockquote>
                <p>Mere Jivan Datta Namaskar,</p>
 <p> Sir, I & My family special my Mother all are very thankful to you that you have saved my life in too much critical illness. Being a Doctor you are not less than God for me. Really you are a brilliant Doctor as well as human being.</p>
              </blockquote>
              <div class="testimonial-footer clearfix">
                <h3>Muni Ram </h3>
                <div class="for-border"></div>
                <p><a target="_blank" href="http://themeforest.net/">hygiene Manager Nagarro

 </a></p>
              </div>
            </li>
            
              <li class="" style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;"> <img draggable="false" src="images/p.jpg" class="img-circle wp-post-image" alt="author-11" srcset="" height="350" width="300">
              <blockquote>
                <p>Mere Jivan Datta Namaskar,</p>
 <p> Sir, I & My family special my Mother all are very thankful to you that you have saved my life in too much critical illness. Being a Doctor you are not less than God for me. Really you are a brilliant Doctor as well as human being.</p>
              </blockquote>
              <div class="testimonial-footer clearfix">
                <h3>Muni Ram </h3>
                <div class="for-border"></div>
                <p><a target="_blank" href="http://themeforest.net/">hygiene Manager Nagarro

 </a></p>
              </div>
            </li>
             <li class="" style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;"> <img draggable="false"  src="images/famale1.jpg" class="img-circle wp-post-image" alt="author-11" srcset="" height="100" width="200">
              <blockquote>
 <p>  4 year back I had an operation for losing my weight. Earlier my weight was 150kg but after operation which is being operated by Dr. Mayank Madan(Artemis Hospital ) i weight 95 kg. Earlier I wasn't able to enjoy my life due to over weight but now i am enjoing each and every moment of my life. I am having a happy life now.  </p>
              </blockquote>
              <div class="testimonial-footer clearfix">
                <h3>Kavita Aggrawal</h3>
                <div class="for-border"></div>
                <p><a target="_blank" href="http://themeforest.net/">

 </a></p>
              </div>
            </li>
            
              <li class="" style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;"> <img draggable="false" src="images/q.JPG"class="img-circle wp-post-image" alt="author-11" srcset="" height="150" width="200">
              <blockquote>
                <p style="font-size:12px;" align="justify"> I started to experience minor pains in my upper abdomen, under my ribs in April 2012. I would usually ignore it until one day when it was paining a lot. After then, i went to a hospital where I was diagnosed with gallstones by Dr. Mayank Madan. He was really patient to listen to my problem, after a sound checkup i was advised to have an ultrasound. After the reports came in I came to know that I had stones in my gall bladder. Hearing this, I was advised by DR Mayank to have a surgery asap. I'd usually care to go to many other doctors before having surgery but this dr seemed so humble, kind and intelligent. I was overwhelmed with his treatment. Before the surgery,he told me everything about the procedure of the surgery in detail, cleared out my doubts, calmed me a lot so i can be ready for the surgery. The anesthesiatic advised me to have a blood donor but when i talked about this to Dr. Mayank he told me to not to worry about it as not much blood will be lost while doing the surgery. He was helpful in every way as u would like a doctor to be. The surgery took place successfully. Even after the surgery, during various checkups, he advised me what to do and what not to... Told me every possible thing related to post surgery care. Also he gave me his phone number just in case if there was any problem. After the surgery, i'm feeling
good. No problems arose. I feel lucky and overwhelmed to have Dr. Mayank perform my surgery.Totally the best Doctor i feel anyone can trust for treatment.</p>
              </blockquote>
              <div class="testimonial-footer clearfix">
                <h3>Muni Ram </h3>
                <div class="for-border"></div>
                <p><a target="_blank" href="http://themeforest.net/">hygiene Manager Nagarro

 </a></p>
              </div>
            </li>
            
          </ul>
          <ul class="flex-direction-nav">
            <li><a class="flex-prev" href="#">Previous</a></li>
            <li><a class="flex-next" href="#">Next</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include('include/footer.php'); ?>
</body>

<script type="application/x-javascript" src="index_files/opt_content.js"></script>
</html>
<!-- Performance optimized by W3 Total Cache. Learn more: http://www.w3-edge.com/wordpress-plugins/

Page Caching using disk: enhanced
Database Caching using disk
Object Caching 2698/3010 objects using disk

 Served from: medicalpress.inspirythemes.biz @ 2016-04-11 04:30:33 by W3 Total Cache -->