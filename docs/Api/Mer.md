# Yeepay\Yop\Sdk\Mer

All URIs are relative to *http://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**authStateQueryV2**](Mer.md#authStateQueryV2) | **GET** /rest/v2.0/mer/auth/state/query | 商户授权状态查询接口
[**bankAccountOpen**](Mer.md#bankAccountOpen) | **POST** /rest/v1.0/mer/bank-account/open | 账户通开户
[**bankAccountOpenQuery**](Mer.md#bankAccountOpenQuery) | **GET** /rest/v1.0/mer/bank-account/open/query | 账户通开户结果查询
[**bossRegisterContributeDivideV2**](Mer.md#bossRegisterContributeDivideV2) | **POST** /rest/v2.0/mer/boss/register/contribute/divide | 老板管账特约商户入网(企业/个体)-收单+分账
[**bossRegisterContributeStandardV2**](Mer.md#bossRegisterContributeStandardV2) | **POST** /rest/v2.0/mer/boss/register/contribute/standard | 老板管账特约商户入网(企业/个体)-收单+结算
[**bossRegisterQueryV2**](Mer.md#bossRegisterQueryV2) | **GET** /rest/v2.0/mer/boss/register/query | 老板管账商户入网进度查询
[**mer_qualification_supplement**](Mer.md#mer_qualification_supplement) | **POST** /rest/v1.0/mer/qualification/supplement | 补交商户资质
[**merchantDisposeQuery**](Mer.md#merchantDisposeQuery) | **GET** /rest/v1.0/mer/merchant/dispose/query | 沉默商户解冻申请进度查询
[**merchantDisposeUnfreeze**](Mer.md#merchantDisposeUnfreeze) | **POST** /rest/v1.0/mer/merchant/dispose/unfreeze | 沉默商户解冻申请
[**merchantInfoModify**](Mer.md#merchantInfoModify) | **POST** /rest/v1.0/mer/merchant/info/modify | 商户信息变更
[**merchantSupplementQualificationQuery**](Mer.md#merchantSupplementQualificationQuery) | **GET** /rest/v1.0/mer/merchant/supplement/qualification/query | 后补资质查询
[**merchantSupplementQualificationSubmit**](Mer.md#merchantSupplementQualificationSubmit) | **POST** /rest/v1.0/mer/merchant/supplement/qualification/submit | 后补资质提交
[**merchantWechatauthCancel**](Mer.md#merchantWechatauthCancel) | **POST** /rest/v1.0/mer/merchant/wechatauth/cancel | 撤销微信实名认证申请单
[**merchantWechatauthQuery**](Mer.md#merchantWechatauthQuery) | **GET** /rest/v1.0/mer/merchant/wechatauth/query | 查询微信实名认证状态
[**notifyRepeatV2**](Mer.md#notifyRepeatV2) | **POST** /rest/v2.0/mer/notify/repeat | 重复获取(短验/邮件/电子签章)
[**productFeeModifyV2**](Mer.md#productFeeModifyV2) | **POST** /rest/v2.0/mer/product/fee/modify | 商户产品变更
[**productFeeQueryV2**](Mer.md#productFeeQueryV2) | **GET** /rest/v2.0/mer/product/fee/query | 商户产品费率查询
[**productIncrementSettleOpenV2**](Mer.md#productIncrementSettleOpenV2) | **POST** /rest/v2.0/mer/product/increment-settle/open | 增值结算产品开通
[**productModifyQueryV2**](Mer.md#productModifyQueryV2) | **GET** /rest/v2.0/mer/product/modify/query | 商户产品变更进度查询接口
[**qualificationSupplement**](Mer.md#qualificationSupplement) | **POST** /rest/v1.0/mer/qualification/supplement | 补交商户资质
[**qualificationSupplementary**](Mer.md#qualificationSupplementary) | **POST** /rest/v1.0/mer/qualification/supplementary | 补交资质信息
[**registerAbroadContributeMerchantV2**](Mer.md#registerAbroadContributeMerchantV2) | **POST** /rest/v2.0/mer/register/abroad/contribute/merchant | 跨境特约商户入网(企业/个体)
[**registerAbroadQueryV2**](Mer.md#registerAbroadQueryV2) | **GET** /rest/v2.0/mer/register/abroad/query | 跨境商户入网进度查询接口
[**registerContributeIndexV2**](Mer.md#registerContributeIndexV2) | **POST** /rest/v2.0/mer/register/contribute/index | 特约商户H5页面入网（小微）
[**registerContributeMerchantV2**](Mer.md#registerContributeMerchantV2) | **POST** /rest/v2.0/mer/register/contribute/merchant | 特约商户入网(企业/个体)
[**registerContributeMicroV2**](Mer.md#registerContributeMicroV2) | **POST** /rest/v2.0/mer/register/contribute/micro | 特约商户入网(小微)
[**registerContributeWebIndexV2**](Mer.md#registerContributeWebIndexV2) | **POST** /rest/v2.0/mer/register/contribute/web/index | 特约商户WEB页面入网（企业/个体）
[**registerQueryV2**](Mer.md#registerQueryV2) | **GET** /rest/v2.0/mer/register/query | 商户入网进度查询接口
[**rest_v2_mer_boss_register_contribute_divide**](Mer.md#rest_v2_mer_boss_register_contribute_divide) | **POST** /rest/v2.0/mer/boss/register/contribute/divide | 老板管账特约商户入网(企业/个体)-收单+分账
[**rest_v2_mer_boss_register_contribute_standard**](Mer.md#rest_v2_mer_boss_register_contribute_standard) | **POST** /rest/v2.0/mer/boss/register/contribute/standard | 老板管账特约商户入网(企业/个体)-收单+结算
[**rest_v2_mer_boss_register_query**](Mer.md#rest_v2_mer_boss_register_query) | **GET** /rest/v2.0/mer/boss/register/query | 老板管账商户入网进度查询


# **authStateQueryV2**
AuthStateQueryV2Response authStateQueryV2(AuthStateQueryV2Request request)

商户授权状态查询接口

商户授权状态查询接口

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\AuthStateQueryV2Request();
$request->setMerchantNo("merchantNo_example");
$request->setReportMerchantNo("reportMerchantNo_example");
$request->setFeeType("feeType_example");
$request->setQueryStrategy("queryStrategy_example");
$request->setPageNum("pageNum_example");
$request->setPageSize("pageSize_example");

try {
    $response = $api_client->authStateQueryV2($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->authStateQueryV2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**| 易宝商户编号 |
 **reportMerchantNo** | **string**| 报备商户编号 | [optional]
 **feeType** | **string**| 可选项如下：&lt;br&gt;GONGYI:微信公益&lt;br&gt;GONGJIAO:微信公缴&lt;br&gt;XIANXIA:微信线下&lt;br&gt;BAOXIAN:微信保险&lt;br&gt;XIANSHANG:微信线上&lt;br&gt;OLDLVZHOU:微信老绿洲&lt;br&gt;LVZHOU:微信绿洲&lt;br&gt;XIAOYUAN:微信校园&lt;br&gt;ALIPUTONG:支付宝普通 | [optional]
 **queryStrategy** | **string**| PRIMARY ：仅查询主号 &lt;br&gt;BACKUP_PAGE ： 分页查主备（分页查询时必须传分页参数）&lt;br&gt;不传默认仅查主号 | [optional]
 **pageNum** | **string**|  | [optional]
 **pageSize** | **string**| 每页最多10条，支持1-10之间的正整数 | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\AuthStateQueryV2IdentityAuthStateResDtoResult**](../Model/AuthStateQueryV2IdentityAuthStateResDtoResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **bankAccountOpen**
BankAccountOpenResponse bankAccountOpen(BankAccountOpenRequest request)

账户通开户

账户通开户

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\BankAccountOpenRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setBusinessPlacePhoto("businessPlacePhoto_example");
$request->setNotifyUrl("notifyUrl_example");
$request->setDeviceip("deviceip_example");
$request->setToken("token_example");
$request->setMerchantSubjectInfo("{\"busStartDate\":\"商户证件有效期起始日期\",\"busEndDate\":\"商户证件有效期截止日期\",\"magAddress\":\"注册地址\",\"magScope\":\"经营范围\"}");
$request->setSettlementAccountInfo("{\"bankCode\":\"银行账户开户总行编码\",\"bankCardNo\":\"银行账户号码\"}");
$request->setMerchantCorporationInfo("{\"legalStartDate\":\"法人证件有效期起始日期\",\"legalEndDate\":\"法人证件有效期截止日期\",\"legalMobile\":\"法人手机号\"}");
$request->setMerchantContactInfo("{\"contactName\":\"\",\"contactLicenceType\":\"\",\"contactLicenceNo\":\"\",\"contactMobile\":\"\",\"contactLicenceStartDate\":\"\",\"contactLicenceEndDate\":\"\",\"contactLicenceFrontUrl\":\"\",\"contactLicenceBackUrl\":\"\"}");
$request->setShareholdersInfo("[{\"shareholdersType\":\"\",\"shareholdersName\":\"\",\"shareholdersNo\":\"\",\"shareholdersRatio\":\"\",\"shareholdersLicenceUrl\":\"\",\"shareholdersEndDate\":\"\",\"shareholdersIdCardFrontUrl\":\"\",\"shareholdersIdCardBackUrl\":\"\"}]");
$request->setBeneficiaryInfo("[{\"benefName\":\"\",\"benefNo\":\"\",\"benefAddress\":\"\",\"benefIdCardFrontUrl\":\"\",\"benefIdCardBackUrl\":\"\",\"benefEndDate\":\"\"}]");
$request->setRequestNo("requestNo_example");

try {
    $response = $api_client->bankAccountOpen($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->bankAccountOpen: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **businessPlacePhoto** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **deviceip** | **string**|  | [optional]
 **token** | **string**|  | [optional]
 **merchantSubjectInfo** | **string**|  | [optional]
 **settlementAccountInfo** | **string**|  | [optional]
 **merchantCorporationInfo** | **string**|  | [optional]
 **merchantContactInfo** | **string**|  | [optional]
 **shareholdersInfo** | **string**|  | [optional]
 **beneficiaryInfo** | **string**|  | [optional]
 **requestNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\BankAccountOpenOpenAccountRespDtoResult**](../Model/BankAccountOpenOpenAccountRespDtoResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **bankAccountOpenQuery**
BankAccountOpenQueryResponse bankAccountOpenQuery(BankAccountOpenQueryRequest request)

账户通开户结果查询

账户通开户结果查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\BankAccountOpenQueryRequest();
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->bankAccountOpenQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->bankAccountOpenQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**| 开通账户通产品的商户编号 |

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\BankAccountOpenQueryQueryOpenAccountResultRespDtoResult**](../Model/BankAccountOpenQueryQueryOpenAccountResultRespDtoResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **bossRegisterContributeDivideV2**
BossRegisterContributeDivideV2Response bossRegisterContributeDivideV2(BossRegisterContributeDivideV2Request request)

老板管账特约商户入网(企业/个体)-收单+分账

老板管账特约商户入网(企业/个体)-收单+分账

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\BossRegisterContributeDivideV2Request();
$request->setRequestNo("YBRWQQH20231113XXXXXX");
$request->setBusinessRole("SETTLED_MERCHANT");
$request->setNotifyUrl("https://notify.merchant.com/xxx");
$request->setMerchantSubjectInfo("{ \"licenceUrl\":\"商户证件照片地址\", \"signName\":\"商户签约名\", \"signType\":\"商户签约类型\", \"licenceNo\":\"商户证件号码\", \"shortName\":\"商户简称\" }");
$request->setMerchantCorporationInfo("{ \"legalName\":\"法人名称\", \"legalLicenceType\":\"法人证件类型\", \"legalLicenceNo\":\"法人证件编号\", \"legalLicenceFrontUrl\":\"法人证件正面照片地址\", \"legalLicenceBackUrl\":\"法人证件背面照片地址\" }");
$request->setMerchantContactInfo("{ \"contactName\":\"联系人姓名\", \"contactMobile\":\"联系人手机号\", \"contactEmail\":\"联系人邮箱\", \"contactLicenceNo\":\"联系人证件号码\"}");
$request->setIndustryCategoryInfo("{ \"primaryIndustryCategory\":\"一级行业分类编码\", \"secondaryIndustryCategory\":\"二级行业分类编码\" }");
$request->setBusinessAddressInfo("{ \"province\":\"经营省编码\", \"city\":\"经营市编码\", \"district\":\"经营区编码\", \"address\":\"经营地址\" }");
$request->setProductInfo("[{\"rateType\":\"SINGLE_FIXED\",\"productCode\":\"D1\",\"fixedRate\":\"0\",\"paymentMethod\":\"REAL_TIME\",\"undertaker\":\"PLATFORM_MERCHANT\"},{\"rateType\":\"SINGLE_PERCENT\",\"productCode\":\"USER_SCAN_WECHAT_OFFLINE\",\"fixedRate\":\"1\",\"paymentMethod\":\"REAL_TIME\",\"percentRate\":\"11\",\"undertaker\":\"PLATFORM_MERCHANT\"},{\"rateType\":\"SINGLE_PERCENT\",\"productCode\":\"MERCHANT_SCAN_WECHAT_OFFLINE\",\"fixedRate\":\"1\",\"paymentMethod\":\"REAL_TIME\",\"percentRate\":\"1\",\"undertaker\":\"PLATFORM_MERCHANT\"},{\"rateType\":\"SINGLE_PERCENT\",\"productCode\":\"WECHAT_OFFIACCOUNT_WECHAT_OFFLINE\",\"fixedRate\":\"1\",\"paymentMethod\":\"REAL_TIME\",\"percentRate\":\"1\",\"undertaker\":\"PLATFORM_MERCHANT\"},{\"rateType\":\"SINGLE_PERCENT\",\"productCode\":\"USER_SCAN_ALIPAY_OFFLINE\",\"paymentMethod\":\"REAL_TIME\",\"minRate\":\"1\",\"percentRate\":\"1\",\"undertaker\":\"PLATFORM_MERCHANT\"},{\"rateType\":\"SINGLE_FIXED\",\"productCode\":\"ENTERPRISE_PAYMENT_REALTIME_PUBLIC\",\"fixedRate\":\"10\",\"paymentMethod\":\"REAL_TIME\",\"minRate\":\"1\",\"undertaker\":\"PLATFORM_MERCHANT\"},{\"rateType\":\"SINGLE_FIXED\",\"productCode\":\"ENTERPRISE_PAYMENT_REALTIME_PRIVATE\",\"fixedRate\":\"10\",\"paymentMethod\":\"REAL_TIME\",\"minRate\":\"1\",\"undertaker\":\"PLATFORM_MERCHANT\"}]");
$request->setProductQualificationInfo("{ \"paymentScene\": \"RLZYFW\", \"systemScreenshotUrl\": \"https://staticres.yeepay.com/xxx.文件后缀\", \"specialPermitProcessUrl\": \"https://staticres.yeepay.com/xxx.文件后缀\", \"agreementPhotoUrl\": \"https://staticres.yeepay.com/xxx.文件后缀\" }");
$request->setFunctionService("[\"BACKUP\"]");
$request->setFunctionServiceQualificationInfo("{\"alipayBackupCount\":\"5\",\"wechatBackupCount\":\"30\"}");
$request->setDivideConfigInfo("{\"publicAccountInfo\":{\"bankCode\":\"bankCode\",\"bankCardNo\":\"bankCardNo\",\"accountType\":\"ENTERPRISE_ACCOUNT\",\"settleRatio\":\"50\"},\"receiverInfo\":[{\"receiverType\":\"TO_PRIVATE\",\"receiverName\":\"receiverName \",\"licenceNo\":\"licenceNo\",\"accountLabel\":\"API测试\",\"settleCardInfo\":[{\"bankCode\":\"bankCode\",\"bankCardNo\":\"bankCardNo\",\"mobile\":\"mobile\",\"settleRatio\":\"30.00\"}]},{\"legalName\":\"legalName\",\"legalLicenceNo\":\"legalLicenceNo\",\"receiverType\":\"TO_PUBLIC\",\"receiverName\":\"receiverName\",\"licenceNo\":\"licenceNo\",\"accountLabel\":\"API测试1\",\"settleCardInfo\":[{\"bankCode\":\"bankCode\",\"bankCardNo\":\"bankCardNo\",\"settleRatio\":\"20.00\"}]}],\"toPublicDivideUrl\":\"对公分账资质文件url\",\"divideMode\":\"AUTO\"}");

try {
    $response = $api_client->bossRegisterContributeDivideV2($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->bossRegisterContributeDivideV2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**|  | [optional]
 **businessRole** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **merchantSubjectInfo** | **string**|  | [optional]
 **merchantCorporationInfo** | **string**|  | [optional]
 **merchantContactInfo** | **string**|  | [optional]
 **industryCategoryInfo** | **string**|  | [optional]
 **businessAddressInfo** | **string**|  | [optional]
 **productInfo** | **string**|  | [optional]
 **productQualificationInfo** | **string**|  | [optional]
 **functionService** | **string**|  | [optional]
 **functionServiceQualificationInfo** | **string**|  | [optional]
 **divideConfigInfo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\BossMerchantNetInDivideApiRespDTO**](../Model/BossMerchantNetInDivideApiRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **bossRegisterContributeStandardV2**
BossRegisterContributeStandardV2Response bossRegisterContributeStandardV2(BossRegisterContributeStandardV2Request request)

老板管账特约商户入网(企业/个体)-收单+结算

特约商户入网(企业/个体)-收单+结算

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\BossRegisterContributeStandardV2Request();
$request->setRequestNo("YBRWQQH20231113XXXXXX");
$request->setBusinessRole("ORDINARY_MERCHANT");
$request->setNotifyUrl("https://notify.merchant.com/xxx");
$request->setMerchantSubjectInfo("merchantSubjectInfo_example");
$request->setMerchantCorporationInfo("示例值：{ \"legalName\":\"法人名称\", \"legalLicenceType\":\"法人证件类型\", \"legalLicenceNo\":\"法人证件编号\", \"legalLicenceFrontUrl\":\"法人证件正面照片地址\", \"legalLicenceBackUrl\":\"法人证件背面照片地址\" }");
$request->setMerchantContactInfo("{ \"contactName\":\"联系人姓名\", \"contactMobile\":\"联系人手机号\", \"contactEmail\":\"联系人邮箱\", \"contactLicenceNo\":\"联系人证件号码\"}");
$request->setSettlementAccountInfo("{ \"settlementDirection\":\"结算方向\", \"bankCode\":\"开户总行编码\", \"bankAccountType\":\"银行账户类型\", \"bankCardNo\":\"银行账户号码\" }");
$request->setIndustryCategoryInfo("{ \"primaryIndustryCategory\":\"一级行业分类编码\", \"secondaryIndustryCategory\":\"二级行业分类编码\" }");
$request->setBusinessAddressInfo("{ \"province\":\"经营省编码\", \"city\":\"经营市编码\", \"district\":\"经营区编码\", \"address\":\"经营地址\" }");
$request->setProductInfo("[{\"rateType\":\"SINGLE_FIXED\",\"productCode\":\"D1\",\"fixedRate\":\"0\",\"paymentMethod\":\"REAL_TIME\",\"undertaker\":\"SETTLED_MERCHANT\"},{\"rateType\":\"SINGLE_PERCENT\",\"productCode\":\"USER_SCAN_WECHAT_OFFLINE\",\"fixedRate\":\"1\",\"paymentMethod\":\"REAL_TIME\",\"percentRate\":\"11\",\"undertaker\":\"SETTLED_MERCHANT\"},{\"rateType\":\"SINGLE_PERCENT\",\"productCode\":\"MERCHANT_SCAN_WECHAT_OFFLINE\",\"fixedRate\":\"1\",\"paymentMethod\":\"REAL_TIME\",\"percentRate\":\"1\",\"undertaker\":\"SETTLED_MERCHANT\"},{\"rateType\":\"SINGLE_PERCENT\",\"productCode\":\"WECHAT_OFFIACCOUNT_WECHAT_OFFLINE\",\"fixedRate\":\"1\",\"paymentMethod\":\"REAL_TIME\",\"percentRate\":\"1\",\"undertaker\":\"SETTLED_MERCHANT\"},{\"rateType\":\"SINGLE_PERCENT\",\"productCode\":\"USER_SCAN_ALIPAY_OFFLINE\",\"paymentMethod\":\"REAL_TIME\",\"minRate\":\"1\",\"percentRate\":\"1\",\"undertaker\":\"SETTLED_MERCHANT\"}]");
$request->setProductQualificationInfo("{ \"paymentScene\": \"RLZYFW\", \"systemScreenshotUrl\": \"https://staticres.yeepay.com/xxx.文件后缀\", \"specialPermitProcessUrl\": \"https://staticres.yeepay.com/xxx.文件后缀\", \"agreementPhotoUrl\": \"https://staticres.yeepay.com/xxx.文件后缀\" }");
$request->setFunctionService("[\"SHARE\",\"BACKUP\"]");
$request->setFunctionServiceQualificationInfo("{\"shareScene\":\"FZ_FJ001\",\"shareCertificate\":\"https://staticres.yeepay.com/xxx.文件后缀\",\"alipayBackupCount\":\"5\",\"wechatBackupCount\":\"30\"}");

try {
    $response = $api_client->bossRegisterContributeStandardV2($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->bossRegisterContributeStandardV2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**|  | [optional]
 **businessRole** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **merchantSubjectInfo** | **string**|  | [optional]
 **merchantCorporationInfo** | **string**|  | [optional]
 **merchantContactInfo** | **string**|  | [optional]
 **settlementAccountInfo** | **string**|  | [optional]
 **industryCategoryInfo** | **string**|  | [optional]
 **businessAddressInfo** | **string**|  | [optional]
 **productInfo** | **string**|  | [optional]
 **productQualificationInfo** | **string**|  | [optional]
 **functionService** | **string**|  | [optional]
 **functionServiceQualificationInfo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\BossMerchantNetInStandardApiRespDTO**](../Model/BossMerchantNetInStandardApiRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **bossRegisterQueryV2**
BossRegisterQueryV2Response bossRegisterQueryV2(BossRegisterQueryV2Request request)

老板管账商户入网进度查询

老板管账子商户入网进度查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\BossRegisterQueryV2Request();
$request->setRequestNo("requestNo_example");

try {
    $response = $api_client->bossRegisterQueryV2($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->bossRegisterQueryV2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**| &lt;div data-page-id&#x3D;\&quot;OY64dHLw1o1F9Ex1aTIcfgg5nHf\&quot; data-docx-has-block-data&#x3D;\&quot;false\&quot;&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-JUtZdd26ioBCyoxDsKdcKHC8nnd\&quot;&gt;入网请求号&lt;/div&gt; &lt;/div&gt; |

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\BossMerchantNetInProgressQueryApiRespDTO**](../Model/BossMerchantNetInProgressQueryApiRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **mer_qualification_supplement**
MerQualificationSupplementResponse mer_qualification_supplement(MerQualificationSupplementRequest request)

补交商户资质

补交商户资质

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\MerQualificationSupplementRequest();
$request->setRequestNo("requestNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setQualifications("[     {         \"qualificationType\": \"授权书类型\",         \"qualificationAddressUrl\": \"授权书地址\"     },     {         \"qualificationType\": \"保理协议类型\",         \"qualificationAddressUrl\": \"保理协议地址 \"     } ]");

try {
    $response = $api_client->mer_qualification_supplement($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->mer_qualification_supplement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **qualifications** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\SupplementMerQuaRespDTO**](../Model/SupplementMerQuaRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **merchantDisposeQuery**
MerchantDisposeQueryResponse merchantDisposeQuery(MerchantDisposeQueryRequest request)

沉默商户解冻申请进度查询

查询沉默商户解冻申请单进度

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\MerchantDisposeQueryRequest();
$request->setRequestNo("requestNo_example");
$request->setApplicationNo("applicationNo_example");

try {
    $response = $api_client->merchantDisposeQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->merchantDisposeQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**| 请求号与工单号二选一必填 | [optional]
 **applicationNo** | **string**| 请求号与工单号二选一必填 | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\MerchantDisposeQueryMerchantQueryDisposeNotifyRespDtoResult**](../Model/MerchantDisposeQueryMerchantQueryDisposeNotifyRespDtoResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **merchantDisposeUnfreeze**
MerchantDisposeUnfreezeResponse merchantDisposeUnfreeze(MerchantDisposeUnfreezeRequest request)

沉默商户解冻申请

支持自助发起沉默商户解冻

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\MerchantDisposeUnfreezeRequest();
$request->setRequestNo("requestNo_example");
$request->setNotifyUrl("notifyUrl_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->merchantDisposeUnfreeze($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->merchantDisposeUnfreeze: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\MerchantDisposeUnfreezeMerchantDisposeRespDtoResult**](../Model/MerchantDisposeUnfreezeMerchantDisposeRespDtoResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **merchantInfoModify**
MerchantInfoModifyResponse merchantInfoModify(MerchantInfoModifyRequest request)

商户信息变更

商户信息变更

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\MerchantInfoModifyRequest();
$request->setRequestNo("a04cf8bded8b4413a43ab455b21eedcd");
$request->setMerchantNo("merchantNo_example");
$request->setNotifyUrl("notifyUrl_example");
$request->setMerchantSubjectInfo("{ \"licenceUrl\":\"商户证件照片地址\", \"signName\":\"商户签约名\", \"licenceNo\":\"商户证件号码\", \"shortName\":\"商户简称\" }");
$request->setMerchantCorporationInfo("{ \"legalName\":\"法人名称\", \"legalLicenceType\":\"ID_CARD\", \"legalLicenceNo\":\"法人证件编号\", \"legalLicenceFrontUrl\":\"法人证件人像面照片地址\", \"legalLicenceBackUrl\":\"法人证件非人像面照片地址\" }");
$request->setMerchantContactInfo("{ \"contactName\":\"联系人姓名\", \"contactMobile\":\"联系人手机号\", \"contactEmail\":\"联系人邮箱\", \"contactLicenceNo\":\"联系人证件号码\" ,\"servicePhone\":\"客服电话\"}");
$request->setIndustryCategoryInfo("{ \"primaryIndustryCategory\":\"一级行业分类编码\", \"secondaryIndustryCategory\":\"二级行业分类编码\" }");
$request->setBusinessAddressInfo("{ \"province\":\"经营省\", \"city\":\"经营市\", \"district\":\"经营区\", \"address\":\"经营地址\" }");
$request->setAccountInfo("{\"bankAccountName\":\"开户名称\",\"bankAccountType\":\"银行账户类型\",\"bankCardNo\":\"银行账户号码\",\"bankCardTag\":\"[\\\"SETTLEMENT\\\",\\\"WITHDRAW\\\"]\",\"authorizationUrl\":\"https://staticres.yeepay.com/xxx.文件后缀\",\"bankCode\":\"开户总行编码\"}");
$request->setBankToken("{ \"deviceIp\":\"交易ip\", \"token\":\"交易口令\"}");

try {
    $response = $api_client->merchantInfoModify($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->merchantInfoModify: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **merchantSubjectInfo** | **string**|  | [optional]
 **merchantCorporationInfo** | **string**|  | [optional]
 **merchantContactInfo** | **string**|  | [optional]
 **industryCategoryInfo** | **string**|  | [optional]
 **businessAddressInfo** | **string**|  | [optional]
 **accountInfo** | **string**|  | [optional]
 **bankToken** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\MerchantInfoModifyMerchantInfoModifyRespDTOResult**](../Model/MerchantInfoModifyMerchantInfoModifyRespDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **merchantSupplementQualificationQuery**
MerchantSupplementQualificationQueryResponse merchantSupplementQualificationQuery(MerchantSupplementQualificationQueryRequest request)

后补资质查询

后补资质查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\MerchantSupplementQualificationQueryRequest();
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->merchantSupplementQualificationQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->merchantSupplementQualificationQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\MerchantSupplementQualificationQueryQueryMopQuaInfoRespDTOResult**](../Model/MerchantSupplementQualificationQueryQueryMopQuaInfoRespDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **merchantSupplementQualificationSubmit**
MerchantSupplementQualificationSubmitResponse merchantSupplementQualificationSubmit(MerchantSupplementQualificationSubmitRequest request)

后补资质提交

后补资质提交

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\MerchantSupplementQualificationSubmitRequest();
$request->setMerchantNo("1234567890");
$request->setQualifications("[   {     \"value\": \"https://staticres.yeepay.com/xxx.文件后缀\",     \"key\": \"LEGAL_LICENCE_FRONT_URL\"   },   {     \"value\": \"https://staticres.yeepay.com/xxx.文件后缀\",     \"key\": \"LEGAL_LICENCE_BACK_URL\"   } ]");

try {
    $response = $api_client->merchantSupplementQualificationSubmit($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->merchantSupplementQualificationSubmit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**|  | [optional]
 **qualifications** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\MerchantSupplementQualificationSubmitSubmitMopQuaInfoRespDTOResult**](../Model/MerchantSupplementQualificationSubmitSubmitMopQuaInfoRespDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **merchantWechatauthCancel**
MerchantWechatauthCancelResponse merchantWechatauthCancel(MerchantWechatauthCancelRequest request)

撤销微信实名认证申请单

撤销微信实名认证申请单

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\MerchantWechatauthCancelRequest();
$request->setApplymentId("applymentId_example");
$request->setRequestNo("requestNo_example");
$request->setSubMerchantNo("subMerchantNo_example");
$request->setReportFee("reportFee_example");
$request->setChannelId("channelId_example");

try {
    $response = $api_client->merchantWechatauthCancel($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->merchantWechatauthCancel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applymentId** | **string**|  | [optional]
 **requestNo** | **string**|  | [optional]
 **subMerchantNo** | **string**|  | [optional]
 **reportFee** | **string**|  | [optional]
 **channelId** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\MerchantWechatauthCancelApplymentCancelRespDtoResult**](../Model/MerchantWechatauthCancelApplymentCancelRespDtoResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **merchantWechatauthQuery**
MerchantWechatauthQueryResponse merchantWechatauthQuery(MerchantWechatauthQueryRequest request)

查询微信实名认证状态

查询微信实名认证状态

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\MerchantWechatauthQueryRequest();
$request->setApplymentId("applymentId_example");
$request->setSubMerchantNo("subMerchantNo_example");
$request->setReportFee("reportFee_example");
$request->setRequestNo("requestNo_example");

try {
    $response = $api_client->merchantWechatauthQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->merchantWechatauthQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applymentId** | **string**|  |
 **subMerchantNo** | **string**|  |
 **reportFee** | **string**| GONGYI 微信公益&lt;br&gt;GONGJIAO 微信公缴&lt;br&gt;XIANXIA 微信线下&lt;br&gt;BAOXIAN 微信保险&lt;br&gt;XIANSHANG 微信线上&lt;br&gt;OLDLVZHOU 微信老绿洲&lt;br&gt;LVZHOU 微信绿洲&lt;br&gt;XIAOYUAN 微信校园&lt;br&gt;JIEDAIFENLI 微信借贷分离&lt;br&gt;SHUYU 微信数娱 |
 **requestNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\MerchantWechatauthQueryQueryCertificateResultRespDtoResult**](../Model/MerchantWechatauthQueryQueryCertificateResultRespDtoResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **notifyRepeatV2**
NotifyRepeatV2Response notifyRepeatV2(NotifyRepeatV2Request request)

重复获取(短验/邮件/电子签章)

重复获取(短验/邮件/电子签章)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\NotifyRepeatV2Request();
$request->setRequestNo("requestNo_example");
$request->setApplicationNo("applicationNo_example");
$request->setType("type_example");

try {
    $response = $api_client->notifyRepeatV2($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->notifyRepeatV2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**|  | [optional]
 **applicationNo** | **string**|  | [optional]
 **type** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\NotifyRepeatV2MerchantNetInRepeatNotifyRespDtoResult**](../Model/NotifyRepeatV2MerchantNetInRepeatNotifyRespDtoResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **productFeeModifyV2**
ProductFeeModifyV2Response productFeeModifyV2(ProductFeeModifyV2Request request)

商户产品变更

商户产品变更

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\ProductFeeModifyV2Request();
$request->setRequestNo("requestNo_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setNotifyUrl("notifyUrl_example");
$request->setProductInfo("[{\"productCode\":\"MERCHANT_SCAN_ALIPAY_OFFLINE\",\"rateType\":\"SINGLE_PERCENT\",\"percentRate\":\"0.1\",\"undertaker\":\"PLATFORM_MERCHANT\",\"paymentMethod\":\"REAL_TIME\"}]");
$request->setProductQualificationInfo("{\"mcc\":\"7829\",\"paymentScene\":\"RLZYFW\",\"systemScreenshotUrl\":\"https://staticres.yeepay.com/xxx.文件后缀\",\"specialPermitProcessUrl\":\"https://staticres.yeepay.com/xxx.文件后缀\",\"agreementPhotoUrl\":\"https://staticres.yeepay.com/xxx.文件后缀\"}");
$request->setSettlementAccountInfo("{ \"settlementDirection\":\"结算方向\", \"bankCode\":\"开户总行编码\", \"bankAccountType\":\"银行账户类型\", \"bankCardNo\":\"银行账户号码\" }");
$request->setFunctionService("[\"SHARE\"]");
$request->setFunctionServiceQualificationInfo("{\"shareScene\":\"FZ_FJ001\",\"shareCertificate\":\"https://staticres.yeepay.com/xxx.文件后缀\"}");

try {
    $response = $api_client->productFeeModifyV2($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->productFeeModifyV2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **productInfo** | **string**|  | [optional]
 **productQualificationInfo** | **string**|  | [optional]
 **settlementAccountInfo** | **string**|  | [optional]
 **functionService** | **string**|  | [optional]
 **functionServiceQualificationInfo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\ProductFeeModifyV2ModifyProductFeeRespDtoResult**](../Model/ProductFeeModifyV2ModifyProductFeeRespDtoResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **productFeeQueryV2**
ProductFeeQueryV2Response productFeeQueryV2(ProductFeeQueryV2Request request)

商户产品费率查询

商户产品费率查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\ProductFeeQueryV2Request();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setProductCode("MERCHANT_SCAN_ALIPAY_OFFLINE");

try {
    $response = $api_client->productFeeQueryV2($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->productFeeQueryV2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**| 如果为平台商拓展商户（入驻商户），此为平台商商户编号；&lt;br&gt;如为saas服务商拓展商户（平台商/标准商户），此为saas服务商商户编号。 |
 **merchantNo** | **string**| 需要查询产品的商户编号 |
 **productCode** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\ProductFeeQueryV2QueryProductFeeRespDtoResult**](../Model/ProductFeeQueryV2QueryProductFeeRespDtoResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **productIncrementSettleOpenV2**
ProductIncrementSettleOpenV2Response productIncrementSettleOpenV2(ProductIncrementSettleOpenV2Request request)

增值结算产品开通

增值结算产品开通

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\ProductIncrementSettleOpenV2Request();
$request->setRequestNo("requestNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setProductInfo("[{\"productCode\":\"S0\",\"rateType\":\"FIXED_MIX_PERCENT\",\"percentRate\":\"0.1\",\"fixedRate\":\"111\"}]");
$request->setNotifyUrl("notifyUrl_example");

try {
    $response = $api_client->productIncrementSettleOpenV2($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->productIncrementSettleOpenV2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **productInfo** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\ProductIncrementSettleOpenV2AddIncrementSettleProductRespDtoResult**](../Model/ProductIncrementSettleOpenV2AddIncrementSettleProductRespDtoResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **productModifyQueryV2**
ProductModifyQueryV2Response productModifyQueryV2(ProductModifyQueryV2Request request)

商户产品变更进度查询接口

商户产品变更进度查询接口

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\ProductModifyQueryV2Request();
$request->setRequestNo("0adc579914d541f8baa3be75387846f1");

try {
    $response = $api_client->productModifyQueryV2($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->productModifyQueryV2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**|  |

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\ProductModifyQueryV2ProductModifyProgressQueryRespDtoResult**](../Model/ProductModifyQueryV2ProductModifyProgressQueryRespDtoResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **qualificationSupplement**
QualificationSupplementResponse qualificationSupplement(QualificationSupplementRequest request)

补交商户资质

补交商户资质

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\QualificationSupplementRequest();
$request->setRequestNo("requestNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setQualifications("[     {         \"qualificationType\": \"授权书类型\",         \"qualificationAddressUrl\": \"授权书地址\"     },     {         \"qualificationType\": \"保理协议类型\",         \"qualificationAddressUrl\": \"保理协议地址 \"     } ]");

try {
    $response = $api_client->qualificationSupplement($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->qualificationSupplement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **qualifications** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\SupplementMerQuaRespDTO**](../Model/SupplementMerQuaRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **qualificationSupplementary**
QualificationSupplementaryResponse qualificationSupplementary(QualificationSupplementaryRequest request)

补交资质信息

补交资质信息

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\QualificationSupplementaryRequest();
$request->setRequestNo("requestNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setRegistAddress("registAddress_example");
$request->setManageSection("manageSection_example");
$request->setCorporationFrontUrl("corporationFrontUrl_example");
$request->setCorporationBackUrl("corporationBackUrl_example");
$request->setCorporationExpiryDate("corporationExpiryDate_example");
$request->setQualificationUrl("qualificationUrl_example");
$request->setQualificationExpiryDate("qualificationExpiryDate_example");

try {
    $response = $api_client->qualificationSupplementary($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->qualificationSupplementary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **registAddress** | **string**|  | [optional]
 **manageSection** | **string**|  | [optional]
 **corporationFrontUrl** | **string**|  | [optional]
 **corporationBackUrl** | **string**|  | [optional]
 **corporationExpiryDate** | **string**|  | [optional]
 **qualificationUrl** | **string**|  | [optional]
 **qualificationExpiryDate** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\QualificationSupplementaryBaseRespDtoResult**](../Model/QualificationSupplementaryBaseRespDtoResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **registerAbroadContributeMerchantV2**
RegisterAbroadContributeMerchantV2Response registerAbroadContributeMerchantV2(RegisterAbroadContributeMerchantV2Request request)

跨境特约商户入网(企业/个体)

跨境特约商户入网(企业/个体)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\RegisterAbroadContributeMerchantV2Request();
$request->setRequestNo("0a0c579914d541f8b7a3be75387846f1");
$request->setMerchantSubjectInfo("{         \"licenceUrl\":\"商户证件照片地址\",         \"signName\":\"商户签约名\",         \"signType\":\"商户签约类型\",         \"licenceNo\":\"商户证件号码\",         \"shortName\":\"商户简称\"     }");
$request->setMerchantCorporationInfo("{ \"legalName\":\"法人名称\", \"legalLicenceType\":\"法人证件类型\", \"legalLicenceNo\":\"法人证件编号\", \"legalLicenceFrontUrl\":\"法人证件人像面照片地址\", \"legalLicenceBackUrl\":\"法人证件非人像面照片地址\" }");
$request->setMerchantContactInfo("{ \"contactName\":\"联系人姓名\", \"contactMobile\":\"联系人手机号\", \"contactEmail\":\"联系人邮箱\", \"contactLicenceNo\":\"联系人证件号码\" ,\"servicePhone\":\"客服电话\",\"adminEmail\":\"商户后台管理员邮箱\",\"adminMobile\":\"商户后台管理员手机号\" }");
$request->setIndustryCategoryInfo("{\"merchantClassification\":\"商户所属分类\",\"merchantClassificationOther\":\"商户所属分类其他\",\"primaryIndustryCategory\":\"一级行业分类编码\",\"secondaryIndustryCategory\":\"二级行业分类编码\"}");
$request->setBusinessAddressInfo("{\"registerNation\":\"注册国家或地区数字码\",\"merchantNation\":\"经营地国家或地区数字码\",\"registerAddress\":\"商户实际注册详细地址\",\"province\":\"经营省\",\"city\":\"经营市\",\"district\":\"经营区\",\"address\":\"经营地址\"}");
$request->setSettlementAccountInfo("{\"bankAccountName\":\"账户名\",\"settlementDirection\":\"结算方向\",\"bankCode\":\"开户总行编码\",\"bankAccountType\":\"银行账户类型\",\"bankCardNo\":\"银行账户号码\",\"bankBranch\":\"开户支行\",\"bankProProvince\":\"开户省\",\"bankProCity\":\"开户市\",\"bankProDistrict\":\"开户区\"}");
$request->setNotifyUrl("https://notify.merchant.com/xxx");
$request->setProductInfo("[{\"productCode\":\"MERCHANT_SCAN_ALIPAY_OFFLINE\",\"rateType\":\"SINGLE_PERCENT\",\"percentRate\":\"0.1\"},{\"productCode\":\"MERCHANT_SCAN_UNIONPAY_CREDIT\",\"rateType\":\"SINGLE_FIXED\",\"fixedRate\":\"1\"},{\"productCode\":\"T1\",\"rateType\":\"SINGLE_PERCENT\",\"percentRate\":\"0.1\"}]");
$request->setProductQualificationInfo("{\"mcc\":\"7829\",\"paymentScene\":\"RLZYFW\",\"systemScreenshotUrl\":\"https://staticres.yeepay.com/xxx.文件后缀\",\"specialPermitProcessUrl\":\"https://staticres.yeepay.com/xxx.文件后缀\",\"agreementPhotoUrl\":\"https://staticres.yeepay.com/xxx.文件后缀\"}");
$request->setFunctionService("[\"SHARE\"]");
$request->setFunctionServiceQualificationInfo("{\"shareScene\":\"FZ_FJ001\",\"shareCertificate\":\"https://staticres.yeepay.com/xxx.文件后缀\"}");
$request->setDirectorInfos("{\"licenceExpired\":\"证件到期日\",\"gender\":\"性别\",\"licenceType\":\"证件类型\",\"name\":\"姓名\",\"licenceBackUrl\":\"证件非人像面\",\"licenceNo\":\"证件编号\",\"licenceFrontUrl\":\"证件人像面\"}");
$request->setPubDeclareInfo("{\"isPubDeclare\":\"是否对公申报\",\"areaCodeProvice\":\"营业场所代码(省)\",\"areaCodeCity\":\"营业场所代码(市)\",\"areaCodeDistrict\":\"营业场所代码(区)\",\"attrCode\":\"经济类型代码\",\"postCode\":\"邮政编码\"}");
$request->setAbroadProductInfo("[{\"productCode\":\"MERCHANT_SCAN_ALIPAY_OFFLINE\",\"rateType\":\"SINGLE_PERCENT\",\"percentRate\":\"0.1\"},{\"productCode\":\"MERCHANT_SCAN_UNIONPAY_CREDIT\",\"rateType\":\"SINGLE_FIXED\",\"fixedRate\":\"1\"},{\"productCode\":\"T1\",\"rateType\":\"SINGLE_PERCENT\",\"percentRate\":\"0.1\"}]");
$request->setAbroadProductQualificationInfo("{\"mcc\":\"7829\",\"paymentScene\":\"RLZYFW\",\"systemScreenshotUrl\":\"https://staticres.yeepay.com/xxx.文件后缀\",\"specialPermitProcessUrl\":\"https://staticres.yeepay.com/xxx.文件后缀\",\"agreementPhotoUrl\":\"https://staticres.yeepay.com/xxx.文件后缀\"}");
$request->setShareholderInfos("{\"licenceExpired\":\"证件到期日\",\"gender\":\"性别\",\"licenceType\":\"证件类型\",\"name\":\"姓名\",\"licenceBackUrl\":\"证件非人像面\",\"licenceNo\":\"证件编号\",\"licenceFrontUrl\":\"证件人像面\",\"equityRatio\":\"股权比例\"}");
$request->setSeniorInfos("{\"licenceExpired\":\"证件到期日\",\"gender\":\"性别\",\"licenceType\":\"证件类型\",\"name\":\"姓名\",\"licenceBackUrl\":\"证件非人像面\",\"licenceNo\":\"证件编号\",\"licenceFrontUrl\":\"证件人像面\",\"equityRatio\":\"股权比例\"}");
$request->setBeneficialInfos("{\"licenceExpired\":\"证件到期日\",\"gender\":\"性别\",\"licenceType\":\"证件类型\",\"name\":\"姓名\",\"licenceBackUrl\":\"证件非人像面\",\"licenceNo\":\"证件编号\",\"licenceFrontUrl\":\"证件人像面\",\"equityRatio\":\"股权比例\"}");

try {
    $response = $api_client->registerAbroadContributeMerchantV2($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->registerAbroadContributeMerchantV2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**|  | [optional]
 **merchantSubjectInfo** | **string**|  | [optional]
 **merchantCorporationInfo** | **string**|  | [optional]
 **merchantContactInfo** | **string**|  | [optional]
 **industryCategoryInfo** | **string**|  | [optional]
 **businessAddressInfo** | **string**|  | [optional]
 **settlementAccountInfo** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **productInfo** | **string**|  | [optional]
 **productQualificationInfo** | **string**|  | [optional]
 **functionService** | **string**|  | [optional]
 **functionServiceQualificationInfo** | **string**|  | [optional]
 **directorInfos** | **string**|  | [optional]
 **pubDeclareInfo** | **string**|  | [optional]
 **abroadProductInfo** | **string**|  | [optional]
 **abroadProductQualificationInfo** | **string**|  | [optional]
 **shareholderInfos** | **string**|  | [optional]
 **seniorInfos** | **string**|  | [optional]
 **beneficialInfos** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\RegisterAbroadContributeMerchantV2ContributeMerchantNetInRespDtoResult**](../Model/RegisterAbroadContributeMerchantV2ContributeMerchantNetInRespDtoResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **registerAbroadQueryV2**
RegisterAbroadQueryV2Response registerAbroadQueryV2(RegisterAbroadQueryV2Request request)

跨境商户入网进度查询接口

跨境商户入网进度查询接口

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\RegisterAbroadQueryV2Request();
$request->setRequestNo("0adc579914d541f8baa3be75387846f1");

try {
    $response = $api_client->registerAbroadQueryV2($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->registerAbroadQueryV2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**|  |

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\RegisterAbroadQueryV2NetInProgressQueryRespDtoResult**](../Model/RegisterAbroadQueryV2NetInProgressQueryRespDtoResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **registerContributeIndexV2**
RegisterContributeIndexV2Response registerContributeIndexV2(RegisterContributeIndexV2Request request)

特约商户H5页面入网（小微）

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\RegisterContributeIndexV2Request();
$request->setRequestNo("示例值：REQ6437657876");
$request->setNotifyUrl("示例值：http://www.shili111.com");
$request->setReturnUrl("示例值：http://www.shili.com");
$request->setMobile("159****8288");
$request->setName("示例值：张三");
$request->setIdCardNo("示例值：430422199001236704");
$request->setWalletUserNo("示例值：User89849");

try {
    $response = $api_client->registerContributeIndexV2($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->registerContributeIndexV2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **returnUrl** | **string**|  | [optional]
 **mobile** | **string**|  | [optional]
 **name** | **string**|  | [optional]
 **idCardNo** | **string**|  | [optional]
 **walletUserNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\RegisterContributeIndexV2UserPreRegisterRespDtoResult**](../Model/RegisterContributeIndexV2UserPreRegisterRespDtoResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **registerContributeMerchantV2**
RegisterContributeMerchantV2Response registerContributeMerchantV2(RegisterContributeMerchantV2Request request)

特约商户入网(企业/个体)

特约商户入网(企业/个体)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\RegisterContributeMerchantV2Request();
$request->setRequestNo("YBRWQQH20210622XXXXXX");
$request->setBusinessRole("SETTLED_MERCHANT");
$request->setMerchantSubjectInfo("{         \"licenceUrl\":\"商户证件照片地址\",         \"signName\":\"商户签约名\",         \"signType\":\"商户签约类型\",         \"licenceNo\":\"商户证件号码\",         \"shortName\":\"商户简称\"     }");
$request->setMerchantCorporationInfo("{ \"legalName\":\"法人名称\", \"legalLicenceType\":\"法人证件类型\", \"legalLicenceNo\":\"法人证件编号\", \"legalLicenceFrontUrl\":\"法人证件人像面照片地址\", \"legalLicenceBackUrl\":\"法人证件非人像面照片地址\" }");
$request->setMerchantContactInfo("{ \"contactName\":\"联系人姓名\", \"contactMobile\":\"联系人手机号\", \"contactEmail\":\"联系人邮箱\", \"contactLicenceNo\":\"联系人证件号码\" ,\"servicePhone\":\"客服电话\",\"adminEmail\":\"商户后台管理员邮箱\",\"adminMobile\":\"商户后台管理员手机号\" }");
$request->setIndustryCategoryInfo("{ \"primaryIndustryCategory\":\"一级行业分类编码\", \"secondaryIndustryCategory\":\"二级行业分类编码\" }");
$request->setBusinessAddressInfo("{ \"province\":\"经营省\", \"city\":\"经营市\", \"district\":\"经营区\", \"address\":\"经营地址\" }");
$request->setSettlementAccountInfo("{ \"settlementDirection\":\"结算方向\", \"bankCode\":\"开户总行编码\",\"cnapsCode\":\"联行号\", \"bankAccountType\":\"银行账户类型\", \"bankCardNo\":\"银行账户号码\"}");
$request->setNotifyUrl("https://notify.merchant.com/xxx");
$request->setProductInfo("[{\"productCode\":\"MERCHANT_SCAN_ALIPAY_OFFLINE\",\"rateType\":\"SINGLE_PERCENT\",\"percentRate\":\"0.1\"},{\"productCode\":\"MERCHANT_SCAN_UNIONPAY_CREDIT\",\"rateType\":\"SINGLE_FIXED\",\"fixedRate\":\"1\"},{\"productCode\":\"T1\",\"rateType\":\"SINGLE_PERCENT\",\"percentRate\":\"0.1\"}]");
$request->setProductQualificationInfo("{\"mcc\":\"7829\",\"paymentScene\":\"RLZYFW\",\"systemScreenshotUrl\":\"https://staticres.yeepay.com/xxx.文件后缀\",\"specialPermitProcessUrl\":\"https://staticres.yeepay.com/xxx.文件后缀\",\"agreementPhotoUrl\":\"https://staticres.yeepay.com/xxx.文件后缀\"}");
$request->setFunctionService("[\"SHARE\",\"BACKUP\"]");
$request->setFunctionServiceQualificationInfo("{\"shareScene\":\"FZ_FJ001\",\"shareCertificate\":\"https://staticres.yeepay.com/xxx.文件后缀\",\"alipayBackupCount\":\"5\",\"wechatBackupCount\":\"30\"}");
$request->setBusinessScene("{\"businessSceneList\":[\"POS\"],\"isAppIdConfig\":\"YES\",\"appIdConfigType\":\"MERCHANT\",\"appId\":\"121\",\"appSecret\":\"121\"}");

try {
    $response = $api_client->registerContributeMerchantV2($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->registerContributeMerchantV2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**|  | [optional]
 **businessRole** | **string**|  | [optional]
 **merchantSubjectInfo** | **string**|  | [optional]
 **merchantCorporationInfo** | **string**|  | [optional]
 **merchantContactInfo** | **string**|  | [optional]
 **industryCategoryInfo** | **string**|  | [optional]
 **businessAddressInfo** | **string**|  | [optional]
 **settlementAccountInfo** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **productInfo** | **string**|  | [optional]
 **productQualificationInfo** | **string**|  | [optional]
 **functionService** | **string**|  | [optional]
 **functionServiceQualificationInfo** | **string**|  | [optional]
 **businessScene** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\RegisterContributeMerchantV2ContributeMerchantNetInRespDtoResult**](../Model/RegisterContributeMerchantV2ContributeMerchantNetInRespDtoResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **registerContributeMicroV2**
RegisterContributeMicroV2Response registerContributeMicroV2(RegisterContributeMicroV2Request request)

特约商户入网(小微)

特约商户入网(小微)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\RegisterContributeMicroV2Request();
$request->setRequestNo("YBRWQQH20210622XXXXXX");
$request->setBusinessRole("SETTLED_MERCHANT");
$request->setMerchantSubjectInfo("{ \"signName\":\"商户签约名\", \"shortName\":\"商户简称\" }");
$request->setMerchantCorporationInfo("{ \"legalLicenceType\":\"法人证件类型\", \"legalLicenceNo\":\"法人证件编号\", \"legalLicenceFrontUrl\":\"法人证件人像面照片地址\", \"legalLicenceBackUrl\":\"法人证件非人像面照片地址\",  \"mobile\":\"法人手机号\"  }");
$request->setBusinessAddressInfo("{ \"province\":\"经营省\", \"city\":\"经营市\", \"district\":\"经营区\", \"address\":\"经营地址\" }");
$request->setAccountInfo("{  \"bankAccountType\":\"银行账户类型\", \"bankCardNo\":\"银行账户号码\",  \"bankCode\":\"开户总行编码\"  }");
$request->setNotifyUrl("https://notify.merchant.com/xxx");
$request->setProductInfo("[{\"productCode\":\"MERCHANT_SCAN_ALIPAY_OFFLINE\",\"rateType\":\"SINGLE_PERCENT\",\"percentRate\":\"0.1\"},{\"productCode\":\"MERCHANT_SCAN_UNIONPAY_CREDIT\",\"rateType\":\"SINGLE_FIXED\",\"fixedRate\":\"1\"},{\"productCode\":\"T1\",\"rateType\":\"SINGLE_PERCENT\",\"percentRate\":\"0.1\"}]");
$request->setProductQualificationInfo("{\"paymentScene\": \"RLZYFW\",   \"systemScreenshotUrl\": \"https://staticres.yeepay.com/xxx.文件后缀\",   \"specialPermitProcessUrl\": \"https://staticres.yeepay.com/xxx.文件后缀\",   \"agreementPhotoUrl\": \"https://staticres.yeepay.com/xxx.文件后缀\" }");
$request->setFunctionService("[\"SHARE\",\"BACKUP\"]");
$request->setFunctionServiceQualificationInfo("{\"shareScene\":\"FZ_FJ001\",\"shareCertificate\":\"https://staticres.yeepay.com/xxx.文件后缀\",\"alipayBackupCount\":\"5\",\"wechatBackupCount\":\"30\"}");
$request->setBusinessScene("{\"businessSceneList\":[\"POS\"],\"isAppIdConfig\":\"YES\",\"appIdConfigType\":\"MERCHANT\",\"appId\":\"121\",\"appSecret\":\"121\"}");

try {
    $response = $api_client->registerContributeMicroV2($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->registerContributeMicroV2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**|  | [optional]
 **businessRole** | **string**|  | [optional]
 **merchantSubjectInfo** | **string**|  | [optional]
 **merchantCorporationInfo** | **string**|  | [optional]
 **businessAddressInfo** | **string**|  | [optional]
 **accountInfo** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **productInfo** | **string**|  | [optional]
 **productQualificationInfo** | **string**|  | [optional]
 **functionService** | **string**|  | [optional]
 **functionServiceQualificationInfo** | **string**|  | [optional]
 **businessScene** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\RegisterContributeMicroV2ContributeMicroMerchantNetInRespDtoResult**](../Model/RegisterContributeMicroV2ContributeMicroMerchantNetInRespDtoResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **registerContributeWebIndexV2**
RegisterContributeWebIndexV2Response registerContributeWebIndexV2(RegisterContributeWebIndexV2Request request)

特约商户WEB页面入网（企业/个体）

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\RegisterContributeWebIndexV2Request();
$request->setRequestNo("fba1dd39fd3846b4901f5a833fa3baa3");
$request->setSignType("ENTERPRISE");
$request->setNotifyUrl("http://www.yeepay.com/merchant/notify");
$request->setReturnUrl("http://www.yeepay.com");
$request->setProductTemplateNo("CP166748***3516");
$request->setMerchantBaseInfo("{ \"signName\":\"商户签约名\", \"licenceNo\":\"商户证件号码\"}");
$request->setCorporationInfo("{ \"legalName\":\"法人名称\",  \"legalLicenceNo\":\"法人证件编号\"}");
$request->setContactInfo("{ \"contactName\":\"联系人姓名\", \"contactMobile\":\"联系人手机号\", \"contactEmail\":\"联系人邮箱\", \"contactLicenceNo\":\"联系人证件号码\" ,\"servicePhone\":\"客服电话\"}");
$request->setBusinessAddressInfo("{ \"address\":\"商户实际经营地址\"}");

try {
    $response = $api_client->registerContributeWebIndexV2($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->registerContributeWebIndexV2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**|  | [optional]
 **signType** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **returnUrl** | **string**|  | [optional]
 **productTemplateNo** | **string**|  | [optional]
 **merchantBaseInfo** | **string**|  | [optional]
 **corporationInfo** | **string**|  | [optional]
 **contactInfo** | **string**|  | [optional]
 **businessAddressInfo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\RegisterContributeWebIndexV2CreateNetInUrlRespDTOResult**](../Model/RegisterContributeWebIndexV2CreateNetInUrlRespDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **registerQueryV2**
RegisterQueryV2Response registerQueryV2(RegisterQueryV2Request request)

商户入网进度查询接口

商户入网进度查询接口

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\RegisterQueryV2Request();
$request->setRequestNo("0adc579914d541f8baa3be75387846f1");

try {
    $response = $api_client->registerQueryV2($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->registerQueryV2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**|  |

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\RegisterQueryV2NetInProgressQueryRespDtoResult**](../Model/RegisterQueryV2NetInProgressQueryRespDtoResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **rest_v2_mer_boss_register_contribute_divide**
RestV2MerBossRegisterContributeDivideResponse rest_v2_mer_boss_register_contribute_divide(RestV2MerBossRegisterContributeDivideRequest request)

老板管账特约商户入网(企业/个体)-收单+分账

老板管账特约商户入网(企业/个体)-收单+分账

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\RestV2MerBossRegisterContributeDivideRequest();
$request->setRequestNo("YBRWQQH20231113XXXXXX");
$request->setBusinessRole("SETTLED_MERCHANT");
$request->setNotifyUrl("https://notify.merchant.com/xxx");
$request->setMerchantSubjectInfo("{ \"licenceUrl\":\"商户证件照片地址\", \"signName\":\"商户签约名\", \"signType\":\"商户签约类型\", \"licenceNo\":\"商户证件号码\", \"shortName\":\"商户简称\" }");
$request->setMerchantCorporationInfo("{ \"legalName\":\"法人名称\", \"legalLicenceType\":\"法人证件类型\", \"legalLicenceNo\":\"法人证件编号\", \"legalLicenceFrontUrl\":\"法人证件正面照片地址\", \"legalLicenceBackUrl\":\"法人证件背面照片地址\" }");
$request->setMerchantContactInfo("{ \"contactName\":\"联系人姓名\", \"contactMobile\":\"联系人手机号\", \"contactEmail\":\"联系人邮箱\", \"contactLicenceNo\":\"联系人证件号码\"}");
$request->setIndustryCategoryInfo("{ \"primaryIndustryCategory\":\"一级行业分类编码\", \"secondaryIndustryCategory\":\"二级行业分类编码\" }");
$request->setBusinessAddressInfo("{ \"province\":\"经营省编码\", \"city\":\"经营市编码\", \"district\":\"经营区编码\", \"address\":\"经营地址\" }");
$request->setProductInfo("[{\"rateType\":\"SINGLE_FIXED\",\"productCode\":\"D1\",\"fixedRate\":\"0\",\"paymentMethod\":\"REAL_TIME\",\"undertaker\":\"PLATFORM_MERCHANT\"},{\"rateType\":\"SINGLE_PERCENT\",\"productCode\":\"USER_SCAN_WECHAT_OFFLINE\",\"fixedRate\":\"1\",\"paymentMethod\":\"REAL_TIME\",\"percentRate\":\"11\",\"undertaker\":\"PLATFORM_MERCHANT\"},{\"rateType\":\"SINGLE_PERCENT\",\"productCode\":\"MERCHANT_SCAN_WECHAT_OFFLINE\",\"fixedRate\":\"1\",\"paymentMethod\":\"REAL_TIME\",\"percentRate\":\"1\",\"undertaker\":\"PLATFORM_MERCHANT\"},{\"rateType\":\"SINGLE_PERCENT\",\"productCode\":\"WECHAT_OFFIACCOUNT_WECHAT_OFFLINE\",\"fixedRate\":\"1\",\"paymentMethod\":\"REAL_TIME\",\"percentRate\":\"1\",\"undertaker\":\"PLATFORM_MERCHANT\"},{\"rateType\":\"SINGLE_PERCENT\",\"productCode\":\"USER_SCAN_ALIPAY_OFFLINE\",\"paymentMethod\":\"REAL_TIME\",\"minRate\":\"1\",\"percentRate\":\"1\",\"undertaker\":\"PLATFORM_MERCHANT\"},{\"rateType\":\"SINGLE_FIXED\",\"productCode\":\"ENTERPRISE_PAYMENT_REALTIME_PUBLIC\",\"fixedRate\":\"10\",\"paymentMethod\":\"REAL_TIME\",\"minRate\":\"1\",\"undertaker\":\"PLATFORM_MERCHANT\"},{\"rateType\":\"SINGLE_FIXED\",\"productCode\":\"ENTERPRISE_PAYMENT_REALTIME_PRIVATE\",\"fixedRate\":\"10\",\"paymentMethod\":\"REAL_TIME\",\"minRate\":\"1\",\"undertaker\":\"PLATFORM_MERCHANT\"}]");
$request->setProductQualificationInfo("{ \"paymentScene\": \"RLZYFW\", \"systemScreenshotUrl\": \"https://staticres.yeepay.com/xxx.文件后缀\", \"specialPermitProcessUrl\": \"https://staticres.yeepay.com/xxx.文件后缀\", \"agreementPhotoUrl\": \"https://staticres.yeepay.com/xxx.文件后缀\" }");
$request->setFunctionService("[\"BACKUP\"]");
$request->setFunctionServiceQualificationInfo("{\"alipayBackupCount\":\"5\",\"wechatBackupCount\":\"30\"}");
$request->setDivideConfigInfo("{\"publicAccountInfo\":{\"bankCode\":\"bankCode\",\"bankCardNo\":\"bankCardNo\",\"accountType\":\"ENTERPRISE_ACCOUNT\",\"settleRatio\":\"50\"},\"receiverInfo\":[{\"receiverType\":\"TO_PRIVATE\",\"receiverName\":\"receiverName \",\"licenceNo\":\"licenceNo\",\"accountLabel\":\"API测试\",\"settleCardInfo\":[{\"bankCode\":\"bankCode\",\"bankCardNo\":\"bankCardNo\",\"mobile\":\"mobile\",\"settleRatio\":\"30.00\"}]},{\"legalName\":\"legalName\",\"legalLicenceNo\":\"legalLicenceNo\",\"receiverType\":\"TO_PUBLIC\",\"receiverName\":\"receiverName\",\"licenceNo\":\"licenceNo\",\"accountLabel\":\"API测试1\",\"settleCardInfo\":[{\"bankCode\":\"bankCode\",\"bankCardNo\":\"bankCardNo\",\"settleRatio\":\"20.00\"}]}],\"toPublicDivideUrl\":\"对公分账资质文件url\",\"divideMode\":\"AUTO\"}");

try {
    $response = $api_client->rest_v2_mer_boss_register_contribute_divide($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->rest_v2_mer_boss_register_contribute_divide: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**|  | [optional]
 **businessRole** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **merchantSubjectInfo** | **string**|  | [optional]
 **merchantCorporationInfo** | **string**|  | [optional]
 **merchantContactInfo** | **string**|  | [optional]
 **industryCategoryInfo** | **string**|  | [optional]
 **businessAddressInfo** | **string**|  | [optional]
 **productInfo** | **string**|  | [optional]
 **productQualificationInfo** | **string**|  | [optional]
 **functionService** | **string**|  | [optional]
 **functionServiceQualificationInfo** | **string**|  | [optional]
 **divideConfigInfo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\BossMerchantNetInDivideApiRespDTO**](../Model/BossMerchantNetInDivideApiRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **rest_v2_mer_boss_register_contribute_standard**
RestV2MerBossRegisterContributeStandardResponse rest_v2_mer_boss_register_contribute_standard(RestV2MerBossRegisterContributeStandardRequest request)

老板管账特约商户入网(企业/个体)-收单+结算

特约商户入网(企业/个体)-收单+结算

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\RestV2MerBossRegisterContributeStandardRequest();
$request->setRequestNo("YBRWQQH20231113XXXXXX");
$request->setBusinessRole("ORDINARY_MERCHANT");
$request->setNotifyUrl("https://notify.merchant.com/xxx");
$request->setMerchantSubjectInfo("merchantSubjectInfo_example");
$request->setMerchantCorporationInfo("示例值：{ \"legalName\":\"法人名称\", \"legalLicenceType\":\"法人证件类型\", \"legalLicenceNo\":\"法人证件编号\", \"legalLicenceFrontUrl\":\"法人证件正面照片地址\", \"legalLicenceBackUrl\":\"法人证件背面照片地址\" }");
$request->setMerchantContactInfo("{ \"contactName\":\"联系人姓名\", \"contactMobile\":\"联系人手机号\", \"contactEmail\":\"联系人邮箱\", \"contactLicenceNo\":\"联系人证件号码\"}");
$request->setSettlementAccountInfo("{ \"settlementDirection\":\"结算方向\", \"bankCode\":\"开户总行编码\", \"bankAccountType\":\"银行账户类型\", \"bankCardNo\":\"银行账户号码\" }");
$request->setIndustryCategoryInfo("{ \"primaryIndustryCategory\":\"一级行业分类编码\", \"secondaryIndustryCategory\":\"二级行业分类编码\" }");
$request->setBusinessAddressInfo("{ \"province\":\"经营省编码\", \"city\":\"经营市编码\", \"district\":\"经营区编码\", \"address\":\"经营地址\" }");
$request->setProductInfo("[{\"rateType\":\"SINGLE_FIXED\",\"productCode\":\"D1\",\"fixedRate\":\"0\",\"paymentMethod\":\"REAL_TIME\",\"undertaker\":\"SETTLED_MERCHANT\"},{\"rateType\":\"SINGLE_PERCENT\",\"productCode\":\"USER_SCAN_WECHAT_OFFLINE\",\"fixedRate\":\"1\",\"paymentMethod\":\"REAL_TIME\",\"percentRate\":\"11\",\"undertaker\":\"SETTLED_MERCHANT\"},{\"rateType\":\"SINGLE_PERCENT\",\"productCode\":\"MERCHANT_SCAN_WECHAT_OFFLINE\",\"fixedRate\":\"1\",\"paymentMethod\":\"REAL_TIME\",\"percentRate\":\"1\",\"undertaker\":\"SETTLED_MERCHANT\"},{\"rateType\":\"SINGLE_PERCENT\",\"productCode\":\"WECHAT_OFFIACCOUNT_WECHAT_OFFLINE\",\"fixedRate\":\"1\",\"paymentMethod\":\"REAL_TIME\",\"percentRate\":\"1\",\"undertaker\":\"SETTLED_MERCHANT\"},{\"rateType\":\"SINGLE_PERCENT\",\"productCode\":\"USER_SCAN_ALIPAY_OFFLINE\",\"paymentMethod\":\"REAL_TIME\",\"minRate\":\"1\",\"percentRate\":\"1\",\"undertaker\":\"SETTLED_MERCHANT\"}]");
$request->setProductQualificationInfo("{ \"paymentScene\": \"RLZYFW\", \"systemScreenshotUrl\": \"https://staticres.yeepay.com/xxx.文件后缀\", \"specialPermitProcessUrl\": \"https://staticres.yeepay.com/xxx.文件后缀\", \"agreementPhotoUrl\": \"https://staticres.yeepay.com/xxx.文件后缀\" }");
$request->setFunctionService("[\"SHARE\",\"BACKUP\"]");
$request->setFunctionServiceQualificationInfo("{\"shareScene\":\"FZ_FJ001\",\"shareCertificate\":\"https://staticres.yeepay.com/xxx.文件后缀\",\"alipayBackupCount\":\"5\",\"wechatBackupCount\":\"30\"}");

try {
    $response = $api_client->rest_v2_mer_boss_register_contribute_standard($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->rest_v2_mer_boss_register_contribute_standard: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**|  | [optional]
 **businessRole** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **merchantSubjectInfo** | **string**|  | [optional]
 **merchantCorporationInfo** | **string**|  | [optional]
 **merchantContactInfo** | **string**|  | [optional]
 **settlementAccountInfo** | **string**|  | [optional]
 **industryCategoryInfo** | **string**|  | [optional]
 **businessAddressInfo** | **string**|  | [optional]
 **productInfo** | **string**|  | [optional]
 **productQualificationInfo** | **string**|  | [optional]
 **functionService** | **string**|  | [optional]
 **functionServiceQualificationInfo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\BossMerchantNetInStandardApiRespDTO**](../Model/BossMerchantNetInStandardApiRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **rest_v2_mer_boss_register_query**
RestV2MerBossRegisterQueryResponse rest_v2_mer_boss_register_query(RestV2MerBossRegisterQueryRequest request)

老板管账商户入网进度查询

老板管账子商户入网进度查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\RestV2MerBossRegisterQueryRequest();
$request->setRequestNo("requestNo_example");

try {
    $response = $api_client->rest_v2_mer_boss_register_query($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->rest_v2_mer_boss_register_query: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**| &lt;div data-page-id&#x3D;\&quot;OY64dHLw1o1F9Ex1aTIcfgg5nHf\&quot; data-docx-has-block-data&#x3D;\&quot;false\&quot;&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-JUtZdd26ioBCyoxDsKdcKHC8nnd\&quot;&gt;入网请求号&lt;/div&gt; &lt;/div&gt; |

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\BossMerchantNetInProgressQueryApiRespDTO**](../Model/BossMerchantNetInProgressQueryApiRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

