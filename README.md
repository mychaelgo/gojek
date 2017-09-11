# gojek
Un-official Go-jek API Wrapper. API end point known by decompile the android APK.
- [Have trouble ?](https://github.com/mychaelgo/gojek/issues)
- [Submit changes/features ?](https://github.com/mychaelgo/gojek/pulls)

Documentation
=============

## Getting Started
```
npm i gojek
```
Include Go-jek module
```js
var gojek = require('gojek');
```

Use `token` for every request. 
See how to get token with login API

## Configuration
By default the module set the `uniqueId` and `appVersion`. This value used to every request to the Go-Jek API. But you can set manually if you need.

### Set unique id
```js
gojek.setUniqueId('YOUR_UNIQUE_ID');
```

### Set app version
```js
gojek.setAppVersion('YOUR_APP_VERSION');
```

### Set token
By default the token is not set by this module. You can set token after you call a login API
```js
gojek.setToken('YOUR_TOKEN');
```


## Account
### Login
```js
gojek.login('your@email.com','yourPassword', function(error ,response, body){
	console.log(body);
});
```
After request this api, gojek maybe send a SMS like :
```
Apakah Anda mencoba mengakses akun Anda dari perangkat lain? Jika ya, mohon klik tautan ini https://api.gojek.co.id/customers/device?token=gojek_random_token dalam 72 jam ke depan. Jika tidak, mohon abaikan pesan ini 
12:46
```
To verifiy your login event in new device for the first time. Simply click then link. Request this login API again, and violaa! You get your token!

### Logout

## Go-Pay
### Get Go-Pay info
### Get Go-Pay transacation history 
### Get Go-Pay id by phone
### Transfer Go-Pay money

## Go-Mart
### Get nearest Go-Mart

## Go-Food
### Get nearest Go-Food
### Get restaurant

## Booking
### Get booking history


