# QueryOpenSubBankAccountRespDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**returnCode** | **string** | &lt;pre&gt;返回码&lt;br /&gt;该参数代表本次请求的处理结果，AM00000为请求成功 若请求失败参看对应错误码和错误信息&lt;/pre&gt; | 
**returnMsg** | **string** | &lt;pre&gt;响应信息&lt;/pre&gt; | [optional] 
**status** | **string** | &lt;pre&gt;开户状态&lt;br /&gt;可选项如下&lt;br /&gt;SUCCESS：成功&lt;br /&gt;FAIl：失败&lt;br /&gt;PROCESS：处理中&lt;/pre&gt; | [optional] 
**bankAccountBookName** | **string** | &lt;p&gt;缴费账户名&lt;/p&gt; | [optional] 
**bankAccountBookNo** | **string** | &lt;p&gt;缴费账户号&lt;/p&gt; | [optional] 
**balance** | **float** | &lt;pre&gt;余额&lt;br /&gt;单位：元（RMB）&lt;/pre&gt; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


