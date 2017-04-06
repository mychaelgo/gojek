var request = require('./base-request');

module.exports = {
    getNearestGoMart: function (latLong, callback) {
        var options = {
            method: 'GET',
            qs: {
                location: latLong,
            }
        };

        request._request(options, '/gojek/mart-category/listMartNearest', callback);
    },
};