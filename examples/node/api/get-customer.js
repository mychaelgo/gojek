const { CustomerApi, Configuration } = require('../../../sdk/api-gojek-node');

const configuration = new Configuration({
    accessToken: process.env.GOJEK_ACCESS_TOKEN
});

const customerAPI = new CustomerApi(configuration);

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

const getCustomerData = async () => {
    
    const getCustomerDataResponse = await customerAPI.getCustomerData({
        ...defaultHeaders
    });

    console.log(JSON.stringify(getCustomerDataResponse.data));
};

getCustomerData();