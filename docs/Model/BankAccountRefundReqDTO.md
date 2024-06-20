# BankAccountRefundReqDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**parentMerchantNo** | **string** | &lt;p&gt;业务发起方商编&lt;br /&gt;*标准商户收付款方案中此参数与开户商户编号一致；*平台商户收付款方案中此参数为平台商商户编号；*服务商解决方案中，①所属标准商户申请开户时，该参数为服务商商编 ②所属平台商申请开户且以服务资质在银行开立母户时，此参数填写服务商商户编号 ②所属平台商入驻商户申请开户时需以平台资质在银行开立母户，该参数填写平台商商编&lt;/p&gt; | 
**merchantNo** | **string** | &lt;p&gt;商户编号&lt;br /&gt;易宝支付分配的的商户唯一标识&lt;/p&gt; | 
**refundFlowNo** | **string** | &lt;pre&gt;商户退回请求号&lt;br /&gt;由商户自定义生成&lt;/pre&gt; | 
**bankSerialNo** | **string** | &lt;pre&gt;银行流水号,入金通知里对应的银行流水号&lt;/pre&gt; | 
**bankCode** | **string** | &lt;pre&gt;开户银行编码&lt;/pre&gt; &lt;p&gt;可选项如下：&lt;/p&gt; &lt;pre&gt;SMB_LARGE&lt;/pre&gt; | 
**bankAccountBookNo** | **string** | &lt;p&gt;缴费账户号&lt;/p&gt; | 
**refundAmount** | **float** | &lt;pre&gt;退回金额&lt;br /&gt;单位：元（RMB）&lt;/pre&gt; | 
**notifyUrl** | **string** | &lt;p&gt;回调通知地址&lt;br /&gt;商户通知地址，不传则不通知回调内容请查看结果通知&lt;/p&gt; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


