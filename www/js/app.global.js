// http://paulirish.com/2009/log-a-lightweight-wrapper-for-consolelog/
window.log = function() {
/*@cc_on
  return;
  @*/
	if (window.isDebugMode) {
		log.history = log.history || []; // store logs to an array for reference
		log.history.push(arguments);
		if (this.console) {
			console.log(Array.prototype.slice.call(arguments));
		}
		if (typeof App !== 'undefined' && typeof App.trigger === 'function') {
			App.trigger('log', arguments);
		}
	} else {
		log.history = log.history || []; // store logs to an array for reference
		log.history.push(arguments);
	}
};


var APP = APP || {};

APP.Global = (function(window, document) {
	var self = {
		init: function() {
			$(document.body).delegate('a[rel=external]', 'click', function(e) {
				log('opening external link');
				e.preventDefault();
				window.open(this.href, '_blank');
			});
			
			log('global init done');
		}
	};

	return self;

})(this, this.document);