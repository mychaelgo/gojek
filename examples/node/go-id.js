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
            phone_number: '81342179785'
        }
    });

    console.log({ loginResponse: loginResponse.data  });
};

const testGenerateToken = async () => {
    const generateTokenResponse = await tokenAPI.generateToken({
        ...defaultHeaders,
        generateTokenRequest: {
            client_id: 'gojek:consumer:app',
            client_secret: 'pGwQ7oi8bKqqwvid09UrjqpkMEHklb',
            data: {
                otp: '6647',
                otp_token: '3ddc6b75-6f84-4a66-83ef-dce1465f227a'
            },
            grant_type: 'otp',
            scopes: []
        }
    });

    console.log({ generateTokenResponse: generateTokenResponse.data  });
};

testLoginRequest();
// testGenerateToken();