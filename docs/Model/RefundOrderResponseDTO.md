# RefundOrderResponseDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | &lt;p&gt;代表本次请求成功，订单状态需要关注status&lt;/p&gt; | [optional] 
**message** | **string** |  | [optional] 
**parentMerchantNo** | **string** | &lt;pre&gt;请求方商编&lt;/pre&gt; | [optional] 
**parentMerchantRequestNo** | **string** | &lt;p&gt;请求方订单号&lt;/p&gt; | [optional] 
**parentMerchantRefundRequestNo** | **string** | &lt;p&gt;请求方退款订单号&lt;/p&gt; | [optional] 
**merchantNo** | **string** | &lt;p&gt;业务商编&lt;/p&gt; | 
**merchantRequestNo** | **string** | &lt;p&gt;业务商户订单号&lt;/p&gt; | 
**merchantRefundRequestNo** | **string** | &lt;p&gt;业务商户退款订单号&lt;/p&gt; | 
**purchasePlatformId** | **string** | &lt;pre&gt;采购方在供应方的平台id&lt;/pre&gt; | 
**systemOrderNo** | **string** | &lt;p&gt;易宝系统唯一订单号&lt;/p&gt; | 
**refundAmount** | **float** | &lt;p&gt;退款金额&lt;/p&gt; | 
**status** | **string** | &lt;p&gt;退款状态&lt;/p&gt; &lt;pre&gt;0：处理中&lt;/pre&gt; &lt;pre&gt;1：退款成功&lt;/pre&gt; &lt;pre&gt;2：退款失败&lt;/pre&gt; | 
**refundSuccessTime** | **string** | &lt;p&gt;退款成功时间&lt;/p&gt; | [optional] 
**trxType** | **string** | &lt;p&gt;在字段用来表示通知类型是交易还是退款。&lt;br /&gt;只有在异步通知结果里该参数才有值&lt;/p&gt; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


