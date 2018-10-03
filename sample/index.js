const express = require('express')
const app = express()
const port = 3000
var gojek = require('gojek');

app.get('/', (request, response) => {
    response.json({
        chance: request.chance,
        message: "Hello from Express!"
    })
})

//account section
app.post('/loginWithEmail', (request, response) => {
    var email = request.header('email');
    console.log(email);
    gojek.loginWithEmail(email, function(err, res, body) {
        response.json({
            email: email,
            body: body
        })
    });

})

app.post('/loginWithPhone', (request, response) => {
    var phone = request.header('phone');
    console.log(phone);
    gojek.loginWithPhone(phone, function(err, res, body) {
        response.json({
            phone: phone,
            body: body
        })
    });

})

app.post('/verify', (request, response) => {
    var pin = request.header('pin');
    var token = request.header('token');
    console.log(pin, token);
    gojek.generateCustomerToken(pin, token, function(err, res, body) {
        response.json({
            pin: pin,
            token: token,
            body: body
        })
    });
})

app.get('/setToken', (request, response) => {
    var token = request.header('token');
    console.log(token);
    gojek.setToken(token); //access token
    response.json({
        token: token,
        message: "Access token already set"
    })
})

app.get('/customer/info', (request, response) => {
    gojek.getCustomerInfo(function(err, res, body) {
        response.json({
            body: body
        })
    });

})

app.get('/gopay/info', (request, response) => {
    gojek.getGoPayDetail(function(err, res, body) {
        response.json({
            body: body
        })
    });
})


app.get('/gopay/history', (request, response) => {
    gojek.getGoPayHistory(1, 5, function(err, res, body) {
        response.json({
            body: body
        })
    });
})

app.get('/gomart/nearest', (request, response) => {
    // '-6.180495,106.824992'
    var cordinate = request.header('cordinate');
    console.log(cordinate);
    gojek.getNearestGoMart(cordinate, function(err, res, body) {
        response.json({
            cordinate: cordinate,
            body: body
        })
    });
})

app.post('/editAccount', (request, response) => {
    var phone = request.header('phone');
    var email = request.header('email');
    var name = request.header('name');
    gojek.editAccount(phone, email, name, function(err, res, body) {
        response.json({
            body: body
        })
    });
})




//# main section
app.listen(port, (err) => {
    if (err) {
        return console.log('something bad happened', err)
    }

    console.log(`server is listening on ${port}`)
})