# SettleWayQueryYOPResponseDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**status** | **string** | 处理状态&lt;br&gt;可选项如下:&lt;br&gt;SUCCESS:成功&lt;br&gt;FAIL:失败 | [optional] 
**code** | **string** | 返回码&lt;br&gt;000000为成功，其他为失败 | [optional] 
**message** | **string** | 返回描述 | [optional] 
**merchantNo** | **string** | 收款商户编号 | [optional] 
**parentMerchantNo** | **string** | 发起方商户编号 | [optional] 
**merchantSettleWayQueryDtos** | [**\Yeepay\Yop\Sdk\Service\Settle\Model\MerchantSettleWayQueryYOPDto[]**](MerchantSettleWayQueryYOPDto.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


