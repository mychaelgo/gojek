# LoginRequestBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ClientId** | Pointer to **string** |  | [optional] [default to "gojek:consumer:app"]
**ClientSecret** | Pointer to **string** |  | [optional] [default to "pGwQ7oi8bKqqwvid09UrjqpkMEHklb"]
**CountryCode** | Pointer to **string** |  | [optional] [default to "+62"]
**LoginType** | Pointer to **string** | possible value: otp_whatsapp, sms | [optional] [default to "otp_whatsapp"]
**MagicLinkRef** | Pointer to **string** |  | [optional] 
**PhoneNumber** | Pointer to **string** |  | [optional] 

## Methods

### NewLoginRequestBody

`func NewLoginRequestBody() *LoginRequestBody`

NewLoginRequestBody instantiates a new LoginRequestBody object
This constructor will assign default values to properties that have it defined,
and makes sure properties required by API are set, but the set of arguments
will change when the set of required properties is changed

### NewLoginRequestBodyWithDefaults

`func NewLoginRequestBodyWithDefaults() *LoginRequestBody`

NewLoginRequestBodyWithDefaults instantiates a new LoginRequestBody object
This constructor will only assign default values to properties that have it defined,
but it doesn't guarantee that properties required by API are set

### GetClientId

`func (o *LoginRequestBody) GetClientId() string`

GetClientId returns the ClientId field if non-nil, zero value otherwise.

### GetClientIdOk

`func (o *LoginRequestBody) GetClientIdOk() (*string, bool)`

GetClientIdOk returns a tuple with the ClientId field if it's non-nil, zero value otherwise
and a boolean to check if the value has been set.

### SetClientId

`func (o *LoginRequestBody) SetClientId(v string)`

SetClientId sets ClientId field to given value.

### HasClientId

`func (o *LoginRequestBody) HasClientId() bool`

HasClientId returns a boolean if a field has been set.

### GetClientSecret

`func (o *LoginRequestBody) GetClientSecret() string`

GetClientSecret returns the ClientSecret field if non-nil, zero value otherwise.

### GetClientSecretOk

`func (o *LoginRequestBody) GetClientSecretOk() (*string, bool)`

GetClientSecretOk returns a tuple with the ClientSecret field if it's non-nil, zero value otherwise
and a boolean to check if the value has been set.

### SetClientSecret

`func (o *LoginRequestBody) SetClientSecret(v string)`

SetClientSecret sets ClientSecret field to given value.

### HasClientSecret

`func (o *LoginRequestBody) HasClientSecret() bool`

HasClientSecret returns a boolean if a field has been set.

### GetCountryCode

`func (o *LoginRequestBody) GetCountryCode() string`

GetCountryCode returns the CountryCode field if non-nil, zero value otherwise.

### GetCountryCodeOk

`func (o *LoginRequestBody) GetCountryCodeOk() (*string, bool)`

GetCountryCodeOk returns a tuple with the CountryCode field if it's non-nil, zero value otherwise
and a boolean to check if the value has been set.

### SetCountryCode

`func (o *LoginRequestBody) SetCountryCode(v string)`

SetCountryCode sets CountryCode field to given value.

### HasCountryCode

`func (o *LoginRequestBody) HasCountryCode() bool`

HasCountryCode returns a boolean if a field has been set.

### GetLoginType

`func (o *LoginRequestBody) GetLoginType() string`

GetLoginType returns the LoginType field if non-nil, zero value otherwise.

### GetLoginTypeOk

`func (o *LoginRequestBody) GetLoginTypeOk() (*string, bool)`

GetLoginTypeOk returns a tuple with the LoginType field if it's non-nil, zero value otherwise
and a boolean to check if the value has been set.

### SetLoginType

`func (o *LoginRequestBody) SetLoginType(v string)`

SetLoginType sets LoginType field to given value.

### HasLoginType

`func (o *LoginRequestBody) HasLoginType() bool`

HasLoginType returns a boolean if a field has been set.

### GetMagicLinkRef

`func (o *LoginRequestBody) GetMagicLinkRef() string`

GetMagicLinkRef returns the MagicLinkRef field if non-nil, zero value otherwise.

### GetMagicLinkRefOk

`func (o *LoginRequestBody) GetMagicLinkRefOk() (*string, bool)`

GetMagicLinkRefOk returns a tuple with the MagicLinkRef field if it's non-nil, zero value otherwise
and a boolean to check if the value has been set.

### SetMagicLinkRef

`func (o *LoginRequestBody) SetMagicLinkRef(v string)`

SetMagicLinkRef sets MagicLinkRef field to given value.

### HasMagicLinkRef

`func (o *LoginRequestBody) HasMagicLinkRef() bool`

HasMagicLinkRef returns a boolean if a field has been set.

### GetPhoneNumber

`func (o *LoginRequestBody) GetPhoneNumber() string`

GetPhoneNumber returns the PhoneNumber field if non-nil, zero value otherwise.

### GetPhoneNumberOk

`func (o *LoginRequestBody) GetPhoneNumberOk() (*string, bool)`

GetPhoneNumberOk returns a tuple with the PhoneNumber field if it's non-nil, zero value otherwise
and a boolean to check if the value has been set.

### SetPhoneNumber

`func (o *LoginRequestBody) SetPhoneNumber(v string)`

SetPhoneNumber sets PhoneNumber field to given value.

### HasPhoneNumber

`func (o *LoginRequestBody) HasPhoneNumber() bool`

HasPhoneNumber returns a boolean if a field has been set.


[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


