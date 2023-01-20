
# Table of Contents

- [Table of Contents](#table-of-contents)
- [Login request](#login-request)
- [Generate token](#generate-token)

# Login request

This function will sending OTP to your phone number via SMS / Whatsapp

```js
const { TokenApi } = require('../../sdk/goid-gojek-node');

const tokenAPI = new TokenApi();

const defaultHeaders = {
    xAppid: 'com.gojek.app',
    xAppversion: '4.59.1',
    xDeviceos: 'Android,10',
    xPhonemake: 'Samsung',
    xPhonemodel: 'GT-S7500',
    xPlatform: 'Android',
    xPushtokentype: 'FCM',
    xUniqueid: '95f99ddd6a5d34a9',
    xUserType: 'customer'
};

const testLoginRequest = async () => {
    const loginResponse = await tokenAPI.loginRequest({
        ...defaultHeaders,
        loginRequestBody:{
            client_id: 'gojek:consumer:app',
            client_secret: 'pGwQ7oi8bKqqwvid09UrjqpkMEHklb',
            country_code: '+62',
            login_type: 'otp_whatsapp',
            magic_link_ref: '',
            phone_number: '81234567890'
        }
    });

    console.log({ loginResponse: loginResponse.data  });
};

testLoginRequest();
```

```json
{
    "data": {
        "otp_token": "ce7265ea-8eec-4a02-a008-13bcd5104b24",
        "otp_expires_in": 300,
        "otp_length": 4,
        "next_state": {
            "state": "sms,whatsapp",
            "destination": "",
            "timer_in_seconds": 60
        }
    },
    "success": true,
    "errors": []
}
```

# Generate token

This function will generate access & refresh token based on the OTP token & OTP that already sent to your phone number

```js
const { TokenApi } = require('../../sdk/goid-gojek-node');

const tokenAPI = new TokenApi();

const defaultHeaders = {
    xAppid: 'com.gojek.app',
    xAppversion: '4.59.1',
    xDeviceos: 'Android,10',
    xPhonemake: 'Samsung',
    xPhonemodel: 'GT-S7500',
    xPlatform: 'Android',
    xPushtokentype: 'FCM',
    xUniqueid: '95f99ddd6a5d34a9',
    xUserType: 'customer'
};

const testGenerateToken = async () => {
    const generateTokenResponse = await tokenAPI.generateToken({
        ...defaultHeaders,
        generateTokenRequest: {
            client_id: 'gojek:consumer:app',
            client_secret: 'pGwQ7oi8bKqqwvid09UrjqpkMEHklb',
            data: {
                otp: '1234',
                otp_token: 'ce7265ea-8eec-4a02-a008-13bcd5104b24'
            },
            grant_type: 'otp',
            scopes: []
        }
    });

    console.log({ generateTokenResponse: generateTokenResponse.data  });
};

testGenerateToken();
```

```json
{
    "access_token": "ey...",
    "dbl_enabled": true,
    "flags": { "onetap_eligible": false, "is_app_pin_set": false }
}
```
