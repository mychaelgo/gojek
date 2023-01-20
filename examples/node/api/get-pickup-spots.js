const { TransportApi, Configuration } = require('../../../sdk/api-gojek-node');

const configuration = new Configuration({
    accessToken: process.env.GOJEK_ACCESS_TOKEN
});

const transportAPI = new TransportApi(configuration);

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
    xSessionId: 'd31cc210-a067-4d0d-a52f-199880ea8907',
    gojekCountryCode: 'ID'
};

const getPickupSpots = async () => {
    
    const getPickupSpotsResponse = await transportAPI.getPickupSpots({
        ...defaultHeaders,
        location: '-6.188912,106.738236',
        serviceType: 1,
        source: 'map'
    });

    console.log(JSON.stringify(getPickupSpotsResponse.data));
};

getPickupSpots();