var request = require('./base-request');
var config = require('./config');

module.exports = {
    loginWithEmail: function (email, callback) {
        var options = {
            method: 'POST',
            body: {
                email: email,
            }
        };

        request._request(options, '/v3/customers/login_with_email', callback);
    },
    loginWithPhone: function (phone, callback) {
        var options = {
            method: 'POST',
            body: {
                phone: phone,
            }
        };

        request._request(options, '/v3/customers/login_with_phone', callback);
    },
    /**
     *  @param otp OTP code from SMS
     *  @param loginToken login_token value after calling function loginWithEmail or loginWithPhone
     *
     *  @return access_token This is customer token. User function gojek.setToken
     */
    generateCustomerToken: function (otp, loginToken, callback) {
        var options = {
            method: 'POST',
            body: {
                scopes: 'gojek:customer:transaction gojek:customer:readonly',
                grant_type: 'password',
                login_token: loginToken,
                otp: otp,
                client_id: 'gojek:cons:android',
                client_secret: config.getClientSecret(),
            }
        };
        request._request(options, '/v3/customers/token', callback);
    },
    logout: function (callback) {
        var options = {
            method: 'DELETE',
        };

        request._request(options, '/v3/auth/token', callback);
    },
    getCustomerInfo: function (callback) {
        var options = {
            method: 'GET',
        };

        request._request(options, '/gojek/v2/customer', callback);
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