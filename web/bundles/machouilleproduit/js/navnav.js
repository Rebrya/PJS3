var oritop = -20;
var leftActive = true;
$(window).scroll(function() {
	var scrollt = window.scrollY;
	var elm = $("#cssmenu");

	if (oritop < 0) {
		// window.alert("debut");
		oritop = elm.offset().top;
	}
	if (scrollt >= oritop - 20) {
		elm.css({
			"position" : "fixed",
			"top" : "25px",
			"left" : 0,
			"width" : "100%"
		});
	} else {
		elm.css({
			"position" : "relative",
			"top" : "0em",
			"width" : "inherit"
		});
	}
});
