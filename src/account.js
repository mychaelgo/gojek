var request = require('./base-request');

module.exports = {
    login: function (username, password, callback) {
        var options = {
            method: 'POST',
            body: {
                username: username,
                client_id: 'trusted-client',
                password: password,
                grant_type: 'password'
            }
        };

        request._request(options, '/gojek/v2/login', callback);
    },
    logout: function (callback) {
        var options = {
            method: 'POST',
        };

        request._request(options, '/gojek/v2/customer/logout', callback);
    },
    getCustomerInfo: function (callback) {
        var options = {
            method: 'GET',
        };

        request._request(options, '/gojek/v2/customer', callback);
    },
    getGoPoints: function (callback) {
        var options = {
            method: 'GET',
        };

        request._request(options, '/gopoints/v1/wallet/points-balance', callback);
    },
    editAccount: function (phone, email, name, callback) {
        var options = {
            method: 'POST',
            body: {
                phone: phone,
                email: email,
                name: name,
            }
        };

        request._request(options, '/gojek/v2/customer/edit/v2', callback);
    },
    verifyEditAccount: function (id, phone, verificationCode, callback) {
        var options = {
            method: 'POST',
            body: {
                id: id,
                phone: phone,
                verificationCode: verificationCode
            }
        };

        request._request(options, '/gojek/v2/customer/verificationUpdateProfile', callback);
    }
};