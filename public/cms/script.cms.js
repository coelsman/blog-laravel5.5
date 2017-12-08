$(function () {
	var dateTimeFormat = 'YYYY-MM-DD HH:mm:ss';

	$('[name="start_time"]').datetimepicker({
		format: dateTimeFormat
	});

	$('[name="end_time"]').datetimepicker({
		format: dateTimeFormat
	});

	$('[name="start_time"]').on('dp.change', function (e) {
		$('[name="end_time"]').data('DateTimePicker').minDate(e.date);
	});

	$('[name="end_time"]').on('dp.change', function (e) {
		$('[name="start_time"]').data('DateTimePicker').maxDate(e.date);
	});
});