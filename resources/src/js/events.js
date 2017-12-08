if (document.getElementById('event-compiler')) {
	var searchObject = new Search();
	var socketObject = new Socket();
	var eventTemplate = Handlebars.compile(document.getElementById('event-compiler').innerHTML);

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

	var mapperEvents = function (events) {
		$.each(events, function (k, event) {
			var _tStart = moment(event.start_time)
			,   _tEnd = moment(event.end_time);

			if (_tStart.hour() != 0 || _tStart.minute() != 0 || _tStart.second() != 0
				|| _tEnd.hour() != 0 || _tEnd.minute() != 0 || _tEnd.second() != 0) {

				events[k].time_range = _tStart.format('h:mm a') + ' - ' + _tEnd.format('h:mm a');
			}
			events[k].date_range = _tStart.format('D MMM').toUpperCase() + ' - ' + _tEnd.format('D MMM').toUpperCase();
		});

		return events;
	};

	getEvents().then(function (json) {
		$('#event-wrapper').html(eventTemplate({
			events: mapperEvents(json)
		}));
	});

	socketObject
		.setHost('http://localhost')
		.setPort(8890)
		.setChannel('message')
		.initialize(function (data) {
			console.log(JSON.parse(data));
			$('#event-wrapper').prepend(eventTemplate({
				events: mapperEvents(JSON.parse(data))
			}));
		}, function (error) {

		});
}
