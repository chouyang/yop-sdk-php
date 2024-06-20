# ReceiverInfoDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**receiverAccountName** | **string** | &lt;p&gt;收款方开户名&lt;/p&gt; | 
**receiverAccountNo** | **string** | &lt;p&gt;收款方银行账号:为了保证出款成功，各农信社卡或账号16位以下的农业银行卡，建议或尽可能填写支行编码；&lt;/p&gt; | 
**bankAccountType** | **string** | &lt;p&gt;银行账户类型&lt;/p&gt; 可选项如下: DEBIT_CARD:借记卡  CREDIT_CARD:贷记卡 QUASI_CREDIT_CARD:准贷卡 PASSBOOK:存折 UNIT_SETTLE_CARD:单位结算卡  PUBLIC_CARD:对公卡 | [optional] 
**receiverBankCode** | **string** | &lt;p&gt;收款方开户行银行卡所在开户行编号(对公账户类型，开户行编码/支行编码不能同时为空)&lt;/p&gt; | [optional] 
**province** | **string** | &lt;p&gt;省编码&lt;/p&gt; | [optional] 
**city** | **string** | &lt;p&gt;市编码&lt;/p&gt; | [optional] 
**branchBankCode** | **string** | &lt;p&gt;支行编码(对公账户类型，开户行编码/支行编码不能同时为空)&lt;/p&gt; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


