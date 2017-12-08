<script id="post-compiler" type="text/x-handlebars-template">
	{{#each posts}}
		<div class="post col-sm-3">
			<h3>{{title}}</h3>
			<div class="clearfix">
				<small>By <b>{{user.fullname}}</b></small>
				<span class="pull-right comments">
					<i class="fa fa-comments-o"></i> {{comments}}
				</span>
			</div>
			<img src="{{image}}">
			<p class="summary">{{summary}}</p>
			<a href="" class="viewmore">Read more ...</a>
		</div>
	{{/each}}
</script>

<script id="paginator-compiler" type="text/x-handlebars-template">
	<nav aria-label="Page navigation">
		<ul class="pagination">
			<li>
				<a href="js:return;" onclick="paginator.jumpToPage({{prev}});">
					<span aria-hidden="true">Prev</span>
				</a>
			</li>
			{{#each pages}}
				{{#int_equal page @root.current}}
					<li class="active"><a href="js:return;">{{page}}</a></li>
				{{else}}
					<li><a href="js:return;" onclick="paginator.jumpToPage({{page}});">{{page}}</a></li>
				{{/int_equal}}
			{{/each}}
			<li>
				<a href="js:return;" onclick="paginator.jumpToPage({{next}});">
					<span aria-hidden="true">Next</span>
				</a>
			</li>
		</ul>
	</nav>
</script>

<div id="post-wrapper"></div>
<div id="paginator-wrapper"></div>