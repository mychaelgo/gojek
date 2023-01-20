# LoginRequestResponseData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**OtpToken** | Pointer to **string** |  | [optional] 
**OtpExpiresIn** | Pointer to **float32** |  | [optional] 
**OtpLength** | Pointer to **float32** |  | [optional] 
**NextState** | Pointer to [**LoginRequestResponseDataNextState**](LoginRequestResponseDataNextState.md) |  | [optional] 

## Methods

### NewLoginRequestResponseData

`func NewLoginRequestResponseData() *LoginRequestResponseData`

NewLoginRequestResponseData instantiates a new LoginRequestResponseData object
This constructor will assign default values to properties that have it defined,
and makes sure properties required by API are set, but the set of arguments
will change when the set of required properties is changed

### NewLoginRequestResponseDataWithDefaults

`func NewLoginRequestResponseDataWithDefaults() *LoginRequestResponseData`

NewLoginRequestResponseDataWithDefaults instantiates a new LoginRequestResponseData object
This constructor will only assign default values to properties that have it defined,
but it doesn't guarantee that properties required by API are set

### GetOtpToken

`func (o *LoginRequestResponseData) GetOtpToken() string`

GetOtpToken returns the OtpToken field if non-nil, zero value otherwise.

### GetOtpTokenOk

`func (o *LoginRequestResponseData) GetOtpTokenOk() (*string, bool)`

GetOtpTokenOk returns a tuple with the OtpToken field if it's non-nil, zero value otherwise
and a boolean to check if the value has been set.

### SetOtpToken

`func (o *LoginRequestResponseData) SetOtpToken(v string)`

SetOtpToken sets OtpToken field to given value.

### HasOtpToken

`func (o *LoginRequestResponseData) HasOtpToken() bool`

HasOtpToken returns a boolean if a field has been set.

### GetOtpExpiresIn

`func (o *LoginRequestResponseData) GetOtpExpiresIn() float32`

GetOtpExpiresIn returns the OtpExpiresIn field if non-nil, zero value otherwise.

### GetOtpExpiresInOk

`func (o *LoginRequestResponseData) GetOtpExpiresInOk() (*float32, bool)`

GetOtpExpiresInOk returns a tuple with the OtpExpiresIn field if it's non-nil, zero value otherwise
and a boolean to check if the value has been set.

### SetOtpExpiresIn

`func (o *LoginRequestResponseData) SetOtpExpiresIn(v float32)`

SetOtpExpiresIn sets OtpExpiresIn field to given value.

### HasOtpExpiresIn

`func (o *LoginRequestResponseData) HasOtpExpiresIn() bool`

HasOtpExpiresIn returns a boolean if a field has been set.

### GetOtpLength

`func (o *LoginRequestResponseData) GetOtpLength() float32`

GetOtpLength returns the OtpLength field if non-nil, zero value otherwise.

### GetOtpLengthOk

`func (o *LoginRequestResponseData) GetOtpLengthOk() (*float32, bool)`

GetOtpLengthOk returns a tuple with the OtpLength field if it's non-nil, zero value otherwise
and a boolean to check if the value has been set.

### SetOtpLength

`func (o *LoginRequestResponseData) SetOtpLength(v float32)`

SetOtpLength sets OtpLength field to given value.

### HasOtpLength

`func (o *LoginRequestResponseData) HasOtpLength() bool`

HasOtpLength returns a boolean if a field has been set.

### GetNextState

`func (o *LoginRequestResponseData) GetNextState() LoginRequestResponseDataNextState`

GetNextState returns the NextState field if non-nil, zero value otherwise.

### GetNextStateOk

`func (o *LoginRequestResponseData) GetNextStateOk() (*LoginRequestResponseDataNextState, bool)`

GetNextStateOk returns a tuple with the NextState field if it's non-nil, zero value otherwise
and a boolean to check if the value has been set.

### SetNextState

`func (o *LoginRequestResponseData) SetNextState(v LoginRequestResponseDataNextState)`

SetNextState sets NextState field to given value.

### HasNextState

`func (o *LoginRequestResponseData) HasNextState() bool`

HasNextState returns a boolean if a field has been set.


[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


