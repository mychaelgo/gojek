var request = require('./base-request');

module.exports = {
    getBookingHistory: function (userId, callback) {
        var options = {
            method: 'GET',
        };

        request._request(options, '/gojek/v2/booking/history/' + userId, callback);
    },
    getBookingHistory: function (callback) {
        var options = {
            method: 'GET',
        };

        request._request(options, '/gojek/v2/booking/history/1', callback);
    },
    getActiveBooking: function (callback) {
        var options = {
            method: 'GET',
        };

        request._request(options, '/v1/customers/active_bookings', callback);
    },
    getBookingByOrderNo: function (orderNo, callback) {
        var options = {
            method: 'GET',
        };

        request._request(options, '/gojek/v2/booking/findByOrderNo/' + orderNo, callback);
    },

};