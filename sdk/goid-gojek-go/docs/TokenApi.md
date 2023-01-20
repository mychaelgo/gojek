# \TokenApi

All URIs are relative to *https://goid.gojekapi.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**GenerateToken**](TokenApi.md#GenerateToken) | **Post** /goid/token | POST token
[**LoginRequest**](TokenApi.md#LoginRequest) | **Post** /goid/login/request | POST request



## GenerateToken

> GenerateTokenResponse GenerateToken(ctx).XAppversion(xAppversion).XAppid(xAppid).XDeviceos(xDeviceos).XUserType(xUserType).XPhonemake(xPhonemake).XPhonemodel(xPhonemodel).XPushtokentype(xPushtokentype).XPlatform(xPlatform).XUniqueid(xUniqueid).GenerateTokenRequest(generateTokenRequest).Execute()

POST token



### Example

```go
package main

import (
    "context"
    "fmt"
    "os"
    openapiclient "./openapi"
)

func main() {
    xAppversion := "xAppversion_example" // string |  (optional) (default to "4.59.1")
    xAppid := "xAppid_example" // string |  (optional) (default to "com.gojek.app")
    xDeviceos := "xDeviceos_example" // string |  (optional) (default to "Android,10")
    xUserType := "xUserType_example" // string |  (optional) (default to "customer")
    xPhonemake := "xPhonemake_example" // string |  (optional) (default to "Samsung")
    xPhonemodel := "xPhonemodel_example" // string |  (optional) (default to "GT-S7500")
    xPushtokentype := "xPushtokentype_example" // string |  (optional) (default to "FCM")
    xPlatform := "xPlatform_example" // string |  (optional) (default to "Android")
    xUniqueid := "xUniqueid_example" // string |  (optional) (default to "95f99ddd6a5d34a9")
    generateTokenRequest := *openapiclient.NewGenerateTokenRequest() // GenerateTokenRequest |  (optional)

    configuration := openapiclient.NewConfiguration()
    api_client := openapiclient.NewAPIClient(configuration)
    resp, r, err := api_client.TokenApi.GenerateToken(context.Background()).XAppversion(xAppversion).XAppid(xAppid).XDeviceos(xDeviceos).XUserType(xUserType).XPhonemake(xPhonemake).XPhonemodel(xPhonemodel).XPushtokentype(xPushtokentype).XPlatform(xPlatform).XUniqueid(xUniqueid).GenerateTokenRequest(generateTokenRequest).Execute()
    if err != nil {
        fmt.Fprintf(os.Stderr, "Error when calling `TokenApi.GenerateToken``: %v\n", err)
        fmt.Fprintf(os.Stderr, "Full HTTP response: %v\n", r)
    }
    // response from `GenerateToken`: GenerateTokenResponse
    fmt.Fprintf(os.Stdout, "Response from `TokenApi.GenerateToken`: %v\n", resp)
}
```

### Path Parameters



### Other Parameters

Other parameters are passed through a pointer to a apiGenerateTokenRequest struct via the builder pattern


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xAppversion** | **string** |  | [default to &quot;4.59.1&quot;]
 **xAppid** | **string** |  | [default to &quot;com.gojek.app&quot;]
 **xDeviceos** | **string** |  | [default to &quot;Android,10&quot;]
 **xUserType** | **string** |  | [default to &quot;customer&quot;]
 **xPhonemake** | **string** |  | [default to &quot;Samsung&quot;]
 **xPhonemodel** | **string** |  | [default to &quot;GT-S7500&quot;]
 **xPushtokentype** | **string** |  | [default to &quot;FCM&quot;]
 **xPlatform** | **string** |  | [default to &quot;Android&quot;]
 **xUniqueid** | **string** |  | [default to &quot;95f99ddd6a5d34a9&quot;]
 **generateTokenRequest** | [**GenerateTokenRequest**](GenerateTokenRequest.md) |  | 

### Return type

[**GenerateTokenResponse**](GenerateTokenResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../README.md#documentation-for-models)
[[Back to README]](../README.md)


## LoginRequest

> LoginRequestResponse LoginRequest(ctx).XAppversion(xAppversion).XAppid(xAppid).XDeviceos(xDeviceos).XUserType(xUserType).XPhonemake(xPhonemake).XPhonemodel(xPhonemodel).XPushtokentype(xPushtokentype).XPlatform(xPlatform).XUniqueid(xUniqueid).LoginRequestBody(loginRequestBody).Execute()

POST request



### Example

```go
package main

import (
    "context"
    "fmt"
    "os"
    openapiclient "./openapi"
)

func main() {
    xAppversion := "xAppversion_example" // string |  (optional) (default to "4.59.1")
    xAppid := "xAppid_example" // string |  (optional) (default to "com.gojek.app")
    xDeviceos := "xDeviceos_example" // string |  (optional) (default to "Android,10")
    xUserType := "xUserType_example" // string |  (optional) (default to "customer")
    xPhonemake := "xPhonemake_example" // string |  (optional) (default to "Samsung")
    xPhonemodel := "xPhonemodel_example" // string |  (optional) (default to "GT-S7500")
    xPushtokentype := "xPushtokentype_example" // string |  (optional) (default to "FCM")
    xPlatform := "xPlatform_example" // string |  (optional) (default to "Android")
    xUniqueid := "xUniqueid_example" // string |  (optional) (default to "95f99ddd6a5d34a9")
    loginRequestBody := *openapiclient.NewLoginRequestBody() // LoginRequestBody |  (optional)

    configuration := openapiclient.NewConfiguration()
    api_client := openapiclient.NewAPIClient(configuration)
    resp, r, err := api_client.TokenApi.LoginRequest(context.Background()).XAppversion(xAppversion).XAppid(xAppid).XDeviceos(xDeviceos).XUserType(xUserType).XPhonemake(xPhonemake).XPhonemodel(xPhonemodel).XPushtokentype(xPushtokentype).XPlatform(xPlatform).XUniqueid(xUniqueid).LoginRequestBody(loginRequestBody).Execute()
    if err != nil {
        fmt.Fprintf(os.Stderr, "Error when calling `TokenApi.LoginRequest``: %v\n", err)
        fmt.Fprintf(os.Stderr, "Full HTTP response: %v\n", r)
    }
    // response from `LoginRequest`: LoginRequestResponse
    fmt.Fprintf(os.Stdout, "Response from `TokenApi.LoginRequest`: %v\n", resp)
}
```

### Path Parameters



### Other Parameters

Other parameters are passed through a pointer to a apiLoginRequestRequest struct via the builder pattern


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xAppversion** | **string** |  | [default to &quot;4.59.1&quot;]
 **xAppid** | **string** |  | [default to &quot;com.gojek.app&quot;]
 **xDeviceos** | **string** |  | [default to &quot;Android,10&quot;]
 **xUserType** | **string** |  | [default to &quot;customer&quot;]
 **xPhonemake** | **string** |  | [default to &quot;Samsung&quot;]
 **xPhonemodel** | **string** |  | [default to &quot;GT-S7500&quot;]
 **xPushtokentype** | **string** |  | [default to &quot;FCM&quot;]
 **xPlatform** | **string** |  | [default to &quot;Android&quot;]
 **xUniqueid** | **string** |  | [default to &quot;95f99ddd6a5d34a9&quot;]
 **loginRequestBody** | [**LoginRequestBody**](LoginRequestBody.md) |  | 

### Return type

[**LoginRequestResponse**](LoginRequestResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../README.md#documentation-for-models)
[[Back to README]](../README.md)

