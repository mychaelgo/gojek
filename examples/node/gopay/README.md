
# Table of Contents

- [Table of Contents](#table-of-contents)
- [Get balances](#get-balances)
- [Get balances](#get-balances-1)
- [Get profile](#get-profile)
- [Get KYC status](#get-kyc-status)
- [Get bank accounts](#get-bank-accounts)

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
