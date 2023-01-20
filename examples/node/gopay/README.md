
# Table of Contents

- [Table of Contents](#table-of-contents)
- [Get bank accounts](#get-bank-accounts)

# Get bank accounts

Return list of bank accounts

```js
const { BankAccountApi, Configuration } = require('../../../sdk/gopay-gojek-node');

const configuration = new Configuration({
    accessToken: 'ey...'
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
    console.log({ bankAccountResponse: bankAccountResponse.data });

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
