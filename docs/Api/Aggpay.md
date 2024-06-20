# Yeepay\Yop\Sdk\Aggpay

All URIs are relative to *http://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**agg_attach_report_v1_0**](Aggpay.md#agg_attach_report_v1_0) | **POST** /rest/v1.0/aggpay/report/attach | 聚合资质提交
[**agg_close_order_v1_0**](Aggpay.md#agg_close_order_v1_0) | **POST** /rest/v1.0/aggpay/close-order | 聚合关单
[**agg_report_query_v1_0**](Aggpay.md#agg_report_query_v1_0) | **GET** /rest/v1.0/aggpay/report/query | 查询渠道报备信息
[**agg_report_update_v1_0**](Aggpay.md#agg_report_update_v1_0) | **POST** /rest/v1.0/aggpay/report/update | 修改渠道报备信息
[**closeOrder**](Aggpay.md#closeOrder) | **POST** /rest/v1.0/aggpay/close-order | 聚合关单
[**complaintWechatDetails**](Aggpay.md#complaintWechatDetails) | **GET** /rest/v1.0/aggpay/complaint/wechat/details | 查询投诉订单详情
[**complaintWechatDownloadPic**](Aggpay.md#complaintWechatDownloadPic) | **GET** /yos/v1.0/aggpay/complaint/wechat/download-pic | 图片下载
[**complaintWechatFeedback**](Aggpay.md#complaintWechatFeedback) | **POST** /rest/v1.0/aggpay/complaint/wechat/feedback | 回复用户处理内容
[**complaintWechatList**](Aggpay.md#complaintWechatList) | **GET** /rest/v1.0/aggpay/complaint/wechat/list | 查询投诉订单列表
[**complaintWechatNegotiationHistory**](Aggpay.md#complaintWechatNegotiationHistory) | **GET** /rest/v1.0/aggpay/complaint/wechat/negotiation-history | 查询投诉协商历史
[**complaintWechatSuccess**](Aggpay.md#complaintWechatSuccess) | **POST** /rest/v1.0/aggpay/complaint/wechat/success | 反馈处理完成
[**creditScoreCancel**](Aggpay.md#creditScoreCancel) | **POST** /rest/v1.0/aggpay/creditscore-cancel | 信用分取消
[**creditScoreCreate**](Aggpay.md#creditScoreCreate) | **POST** /rest/v1.0/aggpay/creditscore-create | 信用分创建
[**creditScoreModify**](Aggpay.md#creditScoreModify) | **POST** /rest/v1.0/aggpay/creditscore-modify | 信用分修改
[**creditScoreQuery**](Aggpay.md#creditScoreQuery) | **GET** /rest/v1.0/aggpay/creditscore-query | 信用分查询
[**creditScoreSync**](Aggpay.md#creditScoreSync) | **POST** /rest/v1.0/aggpay/creditscore-sync | 信用分同步
[**creditScorecomplete**](Aggpay.md#creditScorecomplete) | **POST** /rest/v1.0/aggpay/creditscore-complete | 信用分完结
[**creditscoreCancel**](Aggpay.md#creditscoreCancel) | **POST** /rest/v1.0/aggpay/creditscore-cancel | 信用分取消
[**creditscoreComplete**](Aggpay.md#creditscoreComplete) | **POST** /rest/v1.0/aggpay/creditscore-complete | 信用分完结
[**creditscoreCreate**](Aggpay.md#creditscoreCreate) | **POST** /rest/v1.0/aggpay/creditscore-create | 信用分创建
[**creditscoreModify**](Aggpay.md#creditscoreModify) | **POST** /rest/v1.0/aggpay/creditscore-modify | 信用分修改
[**creditscoreQuery**](Aggpay.md#creditscoreQuery) | **GET** /rest/v1.0/aggpay/creditscore-query | 信用分查询
[**creditscoreSync**](Aggpay.md#creditscoreSync) | **POST** /rest/v1.0/aggpay/creditscore-sync | 信用分同步
[**getAuthInfo**](Aggpay.md#getAuthInfo) | **GET** /rest/v1.0/aggpay/get-auth-info | 获取刷脸付调用凭证
[**miniprogramDetails**](Aggpay.md#miniprogramDetails) | **POST** /rest/v1.0/aggpay/miniprogram-details | 查询小程序投诉详情
[**miniprogramFeedback**](Aggpay.md#miniprogramFeedback) | **POST** /rest/v1.0/aggpay/miniprogram-feedback | 商家回应/申诉小程序投诉
[**miniprogramNegotiationHistory**](Aggpay.md#miniprogramNegotiationHistory) | **POST** /rest/v1.0/aggpay/miniprogram-negotiation-history | 查询小程序投诉协商历史
[**pay**](Aggpay.md#pay) | **POST** /rest/v1.0/aggpay/pay | 付款码支付
[**payLink**](Aggpay.md#payLink) | **POST** /rest/v1.0/aggpay/pay-link | 生成聚合订单码
[**prePay**](Aggpay.md#prePay) | **POST** /rest/v1.0/aggpay/pre-pay | 聚合支付统一下单
[**queryComplaintNegotiationHistory**](Aggpay.md#queryComplaintNegotiationHistory) | **POST** /rest/v1.0/aggpay/miniprogram-negotiation-history | 查询小程序投诉协商历史
[**queryMiniProgramDetail**](Aggpay.md#queryMiniProgramDetail) | **POST** /rest/v1.0/aggpay/miniprogram-details | 查询小程序投诉详情
[**queryUserid**](Aggpay.md#queryUserid) | **POST** /rest/v1.0/aggpay/query-userid | 付款码查询用户ID
[**reportAttach**](Aggpay.md#reportAttach) | **POST** /rest/v1.0/aggpay/report/attach | 聚合资质提交
[**reportQuery**](Aggpay.md#reportQuery) | **GET** /rest/v1.0/aggpay/report/query | 查询渠道报备信息
[**reportUpdate**](Aggpay.md#reportUpdate) | **POST** /rest/v1.0/aggpay/report/update | 修改渠道报备信息
[**shareTokenGenerate**](Aggpay.md#shareTokenGenerate) | **POST** /rest/v1.0/aggpay/share-token/generate | 生成支付宝吱口令
[**shareTokenMarketQuery**](Aggpay.md#shareTokenMarketQuery) | **GET** /rest/v1.0/aggpay/share-token/market-query | 支付宝前置咨询
[**sign**](Aggpay.md#sign) | **POST** /rest/v1.0/aggpay/sign | 签约
[**signQuery**](Aggpay.md#signQuery) | **GET** /rest/v1.0/aggpay/sign-query | 签约查询
[**tutelagePrePay**](Aggpay.md#tutelagePrePay) | **POST** /rest/v1.0/aggpay/tutelage/pre-pay | 聚合支付托管下单
[**unsign**](Aggpay.md#unsign) | **POST** /rest/v1.0/aggpay/unsign | 解约
[**violationWechatChannel**](Aggpay.md#violationWechatChannel) | **GET** /rest/v1.0/aggpay/violation/wechat/channel | 微信违规查询接口(服务商/平台商版)
[**wechatComplaintFeedback**](Aggpay.md#wechatComplaintFeedback) | **POST** /rest/v1.0/aggpay/miniprogram-feedback | 商家回应/申诉小程序投诉
[**wechatConfigAdd**](Aggpay.md#wechatConfigAdd) | **POST** /rest/v1.0/aggpay/wechat-config/add | 公众号配置接口
[**wechatConfigAddV2**](Aggpay.md#wechatConfigAddV2) | **POST** /rest/v2.0/aggpay/wechat-config/add | 公众号配置接口
[**wechatConfigQuery**](Aggpay.md#wechatConfigQuery) | **GET** /rest/v1.0/aggpay/wechat-config/query | 公众号配置查询
[**wechatConfigQueryV2**](Aggpay.md#wechatConfigQueryV2) | **GET** /rest/v2.0/aggpay/wechat-config/query | 公众号配置查询


# **agg_attach_report_v1_0**
AggAttachReportV10Response agg_attach_report_v1_0(AggAttachReportV10Request request)

聚合资质提交



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Aggpay\AggpayClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Aggpay\Model\AggAttachReportV10Request();
$request->setChannel("channel_example");
$request->setMainChannelNo("mainChannelNo_example");
$request->setMainReportMerchantNo("mainReportMerchantNo_example");
$request->setMerchantNoList("10040010000,10040010000");
$request->setAuthFileName("authFileName_example");
$request->setAuthFileUrl("authFileUrl_example");
$request->setGroupName("groupName_example");
$request->setRequestReason("requestReason_example");
$request->setPayWayList("payWayList_example");
$request->setNotifyUrl("notifyUrl_example");

try {
    $response = $api_client->agg_attach_report_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AggpayClient->agg_attach_report_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel** | **string**|  | [optional]
 **mainChannelNo** | **string**|  | [optional]
 **mainReportMerchantNo** | **string**|  | [optional]
 **merchantNoList** | **string**|  | [optional]
 **authFileName** | **string**|  | [optional]
 **authFileUrl** | **string**|  | [optional]
 **groupName** | **string**|  | [optional]
 **requestReason** | **string**|  | [optional]
 **payWayList** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Aggpay\Model\AttachReportResponseDTO**](../Model/AttachReportResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **agg_close_order_v1_0**
AggCloseOrderV10Response agg_close_order_v1_0(AggCloseOrderV10Request request)

聚合关单

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Aggpay\AggpayClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Aggpay\Model\AggCloseOrderV10Request();
$request->setOrderId("orderId_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setUniqueOrderNo("uniqueOrderNo_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->agg_close_order_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AggpayClient->agg_close_order_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderId** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]
 **uniqueOrderNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Aggpay\Model\CloseOrderResponseDTO**](../Model/CloseOrderResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **agg_report_query_v1_0**
AggReportQueryV10Response agg_report_query_v1_0(AggReportQueryV10Request request)

查询渠道报备信息



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Aggpay\AggpayClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Aggpay\Model\AggReportQueryV10Request();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setChannel("channel_example");
$request->setScene("scene_example");
$request->setChannelNo("channelNo_example");
$request->setPromotionType("promotionType_example");

try {
    $response = $api_client->agg_report_query_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AggpayClient->agg_report_query_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**| &lt;div data-page-id&#x3D;\&quot;FuAFdjmYsoh8fSxCmqNcyXQpnPh\&quot; data-docx-has-block-data&#x3D;\&quot;false\&quot;&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-VSYnd7zOyo5IWFxkdX3c3xiengg\&quot;&gt;发起方商户编号&lt;/div&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-EMjJdUSLPoIXLjxL3HlcMIOUnoF\&quot;&gt;*标准商户收付款方案中此参数与收款商户编号一致；*平台商户收付款方案中此参数为平台商商户编号；*服务商解决方案中，①标准商户收款时，该参数为标准商户商编 ②平台商收款或平台商入驻商户收款时，该参数为平台商商编&lt;/div&gt; &lt;/div&gt; |
 **merchantNo** | **string**| &lt;div data-page-id&#x3D;\&quot;FuAFdjmYsoh8fSxCmqNcyXQpnPh\&quot; data-docx-has-block-data&#x3D;\&quot;false\&quot;&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-Hjzmdfsvcodlk8xNuVicAQzNnpg\&quot;&gt;商户编号&lt;/div&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-BtqtdCypwop5gMxTChsctS2Lntg\&quot;&gt;收单主体商编，平台商或服务商下的子商户，普通特约商户&lt;/div&gt; &lt;/div&gt; |
 **channel** | **string**| &lt;div data-page-id&#x3D;\&quot;FuAFdjmYsoh8fSxCmqNcyXQpnPh\&quot; data-docx-has-block-data&#x3D;\&quot;false\&quot;&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-WARpd5MdeoMdyFxvShIceT5tnSe\&quot;&gt;渠道类型&lt;/div&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-Qu8fd9I28oJ32WxtxcicxJkonKb\&quot;&gt;可选项如下：&lt;/div&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-CxuodHEVdoBZgnxNIpTcGIfEnYg\&quot;&gt;WECHAT:微信&lt;/div&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-IplrdvVFfo81y2xswtgcF2rAnoe\&quot;&gt;ALIPAY:支付宝&lt;/div&gt; &lt;/div&gt; |
 **scene** | **string**| &lt;div data-page-id&#x3D;\&quot;FuAFdjmYsoh8fSxCmqNcyXQpnPh\&quot; data-docx-has-block-data&#x3D;\&quot;false\&quot;&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-ChIwdkBA6oP3y7x8oZKcEcu8nDb\&quot;&gt;场景&lt;/div&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-MmZtdCPLYoUg30xF4zDcciXMnHe\&quot;&gt;可选项如下:&lt;/div&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-R1ztdXRQooPQX7xQBMkcVME6nYf\&quot;&gt;ONLINE:线上&lt;/div&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-KOnNd6i7eoWpHoxJWhzcfekgnse\&quot;&gt;OFFLINE:线下&lt;/div&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-JrgkdJH4fo79g7xhNKwcCpBsnLg\&quot;&gt;BAOXIAN:保险&lt;/div&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-D9dTdezYYotqhIxIkjocusVCnMd\&quot;&gt;GONGYI:公益&lt;/div&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-GHh8dOBlFoFdQgxff7tcvW2wn5g\&quot;&gt;DC_SEPARATION:借贷分离&lt;/div&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-LX5qde1OtotUY2xleN3c1tEknL1\&quot;&gt;DIGITAL:数娱&lt;/div&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-DDMpd9jGXoVbtPxy3Afc47AinLf\&quot;&gt;REGISTRATION:报名(需要先优惠费率报名成功)&lt;/div&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-Q7h3dMqHaoNkq8xRAFMcoTjmnTc\&quot;&gt;PRIVATE_EDUCATION:民办教育&lt;/div&gt; &lt;/div&gt; |
 **channelNo** | **string**| &lt;div data-page-id&#x3D;\&quot;FuAFdjmYsoh8fSxCmqNcyXQpnPh\&quot; data-docx-has-block-data&#x3D;\&quot;false\&quot;&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-DJkNdK1jVo3Vo7xkocDcCXtMn3E\&quot;&gt;渠道号&lt;/div&gt; &lt;/div&gt; | [optional]
 **promotionType** | **string**| &lt;div data-page-id&#x3D;\&quot;FuAFdjmYsoh8fSxCmqNcyXQpnPh\&quot; data-docx-has-block-data&#x3D;\&quot;false\&quot;&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-CZ46dYWvvoBMdJxNs5Kc6WB8n1b\&quot;&gt;活动类型&lt;/div&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-Q50rd4cNioZbA9xwULWcXXvHnMc\&quot;&gt;当场景为报名时，支持指定&lt;/div&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-VzuodWgf2oa34mxYcGicCV83nce\&quot;&gt;可选项如下:&lt;/div&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-UgGJdoy9fobLihxJtc0cZ1S0ndg\&quot;&gt;EDUCATION:教培机构&lt;/div&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-PeUEdfS6moNScjxlZcccU2dKnEc\&quot;&gt;HEALTHCARE:商业医疗&lt;/div&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-O9evdZGTGouBXWx4M0UcYT5Hnbb\&quot;&gt;PARKING:停车缴费&lt;/div&gt; &lt;/div&gt; | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Aggpay\Model\ReportRecordQueryResponseDTO**](../Model/ReportRecordQueryResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **agg_report_update_v1_0**
AggReportUpdateV10Response agg_report_update_v1_0(AggReportUpdateV10Request request)

修改渠道报备信息



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Aggpay\AggpayClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Aggpay\Model\AggReportUpdateV10Request();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setChannelNo("channelNo_example");
$request->setChannel("channel_example");
$request->setScene("scene_example");
$request->setPromotionType("promotionType_example");
$request->setReportMerchantNo("reportMerchantNo_example");
$request->setReportMerchantName("reportMerchantName_example");
$request->setReportMerchantAlias("reportMerchantAlias_example");
$request->setServiceTel("serviceTel_example");
$request->setContactMobile("contactMobile_example");
$request->setContactEmail("contactEmail_example");
$request->setContactPhone("contactPhone_example");
$request->setContactName("contactName_example");
$request->setContactType("contactType_example");

try {
    $response = $api_client->agg_report_update_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AggpayClient->agg_report_update_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **channelNo** | **string**|  | [optional]
 **channel** | **string**|  | [optional]
 **scene** | **string**|  | [optional]
 **promotionType** | **string**|  | [optional]
 **reportMerchantNo** | **string**|  | [optional]
 **reportMerchantName** | **string**|  | [optional]
 **reportMerchantAlias** | **string**|  | [optional]
 **serviceTel** | **string**|  | [optional]
 **contactMobile** | **string**|  | [optional]
 **contactEmail** | **string**|  | [optional]
 **contactPhone** | **string**|  | [optional]
 **contactName** | **string**|  | [optional]
 **contactType** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Aggpay\Model\ReportRecordUpdateResponseDTO**](../Model/ReportRecordUpdateResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **closeOrder**
CloseOrderResponse closeOrder(CloseOrderRequest request)

聚合关单

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Aggpay\AggpayClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Aggpay\Model\CloseOrderRequest();
$request->setOrderId("orderId_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setUniqueOrderNo("uniqueOrderNo_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->closeOrder($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AggpayClient->closeOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderId** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]
 **uniqueOrderNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Aggpay\Model\CloseOrderResponseDTO**](../Model/CloseOrderResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **complaintWechatDetails**
ComplaintWechatDetailsResponse complaintWechatDetails(ComplaintWechatDetailsRequest request)

查询投诉订单详情

商户可通过调用此接口，查询指定投诉单的用户投诉详情，包含投诉内容、投诉关联订单、投诉人联系方式等信息，方便商户处理投诉。

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Aggpay\AggpayClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Aggpay\Model\ComplaintWechatDetailsRequest();
$request->setComplaintNo("complaintNo_example");
$request->setComplaintSource("complaintSource_example");
$request->setMerchantOrderNo("merchantOrderNo_example");

try {
    $response = $api_client->complaintWechatDetails($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AggpayClient->complaintWechatDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **complaintNo** | **string**| 投诉单号 |
 **complaintSource** | **string**| 投诉来源空：默认为WECHAT_BILL&lt;br&gt;WECHAT_BILL(\&quot;微信账单\&quot;)&lt;br&gt;ALIPAY_BILL(\&quot;支付宝账单\&quot;) | [optional]
 **merchantOrderNo** | **string**| 商户订单号投诉来源为ALIPAY_BILL时必填 | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Aggpay\Model\ComplaintWechatDetailsWechatComplaintInfoFlatResponseDTOResult**](../Model/ComplaintWechatDetailsWechatComplaintInfoFlatResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **complaintWechatDownloadPic**
ComplaintWechatDownloadPicResponse complaintWechatDownloadPic(ComplaintWechatDownloadPicRequest request)

图片下载

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Aggpay\AggpayClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Aggpay\Model\ComplaintWechatDownloadPicRequest();
$request->setComplaintNo("complaintNo_example");
$request->setFileType("fileType_example");
$request->setPictureUrl("pictureUrl_example");

try {
    $response = $api_client->complaintWechatDownloadPic($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AggpayClient->complaintWechatDownloadPic: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **complaintNo** | **string**| 投诉单号 | [optional]
 **fileType** | **string**| 文件类型可选项如下:&lt;br&gt;IMAGE:图片 | [optional]
 **pictureUrl** | **string**| 媒体文件请求URL | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Aggpay\Model\ComplaintWechatDownloadPicWechatComplaintDownloadPicResponseDTOResult**](../Model/ComplaintWechatDownloadPicWechatComplaintDownloadPicResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **complaintWechatFeedback**
ComplaintWechatFeedbackResponse complaintWechatFeedback(ComplaintWechatFeedbackRequest request)

回复用户处理内容

商户可通过调用此接口，提交回复内容或反馈投诉单已处理完成。其中上传图片凭证需首先调用【子商户入网资质文件上传】接口，得到图片URL，再将URL填入请求。

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Aggpay\AggpayClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Aggpay\Model\ComplaintWechatFeedbackRequest();
$request->setComplaintNo("200201820200101080076610000");
$request->setFeedbackContent("已与用户沟通解决");
$request->setImageList("[\"https://qpic.cn/xx1\",\"https://qpic.cn/xxx2\"]");
$request->setFeedbackType("GENERAL");
$request->setComplaintSource("complaintSource_example");
$request->setOperateType("operateType_example");

try {
    $response = $api_client->complaintWechatFeedback($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AggpayClient->complaintWechatFeedback: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **complaintNo** | **string**|  | [optional]
 **feedbackContent** | **string**|  | [optional]
 **imageList** | **string**|  | [optional]
 **feedbackType** | **string**|  | [optional]
 **complaintSource** | **string**|  | [optional]
 **operateType** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Aggpay\Model\ComplaintWechatFeedbackBaseResponseDTOResult**](../Model/ComplaintWechatFeedbackBaseResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **complaintWechatList**
ComplaintWechatListResponse complaintWechatList(ComplaintWechatListRequest request)

查询投诉订单列表

对于SAAS服务商、平台商、标准商户可通过调用此接口，查询指定时间段的所有用户投诉信息；也可通过调用此接口，查询指定子商户编号对应子商户的投诉信息，若不指定则查询所有子商户投诉信息。

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Aggpay\AggpayClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Aggpay\Model\ComplaintWechatListRequest();
$request->setStartTime("2022-05-01");
$request->setEndTime("2022-06-01");
$request->setMerchantOrderNo("20220906154617947762222");
$request->setWechatOrderNo("4200000404201909069117582536");
$request->setMerchantNo("10083213321");
$request->setComplaintSource("complaintSource_example");
$request->setPage(56);
$request->setLimit(56);

try {
    $response = $api_client->complaintWechatList($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AggpayClient->complaintWechatList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **startTime** | **string**| 投诉发生的开始日期，格式为yyyy-MM-dd。&lt;br&gt;注意，查询日期跨度不超过30天 |
 **endTime** | **string**| 投诉发生的结束日期，格式为yyyy-MM-dd。&lt;br&gt;注意，查询日期跨度不超过30天 |
 **merchantOrderNo** | **string**| 投诉单关联的易宝商户订单号 | [optional]
 **wechatOrderNo** | **string**| 投诉单关联的微信订单号 | [optional]
 **merchantNo** | **string**| 投诉单对应的易宝商户编号 | [optional]
 **complaintSource** | **string**| 投诉来源空：默认为WECHAT_BILLWECHAT_BILL(\&quot;微信账单\&quot;)ALIPAY_BILL(\&quot;支付宝账单\&quot;) | [optional]
 **page** | **int**| 默认1，最小为1 | [optional]
 **limit** | **int**| 默认20，设置该次请求返回的最大投诉条数，范围【1,100】 | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Aggpay\Model\ComplaintWechatListWechatComplaintListFlatResponseDTOResult**](../Model/ComplaintWechatListWechatComplaintListFlatResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **complaintWechatNegotiationHistory**
ComplaintWechatNegotiationHistoryResponse complaintWechatNegotiationHistory(ComplaintWechatNegotiationHistoryRequest request)

查询投诉协商历史

商户可通过调用此接口，查询指定投诉的用户/商户协商历史，输出查询结果，方便商户根据处理历史来制定后续处理方案。

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Aggpay\AggpayClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Aggpay\Model\ComplaintWechatNegotiationHistoryRequest();
$request->setComplaintNo("200201820200101080076610000");

try {
    $response = $api_client->complaintWechatNegotiationHistory($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AggpayClient->complaintWechatNegotiationHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **complaintNo** | **string**| 投诉单对应的投诉单号 |

### Return type
[**\Yeepay\Yop\Sdk\Service\Aggpay\Model\ComplaintWechatNegotiationHistoryWechatComplaintNegotiationHistoryFlatResponseDTOResult**](../Model/ComplaintWechatNegotiationHistoryWechatComplaintNegotiationHistoryFlatResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **complaintWechatSuccess**
ComplaintWechatSuccessResponse complaintWechatSuccess(ComplaintWechatSuccessRequest request)

反馈处理完成

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Aggpay\AggpayClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Aggpay\Model\ComplaintWechatSuccessRequest();
$request->setComplaintNo("complaintNo_example");

try {
    $response = $api_client->complaintWechatSuccess($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AggpayClient->complaintWechatSuccess: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **complaintNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Aggpay\Model\ComplaintWechatSuccessBaseResponseDTOResult**](../Model/ComplaintWechatSuccessBaseResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **creditScoreCancel**
CreditScoreCancelResponse creditScoreCancel(CreditScoreCancelRequest request)

信用分取消

信用分订单取消

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Aggpay\AggpayClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Aggpay\Model\CreditScoreCancelRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setCreditOrderId("creditOrderId_example");
$request->setReason("reason_example");

try {
    $response = $api_client->creditScoreCancel($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AggpayClient->creditScoreCancel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **creditOrderId** | **string**|  | [optional]
 **reason** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Aggpay\Model\BaseResponseDTO**](../Model/BaseResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **creditScoreCreate**
CreditScoreCreateResponse creditScoreCreate(CreditScoreCreateRequest request)

信用分创建

创建信用分订单

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Aggpay\AggpayClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Aggpay\Model\CreditScoreCreateRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setCreditOrderId("creditOrderId_example");
$request->setServiceId("serviceId_example");
$request->setPayWay("payWay_example");
$request->setChannel("channel_example");
$request->setScene("scene_example");
$request->setAppId("appId_example");
$request->setUserId("userId_example");
$request->setServiceSource("serviceSource_example");
$request->setGoodsName("goodsName_example");
$request->setPostPaymentInfos("[{\"name\":\"就餐费用\",\"amount\":40000,\"description\":\"就餐人均100元\",\"count\":4}]");
$request->setPostDiscountInfos("[{\"name\":\"满20减1元\",\"description\":\"不与其他优惠叠加\",\"amount\":100,\"count\":2}]");
$request->setLocationInfo("{\"start_location\":\"嗨客时尚主题展餐厅\",\"end_location\":\"嗨客时尚主题展餐厅\"}");
$request->setRiskFundInfo("{\"name\":\"DEPOSIT\",\"amount\":10000,\"description\":\"就餐的预估费用\"}");
$request->setTimeRange("{\"start_time\":\"20091225091010\",\"end_time\":\"20091225121010\",\"start_time_remark\":\"备注1\",\"end_time_remark\":\"备注2\"}");
$request->setNotifyUrl("notifyUrl_example");

try {
    $response = $api_client->creditScoreCreate($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AggpayClient->creditScoreCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **creditOrderId** | **string**|  | [optional]
 **serviceId** | **string**|  | [optional]
 **payWay** | **string**|  | [optional]
 **channel** | **string**|  | [optional]
 **scene** | **string**|  | [optional]
 **appId** | **string**|  | [optional]
 **userId** | **string**|  | [optional]
 **serviceSource** | **string**|  | [optional]
 **goodsName** | **string**|  | [optional]
 **postPaymentInfos** | **string**|  | [optional]
 **postDiscountInfos** | **string**|  | [optional]
 **locationInfo** | **string**|  | [optional]
 **riskFundInfo** | **string**|  | [optional]
 **timeRange** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Aggpay\Model\CreditScoreCreateResponseDTO**](../Model/CreditScoreCreateResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **creditScoreModify**
CreditScoreModifyResponse creditScoreModify(CreditScoreModifyRequest request)

信用分修改

信用分订单修改

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Aggpay\AggpayClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Aggpay\Model\CreditScoreModifyRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setCreditOrderId("creditOrderId_example");
$request->setTotalAmount("totalAmount_example");
$request->setReason("reason_example");
$request->setPostPaymentInfos("[{\"name\":\"就餐费用\",\"amount\":40000,\"description\":\"就餐人均100元\",\"count\":4}]");
$request->setPostDiscountInfos("[{\"name\":\"满20减1元\",\"description\":\"不与其他优惠叠加\",\"amount\":100,\"count\":2}]");

try {
    $response = $api_client->creditScoreModify($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AggpayClient->creditScoreModify: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **creditOrderId** | **string**|  | [optional]
 **totalAmount** | **string**|  | [optional]
 **reason** | **string**|  | [optional]
 **postPaymentInfos** | **string**|  | [optional]
 **postDiscountInfos** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Aggpay\Model\BaseResponseDTO**](../Model/BaseResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **creditScoreQuery**
CreditScoreQueryResponse creditScoreQuery(CreditScoreQueryRequest request)

信用分查询

信用分订单查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Aggpay\AggpayClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Aggpay\Model\CreditScoreQueryRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setCreditOrderId("creditOrderId_example");

try {
    $response = $api_client->creditScoreQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AggpayClient->creditScoreQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**| &lt;p&gt;发起方商户编号&lt;/p&gt; |
 **merchantNo** | **string**| &lt;p&gt;商户编号&lt;/p&gt; |
 **creditOrderId** | **string**| &lt;p&gt;商户信用分请求号&lt;/p&gt; |

### Return type
[**\Yeepay\Yop\Sdk\Service\Aggpay\Model\CreditScoreQueryResponseDTO**](../Model/CreditScoreQueryResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **creditScoreSync**
CreditScoreSyncResponse creditScoreSync(CreditScoreSyncRequest request)

信用分同步

信用分订单同步

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Aggpay\AggpayClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Aggpay\Model\CreditScoreSyncRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setCreditOrderId("creditOrderId_example");
$request->setPaidTime("paidTime_example");
$request->setType("ORDER_PAID");

try {
    $response = $api_client->creditScoreSync($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AggpayClient->creditScoreSync: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **creditOrderId** | **string**|  | [optional]
 **paidTime** | **string**|  | [optional]
 **type** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Aggpay\Model\BaseResponseDTO**](../Model/BaseResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **creditScorecomplete**
CreditScorecompleteResponse creditScorecomplete(CreditScorecompleteRequest request)

信用分完结

信用分订单完结

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Aggpay\AggpayClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Aggpay\Model\CreditScorecompleteRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setCreditOrderId("creditOrderId_example");
$request->setPostPaymentInfos("[{\"name\":\"就餐费用\",\"amount\":40000,\"description\":\"就餐人均100元\",\"count\":4}]");
$request->setPostDiscountInfos("[{\"name\":\"满20减1元\",\"description\":\"不与其他优惠叠加\",\"amount\":100,\"count\":2}]");
$request->setRiskFundInfo("{\"name\":\"DEPOSIT\",\"amount\":10000,\"description\":\"就餐的预估费用\"}");
$request->setTimeRange("{\"start_time\":\"20091225091010\",\"end_time\":\"20091225121010\",\"start_time_remark\":\"备注1\",\"end_time_remark\":\"备注2\"}");
$request->setLocationInfo("{\"start_location\":\"嗨客时尚主题展餐厅\",\"end_location\":\"嗨客时尚主题展餐厅\"}");
$request->setTotalAmount("totalAmount_example");
$request->setCompleteTime("completeTime_example");

try {
    $response = $api_client->creditScorecomplete($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AggpayClient->creditScorecomplete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **creditOrderId** | **string**|  | [optional]
 **postPaymentInfos** | **string**|  | [optional]
 **postDiscountInfos** | **string**|  | [optional]
 **riskFundInfo** | **string**|  | [optional]
 **timeRange** | **string**|  | [optional]
 **locationInfo** | **string**|  | [optional]
 **totalAmount** | **string**|  | [optional]
 **completeTime** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Aggpay\Model\BaseResponseDTO**](../Model/BaseResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **creditscoreCancel**
CreditscoreCancelResponse creditscoreCancel(CreditscoreCancelRequest request)

信用分取消

信用分订单取消

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Aggpay\AggpayClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Aggpay\Model\CreditscoreCancelRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setCreditOrderId("creditOrderId_example");
$request->setReason("reason_example");

try {
    $response = $api_client->creditscoreCancel($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AggpayClient->creditscoreCancel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **creditOrderId** | **string**|  | [optional]
 **reason** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Aggpay\Model\BaseResponseDTO**](../Model/BaseResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **creditscoreComplete**
CreditscoreCompleteResponse creditscoreComplete(CreditscoreCompleteRequest request)

信用分完结

信用分订单完结

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Aggpay\AggpayClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Aggpay\Model\CreditscoreCompleteRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setCreditOrderId("creditOrderId_example");
$request->setPostPaymentInfos("[{\"name\":\"就餐费用\",\"amount\":40000,\"description\":\"就餐人均100元\",\"count\":4}]");
$request->setPostDiscountInfos("[{\"name\":\"满20减1元\",\"description\":\"不与其他优惠叠加\",\"amount\":100,\"count\":2}]");
$request->setRiskFundInfo("{\"name\":\"DEPOSIT\",\"amount\":10000,\"description\":\"就餐的预估费用\"}");
$request->setTimeRange("{\"start_time\":\"20091225091010\",\"end_time\":\"20091225121010\",\"start_time_remark\":\"备注1\",\"end_time_remark\":\"备注2\"}");
$request->setLocationInfo("{\"start_location\":\"嗨客时尚主题展餐厅\",\"end_location\":\"嗨客时尚主题展餐厅\"}");
$request->setTotalAmount("totalAmount_example");
$request->setCompleteTime("completeTime_example");

try {
    $response = $api_client->creditscoreComplete($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AggpayClient->creditscoreComplete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **creditOrderId** | **string**|  | [optional]
 **postPaymentInfos** | **string**|  | [optional]
 **postDiscountInfos** | **string**|  | [optional]
 **riskFundInfo** | **string**|  | [optional]
 **timeRange** | **string**|  | [optional]
 **locationInfo** | **string**|  | [optional]
 **totalAmount** | **string**|  | [optional]
 **completeTime** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Aggpay\Model\BaseResponseDTO**](../Model/BaseResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **creditscoreCreate**
CreditscoreCreateResponse creditscoreCreate(CreditscoreCreateRequest request)

信用分创建

创建信用分订单

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Aggpay\AggpayClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Aggpay\Model\CreditscoreCreateRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setCreditOrderId("creditOrderId_example");
$request->setServiceId("serviceId_example");
$request->setPayWay("payWay_example");
$request->setChannel("channel_example");
$request->setScene("scene_example");
$request->setAppId("appId_example");
$request->setUserId("userId_example");
$request->setServiceSource("serviceSource_example");
$request->setGoodsName("goodsName_example");
$request->setPostPaymentInfos("[{\"name\":\"就餐费用\",\"amount\":40000,\"description\":\"就餐人均100元\",\"count\":4}]");
$request->setPostDiscountInfos("[{\"name\":\"满20减1元\",\"description\":\"不与其他优惠叠加\",\"amount\":100,\"count\":2}]");
$request->setLocationInfo("{\"start_location\":\"嗨客时尚主题展餐厅\",\"end_location\":\"嗨客时尚主题展餐厅\"}");
$request->setRiskFundInfo("{\"name\":\"DEPOSIT\",\"amount\":10000,\"description\":\"就餐的预估费用\"}");
$request->setTimeRange("{\"start_time\":\"20091225091010\",\"end_time\":\"20091225121010\",\"start_time_remark\":\"备注1\",\"end_time_remark\":\"备注2\"}");
$request->setNotifyUrl("notifyUrl_example");

try {
    $response = $api_client->creditscoreCreate($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AggpayClient->creditscoreCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **creditOrderId** | **string**|  | [optional]
 **serviceId** | **string**|  | [optional]
 **payWay** | **string**|  | [optional]
 **channel** | **string**|  | [optional]
 **scene** | **string**|  | [optional]
 **appId** | **string**|  | [optional]
 **userId** | **string**|  | [optional]
 **serviceSource** | **string**|  | [optional]
 **goodsName** | **string**|  | [optional]
 **postPaymentInfos** | **string**|  | [optional]
 **postDiscountInfos** | **string**|  | [optional]
 **locationInfo** | **string**|  | [optional]
 **riskFundInfo** | **string**|  | [optional]
 **timeRange** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Aggpay\Model\CreditScoreCreateResponseDTO**](../Model/CreditScoreCreateResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **creditscoreModify**
CreditscoreModifyResponse creditscoreModify(CreditscoreModifyRequest request)

信用分修改

信用分订单修改

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Aggpay\AggpayClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Aggpay\Model\CreditscoreModifyRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setCreditOrderId("creditOrderId_example");
$request->setTotalAmount("totalAmount_example");
$request->setReason("reason_example");
$request->setPostPaymentInfos("[{\"name\":\"就餐费用\",\"amount\":40000,\"description\":\"就餐人均100元\",\"count\":4}]");
$request->setPostDiscountInfos("[{\"name\":\"满20减1元\",\"description\":\"不与其他优惠叠加\",\"amount\":100,\"count\":2}]");

try {
    $response = $api_client->creditscoreModify($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AggpayClient->creditscoreModify: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **creditOrderId** | **string**|  | [optional]
 **totalAmount** | **string**|  | [optional]
 **reason** | **string**|  | [optional]
 **postPaymentInfos** | **string**|  | [optional]
 **postDiscountInfos** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Aggpay\Model\BaseResponseDTO**](../Model/BaseResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **creditscoreQuery**
CreditscoreQueryResponse creditscoreQuery(CreditscoreQueryRequest request)

信用分查询

信用分订单查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Aggpay\AggpayClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Aggpay\Model\CreditscoreQueryRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setCreditOrderId("creditOrderId_example");

try {
    $response = $api_client->creditscoreQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AggpayClient->creditscoreQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**| &lt;p&gt;发起方商户编号&lt;/p&gt; |
 **merchantNo** | **string**| &lt;p&gt;商户编号&lt;/p&gt; |
 **creditOrderId** | **string**| &lt;p&gt;商户信用分请求号&lt;/p&gt; |

### Return type
[**\Yeepay\Yop\Sdk\Service\Aggpay\Model\CreditScoreQueryResponseDTO**](../Model/CreditScoreQueryResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **creditscoreSync**
CreditscoreSyncResponse creditscoreSync(CreditscoreSyncRequest request)

信用分同步

信用分订单同步

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Aggpay\AggpayClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Aggpay\Model\CreditscoreSyncRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setCreditOrderId("creditOrderId_example");
$request->setPaidTime("paidTime_example");
$request->setType("ORDER_PAID");

try {
    $response = $api_client->creditscoreSync($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AggpayClient->creditscoreSync: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **creditOrderId** | **string**|  | [optional]
 **paidTime** | **string**|  | [optional]
 **type** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Aggpay\Model\BaseResponseDTO**](../Model/BaseResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **getAuthInfo**
GetAuthInfoResponse getAuthInfo(GetAuthInfoRequest request)

获取刷脸付调用凭证

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Aggpay\AggpayClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Aggpay\Model\GetAuthInfoRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setRawData("rawData_example");
$request->setStoreId("storeId_example");
$request->setStoreName("storeName_example");
$request->setDeviceId("deviceId_example");
$request->setChannel("channel_example");
$request->setScene("scene_example");
$request->setAttach("attach_example");
$request->setAppId("appId_example");

try {
    $response = $api_client->getAuthInfo($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AggpayClient->getAuthInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**| 发起方商户编号。*标准商户收付款方案中此参数与收款商户编号一致；*平台商户收付款方案中此参数为平台商商户编号；*服务商解决方案中，①标准商户收款时，该参数为标准商户商编 ②平台商收款或平台商入驻商户收款时，该参数为平台商商编。 如果商户使用先下单再支付模式，已传入token，则本字段可以不传值，否则必须传值 |
 **merchantNo** | **string**| 收单主体商编，平台商或服务商下的子商户，普通特约商户 如果商户使用先下单再支付模式，已传入token，则本字段可以不传值，否则必须传值 |
 **rawData** | **string**| 初始化数据。由微信人脸SDK的getWxpayfaceRawdata接口返回 |
 **storeId** | **string**| 门店编号， 由商户定义， 各门店唯一 |
 **storeName** | **string**| 门店名称，由商户定义 |
 **deviceId** | **string**| 终端设备编号，由商户定义，与终端一一对应 |
 **channel** | **string**| 渠道类型&lt;br&gt;可选项如下:&lt;br&gt;WECHAT:微信 |
 **scene** | **string**| 场景&lt;br&gt;可选项如下:&lt;br&gt;ONLINE:线上&lt;br&gt;OFFLINE:线下&lt;br&gt;BAOXIAN:保险&lt;br&gt;GONGYI:公益&lt;br&gt;DC_SEPARATION:借贷分离&lt;br&gt;DIGITAL:数娱&lt;br&gt;REGISTRATION:报名(需要先优惠费率报名成功，否则会阻断交易)&lt;br&gt;PRIVATE_EDUCATION:民办教育 |
 **attach** | **string**| 附加字段。字段格式使用Json；此字段将透传微信 | [optional]
 **appId** | **string**| 商户绑定的公众号/小程序的appId | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Aggpay\Model\GetAuthInfoPassiveGetAuthInfoResponseDTOResult**](../Model/GetAuthInfoPassiveGetAuthInfoResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **miniprogramDetails**
MiniprogramDetailsResponse miniprogramDetails(MiniprogramDetailsRequest request)

查询小程序投诉详情

商户可通过调用此接口，查询指定投诉单的用户投诉详情，包含投诉内容、投诉关联订单、投诉人联系方式等信息，方便商户处理投诉。

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Aggpay\AggpayClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Aggpay\Model\MiniprogramDetailsRequest();
$request->setComplaintNo("complaintNo_example");

try {
    $response = $api_client->miniprogramDetails($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AggpayClient->miniprogramDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **complaintNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Aggpay\Model\WechatComplaintInfoFlatResponseDTO**](../Model/WechatComplaintInfoFlatResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **miniprogramFeedback**
MiniprogramFeedbackResponse miniprogramFeedback(MiniprogramFeedbackRequest request)

商家回应/申诉小程序投诉

当用户投诉入口为易宝小程序时，可调用此接口进行回应，或进行申诉

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Aggpay\AggpayClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Aggpay\Model\MiniprogramFeedbackRequest();
$request->setFeedbackContent("已与用户沟通解决");
$request->setOperateType("MERCHANT_RESPOND_COMPLAINT");
$request->setAcceptReturn(" 1");
$request->setReturnId("121212");
$request->setBussiHandle(1);
$request->setType("image");
$request->setImageList("[\"https://qpic.cn/xx1\",\"https://qpic.cn/xxx2\"]");
$request->setComplaintNo("complaintNo_example");

try {
    $response = $api_client->miniprogramFeedback($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AggpayClient->miniprogramFeedback: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **feedbackContent** | **string**|  | [optional]
 **operateType** | **string**|  | [optional]
 **acceptReturn** | **string**|  | [optional]
 **returnId** | **string**|  | [optional]
 **bussiHandle** | **int**|  | [optional]
 **type** | **string**|  | [optional]
 **imageList** | **string**|  | [optional]
 **complaintNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Aggpay\Model\BaseResponseDTO**](../Model/BaseResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **miniprogramNegotiationHistory**
MiniprogramNegotiationHistoryResponse miniprogramNegotiationHistory(MiniprogramNegotiationHistoryRequest request)

查询小程序投诉协商历史

商户可通过调用此接口，查询指定投诉的用户/商户协商历史，输出查询结果，方便商户根据处理历史来制定后续处理方案。

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Aggpay\AggpayClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Aggpay\Model\MiniprogramNegotiationHistoryRequest();
$request->setComplaintNo(" adasdasdad");

try {
    $response = $api_client->miniprogramNegotiationHistory($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AggpayClient->miniprogramNegotiationHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **complaintNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Aggpay\Model\WechatComplaintNegotiationHistoryFlatResponseDTO**](../Model/WechatComplaintNegotiationHistoryFlatResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **pay**
PayResponse pay(PayRequest request)

付款码支付

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Aggpay\AggpayClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Aggpay\Model\PayRequest();
$request->setParentMerchantNo("10040012345");
$request->setMerchantNo("10040054321");
$request->setOrderId("orderId12345");
$request->setOrderAmount(0.01);
$request->setExpiredTime("2024-06-20 16:01:23");
$request->setNotifyUrl("https://notify.merchant.com/xxx");
$request->setMemo("memo_example");
$request->setGoodsName("旺仔牛奶");
$request->setFundProcessType("REAL_TIME");
$request->setPayWay("MERCHANT_SCAN");
$request->setChannel("WECHAT");
$request->setScene("OFFLINE");
$request->setAuthCode("authCode123");
$request->setAppId("appId12345");
$request->setUserIp("123.123.123.123");
$request->setTerminalId("00000000");
$request->setTerminalSceneInfo("{\"storeId\":\"门店id\",\"storeName\":\"门店名称\",\"operatorId\":\"商户操作员编号\",\"alipayStoreId\":\"支付宝的店铺编号\",\"areaCode\":\"门店行政区划码\",\"address\":\"门店详细地址\"}");
$request->setChannelSpecifiedInfo("{\"hbFqNum\":\"3\",\"hbFqSellerPercent\":\"0\",\"sysServiceProviderId\":\"\",\"isEnterprisePay\":\"N\"}");
$request->setChannelPromotionInfo("channelPromotionInfo_example");
$request->setIdentityInfo("{\"identityVerifyType\":\"Y\",\"payerIdType\":\"IDENTITY_CARD\",\"payerNumber\":\"234512198006252456\",\"payerName\":\"名字\"}");
$request->setLimitCredit("N");
$request->setToken("83BCDF29CFACB4411533080B67864EF8C907CCDC5E10A707C285FEA10CDB8221");
$request->setUniqueOrderNo("1012202101070000001989946571");
$request->setCsUrl("csUrl_example");
$request->setAccountLinkInfo("{accountProvider\":\"BOL\",\"token\":\"xxx\"}");
$request->setBankCode("BOC");
$request->setBusinessInfo("businessInfo_example");
$request->setYpAccountBookNo("ypAccountBookNo_example");
$request->setProductInfo("[{\"id\":\"1234\"}]");
$request->setDivideDetail("divideDetail_example");
$request->setDivideNotifyUrl("divideNotifyUrl_example");
$request->setFeeSubsidyInfo("[{\"subsidyMerchantNo\":\"10080009498\",\"subsidyAccountType\":\"FEE_ACCOUNT\",\"subsidyType\":\"ABSOLUTE\",\"subsidyProportion\":\"\",\"subsidyCalculateType\":\"SINGLE_PERCENT\",\"subsidyPercentFee\":\"0.6\",\"subsidyFixedFee\":\"\",\"subsidySingleMaxFee\":\"\"}]");
$request->setPayMedium("payMedium_example");
$request->setTerminalInfo("terminalInfo_example");

try {
    $response = $api_client->pay($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AggpayClient->pay: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **orderId** | **string**|  | [optional]
 **orderAmount** | **float**|  | [optional]
 **expiredTime** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **memo** | **string**|  | [optional]
 **goodsName** | **string**|  | [optional]
 **fundProcessType** | **string**|  | [optional]
 **payWay** | **string**|  | [optional]
 **channel** | **string**|  | [optional]
 **scene** | **string**|  | [optional]
 **authCode** | **string**|  | [optional]
 **appId** | **string**|  | [optional]
 **userIp** | **string**|  | [optional]
 **terminalId** | **string**|  | [optional]
 **terminalSceneInfo** | **string**|  | [optional]
 **channelSpecifiedInfo** | **string**|  | [optional]
 **channelPromotionInfo** | **string**|  | [optional]
 **identityInfo** | **string**|  | [optional]
 **limitCredit** | **string**|  | [optional]
 **token** | **string**|  | [optional]
 **uniqueOrderNo** | **string**|  | [optional]
 **csUrl** | **string**|  | [optional]
 **accountLinkInfo** | **string**|  | [optional]
 **bankCode** | **string**|  | [optional]
 **businessInfo** | **string**|  | [optional]
 **ypAccountBookNo** | **string**|  | [optional]
 **productInfo** | **string**|  | [optional]
 **divideDetail** | **string**|  | [optional]
 **divideNotifyUrl** | **string**|  | [optional]
 **feeSubsidyInfo** | **string**|  | [optional]
 **payMedium** | **string**|  | [optional]
 **terminalInfo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Aggpay\Model\PayPassiveOrderResponseDTOResult**](../Model/PayPassiveOrderResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **payLink**
PayLinkResponse payLink(PayLinkRequest request)

生成聚合订单码

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Aggpay\AggpayClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Aggpay\Model\PayLinkRequest();
$request->setParentMerchantNo("10040012345");
$request->setMerchantNo("10040054321");
$request->setOrderId("OrderId12345");
$request->setOrderAmount(0.01);
$request->setExpiredTime("2024-06-20 16:01:23");
$request->setNotifyUrl("https://notify.merchant.com/xxx");
$request->setMemo("memo_example");
$request->setGoodsName("旺仔牛奶");
$request->setFundProcessType("REAL_TIME");
$request->setScene("OFFLINE");
$request->setAppId("appId12345");
$request->setChannelSpecifiedInfo("{\"hbFqNum\":\"3\",\"hbFqSellerPercent\":\"0\",\"sysServiceProviderId\":\"\",\"isEnterprisePay\":\"N\"}");
$request->setChannelPromotionInfo("channelPromotionInfo_example");
$request->setIdentityInfo("{\"identityVerifyType\":\"Y\",\"payerIdType\":\"IDENTITY_CARD\",\"payerNumber\":\"234512198006252456\",\"payerName\":\"名字\"}");
$request->setLimitCredit("N");
$request->setCsUrl("csUrl_example");
$request->setYpPromotionInfo("自定义支付立减：[{\"amount\":\"0.01\",\"type\":\"CUSTOM_REDUCTION\"}],自定义补贴商户[{\"type\":\"CUSTOM_ALLOWANCE\"}]");
$request->setBusinessInfo("businessInfo_example");
$request->setToken("83BCDF29CFACB4411533080B67864EF8C907CCDC5E10A707C285FEA10CDB8221");
$request->setYpAccountBookNo("ypAccountBookNo_example");
$request->setProductInfo("[{\"id\":\"1234\"}]");
$request->setDivideDetail("divideDetail_example");
$request->setDivideNotifyUrl("divideNotifyUrl_example");
$request->setFeeSubsidyInfo("[{\"subsidyMerchantNo\":\"10080009498\",\"subsidyAccountType\":\"FEE_ACCOUNT\",\"subsidyType\":\"ABSOLUTE\",\"subsidyProportion\":\"\",\"subsidyCalculateType\":\"SINGLE_PERCENT\",\"subsidyPercentFee\":\"0.6\",\"subsidyFixedFee\":\"\",\"subsidySingleMaxFee\":\"\"}]");

try {
    $response = $api_client->payLink($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AggpayClient->payLink: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **orderId** | **string**|  | [optional]
 **orderAmount** | **float**|  | [optional]
 **expiredTime** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **memo** | **string**|  | [optional]
 **goodsName** | **string**|  | [optional]
 **fundProcessType** | **string**|  | [optional]
 **scene** | **string**|  | [optional]
 **appId** | **string**|  | [optional]
 **channelSpecifiedInfo** | **string**|  | [optional]
 **channelPromotionInfo** | **string**|  | [optional]
 **identityInfo** | **string**|  | [optional]
 **limitCredit** | **string**|  | [optional]
 **csUrl** | **string**|  | [optional]
 **ypPromotionInfo** | **string**|  | [optional]
 **businessInfo** | **string**|  | [optional]
 **token** | **string**|  | [optional]
 **ypAccountBookNo** | **string**|  | [optional]
 **productInfo** | **string**|  | [optional]
 **divideDetail** | **string**|  | [optional]
 **divideNotifyUrl** | **string**|  | [optional]
 **feeSubsidyInfo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Aggpay\Model\PayLinkOrderCodeResponseDTOResult**](../Model/PayLinkOrderCodeResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **prePay**
PrePayResponse prePay(PrePayRequest request)

聚合支付统一下单

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Aggpay\AggpayClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Aggpay\Model\PrePayRequest();
$request->setParentMerchantNo("10040012345");
$request->setMerchantNo("10040054321");
$request->setOrderId("orderId12345");
$request->setOrderAmount(0.01);
$request->setExpiredTime("2024-06-20 16:01:23");
$request->setNotifyUrl("https://notify.merchant.com/xxx");
$request->setRedirectUrl("https://notify.merchant.com/xxx");
$request->setMemo("memo_example");
$request->setGoodsName("旺仔牛奶");
$request->setFundProcessType("REAL_TIME");
$request->setPayWay("USER_SCAN");
$request->setChannel("ALIPAY");
$request->setScene("OFFLINE");
$request->setAppId("appId12345");
$request->setUserId("userId12345");
$request->setUserIp("123.123.123.123");
$request->setChannelSpecifiedInfo("{\"hbFqNum\":\"3\",\"hbFqSellerPercent\":\"0\",\"sysServiceProviderId\":\"\"}");
$request->setChannelPromotionInfo("channelPromotionInfo_example");
$request->setIdentityInfo("{\"identityVerifyType\":\"Y\",\"payerIdType\":\"IDENTITY_CARD\",\"payerNumber\":\"234512198006252456\",\"payerName\":\"名字\"}");
$request->setLimitCredit("N");
$request->setToken("83BCDF29CFACB4411533080B67864EF8C907CCDC5E10A707C285FEA10CDB8221");
$request->setUniqueOrderNo("1012202101070000001989946571");
$request->setCsUrl("csUrl_example");
$request->setAccountLinkInfo("{accountProvider\":\"BOL\",\"token\":\"xxx\"}");
$request->setYpPromotionInfo("自定义支付立减：[{\"amount\":\"0.01\",\"type\":\"CUSTOM_REDUCTION\"}],自定义补贴商户[{\"type\":\"CUSTOM_ALLOWANCE\"}]");
$request->setBankCode("BOC");
$request->setBusinessInfo("businessInfo_example");
$request->setUserAuthCode("userAuthCode_example");
$request->setChannelActivityInfo("channelActivityInfo_example");
$request->setTerminalId("terminalId_example");
$request->setTerminalSceneInfo("{\"storeId\":\"门店id\",\"storeName\":\"门店名称\",\"operatorId\":\"商户操作员编号\",\"alipayStoreId\":\"支付宝的店铺编号\",\"areaCode\":\"门店行政区划码\",\"address\":\"门店详细地址\"}");
$request->setYpAccountBookNo("ypAccountBookNo_example");
$request->setTerminalInfo("{\"shopName\":\"网点名称\",\"shopCustomerNumber\":\"网点编号\"}");
$request->setProductInfo("[{\"id\":\"1234\"}]");
$request->setDivideDetail("divideDetail_example");
$request->setDivideNotifyUrl("divideNotifyUrl_example");
$request->setFeeSubsidyInfo("[{\"subsidyMerchantNo\":\"10080009498\",\"subsidyAccountType\":\"FEE_ACCOUNT\",\"subsidyType\":\"ABSOLUTE\",\"subsidyProportion\":\"\",\"subsidyCalculateType\":\"SINGLE_PERCENT\",\"subsidyPercentFee\":\"0.6\",\"subsidyFixedFee\":\"\",\"subsidySingleMaxFee\":\"\"}]");
$request->setAgreementId("agreementId_example");
$request->setCreditOrderId("creditOrderId_example");

try {
    $response = $api_client->prePay($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AggpayClient->prePay: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **orderId** | **string**|  | [optional]
 **orderAmount** | **float**|  | [optional]
 **expiredTime** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **redirectUrl** | **string**|  | [optional]
 **memo** | **string**|  | [optional]
 **goodsName** | **string**|  | [optional]
 **fundProcessType** | **string**|  | [optional]
 **payWay** | **string**|  | [optional]
 **channel** | **string**|  | [optional]
 **scene** | **string**|  | [optional]
 **appId** | **string**|  | [optional]
 **userId** | **string**|  | [optional]
 **userIp** | **string**|  | [optional]
 **channelSpecifiedInfo** | **string**|  | [optional]
 **channelPromotionInfo** | **string**|  | [optional]
 **identityInfo** | **string**|  | [optional]
 **limitCredit** | **string**|  | [optional]
 **token** | **string**|  | [optional]
 **uniqueOrderNo** | **string**|  | [optional]
 **csUrl** | **string**|  | [optional]
 **accountLinkInfo** | **string**|  | [optional]
 **ypPromotionInfo** | **string**|  | [optional]
 **bankCode** | **string**|  | [optional]
 **businessInfo** | **string**|  | [optional]
 **userAuthCode** | **string**|  | [optional]
 **channelActivityInfo** | **string**|  | [optional]
 **terminalId** | **string**|  | [optional]
 **terminalSceneInfo** | **string**|  | [optional]
 **ypAccountBookNo** | **string**|  | [optional]
 **terminalInfo** | **string**|  | [optional]
 **productInfo** | **string**|  | [optional]
 **divideDetail** | **string**|  | [optional]
 **divideNotifyUrl** | **string**|  | [optional]
 **feeSubsidyInfo** | **string**|  | [optional]
 **agreementId** | **string**|  | [optional]
 **creditOrderId** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Aggpay\Model\PrePayOrderResponseDTOResult**](../Model/PrePayOrderResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **queryComplaintNegotiationHistory**
QueryComplaintNegotiationHistoryResponse queryComplaintNegotiationHistory(QueryComplaintNegotiationHistoryRequest request)

查询小程序投诉协商历史

商户可通过调用此接口，查询指定投诉的用户/商户协商历史，输出查询结果，方便商户根据处理历史来制定后续处理方案。

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Aggpay\AggpayClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Aggpay\Model\QueryComplaintNegotiationHistoryRequest();
$request->setComplaintNo(" adasdasdad");

try {
    $response = $api_client->queryComplaintNegotiationHistory($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AggpayClient->queryComplaintNegotiationHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **complaintNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Aggpay\Model\WechatComplaintNegotiationHistoryFlatResponseDTO**](../Model/WechatComplaintNegotiationHistoryFlatResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **queryMiniProgramDetail**
QueryMiniProgramDetailResponse queryMiniProgramDetail(QueryMiniProgramDetailRequest request)

查询小程序投诉详情

商户可通过调用此接口，查询指定投诉单的用户投诉详情，包含投诉内容、投诉关联订单、投诉人联系方式等信息，方便商户处理投诉。

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Aggpay\AggpayClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Aggpay\Model\QueryMiniProgramDetailRequest();
$request->setComplaintNo("complaintNo_example");

try {
    $response = $api_client->queryMiniProgramDetail($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AggpayClient->queryMiniProgramDetail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **complaintNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Aggpay\Model\WechatComplaintInfoFlatResponseDTO**](../Model/WechatComplaintInfoFlatResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **queryUserid**
QueryUseridResponse queryUserid(QueryUseridRequest request)

付款码查询用户ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Aggpay\AggpayClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Aggpay\Model\QueryUseridRequest();
$request->setParentMerchantNo("10040012345");
$request->setMerchantNo("10040054321");
$request->setAppId("appid12345");
$request->setAuthCode("authCode123");
$request->setChannel("WECHAT");

try {
    $response = $api_client->queryUserid($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AggpayClient->queryUserid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **appId** | **string**|  | [optional]
 **authCode** | **string**|  | [optional]
 **channel** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Aggpay\Model\QueryUseridPassiveGetUserIdResponseDTOResult**](../Model/QueryUseridPassiveGetUserIdResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **reportAttach**
ReportAttachResponse reportAttach(ReportAttachRequest request)

聚合资质提交



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Aggpay\AggpayClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Aggpay\Model\ReportAttachRequest();
$request->setChannel("channel_example");
$request->setMainChannelNo("mainChannelNo_example");
$request->setMainReportMerchantNo("mainReportMerchantNo_example");
$request->setMerchantNoList("10040010000,10040010000");
$request->setAuthFileName("authFileName_example");
$request->setAuthFileUrl("authFileUrl_example");
$request->setGroupName("groupName_example");
$request->setRequestReason("requestReason_example");
$request->setPayWayList("payWayList_example");
$request->setNotifyUrl("notifyUrl_example");

try {
    $response = $api_client->reportAttach($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AggpayClient->reportAttach: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel** | **string**|  | [optional]
 **mainChannelNo** | **string**|  | [optional]
 **mainReportMerchantNo** | **string**|  | [optional]
 **merchantNoList** | **string**|  | [optional]
 **authFileName** | **string**|  | [optional]
 **authFileUrl** | **string**|  | [optional]
 **groupName** | **string**|  | [optional]
 **requestReason** | **string**|  | [optional]
 **payWayList** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Aggpay\Model\AttachReportResponseDTO**](../Model/AttachReportResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **reportQuery**
ReportQueryResponse reportQuery(ReportQueryRequest request)

查询渠道报备信息



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Aggpay\AggpayClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Aggpay\Model\ReportQueryRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setChannel("channel_example");
$request->setScene("scene_example");
$request->setChannelNo("channelNo_example");
$request->setPromotionType("promotionType_example");

try {
    $response = $api_client->reportQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AggpayClient->reportQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**| &lt;div data-page-id&#x3D;\&quot;FuAFdjmYsoh8fSxCmqNcyXQpnPh\&quot; data-docx-has-block-data&#x3D;\&quot;false\&quot;&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-VSYnd7zOyo5IWFxkdX3c3xiengg\&quot;&gt;发起方商户编号&lt;/div&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-EMjJdUSLPoIXLjxL3HlcMIOUnoF\&quot;&gt;*标准商户收付款方案中此参数与收款商户编号一致；*平台商户收付款方案中此参数为平台商商户编号；*服务商解决方案中，①标准商户收款时，该参数为标准商户商编 ②平台商收款或平台商入驻商户收款时，该参数为平台商商编&lt;/div&gt; &lt;/div&gt; |
 **merchantNo** | **string**| &lt;div data-page-id&#x3D;\&quot;FuAFdjmYsoh8fSxCmqNcyXQpnPh\&quot; data-docx-has-block-data&#x3D;\&quot;false\&quot;&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-Hjzmdfsvcodlk8xNuVicAQzNnpg\&quot;&gt;商户编号&lt;/div&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-BtqtdCypwop5gMxTChsctS2Lntg\&quot;&gt;收单主体商编，平台商或服务商下的子商户，普通特约商户&lt;/div&gt; &lt;/div&gt; |
 **channel** | **string**| &lt;div data-page-id&#x3D;\&quot;FuAFdjmYsoh8fSxCmqNcyXQpnPh\&quot; data-docx-has-block-data&#x3D;\&quot;false\&quot;&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-WARpd5MdeoMdyFxvShIceT5tnSe\&quot;&gt;渠道类型&lt;/div&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-Qu8fd9I28oJ32WxtxcicxJkonKb\&quot;&gt;可选项如下：&lt;/div&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-CxuodHEVdoBZgnxNIpTcGIfEnYg\&quot;&gt;WECHAT:微信&lt;/div&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-IplrdvVFfo81y2xswtgcF2rAnoe\&quot;&gt;ALIPAY:支付宝&lt;/div&gt; &lt;/div&gt; |
 **scene** | **string**| &lt;div data-page-id&#x3D;\&quot;FuAFdjmYsoh8fSxCmqNcyXQpnPh\&quot; data-docx-has-block-data&#x3D;\&quot;false\&quot;&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-ChIwdkBA6oP3y7x8oZKcEcu8nDb\&quot;&gt;场景&lt;/div&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-MmZtdCPLYoUg30xF4zDcciXMnHe\&quot;&gt;可选项如下:&lt;/div&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-R1ztdXRQooPQX7xQBMkcVME6nYf\&quot;&gt;ONLINE:线上&lt;/div&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-KOnNd6i7eoWpHoxJWhzcfekgnse\&quot;&gt;OFFLINE:线下&lt;/div&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-JrgkdJH4fo79g7xhNKwcCpBsnLg\&quot;&gt;BAOXIAN:保险&lt;/div&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-D9dTdezYYotqhIxIkjocusVCnMd\&quot;&gt;GONGYI:公益&lt;/div&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-GHh8dOBlFoFdQgxff7tcvW2wn5g\&quot;&gt;DC_SEPARATION:借贷分离&lt;/div&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-LX5qde1OtotUY2xleN3c1tEknL1\&quot;&gt;DIGITAL:数娱&lt;/div&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-DDMpd9jGXoVbtPxy3Afc47AinLf\&quot;&gt;REGISTRATION:报名(需要先优惠费率报名成功)&lt;/div&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-Q7h3dMqHaoNkq8xRAFMcoTjmnTc\&quot;&gt;PRIVATE_EDUCATION:民办教育&lt;/div&gt; &lt;/div&gt; |
 **channelNo** | **string**| &lt;div data-page-id&#x3D;\&quot;FuAFdjmYsoh8fSxCmqNcyXQpnPh\&quot; data-docx-has-block-data&#x3D;\&quot;false\&quot;&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-DJkNdK1jVo3Vo7xkocDcCXtMn3E\&quot;&gt;渠道号&lt;/div&gt; &lt;/div&gt; | [optional]
 **promotionType** | **string**| &lt;div data-page-id&#x3D;\&quot;FuAFdjmYsoh8fSxCmqNcyXQpnPh\&quot; data-docx-has-block-data&#x3D;\&quot;false\&quot;&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-CZ46dYWvvoBMdJxNs5Kc6WB8n1b\&quot;&gt;活动类型&lt;/div&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-Q50rd4cNioZbA9xwULWcXXvHnMc\&quot;&gt;当场景为报名时，支持指定&lt;/div&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-VzuodWgf2oa34mxYcGicCV83nce\&quot;&gt;可选项如下:&lt;/div&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-UgGJdoy9fobLihxJtc0cZ1S0ndg\&quot;&gt;EDUCATION:教培机构&lt;/div&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-PeUEdfS6moNScjxlZcccU2dKnEc\&quot;&gt;HEALTHCARE:商业医疗&lt;/div&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-O9evdZGTGouBXWx4M0UcYT5Hnbb\&quot;&gt;PARKING:停车缴费&lt;/div&gt; &lt;/div&gt; | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Aggpay\Model\ReportRecordQueryResponseDTO**](../Model/ReportRecordQueryResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **reportUpdate**
ReportUpdateResponse reportUpdate(ReportUpdateRequest request)

修改渠道报备信息



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Aggpay\AggpayClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Aggpay\Model\ReportUpdateRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setChannelNo("channelNo_example");
$request->setChannel("channel_example");
$request->setScene("scene_example");
$request->setPromotionType("promotionType_example");
$request->setReportMerchantNo("reportMerchantNo_example");
$request->setReportMerchantName("reportMerchantName_example");
$request->setReportMerchantAlias("reportMerchantAlias_example");
$request->setServiceTel("serviceTel_example");
$request->setContactMobile("contactMobile_example");
$request->setContactEmail("contactEmail_example");
$request->setContactPhone("contactPhone_example");
$request->setContactName("contactName_example");
$request->setContactType("contactType_example");

try {
    $response = $api_client->reportUpdate($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AggpayClient->reportUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **channelNo** | **string**|  | [optional]
 **channel** | **string**|  | [optional]
 **scene** | **string**|  | [optional]
 **promotionType** | **string**|  | [optional]
 **reportMerchantNo** | **string**|  | [optional]
 **reportMerchantName** | **string**|  | [optional]
 **reportMerchantAlias** | **string**|  | [optional]
 **serviceTel** | **string**|  | [optional]
 **contactMobile** | **string**|  | [optional]
 **contactEmail** | **string**|  | [optional]
 **contactPhone** | **string**|  | [optional]
 **contactName** | **string**|  | [optional]
 **contactType** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Aggpay\Model\ReportRecordUpdateResponseDTO**](../Model/ReportRecordUpdateResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **shareTokenGenerate**
ShareTokenGenerateResponse shareTokenGenerate(ShareTokenGenerateRequest request)

生成支付宝吱口令

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Aggpay\AggpayClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Aggpay\Model\ShareTokenGenerateRequest();
$request->setParentMerchantNo("10040012345");
$request->setMerchantNo("10040054321");
$request->setOrderId("orderId12345");
$request->setOrderAmount(0.01);
$request->setExpiredTime("2024-06-20 16:01:23");
$request->setNotifyUrl("https://notify.merchant.com/xxx");
$request->setMemo("memo_example");
$request->setGoodsName("goodsName_example");
$request->setFundProcessType("REAL_TIME");
$request->setLimitCredit("N");
$request->setToken("83BCDF29CFACB4411533080B67864EF8C907CCDC5E10A707C285FEA10CDB8221");
$request->setCsUrl("csUrl_example");
$request->setBusinessInfo("businessInfo_example");
$request->setProductInfo("[{\"id\":\"1234\"}]");
$request->setYpAccountBookNo("ypAccountBookNo_example");
$request->setDivideDetail("divideDetail_example");
$request->setDivideNotifyUrl("divideNotifyUrl_example");
$request->setFeeSubsidyInfo("feeSubsidyInfo_example");
$request->setExternalUserId("externalUserId_example");
$request->setChannelPromotionInfo("channelPromotionInfo_example");
$request->setIdentityInfo("identityInfo_example");
$request->setYpPromotionInfo("ypPromotionInfo_example");
$request->setChannelOperationInfo("channelOperationInfo_example");
$request->setShareTokenExpiredSeconds(56);
$request->setScene("scene_example");

try {
    $response = $api_client->shareTokenGenerate($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AggpayClient->shareTokenGenerate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **orderId** | **string**|  | [optional]
 **orderAmount** | **float**|  | [optional]
 **expiredTime** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **memo** | **string**|  | [optional]
 **goodsName** | **string**|  | [optional]
 **fundProcessType** | **string**|  | [optional]
 **limitCredit** | **string**|  | [optional]
 **token** | **string**|  | [optional]
 **csUrl** | **string**|  | [optional]
 **businessInfo** | **string**|  | [optional]
 **productInfo** | **string**|  | [optional]
 **ypAccountBookNo** | **string**|  | [optional]
 **divideDetail** | **string**|  | [optional]
 **divideNotifyUrl** | **string**|  | [optional]
 **feeSubsidyInfo** | **string**|  | [optional]
 **externalUserId** | **string**|  | [optional]
 **channelPromotionInfo** | **string**|  | [optional]
 **identityInfo** | **string**|  | [optional]
 **ypPromotionInfo** | **string**|  | [optional]
 **channelOperationInfo** | **string**|  | [optional]
 **shareTokenExpiredSeconds** | **int**|  | [optional]
 **scene** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Aggpay\Model\ShareTokenGenerateAliShareTokenResponseDTOResult**](../Model/ShareTokenGenerateAliShareTokenResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **shareTokenMarketQuery**
ShareTokenMarketQueryResponse shareTokenMarketQuery(ShareTokenMarketQueryRequest request)

支付宝前置咨询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Aggpay\AggpayClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Aggpay\Model\ShareTokenMarketQueryRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setOrderId("orderId_example");
$request->setOrderAmount(1.2);
$request->setExternalUserId("externalUserId_example");
$request->setScene("scene_example");

try {
    $response = $api_client->shareTokenMarketQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AggpayClient->shareTokenMarketQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**| 发起方商户编号&lt;br&gt;*标准商户收付款方案中此参数与收款商户编号一致；&lt;br&gt;*平台商户收付款方案中此参数为平台商商户编号；&lt;br&gt;*服务商解决方案中，①标准商户收款时，该参数为标准商户商编 ②平台商收款或平台商入驻商户收款时，该参数为平台商商编。 |
 **merchantNo** | **string**| 商户编号&lt;br&gt;收单主体商编，平台商或服务商下的子商户，普通特约商户 如果商户使用先下单再支付模式，已传入token，则本字段可以不传值，否则必须传值 |
 **orderId** | **string**| 商户收款请求号&lt;br&gt;商户系统内部生成的订单号，需要保持在同一个商户下唯一 |
 **orderAmount** | **float**| 订单金额&lt;br&gt;业务上是必须参数，单位： 元， 两位小数， 最低 0.01 |
 **externalUserId** | **string**| 用户唯一ID&lt;br&gt;需要保证唯一性，建议使用微信openId |
 **scene** | **string**| 场景&lt;br&gt;可选项如下:&lt;br&gt;OFFLINE:线下&lt;br&gt;LARGE:大额 | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Aggpay\Model\ShareTokenMarketQueryAliMarketQueryResponseDTOResult**](../Model/ShareTokenMarketQueryAliMarketQueryResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **sign**
SignResponse sign(SignRequest request)

签约

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Aggpay\AggpayClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Aggpay\Model\SignRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setPayWay("payWay_example");
$request->setChannel("channel_example");
$request->setSignSource("signSource_example");
$request->setAppId("appId_example");
$request->setPlainId("plainId_example");
$request->setAgreementId("agreementId_example");
$request->setNotifyUrl("notifyUrl_example");
$request->setContractDisplayAccount("contractDisplayAccount_example");
$request->setReturnInfo("returnInfo_example");
$request->setExpireTime("2024-06-20 16:01:23");
$request->setInvokeScene("invokeScene_example");

try {
    $response = $api_client->sign($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AggpayClient->sign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **payWay** | **string**|  | [optional]
 **channel** | **string**|  | [optional]
 **signSource** | **string**|  | [optional]
 **appId** | **string**|  | [optional]
 **plainId** | **string**|  | [optional]
 **agreementId** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **contractDisplayAccount** | **string**|  | [optional]
 **returnInfo** | **string**|  | [optional]
 **expireTime** | **string**|  | [optional]
 **invokeScene** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Aggpay\Model\SignEntrustWithholdSignResponseDTOResult**](../Model/SignEntrustWithholdSignResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **signQuery**
SignQueryResponse signQuery(SignQueryRequest request)

签约查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Aggpay\AggpayClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Aggpay\Model\SignQueryRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setAgreementId("agreementId_example");

try {
    $response = $api_client->signQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AggpayClient->signQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**| 发起方商户编号&lt;br&gt;*标准商户收付款方案中此参数与收款商户编号一致；&lt;br&gt;*平台商户收付款方案中此参数为平台商商户编号；&lt;br&gt;*服务商解决方案中，①标准商户收款时，该参数为标准商户商编 ②平台商收款或平台商入驻商户收款时，该参数为平台商商编 |
 **merchantNo** | **string**| 收单主体商编，平台商或服务商下的子商户，普通特约商户 |
 **agreementId** | **string**| 协议ID&lt;br&gt;商户自己生成的协议号，要求商户保证唯一 |

### Return type
[**\Yeepay\Yop\Sdk\Service\Aggpay\Model\SignQueryEntrustWithholdSignQueryResponseDTOResult**](../Model/SignQueryEntrustWithholdSignQueryResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **tutelagePrePay**
TutelagePrePayResponse tutelagePrePay(TutelagePrePayRequest request)

聚合支付托管下单

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Aggpay\AggpayClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Aggpay\Model\TutelagePrePayRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setOrderId("orderId_example");
$request->setOrderAmount(1.2);
$request->setExpiredTime("2024-06-20 16:01:23");
$request->setMemo("memo_example");
$request->setGoodsName("旺仔牛奶");
$request->setFundProcessType("REAL_TIME");
$request->setNotifyUrl("https://notify.merchant.com/xxx");
$request->setPayWay("SDK_PAY");
$request->setChannel("WECHAT");
$request->setScene("OFFLINE");
$request->setUserIp("123.123.123.123");
$request->setLimitCredit("N");
$request->setToken("83BCDF29CFACB4411533080B67864EF8C907CCDC5E10A707C285FEA10CDB8221");
$request->setCsUrl("csUrl_example");
$request->setRedirectUrl("redirectUrl_example");
$request->setBusinessInfo("businessInfo_example");
$request->setProductInfo("[{\"id\":\"1234\"}]");
$request->setYpAccountBookNo("ypAccountBookNo_example");
$request->setDivideDetail("divideDetail_example");
$request->setDivideNotifyUrl("divideNotifyUrl_example");
$request->setReturnSchema("returnSchema_example");
$request->setChannelSpecifiedInfo("{\"hbFqNum\":\"3\",\"hbFqSellerPercent\":\"0\",\"unionProviderId\":\"111112222\"}");
$request->setChannelPromotionInfo("channelPromotionInfo_example");
$request->setIdentityInfo("{\"identityVerifyType\":\"Y\",\"payerIdType\":\"IDENTITY_CARD\",\"payerNumber\":\"234512198006252456\",\"payerName\":\"名字\"}");
$request->setAccountLinkInfo("{accountProvider\":\"BOL\",\"token\":\"xxx\"}");
$request->setYpPromotionInfo("自定义支付立减：[{\"amount\":\"0.01\",\"type\":\"CUSTOM_REDUCTION\"}],自定义补贴商户[{\"type\":\"CUSTOM_ALLOWANCE\"}]");
$request->setChannelActivityInfo("{\"food_order_type\":\"qr_order\"}");
$request->setFeeSubsidyInfo("[{\"subsidyMerchantNo\":\"10080009498\",\"subsidyAccountType\":\"FEE_ACCOUNT\",\"subsidyType\":\"ABSOLUTE\",\"subsidyProportion\":\"\",\"subsidyCalculateType\":\"SINGLE_PERCENT\",\"subsidyPercentFee\":\"0.6\",\"subsidyFixedFee\":\"\",\"subsidySingleMaxFee\":\"\"}]");

try {
    $response = $api_client->tutelagePrePay($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AggpayClient->tutelagePrePay: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **orderId** | **string**|  | [optional]
 **orderAmount** | **float**|  | [optional]
 **expiredTime** | **string**|  | [optional]
 **memo** | **string**|  | [optional]
 **goodsName** | **string**|  | [optional]
 **fundProcessType** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **payWay** | **string**|  | [optional]
 **channel** | **string**|  | [optional]
 **scene** | **string**|  | [optional]
 **userIp** | **string**|  | [optional]
 **limitCredit** | **string**|  | [optional]
 **token** | **string**|  | [optional]
 **csUrl** | **string**|  | [optional]
 **redirectUrl** | **string**|  | [optional]
 **businessInfo** | **string**|  | [optional]
 **productInfo** | **string**|  | [optional]
 **ypAccountBookNo** | **string**|  | [optional]
 **divideDetail** | **string**|  | [optional]
 **divideNotifyUrl** | **string**|  | [optional]
 **returnSchema** | **string**|  | [optional]
 **channelSpecifiedInfo** | **string**|  | [optional]
 **channelPromotionInfo** | **string**|  | [optional]
 **identityInfo** | **string**|  | [optional]
 **accountLinkInfo** | **string**|  | [optional]
 **ypPromotionInfo** | **string**|  | [optional]
 **channelActivityInfo** | **string**|  | [optional]
 **feeSubsidyInfo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Aggpay\Model\TutelagePrePayWrapPrePayOrderResponseDTOResult**](../Model/TutelagePrePayWrapPrePayOrderResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **unsign**
UnsignResponse unsign(UnsignRequest request)

解约

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Aggpay\AggpayClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Aggpay\Model\UnsignRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setAgreementId("agreementId_example");
$request->setUnSignRemark("unSignRemark_example");

try {
    $response = $api_client->unsign($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AggpayClient->unsign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **agreementId** | **string**|  | [optional]
 **unSignRemark** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Aggpay\Model\UnsignEntrustWithholdUnSignResponseDTOResult**](../Model/UnsignEntrustWithholdUnSignResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **violationWechatChannel**
ViolationWechatChannelResponse violationWechatChannel(ViolationWechatChannelRequest request)

微信违规查询接口(服务商/平台商版)

查询商户在微信的违规信息(根据渠道号查询)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Aggpay\AggpayClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Aggpay\Model\ViolationWechatChannelRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setBeginTime("2024-06-20 16:01:23");
$request->setEndTime("2024-06-20 16:01:23");

try {
    $response = $api_client->violationWechatChannel($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AggpayClient->violationWechatChannel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**| 服务商/平台商商编 |
 **beginTime** | **string**| 查询的开始时间&lt;br&gt;格式\&quot;yyyy-MM-dd HH:mm:ss\&quot; |
 **endTime** | **string**| 查询的结束时间&lt;br&gt;格式\&quot;yyyy-MM-dd HH:mm:ss\&quot;&lt;br&gt;（开始时间和结束时间间隔不得超过一小时） |

### Return type
[**\Yeepay\Yop\Sdk\Service\Aggpay\Model\ViolationWechatChannelWechatRiskQueryResponseDTOResult**](../Model/ViolationWechatChannelWechatRiskQueryResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **wechatComplaintFeedback**
WechatComplaintFeedbackResponse wechatComplaintFeedback(WechatComplaintFeedbackRequest request)

商家回应/申诉小程序投诉

当用户投诉入口为易宝小程序时，可调用此接口进行回应，或进行申诉

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Aggpay\AggpayClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Aggpay\Model\WechatComplaintFeedbackRequest();
$request->setFeedbackContent("已与用户沟通解决");
$request->setOperateType("MERCHANT_RESPOND_COMPLAINT");
$request->setAcceptReturn(" 1");
$request->setReturnId("121212");
$request->setBussiHandle(1);
$request->setType("image");
$request->setImageList("[\"https://qpic.cn/xx1\",\"https://qpic.cn/xxx2\"]");
$request->setComplaintNo("complaintNo_example");

try {
    $response = $api_client->wechatComplaintFeedback($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AggpayClient->wechatComplaintFeedback: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **feedbackContent** | **string**|  | [optional]
 **operateType** | **string**|  | [optional]
 **acceptReturn** | **string**|  | [optional]
 **returnId** | **string**|  | [optional]
 **bussiHandle** | **int**|  | [optional]
 **type** | **string**|  | [optional]
 **imageList** | **string**|  | [optional]
 **complaintNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Aggpay\Model\BaseResponseDTO**](../Model/BaseResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **wechatConfigAdd**
WechatConfigAddResponse wechatConfigAdd(WechatConfigAddRequest request)

公众号配置接口

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Aggpay\AggpayClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Aggpay\Model\WechatConfigAddRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Aggpay\Model\WechatConfigAddWechatConfigRequestDTOParam());

try {
    $response = $api_client->wechatConfigAdd($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AggpayClient->wechatConfigAdd: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Aggpay\Model\WechatConfigAddWechatConfigRequestDTOParam**](../Model/WechatConfigAddWechatConfigRequestDTOParam.md)|  |

### Return type
[**\Yeepay\Yop\Sdk\Service\Aggpay\Model\WechatConfigAddWechatConfigResponseDTOResult**](../Model/WechatConfigAddWechatConfigResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **wechatConfigAddV2**
WechatConfigAddV2Response wechatConfigAddV2(WechatConfigAddV2Request request)

公众号配置接口

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Aggpay\AggpayClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Aggpay\Model\WechatConfigAddV2Request();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setTradeAuthDirList("[\"http://www.yeepay.com/\",\"http://www.yeepay.com/\"]");
$request->setAppIdList("[{\"appId\":\"appId\",\"appSecret\":\"appSecret\",\"appIdType\":\"OFFICIAL_ACCOUNT\",\"subscribeAppId\":\"subscribeAppId\"},{\"appId\":\"appId\",\"appSecret\":\"appSecret\",\"appIdType\":\"MINI_PROGRAM\",\"subscribeAppId\":\"subscribeAppId\"}]");
$request->setReportMerchantNo("reportMerchantNo_example");

try {
    $response = $api_client->wechatConfigAddV2($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AggpayClient->wechatConfigAddV2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **tradeAuthDirList** | **string**|  | [optional]
 **appIdList** | **string**|  | [optional]
 **reportMerchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Aggpay\Model\WechatConfigAddV2WechatConfigFlatResponseDTOResult**](../Model/WechatConfigAddV2WechatConfigFlatResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **wechatConfigQuery**
WechatConfigQueryResponse wechatConfigQuery(WechatConfigQueryRequest request)

公众号配置查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Aggpay\AggpayClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Aggpay\Model\WechatConfigQueryRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setAppIdType("appIdType_example");

try {
    $response = $api_client->wechatConfigQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AggpayClient->wechatConfigQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  |
 **merchantNo** | **string**|  |
 **appIdType** | **string**| OFFICIAL_ACCOUNT:公众号&lt;br&gt;MINI_PROGRAM:小程序 | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Aggpay\Model\WechatConfigQueryWechatConfigResponseDTOResult**](../Model/WechatConfigQueryWechatConfigResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **wechatConfigQueryV2**
WechatConfigQueryV2Response wechatConfigQueryV2(WechatConfigQueryV2Request request)

公众号配置查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Aggpay\AggpayClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Aggpay\Model\WechatConfigQueryV2Request();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setAppIdType("appIdType_example");
$request->setReportMerchantNo("reportMerchantNo_example");

try {
    $response = $api_client->wechatConfigQueryV2($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AggpayClient->wechatConfigQueryV2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  |
 **merchantNo** | **string**|  |
 **appIdType** | **string**| appId类型&lt;br&gt;OFFICIAL_ACCOUNT:公众号&lt;br&gt;MINI_PROGRAM:小程序 | [optional]
 **reportMerchantNo** | **string**| 报备商户号，若指定报备商户号，则仅针对此报备商户号进行查询。需确保该报备商户号属于此商编 | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Aggpay\Model\WechatConfigQueryV2WechatConfigFlatResponseDTOResult**](../Model/WechatConfigQueryV2WechatConfigFlatResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

