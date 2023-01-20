const { PaymentApi, Configuration } = require('../../../sdk/gopay-gojek-node');

const configuration = new Configuration({
    accessToken: 'ey...'
});

const paymentAPI = new PaymentApi(configuration);

const defaultHeaders = {
    xAppid: 'com.gojek.app',
    xAppversion: '4.59.1',
    xDeviceos: 'Android,10',
    xPhonemake: 'Samsung',
    xPhonemodel: 'GT-S7500',
    xPlatform: 'Android',
    xPushtokentype: 'FCM',
    xUniqueid: '95f99ddd6a5d34a9',
    xUserType: 'customer',
    gojekCountryCode: 'ID'
};

const testGetBalances = async () => {
    
    const getBalancesResponse = await paymentAPI.getBalances({
        ...defaultHeaders,
    });

    console.log(JSON.stringify(getBalancesResponse.data));
};

testGetBalances();