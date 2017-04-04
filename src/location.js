var request = require('./base-request');

module.exports = {
    reverseGeocode: function(latLong, callback) {
        var options = {
            method : 'GET',
            qs:{
	            latLong: latLong,
            }
        };

        request._request(options, '/gojek/poi/reverse-geocode/', callback);
    },
    getGoRideNearby: function(latLong, callback){
        var options = {
            method : 'GET',
            qs:{
	            location: latLong,
            }
        };

        request._request(options, '/gojek/service_type/1/drivers/nearby', callback);
    },
    getGoCarNearby: function(latLong, callback){
        var options = {
            method : 'GET',
            qs:{
	            location: latLong,
            }
        };
        
        request._request(options, '/gojek/service_type/13/drivers/nearby', callback);
    },
    getGoSendNearby: function(latLong, callback){
        var options = {
            method : 'GET',
            qs:{
	            location: latLong,
            }
        };
        
        request._request(options, '/gojek/service_type/14/drivers/nearby', callback);
    },
};