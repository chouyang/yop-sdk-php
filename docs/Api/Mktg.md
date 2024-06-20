# Yeepay\Yop\Sdk\Mktg

All URIs are relative to *http://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountbalanceQuery**](Mktg.md#accountbalanceQuery) | **GET** /rest/v1.0/mktg/accountbalance/query | 账户余额查询
[**accountcloseApply**](Mktg.md#accountcloseApply) | **POST** /rest/v1.0/mktg/accountclose/apply | 销户申请
[**accountcloseConfirm**](Mktg.md#accountcloseConfirm) | **POST** /rest/v1.0/mktg/accountclose/confirm | 销户确认
[**accountcloseQuery**](Mktg.md#accountcloseQuery) | **GET** /rest/v1.0/mktg/accountclose/query | 销户记录查询
[**accountdetailsPageQuery**](Mktg.md#accountdetailsPageQuery) | **GET** /rest/v1.0/mktg/accountdetails/page-query | 账户明细分页查询
[**accountstatusQuery**](Mktg.md#accountstatusQuery) | **GET** /rest/v1.0/mktg/accountstatus/query | 账户状态查询
[**bindbankcardApply**](Mktg.md#bindbankcardApply) | **POST** /rest/v1.0/mktg/bindbankcard/apply | 换绑卡申请
[**bindbankcardConfirm**](Mktg.md#bindbankcardConfirm) | **POST** /rest/v1.0/mktg/bindbankcard/confirm | 换绑卡确认
[**bindbankcardQuery**](Mktg.md#bindbankcardQuery) | **POST** /rest/v1.0/mktg/bindbankcard/query | 换绑卡查询
[**openuserApply**](Mktg.md#openuserApply) | **POST** /rest/v1.0/mktg/openuser/apply | 营销用户开户申请
[**openuserQuery**](Mktg.md#openuserQuery) | **GET** /rest/v1.0/mktg/openuser/query | 营销用户开户查询
[**smscodeSend**](Mktg.md#smscodeSend) | **POST** /rest/v1.0/mktg/smscode/send | 营销短信申请
[**tradeorderApply**](Mktg.md#tradeorderApply) | **POST** /rest/v1.0/mktg/tradeorder/apply | 营销充值提现申请
[**tradeorderConfirm**](Mktg.md#tradeorderConfirm) | **POST** /rest/v1.0/mktg/tradeorder/confirm | 营销充值提现确认
[**tradeorderQuery**](Mktg.md#tradeorderQuery) | **GET** /rest/v1.0/mktg/tradeorder/query | 营销充值提现查询
[**useractivateApply**](Mktg.md#useractivateApply) | **POST** /rest/v1.0/mktg/useractivate/apply | 营销用户激活申请
[**useractivateConfirm**](Mktg.md#useractivateConfirm) | **POST** /rest/v1.0/mktg/useractivate/confirm | 营销用户激活确认
[**useractivateQuery**](Mktg.md#useractivateQuery) | **GET** /rest/v1.0/mktg/useractivate/query | 营销用户激活查询
[**userinfoModify**](Mktg.md#userinfoModify) | **POST** /rest/v1.0/mktg/userinfo/modify | 修改用户信息
[**useropenQuery**](Mktg.md#useropenQuery) | **GET** /rest/v1.0/mktg/useropen/query | 用户开户查询


# **accountbalanceQuery**
AccountbalanceQueryResponse accountbalanceQuery(AccountbalanceQueryRequest request)

账户余额查询

账户余额查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mktg\MktgClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mktg\Model\AccountbalanceQueryRequest();
$request->setMerchantNo("merchantNo_example");
$request->setBankCardNo("bankCardNo_example");

try {
    $response = $api_client->accountbalanceQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MktgClient->accountbalanceQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**|  |
 **bankCardNo** | **string**|  |

### Return type
[**\Yeepay\Yop\Sdk\Service\Mktg\Model\AccountbalanceQueryAccountBalanceQueryResponseResult**](../Model/AccountbalanceQueryAccountBalanceQueryResponseResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **accountcloseApply**
AccountcloseApplyResponse accountcloseApply(AccountcloseApplyRequest request)

销户申请

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mktg\MktgClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mktg\Model\AccountcloseApplyRequest();
$request->setMerchantNo("merchantNo_example");
$request->setCloseOrderId("closeOrderId_example");
$request->setBankCardNo("bankCardNo_example");
$request->setNotifyUrl("notifyUrl_example");

try {
    $response = $api_client->accountcloseApply($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MktgClient->accountcloseApply: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**|  | [optional]
 **closeOrderId** | **string**|  | [optional]
 **bankCardNo** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mktg\Model\AccountcloseApplyAccountCloseApplyResponseResult**](../Model/AccountcloseApplyAccountCloseApplyResponseResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **accountcloseConfirm**
AccountcloseConfirmResponse accountcloseConfirm(AccountcloseConfirmRequest request)

销户确认

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mktg\MktgClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mktg\Model\AccountcloseConfirmRequest();
$request->setMerchantNo("merchantNo_example");
$request->setCloseOrderId("closeOrderId_example");
$request->setUniqueCloseNo("uniqueCloseNo_example");
$request->setSmsCode("smsCode_example");

try {
    $response = $api_client->accountcloseConfirm($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MktgClient->accountcloseConfirm: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**|  | [optional]
 **closeOrderId** | **string**|  | [optional]
 **uniqueCloseNo** | **string**|  | [optional]
 **smsCode** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mktg\Model\AccountcloseConfirmAccountCloseConfirmResponseResult**](../Model/AccountcloseConfirmAccountCloseConfirmResponseResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **accountcloseQuery**
AccountcloseQueryResponse accountcloseQuery(AccountcloseQueryRequest request)

销户记录查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mktg\MktgClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mktg\Model\AccountcloseQueryRequest();
$request->setMerchantNo("merchantNo_example");
$request->setCloseOrderId("closeOrderId_example");
$request->setUniqueCloseNo("uniqueCloseNo_example");

try {
    $response = $api_client->accountcloseQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MktgClient->accountcloseQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**|  |
 **closeOrderId** | **string**|  | [optional]
 **uniqueCloseNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mktg\Model\AccountcloseQueryAccountCloseQueryResponseResult**](../Model/AccountcloseQueryAccountCloseQueryResponseResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **accountdetailsPageQuery**
AccountdetailsPageQueryResponse accountdetailsPageQuery(AccountdetailsPageQueryRequest request)

账户明细分页查询

账户明细分页查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mktg\MktgClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mktg\Model\AccountdetailsPageQueryRequest();
$request->setMerchantNo("merchantNo_example");
$request->setTrxType("trxType_example");
$request->setBankCardNo("bankCardNo_example");
$request->setStartDate("startDate_example");
$request->setEndDate("endDate_example");
$request->setPageNo(56);
$request->setPageSize(56);

try {
    $response = $api_client->accountdetailsPageQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MktgClient->accountdetailsPageQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**|  |
 **trxType** | **string**| 交易类型&lt;br&gt;可选项如下:&lt;br&gt;ALL:全部&lt;br&gt;CONSUME:消费&lt;br&gt;REFUND:退款&lt;br&gt;WITHDRAW:提现&lt;br&gt;RECHARGE:充值 |
 **bankCardNo** | **string**|  |
 **startDate** | **string**| 格式:yyyy-MM-dd |
 **endDate** | **string**| 格式:yyyy-MM-dd |
 **pageNo** | **int**|  |
 **pageSize** | **int**|  |

### Return type
[**\Yeepay\Yop\Sdk\Service\Mktg\Model\AccountdetailsPageQueryAccountBusinessPageQueryResponseResult**](../Model/AccountdetailsPageQueryAccountBusinessPageQueryResponseResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **accountstatusQuery**
AccountstatusQueryResponse accountstatusQuery(AccountstatusQueryRequest request)

账户状态查询

账户状态查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mktg\MktgClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mktg\Model\AccountstatusQueryRequest();
$request->setMerchantNo("merchantNo_example");
$request->setBankCardNo("bankCardNo_example");

try {
    $response = $api_client->accountstatusQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MktgClient->accountstatusQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**|  |
 **bankCardNo** | **string**|  |

### Return type
[**\Yeepay\Yop\Sdk\Service\Mktg\Model\AccountstatusQueryAccountStatusQueryResponseResult**](../Model/AccountstatusQueryAccountStatusQueryResponseResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **bindbankcardApply**
BindbankcardApplyResponse bindbankcardApply(BindbankcardApplyRequest request)

换绑卡申请

换绑卡申请

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mktg\MktgClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mktg\Model\BindbankcardApplyRequest();
$request->setMerchantNo("merchantNo_example");
$request->setBindOrderId("bindOrderId_example");
$request->setMarketingNo("marketingNo_example");
$request->setBankCardNo("bankCardNo_example");
$request->setBindBankCardNo("bindBankCardNo_example");
$request->setNotifyUrl("notifyUrl_example");

try {
    $response = $api_client->bindbankcardApply($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MktgClient->bindbankcardApply: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**|  | [optional]
 **bindOrderId** | **string**|  | [optional]
 **marketingNo** | **string**|  | [optional]
 **bankCardNo** | **string**|  | [optional]
 **bindBankCardNo** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mktg\Model\BindbankcardApplyBindBankCardApplyResponseResult**](../Model/BindbankcardApplyBindBankCardApplyResponseResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **bindbankcardConfirm**
BindbankcardConfirmResponse bindbankcardConfirm(BindbankcardConfirmRequest request)

换绑卡确认

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mktg\MktgClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mktg\Model\BindbankcardConfirmRequest();
$request->setMerchantNo("merchantNo_example");
$request->setBindOrderId("bindOrderId_example");
$request->setUniqueBindNo("uniqueBindNo_example");
$request->setSmsCode("smsCode_example");

try {
    $response = $api_client->bindbankcardConfirm($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MktgClient->bindbankcardConfirm: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**|  | [optional]
 **bindOrderId** | **string**|  | [optional]
 **uniqueBindNo** | **string**|  | [optional]
 **smsCode** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mktg\Model\BindbankcardConfirmBindBankCardConfirmResponseResult**](../Model/BindbankcardConfirmBindBankCardConfirmResponseResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **bindbankcardQuery**
BindbankcardQueryResponse bindbankcardQuery(BindbankcardQueryRequest request)

换绑卡查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mktg\MktgClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mktg\Model\BindbankcardQueryRequest();
$request->setMerchantNo("merchantNo_example");
$request->setBindOrderId("bindOrderId_example");
$request->setUniqueBindNo("uniqueBindNo_example");

try {
    $response = $api_client->bindbankcardQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MktgClient->bindbankcardQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**|  | [optional]
 **bindOrderId** | **string**|  | [optional]
 **uniqueBindNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mktg\Model\BindbankcardQueryBindBankCardQueryResponseResult**](../Model/BindbankcardQueryBindBankCardQueryResponseResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **openuserApply**
OpenuserApplyResponse openuserApply(OpenuserApplyRequest request)

营销用户开户申请

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mktg\MktgClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mktg\Model\OpenuserApplyRequest();
$request->setMerchantNo("merchantNo_example");
$request->setOpenOrderId("openOrderId_example");
$request->setMarketingNo("marketingNo_example");
$request->setMerchantUserNo("merchantUserNo_example");
$request->setProfession("profession_example");
$request->setSex("sex_example");
$request->setBankCode("bankCode_example");
$request->setAccountLevel("accountLevel_example");
$request->setUserName("userName_example");
$request->setIdCardType("idCardType_example");
$request->setIdCardNo("idCardNo_example");
$request->setIdAddress("idAddress_example");
$request->setIdStartDate("idStartDate_example");
$request->setIdEndDate("idEndDate_example");
$request->setIdIssuingAuthority("idIssuingAuthority_example");
$request->setNationality("nationality_example");
$request->setMobile("mobile_example");
$request->setBindBankCardNo("bindBankCardNo_example");
$request->setCity("city_example");
$request->setNotifyUrl("notifyUrl_example");

try {
    $response = $api_client->openuserApply($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MktgClient->openuserApply: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**|  | [optional]
 **openOrderId** | **string**|  | [optional]
 **marketingNo** | **string**|  | [optional]
 **merchantUserNo** | **string**|  | [optional]
 **profession** | **string**|  | [optional]
 **sex** | **string**|  | [optional]
 **bankCode** | **string**|  | [optional]
 **accountLevel** | **string**|  | [optional]
 **userName** | **string**|  | [optional]
 **idCardType** | **string**|  | [optional]
 **idCardNo** | **string**|  | [optional]
 **idAddress** | **string**|  | [optional]
 **idStartDate** | **string**|  | [optional]
 **idEndDate** | **string**|  | [optional]
 **idIssuingAuthority** | **string**|  | [optional]
 **nationality** | **string**|  | [optional]
 **mobile** | **string**|  | [optional]
 **bindBankCardNo** | **string**|  | [optional]
 **city** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mktg\Model\OpenuserApplyMerchantUserOpenResponseResult**](../Model/OpenuserApplyMerchantUserOpenResponseResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **openuserQuery**
OpenuserQueryResponse openuserQuery(OpenuserQueryRequest request)

营销用户开户查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mktg\MktgClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mktg\Model\OpenuserQueryRequest();
$request->setMerchantNo("merchantNo_example");
$request->setOpenOrderId("openOrderId_example");
$request->setUniqueOpenNo("uniqueOpenNo_example");

try {
    $response = $api_client->openuserQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MktgClient->openuserQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**|  |
 **openOrderId** | **string**|  | [optional]
 **uniqueOpenNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mktg\Model\OpenuserQueryMerchantUserRecordQueryResponseResult**](../Model/OpenuserQueryMerchantUserRecordQueryResponseResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **smscodeSend**
SmscodeSendResponse smscodeSend(SmscodeSendRequest request)

营销短信申请

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mktg\MktgClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mktg\Model\SmscodeSendRequest();
$request->setMerchantNo("merchantNo_example");
$request->setOrderId("orderId_example");
$request->setOrderType("orderType_example");

try {
    $response = $api_client->smscodeSend($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MktgClient->smscodeSend: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**|  | [optional]
 **orderId** | **string**|  | [optional]
 **orderType** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mktg\Model\SmscodeSendSendSmsResponseResult**](../Model/SmscodeSendSendSmsResponseResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **tradeorderApply**
TradeorderApplyResponse tradeorderApply(TradeorderApplyRequest request)

营销充值提现申请

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mktg\MktgClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mktg\Model\TradeorderApplyRequest();
$request->setMerchantNo("merchantNo_example");
$request->setTradeOrderId("tradeOrderId_example");
$request->setMarketingNo("marketingNo_example");
$request->setBankCardNo("bankCardNo_example");
$request->setTrxType("trxType_example");
$request->setAmount(1.2);
$request->setNotifyUrl("notifyUrl_example");

try {
    $response = $api_client->tradeorderApply($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MktgClient->tradeorderApply: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**|  | [optional]
 **tradeOrderId** | **string**|  | [optional]
 **marketingNo** | **string**|  | [optional]
 **bankCardNo** | **string**|  | [optional]
 **trxType** | **string**|  | [optional]
 **amount** | **float**|  | [optional]
 **notifyUrl** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mktg\Model\TradeorderApplyTradeOrderApplyResponseResult**](../Model/TradeorderApplyTradeOrderApplyResponseResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **tradeorderConfirm**
TradeorderConfirmResponse tradeorderConfirm(TradeorderConfirmRequest request)

营销充值提现确认

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mktg\MktgClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mktg\Model\TradeorderConfirmRequest();
$request->setMerchantNo("merchantNo_example");
$request->setTradeOrderId("tradeOrderId_example");
$request->setUniqueTradeNo("uniqueTradeNo_example");
$request->setTrxType("trxType_example");
$request->setSmsCode("smsCode_example");

try {
    $response = $api_client->tradeorderConfirm($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MktgClient->tradeorderConfirm: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**|  | [optional]
 **tradeOrderId** | **string**|  | [optional]
 **uniqueTradeNo** | **string**|  | [optional]
 **trxType** | **string**|  | [optional]
 **smsCode** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mktg\Model\TradeorderConfirmTradeOrderConfirmResponseResult**](../Model/TradeorderConfirmTradeOrderConfirmResponseResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **tradeorderQuery**
TradeorderQueryResponse tradeorderQuery(TradeorderQueryRequest request)

营销充值提现查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mktg\MktgClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mktg\Model\TradeorderQueryRequest();
$request->setMerchantNo("merchantNo_example");
$request->setTrxType("trxType_example");
$request->setTradeOrderId("tradeOrderId_example");
$request->setUniqueTradeNo("uniqueTradeNo_example");

try {
    $response = $api_client->tradeorderQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MktgClient->tradeorderQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**|  |
 **trxType** | **string**| 交易类型&lt;br&gt;可选项如下:&lt;br&gt;WITHDRAW:提现&lt;br&gt;RECHARGE:充值 |
 **tradeOrderId** | **string**|  | [optional]
 **uniqueTradeNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mktg\Model\TradeorderQueryTradeOrderQueryResponseResult**](../Model/TradeorderQueryTradeOrderQueryResponseResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **useractivateApply**
UseractivateApplyResponse useractivateApply(UseractivateApplyRequest request)

营销用户激活申请

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mktg\MktgClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mktg\Model\UseractivateApplyRequest();
$request->setMerchantNo("merchantNo_example");
$request->setActivateOrderId("activateOrderId_example");
$request->setMarketingNo("marketingNo_example");
$request->setBankCardNo("bankCardNo_example");

try {
    $response = $api_client->useractivateApply($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MktgClient->useractivateApply: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**|  | [optional]
 **activateOrderId** | **string**|  | [optional]
 **marketingNo** | **string**|  | [optional]
 **bankCardNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mktg\Model\UseractivateApplyMerchantUserActivateResponseResult**](../Model/UseractivateApplyMerchantUserActivateResponseResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **useractivateConfirm**
UseractivateConfirmResponse useractivateConfirm(UseractivateConfirmRequest request)

营销用户激活确认

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mktg\MktgClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mktg\Model\UseractivateConfirmRequest();
$request->setMerchantNo("merchantNo_example");
$request->setActivateOrderId("activateOrderId_example");
$request->setUniqueActivateNo("uniqueActivateNo_example");
$request->setSmsCode("smsCode_example");

try {
    $response = $api_client->useractivateConfirm($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MktgClient->useractivateConfirm: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**|  | [optional]
 **activateOrderId** | **string**|  | [optional]
 **uniqueActivateNo** | **string**|  | [optional]
 **smsCode** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mktg\Model\UseractivateConfirmMerchantUserActivateConfirmResponseResult**](../Model/UseractivateConfirmMerchantUserActivateConfirmResponseResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **useractivateQuery**
UseractivateQueryResponse useractivateQuery(UseractivateQueryRequest request)

营销用户激活查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mktg\MktgClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mktg\Model\UseractivateQueryRequest();
$request->setMerchantNo("merchantNo_example");
$request->setActivateOrderId("activateOrderId_example");
$request->setUniqueActivateNo("uniqueActivateNo_example");

try {
    $response = $api_client->useractivateQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MktgClient->useractivateQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**|  |
 **activateOrderId** | **string**|  | [optional]
 **uniqueActivateNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mktg\Model\UseractivateQueryMerchantUserActivateQueryResponseResult**](../Model/UseractivateQueryMerchantUserActivateQueryResponseResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **userinfoModify**
UserinfoModifyResponse userinfoModify(UserinfoModifyRequest request)

修改用户信息

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mktg\MktgClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mktg\Model\UserinfoModifyRequest();
$request->setMerchantNo("merchantNo_example");
$request->setInfoOrderId("infoOrderId_example");
$request->setBankCardNo("bankCardNo_example");
$request->setUserName("userName_example");
$request->setMobile("mobile_example");
$request->setIdCardType("idCardType_example");
$request->setIdCardNo("idCardNo_example");

try {
    $response = $api_client->userinfoModify($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MktgClient->userinfoModify: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**|  | [optional]
 **infoOrderId** | **string**|  | [optional]
 **bankCardNo** | **string**|  | [optional]
 **userName** | **string**|  | [optional]
 **mobile** | **string**|  | [optional]
 **idCardType** | **string**|  | [optional]
 **idCardNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mktg\Model\UserinfoModifyMerchantUserInfoModifyResponseResult**](../Model/UserinfoModifyMerchantUserInfoModifyResponseResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **useropenQuery**
UseropenQueryResponse useropenQuery(UseropenQueryRequest request)

用户开户查询

用户开户查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mktg\MktgClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mktg\Model\UseropenQueryRequest();
$request->setMerchantNo("merchantNo_example");
$request->setMarketingNo("marketingNo_example");
$request->setBankCode("bankCode_example");
$request->setIdCardType("idCardType_example");
$request->setIdCardNo("idCardNo_example");

try {
    $response = $api_client->useropenQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MktgClient->useropenQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**|  |
 **marketingNo** | **string**|  |
 **bankCode** | **string**|  |
 **idCardType** | **string**| 证件类型&lt;br&gt;可选项如下:&lt;br&gt;ID_CARD:身份证 |
 **idCardNo** | **string**|  |

### Return type
[**\Yeepay\Yop\Sdk\Service\Mktg\Model\UseropenQueryAccountOpenInfoQueryResponseResult**](../Model/UseropenQueryAccountOpenInfoQueryResponseResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

