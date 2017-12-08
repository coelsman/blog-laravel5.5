var searchObject = new Search();

$('#txt-search').on('keyup', function (e) {
	var text = $(this).val()
	,   results;

	if (text.length >= 2) {
		results = searchObject.search(text, $('.event-wrapper'), ['h3', 'span']);
	} else {
		results = true;
	}
	
	searchObject.toggleElementsBySearchResults($('.event-wrapper'), results);
});

var getEvents = function () {
	return $.ajax({
		url: 'events',
		method: 'GET',
		dataType: 'json'
	});
};

getEvents().then(function (json) {
	var eventTemplate = Handlebars.compile(document.getElementById('event-compiler').innerHTML);

	$('#event-wrapper').html(eventTemplate({
		events: json
	}));
});