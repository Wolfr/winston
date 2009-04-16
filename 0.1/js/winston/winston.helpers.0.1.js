$(document).ready(function() {

	/*
		Todo helper (temporary)
		remove when going live
	*/
	$(document).bind('keydown', 'SHIFT+t', function(evt) {
		$(".todoFlag").toggle('500');
	});
	
	/*
		Grid helper (temporary)
		remove when going live
	*/
	$(document).bind('keydown', 'SHIFT+g', function(evt) {
		if ($('#grid').css("display") == 'none') {
			$("#grid").fadeIn('slow');
		} else {
			$("#grid").fadeOut('500');
		};
	});
	
	/*
		Mobile res UI_HELPER
	*/
	
	// Add selected state
	$("#fixed input").click(function() { 
		$("#fixed label").removeClass("selected");
		$(this).next().addClass("selected");
	});

	// Different views
	$('#fullwidth').click(function() {
		$("body").removeClass();
		$(this).addClass("selected");
		$.cookie('view', 'fullwidth');
	});
	
	$('#n95').click(function() {
		$("body").removeClass();
		$("body").toggleClass("n95");
		$.cookie('view', 'n95');
	});
	
	$('#iPhone').click(function() {
		$("body").removeClass();
		$("body").toggleClass("iPhone");
		$.cookie('view', 'iPhone');
	});
	
	$('#htc').click(function() {
		$("body").removeClass();
		$("body").toggleClass("htc");
		$.cookie('view', 'htc');
	});
	
	$('#htcLS').click(function() {
		$("body").removeClass();
		$("body").toggleClass("htcLS");
		$.cookie('view', 'htcLS');
	});
	
	$('#blackberryBold').click(function() {
		$("body").removeClass();
		$("body").toggleClass("blackberryBold");
		$.cookie('view', 'blackberryBold');
	});

	
	// Persist body class if you click on of the other links or refresh the page
	var view = $.cookie('view');

	if (view == 'fullwidth') {
		$("#fullwidth").attr("checked", "checked");
		$("#fullwidth").next().addClass("selected");
	};

	if (view == 'n95') {
		$('body').addClass("n95");
		$("#n95").attr("checked", "checked");
		$("#n95").next().addClass("selected");
	};

	if (view == 'iPhone') {
		$('body').addClass("iPhone");
		$("#iPhone").attr("checked", "checked");
		$("#iPhone").next().addClass("selected");
	};
	
	if (view == 'htc') {
		$('body').addClass("htc");
		$("#htc").attr("checked", "checked");
		$("#htc").next().addClass("selected");
	};
	
	if (view == 'htcLS') {
		$('body').addClass("htcLS");
		$("#htcLS").attr("checked", "checked");
		$("#htcLS").next().addClass("selected");
	};
	
	if (view == 'blackberryBold') {
		$('body').addClass("blackberryBold");
		$("#blackberryBold").attr("checked", "checked");
		$("#blackberryBold").next().addClass("selected");
	};

});