var extend = require('xtend');
var request = require('request');
var config = require('./config');

var API_URL = 'https://api.gojekapi.com';

module.exports = {
    _request: function(options, url, callback){
        var getURL = API_URL + url;
        var opt = {
            url: getURL,
            headers: { 
                'content-type': 'application/json',
                'X-AppVersion': config.getAppVersion(),
                'X-UniqueId': config.getUniqueId(),
                authorization: 'Bearer ' + config.getToken(),
            },
            json: true
        };

        options = extend(options, opt);

        request(options, callback);
    }
};