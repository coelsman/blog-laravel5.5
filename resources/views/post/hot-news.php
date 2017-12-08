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

	<script type="text/hbs" src="templates/hot-news.hbs"></script>

	<div id="post-wrapper"></div>
	<div id="paginator-wrapper"></div>

	<script type="text/javascript" src="<?= URL::to('/js/bundle.js'); ?>"></script>
	<script type="text/javascript" src="<?= URL::to('/js/script.js'); ?>"></script>
</body>
</html>