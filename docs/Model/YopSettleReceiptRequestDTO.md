# YopSettleReceiptRequestDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**parentMerchantNo** | **string** | &lt;p&gt;发起方商户编号&lt;br /&gt;*标准商户收付款方案中此参数与收款商户编号一致；&lt;br /&gt;*平台商户收付款方案中此参数为平台商商户编号；&lt;br /&gt;*服务商解决方案中，①标准商户收款时，该参数为标准商户商编 ②平台商收款或平台商入驻商户收款时，该参数为平台商商编。&lt;/p&gt; | 
**merchantNo** | **string** | &lt;p&gt;收款商户编号或入账方id&lt;/p&gt; | 
**receiverMerchantNo** | **string** | &lt;div&gt;&lt;span class&#x3D;\&quot;text-only\&quot; data-eleid&#x3D;\&quot;5\&quot;&gt;用于申请入账方的结算回单，如果merchantno传入了入账方id，需要传入入账方的归属商编。&lt;/span&gt;&lt;/div&gt; | [optional] 
**notifyUrl** | **string** |  | 
**settleStartTime** | **string** | &lt;p&gt;结算时间范围开始时间，此参数和结算请求号只能传一项&lt;/p&gt; | [optional] 
**settleEndTime** | **string** | &lt;p&gt;结算时间范围截止时间，此参数和结算请求号只能传一项&lt;/p&gt; | [optional] 
**settleRequestNo** | **string** | &lt;p&gt;结算请求号，此参数和结算时间范围参数只能传一项&lt;/p&gt; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


