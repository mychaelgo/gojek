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
By default the module set the `location`, `uniqueId` and `appVersion`. This value used to every request to the Go-Jek API. You can set manually if you need.

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

### Get customer info
```js
gojek.getCustomerInfo(function (err, res, body) {
    console.log(body);
});
```

### Edit account
- Param 1: Phone
- Param 2: Email
- Param 3: Name
```js
gojek.editAccount('+628123456789','email@domain.com','NAME', function (err, res, body) {
    console.log(body);
});
```


### Logout

## Go-Pay
### Get Go-Pay info
```js
gojek.getGoPayDetail(function (err, res, body) {
    console.log(body);
});
```
### Get Go-Pay transaction history 
- Param 1: Page number (start from 1)
- Param 2: Limit per page
```js
gojek.getGoPayHistory(1, 30, function (err, res, body) {
    console.log(body);
});
```
### Get Go-Pay id by phone
```js
gojek.getGoPayQrId('+628123456789', function (err, res, body) {
    console.log(body);
});
```
### Transfer Go-Pay money
```js
gojek.transferGoPay('QR_ID', 10000, 'YOUR_DESCRIPTION', function (err, res, body) {
    console.log(body);
});
```

## Go-Mart
### Get nearest Go-Mart
- Param 1: latitude,longitude
```js
gojek.getNearestGoMart('-6.180495,106.824992', function (err, res, body) {
    console.log(body);
});
```

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
- Param 1: latitude,longitude
- Param 2: Page (start from 0)
- Param 3: Limit
```js
gojek.getNearestGoFood(gojek.getLocation(), 0, 10, function (err, res, body) {
    console.log(body);
});
```

### Get restaurant
- Param 1: Restaurant UUID
```js
gojek.getRestaurant('UUID', function (err, res, body) {
    console.log(body);
});
```

### Get restaurants by category
- Param 1: Category code (Can be seen on get go-food home)
- Param 2: Page number (start from 0)
- Param 3: Limit per page
```js
gojek.setToken('ACCESS_TOKEN');
gojek.setLocation('-6.180495,106.824992');
gojek.getRestaurantsByCategory('HEALTHY_FOOD', '0', '32', function (err, res, body) {
    console.log(body);
});
```

## Booking
### Get active booking
```js 
gojek.getActiveBooking(function (err, res, body) {
    console.log(body);
});
```

### Get booking history
```js
gojek.getBookingHistory(function (err, res, body) {
    console.log(body);
});
```

### Get booking by order no
```js
gojek.getBookingByOrderNo('123456', function (err, res, body) {
    console.log(body);
});
```

### Cancel booking

## Go-Points

### Get Go-Points
```js
gojek.getGoPoints(function (err, res, body) {
    console.log(body);
});
```

### Next Go-Points
```js
gojek.nextPointsToken(function (err, res, body) {
    console.log(body);
});
```

### Redeem Go-Points
```js
gojek.redeemGoPointsToken('POINTS_TOKEN_ID',function (err, res, body) {
    console.log(body);
});
```