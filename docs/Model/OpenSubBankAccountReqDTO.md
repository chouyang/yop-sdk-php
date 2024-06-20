# OpenSubBankAccountReqDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**parentMerchantNo** | **string** | &lt;p&gt;业务发起方商编&lt;br /&gt;*标准商户收付款方案中此参数与开户商户编号一致；*平台商户收付款方案中此参数为平台商商户编号；*服务商解决方案中，①所属标准商户申请开户时，该参数为服务商商编 ②所属平台商申请开户且以服务资质在银行开立母户时，此参数填写服务商商户编号 ②所属平台商入驻商户申请开户时需以平台资质在银行开立母户，该参数填写平台商商编&lt;/p&gt; | 
**merchantNo** | **string** | &lt;pre&gt;商户编号&lt;br /&gt;易宝支付分配的的商户唯一标识&lt;/pre&gt; | 
**merchantAccountUid** | **string** | &lt;pre&gt;商户侧记账簿编号，数字、字母、下划线组合&lt;/pre&gt; | 
**bankCode** | **string** | &lt;pre&gt;开户银行编码&lt;/pre&gt; &lt;p&gt;可选项如下：&lt;/p&gt; &lt;pre&gt;SMB_LARGE&lt;/pre&gt; | 
**bankAccountNo** | **string** | &lt;pre&gt;银行账户号&lt;br /&gt;备注：对应银行开户接口中，开成功的银行账户号&lt;/pre&gt; | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


