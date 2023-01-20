# GenerateTokenRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ClientId** | Pointer to **string** |  | [optional] [default to "gojek:consumer:app"]
**ClientSecret** | Pointer to **string** |  | [optional] [default to "pGwQ7oi8bKqqwvid09UrjqpkMEHklb"]
**Data** | Pointer to [**GoidTokenData**](GoidTokenData.md) |  | [optional] 
**GrantType** | Pointer to **string** |  | [optional] [default to "otp"]
**Scopes** | Pointer to **[]interface{}** |  | [optional] 

## Methods

### NewGenerateTokenRequest

`func NewGenerateTokenRequest() *GenerateTokenRequest`

NewGenerateTokenRequest instantiates a new GenerateTokenRequest object
This constructor will assign default values to properties that have it defined,
and makes sure properties required by API are set, but the set of arguments
will change when the set of required properties is changed

### NewGenerateTokenRequestWithDefaults

`func NewGenerateTokenRequestWithDefaults() *GenerateTokenRequest`

NewGenerateTokenRequestWithDefaults instantiates a new GenerateTokenRequest object
This constructor will only assign default values to properties that have it defined,
but it doesn't guarantee that properties required by API are set

### GetClientId

`func (o *GenerateTokenRequest) GetClientId() string`

GetClientId returns the ClientId field if non-nil, zero value otherwise.

### GetClientIdOk

`func (o *GenerateTokenRequest) GetClientIdOk() (*string, bool)`

GetClientIdOk returns a tuple with the ClientId field if it's non-nil, zero value otherwise
and a boolean to check if the value has been set.

### SetClientId

`func (o *GenerateTokenRequest) SetClientId(v string)`

SetClientId sets ClientId field to given value.

### HasClientId

`func (o *GenerateTokenRequest) HasClientId() bool`

HasClientId returns a boolean if a field has been set.

### GetClientSecret

`func (o *GenerateTokenRequest) GetClientSecret() string`

GetClientSecret returns the ClientSecret field if non-nil, zero value otherwise.

### GetClientSecretOk

`func (o *GenerateTokenRequest) GetClientSecretOk() (*string, bool)`

GetClientSecretOk returns a tuple with the ClientSecret field if it's non-nil, zero value otherwise
and a boolean to check if the value has been set.

### SetClientSecret

`func (o *GenerateTokenRequest) SetClientSecret(v string)`

SetClientSecret sets ClientSecret field to given value.

### HasClientSecret

`func (o *GenerateTokenRequest) HasClientSecret() bool`

HasClientSecret returns a boolean if a field has been set.

### GetData

`func (o *GenerateTokenRequest) GetData() GoidTokenData`

GetData returns the Data field if non-nil, zero value otherwise.

### GetDataOk

`func (o *GenerateTokenRequest) GetDataOk() (*GoidTokenData, bool)`

GetDataOk returns a tuple with the Data field if it's non-nil, zero value otherwise
and a boolean to check if the value has been set.

### SetData

`func (o *GenerateTokenRequest) SetData(v GoidTokenData)`

SetData sets Data field to given value.

### HasData

`func (o *GenerateTokenRequest) HasData() bool`

HasData returns a boolean if a field has been set.

### GetGrantType

`func (o *GenerateTokenRequest) GetGrantType() string`

GetGrantType returns the GrantType field if non-nil, zero value otherwise.

### GetGrantTypeOk

`func (o *GenerateTokenRequest) GetGrantTypeOk() (*string, bool)`

GetGrantTypeOk returns a tuple with the GrantType field if it's non-nil, zero value otherwise
and a boolean to check if the value has been set.

### SetGrantType

`func (o *GenerateTokenRequest) SetGrantType(v string)`

SetGrantType sets GrantType field to given value.

### HasGrantType

`func (o *GenerateTokenRequest) HasGrantType() bool`

HasGrantType returns a boolean if a field has been set.

### GetScopes

`func (o *GenerateTokenRequest) GetScopes() []interface{}`

GetScopes returns the Scopes field if non-nil, zero value otherwise.

### GetScopesOk

`func (o *GenerateTokenRequest) GetScopesOk() (*[]interface{}, bool)`

GetScopesOk returns a tuple with the Scopes field if it's non-nil, zero value otherwise
and a boolean to check if the value has been set.

### SetScopes

`func (o *GenerateTokenRequest) SetScopes(v []interface{})`

SetScopes sets Scopes field to given value.

### HasScopes

`func (o *GenerateTokenRequest) HasScopes() bool`

HasScopes returns a boolean if a field has been set.


[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


