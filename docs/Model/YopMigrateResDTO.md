# YopMigrateResDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | 返回码,OPR00000 成功 | [optional] 
**message** | **string** | 返回信息 | [optional] 
**parentMerchantNo** | **string** | 收单订单的发起方商编 | [optional] 
**merchantNo** | **string** | 收款商编&lt;br&gt;收款订单的商户编号 | [optional] 
**uniqueMigrateNo** | **string** | 易宝资金迁移订单号 | [optional] 
**migrateRequestId** | **string** | 资金迁移请求号&lt;br&gt;本次请求的请求号，收款商编下唯一 | [optional] 
**migrateAmount** | **string** | 迁移金额&lt;br&gt;单位：元，精确到小数点后两位 | [optional] 
**status** | **string** | 状态&lt;br&gt;可选项如下:&lt;br&gt;PROCESSING:迁移处理中&lt;br&gt;FAIL:迁移失败&lt;br&gt;SUCCESS:迁移成功 | [optional] 
**failReason** | **string** | 失败原因&lt;br&gt;失败时返回 | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


