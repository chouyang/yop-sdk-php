# SettleRecordQueryDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**summaryNo** | **string** | 结算订单号 | [optional] 
**settleAmount** | **float** | 应结金额 | [optional] 
**status** | **string** | &lt;p&gt;结算订单状态&lt;/p&gt; &lt;div&gt; &lt;pre&gt;SUCCESS:结算成功&lt;/pre&gt; &lt;div&gt; &lt;pre&gt;BEFORE_REMIT:待出款&lt;/pre&gt; &lt;div&gt; &lt;pre&gt;SETTLE_FAIL:结算异常&lt;/pre&gt; &lt;div&gt; &lt;pre&gt;REMITTING:银行处理中&lt;/pre&gt; &lt;div&gt; &lt;pre&gt;BANK_REVERSE:银行冲正&lt;/pre&gt; &lt;/div&gt; &lt;/div&gt; &lt;/div&gt; &lt;/div&gt; &lt;/div&gt; | [optional] 
**statusDesc** | **string** | 结算订单状态描述 | [optional] 
**createTime** | [**\DateTime**](\DateTime.md) | 结算订单创建时间 | [optional] 
**settleType** | **string** | 结算产品 | [optional] 
**realAmount** | **float** | 结算到账金额 | [optional] 
**realFee** | **float** | 结算手续费 | [optional] 
**settleRecordDetailsDtos** | [**\Yeepay\Yop\Sdk\Service\Settle\Model\SettleRecordDetailsDto[]**](SettleRecordDetailsDto.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


