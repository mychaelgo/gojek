var config = require('./config');
var payment = require('./payment');
var account = require('./account');
var booking = require('./booking');
var location = require('./location');
var food = require('./food');
var mart = require('./mart');
var goPoints = require('./go-points');

module.exports = Object.assign(config, booking, payment, account, location, food, mart, goPoints);