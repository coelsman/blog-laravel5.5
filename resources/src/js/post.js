var Paginator = function () {

};
Paginator.prototype = {
	setLastPage: function (lastPage) {
		this.lastPage = lastPage;
	},
	setPagesRange: function (pagesRange) {
		this.pagesRange = pagesRange;
	},
	jumpToPage: function (page) {
		getNewsPagination(page);
	}
};

var AsyncLoader = function () {
	return $.when.apply($, arguments);
};

var TemplateLoader = function (file) {
	return $.ajax({
		url: 'templates/' + file + '.html',
		method: 'GET',
		contentType: "text/html; charset=utf-8",
	});
};

var buildPostsTemplate = function (data, postEleCompilers, paginatorEleCompilers) {
	var postTemplate      = Handlebars.compile(document.getElementById(postEleCompilers[0]).innerHTML);
	var paginatorTemplate = Handlebars.compile(document.getElementById(paginatorEleCompilers[0]).innerHTML);
	var dataPost          = data.data;
	var html              = '';
	var pages             = [];

	for (var i = 1; i <= data.last_page; i++) {
		pages.push({
			page: i
		});
	}

	$('#' + postEleCompilers[1]).html(postTemplate({
		posts: dataPost
	}));

	$('#' + paginatorEleCompilers[1]).html(paginatorTemplate({
		current: data.current_page,
		last: data.last_page,
		next: data.last_page <= data.current_page ? data.last_page : data.current_page + 1,
		prev: 1 >= data.current_page ? 1 : data.current_page - 1,
		pages: pages
	}));
};

var getHotNews = function (page) {
	return $.ajax({
		url: 'posts?' + $.param({
			page: page
		}),
		method: 'GET',
		dataType: 'json'
	});
};

var paginator = new Paginator();

var getNewsPagination = function (page) {
	AsyncLoader(
		getHotNews(page)
	).then(function (postData, templateSource) {
		console.log(postData);
		buildPostsTemplate(postData, ['post-compiler', 'post-wrapper'], ['paginator-compiler', 'paginator-wrapper']);
	});
};

getNewsPagination(1); 