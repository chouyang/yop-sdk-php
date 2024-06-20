# ModifySettleWayRatioRequestDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**parentMerchantNo** | **string** | 发起方商户编号。&lt;br&gt;*标准商户收付款方案中此参数与收款商户编号一致；&lt;br&gt;*平台商户收付款方案中此参数为平台商商户编号；&lt;br&gt;*服务商解决方案中，①标准商户收款时，该参数为标准商户商编 ②平台商收款或平台商入驻商户收款时，该参数为平台商商编。 | [optional] 
**merchantNo** | **string** | 收款商户编号 | [optional] 
**settleWayRatioDetailDtoList** | [**\Yeepay\Yop\Sdk\Service\Settle\Model\SettleWayRatioDetailDto[]**](SettleWayRatioDetailDto.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


