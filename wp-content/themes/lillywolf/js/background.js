jQuery(document).ready(function($) {
	var uiHelper = new UIHelper();
	uiHelper.watchClipRect("content");
	uiHelper.drawSkinnyDiagonals("rightPatterns");
	uiHelper.drawFatDiagonals("leftPatterns");
})	