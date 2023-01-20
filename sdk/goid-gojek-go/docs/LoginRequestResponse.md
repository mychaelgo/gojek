# LoginRequestResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**Data** | Pointer to [**LoginRequestResponseData**](LoginRequestResponseData.md) |  | [optional] 
**Success** | Pointer to **bool** |  | [optional] 
**Errors** | Pointer to **[]interface{}** |  | [optional] 

## Methods

### NewLoginRequestResponse

`func NewLoginRequestResponse() *LoginRequestResponse`

NewLoginRequestResponse instantiates a new LoginRequestResponse object
This constructor will assign default values to properties that have it defined,
and makes sure properties required by API are set, but the set of arguments
will change when the set of required properties is changed

### NewLoginRequestResponseWithDefaults

`func NewLoginRequestResponseWithDefaults() *LoginRequestResponse`

NewLoginRequestResponseWithDefaults instantiates a new LoginRequestResponse object
This constructor will only assign default values to properties that have it defined,
but it doesn't guarantee that properties required by API are set

### GetData

`func (o *LoginRequestResponse) GetData() LoginRequestResponseData`

GetData returns the Data field if non-nil, zero value otherwise.

### GetDataOk

`func (o *LoginRequestResponse) GetDataOk() (*LoginRequestResponseData, bool)`

GetDataOk returns a tuple with the Data field if it's non-nil, zero value otherwise
and a boolean to check if the value has been set.

### SetData

`func (o *LoginRequestResponse) SetData(v LoginRequestResponseData)`

SetData sets Data field to given value.

### HasData

`func (o *LoginRequestResponse) HasData() bool`

HasData returns a boolean if a field has been set.

### GetSuccess

`func (o *LoginRequestResponse) GetSuccess() bool`

GetSuccess returns the Success field if non-nil, zero value otherwise.

### GetSuccessOk

`func (o *LoginRequestResponse) GetSuccessOk() (*bool, bool)`

GetSuccessOk returns a tuple with the Success field if it's non-nil, zero value otherwise
and a boolean to check if the value has been set.

### SetSuccess

`func (o *LoginRequestResponse) SetSuccess(v bool)`

SetSuccess sets Success field to given value.

### HasSuccess

`func (o *LoginRequestResponse) HasSuccess() bool`

HasSuccess returns a boolean if a field has been set.

### GetErrors

`func (o *LoginRequestResponse) GetErrors() []interface{}`

GetErrors returns the Errors field if non-nil, zero value otherwise.

### GetErrorsOk

`func (o *LoginRequestResponse) GetErrorsOk() (*[]interface{}, bool)`

GetErrorsOk returns a tuple with the Errors field if it's non-nil, zero value otherwise
and a boolean to check if the value has been set.

### SetErrors

`func (o *LoginRequestResponse) SetErrors(v []interface{})`

SetErrors sets Errors field to given value.

### HasErrors

`func (o *LoginRequestResponse) HasErrors() bool`

HasErrors returns a boolean if a field has been set.


[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


