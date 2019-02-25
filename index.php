<!DOCTYPE html>
<!--[if lte IE 6]><html class="preIE7 preIE8 preIE9"><![endif]-->
<!--[if IE 7]><html class="preIE8 preIE9"><![endif]-->
<!--[if IE 8]><html class="preIE9"><![endif]-->
<!--[if gte IE 9]><!--><html><!--<![endif]-->

  <body>
    <head>
      <script src="http://webpaint.me/notoutyetbutsoon/assets/scripts/pace/pace.js"></script>
      <link href="http://webpaint.me/notoutyetbutsoon/assets/scripts/pace/themes/pace-theme-barber-shop.css" rel="stylesheet" />
      <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
      <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
      <link rel="shortcut icon" href="favicon.ico" type="/assets/images/favicon.ico">
      <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-LRlmVvLKVApDVGuspQFnRQJjkv0P7/YFrw84YYQtmYG4nK8c+M+NlmYDCv0rKWpG" crossorigin="anonymous">
      <link href="https://fonts.googleapis.com/css?family=Varela" rel="stylesheet">
      <meta charset="UTF-8">
      <link href="https://fonts.googleapis.com/css?family=Roboto:500,700" rel="stylesheet">
      <meta name="theme-color" content="#1798e5">
    <meta name="viewport" content="width=device-width,initial-scale=1">
      <title>Webpaint - The free palette viewer!</title>
    <meta name="author" content="Audun Hilden">
    <meta property="og:title" content="Webpaint" />
    <meta property="og:url" content="http://www.webpaint.me" />
    <meta property="og:image" content="https://i.imgur.com/jlrQcZR.png" />
    <meta name="description" content="The easiest online tool for finding the perfect color schemes to your current, or new website.">
    <meta name="keywords" content="coolors, palette, color pallette, schemes, website, flat design, website flat colors, flat ui, flatuicolors">
    <link rel="stylesheet" href="http://webpaint.me/notoutyetbutsoon/assets/css/style.css" type="text/css">
    <script language="javascript" type="text/javascript" src="assets/scripts/scripts.js"></script>
    </head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-133197199-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-133197199-1');
    </script>
    <?php require_once ('notoutyetbutsoon/assets/php/header2.php');?>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
    <div class="container" style="text-align:left;max-width:454px;">
      <p>
        <br>
      <h1>🌈 Discover new palettes for your website!</h1>
      <h2>
          No more frustration when designing your website!
          <p>Use Webpaint to find the best looking palette for your project!
          <p>
          Pre generated color palettes with boostrap themes to test <strong>every single palette</strong> on!
          <p>
          <br>
          <h1><a href="/notoutyetbutsoon" class="ignoreAhref">⚡️</a> Still under development.</h1>
      </h2>
      <p><br>
      <h1>
        Who is it for?
      </h1>
      <h2>
        Webpaint can be used for <strong>everyone who is passion about colors.</strong>
        <p>
          - but we are targetting our audience who are visiting to find palettes for their website.
          <p>As long as you find inspiration, and find your perfect palette - we've done our part.
      </h2>
      <p>
        <br>
        <div class="textcenter">
        <div class="fb-like" data-href="https://www.facebook.com/Webpaint-498225684040466/?modal=admin_todo_tour" data-layout="button_count" data-action="like" data-size="small" data-show-faces="false" data-share="true"></div>
        <p>
        <a href="https://twitter.com/TryWebPaint?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-show-count="false">Follow @TryWebPaint</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        <p>
        <a href="https://instagram.com/trywebpaint/" class="instagram ignoreAhref" data-show-count="false"><i class="fab fa-instagram"></i> Follow @TryWebPaint</a>
    </div>
    <P><br>
      <h1>📎 Images</h1>
      <h2>
        Click to view full size.
      </h2>
      <p>
        <img id="myImg" src="https://i.imgur.com/q1VZRAn.png" alt="palette_1" style="width:100%;max-width:300px;height:auto;">
        <div id="myModal" class="modal">
        <span class="close">&times;</span>
        <img class="modal-content" id="img01">
      </div>
    </div>
  </body>
</html>
<style>
/* Style the Image Used to Trigger the Modal */
#myImg {
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}
body{
  background-color:#fdfdfd !important;
}
.instagram{
  color:white;
  font-weight:bold;
  background: #f09433;
  background: -moz-linear-gradient(45deg, #f09433 0%, #e6683c 25%, #dc2743 50%, #cc2366 75%, #bc1888 100%);
  background: -webkit-linear-gradient(45deg, #f09433 0%,#e6683c 25%,#dc2743 50%,#cc2366 75%,#bc1888 100%);
  background: linear-gradient(45deg, #f09433 0%,#e6683c 25%,#dc2743 50%,#cc2366 75%,#bc1888 100%);
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f09433', endColorstr='#bc1888',GradientType=1 );
  padding: 4px;
  border-radius: 0.3em;
}
#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 9999999; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (Image) */
.modal-content {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
}

/* Caption of Modal Image (Image Text) - Same Width as the Image */
#caption {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}

/* Add Animation - Zoom in the Modal */
.modal-content, #caption {
  animation-name: zoom;
  animation-duration: 0.6s;
}

@keyframes zoom {
  from {transform:scale(0)}
  to {transform:scale(1)}
}

/* The Close Button */
.close {
  position: absolute;
  top: 15px;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modal-content {
    width: 100%;
  }
}
  @media only screen and (max-width: 600px) {
      .sharethis-inline-follow-buttons{display:none !important;}
    .logoULL {
        top: 5px !important;
        width:30px !important;
    }
    .container{padding-left:15px;padding-right:15px;max-width: 300px !important;}
  }

</style>
<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}
</script>
