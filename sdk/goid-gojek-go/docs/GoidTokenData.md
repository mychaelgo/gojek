# GoidTokenData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**Otp** | Pointer to **string** | OTP from whatsapp or SMS | [optional] 
**OtpToken** | Pointer to **string** | OTP token from login request | [optional] 

## Methods

### NewGoidTokenData

`func NewGoidTokenData() *GoidTokenData`

NewGoidTokenData instantiates a new GoidTokenData object
This constructor will assign default values to properties that have it defined,
and makes sure properties required by API are set, but the set of arguments
will change when the set of required properties is changed

### NewGoidTokenDataWithDefaults

`func NewGoidTokenDataWithDefaults() *GoidTokenData`

NewGoidTokenDataWithDefaults instantiates a new GoidTokenData object
This constructor will only assign default values to properties that have it defined,
but it doesn't guarantee that properties required by API are set

### GetOtp

`func (o *GoidTokenData) GetOtp() string`

GetOtp returns the Otp field if non-nil, zero value otherwise.

### GetOtpOk

`func (o *GoidTokenData) GetOtpOk() (*string, bool)`

GetOtpOk returns a tuple with the Otp field if it's non-nil, zero value otherwise
and a boolean to check if the value has been set.

### SetOtp

`func (o *GoidTokenData) SetOtp(v string)`

SetOtp sets Otp field to given value.

### HasOtp

`func (o *GoidTokenData) HasOtp() bool`

HasOtp returns a boolean if a field has been set.

### GetOtpToken

`func (o *GoidTokenData) GetOtpToken() string`

GetOtpToken returns the OtpToken field if non-nil, zero value otherwise.

### GetOtpTokenOk

`func (o *GoidTokenData) GetOtpTokenOk() (*string, bool)`

GetOtpTokenOk returns a tuple with the OtpToken field if it's non-nil, zero value otherwise
and a boolean to check if the value has been set.

### SetOtpToken

`func (o *GoidTokenData) SetOtpToken(v string)`

SetOtpToken sets OtpToken field to given value.

### HasOtpToken

`func (o *GoidTokenData) HasOtpToken() bool`

HasOtpToken returns a boolean if a field has been set.


[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


