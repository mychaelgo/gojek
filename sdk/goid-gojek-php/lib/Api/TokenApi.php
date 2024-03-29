<?php
/**
 * TokenApi
 * PHP version 7.3
 *
 * @category Class
 * @package  GoIdGojekPhp
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * goid.gojekapi.com
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0.1
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.3.1-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace GoIdGojekPhp\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use GoIdGojekPhp\ApiException;
use GoIdGojekPhp\Configuration;
use GoIdGojekPhp\HeaderSelector;
use GoIdGojekPhp\ObjectSerializer;

/**
 * TokenApi Class Doc Comment
 *
 * @category Class
 * @package  GoIdGojekPhp
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class TokenApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation generateToken
     *
     * POST token
     *
     * @param  string $x_appversion x_appversion (optional, default to '4.59.1')
     * @param  string $x_appid x_appid (optional, default to 'com.gojek.app')
     * @param  string $x_deviceos x_deviceos (optional, default to 'Android,10')
     * @param  string $x_user_type x_user_type (optional, default to 'customer')
     * @param  string $x_phonemake x_phonemake (optional, default to 'Samsung')
     * @param  string $x_phonemodel x_phonemodel (optional, default to 'GT-S7500')
     * @param  string $x_pushtokentype x_pushtokentype (optional, default to 'FCM')
     * @param  string $x_platform x_platform (optional, default to 'Android')
     * @param  string $x_uniqueid x_uniqueid (optional, default to '95f99ddd6a5d34a9')
     * @param  \GoIdGojekPhp\Model\GenerateTokenRequest $generate_token_request generate_token_request (optional)
     *
     * @throws \GoIdGojekPhp\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \GoIdGojekPhp\Model\GenerateTokenResponse
     */
    public function generateToken($x_appversion = '4.59.1', $x_appid = 'com.gojek.app', $x_deviceos = 'Android,10', $x_user_type = 'customer', $x_phonemake = 'Samsung', $x_phonemodel = 'GT-S7500', $x_pushtokentype = 'FCM', $x_platform = 'Android', $x_uniqueid = '95f99ddd6a5d34a9', $generate_token_request = null)
    {
        list($response) = $this->generateTokenWithHttpInfo($x_appversion, $x_appid, $x_deviceos, $x_user_type, $x_phonemake, $x_phonemodel, $x_pushtokentype, $x_platform, $x_uniqueid, $generate_token_request);
        return $response;
    }

    /**
     * Operation generateTokenWithHttpInfo
     *
     * POST token
     *
     * @param  string $x_appversion (optional, default to '4.59.1')
     * @param  string $x_appid (optional, default to 'com.gojek.app')
     * @param  string $x_deviceos (optional, default to 'Android,10')
     * @param  string $x_user_type (optional, default to 'customer')
     * @param  string $x_phonemake (optional, default to 'Samsung')
     * @param  string $x_phonemodel (optional, default to 'GT-S7500')
     * @param  string $x_pushtokentype (optional, default to 'FCM')
     * @param  string $x_platform (optional, default to 'Android')
     * @param  string $x_uniqueid (optional, default to '95f99ddd6a5d34a9')
     * @param  \GoIdGojekPhp\Model\GenerateTokenRequest $generate_token_request (optional)
     *
     * @throws \GoIdGojekPhp\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \GoIdGojekPhp\Model\GenerateTokenResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function generateTokenWithHttpInfo($x_appversion = '4.59.1', $x_appid = 'com.gojek.app', $x_deviceos = 'Android,10', $x_user_type = 'customer', $x_phonemake = 'Samsung', $x_phonemodel = 'GT-S7500', $x_pushtokentype = 'FCM', $x_platform = 'Android', $x_uniqueid = '95f99ddd6a5d34a9', $generate_token_request = null)
    {
        $request = $this->generateTokenRequest($x_appversion, $x_appid, $x_deviceos, $x_user_type, $x_phonemake, $x_phonemodel, $x_pushtokentype, $x_platform, $x_uniqueid, $generate_token_request);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 201:
                    if ('\GoIdGojekPhp\Model\GenerateTokenResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\GoIdGojekPhp\Model\GenerateTokenResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\GoIdGojekPhp\Model\GenerateTokenResponse';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\GoIdGojekPhp\Model\GenerateTokenResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation generateTokenAsync
     *
     * POST token
     *
     * @param  string $x_appversion (optional, default to '4.59.1')
     * @param  string $x_appid (optional, default to 'com.gojek.app')
     * @param  string $x_deviceos (optional, default to 'Android,10')
     * @param  string $x_user_type (optional, default to 'customer')
     * @param  string $x_phonemake (optional, default to 'Samsung')
     * @param  string $x_phonemodel (optional, default to 'GT-S7500')
     * @param  string $x_pushtokentype (optional, default to 'FCM')
     * @param  string $x_platform (optional, default to 'Android')
     * @param  string $x_uniqueid (optional, default to '95f99ddd6a5d34a9')
     * @param  \GoIdGojekPhp\Model\GenerateTokenRequest $generate_token_request (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function generateTokenAsync($x_appversion = '4.59.1', $x_appid = 'com.gojek.app', $x_deviceos = 'Android,10', $x_user_type = 'customer', $x_phonemake = 'Samsung', $x_phonemodel = 'GT-S7500', $x_pushtokentype = 'FCM', $x_platform = 'Android', $x_uniqueid = '95f99ddd6a5d34a9', $generate_token_request = null)
    {
        return $this->generateTokenAsyncWithHttpInfo($x_appversion, $x_appid, $x_deviceos, $x_user_type, $x_phonemake, $x_phonemodel, $x_pushtokentype, $x_platform, $x_uniqueid, $generate_token_request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation generateTokenAsyncWithHttpInfo
     *
     * POST token
     *
     * @param  string $x_appversion (optional, default to '4.59.1')
     * @param  string $x_appid (optional, default to 'com.gojek.app')
     * @param  string $x_deviceos (optional, default to 'Android,10')
     * @param  string $x_user_type (optional, default to 'customer')
     * @param  string $x_phonemake (optional, default to 'Samsung')
     * @param  string $x_phonemodel (optional, default to 'GT-S7500')
     * @param  string $x_pushtokentype (optional, default to 'FCM')
     * @param  string $x_platform (optional, default to 'Android')
     * @param  string $x_uniqueid (optional, default to '95f99ddd6a5d34a9')
     * @param  \GoIdGojekPhp\Model\GenerateTokenRequest $generate_token_request (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function generateTokenAsyncWithHttpInfo($x_appversion = '4.59.1', $x_appid = 'com.gojek.app', $x_deviceos = 'Android,10', $x_user_type = 'customer', $x_phonemake = 'Samsung', $x_phonemodel = 'GT-S7500', $x_pushtokentype = 'FCM', $x_platform = 'Android', $x_uniqueid = '95f99ddd6a5d34a9', $generate_token_request = null)
    {
        $returnType = '\GoIdGojekPhp\Model\GenerateTokenResponse';
        $request = $this->generateTokenRequest($x_appversion, $x_appid, $x_deviceos, $x_user_type, $x_phonemake, $x_phonemodel, $x_pushtokentype, $x_platform, $x_uniqueid, $generate_token_request);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'generateToken'
     *
     * @param  string $x_appversion (optional, default to '4.59.1')
     * @param  string $x_appid (optional, default to 'com.gojek.app')
     * @param  string $x_deviceos (optional, default to 'Android,10')
     * @param  string $x_user_type (optional, default to 'customer')
     * @param  string $x_phonemake (optional, default to 'Samsung')
     * @param  string $x_phonemodel (optional, default to 'GT-S7500')
     * @param  string $x_pushtokentype (optional, default to 'FCM')
     * @param  string $x_platform (optional, default to 'Android')
     * @param  string $x_uniqueid (optional, default to '95f99ddd6a5d34a9')
     * @param  \GoIdGojekPhp\Model\GenerateTokenRequest $generate_token_request (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function generateTokenRequest($x_appversion = '4.59.1', $x_appid = 'com.gojek.app', $x_deviceos = 'Android,10', $x_user_type = 'customer', $x_phonemake = 'Samsung', $x_phonemodel = 'GT-S7500', $x_pushtokentype = 'FCM', $x_platform = 'Android', $x_uniqueid = '95f99ddd6a5d34a9', $generate_token_request = null)
    {

        $resourcePath = '/goid/token';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // header params
        if ($x_appversion !== null) {
            $headerParams['x-appversion'] = ObjectSerializer::toHeaderValue($x_appversion);
        }
        // header params
        if ($x_appid !== null) {
            $headerParams['x-appid'] = ObjectSerializer::toHeaderValue($x_appid);
        }
        // header params
        if ($x_deviceos !== null) {
            $headerParams['x-deviceos'] = ObjectSerializer::toHeaderValue($x_deviceos);
        }
        // header params
        if ($x_user_type !== null) {
            $headerParams['x-user-type'] = ObjectSerializer::toHeaderValue($x_user_type);
        }
        // header params
        if ($x_phonemake !== null) {
            $headerParams['x-phonemake'] = ObjectSerializer::toHeaderValue($x_phonemake);
        }
        // header params
        if ($x_phonemodel !== null) {
            $headerParams['x-phonemodel'] = ObjectSerializer::toHeaderValue($x_phonemodel);
        }
        // header params
        if ($x_pushtokentype !== null) {
            $headerParams['x-pushtokentype'] = ObjectSerializer::toHeaderValue($x_pushtokentype);
        }
        // header params
        if ($x_platform !== null) {
            $headerParams['x-platform'] = ObjectSerializer::toHeaderValue($x_platform);
        }
        // header params
        if ($x_uniqueid !== null) {
            $headerParams['x-uniqueid'] = ObjectSerializer::toHeaderValue($x_uniqueid);
        }



        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($generate_token_request)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($generate_token_request));
            } else {
                $httpBody = $generate_token_request;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation loginRequest
     *
     * POST request
     *
     * @param  string $x_appversion x_appversion (optional, default to '4.59.1')
     * @param  string $x_appid x_appid (optional, default to 'com.gojek.app')
     * @param  string $x_deviceos x_deviceos (optional, default to 'Android,10')
     * @param  string $x_user_type x_user_type (optional, default to 'customer')
     * @param  string $x_phonemake x_phonemake (optional, default to 'Samsung')
     * @param  string $x_phonemodel x_phonemodel (optional, default to 'GT-S7500')
     * @param  string $x_pushtokentype x_pushtokentype (optional, default to 'FCM')
     * @param  string $x_platform x_platform (optional, default to 'Android')
     * @param  string $x_uniqueid x_uniqueid (optional, default to '95f99ddd6a5d34a9')
     * @param  \GoIdGojekPhp\Model\LoginRequestBody $login_request_body login_request_body (optional)
     *
     * @throws \GoIdGojekPhp\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \GoIdGojekPhp\Model\LoginRequestResponse
     */
    public function loginRequest($x_appversion = '4.59.1', $x_appid = 'com.gojek.app', $x_deviceos = 'Android,10', $x_user_type = 'customer', $x_phonemake = 'Samsung', $x_phonemodel = 'GT-S7500', $x_pushtokentype = 'FCM', $x_platform = 'Android', $x_uniqueid = '95f99ddd6a5d34a9', $login_request_body = null)
    {
        list($response) = $this->loginRequestWithHttpInfo($x_appversion, $x_appid, $x_deviceos, $x_user_type, $x_phonemake, $x_phonemodel, $x_pushtokentype, $x_platform, $x_uniqueid, $login_request_body);
        return $response;
    }

    /**
     * Operation loginRequestWithHttpInfo
     *
     * POST request
     *
     * @param  string $x_appversion (optional, default to '4.59.1')
     * @param  string $x_appid (optional, default to 'com.gojek.app')
     * @param  string $x_deviceos (optional, default to 'Android,10')
     * @param  string $x_user_type (optional, default to 'customer')
     * @param  string $x_phonemake (optional, default to 'Samsung')
     * @param  string $x_phonemodel (optional, default to 'GT-S7500')
     * @param  string $x_pushtokentype (optional, default to 'FCM')
     * @param  string $x_platform (optional, default to 'Android')
     * @param  string $x_uniqueid (optional, default to '95f99ddd6a5d34a9')
     * @param  \GoIdGojekPhp\Model\LoginRequestBody $login_request_body (optional)
     *
     * @throws \GoIdGojekPhp\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \GoIdGojekPhp\Model\LoginRequestResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function loginRequestWithHttpInfo($x_appversion = '4.59.1', $x_appid = 'com.gojek.app', $x_deviceos = 'Android,10', $x_user_type = 'customer', $x_phonemake = 'Samsung', $x_phonemodel = 'GT-S7500', $x_pushtokentype = 'FCM', $x_platform = 'Android', $x_uniqueid = '95f99ddd6a5d34a9', $login_request_body = null)
    {
        $request = $this->loginRequestRequest($x_appversion, $x_appid, $x_deviceos, $x_user_type, $x_phonemake, $x_phonemodel, $x_pushtokentype, $x_platform, $x_uniqueid, $login_request_body);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 201:
                    if ('\GoIdGojekPhp\Model\LoginRequestResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\GoIdGojekPhp\Model\LoginRequestResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\GoIdGojekPhp\Model\LoginRequestResponse';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\GoIdGojekPhp\Model\LoginRequestResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation loginRequestAsync
     *
     * POST request
     *
     * @param  string $x_appversion (optional, default to '4.59.1')
     * @param  string $x_appid (optional, default to 'com.gojek.app')
     * @param  string $x_deviceos (optional, default to 'Android,10')
     * @param  string $x_user_type (optional, default to 'customer')
     * @param  string $x_phonemake (optional, default to 'Samsung')
     * @param  string $x_phonemodel (optional, default to 'GT-S7500')
     * @param  string $x_pushtokentype (optional, default to 'FCM')
     * @param  string $x_platform (optional, default to 'Android')
     * @param  string $x_uniqueid (optional, default to '95f99ddd6a5d34a9')
     * @param  \GoIdGojekPhp\Model\LoginRequestBody $login_request_body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function loginRequestAsync($x_appversion = '4.59.1', $x_appid = 'com.gojek.app', $x_deviceos = 'Android,10', $x_user_type = 'customer', $x_phonemake = 'Samsung', $x_phonemodel = 'GT-S7500', $x_pushtokentype = 'FCM', $x_platform = 'Android', $x_uniqueid = '95f99ddd6a5d34a9', $login_request_body = null)
    {
        return $this->loginRequestAsyncWithHttpInfo($x_appversion, $x_appid, $x_deviceos, $x_user_type, $x_phonemake, $x_phonemodel, $x_pushtokentype, $x_platform, $x_uniqueid, $login_request_body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation loginRequestAsyncWithHttpInfo
     *
     * POST request
     *
     * @param  string $x_appversion (optional, default to '4.59.1')
     * @param  string $x_appid (optional, default to 'com.gojek.app')
     * @param  string $x_deviceos (optional, default to 'Android,10')
     * @param  string $x_user_type (optional, default to 'customer')
     * @param  string $x_phonemake (optional, default to 'Samsung')
     * @param  string $x_phonemodel (optional, default to 'GT-S7500')
     * @param  string $x_pushtokentype (optional, default to 'FCM')
     * @param  string $x_platform (optional, default to 'Android')
     * @param  string $x_uniqueid (optional, default to '95f99ddd6a5d34a9')
     * @param  \GoIdGojekPhp\Model\LoginRequestBody $login_request_body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function loginRequestAsyncWithHttpInfo($x_appversion = '4.59.1', $x_appid = 'com.gojek.app', $x_deviceos = 'Android,10', $x_user_type = 'customer', $x_phonemake = 'Samsung', $x_phonemodel = 'GT-S7500', $x_pushtokentype = 'FCM', $x_platform = 'Android', $x_uniqueid = '95f99ddd6a5d34a9', $login_request_body = null)
    {
        $returnType = '\GoIdGojekPhp\Model\LoginRequestResponse';
        $request = $this->loginRequestRequest($x_appversion, $x_appid, $x_deviceos, $x_user_type, $x_phonemake, $x_phonemodel, $x_pushtokentype, $x_platform, $x_uniqueid, $login_request_body);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'loginRequest'
     *
     * @param  string $x_appversion (optional, default to '4.59.1')
     * @param  string $x_appid (optional, default to 'com.gojek.app')
     * @param  string $x_deviceos (optional, default to 'Android,10')
     * @param  string $x_user_type (optional, default to 'customer')
     * @param  string $x_phonemake (optional, default to 'Samsung')
     * @param  string $x_phonemodel (optional, default to 'GT-S7500')
     * @param  string $x_pushtokentype (optional, default to 'FCM')
     * @param  string $x_platform (optional, default to 'Android')
     * @param  string $x_uniqueid (optional, default to '95f99ddd6a5d34a9')
     * @param  \GoIdGojekPhp\Model\LoginRequestBody $login_request_body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function loginRequestRequest($x_appversion = '4.59.1', $x_appid = 'com.gojek.app', $x_deviceos = 'Android,10', $x_user_type = 'customer', $x_phonemake = 'Samsung', $x_phonemodel = 'GT-S7500', $x_pushtokentype = 'FCM', $x_platform = 'Android', $x_uniqueid = '95f99ddd6a5d34a9', $login_request_body = null)
    {

        $resourcePath = '/goid/login/request';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // header params
        if ($x_appversion !== null) {
            $headerParams['x-appversion'] = ObjectSerializer::toHeaderValue($x_appversion);
        }
        // header params
        if ($x_appid !== null) {
            $headerParams['x-appid'] = ObjectSerializer::toHeaderValue($x_appid);
        }
        // header params
        if ($x_deviceos !== null) {
            $headerParams['x-deviceos'] = ObjectSerializer::toHeaderValue($x_deviceos);
        }
        // header params
        if ($x_user_type !== null) {
            $headerParams['x-user-type'] = ObjectSerializer::toHeaderValue($x_user_type);
        }
        // header params
        if ($x_phonemake !== null) {
            $headerParams['x-phonemake'] = ObjectSerializer::toHeaderValue($x_phonemake);
        }
        // header params
        if ($x_phonemodel !== null) {
            $headerParams['x-phonemodel'] = ObjectSerializer::toHeaderValue($x_phonemodel);
        }
        // header params
        if ($x_pushtokentype !== null) {
            $headerParams['x-pushtokentype'] = ObjectSerializer::toHeaderValue($x_pushtokentype);
        }
        // header params
        if ($x_platform !== null) {
            $headerParams['x-platform'] = ObjectSerializer::toHeaderValue($x_platform);
        }
        // header params
        if ($x_uniqueid !== null) {
            $headerParams['x-uniqueid'] = ObjectSerializer::toHeaderValue($x_uniqueid);
        }



        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($login_request_body)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($login_request_body));
            } else {
                $httpBody = $login_request_body;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
