# SettleRecordDetailsDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**accountNo** | **string** | 账号 | [optional] 
**realAmount** | **float** | 到账金额 | [optional] 
**status** | **string** | &lt;p&gt;到账状态&lt;/p&gt; &lt;div&gt; &lt;pre&gt;INIT:待处理&lt;/pre&gt; &lt;div&gt; &lt;pre&gt;REMIT_PROCESS:银行处理中&lt;/pre&gt; &lt;div&gt; &lt;pre&gt;REMIT_FAIL:出款失败&lt;/pre&gt; &lt;div&gt; &lt;pre&gt;ACCOUNTING_FAIL:出款失败&lt;/pre&gt; &lt;/div&gt; &lt;div&gt; &lt;pre&gt;REMIT_SUCCESS:已到账&lt;/pre&gt; &lt;/div&gt; &lt;div&gt; &lt;pre&gt;SUCCESS:已到账&lt;/pre&gt; &lt;p&gt;&amp;nbsp;&lt;/p&gt; &lt;/div&gt; &lt;/div&gt; &lt;/div&gt; &lt;/div&gt; | [optional] 
**statusDesc** | **string** | 到账状态描述 | [optional] 
**errorCode** | **string** | 错误码 | [optional] 
**errorMessage** | **string** | 错误信息 | [optional] 
**correct** | **bool** | 是否冲退 | [optional] 
**channelRequestNo** | **string** | 出款流水号 | [optional] 
**accountType** | **string** | 账户类型 | [optional] 
**accountTypeDesc** | **string** | 账户类型描述 | [optional] 
**accountNameMast** | **string** | 账户名 | [optional] 
**finishTime** | [**\DateTime**](\DateTime.md) | &lt;p&gt;完成时间&lt;/p&gt; | [optional] 
**reverseTime** | [**\DateTime**](\DateTime.md) | &lt;p&gt;冲退时间&lt;/p&gt; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


