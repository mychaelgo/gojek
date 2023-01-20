# GenerateTokenResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**AccessToken** | Pointer to **string** |  | [optional] 
**RefreshToken** | Pointer to **string** |  | [optional] 
**DblEnabled** | Pointer to **bool** |  | [optional] 
**Flags** | Pointer to [**GenerateTokenResponseFlags**](GenerateTokenResponseFlags.md) |  | [optional] 

## Methods

### NewGenerateTokenResponse

`func NewGenerateTokenResponse() *GenerateTokenResponse`

NewGenerateTokenResponse instantiates a new GenerateTokenResponse object
This constructor will assign default values to properties that have it defined,
and makes sure properties required by API are set, but the set of arguments
will change when the set of required properties is changed

### NewGenerateTokenResponseWithDefaults

`func NewGenerateTokenResponseWithDefaults() *GenerateTokenResponse`

NewGenerateTokenResponseWithDefaults instantiates a new GenerateTokenResponse object
This constructor will only assign default values to properties that have it defined,
but it doesn't guarantee that properties required by API are set

### GetAccessToken

`func (o *GenerateTokenResponse) GetAccessToken() string`

GetAccessToken returns the AccessToken field if non-nil, zero value otherwise.

### GetAccessTokenOk

`func (o *GenerateTokenResponse) GetAccessTokenOk() (*string, bool)`

GetAccessTokenOk returns a tuple with the AccessToken field if it's non-nil, zero value otherwise
and a boolean to check if the value has been set.

### SetAccessToken

`func (o *GenerateTokenResponse) SetAccessToken(v string)`

SetAccessToken sets AccessToken field to given value.

### HasAccessToken

`func (o *GenerateTokenResponse) HasAccessToken() bool`

HasAccessToken returns a boolean if a field has been set.

### GetRefreshToken

`func (o *GenerateTokenResponse) GetRefreshToken() string`

GetRefreshToken returns the RefreshToken field if non-nil, zero value otherwise.

### GetRefreshTokenOk

`func (o *GenerateTokenResponse) GetRefreshTokenOk() (*string, bool)`

GetRefreshTokenOk returns a tuple with the RefreshToken field if it's non-nil, zero value otherwise
and a boolean to check if the value has been set.

### SetRefreshToken

`func (o *GenerateTokenResponse) SetRefreshToken(v string)`

SetRefreshToken sets RefreshToken field to given value.

### HasRefreshToken

`func (o *GenerateTokenResponse) HasRefreshToken() bool`

HasRefreshToken returns a boolean if a field has been set.

### GetDblEnabled

`func (o *GenerateTokenResponse) GetDblEnabled() bool`

GetDblEnabled returns the DblEnabled field if non-nil, zero value otherwise.

### GetDblEnabledOk

`func (o *GenerateTokenResponse) GetDblEnabledOk() (*bool, bool)`

GetDblEnabledOk returns a tuple with the DblEnabled field if it's non-nil, zero value otherwise
and a boolean to check if the value has been set.

### SetDblEnabled

`func (o *GenerateTokenResponse) SetDblEnabled(v bool)`

SetDblEnabled sets DblEnabled field to given value.

### HasDblEnabled

`func (o *GenerateTokenResponse) HasDblEnabled() bool`

HasDblEnabled returns a boolean if a field has been set.

### GetFlags

`func (o *GenerateTokenResponse) GetFlags() GenerateTokenResponseFlags`

GetFlags returns the Flags field if non-nil, zero value otherwise.

### GetFlagsOk

`func (o *GenerateTokenResponse) GetFlagsOk() (*GenerateTokenResponseFlags, bool)`

GetFlagsOk returns a tuple with the Flags field if it's non-nil, zero value otherwise
and a boolean to check if the value has been set.

### SetFlags

`func (o *GenerateTokenResponse) SetFlags(v GenerateTokenResponseFlags)`

SetFlags sets Flags field to given value.

### HasFlags

`func (o *GenerateTokenResponse) HasFlags() bool`

HasFlags returns a boolean if a field has been set.


[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


