# MerchantSettleWayQueryYOPDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**settleWay** | **string** | 结算方向&lt;br&gt;可选项如下:&lt;br&gt;BANKCARD:结算至银行卡&lt;br&gt;ACCOUNT:结算至资金账户 | [optional] 
**settleRatio** | **double** | 该结算方向对应的结算比例。单位：%，两位小数。如返回80.00，则表示结算资金的80.00%（四舍五入后保留两位小数）将结算至相应结算方向。 | [optional] 
**bankCardNo** | **string** | 结算卡号&lt;br&gt;结算方向为结算到银行卡时返回 | [optional] 
**accountName** | **string** | 银行卡账户名&lt;br&gt;结算方向为结算到银行卡时返回 | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


