/**
* Integer Helpers
*/
	Handlebars.registerHelper('int_equal', function (a, b, opts) {
		return parseInt(a) === parseInt(b)
			? opts.fn(this)
			: opts.inverse(this);
	});

	Handlebars.registerHelper('int_larger', function (a, b, opts) {
		return parseInt(a) > parseInt(b)
			? opts.fn(this)
			: opts.inverse(this);
	});

	Handlebars.registerHelper('int_larger_or_equal', function (a, b, opts) {
		return parseInt(a) >= parseInt(b)
			? opts.fn(this)
			: opts.inverse(this);
	});
/* End Integer Helpers */

/**
* String Helpers
*/
	Handlebars.registerHelper('str_uppercase', function (str, opts) {
		return String(str).toUpperCase();
	});
/* End String Helpers */

/**
* Float Helpers
*/
	Handlebars.registerHelper('float_format', function (num, decimals, opts) {
		return parseFloat(num).toFixed(decimals);
	});
/* End Float Helpers */