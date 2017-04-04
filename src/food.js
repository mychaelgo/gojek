var request = require('./base-request');

module.exports = {
    // page start from 0
    getNearestGoFood: function(latLong, page, limit, callback) {
        var options = {
            method : 'GET',
            qs:{
	            location: latLong,
                page: page,
                limit: limit,
            }
        };

        request._request(options, '/gojek/merchant/find', callback);
    },
    getRestaurant: function(restaurantId, callback){
        var options = {
            method : 'GET'
        };

        request._request(options, '/gofood/consumer/v2/restaurants/' + restaurantId, callback);
    },
};