Modernizr.load([{
			test: Modernizr.boxshadow,
			yep: '//code.jquery.com/jquery-2.1.0.min.js',
			nope: '//code.jquery.com/jquery-1.11.0.min.js',
			callback: function (url, result, key) { 
				<?php // LOAD THE CORRECT JQUERY VERSION // ?>
				if (url === '//code.jquery.com/jquery-1.11.0.min.js') {
					if (!window.jQuery) {Modernizr.load('/js/jquery-1.11.0.min.js');};
				} else if (url === '//code.jquery.com/jquery-2.1.0.min.js') {
					if (!window.jQuery) {Modernizr.load('/js/jquery-2.1.0.min.js');};
				};
			},
			complete: function () { 
				<?php // LOAD OTHER SCRIPTS // ?>
				Modernizr.load([{ test: $('.map').length > 0, yep: '//maps.google.com/maps/api/js?sensor=false'}, '/js/bootstrap.min.js', 'ielt9!/js/respond.min.js', '/js/plugins.js?v=1.0', '/js/load.js?v=1.0']); 
				<?php // RUN PAGE SCRIPT FUNCTION // ?>
				pageinit();
			}
}]);