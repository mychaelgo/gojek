var request = require('./base-request');

module.exports = {
    getGoPayDetail: function (callback) {
        var options = {
            method: 'GET',
        };

        request._request(options, '/wallet/profile/detailed', callback);
    },
    getGoPayHistory: function (callback) {
        var options = {
            method: 'GET',
            qs: {
                page: 1,
                limit: 1000
            }
        };

        request._request(options, '/wallet/history', callback);
    },
    getGoPayQrId: function (phoneNumber, callback) {
        var options = {
            method: 'GET',
            qs: {
                phone_number: phoneNumber,
            },
        };

        request._request(options, '/wallet/qr-code', callback);
    },
    transferGoPay: function (qrId, amount, description, callback) {
        var options = {
            method: 'POST',
            body: {
                qr_id: qrId,
                amount: amount,
                description: description
            },
        };

        request._request(options, '/fund/transfer', callback);
    }
};