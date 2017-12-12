var Paginator = function (objectAssigned, functionAssigned) {
	this.element          = $('ul.pagination');
	this.functionAssigned = functionAssigned;
	this.objectAssigned   = objectAssigned;

	$(document).on('click', 'ul.pagination > li > a', $.proxy(this.jumpToPage, this));
};
Paginator.prototype = {
	setLastPage: function (lastPage) {
		this.lastPage = lastPage;
	},
	setPagesRange: function (pagesRange) {
		this.pagesRange = pagesRange;
	},
	jumpToPage: function (e) {
		this.objectAssigned[this.functionAssigned]($(e.target).data('page'));
	}
};