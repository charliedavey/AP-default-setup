$(document).ready(function(e) {
	
	////////////////////////
	// PLACEHOLDER FALLBACK
	////////////////////////
	
	if(!Modernizr.input.placeholder) {
		$('input, textarea').placeholder();
	};

	
	/////////////////////
	// LOAD SOCIAL FUNCTION
	/////////////////////
	
	
	function loadSocial() {
		
		/////////////////////
		// TWITTER
		/////////////////////
		if (typeof (twttr) != 'undefined') {
			twttr.widgets.load();
		} else {
			$.getScript('http://platform.twitter.com/widgets.js');
		}
	
		/////////////////////
		// FACEBOOK
		/////////////////////

		if (typeof (FB) != 'undefined') {
			FB.init({ status: true, cookie: true, xfbml: true });
		} else {
			$.getScript("http://connect.facebook.net/en_US/all.js#xfbml=1", function () {
				FB.init({ status: true, cookie: true, xfbml: true });
			});
		}
	  
		/////////////////////
		// LINKED IN
		/////////////////////
		
			
		if (typeof (IN) != 'undefined') {
			IN.parse();
		} else {
			$.getScript("http://platform.linkedin.com/in.js");
		}
			
		
		/////////////////////
		// GOOGLE PLUS
		/////////////////////
		if (typeof (gapi) != 'undefined') {
			$(".g-plusone").each(function () {
				gapi.plusone.render($(this).get(0));
			});
		} else {
			$.getScript('https://apis.google.com/js/plusone.js');
		}
		
	}
	
	loadSocial();

	/////////////////////
	// 
	/////////////////////
	
});

$(window).ready(function(e) {
	
	////////////////////////
	
	////////////////////////
	
});