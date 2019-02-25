<head>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
  <script language="javascript" type="text/javascript" src="http://webpaint.me/notoutyetbutsoon/assets/scripts/scripts.js"></script>
  <script src="http://webpaint.me/notoutyetbutsoon/assets/scripts/pace/pace.js"></script>
  <link href="http://webpaint.me/notoutyetbutsoon/assets/scripts/pace/themes/pace-theme-barber-shop.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Baloo+Bhaijaan" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-LRlmVvLKVApDVGuspQFnRQJjkv0P7/YFrw84YYQtmYG4nK8c+M+NlmYDCv0rKWpG" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Varela" rel="stylesheet">
  <meta charset="UTF-8">
  <link href="https://fonts.googleapis.com/css?family=Roboto:500,700" rel="stylesheet">
<meta name="viewport" content="width=device-width,initial-scale=1">
  <title>WebPaint - Free palette maker!</title>
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png?v=oLBK2R9N0y">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png?v=oLBK2R9N0y">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png?v=oLBK2R9N0y">
<link rel="manifest" href="/site.webmanifest?v=oLBK2R9N0y">
<link rel="mask-icon" href="/safari-pinned-tab.svg?v=oLBK2R9N0y" color="#60c0cb">
<link rel="shortcut icon" href="/favicon.ico?v=oLBK2R9N0y">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#1798e5">
<meta name="author" content="Audun Hilden">
<meta property="og:title" content="Webpaint" />
<meta property="og:url" content="http://www.webpaint.me" />
<meta property="og:image" content="https://i.imgur.com/jlrQcZR.png" />
<meta name="description" content="The easiest online tool for finding the perfect color schemes to your current, or new website.">
<meta name="keywords" content="coolors, palette, color pallette, schemes, website, flat design, website flat colors, flat ui, flatuicolors, webpaint, audun hilden, audunhilden, rocketprices, webpainter, web paint, colette, palette, dark palette, free, palettes, free palette">
<link rel="stylesheet" href="http://webpaint.me/notoutyetbutsoon/assets/css/style.css" type="text/css">
<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      xfbml            : true,
      version          : 'v3.2'
    });
  };

  (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- Your customer chat code -->
<div class="fb-customerchat"
  attribution=setup_tool
  page_id="498225684040466">
</div>
</head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-133197199-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-133197199-1');

  $(".wrapper").html($(".wrapper .item-box").sort(function(){
      return Math.random()-0.5;
  }));
</script>
