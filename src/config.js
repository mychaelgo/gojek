var token = '';
var uniqueId = '9774d56d682e549c';
var appVersion = '2.18.1';

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
}