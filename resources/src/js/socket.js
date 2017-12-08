var Socket = function () {

};
Socket.prototype = {
	isset: function (val) {
		return 'undefined' !== typeof val;
	},
	setHost: function (host) {
		this.host = host;
		return this;
	},
	setPort: function (port) {
		this.port = port;
		return this;
	},
	setChannel: function (channel) {
		this.channel = channel;
		return this;
	},
	initialize: function (callbackSuccess, callbackError) {
		var self = this;

		if (self.isset(self.host) &&
			self.isset(self.port) &&
			self.isset(self.channel)) {

			self.io = io.connect(self.host + ':' + self.port);
			self.io.on(self.channel, function (data) {
				callbackSuccess(data);
			});
		} else {
			callbackError(null);
		}
	}
};
