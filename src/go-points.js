var request = require('./base-request');

module.exports = {
    getGoPoints: function (callback) {
        var options = {
            method: 'GET',
        };

        request._request(options, '/gopoints/v1/wallet/points-balance', callback);
    },
    nextPointsToken: function (callback) {
        var options = {
            method: 'POST',
            body: {}
        };

        request._request(options, '/gopoints/v1/next-points-token', callback);
    },
    redeemGoPointsToken: function (goPointsToken, callback) {
        var options = {
            method: 'POST',
            body: {
                points_token_id: goPointsToken,
            }
        };

        request._request(options, '/gopoints/v1/redeem-points-token', callback);
    },
};