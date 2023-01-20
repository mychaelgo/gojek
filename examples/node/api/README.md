
# Table of Contents

- [Table of Contents](#table-of-contents)
- [Get customer data](#get-customer-data)

# Get customer data

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
