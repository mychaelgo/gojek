var token = '';
var uniqueId = '9774d56d682e549c';
var appVersion = '2.28.2';
var clientSecret = '83415d06-ec4e-11e6-a41b-6c40088ab51e';

module.exports = {
    setToken: function (token) {
        this.token = token;
    },
    getToken: function () {
        return this.token;
    },
    setUniqueId: function (uniqueId) {
        this.uniqueId = uniqueId;
    },
    getUniqueId: function () {
        return this.uniqueId || uniqueId;
    },
    setAppVersion: function (appVersion) {
        this.appVersion = appVersion;
    },
    getAppVersion: function () {
        return this.appVersion || appVersion;
    },
    getClientSecret: function () {
        return this.clientSecret || clientSecret;
    },
};