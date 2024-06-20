# SettleWayRatioDetailDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**settleWay** | **string** | 结算方向&lt;br&gt;可选项如下:&lt;br&gt;BANKCARD:结算至银行卡&lt;br&gt;ACCOUNT:结算至资金账户 | [optional] 
**settleRatio** | **float** | 该结算方向对应的结算比例。单位：%，两位小数。最小值：0.00，最大值：100.00。单一方向到账时，该字段传入100.00;多方向到账时，传入各结算比例之和需为100.00。如传入80.00，则表示结算资金的80.00%（四舍五入后保留两位小数）将结算至相应结算方向 | [optional] 
**bankCardNo** | **string** | 银行卡号&lt;br&gt;结算方向为结算到银行卡时必填。该银行卡需已经添加为结算卡。 | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


