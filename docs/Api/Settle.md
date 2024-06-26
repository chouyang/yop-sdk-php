# Yeepay\Yop\Sdk\Settle

All URIs are relative to *http://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**balanceQuery**](Settle.md#balanceQuery) | **GET** /rest/v1.0/settle/balance/query | 待结算金额查询
[**balance_query_v1_0**](Settle.md#balance_query_v1_0) | **GET** /rest/v1.0/settle/balance/query | 待结算金额查询
[**fileGet**](Settle.md#fileGet) | **GET** /yos/v1.0/settle/file/get | 结算对账文件获取接口
[**file_get_v1_0**](Settle.md#file_get_v1_0) | **GET** /yos/v1.0/settle/file/get | 结算对账文件获取接口
[**receiptApply**](Settle.md#receiptApply) | **POST** /rest/v1.0/settle/receipt/apply | 商户申请结算回单
[**receiptGet**](Settle.md#receiptGet) | **GET** /yos/v1.0/settle/receipt/get | 结算回单下载
[**recordsOrderQuery**](Settle.md#recordsOrderQuery) | **GET** /rest/v1.0/settle/records-order/query | 查询结算到账情况
[**recordsQuery**](Settle.md#recordsQuery) | **GET** /rest/v1.0/settle/records/query | 结算记录查询
[**records_query_v1_0**](Settle.md#records_query_v1_0) | **GET** /rest/v1.0/settle/records/query | 结算记录查询
[**selfSettleApply**](Settle.md#selfSettleApply) | **POST** /rest/v1.0/settle/self-settle/apply | 自助结算申请
[**self_settle_apply_v1_0**](Settle.md#self_settle_apply_v1_0) | **POST** /rest/v1.0/settle/self-settle/apply | 自助结算申请
[**settleCardAdd**](Settle.md#settleCardAdd) | **POST** /rest/v1.0/settle/settle-card/add | 新增结算卡
[**settleCardModify**](Settle.md#settleCardModify) | **POST** /rest/v1.0/settle/settle-card/modify | 修改结算卡
[**settleWayModifyRatio**](Settle.md#settleWayModifyRatio) | **POST** /rest/v1.0/settle/settle-way/modify-ratio | 修改结算方向比例
[**settleWayQuery**](Settle.md#settleWayQuery) | **GET** /rest/v1.0/settle/settle-way/query | 查询结算账户
[**settle_card_add_v1_0**](Settle.md#settle_card_add_v1_0) | **POST** /rest/v1.0/settle/settle-card/add | 新增结算卡
[**settle_card_modify_v1_0**](Settle.md#settle_card_modify_v1_0) | **POST** /rest/v1.0/settle/settle-card/modify | 修改结算卡
[**settle_receipt_apply_v1_0**](Settle.md#settle_receipt_apply_v1_0) | **POST** /rest/v1.0/settle/receipt/apply | 商户申请结算回单
[**settle_receipt_get_v1_0**](Settle.md#settle_receipt_get_v1_0) | **GET** /yos/v1.0/settle/receipt/get | 结算回单下载
[**settle_recod_order_query_v1_0**](Settle.md#settle_recod_order_query_v1_0) | **GET** /rest/v1.0/settle/records-order/query | 查询结算到账情况
[**settle_way_modify_ratio_v1_0**](Settle.md#settle_way_modify_ratio_v1_0) | **POST** /rest/v1.0/settle/settle-way/modify-ratio | 修改结算方向比例
[**settle_way_query_v1_0**](Settle.md#settle_way_query_v1_0) | **GET** /rest/v1.0/settle/settle-way/query | 查询结算账户


# **balanceQuery**
BalanceQueryResponse balanceQuery(BalanceQueryRequest request)

待结算金额查询

查询商户自助结算下未结算的交易统计信息

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Settle\SettleClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Settle\Model\BalanceQueryRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setOperatePeriod("ALL");
$request->setEndTime(new \DateTime("2013-10-20 19:20:30"));

try {
    $response = $api_client->balanceQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling SettleClient->balanceQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**| 发起方商户编号。&lt;br&gt;*标准商户收付款方案中此参数与收款商户编号一致；&lt;br&gt;*平台商户收付款方案中此参数为平台商商户编号；&lt;br&gt;*服务商解决方案中，①标准商户收款时，该参数为标准商户商编 ②平台商收款或平台商入驻商户收款时，该参数为平台商商编。 |
 **merchantNo** | **string**| 收款商户商编 |
 **operatePeriod** | **string**| &lt;p&gt;请求类型&lt;br /&gt;查询时间范围。&lt;br /&gt;PERIOD:指定时间范围，按照传入的统计截止时间查询未结算可结算金额&lt;br /&gt;ALL:查询当前全部&lt;/p&gt; &lt;p&gt;不传默认是ALL&amp;nbsp;&lt;/p&gt; | [optional]
 **endTime** | **\DateTime**| 统计截止时间。当查询范围按PERIOD时，需要必填此参数。 | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Settle\Model\SelfSettleQueryResponseDto**](../Model/SelfSettleQueryResponseDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **balance_query_v1_0**
BalanceQueryV10Response balance_query_v1_0(BalanceQueryV10Request request)

待结算金额查询

查询商户自助结算下未结算的交易统计信息

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Settle\SettleClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Settle\Model\BalanceQueryV10Request();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setOperatePeriod("ALL");
$request->setEndTime(new \DateTime("2013-10-20 19:20:30"));

try {
    $response = $api_client->balance_query_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling SettleClient->balance_query_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**| 发起方商户编号。&lt;br&gt;*标准商户收付款方案中此参数与收款商户编号一致；&lt;br&gt;*平台商户收付款方案中此参数为平台商商户编号；&lt;br&gt;*服务商解决方案中，①标准商户收款时，该参数为标准商户商编 ②平台商收款或平台商入驻商户收款时，该参数为平台商商编。 |
 **merchantNo** | **string**| 收款商户商编 |
 **operatePeriod** | **string**| &lt;p&gt;请求类型&lt;br /&gt;查询时间范围。&lt;br /&gt;PERIOD:指定时间范围，按照传入的统计截止时间查询未结算可结算金额&lt;br /&gt;ALL:查询当前全部&lt;/p&gt; &lt;p&gt;不传默认是ALL&amp;nbsp;&lt;/p&gt; | [optional]
 **endTime** | **\DateTime**| 统计截止时间。当查询范围按PERIOD时，需要必填此参数。 | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Settle\Model\SelfSettleQueryResponseDto**](../Model/SelfSettleQueryResponseDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **fileGet**
YosDownloadResponse fileGet(FileGetRequest request)

结算对账文件获取接口

支持商户进行对账文件下载。 受理失败，返回响应错误码；受理成功，返回文件

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Settle\SettleClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Settle\Model\FileGetRequest();
$request->setMerchantNo("merchantNo_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setReceiverMerchantNo("receiverMerchantNo_example");
$request->setSettleRequestNo("settleRequestNo_example");
$request->setSettleDate("settleDate_example");

try {
    $response = $api_client->fileGet($request);
    $response->save('targetFilePath');
}catch (\Exception $e) {
    echo 'Exception when calling SettleClient->fileGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**| &lt;div&gt;&lt;span class&#x3D;\&quot;text-only\&quot; data-eleid&#x3D;\&quot;3\&quot;&gt;商户编号或入账方id&lt;/span&gt;&lt;/div&gt; |
 **parentMerchantNo** | **string**| 发起方商编 |
 **receiverMerchantNo** | **string**| &lt;div&gt;&lt;span class&#x3D;\&quot;text-only\&quot; data-eleid&#x3D;\&quot;5\&quot;&gt;用于下载入账方的结算账单，如果merchantno传入了入账方id，需要传入入账方的归属商编。&lt;/span&gt;&lt;/div&gt; | [optional]
 **settleRequestNo** | **string**| 结算请求号&lt;br&gt;商户发起自助结算时的请求号，当结算日期为空时，此参数必填 | [optional]
 **settleDate** | **string**| 结算日期&lt;br&gt;需要获取的结算文件对应的结算日期，当结算订单号为空时，此参数必填 | [optional]

### Return type
**string**
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/octet-stream

# **file_get_v1_0**
YosDownloadResponse file_get_v1_0(FileGetV10Request request)

结算对账文件获取接口

支持商户进行对账文件下载。 受理失败，返回响应错误码；受理成功，返回文件

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Settle\SettleClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Settle\Model\FileGetV10Request();
$request->setMerchantNo("merchantNo_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setReceiverMerchantNo("receiverMerchantNo_example");
$request->setSettleRequestNo("settleRequestNo_example");
$request->setSettleDate("settleDate_example");

try {
    $response = $api_client->file_get_v1_0($request);
    $response->save('targetFilePath');
}catch (\Exception $e) {
    echo 'Exception when calling SettleClient->file_get_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**| &lt;div&gt;&lt;span class&#x3D;\&quot;text-only\&quot; data-eleid&#x3D;\&quot;3\&quot;&gt;商户编号或入账方id&lt;/span&gt;&lt;/div&gt; |
 **parentMerchantNo** | **string**| 发起方商编 |
 **receiverMerchantNo** | **string**| &lt;div&gt;&lt;span class&#x3D;\&quot;text-only\&quot; data-eleid&#x3D;\&quot;5\&quot;&gt;用于下载入账方的结算账单，如果merchantno传入了入账方id，需要传入入账方的归属商编。&lt;/span&gt;&lt;/div&gt; | [optional]
 **settleRequestNo** | **string**| 结算请求号&lt;br&gt;商户发起自助结算时的请求号，当结算日期为空时，此参数必填 | [optional]
 **settleDate** | **string**| 结算日期&lt;br&gt;需要获取的结算文件对应的结算日期，当结算订单号为空时，此参数必填 | [optional]

### Return type
**string**
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/octet-stream

# **receiptApply**
ReceiptApplyResponse receiptApply(ReceiptApplyRequest request)

商户申请结算回单



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Settle\SettleClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Settle\Model\ReceiptApplyRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Settle\Model\YopSettleReceiptRequestDTO());

try {
    $response = $api_client->receiptApply($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling SettleClient->receiptApply: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Settle\Model\YopSettleReceiptRequestDTO**](../Model/YopSettleReceiptRequestDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Settle\Model\YopSettleReceiptResponseDTO**](../Model/YopSettleReceiptResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **receiptGet**
YosDownloadResponse receiptGet(ReceiptGetRequest request)

结算回单下载



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Settle\SettleClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Settle\Model\ReceiptGetRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setFileId("fileId_example");
$request->setReceiverMerchantNo("receiverMerchantNo_example");

try {
    $response = $api_client->receiptGet($request);
    $response->save('targetFilePath');
}catch (\Exception $e) {
    echo 'Exception when calling SettleClient->receiptGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**| &lt;p&gt;发起方商编号&lt;br /&gt;*标准商户收付款方案中此参数与收款商户编号一致；&lt;br /&gt;*平台商户收付款方案中此参数为平台商商户编号；&lt;br /&gt;*服务商解决方案中，①标准商户收款时，该参数为标准商户商编 ②平台商收款或平台商入驻商户收款时，该参数为平台商商编。&lt;/p&gt; |
 **merchantNo** | **string**| &lt;p&gt;收款商户编号或入账方id&lt;/p&gt; |
 **fileId** | **string**| &lt;p&gt;文件id&lt;/p&gt; |
 **receiverMerchantNo** | **string**| &lt;div&gt;&lt;span class&#x3D;\&quot;text-only\&quot; data-eleid&#x3D;\&quot;5\&quot;&gt;用于下载入账方的结算回单，如果merchantno传入了入账方id，需要传入入账方的归属商编。&lt;/span&gt;&lt;/div&gt; | [optional]

### Return type
**string**
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/octet-stream

# **recordsOrderQuery**
RecordsOrderQueryResponse recordsOrderQuery(RecordsOrderQueryRequest request)

查询结算到账情况

根据订单查询结算详情

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Settle\SettleClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Settle\Model\RecordsOrderQueryRequest();
$request->setOrderId("orderId_example");
$request->setRequestId("requestId_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setBusinessType("businessType_example");
$request->setUniqueOrderNo("uniqueOrderNo_example");
$request->setSettleMerchantNo("settleMerchantNo_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->recordsOrderQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling SettleClient->recordsOrderQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderId** | **string**| &lt;p&gt;商户订单号&lt;/p&gt; |
 **requestId** | **string**| &lt;p&gt;业务请求号&lt;/p&gt; &lt;div data-page-id&#x3D;\&quot;J7D9drX5SossNkxYtkTcDKmxnik\&quot; data-docx-has-block-data&#x3D;\&quot;false\&quot;&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-Hbh5dg4DooxS6Oxe6UBcNR8Mnuf\&quot;&gt;分账时为分账请求号&lt;/div&gt; &lt;/div&gt; |
 **parentMerchantNo** | **string**| &lt;p&gt;发起方商编(平台商)&lt;/p&gt; |
 **businessType** | **string**| &lt;pre&gt;业务类型：目前支持&lt;br /&gt;DIVIDE&lt;/pre&gt; |
 **uniqueOrderNo** | **string**| &lt;p&gt;易宝统一流水号&lt;/p&gt; |
 **settleMerchantNo** | **string**| &lt;p&gt;结算查询商编&lt;/p&gt; |
 **merchantNo** | **string**| &lt;p&gt;订单所属商编&lt;/p&gt; |

### Return type
[**\Yeepay\Yop\Sdk\Service\Settle\Model\SettleRecordOrderQueryResponseDto**](../Model/SettleRecordOrderQueryResponseDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **recordsQuery**
RecordsQueryResponse recordsQuery(RecordsQueryRequest request)

结算记录查询



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Settle\SettleClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Settle\Model\RecordsQueryRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setReceiverMerchantNo("receiverMerchantNo_example");
$request->setSettleRequestNo("settleRequestNo_example");
$request->setSettleRequestBeginTime(new \DateTime("2013-10-20 19:20:30"));
$request->setSettleRequestEndTime(new \DateTime("2013-10-20 19:20:30"));

try {
    $response = $api_client->recordsQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling SettleClient->recordsQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**| 发起方商编 |
 **merchantNo** | **string**| &lt;div&gt;&lt;span class&#x3D;\&quot;text-only\&quot; data-eleid&#x3D;\&quot;3\&quot;&gt;商户编号或入账方id&lt;/span&gt;&lt;/div&gt; |
 **receiverMerchantNo** | **string**| &lt;div&gt;&lt;span class&#x3D;\&quot;text-only\&quot; data-eleid&#x3D;\&quot;5\&quot;&gt;用于查询入账方的结算情况，如果merchantno传入了入账方id，需要传入入账方的归属商编。&lt;/span&gt;&lt;/div&gt; | [optional]
 **settleRequestNo** | **string**| 结算请求号(结算请求号与结算申请起止时间二选一必填) | [optional]
 **settleRequestBeginTime** | **\DateTime**| 结算申请起始时间（结算申请起止时间与结算请求号二选一必填） | [optional]
 **settleRequestEndTime** | **\DateTime**| 结算申请截止时间（结算申请起止时间与结算请求号二选一必填） | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Settle\Model\SettleRecordQueryResponseDto**](../Model/SettleRecordQueryResponseDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **records_query_v1_0**
RecordsQueryV10Response records_query_v1_0(RecordsQueryV10Request request)

结算记录查询



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Settle\SettleClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Settle\Model\RecordsQueryV10Request();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setReceiverMerchantNo("receiverMerchantNo_example");
$request->setSettleRequestNo("settleRequestNo_example");
$request->setSettleRequestBeginTime(new \DateTime("2013-10-20 19:20:30"));
$request->setSettleRequestEndTime(new \DateTime("2013-10-20 19:20:30"));

try {
    $response = $api_client->records_query_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling SettleClient->records_query_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**| 发起方商编 |
 **merchantNo** | **string**| &lt;div&gt;&lt;span class&#x3D;\&quot;text-only\&quot; data-eleid&#x3D;\&quot;3\&quot;&gt;商户编号或入账方id&lt;/span&gt;&lt;/div&gt; |
 **receiverMerchantNo** | **string**| &lt;div&gt;&lt;span class&#x3D;\&quot;text-only\&quot; data-eleid&#x3D;\&quot;5\&quot;&gt;用于查询入账方的结算情况，如果merchantno传入了入账方id，需要传入入账方的归属商编。&lt;/span&gt;&lt;/div&gt; | [optional]
 **settleRequestNo** | **string**| 结算请求号(结算请求号与结算申请起止时间二选一必填) | [optional]
 **settleRequestBeginTime** | **\DateTime**| 结算申请起始时间（结算申请起止时间与结算请求号二选一必填） | [optional]
 **settleRequestEndTime** | **\DateTime**| 结算申请截止时间（结算申请起止时间与结算请求号二选一必填） | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Settle\Model\SettleRecordQueryResponseDto**](../Model/SettleRecordQueryResponseDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **selfSettleApply**
SelfSettleApplyResponse selfSettleApply(SelfSettleApplyRequest request)

自助结算申请

支持商户发起自助结算申请。

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Settle\SettleClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Settle\Model\SelfSettleApplyRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setSettleRequestNo("settleRequestNo_example");
$request->setOperatePeriod("operatePeriod_example");
$request->setEndTime(new \DateTime("2013-10-20 19:20:30"));
$request->setNotifyUrl("notifyUrl_example");
$request->setBankRemark("bankRemark_example");

try {
    $response = $api_client->selfSettleApply($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling SettleClient->selfSettleApply: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **settleRequestNo** | **string**|  | [optional]
 **operatePeriod** | **string**|  | [optional]
 **endTime** | **\DateTime**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **bankRemark** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Settle\Model\SelfSettleResponseDto**](../Model/SelfSettleResponseDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **self_settle_apply_v1_0**
SelfSettleApplyV10Response self_settle_apply_v1_0(SelfSettleApplyV10Request request)

自助结算申请

支持商户发起自助结算申请。

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Settle\SettleClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Settle\Model\SelfSettleApplyV10Request();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setSettleRequestNo("settleRequestNo_example");
$request->setOperatePeriod("operatePeriod_example");
$request->setEndTime(new \DateTime("2013-10-20 19:20:30"));
$request->setNotifyUrl("notifyUrl_example");
$request->setBankRemark("bankRemark_example");

try {
    $response = $api_client->self_settle_apply_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling SettleClient->self_settle_apply_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **settleRequestNo** | **string**|  | [optional]
 **operatePeriod** | **string**|  | [optional]
 **endTime** | **\DateTime**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **bankRemark** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Settle\Model\SelfSettleResponseDto**](../Model/SelfSettleResponseDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **settleCardAdd**
SettleCardAddResponse settleCardAdd(SettleCardAddRequest request)

新增结算卡



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Settle\SettleClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Settle\Model\SettleCardAddRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setBankCardNo("bankCardNo_example");
$request->setBankCardType("bankCardType_example");
$request->setBankCode("bankCode_example");
$request->setBrancgCode("brancgCode_example");
$request->setDefaultSettleCard(true);

try {
    $response = $api_client->settleCardAdd($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling SettleClient->settleCardAdd: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **bankCardNo** | **string**|  | [optional]
 **bankCardType** | **string**|  | [optional]
 **bankCode** | **string**|  | [optional]
 **brancgCode** | **string**|  | [optional]
 **defaultSettleCard** | **bool**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Settle\Model\MerchantSettleCardResponseDTO**](../Model/MerchantSettleCardResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **settleCardModify**
SettleCardModifyResponse settleCardModify(SettleCardModifyRequest request)

修改结算卡

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Settle\SettleClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Settle\Model\SettleCardModifyRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setBankCardNo("bankCardNo_example");
$request->setBankCardType("bankCardType_example");
$request->setBankCode("bankCode_example");
$request->setBrancgCode("brancgCode_example");
$request->setDefaultSettleCard(true);

try {
    $response = $api_client->settleCardModify($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling SettleClient->settleCardModify: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **bankCardNo** | **string**|  | [optional]
 **bankCardType** | **string**|  | [optional]
 **bankCode** | **string**|  | [optional]
 **brancgCode** | **string**|  | [optional]
 **defaultSettleCard** | **bool**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Settle\Model\MerchantSettleCardResponseDTO**](../Model/MerchantSettleCardResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **settleWayModifyRatio**
SettleWayModifyRatioResponse settleWayModifyRatio(SettleWayModifyRatioRequest request)

修改结算方向比例

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Settle\SettleClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Settle\Model\SettleWayModifyRatioRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Settle\Model\ModifySettleWayRatioRequestDto());

try {
    $response = $api_client->settleWayModifyRatio($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling SettleClient->settleWayModifyRatio: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Settle\Model\ModifySettleWayRatioRequestDto**](../Model/ModifySettleWayRatioRequestDto.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Settle\Model\ModifySettleWayRatioResponseDto**](../Model/ModifySettleWayRatioResponseDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **settleWayQuery**
SettleWayQueryResponse settleWayQuery(SettleWayQueryRequest request)

查询结算账户

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Settle\SettleClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Settle\Model\SettleWayQueryRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->settleWayQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling SettleClient->settleWayQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**| 发起方商户编号。&lt;br&gt;*标准商户收付款方案中此参数与收款商户编号一致；&lt;br&gt;*平台商户收付款方案中此参数为平台商商户编号；&lt;br&gt;*服务商解决方案中，①标准商户收款时，该参数为标准商户商编 ②平台商收款或平台商入驻商户收款时，该参数为平台商商编。 |
 **merchantNo** | **string**| 收款商户编号 |

### Return type
[**\Yeepay\Yop\Sdk\Service\Settle\Model\SettleWayQueryYOPResponseDto**](../Model/SettleWayQueryYOPResponseDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **settle_card_add_v1_0**
SettleCardAddV10Response settle_card_add_v1_0(SettleCardAddV10Request request)

新增结算卡



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Settle\SettleClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Settle\Model\SettleCardAddV10Request();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setBankCardNo("bankCardNo_example");
$request->setBankCardType("bankCardType_example");
$request->setBankCode("bankCode_example");
$request->setBrancgCode("brancgCode_example");
$request->setDefaultSettleCard(true);

try {
    $response = $api_client->settle_card_add_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling SettleClient->settle_card_add_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **bankCardNo** | **string**|  | [optional]
 **bankCardType** | **string**|  | [optional]
 **bankCode** | **string**|  | [optional]
 **brancgCode** | **string**|  | [optional]
 **defaultSettleCard** | **bool**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Settle\Model\MerchantSettleCardResponseDTO**](../Model/MerchantSettleCardResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **settle_card_modify_v1_0**
SettleCardModifyV10Response settle_card_modify_v1_0(SettleCardModifyV10Request request)

修改结算卡

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Settle\SettleClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Settle\Model\SettleCardModifyV10Request();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setBankCardNo("bankCardNo_example");
$request->setBankCardType("bankCardType_example");
$request->setBankCode("bankCode_example");
$request->setBrancgCode("brancgCode_example");
$request->setDefaultSettleCard(true);

try {
    $response = $api_client->settle_card_modify_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling SettleClient->settle_card_modify_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **bankCardNo** | **string**|  | [optional]
 **bankCardType** | **string**|  | [optional]
 **bankCode** | **string**|  | [optional]
 **brancgCode** | **string**|  | [optional]
 **defaultSettleCard** | **bool**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Settle\Model\MerchantSettleCardResponseDTO**](../Model/MerchantSettleCardResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **settle_receipt_apply_v1_0**
SettleReceiptApplyV10Response settle_receipt_apply_v1_0(SettleReceiptApplyV10Request request)

商户申请结算回单



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Settle\SettleClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Settle\Model\SettleReceiptApplyV10Request();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Settle\Model\YopSettleReceiptRequestDTO());

try {
    $response = $api_client->settle_receipt_apply_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling SettleClient->settle_receipt_apply_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Settle\Model\YopSettleReceiptRequestDTO**](../Model/YopSettleReceiptRequestDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Settle\Model\YopSettleReceiptResponseDTO**](../Model/YopSettleReceiptResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **settle_receipt_get_v1_0**
YosDownloadResponse settle_receipt_get_v1_0(SettleReceiptGetV10Request request)

结算回单下载



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Settle\SettleClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Settle\Model\SettleReceiptGetV10Request();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setFileId("fileId_example");
$request->setReceiverMerchantNo("receiverMerchantNo_example");

try {
    $response = $api_client->settle_receipt_get_v1_0($request);
    $response->save('targetFilePath');
}catch (\Exception $e) {
    echo 'Exception when calling SettleClient->settle_receipt_get_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**| &lt;p&gt;发起方商编号&lt;br /&gt;*标准商户收付款方案中此参数与收款商户编号一致；&lt;br /&gt;*平台商户收付款方案中此参数为平台商商户编号；&lt;br /&gt;*服务商解决方案中，①标准商户收款时，该参数为标准商户商编 ②平台商收款或平台商入驻商户收款时，该参数为平台商商编。&lt;/p&gt; |
 **merchantNo** | **string**| &lt;p&gt;收款商户编号或入账方id&lt;/p&gt; |
 **fileId** | **string**| &lt;p&gt;文件id&lt;/p&gt; |
 **receiverMerchantNo** | **string**| &lt;div&gt;&lt;span class&#x3D;\&quot;text-only\&quot; data-eleid&#x3D;\&quot;5\&quot;&gt;用于下载入账方的结算回单，如果merchantno传入了入账方id，需要传入入账方的归属商编。&lt;/span&gt;&lt;/div&gt; | [optional]

### Return type
**string**
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/octet-stream

# **settle_recod_order_query_v1_0**
SettleRecodOrderQueryV10Response settle_recod_order_query_v1_0(SettleRecodOrderQueryV10Request request)

查询结算到账情况

根据订单查询结算详情

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Settle\SettleClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Settle\Model\SettleRecodOrderQueryV10Request();
$request->setOrderId("orderId_example");
$request->setRequestId("requestId_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setBusinessType("businessType_example");
$request->setUniqueOrderNo("uniqueOrderNo_example");
$request->setSettleMerchantNo("settleMerchantNo_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->settle_recod_order_query_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling SettleClient->settle_recod_order_query_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderId** | **string**| &lt;p&gt;商户订单号&lt;/p&gt; |
 **requestId** | **string**| &lt;p&gt;业务请求号&lt;/p&gt; &lt;div data-page-id&#x3D;\&quot;J7D9drX5SossNkxYtkTcDKmxnik\&quot; data-docx-has-block-data&#x3D;\&quot;false\&quot;&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-Hbh5dg4DooxS6Oxe6UBcNR8Mnuf\&quot;&gt;分账时为分账请求号&lt;/div&gt; &lt;/div&gt; |
 **parentMerchantNo** | **string**| &lt;p&gt;发起方商编(平台商)&lt;/p&gt; |
 **businessType** | **string**| &lt;pre&gt;业务类型：目前支持&lt;br /&gt;DIVIDE&lt;/pre&gt; |
 **uniqueOrderNo** | **string**| &lt;p&gt;易宝统一流水号&lt;/p&gt; |
 **settleMerchantNo** | **string**| &lt;p&gt;结算查询商编&lt;/p&gt; |
 **merchantNo** | **string**| &lt;p&gt;订单所属商编&lt;/p&gt; |

### Return type
[**\Yeepay\Yop\Sdk\Service\Settle\Model\SettleRecordOrderQueryResponseDto**](../Model/SettleRecordOrderQueryResponseDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **settle_way_modify_ratio_v1_0**
SettleWayModifyRatioV10Response settle_way_modify_ratio_v1_0(SettleWayModifyRatioV10Request request)

修改结算方向比例

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Settle\SettleClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Settle\Model\SettleWayModifyRatioV10Request();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Settle\Model\ModifySettleWayRatioRequestDto());

try {
    $response = $api_client->settle_way_modify_ratio_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling SettleClient->settle_way_modify_ratio_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Settle\Model\ModifySettleWayRatioRequestDto**](../Model/ModifySettleWayRatioRequestDto.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Settle\Model\ModifySettleWayRatioResponseDto**](../Model/ModifySettleWayRatioResponseDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **settle_way_query_v1_0**
SettleWayQueryV10Response settle_way_query_v1_0(SettleWayQueryV10Request request)

查询结算账户

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Settle\SettleClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Settle\Model\SettleWayQueryV10Request();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->settle_way_query_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling SettleClient->settle_way_query_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**| 发起方商户编号。&lt;br&gt;*标准商户收付款方案中此参数与收款商户编号一致；&lt;br&gt;*平台商户收付款方案中此参数为平台商商户编号；&lt;br&gt;*服务商解决方案中，①标准商户收款时，该参数为标准商户商编 ②平台商收款或平台商入驻商户收款时，该参数为平台商商编。 |
 **merchantNo** | **string**| 收款商户编号 |

### Return type
[**\Yeepay\Yop\Sdk\Service\Settle\Model\SettleWayQueryYOPResponseDto**](../Model/SettleWayQueryYOPResponseDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

