# AccountBookUpdateRequestDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**parentMerchantNo** | **string** | &lt;p&gt;发起方商户编号&lt;br /&gt;标准商户收付款方案中此参数与商编一致，平台商户收付款方案中此参数为平台商商户编号&lt;/p&gt; | 
**merchantNo** | **string** | &lt;p&gt;商户编号&lt;/p&gt; | 
**merchantAccountBookNo** | **string** | &lt;p&gt;商户侧记账簿编号&lt;br /&gt;商户侧记账簿编号和易宝记账簿编号二选一必填&lt;/p&gt; | [optional] 
**ypAccountBookNo** | **string** | &lt;p&gt;易宝记账簿编号&lt;br /&gt;商户侧记账簿编号和易宝记账簿编号二选一必填&lt;/p&gt; | [optional] 
**bindCardList** | [**\Yeepay\Yop\Sdk\Service\Account\Model\ModifyCardDTO[]**](ModifyCardDTO.md) | &lt;p&gt;修改绑定卡信息&lt;/p&gt; | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


