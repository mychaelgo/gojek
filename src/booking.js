var request = require('./base-request');

module.exports = {
    getBookingHistory: function (userId, callback) {
        var options = {
            method: 'GET',
        };

        request._request(options, '/gojek/v2/booking/history/' + userId, callback);
    },
};