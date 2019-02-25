
<!DOCTYPE html>
<!--[if lte IE 6]><html class="preIE7 preIE8 preIE9"><![endif]-->
<!--[if IE 7]><html class="preIE8 preIE9"><![endif]-->
<!--[if IE 8]><html class="preIE9"><![endif]-->
<!--[if gte IE 9]><!--><html><!--<![endif]-->

  <body>
    <?php require_once ('assets/php/head.php');?>
    <?php require_once ('assets/php/header.php');?>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
    <div class="container">
      <div class="wrapper">
        <div class="item-box blogBox">
          <a class="palette ignoreAhref" href="palettes/1" id="1">
            <div class="place c4" style="background-color:#707386;"></div>
            <div class="place c3" style="background-color:#802595;"></div>
            <div class="place c2" style="background-color:#1f2348;"></div>
            <div class="place c1" style="background-color:#0f112f;"></div>
          </a>
          <div class="btn-grey-border ignoreAhref">
            <span id="randomIcon"></span>
            <span id="bold" class="marginl10 noselect">
              Modify me!
            </span>
          </div>
        </div>

        <!--
        Palette #pal2
        -->

        <div class="item-box blogBox">
          <a class="palette ignoreAhref" href="palettes/2" id="2">
            <div class="place c4" style="background-color:#303235;"></div>
            <div class="place c3" style="background-color:#111417;"></div>
            <div class="place c2" style="background-color:#323841;"></div>
            <div class="place c1" style="background-color:#cb4a50;"></div>
          </a>
          <div class="btn-grey-border ignoreAhref">
            <span id="randomIcon"></span>
            <span id="bold" class="marginl10 noselect">
              Modify me!
            </span>
          </div>
        </div>

        <!--
        Palette number #pal3
        -->

        <div class="item-box blogBox">
          <a class="palette ignoreAhref" href="palettes/3" id="1">
            <div class="place c4" style="background-color:#474b4f;"></div>
            <div class="place c3" style="background-color:#222629;"></div>
            <div class="place c2" style="background-color:#86c232;"></div>
            <div class="place c1" style="background-color:#61892f;"></div>
          </a>
          <div class="btn-grey-border ignoreAhref">
            <span id="randomIcon"></span>
            <span id="bold" class="marginl10 noselect">
              Modify me!
            </span>
          </div>
        </div>

        <!--
        Palette number #pal4
        -->

        <div class="item-box blogBox">
          <a class="palette ignoreAhref" href="palettes/4" id="4">
            <div class="place c4" style="background-color:#def2f1;"></div>
            <div class="place c3" style="background-color:#3aafa8;"></div>
            <div class="place c2" style="background-color:#2b7a78;"></div>
            <div class="place c1" style="background-color:#17252a;"></div>
          </a>
          <div class="btn-grey-border ignoreAhref">
            <span id="randomIcon"></span>
            <span id="bold" class="marginl10 noselect">
              Modify me!
            </span>
          </div>
        </div>

        <!--
        Palette number #pal5
        -->

        <div class="item-box blogBox">
          <a class="palette ignoreAhref" href="palettes/5" id="4">
            <div class="place c4" style="background-color:#3a99d9;"></div>
            <div class="place c3" style="background-color:#2e81b7;"></div>
            <div class="place c2" style="background-color:#e54d42;"></div>
            <div class="place c1" style="background-color:#2c3e4f;"></div>
          </a>
          <div class="btn-grey-border ignoreAhref">
            <span id="randomIcon"></span>
            <span id="bold" class="marginl10 noselect">
              Modify me!
            </span>
          </div>
        </div>

        <!--
        Palette number #pal6
        -->

        <div class="item-box blogBox">
          <a class="palette ignoreAhref" href="palettes/6" id="4">
            <div class="place c4" style="background-color:#3fb0e7;"></div>
            <div class="place c3" style="background-color:#9cdeff;"></div>
            <div class="place c2" style="background-color:#0775ab;"></div>
            <div class="place c1" style="background-color:#283e56;"></div>
          </a>
          <div class="btn-grey-border ignoreAhref">
            <span id="randomIcon"></span>
            <span id="bold" class="marginl10 noselect">
              Modify me!
            </span>
          </div>
        </div>

        <div class="item-box blogBox moreBox" style="display:none;" >
          <a class="palette ignoreAhref" href="palettes/6" id="4">
            <div class="place c4" style="background-color:red;"></div>
            <div class="place c3" style="background-color:red;"></div>
            <div class="place c2" style="background-color:red;"></div>
            <div class="place c1" style="background-color:red;"></div>
          </a>
          <div class="btn-grey-border ignoreAhref">
            <span id="randomIcon"></span>
            <span id="bold" class="marginl10 noselect">
              Modify me!
            </span>
          </div>
        </div>

        <div class="item-box blogBox moreBox" style="display:none;" >
          <a class="palette ignoreAhref" href="palettes/6" id="4">
            <div class="place c4" style="background-color:red;"></div>
            <div class="place c3" style="background-color:red;"></div>
            <div class="place c2" style="background-color:red;"></div>
            <div class="place c1" style="background-color:red;"></div>
          </a>
          <div class="btn-grey-border ignoreAhref">
            <span id="randomIcon"></span>
            <span id="bold" class="marginl10 noselect">
              Modify me!
            </span>
          </div>
        </div>
        <?php require_once ('assets/scripts/scripts.js');?>
      </div>
      <div class="palette-showcase center" style="text-align: center;" id="loadMore">
        <div class="btn-blue btn" href="#">
          Load more
        </div>
      </div>
    </div>
    <?php require_once ('assets/php/footer.php');?>
  </body>
</html>
<!--
script randomizing the page
-->
<script>
$(".wrapper").html($(".wrapper .item-box").sort(function(){
    return Math.random()-0.5;
}));

$( document ).ready(function () {
		$(".moreBox").slice(0, 3).show();
		if ($(".blogBox:hidden").length != 0) {
			$("#loadMore").show();
		}
		$("#loadMore").on('click', function (e) {
			e.preventDefault();
			$(".moreBox:hidden").slice(0, 6).slideDown();
			if ($(".moreBox:hidden").length == 0) {
				$("#loadMore").fadeOut('slow');
			}
		});
	});
</script>
