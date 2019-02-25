<!DOCTYPE html>
<!--[if lte IE 6]><html class="preIE7 preIE8 preIE9"><![endif]-->
<!--[if IE 7]><html class="preIE8 preIE9"><![endif]-->
<!--[if IE 8]><html class="preIE9"><![endif]-->
<!--[if gte IE 9]><!--><html><!--<![endif]-->

  <body>
    <?php require_once ('../assets/php/head.php');?>
    <?php require_once ('../assets/php/header.php');?>
    <!--
    <div class="pot-header">
      <div class="container">
        <i class="fas fa-heart"></i> &nbsp;Design used in this protype was made by <a href="https://www.creative-tim.com" target="_blank" class="author">Creative Tim</a>, thanks Tim!
      </div>
    </div>
  -->
    <div class="container">
      <div class="palette-showcase center">
        <div class="bumperdown">
          <div class="c1-showcase floatl pointer" onclick="color1()" style="background-color:#283e56;">
            <div class="copy">
              <div class="btn-copy">
                  COPY
              </div>
            </div>
          </div>
            <div class="c1-showcase floatl pointer" onclick="color2()" style="background-color:#0775ab;">
              <div class="copy">
                <div class="btn-copy">
                  COPY
                </div>
              </div>
            </div>
            <div class="c1-showcase floatl pointer" onclick="color3()" style="background-color:#9cdeff;">
              <div class="copy">
                <div class="btn-copy">
                  COPY
                </div>
              </div>
            </div>
            <div class="c1-showcase floatl pointer" onclick="color4()" style="background-color:#3fb0e7;">
              <div class="copy">
                <div class="btn-copy">
                  COPY
                </div>
              </div>
            </div>
          </div>
        <div class="btn-refresh margint20 pointer" onclick="notify()" style="margin-left:auto;margin-right:auto;display:table;">
        <i class="fas fa-sync"></i> Change theme
      </div>
    </div>
  </div>
    <div class="design">
      <?php require_once ('../themes/error.php');?>
      <?php require_once ('../assets/scripts/scripts.js');?>
  </div>
  <?php require_once ('../assets/php/footer.php');?>
  </body>
</html>

<input type="text" value="#283e56" id="color1" style="opacity:0;position:fixed;right:999999;top:99999;">
<input type="text" value="#0775ab" id="color2" style="opacity:0;position:fixed;right:999999;top:99999;">
<input type="text" value="#9cdeff" id="color3" style="opacity:0;position:fixed;right:999999;top:99999;">
<input type="text" value="#3fb0e7" id="color4" style="opacity:0;position:fixed;right:999999;top:99999;">
