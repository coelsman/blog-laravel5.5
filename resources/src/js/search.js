var Search = function () {
	this.data = [];
};
Search.prototype = {
	search: function (text, elementsToHandle, elementsToSearch) {
		var self = this
		,   rex = new RegExp('.*'+text+'.*', 'gi')
		,   results = [];

		elementsToHandle.each(function (k, e) {
			$.each(elementsToSearch, function (k2, e2) {
				var _isMatched = rex.test($(e).find(e2).html());
				rex.lastIndex = 0;

				if (_isMatched) {
					results[k] = true;
					return false;
				}
			});

			if ('undefined' === typeof results[k]) {
				results[k] = false;
			}
		});

		return results;
	},
	toggleElementsBySearchResults: function (elementsToHandle, results) {
		if (results instanceof Array) {
			$.each(results, function (k, result) {
				elementsToHandle.eq(k).css({
					display: result ? 'block' : 'none'
				});
			});
		} else {
			if (results === true) {
				elementsToHandle.show();
			} else {
				elementsToHandle.hide();
			}
		}
	}
};