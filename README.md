# gojek
Un-official Go-jek API Wrapper

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
