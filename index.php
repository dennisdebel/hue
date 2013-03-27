<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"
      xmlns:og="http://ogp.me/ns#"
      xmlns:fb="https://www.facebook.com/2008/fbml">

	<head>
		
		<script type="text/javascript" src="js/pixastic.custom.js"></script>
		<script type="text/javascript" src="js/jquery-1.2.6.min.js"></script>
		<script type="text/javascript" src="js/jquery-ui-1.6.custom.min.js"></script>
		<script src="js/jquery.ui.touch-punch.min.js"></script>
		<script type='application/javascript' src='js/fastclick.js'></script>
		<link rel="stylesheet" href="css/style.css" type="text/css" media="screen"/>
		<link rel="stylesheet" href="css/flora.slider.css" type="text/css" media="screen"/>
		
		
		
  <head>
    <title>Hue Grant - beta</title>
    <meta property="og:title" content="Hue Grant - beta"/>
    <meta property="og:url" content="http://huegrant.com"/>
    <meta property="og:image" content="http://www.huegrant.com/img/fb.jpg"/>
    <meta property="og:site_name" content="Hue Grant"/>
    <meta property="og:description"
          content="Create you favourate Hue, and share it with the world!"/>

<meta name="viewport" content="width=device-width, initial-scale=0.4, maximum-scale=0.4, user-scalable=no" />

		<script type="text/javascript">

$(document).ready(function(){
	$("#actiontabs > ul").tabs();
});
window.addEventListener('load', function() {
    new FastClick(document.body);
}, false);
//function resetDemo() {
//	Pixastic.revert(document.getElementById("demoimage"));
}

</script>


	</head>
	<body>
<script type="text/javascript"><!--
//setCookie("hidewarningbox", "");
function hideWarningBox() {
	document.getElementById("warningbox").style.display = "none";
	setCookie("hidewarningbox", "true");
}
if (cookies["hidewarningbox"] != "true") {
	if (!Pixastic.Client.hasCanvas() || !Pixastic.Client.hasCanvasImageData()) {
		var html = "<span class=\"warningbox\" id=\"warningbox\">";
		if (Pixastic.Client.isIE()) {
			html += "<span class=\"warningheader\">Looks like you're using Internet Explorer!</span>Although a few of the effects in Pixastic are simulated in IE with proprietary filters, most actions and effects will not work without a canvas enabled browser. Please consider using either Firefox, Opera or Safari."
		} else {
			if (Pixastic.Client.hasCanvas()) {
				html += "<span class=\"warningheader\"></span>Looks like you're using a Canvas enabled browser, but one that does not support the ImageData methods. Please consider upgrading to either Firefox 3+, Opera 9.5+ or Safari 4."
			} else {
				html += "<span class=\"warningheader\"></span>Looks like you're not using a Canvas enabled browser. Pixastic is based on the HTML5 Canvas element and therefore requires a modern browser. Consider upgrading to either Firefox 3+, Opera 9.5+ or Safari 4."
			}
		}
		html += "<span class=\"warninghidelink\" onclick=\"hideWarningBox();\">[hide]</span></span>";
		document.write(html);
	}
}
--></script>


<div id="tabdemo">

		<!--<h3>Hue Grant Beta</h3>--><div class="actiondemo">
<script type="text/javascript">






function demo() {
	Pixastic.process(document.getElementById("demoimage"), "hsl", {
		hue : $("#value-hue").val(),
		saturation : $("#value-saturation").val(),
		lightness : $("#value-lightness").val()
	});
}
</script>


<div class="sliderarea">

<div onclick="demo();"><input type="text" id="value-hue" value="0" class="num" onclick="demo();"/></div>
<div id='slider-hue' class='ui-slider' onclick="demo();" style="width:200px;margin-top:5px;margin-bottom:5px; ">
	<div class="ui-slider-handle" onclick="demo();"></div><div class="ui-slider-range"></div>
</div>
<!--
<div><input type="text" id="value-saturation" value="0" class="slidert" style="width:30px;"/></div>
<div id='slider-saturation' class='ui-slider' style="width:200px;margin-top:5px;margin-bottom:5px;">
	<div class="ui-slider-handle"></div><div class="ui-slider-range"></div>
</div>

<div><input type="text" id="value-lightness" value="0" class="slider" style="width:30px;"/></div>
<div id='slider-lightness' class='ui-slider' style="width:200px;margin-top:5px;margin-bottom:5px;">
	<div class="ui-slider-handle"></div><div class="ui-slider-range"></div>
</div>
-->

<script type="text/javascript">


<!--
$(document).ready(function(){

  var hue = '<?php echo htmlentities($_GET['hue']); ?>'; 

	
	$("#slider-hue").slider({
			slide: function(hue) {
				$("#value-hue").val(Math.round($("#slider-hue").slider("value") / 100 * 360) - 180);
				$('#share').attr('href','http://www.facebook.com/share.php?u=http://huegrant.com/?hue='+$("#value-hue").val());
			} 
	}).slider("moveTo", hue);
	
	demo(); //refresh image color
	

	$("#slider-saturation").slider({
			slide: function() {
				$("#value-saturation").val($("#slider-saturation").slider("value") * 2 - 100);
			}
	}).slider("moveTo", 50);

	$("#slider-lightness").slider({
			slide: function() {
				$("#value-lightness").val($("#slider-lightness").slider("value") * 2 - 100);
			}
	}).slider("moveTo", 50);
	
});
--></script>
<!--
<input type="button" onclick="demo();" value="Adjust HSL"/>
<input type="button" onclick="resetDemo();" value="Reset"/><br/>
-->
<a id="share" style="margin-left:280px;margin-top:-60px;"><img src="img/share.png">
<!--<input id="share" style="width:82px;font-size:20px;" type="button" onclick="" value="Share"/>-->

</a>
</div>

<img src="img/huegrant.png" id="demoimage" style="margin-top:5px;" alt=""/>
</div></div>
	
	
		<p></p>
      </div>
      <!--<div class="content-box-bottom">by dennisdebel.nl and chiaraarkesteijn.nl</div>-->

<p></p>
<script type="text/javascript"><!--
google_ad_client = "ca-pub-1393798743993902";
/* hueGrant */
google_ad_slot = "9513059779";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
    </div>
  </div>


	</body>
</html>