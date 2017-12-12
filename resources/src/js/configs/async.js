var Async = function () {

};
Async.prototype = {
	ajaxLoader: function (arguments) {
		return $.when.apply($, arguments);
	}
}