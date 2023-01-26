# GoIdGojekPhp\TokenApi

All URIs are relative to https://goid.gojekapi.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**generateToken()**](TokenApi.md#generateToken) | **POST** /goid/token | POST token
[**loginRequest()**](TokenApi.md#loginRequest) | **POST** /goid/login/request | POST request


## `generateToken()`

```php
generateToken($x_appversion, $x_appid, $x_deviceos, $x_user_type, $x_phonemake, $x_phonemodel, $x_pushtokentype, $x_platform, $x_uniqueid, $generate_token_request): \GoIdGojekPhp\Model\GenerateTokenResponse
```

POST token

Generate authentication token from OTP

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new GoIdGojekPhp\Api\TokenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_appversion = '4.59.1'; // string
$x_appid = 'com.gojek.app'; // string
$x_deviceos = 'Android,10'; // string
$x_user_type = 'customer'; // string
$x_phonemake = 'Samsung'; // string
$x_phonemodel = 'GT-S7500'; // string
$x_pushtokentype = 'FCM'; // string
$x_platform = 'Android'; // string
$x_uniqueid = '95f99ddd6a5d34a9'; // string
$generate_token_request = new \GoIdGojekPhp\Model\GenerateTokenRequest(); // \GoIdGojekPhp\Model\GenerateTokenRequest

try {
    $result = $apiInstance->generateToken($x_appversion, $x_appid, $x_deviceos, $x_user_type, $x_phonemake, $x_phonemodel, $x_pushtokentype, $x_platform, $x_uniqueid, $generate_token_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokenApi->generateToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_appversion** | **string**|  | [optional] [default to &#39;4.59.1&#39;]
 **x_appid** | **string**|  | [optional] [default to &#39;com.gojek.app&#39;]
 **x_deviceos** | **string**|  | [optional] [default to &#39;Android,10&#39;]
 **x_user_type** | **string**|  | [optional] [default to &#39;customer&#39;]
 **x_phonemake** | **string**|  | [optional] [default to &#39;Samsung&#39;]
 **x_phonemodel** | **string**|  | [optional] [default to &#39;GT-S7500&#39;]
 **x_pushtokentype** | **string**|  | [optional] [default to &#39;FCM&#39;]
 **x_platform** | **string**|  | [optional] [default to &#39;Android&#39;]
 **x_uniqueid** | **string**|  | [optional] [default to &#39;95f99ddd6a5d34a9&#39;]
 **generate_token_request** | [**\GoIdGojekPhp\Model\GenerateTokenRequest**](../Model/GenerateTokenRequest.md)|  | [optional]

### Return type

[**\GoIdGojekPhp\Model\GenerateTokenResponse**](../Model/GenerateTokenResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `loginRequest()`

```php
loginRequest($x_appversion, $x_appid, $x_deviceos, $x_user_type, $x_phonemake, $x_phonemodel, $x_pushtokentype, $x_platform, $x_uniqueid, $login_request_body): \GoIdGojekPhp\Model\LoginRequestResponse
```

POST request

Request OTP to whatsapp or SMS

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new GoIdGojekPhp\Api\TokenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_appversion = '4.59.1'; // string
$x_appid = 'com.gojek.app'; // string
$x_deviceos = 'Android,10'; // string
$x_user_type = 'customer'; // string
$x_phonemake = 'Samsung'; // string
$x_phonemodel = 'GT-S7500'; // string
$x_pushtokentype = 'FCM'; // string
$x_platform = 'Android'; // string
$x_uniqueid = '95f99ddd6a5d34a9'; // string
$login_request_body = new \GoIdGojekPhp\Model\LoginRequestBody(); // \GoIdGojekPhp\Model\LoginRequestBody

try {
    $result = $apiInstance->loginRequest($x_appversion, $x_appid, $x_deviceos, $x_user_type, $x_phonemake, $x_phonemodel, $x_pushtokentype, $x_platform, $x_uniqueid, $login_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokenApi->loginRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_appversion** | **string**|  | [optional] [default to &#39;4.59.1&#39;]
 **x_appid** | **string**|  | [optional] [default to &#39;com.gojek.app&#39;]
 **x_deviceos** | **string**|  | [optional] [default to &#39;Android,10&#39;]
 **x_user_type** | **string**|  | [optional] [default to &#39;customer&#39;]
 **x_phonemake** | **string**|  | [optional] [default to &#39;Samsung&#39;]
 **x_phonemodel** | **string**|  | [optional] [default to &#39;GT-S7500&#39;]
 **x_pushtokentype** | **string**|  | [optional] [default to &#39;FCM&#39;]
 **x_platform** | **string**|  | [optional] [default to &#39;Android&#39;]
 **x_uniqueid** | **string**|  | [optional] [default to &#39;95f99ddd6a5d34a9&#39;]
 **login_request_body** | [**\GoIdGojekPhp\Model\LoginRequestBody**](../Model/LoginRequestBody.md)|  | [optional]

### Return type

[**\GoIdGojekPhp\Model\LoginRequestResponse**](../Model/LoginRequestResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
