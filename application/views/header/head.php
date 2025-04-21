<!DOCTYPE html>
<html lang="en">
<head>

   <title>
    <?php echo $title;?></title>
 
    <meta name="description" content="">
    <meta name="keywords" content="" />
    
    <meta name="facebook-domain-verification" content="jnq10ickobhinlpulg5wxg3965n6s6" />

    <link rel="icon" type="image/png" sizes="16x16" href="">
    <meta name="theme-color" content="#000">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://use.fontawesome.com/9d956d9e3d.js"></script>

<link rel="stylesheet" type="text/css" href="https://<?php echo base_url();?>css/plugin/slick/slick.css">
<link rel="stylesheet" type="text/css" href="https://<?php echo base_url();?>css/plugin/slick/slick-theme.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link rel="stylesheet" href="https://<?php echo base_url();?>css/plugin/lightbox/dist/simple-lightbox.css?v2.8.0" />
<link rel="stylesheet" href="https://<?php echo base_url();?>css/style.css">

  <style>
  body {
    font: 400 15px Lato, sans-serif;
    line-height: 1.8;
    color: #818181;
  }
  h2 {
    font-size: 24px;
    text-transform: uppercase;
    color: #303030;
    font-weight: 600;
    margin-bottom: 30px;
  }
  h4 {
    font-size: 19px;
    line-height: 1.375em;
    color: #303030;
    font-weight: 400;
    margin-bottom: 30px;
  }  

body, html { 
  height: auto;
overflow-x: hidden;
 background-color: #fff;

}


@font-face {
  font-family:"lato";
  src: url("https://<?php echo base_url();?>css/fonts/Lato-Regular.ttf") format("truetype");
}

html, body, div, span, applet, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, pre, a, abbr, acronym, address, big, cite, code, del, dfn, em, img, ins, kbd, q, s, samp, small, strike, strong, sub, sup, tt, var, b, u, center, dl, dt, dd, ol, ul, li, fieldset, form, label, legend, table, caption, tbody, tfoot, thead, tr, th, td, article, aside, canvas, details, embed, figure, figcaption, footer, header, hgroup, menu, nav, output, ruby, section, summary, time, mark, audio, video {
   
    font-family: lato;

}



 .slideanim_l {visibility:hidden;}
  .slide_l {
    animation-name: slide_l;
    animation-duration: 1s;
    visibility: visible;
  }
  @keyframes slide_l {
    0% {
      opacity: 0;
      transform: translateX(-100%);
    } 
    100% {
      opacity: 1;
      transform: translateX(0%);
    }
  }

  .slideanim_r {visibility:hidden;}
  .slide_r {
    animation-name: slide_r;
    animation-duration: 1s;
    visibility: visible;
  }
  @keyframes slide_r {
    0% {
      opacity: 0;
      transform: translateX(100%);
    } 
    100% {
      opacity: 1;
      transform: translateX(0%);
    }
  }

 /*
   color: #255784;
    background: #2196f3;
    
  transition-delay: 1s;*/


      @keyframes glowing {
        0% {
          background-color: #fff;
        
        }
        
        100% {
          box-shadow: 0 0 10px #fff, 0 0 40px #fff, 0 0 80px #fff;
          border: 1px solid #fff;
        }
      }
      .button_blink {
        animation: glowing 1800ms infinite linear;
      }



     .on_hover:hover{
     box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);

     } 

</style>


<script src="plugin/lightbox2/src/js/jquery.swipebox.js"></script>
<link rel="stylesheet" href="plugin/lightbox2/src/css/swipebox.css" >



<!-- Meta Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '3243876689267149');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=3243876689267149&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-3C3H76T49V"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-3C3H76T49V');
</script>

<!-- Global site tag (gtag.js) - Google Ads: 10954879995 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-10954879995"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-10954879995');
</script>


</head>



  
