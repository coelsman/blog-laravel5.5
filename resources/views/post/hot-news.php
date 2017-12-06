<!DOCTYPE html>
<html>
<head>
	<title>Sport News Daily</title>

	<base href="<?= URL::to('/'); ?>">

	<link rel="stylesheet" type="text/css" href="<?= URL::to('/css/app.css'); ?>">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?= URL::to('/css/post.css'); ?>">
</head>
<body>

	<script id="post-compiler" type="text/x-handlebars-template">
		<div class="post col-sm-3">
			<h3>{{title}}</h3>
			<div class="clearfix">
				<small>By <b>{{author}}</b></small>
				<span class="pull-right comments">
					<i class="fa fa-comments-o"></i> {{comments}}
				</span>
			</div>
			<img src="{{thumbUrl}}">
			<p class="summary">{{summary}}</p>
			<a href="" class="viewmore">Read more ...</a>
		</div>
	</script>

	<script id="paginator-compiler" type="text/x-handlebars-template">
		<nav aria-label="Page navigation">
			<ul class="pagination">
				<li>
					<a href="#" aria-label="Previous">
						<span aria-hidden="true">Prev</span>
					</a>
				</li>
				{{#each pages}}
					<li><a href="#" onclick="paginator.jumpToPage({{page}});">{{page}}</a></li>
				{{/each}}
				<li>
					<a href="#" aria-label="Next">
						<span aria-hidden="true">Next</span>
					</a>
				</li>
			</ul>
		</nav>
	</script>

	<div id="post-wrapper"></div>
	<div id="paginator-wrapper"></div>

	<script type="text/javascript" src="<?= URL::to('/js/bundle.js'); ?>"></script>
	<script type="text/javascript" src="<?= URL::to('/js/script.js'); ?>"></script>
</body>
</html>