var Handlebars = require('handlebars');

var Paginator = function () {

};
Paginator.prototype = {
	setLastPage: function (lastPage) {
		this.lastPage = lastPage;
	},
	setPagesRange: function (pagesRange) {
		this.pagesRange = pagesRange;
	}
};

var buildPostsTemplate = function (data, elementCompiler, elementWrapper) {
	var html     = '';
	var source   = document.getElementById(elementCompiler).innerHTML;
	var template = Handlebars.compile(source);

	$.each(data, function (k, row) {
		html += template({
			title: row.title,
			summary: row.summary,
			author: row.user.fullname,
			thumbUrl: row.image,
			comments: row.comments
		});
	});

	$('#' + elementWrapper).html(html);
};

var buildPaginatorTemplate = function (data, elementCompiler, elementWrapper) {
	var source   = document.getElementById(elementCompiler).innerHTML;
	var template = Handlebars.compile(source);
	var pages = [];

	for (var i = data.firstPage; i <= data.lastPage; i++) {
		pages.push({
			page: i
		});
	}

	var html = template({
		pages: pages
	});

	$('#' + elementWrapper).html(html);
};

var getHotNews = function () {
	return $.ajax({
		url: 'posts',
		method: 'GET',
		dataType: 'json'
	});
};

var paginator = new Paginator();

getHotNews().then(function (json) {
	buildPostsTemplate(json.data, 'post-compiler', 'post-wrapper');
	buildPaginatorTemplate({
		firstPage: 1,
		lastPage: json.last_page,
		pagesRange: 2
	}, 'paginator-compiler', 'paginator-wrapper');
});