<script type="javascript">
$(".wrapper").html($(".wrapper .item-box").sort(function(){
    return Math.random()-0.5;
}));

function notify() {
  // Get the snackbar DIV
  var x = document.getElementById("snackbar");

  // Add the "show" class to DIV
  x.className = "show";

  // After 3 seconds, remove the show class from DIV
  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 2000);
}

function color1() {
  var copyText = document.getElementById("color1");
  copyText.select();
  document.execCommand("copy");
}
function color2() {
  var copyText = document.getElementById("color2");
  copyText.select();
  document.execCommand("copy");
}

function color3() {
  var copyText = document.getElementById("color3");
  copyText.select();
  document.execCommand("copy");
}
function color4() {
  var copyText = document.getElementById("color4");
  copyText.select();
  document.execCommand("copy");
}

const randomNumber = Math.floor(Math.random()*4+1);
const $ = e => document.querySelector(e);

/*
window.onload = () => {
    for (i = 4; i; i--) $(".icon"+i).style.display = "none";
    $(".icon"+randomNumber).style.display = "inline";
}
*/
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
