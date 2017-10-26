var extend = require('xtend');
var request = require('request');
var config = require('./config');

var API_URL = 'https://api.gojekapi.com';

module.exports = {
    _request: function (options, url, callback) {
        var getURL = API_URL + url;
        var opt = {
            url: getURL,
            headers: {
                'content-type': 'application/json',
                'X-AppVersion': config.getAppVersion(),
                'X-UniqueId': config.getUniqueId(),
                'X-Location': config.getLocation(),
                authorization: 'Bearer ' + config.getToken(),
            },
            json: true
        };

        opt.headers = extend(opt.headers, options.headers)
        options = extend(options, opt);

        request(options, callback);
    }
};
