
# Table of Contents

- [Table of Contents](#table-of-contents)
- [Get balances](#get-balances)
- [Get payment options](#get-payment-options)
- [Get profile](#get-profile)
- [Get order history](#get-order-history)
- [Get KYC status](#get-kyc-status)
- [Get bank accounts](#get-bank-accounts)
- [Get filter config](#get-filter-config)

# Get balances

Return list of balances

```js
const { PaymentApi, Configuration } = require('../../../sdk/gopay-gojek-node');

const configuration = new Configuration({
    accessToken: process.env.GOJEK_ACCESS_TOKEN
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
```

```json
{
 "data": [{
  "balance": {
   "value": 1234,
   "currency": "IDR",
   "display_value": "Rp1.234"
  },
  "type": "GOPAY_WALLET",
  "token": "ey...",
  "country_code": "ID"
 }, {
  "balance": {
   "value": 0,
   "currency": "IDR",
   "display_value": "0"
  },
  "type": "GOPAY_COINS",
  "token": "ey...",
  "country_code": "ID"
 }],
 "success": true
}
```

# Get payment options

Return list of balances

```js
const { PaymentApi, Configuration } = require('../../../sdk/gopay-gojek-node');

const configuration = new Configuration({
    accessToken: process.env.GOJEK_ACCESS_TOKEN
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

const testGetPaymentOptions = async () => {
    
    const getPaymentOptionsResponse = await paymentAPI.getPaymentOptions({
        ...defaultHeaders
    });

    console.log(JSON.stringify(getPaymentOptionsResponse.data));
};

testGetPaymentOptions();
```

```json
{
 "data": [{
  "type": "GOPAY_WALLET",
  "additional_details": {
   "kyc_name": "...",
   "kyc_status": "APPROVED",
   "group_id": "CGOJEK_KYC"
  }
 }],
 "success": true
}
```

# Get profile

Return profile

```js
const { UserApi, Configuration } = require('../../../sdk/gopay-gojek-node');

const configuration = new Configuration({
    accessToken: process.env.GOJEK_ACCESS_TOKEN
});

const userAPI = new UserApi(configuration);

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

const testGetUserProfile = async () => {
    
    const getUserProfileResponse = await userAPI.getUserProfile({
        ...defaultHeaders,
    });

    console.log(JSON.stringify(getUserProfileResponse.data));
};

testGetUserProfile();
```

```json
{
 "data": {
  "qr_id": "...",
  "blocked": false,
  "is_pin_setup": true
 },
 "success": true,
 "errors": []
}
```

# Get order history

Return history of gojek transactions

```js
const { UserApi, Configuration } = require('../../../sdk/gopay-gojek-node');

const configuration = new Configuration({
    accessToken: process.env.GOJEK_ACCESS_TOKEN
});

const userAPI = new UserApi(configuration);

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

const getOrderHistory = async () => {
    
    const getOrderHistoryResponse = await userAPI.getOrderHistory({
        ...defaultHeaders,
        page: 1,
        limit: 20,
        countryCode: 'ID'
    });

    console.log(JSON.stringify(getOrderHistoryResponse.data));
};

getOrderHistory();
```

```json
{
 "data": {
  "in_progress": [],
  "completed": [{
   "group_key": "2023-01-10",
   "items": [{
    "order_id": "...",
    "service_type": "P2P",
    "status": "COMPLETED",
    "display_status": "Completed",
    "order_timestamp": "2023-01-10T01:02:03",
    "order_image": "https://i.gojekapi.com/darkroom/nearby-cms-id/v2/images/6a0ac488-5bfa-41ce-8ca7-d53a6aa59930_type=p2p.png",
    "description": "Sent to XXX",
    "payment_type": "DEBIT",
    "amount": {
     "value": 123,
     "currency": "IDR",
     "display_value": "Rp123"
    },
    "payment_method_breakup": [{
     "payment_method": "GOPAY_WALLET",
     "payment_method_name": "GoPay",
     "payment_method_image": "https://i.gojekapi.com/darkroom/nearby-cms-id/v2/images/33db65f6-be08-404f-ae2a-8df7cb33bded_GoPay.png",
     "amount": {
      "value": 123,
      "currency": "IDR",
      "display_value": "Rp123"
     },
     "payment_type": "DEBIT"
    }],
    "list_notes": "",
    "detail_description": "Sent to XXX",
    "detail_notes": "**********1234",
    "detail_view_items": [{
     "label": "Amount",
     "value": "Rp123",
     "separator": true,
     "copyable": false
    }],
    "additional_details": {
     "p2p_notes": ""
    },
    "not_have_details": false,
    "expense_info": {
     "category": {
      "id": "...",
      "description": "",
      "title": "Transfer",
      "icon_url": "https://i.gojekapi.com/darkroom/nearby-cms-id/v2/images/a75355cd-ea51-4d27-9718-2cec56d0930a_transfers@3x.png"
     },
     "is_expense": true,
     "section_title": "Expense category",
     "title": "Mark as an expense",
     "description": "So this transaction will be recorded on your expense report.",
     "info_icon": "commonSpotInformation"
    }
   }]
  }],
  "next": "/v1/users/order-history?country_code=ID&page=1&limit=20&lower_bound=2016-08-18T03%3A36%3A47&upper_bound=2023-01-01T07%3A00%3A00&skip_in_progress=true",
  "info_cards": []
 },
 "success": true,
 "errors": []
}
```

# Get KYC status

Get user KYC status

```js
const { UserApi, Configuration } = require('../../../sdk/gopay-gojek-node');

const configuration = new Configuration({
    accessToken: process.env.GOJEK_ACCESS_TOKEN
});

const userAPI = new UserApi(configuration);

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

const testGetKycStatus = async () => {
    
    const getUserKycStatusResponse = await userAPI.getUserKycStatus({
        ...defaultHeaders
    });

    console.log(JSON.stringify(getUserKycStatusResponse.data));
};

testGetKycStatus();
```

```json
{
 "data": {
  "status": "APPROVED",
  "files": [{
   "id": "...",
   "kyc_type": "KYC_PROOF",
   "kyc_status": "APPROVED",
   "kyc_reason_title": "Your GoPay Plus upgrade has failed",
   "kyc_reason": "Something went wrong, but we're already on it. Please retake your ID card and selfie photos.",
   "uploaded": true
  }, {
   "id": "...",
   "kyc_type": "SELFIE",
   "kyc_status": "APPROVED",
   "kyc_reason_title": "Your GoPay Plus upgrade has failed",
   "kyc_reason": "Something went wrong, but we're already on it. Please retake your ID card and selfie photos.",
   "uploaded": true
  }]
 },
 "success": true,
 "errors": []
}
```

# Get bank accounts

Return list of bank accounts

```js
const { BankAccountApi, Configuration } = require('../../../sdk/gopay-gojek-node');

const configuration = new Configuration({
    accessToken: process.env.GOJEK_ACCESS_TOKEN
});

const bankAccountAPI = new BankAccountApi(configuration);

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

const testGetBankAccount = async () => {
    
    const bankAccountResponse = await bankAccountAPI.getBankAccounts({
        ...defaultHeaders,
        descending: 1,
        page: 1,
        pageSize: 1,
        showWithdrawalBlockStatus: true,
        sortBy: 'last_used_at'
    });
    
    console.log(JSON.stringify(bankAccountResponse.data));
};

testGetBankAccount();
```

```json
{
 "data": [
  {
   "id": 1,
   "bank_code": "...",
   "bank_short_name": "..",
   "bank_name": "PT. BANK",
   "account_name": "some name here",
   "account_number": "123456789",
   "is_my_account": false,
   "metadata": {},
   "is_withdrawal_blocked": false,
   "bank_icon_url": "https://gopay-bank-transfer.s3.amazonaws.com/public/assets/banks/the-bank.png"
  }
 ],
 "success": true
}
```

# Get filter config

Return user configuration

```js
const { UserApi, Configuration } = require('../../../sdk/gopay-gojek-node');

const configuration = new Configuration({
    accessToken: process.env.GOJEK_ACCESS_TOKEN
});

const userAPI = new UserApi(configuration);

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

const testGetFilterConfig = async () => {
    
    const getFilterConfigResponse = await userAPI.getFilterConfig({
        ...defaultHeaders
    });

    console.log(JSON.stringify(getFilterConfigResponse.data));
};

testGetFilterConfig();
```

```json
{
 "data": {
  "country_filters": [{
   "product_filters": [{
    "id": "PAY_TO_STORE",
    "display_text": "Merchant payment",
    "image_url": "https://i.gojekapi.com/darkroom/nearby-cms-id/v2/images/995a2af3-748d-4fe6-9854-05efd596b42b_type=merchant_payment.png"
   }, {
    "id": "PAY_TO_FRIEND",
    "display_text": "Pay to friends",
    "image_url": "https://i.gojekapi.com/darkroom/nearby-cms-id/v2/images/6a0ac488-5bfa-41ce-8ca7-d53a6aa59930_type=p2p.png"
   }, {
    "id": "TOPUP",
    "display_text": "Top up",
    "image_url": "https://i.gojekapi.com/darkroom/nearby-cms-id/v2/images/c99fe8a8-7168-4823-b8af-f90eafab382b_type=top_up.png"
   }, {
    "id": "BANK_TRANSFER",
    "display_text": "Bank transfer",
    "image_url": "https://i.gojekapi.com/darkroom/nearby-cms-id/v2/images/3a86af5a-559e-43da-8672-43f7575fbf0b_type=government.png"
   }, {
    "id": "GOTANGIHAN",
    "display_text": "GoTagihan",
    "image_url": "https://i.gojekapi.com/darkroom/nearby-cms-id/v2/images/52d094e1-ca8b-4af4-a999-990e2c1b2b6c_type=gotagihan.png"
   }, {
    "id": "GOFOOD",
    "display_text": "GoFood",
    "image_url": "https://i.gojekapi.com/darkroom/nearby-cms-id/v2/images/44bf6f11-ad41-46d8-9b3f-5693bcc6482a_type=gofood.png"
   }, {
    "id": "GOSHOP",
    "display_text": "GoShop",
    "image_url": "https://i.gojekapi.com/darkroom/nearby-cms-id/v2/images/80746de4-6139-4966-9082-4ba88de8ef1a_type=goshop.png"
   }, {
    "id": "GOMART",
    "display_text": "GoMart",
    "image_url": "https://i.gojekapi.com/darkroom/nearby-cms-id/v2/images/06553706-ac00-4ae0-b3fb-39ab9c32af81_type=gomart.png"
   }, {
    "id": "GORIDE",
    "display_text": "GoRide",
    "image_url": "https://i.gojekapi.com/darkroom/nearby-cms-id/v2/images/30dfbb32-50bf-451a-8859-53ad62917d62_type=goride.png"
   }, {
    "id": "GOCAR",
    "display_text": "GoCar",
    "image_url": "https://i.gojekapi.com/darkroom/nearby-cms-id/v2/images/0dfebd24-b32e-4877-9653-3139580c53e1_type=gocar.png"
   }, {
    "id": "GOBLUEBIRD",
    "display_text": "GoBluebird",
    "image_url": "https://i.gojekapi.com/darkroom/nearby-cms-id/v2/images/93001df1-4c7b-4afb-bbf4-b1e93199c43f_type=gotaxi.png"
   }, {
    "id": "GOTRANSIT",
    "display_text": "GoTransit",
    "image_url": "https://i.gojekapi.com/darkroom/nearby-cms-id/v2/images/7379562c-9100-4fe2-a755-d020364ac75b_type=gotransit.png"
   }, {
    "id": "GOSEND",
    "display_text": "GoSend",
    "image_url": "https://i.gojekapi.com/darkroom/nearby-cms-id/v2/images/0a4fda38-3911-4c10-93a7-06492778e524_type=gosend.png"
   }, {
    "id": "GOBOX",
    "display_text": "GoBox",
    "image_url": "https://i.gojekapi.com/darkroom/nearby-cms-id/v2/images/906ce86f-4754-4c05-bba2-559a73a2a252_type=gobox.png"
   }, {
    "id": "GOTIX",
    "display_text": "GoTix",
    "image_url": "https://i.gojekapi.com/darkroom/nearby-cms-id/v2/images/077ba641-8923-47bc-ad67-bca832431d2e_type=gotix.png"
   }, {
    "id": "TOKOPEDIA_PRODUCT",
    "display_text": "Tokopedia",
    "image_url": "https://i.gojekapi.com/darkroom/nearby-cms-id/v2/images/29ec2d47-939c-404c-8ecb-a408334b5367_type=tokopedia.png"
   }, {
    "id": "OTHERS",
    "display_text": "Others",
    "image_url": "https://i.gojekapi.com/darkroom/nearby-cms-id/v2/images/1e4c693b-d931-4a9a-8517-b9e42dd81937_type=general.png"
   }],
   "payment_filters": [{
    "id": "GOPAY_WALLET",
    "display_text": "GoPay",
    "image_url": "https://i.gojekapi.com/darkroom/nearby-cms-id/v2/images/33db65f6-be08-404f-ae2a-8df7cb33bded_GoPay.png"
   }, {
    "id": "PAY_LATER",
    "display_text": "GoPayLater",
    "image_url": "https://i.gojekapi.com/darkroom/nearby-cms-id/v2/images/e68c9080-2ee7-4592-a389-ee1e0d1754fa_PayLater.png"
   }, {
    "id": "GOPAY_COINS",
    "display_text": "GoPay Coins",
    "image_url": "https://i.gojekapi.com/darkroom/nearby-cms-id/v2/images/1dda1ece-1806-42aa-9022-6274c2510be0_GoPay-Coins.png"
   }, {
    "id": "CARD",
    "display_text": "Credit and debit card",
    "image_url": "https://i.gojekapi.com/darkroom/nearby-cms-id/v2/images/10eccd34-ffd0-4714-b93a-324c13bce1fb_type=card.png"
   }, {
    "id": "LINKAJA",
    "display_text": "Link Aja",
    "image_url": "https://i.gojekapi.com/darkroom/nearby-cms-id/v2/images/54f66a23-46fb-412d-9a39-854db3f2902b_linkaja.png"
   }, {
    "id": "BCA",
    "display_text": "BCA",
    "image_url": "https://i.gojekapi.com/darkroom/nearby-cms-id/v2/images/2290a171-dfe9-420b-81fe-0c4cb30a488d_oneklik-bca.png"
   }, {
    "id": "CORPORATE_BILLING",
    "display_text": "GoCorp",
    "image_url": "https://i.gojekapi.com/darkroom/nearby-cms-id/v2/images/95a542aa-488a-4fac-b38c-531fc49000e7_corporate.png"
   }, {
    "id": "JAGO",
    "display_text": "Jago",
    "image_url": "https://i.gojekapi.com/darkroom/nearby-cms-id/v2/images/ac156dcb-db36-4053-9ee9-1046619c371b_jago.png"
   }, {
    "id": "VIRTUAL_ACCOUNT",
    "display_text": "Virtual Account",
    "image_url": "https://i.gojekapi.com/darkroom/nearby-cms-id/v2/images/55d0dcd3-2ec4-437a-939e-dedb4c6ff81e_bank.png"
   }],
   "country_code": "ID"
  }, {
   "product_filters": [{
    "id": "GOCAR",
    "display_text": "GoCar",
    "image_url": "https://i.gojekapi.com/darkroom/nearby-cms-id/v2/images/0dfebd24-b32e-4877-9653-3139580c53e1_type=gocar.png"
   }, {
    "id": "OTHERS",
    "display_text": "Others",
    "image_url": "https://i.gojekapi.com/darkroom/nearby-cms-id/v2/images/1e4c693b-d931-4a9a-8517-b9e42dd81937_type=general.png"
   }],
   "payment_filters": [{
    "id": "CARD",
    "display_text": "Credit and debit card",
    "image_url": "https://i.gojekapi.com/darkroom/nearby-cms-id/v2/images/10eccd34-ffd0-4714-b93a-324c13bce1fb_type=card.png"
   }, {
    "id": "PAYLAH",
    "display_text": "Paylah",
    "image_url": "https://i.gojekapi.com/darkroom/nearby-cms-id/v2/images/34e61570-6aff-4a13-b20f-8b26741ee83e_DBS.png"
   }],
   "country_code": "SG"
  }, {
   "product_filters": [{
    "id": "TOPUP",
    "display_text": "Top up",
    "image_url": "https://i.gojekapi.com/darkroom/nearby-cms-id/v2/images/c99fe8a8-7168-4823-b8af-f90eafab382b_type=top_up.png"
   }, {
    "id": "GOFOOD",
    "display_text": "GoFood",
    "image_url": "https://i.gojekapi.com/darkroom/nearby-cms-id/v2/images/44bf6f11-ad41-46d8-9b3f-5693bcc6482a_type=gofood.png"
   }, {
    "id": "GORIDE",
    "display_text": "GoRide",
    "image_url": "https://i.gojekapi.com/darkroom/nearby-cms-id/v2/images/30dfbb32-50bf-451a-8859-53ad62917d62_type=goride.png"
   }, {
    "id": "GOSEND",
    "display_text": "GoSend",
    "image_url": "https://i.gojekapi.com/darkroom/nearby-cms-id/v2/images/0a4fda38-3911-4c10-93a7-06492778e524_type=gosend.png"
   }, {
    "id": "OTHERS",
    "display_text": "Others",
    "image_url": "https://i.gojekapi.com/darkroom/nearby-cms-id/v2/images/1e4c693b-d931-4a9a-8517-b9e42dd81937_type=general.png"
   }],
   "payment_filters": [{
    "id": "CARD",
    "display_text": "Credit and debit card",
    "image_url": "https://i.gojekapi.com/darkroom/nearby-cms-id/v2/images/10eccd34-ffd0-4714-b93a-324c13bce1fb_type=card.png"
   }, {
    "id": "GOPAY_WALLET",
    "display_text": "GoPay",
    "image_url": "https://i.gojekapi.com/darkroom/nearby-cms-id/v2/images/33db65f6-be08-404f-ae2a-8df7cb33bded_GoPay.png"
   }],
   "country_code": "TH"
  }, {
   "product_filters": [{
    "id": "TOPUP",
    "display_text": "Top up",
    "image_url": "https://i.gojekapi.com/darkroom/nearby-cms-id/v2/images/c99fe8a8-7168-4823-b8af-f90eafab382b_type=top_up.png"
   }, {
    "id": "BANK_TRANSFER",
    "display_text": "Bank transfer",
    "image_url": "https://i.gojekapi.com/darkroom/nearby-cms-id/v2/images/3a86af5a-559e-43da-8672-43f7575fbf0b_type=government.png"
   }, {
    "id": "GOFOOD",
    "display_text": "GoFood",
    "image_url": "https://i.gojekapi.com/darkroom/nearby-cms-id/v2/images/44bf6f11-ad41-46d8-9b3f-5693bcc6482a_type=gofood.png"
   }, {
    "id": "GORIDE",
    "display_text": "GoRide",
    "image_url": "https://i.gojekapi.com/darkroom/nearby-cms-id/v2/images/30dfbb32-50bf-451a-8859-53ad62917d62_type=goride.png"
   }, {
    "id": "GOSEND",
    "display_text": "GoSend",
    "image_url": "https://i.gojekapi.com/darkroom/nearby-cms-id/v2/images/0a4fda38-3911-4c10-93a7-06492778e524_type=gosend.png"
   }, {
    "id": "OTHERS",
    "display_text": "Others",
    "image_url": "https://i.gojekapi.com/darkroom/nearby-cms-id/v2/images/1e4c693b-d931-4a9a-8517-b9e42dd81937_type=general.png"
   }],
   "payment_filters": [],
   "country_code": "VN"
  }],
  "date_filter": {
   "min_date": "2016-08-17",
   "prefilled_dates": [{
    "days": 7,
    "display_text": "Last 7 days"
   }, {
    "days": 30,
    "display_text": "Last 30 days"
   }, {
    "days": 90,
    "display_text": "Last 90 days"
   }]
  },
  "show_payment_type_filter": false
 },
 "success": true,
 "errors": []
}
```
