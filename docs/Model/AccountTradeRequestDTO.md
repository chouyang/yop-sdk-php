# AccountTradeRequestDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**parentMerchantNo** | **string** | &lt;p&gt;发起方商户编号&lt;br /&gt;（标准商户收付款方案中此参数与商编一致，平台商户收付款方案中此参数为平台商商户编号）&lt;/p&gt; | 
**merchantNo** | **string** | &lt;p&gt;商户编号&lt;br /&gt;易宝支付分配的的商户唯一标识&lt;/p&gt; | 
**requestNo** | **string** | &lt;p&gt;商户请求号&lt;br /&gt;由商户自定义生成&lt;/p&gt; | 
**orderAmount** | **float** | &lt;p&gt;付款金额&lt;br /&gt;单位：元（RMB）&lt;/p&gt; | 
**feeChargeSide** | **string** | &lt;p&gt;手续费承担方(若不传默认付款方)&lt;/p&gt; 可选项如下: PAYER:付款方 PAYEE:收款方 | [optional] 
**terminalType** | **string** | &lt;p&gt;终端类型&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;/p&gt; 可选项如下: PC:电脑 PHONE:手机 PAD:平板 NFC:可穿戴设备 DTV:数字电视 MPOS:条码支付受理终端 OTHER:其他 | [optional] 
**receiveType** | **string** | &lt;p&gt;到账类型&lt;/p&gt; 可选项如下: REAL_TIME:实时 TWO_HOUR:两小时到账 NEXT_DAY:次日到账（无特殊情况资金于次日上午7点左右到收款银行账户中） | 
**notifyUrl** | **string** | &lt;p&gt;商户通知地址，不传则不通知&lt;/p&gt; | [optional] 
**remark** | **string** | &lt;p&gt;备注信息&lt;/p&gt; | [optional] 
**comments** | **string** | &lt;p&gt;银行附言&lt;br /&gt;展示在收款银行系统中的附言，由数字、字母、汉字组成（最终附言内容以银行实际账单为准）&lt;/p&gt; | [optional] 
**receiptComments** | **string** | &lt;p&gt;回单备注，此字段值用于显示在回单中&lt;/p&gt; | [optional] 
**riskInfo** | **string** | &lt;p&gt;透传风控标识json格式&lt;br /&gt;replaceMerchantNo:代付方易宝商编&lt;br /&gt;replaceName:代付方名称&lt;br /&gt;jobType:职位类型&lt;br /&gt;格式如下：{\&quot;replaceMerchantNo\&quot;: \&quot;\&quot;, \&quot;replaceName\&quot;: \&quot;\&quot;,\&quot;jobType\&quot;: \&quot;\&quot;}&lt;/p&gt; | [optional] 
**receiverInfo** | [**\Yeepay\Yop\Sdk\Service\Account\Model\ReceiverInfoDTO**](ReceiverInfoDTO.md) |  | 
**enterpriseInfo** | [**\Yeepay\Yop\Sdk\Service\Account\Model\EnterpriseInfoDTO**](EnterpriseInfoDTO.md) |  | [optional] 
**individualInfo** | [**\Yeepay\Yop\Sdk\Service\Account\Model\IndividualInfoDTO**](IndividualInfoDTO.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


