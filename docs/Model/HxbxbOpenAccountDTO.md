# HxbxbOpenAccountDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**deviceIp** | **string** | &lt;p&gt;设备IP&lt;/p&gt; | [optional] 
**deviceMac** | **string** | &lt;p&gt;设备Mac地址&lt;/p&gt; | [optional] 
**businessScope** | **string** | &lt;p&gt;经营范围&lt;/p&gt; | 
**magAddress** | **string** | &lt;p&gt;企业实际经营地址&lt;/p&gt; | 
**contactName** | **string** | &lt;p&gt;联系人姓名&lt;/p&gt; | 
**contactMobile** | **string** | &lt;p&gt;联系人手机号&lt;/p&gt; | 
**contactCardType** | **string** | &lt;p&gt;联系人证件类型不支持&lt;br /&gt;可选项如下:&lt;br /&gt;ID_CARD:身份证&lt;/p&gt; | 
**contactCardNo** | **string** | &lt;p&gt;联系人证件号码&lt;/p&gt; | 
**contactCardStartDate** | **string** | &lt;p&gt;联系人证件生效日期&lt;br /&gt;参数格式为yyyyMMdd&lt;/p&gt; | 
**contactCardExpireDate** | **string** | &lt;p&gt;联系人证件失效日期&lt;br /&gt;参数格式为yyyyMMdd或者forever&lt;/p&gt; | 
**contactCardImageFont** | **string** | &lt;p&gt;联系人证件照片正面地址&lt;/p&gt; | 
**contactCardImageBack** | **string** | &lt;p&gt;联系人证件照片反面地址&lt;/p&gt; | 
**legalMobile** | **string** | &lt;p&gt;法人手机号码&lt;/p&gt; | 
**legalLicenceEffectiveDate** | **string** | &lt;p&gt;法人证件生效日期&lt;br /&gt;参数格式为yyyyMMdd&lt;/p&gt; | 
**legalLicenceExpirationDate** | **string** | &lt;p&gt;法人证件失效日期&lt;br /&gt;参数格式为yyyyMMdd或者forever&lt;/p&gt; | 
**legalContactAddress** | **string** | &lt;p&gt;法人联系地址&lt;/p&gt; | 
**legalCardImageFont** | **string** | &lt;p&gt;法人证件照片正面地址&lt;/p&gt; | 
**legalCardImageBack** | **string** | &lt;p&gt;法人证件照片反面地址&lt;/p&gt; | 
**benefitDTOList** | [**\Yeepay\Yop\Sdk\Service\Account\Model\BenefitInfoHxbxbDTO[]**](BenefitInfoHxbxbDTO.md) | &lt;p&gt;收益人信息&lt;br /&gt;开立账户类型为企业时必填且只能填写一个&lt;/p&gt; | [optional] 
**shareholderDTOList** | [**\Yeepay\Yop\Sdk\Service\Account\Model\ShareHolderHxbxbDTO[]**](ShareHolderHxbxbDTO.md) | &lt;p&gt;股东信息&lt;br /&gt;开立账户类型为企业时必填且只能填写一个&lt;/p&gt; &lt;p&gt;分公司、分店无股东场景下,传入总公司股东&lt;/p&gt; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


