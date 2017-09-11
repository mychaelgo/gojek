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
Go-Jek support 2 method for login (Email or Phone number login)

```js
gojek.loginWithEmail('your@email.com', function(error ,response, body){
	console.log(body);
});
```

```js
gojek.loginWithPhone('+628123456789', function(error ,response, body){
	console.log(body);
});
```

After request that API, the registered phone number will receive an OTP. 
You must save your `login_token` to be used in next step :

```js
gojek.generateCustomerToken('1234', 'login_token', function(error ,response, body){
	console.log(body);
});
```

Save `access_token`, then call :
```js
gojek.setToken('access_token');
```

### Logout

## Go-Pay
### Get Go-Pay info
### Get Go-Pay transacation history 
### Get Go-Pay id by phone
### Transfer Go-Pay money

## Go-Mart
### Get nearest Go-Mart

## Go-Food
### Get Go-Food Home
```js
gojek.setToken('ACCESS_TOKEN');
gojek.setLocation('-6.180495,106.824992');
gojek.getGoFoodHome(gojek.getLocation(), function (err, res, body) {
    console.log(body);
});
```
### Get nearest Go-Food
### Get restaurant
### Get restaurants by category
- Param 1: Category code (Can be seen on get go-food home)
- Param 2: Page number
- Param 3: Limit per page
```js
gojek.setToken('ACCESS_TOKEN');
gojek.setLocation('-6.180495,106.824992');
gojek.getRestaurantsByCategory('HEALTHY_FOOD', '0', '32', function (err, res, body) {
    console.log(body);
});
```

## Booking
### Get booking history


