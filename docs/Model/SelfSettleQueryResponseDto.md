# SelfSettleQueryResponseDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | 返回码&lt;br&gt;成功：000000&lt;br&gt;其他错误码参加错误码描述 | [optional] 
**message** | **string** | 返回信息 | [optional] 
**parentMerchantNo** | **string** | 父商编 | [optional] 
**merchantNo** | **string** | 子商户编号 | [optional] 
**settlableAmount** | **float** | 商户可结算金额。商户可结算但未结算的金额 | [optional] 
**unsettledAmount** | **float** | 未结算金额。未结算金额&#x3D;可结算但未结算的金额+不可结算金额（未到结算周期的交易汇总金额） | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


