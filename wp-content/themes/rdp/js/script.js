



$(document).ready(function(){
	var str=location.href.toLowerCase();
	$("#menu-principal li a").each(function() {
	if (str.indexOf(this.href.toLowerCase()) > -1) {
	 $("li.destaque").removeClass("destaque");
	$(this).parent().addClass("destaque");
	}
	 });
});

$(document).ready(function(){
	var str=location.href.toLowerCase();
	$("#side li a").each(function() {
	if (str.indexOf(this.href.toLowerCase()) > -1) {
	 $("li.destaque").removeClass("destaque");
	$(this).parent().addClass("destaque");
	}
	 });
});
