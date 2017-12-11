var AsyncLoader = function () {
	return $.when.apply($, arguments);
};

var Post = function () {
	this.paginator = new Paginator(this, 'getNewsPagination');
};
Post.prototype = {
	buildPostsTemplate: function (data, postEleCompilers, paginatorEleCompilers) {
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
	},
	getHotNews: function (page) {
		return $.ajax({
			url: 'posts?' + $.param({
				page: page
			}),
			method: 'GET',
			dataType: 'json'
		});
	},
	getNewsPagination: function (page) {
		var self = this;

		AsyncLoader(
			self.getHotNews(page)
		).then(function (postData, templateSource) {
			self.buildPostsTemplate(postData, ['post-compiler', 'post-wrapper'], ['paginator-compiler', 'paginator-wrapper']);
		});
	}
};

var postObject = new Post();
postObject.getNewsPagination(1);
