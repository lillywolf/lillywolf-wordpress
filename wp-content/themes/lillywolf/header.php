<html>
<head>
	<title>Lilly Wolf</title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<script src="/resources/js/uihelper.js"></script>
</head>
<body>
	<canvas height="1600px" width="1600px" id="rightPatterns" class="pattern">
	</canvas>	
	<canvas height="1600px" width="1600px" id="leftPatterns" class="pattern">
	</canvas>
	
	<div id="wrapper">
		<div id="header">
			<div id="logo">LILLYWOLF</div>
			<div id="subtext">WEIRD POP</div>
		</div>

		<script type="text/javascript">
			var uiHelper = new UIHelper();
			uiHelper.watchClipRect("content");
			uiHelper.drawSkinnyDiagonals("rightPatterns");
			uiHelper.drawFatDiagonals("leftPatterns");
		</script>