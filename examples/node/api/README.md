
# Table of Contents

- [Table of Contents](#table-of-contents)
- [Customer API](#customer-api)
  - [Get customer data](#get-customer-data)
- [Transport API](#transport-api)
  - [Get pickup spots](#get-pickup-spots)
  - [Get dropoff spots](#get-dropoff-spots)

# Customer API

## Get customer data

Return info of customer

```js
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
```

```json
{
 "status": "OK",
 "message": "OK",
 "customer": {
  "id": 123,
  "name": "abc",
  "email": "email@gmail.com",
  "phone": "+62812345677",
  "number": "812345677",
  "signed_up_country": "ID",
  "country_code": "+62",
  "email_verified": true,
  "locale": "en",
  "locale_selection_type": "device",
  "facebook_connected": false,
  "chat_id": null,
  "chat_token": null,
  "created_at": "2013-01-10T10:10:00Z",
  "bio": null,
  "profile_image_url": null
 }
}
```

# Transport API

## Get pickup spots

```js
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
```

```json
{
 "data": {
  "type": "nearby",
  "source_location": {
   "place_id": "GOOG-ChIJnwbP1HH3aS4RlxRRCxYbK14",
   "name": "Puri Indah CBD",
   "address": "Puri Indah CBD, Jl. Puri Indah Raya Blok U 1, RT.3/RW.2, Kembangan Sel., Kec. Kembangan, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11610, Indonesia",
   "image_url": "https://api.gojekapi.com/maps/api/place/ChIJnwbP1HH3aS4RlxRRCxYbK14/photo",
   "suggested_visibility_radius": 82.57445903803377
  },
  "places": [{
   "place_id": "RG2-great_naming-467905a3-9c7e-5980-98dc-590e73db0094",
   "name": "Alfamart",
   "address": "Puri Elok No.2, RT.2/RW.2, Kembangan Sel., Kec. Kembangan, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11610, Indonesia",
   "latitude": -6.1888876393182,
   "longitude": 106.737904852954,
   "distance_from_origin": 36.70889254579705
  }, {
   "place_id": "RG2-great_naming-91a64114-8133-5399-9e7e-d016fd8e7c23",
   "name": "Bank BCA",
   "address": "Puri Elok No.2, RT.2/RW.2, Kembangan Sel., Kec. Kembangan, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11610, Indonesia",
   "latitude": -6.189516253,
   "longitude": 106.7380338,
   "distance_from_origin": 70.81455891730323
  },
  ...]
 }
}
```

## Get dropoff spots

```js
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

const getDropoffSpots = async () => {
    
    const getDropoffSpotsResponse = await transportAPI.getDropoffSpots({
        ...defaultHeaders,
        location: '-6.184608,106.736176',
        serviceType: 1
    });

    console.log(JSON.stringify(getDropoffSpotsResponse.data));
};

getDropoffSpots();
```

```json
{
 "data": {
  "type": "reverse_geocode",
  "source_location": {
   "place_id": "inhouse-portal:venue:PEGASUS-f0f284bd-c68a-4844-b71a-745b6c8a7233",
   "name": "SPBU Shell - Depan Hotel Neo",
   "address": "Jl. Kembangan Selatan No.8, Kembangan Utara, Kec. Kembangan, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11610, Indonesia",
   "suggested_visibility_radius": 36.10426868588161
  },
  "places": []
 }
}
```
