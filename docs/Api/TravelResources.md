# Yeepay\Yop\Sdk\TravelResources

All URIs are relative to *http://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createOrder**](TravelResources.md#createOrder) | **POST** /rest/v1.0/travel-resources/create-order | 创建电影票订单
[**createRefundOrder**](TravelResources.md#createRefundOrder) | **POST** /rest/v1.0/travel-resources/create-refund-order | 申请采购订单退款
[**kfcOrder**](TravelResources.md#kfcOrder) | **POST** /rest/v1.0/travel-resources/kfc-order | 创建KFC订单
[**kfcOrder_0**](TravelResources.md#kfcOrder_0) | **POST** /rest/v1.0/travel-resources/kfc-order | 创建KFC订单
[**queryCinemaOrder**](TravelResources.md#queryCinemaOrder) | **POST** /rest/v1.0/travel-resources/query-cinema-order | 查询电影票订单
[**queryKfcOrder**](TravelResources.md#queryKfcOrder) | **POST** /rest/v1.0/travel-resources/query-kfc-order | 查询KFC订单
[**queryOrder**](TravelResources.md#queryOrder) | **POST** /rest/v1.0/travel-resources/query-cinema-order | 查询电影票订单
[**queryPayOrder**](TravelResources.md#queryPayOrder) | **POST** /rest/v1.0/travel-resources/query-pay-order | 查询支付订单信息
[**queryRefundOrder**](TravelResources.md#queryRefundOrder) | **POST** /rest/v1.0/travel-resources/query-refund-order | 查询采购退款订单


# **createOrder**
CreateOrderResponse createOrder(CreateOrderRequest request)

创建电影票订单

电影票品类下单

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\TravelResources\TravelResourcesClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\TravelResources\Model\CreateOrderRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\TravelResources\Model\CinemaOrderRequestDTO());

try {
    $response = $api_client->createOrder($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling TravelResourcesClient->createOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\TravelResources\Model\CinemaOrderRequestDTO**](../Model/CinemaOrderRequestDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\TravelResources\Model\OrderBaseResponseDTO**](../Model/OrderBaseResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **createRefundOrder**
CreateRefundOrderResponse createRefundOrder(CreateRefundOrderRequest request)

申请采购订单退款

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\TravelResources\TravelResourcesClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\TravelResources\Model\CreateRefundOrderRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\TravelResources\Model\RefundOrderRequestDTO());

try {
    $response = $api_client->createRefundOrder($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling TravelResourcesClient->createRefundOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\TravelResources\Model\RefundOrderRequestDTO**](../Model/RefundOrderRequestDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\TravelResources\Model\RefundOrderResponseDTO**](../Model/RefundOrderResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **kfcOrder**
KfcOrderResponse kfcOrder(KfcOrderRequest request)

创建KFC订单

创建KFC订单

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\TravelResources\TravelResourcesClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\TravelResources\Model\KfcOrderRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\TravelResources\Model\KfcOrderRequestDTO());

try {
    $response = $api_client->kfcOrder($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling TravelResourcesClient->kfcOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\TravelResources\Model\KfcOrderRequestDTO**](../Model/KfcOrderRequestDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\TravelResources\Model\OrderBaseResponseDTO**](../Model/OrderBaseResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **kfcOrder_0**
KfcOrder0Response kfcOrder_0(KfcOrder0Request request)

创建KFC订单

创建KFC订单

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\TravelResources\TravelResourcesClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\TravelResources\Model\KfcOrder0Request();
$request->setBody(new \Yeepay\Yop\Sdk\Service\TravelResources\Model\KfcOrderRequestDTO());

try {
    $response = $api_client->kfcOrder_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling TravelResourcesClient->kfcOrder_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\TravelResources\Model\KfcOrderRequestDTO**](../Model/KfcOrderRequestDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\TravelResources\Model\OrderBaseResponseDTO**](../Model/OrderBaseResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **queryCinemaOrder**
QueryCinemaOrderResponse queryCinemaOrder(QueryCinemaOrderRequest request)

查询电影票订单

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\TravelResources\TravelResourcesClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\TravelResources\Model\QueryCinemaOrderRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\TravelResources\Model\QueryOrderRequestDTO());

try {
    $response = $api_client->queryCinemaOrder($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling TravelResourcesClient->queryCinemaOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\TravelResources\Model\QueryOrderRequestDTO**](../Model/QueryOrderRequestDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\TravelResources\Model\QueryCinemaOrderResponseDTO**](../Model/QueryCinemaOrderResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **queryKfcOrder**
QueryKfcOrderResponse queryKfcOrder(QueryKfcOrderRequest request)

查询KFC订单

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\TravelResources\TravelResourcesClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\TravelResources\Model\QueryKfcOrderRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\TravelResources\Model\QueryOrderRequestDTO());

try {
    $response = $api_client->queryKfcOrder($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling TravelResourcesClient->queryKfcOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\TravelResources\Model\QueryOrderRequestDTO**](../Model/QueryOrderRequestDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\TravelResources\Model\QueryKfcOrderResponseDTO**](../Model/QueryKfcOrderResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **queryOrder**
QueryOrderResponse queryOrder(QueryOrderRequest request)

查询电影票订单

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\TravelResources\TravelResourcesClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\TravelResources\Model\QueryOrderRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\TravelResources\Model\QueryOrderRequestDTO());

try {
    $response = $api_client->queryOrder($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling TravelResourcesClient->queryOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\TravelResources\Model\QueryOrderRequestDTO**](../Model/QueryOrderRequestDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\TravelResources\Model\QueryCinemaOrderResponseDTO**](../Model/QueryCinemaOrderResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **queryPayOrder**
QueryPayOrderResponse queryPayOrder(QueryPayOrderRequest request)

查询支付订单信息

查询支付订单信息

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\TravelResources\TravelResourcesClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\TravelResources\Model\QueryPayOrderRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\TravelResources\Model\SupplierQueryPayRequestDTO());

try {
    $response = $api_client->queryPayOrder($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling TravelResourcesClient->queryPayOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\TravelResources\Model\SupplierQueryPayRequestDTO**](../Model/SupplierQueryPayRequestDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\TravelResources\Model\PayResponseDTO**](../Model/PayResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **queryRefundOrder**
QueryRefundOrderResponse queryRefundOrder(QueryRefundOrderRequest request)

查询采购退款订单

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\TravelResources\TravelResourcesClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\TravelResources\Model\QueryRefundOrderRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\TravelResources\Model\QueryRefundOrderRequestDTO());

try {
    $response = $api_client->queryRefundOrder($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling TravelResourcesClient->queryRefundOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\TravelResources\Model\QueryRefundOrderRequestDTO**](../Model/QueryRefundOrderRequestDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\TravelResources\Model\RefundOrderResponseDTO**](../Model/RefundOrderResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

