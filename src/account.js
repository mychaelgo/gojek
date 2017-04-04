var request = require('./base-request');

module.exports = {
    login :function(username, password, callback) {
        var options = {
            method : 'POST',
            body:{
	            username: username,
	            client_id: 'trusted-client',
	            password: password,
	            grant_type: 'password'
            }
        };

        request._request(options, '/gojek/v2/login', callback);
    },
    logout :function(callback) {
        var options = {
            method : 'POST',
        };

        request._request(options, '/gojek/v2/customer/logout', callback);
    },
    getCutomerInfo :function(callback) {
        var options = {
            method : 'GET',
        };

        request._request(options, '/gojek/v2/customer', callback);
    },
    getGoPoints :function(callback) {
        var options = {
            method : 'GET',
        };

        request._request(options, '/gopoints/v1/wallet/points-balance', callback);
    },
};