# Yeepay\Yop\Sdk\Prepay

All URIs are relative to *http://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**complete**](Prepay.md#complete) | **POST** /rest/v1.0/prepay/complete | 预消费完成
[**completeRepeal**](Prepay.md#completeRepeal) | **POST** /rest/v1.0/prepay/complete/repeal | 预消费完成撤销
[**prepay_complete_repeal_v1_0**](Prepay.md#prepay_complete_repeal_v1_0) | **POST** /rest/v1.0/prepay/complete/repeal | 预消费完成撤销
[**prepay_complete_v1_0**](Prepay.md#prepay_complete_v1_0) | **POST** /rest/v1.0/prepay/complete | 预消费完成
[**prepay_repeal_v1_0**](Prepay.md#prepay_repeal_v1_0) | **POST** /rest/v1.0/prepay/repeal | 预消费撤销
[**repeal**](Prepay.md#repeal) | **POST** /rest/v1.0/prepay/repeal | 预消费撤销


# **complete**
CompleteResponse complete(CompleteRequest request)

预消费完成

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Prepay\PrepayClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Prepay\Model\CompleteRequest();
$request->setOrderId("orderId_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setCompleteRequestId("completeRequestId_example");
$request->setMerchantNo("merchantNo_example");
$request->setPreAuthCompleteAmount(1.2);

try {
    $response = $api_client->complete($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling PrepayClient->complete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderId** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]
 **completeRequestId** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **preAuthCompleteAmount** | **double**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Prepay\Model\YopPreAuthCompleteResDTO**](../Model/YopPreAuthCompleteResDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **completeRepeal**
CompleteRepealResponse completeRepeal(CompleteRepealRequest request)

预消费完成撤销

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Prepay\PrepayClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Prepay\Model\CompleteRepealRequest();
$request->setOrderId("orderId_example");
$request->setRepealRequestId("repealRequestId_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->completeRepeal($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling PrepayClient->completeRepeal: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderId** | **string**|  | [optional]
 **repealRequestId** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Prepay\Model\YopPreAuthCompleteRepealResDTO**](../Model/YopPreAuthCompleteRepealResDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **prepay_complete_repeal_v1_0**
PrepayCompleteRepealV10Response prepay_complete_repeal_v1_0(PrepayCompleteRepealV10Request request)

预消费完成撤销

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Prepay\PrepayClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Prepay\Model\PrepayCompleteRepealV10Request();
$request->setOrderId("orderId_example");
$request->setRepealRequestId("repealRequestId_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->prepay_complete_repeal_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling PrepayClient->prepay_complete_repeal_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderId** | **string**|  | [optional]
 **repealRequestId** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Prepay\Model\YopPreAuthCompleteRepealResDTO**](../Model/YopPreAuthCompleteRepealResDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **prepay_complete_v1_0**
PrepayCompleteV10Response prepay_complete_v1_0(PrepayCompleteV10Request request)

预消费完成

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Prepay\PrepayClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Prepay\Model\PrepayCompleteV10Request();
$request->setOrderId("orderId_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setCompleteRequestId("completeRequestId_example");
$request->setMerchantNo("merchantNo_example");
$request->setPreAuthCompleteAmount(1.2);

try {
    $response = $api_client->prepay_complete_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling PrepayClient->prepay_complete_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderId** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]
 **completeRequestId** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **preAuthCompleteAmount** | **double**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Prepay\Model\YopPreAuthCompleteResDTO**](../Model/YopPreAuthCompleteResDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **prepay_repeal_v1_0**
PrepayRepealV10Response prepay_repeal_v1_0(PrepayRepealV10Request request)

预消费撤销

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Prepay\PrepayClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Prepay\Model\PrepayRepealV10Request();
$request->setOrderId("orderId_example");
$request->setRepealRequestId("repealRequestId_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->prepay_repeal_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling PrepayClient->prepay_repeal_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderId** | **string**|  | [optional]
 **repealRequestId** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Prepay\Model\YopPreAuthRepealResDTO**](../Model/YopPreAuthRepealResDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **repeal**
RepealResponse repeal(RepealRequest request)

预消费撤销

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Prepay\PrepayClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Prepay\Model\RepealRequest();
$request->setOrderId("orderId_example");
$request->setRepealRequestId("repealRequestId_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->repeal($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling PrepayClient->repeal: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderId** | **string**|  | [optional]
 **repealRequestId** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Prepay\Model\YopPreAuthRepealResDTO**](../Model/YopPreAuthRepealResDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

