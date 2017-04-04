var config = require('./config');
var payment = require('./payment');
var account = require('./account');

module.exports = Object.assign(config, payment, account);