# Yeepay\Yop\Sdk\Cnppay

All URIs are relative to *http://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**bankLimitQuery**](Cnppay.md#bankLimitQuery) | **GET** /rest/v1.0/cnppay/bank-limit/query | 银行限额查询
[**installmentPayRequest**](Cnppay.md#installmentPayRequest) | **POST** /rest/v1.0/cnppay/installment/pay/request | 分期支付统一下单
[**installmentPayRequestV1_1**](Cnppay.md#installmentPayRequestV1_1) | **POST** /rest/v1.1/cnppay/installment/pay/request | 分期支付统一下单
[**installmentQuerybankcfg**](Cnppay.md#installmentQuerybankcfg) | **GET** /rest/v1.0/cnppay/installment/querybankcfg | 分期支付商户支持银行信息查询
[**overseasPayAuth**](Cnppay.md#overseasPayAuth) | **POST** /rest/v1.0/cnppay/overseas/pay/auth | 外卡支付-认证
[**overseasPayConfirm**](Cnppay.md#overseasPayConfirm) | **POST** /rest/v1.0/cnppay/overseas/pay/confirm | 外卡支付-确认支付
[**overseasPayRequest**](Cnppay.md#overseasPayRequest) | **POST** /rest/v1.0/cnppay/overseas/pay/request | 外卡支付-支付
[**overseasQuery**](Cnppay.md#overseasQuery) | **GET** /rest/v1.0/cnppay/overseas/query | 外卡支付-订单查询


# **bankLimitQuery**
BankLimitQueryResponse bankLimitQuery(BankLimitQueryRequest request)

银行限额查询

商户查询银行的限制信息

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Cnppay\CnppayClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Cnppay\Model\BankLimitQueryRequest();
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->bankLimitQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling CnppayClient->bankLimitQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**|  |

### Return type
[**\Yeepay\Yop\Sdk\Service\Cnppay\Model\BankLimitQueryBankLimitResponseDTOResult**](../Model/BankLimitQueryBankLimitResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **installmentPayRequest**
InstallmentPayRequestResponse installmentPayRequest(InstallmentPayRequestRequest request)

分期支付统一下单

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Cnppay\CnppayClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Cnppay\Model\InstallmentPayRequestRequest();
$request->setParentMerchantNo("10012345677");
$request->setMerchantNo("10012345677");
$request->setOrderAmount(300.01);
$request->setOrderId("221007104428249784269");
$request->setFundProcessType("fundProcessType_example");
$request->setBankId("bankId_example");
$request->setExpireTime("expireTime_example");
$request->setGoodsName("goodsName_example");
$request->setNumOfInstallment(56);
$request->setRiskInfo("riskInfo_example");
$request->setRedirectUrl("redirectUrl_example");
$request->setNotifyUrl("notifyUrl_example");
$request->setCsUrl("csUrl_example");
$request->setMemo("memo_example");

try {
    $response = $api_client->installmentPayRequest($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling CnppayClient->installmentPayRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **orderAmount** | **float**|  | [optional]
 **orderId** | **string**|  | [optional]
 **fundProcessType** | **string**|  | [optional]
 **bankId** | **string**|  | [optional]
 **expireTime** | **string**|  | [optional]
 **goodsName** | **string**|  | [optional]
 **numOfInstallment** | **int**|  | [optional]
 **riskInfo** | **string**|  | [optional]
 **redirectUrl** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **csUrl** | **string**|  | [optional]
 **memo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Cnppay\Model\InstallmentPayRequestInstallmentPayResponseDTOResult**](../Model/InstallmentPayRequestInstallmentPayResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **installmentPayRequestV1_1**
InstallmentPayRequestV11Response installmentPayRequestV1_1(InstallmentPayRequestV11Request request)

分期支付统一下单

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Cnppay\CnppayClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Cnppay\Model\InstallmentPayRequestV11Request();
$request->setParentMerchantNo("10012345677");
$request->setMerchantNo("10012345677");
$request->setOrderAmount(300.01);
$request->setOrderId("221007104428249784269");
$request->setFundProcessType("fundProcessType_example");
$request->setBankId("bankId_example");
$request->setExpireTime("expireTime_example");
$request->setGoodsName("goodsName_example");
$request->setNumOfInstallment(56);
$request->setRiskInfo("riskInfo_example");
$request->setRedirectUrl("redirectUrl_example");
$request->setNotifyUrl("notifyUrl_example");
$request->setCsUrl("csUrl_example");
$request->setMemo("memo_example");

try {
    $response = $api_client->installmentPayRequestV1_1($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling CnppayClient->installmentPayRequestV1_1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **orderAmount** | **float**|  | [optional]
 **orderId** | **string**|  | [optional]
 **fundProcessType** | **string**|  | [optional]
 **bankId** | **string**|  | [optional]
 **expireTime** | **string**|  | [optional]
 **goodsName** | **string**|  | [optional]
 **numOfInstallment** | **int**|  | [optional]
 **riskInfo** | **string**|  | [optional]
 **redirectUrl** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **csUrl** | **string**|  | [optional]
 **memo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Cnppay\Model\InstallmentPayRequestV11InstallmentPayResponseDTOResult**](../Model/InstallmentPayRequestV11InstallmentPayResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **installmentQuerybankcfg**
InstallmentQuerybankcfgResponse installmentQuerybankcfg(InstallmentQuerybankcfgRequest request)

分期支付商户支持银行信息查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Cnppay\CnppayClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Cnppay\Model\InstallmentQuerybankcfgRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("10012345677");

try {
    $response = $api_client->installmentQuerybankcfg($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling CnppayClient->installmentQuerybankcfg: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**| 发起方商户编号&lt;br&gt;*标准商户收付款方案中此参数与收款商户编号一致；&lt;br&gt;*平台商户收付款方案中此参数为平台商商户编号；&lt;br&gt;*服务商解决方案中，①标准商户收款时，该参数为标准商户商编 ②平台商收款或平台商入驻商户收款时，该参数为平台商商编。 |
 **merchantNo** | **string**|  |

### Return type
[**\Yeepay\Yop\Sdk\Service\Cnppay\Model\InstallmentQuerybankcfgInstallmentBankCfgResponseDTOResult**](../Model/InstallmentQuerybankcfgInstallmentBankCfgResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **overseasPayAuth**
OverseasPayAuthResponse overseasPayAuth(OverseasPayAuthRequest request)

外卡支付-认证

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Cnppay\CnppayClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Cnppay\Model\OverseasPayAuthRequest();
$request->setOrderId("210107104428249784269");
$request->setRequestId("requestId_example");
$request->setMerchantNo("merchantNo_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setProdMsg("prodMsg_example");

try {
    $response = $api_client->overseasPayAuth($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling CnppayClient->overseasPayAuth: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderId** | **string**|  | [optional]
 **requestId** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]
 **prodMsg** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Cnppay\Model\OverseasPayAuthOverseasCardPayAuthResponseDTOResult**](../Model/OverseasPayAuthOverseasCardPayAuthResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **overseasPayConfirm**
OverseasPayConfirmResponse overseasPayConfirm(OverseasPayConfirmRequest request)

外卡支付-确认支付

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Cnppay\CnppayClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Cnppay\Model\OverseasPayConfirmRequest();
$request->setOrderId("210107104428249784269");
$request->setRequestId("requestId_example");
$request->setTransactionId("transactionId_example");
$request->setMerchantNo("10012345677");
$request->setParentMerchantNo("parentMerchantNo_example");

try {
    $response = $api_client->overseasPayConfirm($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling CnppayClient->overseasPayConfirm: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderId** | **string**|  | [optional]
 **requestId** | **string**|  | [optional]
 **transactionId** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Cnppay\Model\OverseasPayConfirmPayResultResponseDTOResult**](../Model/OverseasPayConfirmPayResultResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **overseasPayRequest**
OverseasPayRequestResponse overseasPayRequest(OverseasPayRequestRequest request)

外卡支付-支付

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Cnppay\CnppayClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Cnppay\Model\OverseasPayRequestRequest();
$request->setOrderId("210107104428249784269");
$request->setRequestId("requestId_example");
$request->setBankCardNo("bankCardNo_example");
$request->setBankId("bankId_example");
$request->setCardFirstName("cardFirstName_example");
$request->setCardLastName("cardLastName_example");
$request->setMobilePhoneNo("18888888888");
$request->setValidDate("07-2099");
$request->setBillCountryCode("billCountryCode_example");
$request->setBillProvinceCode("billProvinceCode_example");
$request->setBillCity("billCity_example");
$request->setBillAddress("billAddress_example");
$request->setBillPostalCode("billPostalCode_example");
$request->setBillEmail("billEmail_example");
$request->setFrontendCallbackUrl("frontendCallbackUrl_example");
$request->setDeviceInfo("deviceInfo_example");
$request->setCvv("cvv_example");
$request->setPayPlatform("payPlatform_example");
$request->setMerchantNo("10012345677");
$request->setParentMerchantNo("parentMerchantNo_example");

try {
    $response = $api_client->overseasPayRequest($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling CnppayClient->overseasPayRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderId** | **string**|  | [optional]
 **requestId** | **string**|  | [optional]
 **bankCardNo** | **string**|  | [optional]
 **bankId** | **string**|  | [optional]
 **cardFirstName** | **string**|  | [optional]
 **cardLastName** | **string**|  | [optional]
 **mobilePhoneNo** | **string**|  | [optional]
 **validDate** | **string**|  | [optional]
 **billCountryCode** | **string**|  | [optional]
 **billProvinceCode** | **string**|  | [optional]
 **billCity** | **string**|  | [optional]
 **billAddress** | **string**|  | [optional]
 **billPostalCode** | **string**|  | [optional]
 **billEmail** | **string**|  | [optional]
 **frontendCallbackUrl** | **string**|  | [optional]
 **deviceInfo** | **string**|  | [optional]
 **cvv** | **string**|  | [optional]
 **payPlatform** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Cnppay\Model\OverseasPayRequestOverseasCardPayResponseDTOResult**](../Model/OverseasPayRequestOverseasCardPayResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **overseasQuery**
OverseasQueryResponse overseasQuery(OverseasQueryRequest request)

外卡支付-订单查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Cnppay\CnppayClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Cnppay\Model\OverseasQueryRequest();
$request->setMerchantNo("10012345677");
$request->setOrderId("210107104428249784269");
$request->setRequestId("requestId_example");

try {
    $response = $api_client->overseasQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling CnppayClient->overseasQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**|  |
 **orderId** | **string**|  |
 **requestId** | **string**|  |

### Return type
[**\Yeepay\Yop\Sdk\Service\Cnppay\Model\OverseasQueryOverseasCardPayResultResponseDTOResult**](../Model/OverseasQueryOverseasCardPayResultResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

