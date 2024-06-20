# PayResponseDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | &lt;p&gt;代表本次请求成功，订单状态需要关注status&lt;/p&gt; | [optional] 
**payAmount** | **float** | &lt;pre&gt;支付金额&lt;/pre&gt; | 
**message** | **string** |  | [optional] 
**systemOrderNo** | **string** | &lt;pre&gt;请求渠道下单时传过去的订单号&lt;/pre&gt; | 
**purchasePlatformId** | **string** | &lt;pre&gt;采购方在供应方的平台id&lt;/pre&gt; | 
**paySuccessTime** | **string** | &lt;p&gt;支付成功时返回，支付成功时间&lt;/p&gt; | [optional] 
**parentMerchantNo** | **string** | &lt;p&gt;请求商编&lt;/p&gt; | 
**merchantRequestNo** | **string** | &lt;pre&gt;商编订单&lt;/pre&gt; | 
**status** | **string** | &lt;pre&gt;0：待支付&lt;/pre&gt; &lt;pre&gt;1：支付成功&lt;/pre&gt; &lt;pre&gt;2：支付失败&lt;/pre&gt; &lt;pre&gt;3：已过期&lt;/pre&gt; | 
**merchantNo** | **string** | &lt;p&gt;业务商编&lt;/p&gt; | 
**parentMerchantRequestNo** | **string** | &lt;pre&gt;请求方订单号&lt;/pre&gt; | [optional] 
**purchaseType** | **string** | &lt;p&gt;采购类型&lt;/p&gt; | 
**trxType** | **string** | &lt;p&gt;在字段用来表示通知类型是交易还是退款。&lt;br /&gt;只有在异步通知结果里该参数才有值&lt;/p&gt; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


