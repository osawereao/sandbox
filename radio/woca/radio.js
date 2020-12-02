function TogglePlayer() {
	$("#WOCARadioPlayer").toggle(500);
	var Img = document.getElementById("WOCARadioPlayer");
	var Icon = Img.getAttribute("src");
	if(Icon == 'radio-close.png'){Img.setAttribute("src", "radio-open.png");}
}