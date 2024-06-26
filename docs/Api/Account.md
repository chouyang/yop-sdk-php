# Yeepay\Yop\Sdk\Account

All URIs are relative to *http://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountBookQueryRefund**](Account.md#accountBookQueryRefund) | **GET** /rest/v1.0/account/account-book/query-refund | 记账簿退款查询
[**accountBookRefund**](Account.md#accountBookRefund) | **POST** /rest/v1.0/account/account-book/refund | 记账簿退款
[**accountManageAccountModify**](Account.md#accountManageAccountModify) | **POST** /rest/v1.0/account/account-manage/account/modify | 更新记账簿
[**accountManageAccountOpen**](Account.md#accountManageAccountOpen) | **POST** /rest/v1.0/account/account-manage/account/open | 开立记账簿
[**accountManageAccountOpenV2**](Account.md#accountManageAccountOpenV2) | **POST** /rest/v2.0/account/account-manage/account/open | 开立记账簿
[**accountManageAccountQuery**](Account.md#accountManageAccountQuery) | **GET** /rest/v1.0/account/account-manage/account/query | 查询记账簿
[**accountManageBalanceFreeze**](Account.md#accountManageBalanceFreeze) | **POST** /rest/v1.0/account/account-manage/balance/freeze | 冻结记账薄金额
[**accountManageBalanceUnfreeze**](Account.md#accountManageBalanceUnfreeze) | **POST** /rest/v1.0/account/account-manage/balance/unfreeze | 解冻记账薄金额
[**accountManageBankAccountOpen**](Account.md#accountManageBankAccountOpen) | **POST** /rest/v1.0/account/account-manage/bank-account/open | 开立银行账户
[**accountManageBankAccountQuery**](Account.md#accountManageBankAccountQuery) | **GET** /rest/v1.0/account/account-manage/bank-account/query | 开立银行账户查询
[**accountManageBankTradeFlowQuery**](Account.md#accountManageBankTradeFlowQuery) | **GET** /rest/v1.0/account/account-manage/bank/trade/flow/query | 银行账户流水查询
[**account_book_balance_freeze**](Account.md#account_book_balance_freeze) | **POST** /rest/v1.0/account/account-manage/balance/freeze | 冻结记账薄金额
[**account_book_balance_unfreeze**](Account.md#account_book_balance_unfreeze) | **POST** /rest/v1.0/account/account-manage/balance/unfreeze | 解冻记账薄金额
[**account_book_create**](Account.md#account_book_create) | **POST** /rest/v2.0/account/account-manage/account/open | 开立记账簿
[**account_book_modify**](Account.md#account_book_modify) | **POST** /rest/v1.0/account/account-manage/account/modify | 更新记账簿
[**account_individual_apply**](Account.md#account_individual_apply) | **POST** /rest/v1.0/account/individual/apply | 付款到个人--申请添加个人用户
[**account_individual_query**](Account.md#account_individual_query) | **POST** /rest/v1.0/account/individual/query | 付款到个人--查询已添加的个人用户
[**account_individual_query_progress**](Account.md#account_individual_query_progress) | **POST** /rest/v1.0/account/individual/query-progress | 付款到个人--查询申请进度
[**account_manage_bankTradeFlow_query**](Account.md#account_manage_bankTradeFlow_query) | **GET** /rest/v1.0/account/account-manage/bank/trade/flow/query | 银行账户流水查询
[**account_manage_bank_account_query_v1_0**](Account.md#account_manage_bank_account_query_v1_0) | **GET** /rest/v1.0/account/account-manage/bank-account/query | 开立银行账户查询
[**accountinfosQuery**](Account.md#accountinfosQuery) | **GET** /rest/v1.0/account/accountinfos/query | 全部账户余额查询
[**autoWithdrawRuleCancel**](Account.md#autoWithdrawRuleCancel) | **POST** /rest/v1.0/account/auto-withdraw-rule/cancel | 自动提现-规则作废
[**autoWithdrawRuleQuery**](Account.md#autoWithdrawRuleQuery) | **GET** /rest/v1.0/account/auto-withdraw-rule/query | 自动提现-规则查询
[**autoWithdrawRuleSet**](Account.md#autoWithdrawRuleSet) | **POST** /rest/v1.0/account/auto-withdraw-rule/set | 自动提现-规则设置
[**balanceBankAccountList**](Account.md#balanceBankAccountList) | **GET** /rest/v1.0/account/balance/bank-account/list | 账户通-余额查询
[**balanceQuery**](Account.md#balanceQuery) | **GET** /rest/v1.0/account/balance/query | 资金账户余额查询
[**bankAccountApplyDepositRefund**](Account.md#bankAccountApplyDepositRefund) | **POST** /rest/v1.0/account/bank-account/apply-deposit-refund | 银行入金流水退回
[**bankAccountApplySubAccount**](Account.md#bankAccountApplySubAccount) | **POST** /rest/v1.0/account/bank-account/apply-sub-account | 申请开通缴费账户
[**bankAccountAuthApply**](Account.md#bankAccountAuthApply) | **POST** /rest/v1.0/account/bank-account/auth-apply | 开立银行账户-申请短验
[**bankAccountAuthConfirm**](Account.md#bankAccountAuthConfirm) | **POST** /rest/v1.0/account/bank-account/auth-confirm | 开立银行账户-短验确认
[**bankAccountQueryDepositRefund**](Account.md#bankAccountQueryDepositRefund) | **GET** /rest/v1.0/account/bank-account/query-deposit-refund | 银行入金流水退回查询
[**bankAccountQuerySubAccount**](Account.md#bankAccountQuerySubAccount) | **GET** /rest/v1.0/account/bank-account/query-sub-account | 查询缴费账户
[**bankPaymentOrder**](Account.md#bankPaymentOrder) | **POST** /rest/v1.0/account/bank/payment/order | 银行账户支付
[**bank_account_auth_apply**](Account.md#bank_account_auth_apply) | **POST** /rest/v1.0/account/bank-account/auth-apply | 开立银行账户-申请短验
[**bank_account_auth_confirm**](Account.md#bank_account_auth_confirm) | **POST** /rest/v1.0/account/bank-account/auth-confirm | 开立银行账户-短验确认
[**bank_account_deposit_refund_apply**](Account.md#bank_account_deposit_refund_apply) | **POST** /rest/v1.0/account/bank-account/apply-deposit-refund | 银行入金流水退回
[**bank_account_query_deposit_refund**](Account.md#bank_account_query_deposit_refund) | **GET** /rest/v1.0/account/bank-account/query-deposit-refund | 银行入金流水退回查询
[**bank_account_query_sub_account**](Account.md#bank_account_query_sub_account) | **GET** /rest/v1.0/account/bank-account/query-sub-account | 查询缴费账户
[**bank_account_sub_account_apply**](Account.md#bank_account_sub_account_apply) | **POST** /rest/v1.0/account/bank-account/apply-sub-account | 申请开通缴费账户
[**enterpriseAccountBookPayOrder**](Account.md#enterpriseAccountBookPayOrder) | **POST** /rest/v1.0/account/enterprise/account-book-pay/order | 记账薄支付
[**enterpriseAccountPayOrder**](Account.md#enterpriseAccountPayOrder) | **POST** /rest/v1.0/account/enterprise/account-pay/order | 企业账户支付-下单
[**enterpriseAutoPaymentOrder**](Account.md#enterpriseAutoPaymentOrder) | **POST** /rest/v1.0/account/enterprise/auto-payment/order | 企业账户支付-自动付款
[**enterpriseAutoPaymentQuery**](Account.md#enterpriseAutoPaymentQuery) | **GET** /rest/v1.0/account/enterprise/auto-payment/query | 企业账户支付-自动付款订单查询
[**enterpriseTokenPayOrder**](Account.md#enterpriseTokenPayOrder) | **POST** /rest/v1.0/account/enterprise/token-pay/order | 企业账户支付-token支付
[**enterpriseWithholdingOrder**](Account.md#enterpriseWithholdingOrder) | **POST** /rest/v1.0/account/enterprise/withholding/order | 企业账户支付-关系扣款
[**externalOrder**](Account.md#externalOrder) | **POST** /rest/v1.0/account/external/order | 银行账户支付-外部订单同步
[**groupAccountTransfer**](Account.md#groupAccountTransfer) | **POST** /rest/v1.0/account/group/account/transfer | 集团账户资金划拨
[**groupAccountTransferQuery**](Account.md#groupAccountTransferQuery) | **GET** /rest/v1.0/account/group/account/transfer/query | 集团账户资金划拨查询
[**individualApply**](Account.md#individualApply) | **POST** /rest/v1.0/account/individual/apply | 付款到个人--申请添加个人用户
[**individualQuery**](Account.md#individualQuery) | **POST** /rest/v1.0/account/individual/query | 付款到个人--查询已添加的个人用户
[**individualQueryProgress**](Account.md#individualQueryProgress) | **POST** /rest/v1.0/account/individual/query-progress | 付款到个人--查询申请进度
[**migrateBankOrder**](Account.md#migrateBankOrder) | **POST** /rest/v1.0/account/migrate/bank/order | 余额迁移到银行-申请接口
[**migrateBankQuery**](Account.md#migrateBankQuery) | **GET** /rest/v1.0/account/migrate/bank/query | 余额迁移到银行-查询接口
[**multimodal_account_trade**](Account.md#multimodal_account_trade) | **POST** /rest/v2.0/account/pay/order | 付款-下单（多场景）
[**payAccoutCard**](Account.md#payAccoutCard) | **POST** /rest/v1.0/account/pay/accout-card | 代付到记账簿绑定卡
[**payCancel**](Account.md#payCancel) | **POST** /rest/v1.0/account/pay/cancel | 付款-撤销
[**payOrder**](Account.md#payOrder) | **POST** /rest/v1.0/account/pay/order | 付款-下单
[**payOrderV2**](Account.md#payOrderV2) | **POST** /rest/v2.0/account/pay/order | 付款-下单（多场景）
[**payQuery**](Account.md#payQuery) | **GET** /rest/v1.0/account/pay/query | 付款-查询
[**paySystemQuery**](Account.md#paySystemQuery) | **GET** /rest/v1.0/account/pay/system/query | 付款-查询
[**receiptGather**](Account.md#receiptGather) | **POST** /rest/v1.0/account/receipt/gather | 获取资金汇总凭证
[**receiptGet**](Account.md#receiptGet) | **GET** /rest/v1.0/account/receipt/get | 电子回单-下载
[**recharge**](Account.md#recharge) | **POST** /rest/v1.0/account/recharge | 充值-下单（多种支付）
[**rechargeAccountBookQuery**](Account.md#rechargeAccountBookQuery) | **GET** /rest/v1.0/account/recharge/account-book/query | 批量查询记账簿来账流水
[**rechargeBankOrder**](Account.md#rechargeBankOrder) | **POST** /rest/v1.0/account/recharge/bank/order | 银行资金提现
[**rechargeBatchQuery**](Account.md#rechargeBatchQuery) | **GET** /rest/v1.0/account/recharge/batch-query | 充值订单批量查询
[**rechargeOnlinebankOrder**](Account.md#rechargeOnlinebankOrder) | **POST** /rest/v1.0/account/recharge/onlinebank/order | 充值-网银下单
[**rechargeOrder**](Account.md#rechargeOrder) | **POST** /rest/v1.0/account/recharge/order | 充值-银行汇款下单
[**rechargePayerAdd**](Account.md#rechargePayerAdd) | **POST** /rest/v1.0/account/recharge/payer-add | 添加付款方
[**rechargePayerDelete**](Account.md#rechargePayerDelete) | **POST** /rest/v1.0/account/recharge/payer-delete | 删除付款方
[**rechargePayerQuery**](Account.md#rechargePayerQuery) | **GET** /rest/v1.0/account/recharge/payer-query | 查询付款方
[**rechargeQuery**](Account.md#rechargeQuery) | **GET** /rest/v1.0/account/recharge/query | 充值-查询
[**setWithdrawRule**](Account.md#setWithdrawRule) | **POST** /rest/v1.0/account/set-withdraw-rule | 设置提现规则
[**supplierApply**](Account.md#supplierApply) | **POST** /rest/v1.0/account/supplier/apply | 付款到供应商--申请添加供应商
[**supplierPayOrder**](Account.md#supplierPayOrder) | **POST** /rest/v1.0/account/supplier/pay/order | 付款到供应商/个人-下单
[**supplierQuery**](Account.md#supplierQuery) | **GET** /rest/v1.0/account/supplier/query | 付款到供应商--查询已添加的供应商
[**supplierQueryProgress**](Account.md#supplierQueryProgress) | **GET** /rest/v1.0/account/supplier/query-progress | 付款到供应商--查询申请进度
[**transferB2bOrder**](Account.md#transferB2bOrder) | **POST** /rest/v1.0/account/transfer/b2b/order | 转账-下单
[**transferB2bQuery**](Account.md#transferB2bQuery) | **GET** /rest/v1.0/account/transfer/b2b/query | 转账-查询
[**transferSystemQuery**](Account.md#transferSystemQuery) | **GET** /rest/v1.0/account/transfer/system/query | 转账-查询
[**transferWechatOrder**](Account.md#transferWechatOrder) | **POST** /rest/v1.0/account/transfer/wechat/order | 转账到微信零钱-下单
[**transferWechatQuery**](Account.md#transferWechatQuery) | **GET** /rest/v1.0/account/transfer/wechat/query | 转账到微信零钱-查询
[**transfer_group_account_query_v1**](Account.md#transfer_group_account_query_v1) | **GET** /rest/v1.0/account/group/account/transfer/query | 集团账户资金划拨查询
[**transfer_group_account_v1**](Account.md#transfer_group_account_v1) | **POST** /rest/v1.0/account/group/account/transfer | 集团账户资金划拨
[**union_account_recharge_payer_add**](Account.md#union_account_recharge_payer_add) | **POST** /rest/v1.0/account/recharge/payer-add | 添加付款方
[**union_account_recharge_payer_delete**](Account.md#union_account_recharge_payer_delete) | **POST** /rest/v1.0/account/recharge/payer-delete | 删除付款方
[**union_account_recharge_payer_query**](Account.md#union_account_recharge_payer_query) | **GET** /rest/v1.0/account/recharge/payer-query | 查询付款方
[**union_account_trade_account_book_remit**](Account.md#union_account_trade_account_book_remit) | **POST** /rest/v1.0/account/pay/accout-card | 代付到记账簿绑定卡
[**withdrawCardBind**](Account.md#withdrawCardBind) | **POST** /rest/v1.0/account/withdraw/card/bind | 提现卡-添加
[**withdrawCardModify**](Account.md#withdrawCardModify) | **POST** /rest/v1.0/account/withdraw/card/modify | 提现卡-修改/注销
[**withdrawCardQuery**](Account.md#withdrawCardQuery) | **GET** /rest/v1.0/account/withdraw/card/query | 提现卡查询
[**withdrawOrder**](Account.md#withdrawOrder) | **POST** /rest/v1.0/account/withdraw/order | 提现-下单
[**withdrawQuery**](Account.md#withdrawQuery) | **GET** /rest/v1.0/account/withdraw/query | 提现-查询
[**withdrawSystemQuery**](Account.md#withdrawSystemQuery) | **GET** /rest/v1.0/account/withdraw/system/query | 提现-查询


# **accountBookQueryRefund**
AccountBookQueryRefundResponse accountBookQueryRefund(AccountBookQueryRefundRequest request)

记账簿退款查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\AccountBookQueryRefundRequest();
$request->setMerchantNo("merchantNo_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantRefundRequestNo("merchantRefundRequestNo_example");

try {
    $response = $api_client->accountBookQueryRefund($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->accountBookQueryRefund: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**| 收款商户商编 |
 **parentMerchantNo** | **string**| 发起方商户编号。&lt;br&gt;*标准商户收付款方案中此参数与收款商户编号一致；&lt;br&gt;*平台商户收付款方案中此参数为平台商商户编号；&lt;br&gt;*服务商解决方案中，①标准商户收款时，该参数为标准商户商编 ②平台商收款或平台商入驻商户收款时，该参数为平台商商编。 |
 **merchantRefundRequestNo** | **string**| 商户退款请求号。可包含字母、数字、下划线；需保证在商户端不重复 |

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\AccountBookQueryRefundQueryAccountBookRefundRespDTOResult**](../Model/AccountBookQueryRefundQueryAccountBookRefundRespDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **accountBookRefund**
AccountBookRefundResponse accountBookRefund(AccountBookRefundRequest request)

记账簿退款

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\AccountBookRefundRequest();
$request->setMerchantNo("merchantNo_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantRefundRequestNo("merchantRefundRequestNo_example");
$request->setOriginalOrderNo("originalOrderNo_example");
$request->setRefundAmount(1.2);
$request->setBankPostscrip("bankPostscrip_example");
$request->setNotifyUrl("notifyUrl_example");

try {
    $response = $api_client->accountBookRefund($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->accountBookRefund: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]
 **merchantRefundRequestNo** | **string**|  | [optional]
 **originalOrderNo** | **string**|  | [optional]
 **refundAmount** | **float**|  | [optional]
 **bankPostscrip** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\AccountBookRefundAccountBookRefundRespDTOResult**](../Model/AccountBookRefundAccountBookRefundRespDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **accountManageAccountModify**
AccountManageAccountModifyResponse accountManageAccountModify(AccountManageAccountModifyRequest request)

更新记账簿

更新记账簿

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\AccountManageAccountModifyRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\AccountBookUpdateRequestDto());

try {
    $response = $api_client->accountManageAccountModify($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->accountManageAccountModify: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\AccountBookUpdateRequestDto**](../Model/AccountBookUpdateRequestDto.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\AccountBookUpdateResponseDto**](../Model/AccountBookUpdateResponseDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **accountManageAccountOpen**
AccountManageAccountOpenResponse accountManageAccountOpen(AccountManageAccountOpenRequest request)

开立记账簿

商户请求该接口，申请开通买家记账簿

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\AccountManageAccountOpenRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setMerchantAccountBookNo("merchantAccountBookNo_example");
$request->setMerchantAccountBookName("merchantAccountBookName_example");

try {
    $response = $api_client->accountManageAccountOpen($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->accountManageAccountOpen: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **merchantAccountBookNo** | **string**|  | [optional]
 **merchantAccountBookName** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\AccountManageAccountOpenAccountBookCreateResponseDtoResult**](../Model/AccountManageAccountOpenAccountBookCreateResponseDtoResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **accountManageAccountOpenV2**
AccountManageAccountOpenV2Response accountManageAccountOpenV2(AccountManageAccountOpenV2Request request)

开立记账簿

开立记账簿

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\AccountManageAccountOpenV2Request();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\AccountBookCreateRequestDto());

try {
    $response = $api_client->accountManageAccountOpenV2($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->accountManageAccountOpenV2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\AccountBookCreateRequestDto**](../Model/AccountBookCreateRequestDto.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\AccountBookCreateResponseDto**](../Model/AccountBookCreateResponseDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **accountManageAccountQuery**
AccountManageAccountQueryResponse accountManageAccountQuery(AccountManageAccountQueryRequest request)

查询记账簿

商户请求该接口，查询相应记账簿余额。

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\AccountManageAccountQueryRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setMerchantAccountBookNo("merchantAccountBookNo_example");
$request->setYpAccountBookNo("ypAccountBookNo_example");

try {
    $response = $api_client->accountManageAccountQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->accountManageAccountQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**| 标准商户收付款方案中此参数与商编一致，平台商户收付款方案中此参数为平台商商户编号 |
 **merchantNo** | **string**| 记账簿所属的商户编号 |
 **merchantAccountBookNo** | **string**| 商户侧记账簿编号和易宝记账簿编号至少有其中一个 | [optional]
 **ypAccountBookNo** | **string**| 商户侧记账簿编号和易宝记账簿编号至少有其中一个 | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\AccountManageAccountQueryAccountBalanceQueryResponseDtoResult**](../Model/AccountManageAccountQueryAccountBalanceQueryResponseDtoResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **accountManageBalanceFreeze**
AccountManageBalanceFreezeResponse accountManageBalanceFreeze(AccountManageBalanceFreezeRequest request)

冻结记账薄金额

冻结记账薄金额

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\AccountManageBalanceFreezeRequest();
$request->setParentMerchantNo("100400612345");
$request->setMerchantNo("100400612345");
$request->setRequestNo("requestNo_example");
$request->setMerchantAccountBookNo("merchantAccountBookNo_example");
$request->setYpAccountBookNo("ypAccountBookNo_example");
$request->setFreezeAmount("1.01");

try {
    $response = $api_client->accountManageBalanceFreeze($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->accountManageBalanceFreeze: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **requestNo** | **string**|  | [optional]
 **merchantAccountBookNo** | **string**|  | [optional]
 **ypAccountBookNo** | **string**|  | [optional]
 **freezeAmount** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\AccountBookFreezeBalanceResponseDTO**](../Model/AccountBookFreezeBalanceResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **accountManageBalanceUnfreeze**
AccountManageBalanceUnfreezeResponse accountManageBalanceUnfreeze(AccountManageBalanceUnfreezeRequest request)

解冻记账薄金额

解冻记账薄金额

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\AccountManageBalanceUnfreezeRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setRequestNo("requestNo_example");
$request->setOrderFlowNo("orderFlowNo_example");
$request->setOrgRequestNo("orgRequestNo_example");
$request->setUnFreezeAmount("1.01");

try {
    $response = $api_client->accountManageBalanceUnfreeze($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->accountManageBalanceUnfreeze: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **requestNo** | **string**|  | [optional]
 **orderFlowNo** | **string**|  | [optional]
 **orgRequestNo** | **string**|  | [optional]
 **unFreezeAmount** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\AccountBookUnFreezeBalanceResponseDTO**](../Model/AccountBookUnFreezeBalanceResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **accountManageBankAccountOpen**
AccountManageBankAccountOpenResponse accountManageBankAccountOpen(AccountManageBankAccountOpenRequest request)

开立银行账户



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\AccountManageBankAccountOpenRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\StandardOpenAccountRequestDTO());

try {
    $response = $api_client->accountManageBankAccountOpen($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->accountManageBankAccountOpen: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\StandardOpenAccountRequestDTO**](../Model/StandardOpenAccountRequestDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\StandardOpenAccountResponseDTO**](../Model/StandardOpenAccountResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **accountManageBankAccountQuery**
AccountManageBankAccountQueryResponse accountManageBankAccountQuery(AccountManageBankAccountQueryRequest request)

开立银行账户查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\AccountManageBankAccountQueryRequest();
$request->setRequestNo("requestNo_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->accountManageBankAccountQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->accountManageBankAccountQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**| 商户订单号 |
 **parentMerchantNo** | **string**| 业务发起方商编&lt;br&gt;*标准商户收付款方案中此参数与开户商户编号一致；*平台商户收付款方案中此参数为平台商商户编号；*服务商解决方案中，①所属标准商户申请开户时，该参数为服务商商编 ②所属平台商申请开户且以服务资质在银行开立母户时，此参数填写服务商商户编号 ②所属平台商入驻商户申请开户时需以平台资质在银行开立母户，该参数填写平台商商编 |
 **merchantNo** | **string**| 商编号&lt;br&gt;业务主体商编 |

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\StandardOpenAccountQueryResponseDTO**](../Model/StandardOpenAccountQueryResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **accountManageBankTradeFlowQuery**
AccountManageBankTradeFlowQueryResponse accountManageBankTradeFlowQuery(AccountManageBankTradeFlowQueryRequest request)

银行账户流水查询

银行账户流水查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\AccountManageBankTradeFlowQueryRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setBankCode("bankCode_example");
$request->setBankAccountNo("bankAccountNo_example");
$request->setTrxStartDate("trxStartDate_example");
$request->setTrxEndDate("trxEndDate_example");
$request->setPageSize(56);
$request->setPageNo(56);

try {
    $response = $api_client->accountManageBankTradeFlowQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->accountManageBankTradeFlowQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**| &lt;p&gt;业务发起方商编&lt;br /&gt;*标准商户收付款方案中此参数与开户商户编号一致；*平台商户收付款方案中此参数为平台商商户编号；*服务商解决方案中，①所属标准商户申请开户时，该参数为服务商商编 ②所属平台商申请开户且以服务资质在银行开立母户时，此参数填写服务商商户编号 ②所属平台商入驻商户申请开户时需以平台资质在银行开立母户，该参数填写平台商商编&lt;/p&gt; |
 **merchantNo** | **string**| &lt;p&gt;商户编号&lt;/p&gt; |
 **bankCode** | **string**| &lt;p&gt;银行编码&lt;/p&gt; 可选项如下: HXBXB:百信银行 XWB:新网银行 XWB_Z:新网银行 SUNINGBANK:苏宁银行 |
 **bankAccountNo** | **string**| &lt;p&gt;银行账户号&lt;/p&gt; |
 **trxStartDate** | **string**| &lt;p&gt;交易开始日期&lt;br /&gt;格式：yyyy-MM-dd&lt;/p&gt; |
 **trxEndDate** | **string**| &lt;p&gt;交易结束日期&lt;br /&gt;格式：yyyy-MM-dd&lt;/p&gt; |
 **pageSize** | **int**| &lt;p&gt;页大小，银行编码为HXBXB是页大小只能为100&lt;/p&gt; |
 **pageNo** | **int**| &lt;p&gt;页码，不填默认为1&lt;/p&gt; | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\BankAccountTrxQueryRespDTO**](../Model/BankAccountTrxQueryRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **account_book_balance_freeze**
AccountBookBalanceFreezeResponse account_book_balance_freeze(AccountBookBalanceFreezeRequest request)

冻结记账薄金额

冻结记账薄金额

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\AccountBookBalanceFreezeRequest();
$request->setParentMerchantNo("100400612345");
$request->setMerchantNo("100400612345");
$request->setRequestNo("requestNo_example");
$request->setMerchantAccountBookNo("merchantAccountBookNo_example");
$request->setYpAccountBookNo("ypAccountBookNo_example");
$request->setFreezeAmount("1.01");

try {
    $response = $api_client->account_book_balance_freeze($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->account_book_balance_freeze: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **requestNo** | **string**|  | [optional]
 **merchantAccountBookNo** | **string**|  | [optional]
 **ypAccountBookNo** | **string**|  | [optional]
 **freezeAmount** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\AccountBookFreezeBalanceResponseDTO**](../Model/AccountBookFreezeBalanceResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **account_book_balance_unfreeze**
AccountBookBalanceUnfreezeResponse account_book_balance_unfreeze(AccountBookBalanceUnfreezeRequest request)

解冻记账薄金额

解冻记账薄金额

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\AccountBookBalanceUnfreezeRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setRequestNo("requestNo_example");
$request->setOrderFlowNo("orderFlowNo_example");
$request->setOrgRequestNo("orgRequestNo_example");
$request->setUnFreezeAmount("1.01");

try {
    $response = $api_client->account_book_balance_unfreeze($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->account_book_balance_unfreeze: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **requestNo** | **string**|  | [optional]
 **orderFlowNo** | **string**|  | [optional]
 **orgRequestNo** | **string**|  | [optional]
 **unFreezeAmount** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\AccountBookUnFreezeBalanceResponseDTO**](../Model/AccountBookUnFreezeBalanceResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **account_book_create**
AccountBookCreateResponse account_book_create(AccountBookCreateRequest request)

开立记账簿

开立记账簿

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\AccountBookCreateRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\AccountBookCreateRequestDto());

try {
    $response = $api_client->account_book_create($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->account_book_create: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\AccountBookCreateRequestDto**](../Model/AccountBookCreateRequestDto.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\AccountBookCreateResponseDto**](../Model/AccountBookCreateResponseDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **account_book_modify**
AccountBookModifyResponse account_book_modify(AccountBookModifyRequest request)

更新记账簿

更新记账簿

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\AccountBookModifyRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\AccountBookUpdateRequestDto());

try {
    $response = $api_client->account_book_modify($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->account_book_modify: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\AccountBookUpdateRequestDto**](../Model/AccountBookUpdateRequestDto.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\AccountBookUpdateResponseDto**](../Model/AccountBookUpdateResponseDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **account_individual_apply**
AccountIndividualApplyResponse account_individual_apply(AccountIndividualApplyRequest request)

付款到个人--申请添加个人用户

此服务针对于有付款给个人收款方且不满足使用企业付款场景的商户使用。商户向常用个人用户付款前，请先通过此接口申请添加个人用户信息

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\AccountIndividualApplyRequest();
$request->setMerchantNo("merchantNo_example");
$request->setRequestNo("requestNo_example");
$request->setName("name_example");
$request->setCertificateType("certificateType_example");
$request->setCertificateNo("certificateNo_example");
$request->setPhone("phone_example");
$request->setFrontUrl("frontUrl_example");
$request->setContraryUrl("contraryUrl_example");

try {
    $response = $api_client->account_individual_apply($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->account_individual_apply: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**|  | [optional]
 **requestNo** | **string**|  | [optional]
 **name** | **string**|  | [optional]
 **certificateType** | **string**|  | [optional]
 **certificateNo** | **string**|  | [optional]
 **phone** | **string**|  | [optional]
 **frontUrl** | **string**|  | [optional]
 **contraryUrl** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\ApplyIndividualRespDTO**](../Model/ApplyIndividualRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **account_individual_query**
AccountIndividualQueryResponse account_individual_query(AccountIndividualQueryRequest request)

付款到个人--查询已添加的个人用户

通过此服务查询付款商户已经添加的个人用户信息

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\AccountIndividualQueryRequest();
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->account_individual_query($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->account_individual_query: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\QueryIndividualRespDTO**](../Model/QueryIndividualRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **account_individual_query_progress**
AccountIndividualQueryProgressResponse account_individual_query_progress(AccountIndividualQueryProgressRequest request)

付款到个人--查询申请进度

通过此接口服务查询个人用户添加进度

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\AccountIndividualQueryProgressRequest();
$request->setRequestNo("requestNo_example");

try {
    $response = $api_client->account_individual_query_progress($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->account_individual_query_progress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\ApplyIndivdualProgressRespDTO**](../Model/ApplyIndivdualProgressRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **account_manage_bankTradeFlow_query**
AccountManageBankTradeFlowQueryResponse account_manage_bankTradeFlow_query(AccountManageBankTradeFlowQueryRequest request)

银行账户流水查询

银行账户流水查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\AccountManageBankTradeFlowQueryRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setBankCode("bankCode_example");
$request->setBankAccountNo("bankAccountNo_example");
$request->setTrxStartDate("trxStartDate_example");
$request->setTrxEndDate("trxEndDate_example");
$request->setPageSize(56);
$request->setPageNo(56);

try {
    $response = $api_client->account_manage_bankTradeFlow_query($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->account_manage_bankTradeFlow_query: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**| &lt;p&gt;业务发起方商编&lt;br /&gt;*标准商户收付款方案中此参数与开户商户编号一致；*平台商户收付款方案中此参数为平台商商户编号；*服务商解决方案中，①所属标准商户申请开户时，该参数为服务商商编 ②所属平台商申请开户且以服务资质在银行开立母户时，此参数填写服务商商户编号 ②所属平台商入驻商户申请开户时需以平台资质在银行开立母户，该参数填写平台商商编&lt;/p&gt; |
 **merchantNo** | **string**| &lt;p&gt;商户编号&lt;/p&gt; |
 **bankCode** | **string**| &lt;p&gt;银行编码&lt;/p&gt; 可选项如下: HXBXB:百信银行 XWB:新网银行 XWB_Z:新网银行 SUNINGBANK:苏宁银行 |
 **bankAccountNo** | **string**| &lt;p&gt;银行账户号&lt;/p&gt; |
 **trxStartDate** | **string**| &lt;p&gt;交易开始日期&lt;br /&gt;格式：yyyy-MM-dd&lt;/p&gt; |
 **trxEndDate** | **string**| &lt;p&gt;交易结束日期&lt;br /&gt;格式：yyyy-MM-dd&lt;/p&gt; |
 **pageSize** | **int**| &lt;p&gt;页大小，银行编码为HXBXB是页大小只能为100&lt;/p&gt; |
 **pageNo** | **int**| &lt;p&gt;页码，不填默认为1&lt;/p&gt; | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\BankAccountTrxQueryRespDTO**](../Model/BankAccountTrxQueryRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **account_manage_bank_account_query_v1_0**
AccountManageBankAccountQueryV10Response account_manage_bank_account_query_v1_0(AccountManageBankAccountQueryV10Request request)

开立银行账户查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\AccountManageBankAccountQueryV10Request();
$request->setRequestNo("requestNo_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->account_manage_bank_account_query_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->account_manage_bank_account_query_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**| 商户订单号 |
 **parentMerchantNo** | **string**| 业务发起方商编&lt;br&gt;*标准商户收付款方案中此参数与开户商户编号一致；*平台商户收付款方案中此参数为平台商商户编号；*服务商解决方案中，①所属标准商户申请开户时，该参数为服务商商编 ②所属平台商申请开户且以服务资质在银行开立母户时，此参数填写服务商商户编号 ②所属平台商入驻商户申请开户时需以平台资质在银行开立母户，该参数填写平台商商编 |
 **merchantNo** | **string**| 商编号&lt;br&gt;业务主体商编 |

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\StandardOpenAccountQueryResponseDTO**](../Model/StandardOpenAccountQueryResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **accountinfosQuery**
AccountinfosQueryResponse accountinfosQuery(AccountinfosQueryRequest request)

全部账户余额查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\AccountinfosQueryRequest();
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->accountinfosQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->accountinfosQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**|  |

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\AccountinfosQueryQueryAccountInfoListRespDTOResult**](../Model/AccountinfosQueryQueryAccountInfoListRespDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **autoWithdrawRuleCancel**
AutoWithdrawRuleCancelResponse autoWithdrawRuleCancel(AutoWithdrawRuleCancelRequest request)

自动提现-规则作废

自动提现-规则作废

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\AutoWithdrawRuleCancelRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setRuleId("ruleId_example");

try {
    $response = $api_client->autoWithdrawRuleCancel($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->autoWithdrawRuleCancel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **ruleId** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\AutoWithdrawRuleCancelYopAutoWithdrawRuleCancelResponseDTOResult**](../Model/AutoWithdrawRuleCancelYopAutoWithdrawRuleCancelResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **autoWithdrawRuleQuery**
AutoWithdrawRuleQueryResponse autoWithdrawRuleQuery(AutoWithdrawRuleQueryRequest request)

自动提现-规则查询

自动提现-规则查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\AutoWithdrawRuleQueryRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->autoWithdrawRuleQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->autoWithdrawRuleQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**| 发起方商户编号。*标准商户收付款方案中此参数与收款商户编号一致；*平台商户收付款方案中此参数为平台商商户编号；*服务商解决方案中，①标准商户收款时，该参数为标准商户商编 ②平台商收款或平台商入驻商户收款时，该参数为平台商商编。 |
 **merchantNo** | **string**| 提现商户编号 |

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\AutoWithdrawRuleQueryYopAutoWithdrawRuleQueryResponseDTOResult**](../Model/AutoWithdrawRuleQueryYopAutoWithdrawRuleQueryResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **autoWithdrawRuleSet**
AutoWithdrawRuleSetResponse autoWithdrawRuleSet(AutoWithdrawRuleSetRequest request)

自动提现-规则设置

自动提现-规则设置

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\AutoWithdrawRuleSetRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setBindId("bindId_example");
$request->setBankAccountNo("bankAccountNo_example");
$request->setReceiveType("receiveType_example");
$request->setTriggerTime("triggerTime_example");
$request->setRemainAmount(1.2);
$request->setRemark("remark_example");
$request->setNotifyAddress("notifyAddress_example");

try {
    $response = $api_client->autoWithdrawRuleSet($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->autoWithdrawRuleSet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **bindId** | **string**|  | [optional]
 **bankAccountNo** | **string**|  | [optional]
 **receiveType** | **string**|  | [optional]
 **triggerTime** | **string**|  | [optional]
 **remainAmount** | **float**|  | [optional]
 **remark** | **string**|  | [optional]
 **notifyAddress** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\AutoWithdrawRuleSetYopAutoWithdrawRuleSetResponseDTOResult**](../Model/AutoWithdrawRuleSetYopAutoWithdrawRuleSetResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **balanceBankAccountList**
BalanceBankAccountListResponse balanceBankAccountList(BalanceBankAccountListRequest request)

账户通-余额查询

账户通-余额查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\BalanceBankAccountListRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setBankCode("BOL");

try {
    $response = $api_client->balanceBankAccountList($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->balanceBankAccountList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**| 发起方商户编号&lt;br&gt;（标准商户收付款方案中此参数与商编一致，平台商户收付款方案中此参数为平台商商户编号） |
 **merchantNo** | **string**| 商户编号&lt;br&gt;易宝支付分配的的商户唯一标识 |
 **bankCode** | **string**| BOL :廊坊银行 |

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\BalanceBankAccountListQueryInnerAndBankAccountInfoRespDTOResult**](../Model/BalanceBankAccountListQueryInnerAndBankAccountInfoRespDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **balanceQuery**
BalanceQueryResponse balanceQuery(BalanceQueryRequest request)

资金账户余额查询

查询商户余额

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\BalanceQueryRequest();
$request->setMerchantNo("10080006026");

try {
    $response = $api_client->balanceQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->balanceQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**| 商户编号&lt;br&gt;易宝支付分配的的商户唯一标识 |

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\BalanceQueryAccountInfoRespDTOResult**](../Model/BalanceQueryAccountInfoRespDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **bankAccountApplyDepositRefund**
BankAccountApplyDepositRefundResponse bankAccountApplyDepositRefund(BankAccountApplyDepositRefundRequest request)

银行入金流水退回

银行入金流水退回

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\BankAccountApplyDepositRefundRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\BankAccountRefundReqDTO());

try {
    $response = $api_client->bankAccountApplyDepositRefund($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->bankAccountApplyDepositRefund: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\BankAccountRefundReqDTO**](../Model/BankAccountRefundReqDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\BankAccountRefundRespDTO**](../Model/BankAccountRefundRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **bankAccountApplySubAccount**
BankAccountApplySubAccountResponse bankAccountApplySubAccount(BankAccountApplySubAccountRequest request)

申请开通缴费账户

申请开通缴费账户

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\BankAccountApplySubAccountRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\OpenSubBankAccountReqDTO());

try {
    $response = $api_client->bankAccountApplySubAccount($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->bankAccountApplySubAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\OpenSubBankAccountReqDTO**](../Model/OpenSubBankAccountReqDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\OpenSubBankAccountRespDTO**](../Model/OpenSubBankAccountRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **bankAccountAuthApply**
BankAccountAuthApplyResponse bankAccountAuthApply(BankAccountAuthApplyRequest request)

开立银行账户-申请短验

开立银行账户，申请短验接口

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\BankAccountAuthApplyRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setRequestNo("requestNo_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->bankAccountAuthApply($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->bankAccountAuthApply: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **requestNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\OpenAccountAuthApplyRespDTO**](../Model/OpenAccountAuthApplyRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **bankAccountAuthConfirm**
BankAccountAuthConfirmResponse bankAccountAuthConfirm(BankAccountAuthConfirmRequest request)

开立银行账户-短验确认

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\BankAccountAuthConfirmRequest();
$request->setAuthCode("authCode_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setRequestNo("requestNo_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->bankAccountAuthConfirm($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->bankAccountAuthConfirm: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authCode** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]
 **requestNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\OpenAccountAuthConfirmRespDTO**](../Model/OpenAccountAuthConfirmRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **bankAccountQueryDepositRefund**
BankAccountQueryDepositRefundResponse bankAccountQueryDepositRefund(BankAccountQueryDepositRefundRequest request)

银行入金流水退回查询

银行入金流水退回查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\BankAccountQueryDepositRefundRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setRefundFlowNo("refundFlowNo_example");

try {
    $response = $api_client->bankAccountQueryDepositRefund($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->bankAccountQueryDepositRefund: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**| &lt;p&gt;业务发起方商编&lt;br /&gt;*标准商户收付款方案中此参数与开户商户编号一致；*平台商户收付款方案中此参数为平台商商户编号；*服务商解决方案中，①所属标准商户申请开户时，该参数为服务商商编 ②所属平台商申请开户且以服务资质在银行开立母户时，此参数填写服务商商户编号 ②所属平台商入驻商户申请开户时需以平台资质在银行开立母户，该参数填写平台商商编&lt;/p&gt; |
 **merchantNo** | **string**| &lt;p&gt;商户编号&lt;br /&gt;易宝支付分配的的商户唯一标识&lt;/p&gt; |
 **refundFlowNo** | **string**| &lt;p&gt;商户退回请求号&lt;br /&gt;由商户自定义生成&lt;/p&gt; |

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\QueryBankAccountRefundRespDTO**](../Model/QueryBankAccountRefundRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **bankAccountQuerySubAccount**
BankAccountQuerySubAccountResponse bankAccountQuerySubAccount(BankAccountQuerySubAccountRequest request)

查询缴费账户

查询缴费账户

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\BankAccountQuerySubAccountRequest();
$request->setParentMerchantNo("100400612345");
$request->setMerchantNo("merchantNo_example");
$request->setMerchantAccountUid("merchantAccountUid_example");
$request->setBankCode("bankCode_example");
$request->setBankAccountNo("bankAccountNo_example");

try {
    $response = $api_client->bankAccountQuerySubAccount($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->bankAccountQuerySubAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**| &lt;p&gt;业务发起方商编&lt;br /&gt;*标准商户收付款方案中此参数与开户商户编号一致；*平台商户收付款方案中此参数为平台商商户编号；*服务商解决方案中，①所属标准商户申请开户时，该参数为服务商商编 ②所属平台商申请开户且以服务资质在银行开立母户时，此参数填写服务商商户编号 ②所属平台商入驻商户申请开户时需以平台资质在银行开立母户，该参数填写平台商商编&lt;/p&gt; |
 **merchantNo** | **string**| &lt;pre&gt;商户编号&lt;br /&gt;易宝支付分配的的商户唯一标识&lt;/pre&gt; |
 **merchantAccountUid** | **string**| &lt;p&gt;商户侧缴费账户号，数字、字母、下划线组合&lt;/p&gt; |
 **bankCode** | **string**| &lt;p&gt;银行编码&lt;/p&gt; &lt;p&gt;可选项如下：&lt;/p&gt; &lt;pre&gt;SMB_LARGE&lt;/pre&gt; |
 **bankAccountNo** | **string**| &lt;pre&gt;银行账户号&lt;br /&gt;备注：对应银行开户接口中，开成功的银行账户号&lt;/pre&gt; |

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\QueryOpenSubBankAccountRespDTO**](../Model/QueryOpenSubBankAccountRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **bankPaymentOrder**
BankPaymentOrderResponse bankPaymentOrder(BankPaymentOrderRequest request)

银行账户支付

提供银行账户支付服务

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\BankPaymentOrderRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\BankPaymentOrderBankAccountPaymentRequestDtoParam());

try {
    $response = $api_client->bankPaymentOrder($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->bankPaymentOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\BankPaymentOrderBankAccountPaymentRequestDtoParam**](../Model/BankPaymentOrderBankAccountPaymentRequestDtoParam.md)|  |

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\BankPaymentOrderBankAccountPaymentRespDtoResult**](../Model/BankPaymentOrderBankAccountPaymentRespDtoResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **bank_account_auth_apply**
BankAccountAuthApplyResponse bank_account_auth_apply(BankAccountAuthApplyRequest request)

开立银行账户-申请短验

开立银行账户，申请短验接口

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\BankAccountAuthApplyRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setRequestNo("requestNo_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->bank_account_auth_apply($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->bank_account_auth_apply: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **requestNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\OpenAccountAuthApplyRespDTO**](../Model/OpenAccountAuthApplyRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **bank_account_auth_confirm**
BankAccountAuthConfirmResponse bank_account_auth_confirm(BankAccountAuthConfirmRequest request)

开立银行账户-短验确认

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\BankAccountAuthConfirmRequest();
$request->setAuthCode("authCode_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setRequestNo("requestNo_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->bank_account_auth_confirm($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->bank_account_auth_confirm: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authCode** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]
 **requestNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\OpenAccountAuthConfirmRespDTO**](../Model/OpenAccountAuthConfirmRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **bank_account_deposit_refund_apply**
BankAccountDepositRefundApplyResponse bank_account_deposit_refund_apply(BankAccountDepositRefundApplyRequest request)

银行入金流水退回

银行入金流水退回

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\BankAccountDepositRefundApplyRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\BankAccountRefundReqDTO());

try {
    $response = $api_client->bank_account_deposit_refund_apply($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->bank_account_deposit_refund_apply: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\BankAccountRefundReqDTO**](../Model/BankAccountRefundReqDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\BankAccountRefundRespDTO**](../Model/BankAccountRefundRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **bank_account_query_deposit_refund**
BankAccountQueryDepositRefundResponse bank_account_query_deposit_refund(BankAccountQueryDepositRefundRequest request)

银行入金流水退回查询

银行入金流水退回查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\BankAccountQueryDepositRefundRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setRefundFlowNo("refundFlowNo_example");

try {
    $response = $api_client->bank_account_query_deposit_refund($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->bank_account_query_deposit_refund: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**| &lt;p&gt;业务发起方商编&lt;br /&gt;*标准商户收付款方案中此参数与开户商户编号一致；*平台商户收付款方案中此参数为平台商商户编号；*服务商解决方案中，①所属标准商户申请开户时，该参数为服务商商编 ②所属平台商申请开户且以服务资质在银行开立母户时，此参数填写服务商商户编号 ②所属平台商入驻商户申请开户时需以平台资质在银行开立母户，该参数填写平台商商编&lt;/p&gt; |
 **merchantNo** | **string**| &lt;p&gt;商户编号&lt;br /&gt;易宝支付分配的的商户唯一标识&lt;/p&gt; |
 **refundFlowNo** | **string**| &lt;p&gt;商户退回请求号&lt;br /&gt;由商户自定义生成&lt;/p&gt; |

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\QueryBankAccountRefundRespDTO**](../Model/QueryBankAccountRefundRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **bank_account_query_sub_account**
BankAccountQuerySubAccountResponse bank_account_query_sub_account(BankAccountQuerySubAccountRequest request)

查询缴费账户

查询缴费账户

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\BankAccountQuerySubAccountRequest();
$request->setParentMerchantNo("100400612345");
$request->setMerchantNo("merchantNo_example");
$request->setMerchantAccountUid("merchantAccountUid_example");
$request->setBankCode("bankCode_example");
$request->setBankAccountNo("bankAccountNo_example");

try {
    $response = $api_client->bank_account_query_sub_account($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->bank_account_query_sub_account: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**| &lt;p&gt;业务发起方商编&lt;br /&gt;*标准商户收付款方案中此参数与开户商户编号一致；*平台商户收付款方案中此参数为平台商商户编号；*服务商解决方案中，①所属标准商户申请开户时，该参数为服务商商编 ②所属平台商申请开户且以服务资质在银行开立母户时，此参数填写服务商商户编号 ②所属平台商入驻商户申请开户时需以平台资质在银行开立母户，该参数填写平台商商编&lt;/p&gt; |
 **merchantNo** | **string**| &lt;pre&gt;商户编号&lt;br /&gt;易宝支付分配的的商户唯一标识&lt;/pre&gt; |
 **merchantAccountUid** | **string**| &lt;p&gt;商户侧缴费账户号，数字、字母、下划线组合&lt;/p&gt; |
 **bankCode** | **string**| &lt;p&gt;银行编码&lt;/p&gt; &lt;p&gt;可选项如下：&lt;/p&gt; &lt;pre&gt;SMB_LARGE&lt;/pre&gt; |
 **bankAccountNo** | **string**| &lt;pre&gt;银行账户号&lt;br /&gt;备注：对应银行开户接口中，开成功的银行账户号&lt;/pre&gt; |

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\QueryOpenSubBankAccountRespDTO**](../Model/QueryOpenSubBankAccountRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **bank_account_sub_account_apply**
BankAccountSubAccountApplyResponse bank_account_sub_account_apply(BankAccountSubAccountApplyRequest request)

申请开通缴费账户

申请开通缴费账户

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\BankAccountSubAccountApplyRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\OpenSubBankAccountReqDTO());

try {
    $response = $api_client->bank_account_sub_account_apply($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->bank_account_sub_account_apply: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\OpenSubBankAccountReqDTO**](../Model/OpenSubBankAccountReqDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\OpenSubBankAccountRespDTO**](../Model/OpenSubBankAccountRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **enterpriseAccountBookPayOrder**
EnterpriseAccountBookPayOrderResponse enterpriseAccountBookPayOrder(EnterpriseAccountBookPayOrderRequest request)

记账薄支付

记账薄支付

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\EnterpriseAccountBookPayOrderRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\EnterpriseAccountBookPayOrderAccountBookPaymentRequestDtoParam());

try {
    $response = $api_client->enterpriseAccountBookPayOrder($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->enterpriseAccountBookPayOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\EnterpriseAccountBookPayOrderAccountBookPaymentRequestDtoParam**](../Model/EnterpriseAccountBookPayOrderAccountBookPaymentRequestDtoParam.md)|  |

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\EnterpriseAccountBookPayOrderAccountBookPaymentRespDtoResult**](../Model/EnterpriseAccountBookPayOrderAccountBookPaymentRespDtoResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **enterpriseAccountPayOrder**
EnterpriseAccountPayOrderResponse enterpriseAccountPayOrder(EnterpriseAccountPayOrderRequest request)

企业账户支付-下单

企业账户支付提供商户支付给其他商家的能力，主要解决收单场景中商户余额付款需求，如购买机票等

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\EnterpriseAccountPayOrderRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\EnterpriseAccountPayOrderAccountPaymentRequestDtoParam());

try {
    $response = $api_client->enterpriseAccountPayOrder($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->enterpriseAccountPayOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\EnterpriseAccountPayOrderAccountPaymentRequestDtoParam**](../Model/EnterpriseAccountPayOrderAccountPaymentRequestDtoParam.md)|  |

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\EnterpriseAccountPayOrderAccountPaymentRespDtoResult**](../Model/EnterpriseAccountPayOrderAccountPaymentRespDtoResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **enterpriseAutoPaymentOrder**
EnterpriseAutoPaymentOrderResponse enterpriseAutoPaymentOrder(EnterpriseAutoPaymentOrderRequest request)

企业账户支付-自动付款

付款方主动发起的付款请求

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\EnterpriseAutoPaymentOrderRequest();
$request->setMerchantNo("10014242006");
$request->setOrderId("merchant12345");
$request->setOrderAmount(0.01);
$request->setFundProcessType("fundProcessType_example");
$request->setGoodsName("旺仔牛奶");
$request->setExpiredTime("2021-05-12 13:23:45");
$request->setNotifyUrl("notifyUrl_example");
$request->setMemo("memo_example");
$request->setPayerNotifyUrl("payerNotifyUrl_example");
$request->setCsUrl("csUrl_example");

try {
    $response = $api_client->enterpriseAutoPaymentOrder($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->enterpriseAutoPaymentOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**|  | [optional]
 **orderId** | **string**|  | [optional]
 **orderAmount** | **float**|  | [optional]
 **fundProcessType** | **string**|  | [optional]
 **goodsName** | **string**|  | [optional]
 **expiredTime** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **memo** | **string**|  | [optional]
 **payerNotifyUrl** | **string**|  | [optional]
 **csUrl** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\EnterpriseAutoPaymentOrderAutoPaymentRespDtoResult**](../Model/EnterpriseAutoPaymentOrderAutoPaymentRespDtoResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **enterpriseAutoPaymentQuery**
EnterpriseAutoPaymentQueryResponse enterpriseAutoPaymentQuery(EnterpriseAutoPaymentQueryRequest request)

企业账户支付-自动付款订单查询

查询自动付款订单

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\EnterpriseAutoPaymentQueryRequest();
$request->setMerchantNo("10014242004");
$request->setOrderId("merchant12345");
$request->setOrderDate("orderDate_example");
$request->setUniqueOrderNo("uniqueOrderNo_example");

try {
    $response = $api_client->enterpriseAutoPaymentQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->enterpriseAutoPaymentQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**|  |
 **orderId** | **string**| 商户系统内部生成的订单号&lt;br&gt;如填写易宝内部订单号则可以不填，否则必填 | [optional]
 **orderDate** | **string**| 订单日期&lt;br&gt;如填写易宝内部订单号则可以不填，否则必填 | [optional]
 **uniqueOrderNo** | **string**| 易宝内部订单号&lt;br&gt;如填写此项，订单号及订单日期可以不填。如同时填写将以易宝内部订单号为准 | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\EnterpriseAutoPaymentQueryAutoPaymentQueryRespDtoResult**](../Model/EnterpriseAutoPaymentQueryAutoPaymentQueryRespDtoResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **enterpriseTokenPayOrder**
EnterpriseTokenPayOrderResponse enterpriseTokenPayOrder(EnterpriseTokenPayOrderRequest request)

企业账户支付-token支付

企业账户支付-token支付

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\EnterpriseTokenPayOrderRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setToken("token_example");
$request->setPayerMerchantNo("payerMerchantNo_example");

try {
    $response = $api_client->enterpriseTokenPayOrder($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->enterpriseTokenPayOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **token** | **string**|  | [optional]
 **payerMerchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\EnterpriseTokenPayOrderTokenPaymentResponseDtoResult**](../Model/EnterpriseTokenPayOrderTokenPaymentResponseDtoResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **enterpriseWithholdingOrder**
EnterpriseWithholdingOrderResponse enterpriseWithholdingOrder(EnterpriseWithholdingOrderRequest request)

企业账户支付-关系扣款

企业账户支付-关系扣款

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\EnterpriseWithholdingOrderRequest();
$request->setParentMerchantNo("10012426723");
$request->setMerchantNo("10014242004");
$request->setPayerMerchantNo("10014242005");
$request->setOrderId("merchant12345");
$request->setOrderAmount(88.88);
$request->setFundProcessType("fundProcessType_example");
$request->setGoodsName("旺仔牛奶");
$request->setExpiredTime("2017-12-12 13:23:45");
$request->setNotifyUrl("notifyUrl_example");
$request->setMemo("费用");
$request->setPayerNotifyUrl("payerNotifyUrl_example");
$request->setCsUrl("csUrl_example");
$request->setYpAccountBookNo("ypAccountBookNo_example");
$request->setYpPromotionInfo("ypPromotionInfo_example");

try {
    $response = $api_client->enterpriseWithholdingOrder($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->enterpriseWithholdingOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **payerMerchantNo** | **string**|  | [optional]
 **orderId** | **string**|  | [optional]
 **orderAmount** | **float**|  | [optional]
 **fundProcessType** | **string**|  | [optional]
 **goodsName** | **string**|  | [optional]
 **expiredTime** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **memo** | **string**|  | [optional]
 **payerNotifyUrl** | **string**|  | [optional]
 **csUrl** | **string**|  | [optional]
 **ypAccountBookNo** | **string**|  | [optional]
 **ypPromotionInfo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\EnterpriseWithholdingOrderWithholdingPaymentRespDtoResult**](../Model/EnterpriseWithholdingOrderWithholdingPaymentRespDtoResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **externalOrder**
ExternalOrderResponse externalOrder(ExternalOrderRequest request)

银行账户支付-外部订单同步

用于报送非易宝订单信息

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\ExternalOrderRequest();
$request->setRequestNo("requestNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setChannelName("channelName_example");
$request->setOrderId("orderId_example");
$request->setMerchantName("merchantName_example");
$request->setGoodsName("goodsName_example");
$request->setTrxDate("trxDate_example");
$request->setFinishDate("finishDate_example");
$request->setOrderAmount(1.2);
$request->setRealAmount(1.2);
$request->setPayerUserId("payerUserId_example");
$request->setPayWay("payWay_example");
$request->setPayCardNo("payCardNo_example");
$request->setPayCardType("payCardType_example");
$request->setUserRequestIp("userRequestIp_example");
$request->setTrxType("trxType_example");
$request->setBatchNo("batchNo_example");
$request->setChannelExtInfo("{   \"channelMerchantInfos\": [     {       \"channelMrchantName\": \"商户名称\",       \"channelMrchantNo\": \"10020320020\"     },     {       \"channelMrchantName\": \"商户名称2\",       \"channelMrchantNo\": \"10020320021\"     }   ] }");

try {
    $response = $api_client->externalOrder($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->externalOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **channelName** | **string**|  | [optional]
 **orderId** | **string**|  | [optional]
 **merchantName** | **string**|  | [optional]
 **goodsName** | **string**|  | [optional]
 **trxDate** | **string**|  | [optional]
 **finishDate** | **string**|  | [optional]
 **orderAmount** | **float**|  | [optional]
 **realAmount** | **float**|  | [optional]
 **payerUserId** | **string**|  | [optional]
 **payWay** | **string**|  | [optional]
 **payCardNo** | **string**|  | [optional]
 **payCardType** | **string**|  | [optional]
 **userRequestIp** | **string**|  | [optional]
 **trxType** | **string**|  | [optional]
 **batchNo** | **string**|  | [optional]
 **channelExtInfo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\ExternalOrderExternalOrderSubmitOrderRespDtoResult**](../Model/ExternalOrderExternalOrderSubmitOrderRespDtoResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **groupAccountTransfer**
GroupAccountTransferResponse groupAccountTransfer(GroupAccountTransferRequest request)

集团账户资金划拨



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\GroupAccountTransferRequest();
$request->setParentMerchantNo("100400612345");
$request->setRequestNo("商户请求号，由商户自定义生成;示例值：TRANS2133213124");
$request->setFromMerchantNo("易宝支付分配的的商户唯一标识;示例值:100400612345");
$request->setToMerchantNo("易宝支付分配的的商户唯一标识;示例值:100400612346");
$request->setOrderAmount("单位：元（RMB），精确到分;示例值：0.01 元");
$request->setUsage("usage_example");
$request->setFeeChargeSide("当商户承担且计费方式为预付实扣或后收时，不支持转入方承担；当平台商或服务商承担时无需指定此手续费承担方；");
$request->setNotifyUrl("notifyUrl_example");

try {
    $response = $api_client->groupAccountTransfer($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->groupAccountTransfer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **requestNo** | **string**|  | [optional]
 **fromMerchantNo** | **string**|  | [optional]
 **toMerchantNo** | **string**|  | [optional]
 **orderAmount** | **string**|  | [optional]
 **usage** | **string**|  | [optional]
 **feeChargeSide** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\GroupAccountTransferRespDTO**](../Model/GroupAccountTransferRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **groupAccountTransferQuery**
GroupAccountTransferQueryResponse groupAccountTransferQuery(GroupAccountTransferQueryRequest request)

集团账户资金划拨查询



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\GroupAccountTransferQueryRequest();
$request->setParentMerchantNo("100400612345");
$request->setMerchantNo("merchantNo_example");
$request->setOrderNo("orderNo_example");
$request->setRequestNo("TRANS2133213124");

try {
    $response = $api_client->groupAccountTransferQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->groupAccountTransferQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**| &lt;p&gt;业务发起方商编&lt;br /&gt;发起方商户编号&lt;br /&gt;（标准商户收付款方案中此参数与商编一致，平台商户收付款方案中此参数为平台商商户编号）&lt;/p&gt; |
 **merchantNo** | **string**| &lt;div data-page-id&#x3D;\&quot;Tq8rdopvvoUCakxJJCjcmQBcnah\&quot; data-docx-has-block-data&#x3D;\&quot;false\&quot;&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-FMREd4hYFoBSkixZwqjcL6tFnpe\&quot;&gt;转入方商编&lt;/div&gt; &lt;/div&gt; |
 **orderNo** | **string**| &lt;p&gt;易宝订单号&lt;br /&gt;易宝支付系统生成的订单号(与商户请求号两者填其一)&lt;/p&gt; | [optional]
 **requestNo** | **string**| &lt;p&gt;商户请求号，由商户自定义生成(与易宝转账订单号两者填其一)&lt;/p&gt; | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\GroupAccountTransferQueryRespDTO**](../Model/GroupAccountTransferQueryRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **individualApply**
IndividualApplyResponse individualApply(IndividualApplyRequest request)

付款到个人--申请添加个人用户

此服务针对于有付款给个人收款方且不满足使用企业付款场景的商户使用。商户向常用个人用户付款前，请先通过此接口申请添加个人用户信息

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\IndividualApplyRequest();
$request->setMerchantNo("merchantNo_example");
$request->setRequestNo("requestNo_example");
$request->setName("name_example");
$request->setCertificateType("certificateType_example");
$request->setCertificateNo("certificateNo_example");
$request->setPhone("phone_example");
$request->setFrontUrl("frontUrl_example");
$request->setContraryUrl("contraryUrl_example");

try {
    $response = $api_client->individualApply($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->individualApply: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**|  | [optional]
 **requestNo** | **string**|  | [optional]
 **name** | **string**|  | [optional]
 **certificateType** | **string**|  | [optional]
 **certificateNo** | **string**|  | [optional]
 **phone** | **string**|  | [optional]
 **frontUrl** | **string**|  | [optional]
 **contraryUrl** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\ApplyIndividualRespDTO**](../Model/ApplyIndividualRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **individualQuery**
IndividualQueryResponse individualQuery(IndividualQueryRequest request)

付款到个人--查询已添加的个人用户

通过此服务查询付款商户已经添加的个人用户信息

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\IndividualQueryRequest();
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->individualQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->individualQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\QueryIndividualRespDTO**](../Model/QueryIndividualRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **individualQueryProgress**
IndividualQueryProgressResponse individualQueryProgress(IndividualQueryProgressRequest request)

付款到个人--查询申请进度

通过此接口服务查询个人用户添加进度

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\IndividualQueryProgressRequest();
$request->setRequestNo("requestNo_example");

try {
    $response = $api_client->individualQueryProgress($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->individualQueryProgress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\ApplyIndivdualProgressRespDTO**](../Model/ApplyIndivdualProgressRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **migrateBankOrder**
MigrateBankOrderResponse migrateBankOrder(MigrateBankOrderRequest request)

余额迁移到银行-申请接口

支持商户资金从易宝账户划拨至廊坊银行账户

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\MigrateBankOrderRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setRequestNo("requestNo_example");
$request->setAmount(1.2);
$request->setToken("token_example");
$request->setBankCode("bankCode_example");
$request->setRemark("remark_example");
$request->setNotifyUrl("notifyUrl_example");

try {
    $response = $api_client->migrateBankOrder($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->migrateBankOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **requestNo** | **string**|  | [optional]
 **amount** | **float**|  | [optional]
 **token** | **string**|  | [optional]
 **bankCode** | **string**|  | [optional]
 **remark** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\MigrateBankOrderMigrateBankRespDTOResult**](../Model/MigrateBankOrderMigrateBankRespDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **migrateBankQuery**
MigrateBankQueryResponse migrateBankQuery(MigrateBankQueryRequest request)

余额迁移到银行-查询接口

支持查询资金迁移结果，商户可使用此接口处理异常情况，进一步确定商户状态。

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\MigrateBankQueryRequest();
$request->setMerchantNo("merchantNo_example");
$request->setRequestNo("requestNo_example");
$request->setOrderNo("orderNo_example");

try {
    $response = $api_client->migrateBankQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->migrateBankQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**| 商户编号&lt;br&gt;易宝支付分配的的商户唯一标识 |
 **requestNo** | **string**| 商户请求号&lt;br&gt;由商户自定义生成（跟易宝订单号二选一） | [optional]
 **orderNo** | **string**| 余额迁移到银行-申请接口返回的易宝订单号（跟商户请求号二选一） | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\MigrateBankQueryMigrateBankQueryRespDTOResult**](../Model/MigrateBankQueryMigrateBankQueryRespDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **multimodal_account_trade**
MultimodalAccountTradeResponse multimodal_account_trade(MultimodalAccountTradeRequest request)

付款-下单（多场景）

适配于多场景的账户付款下单

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\MultimodalAccountTradeRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\AccountTradeRequestDTO());

try {
    $response = $api_client->multimodal_account_trade($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->multimodal_account_trade: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\AccountTradeRequestDTO**](../Model/AccountTradeRequestDTO.md)| 付款下单请求参数 | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\RemitRespDTO**](../Model/RemitRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **payAccoutCard**
PayAccoutCardResponse payAccoutCard(PayAccoutCardRequest request)

代付到记账簿绑定卡

代付到记账簿绑定卡

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\PayAccoutCardRequest();
$request->setParentMerchantNo("100400612345");
$request->setMerchantNo("100400612345");
$request->setRequestNo("requestNo_example");
$request->setMerchantAccountBookNo("merchantAccountBookNo_example");
$request->setYpAccountBookNo("ypAccountBookNo_example");
$request->setReceiverAccountNo("receiverAccountNo_example");
$request->setOrderAmount(1.01);
$request->setFeeChargeSide("feeChargeSide_example");
$request->setNotifyUrl("notifyUrl_example");
$request->setTerminalType("terminalType_example");
$request->setComments("comments_example");
$request->setRemark("remark_example");
$request->setReceiptComments("receiptComments_example");
$request->setRiskInfo("riskInfo_example");

try {
    $response = $api_client->payAccoutCard($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->payAccoutCard: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **requestNo** | **string**|  | [optional]
 **merchantAccountBookNo** | **string**|  | [optional]
 **ypAccountBookNo** | **string**|  | [optional]
 **receiverAccountNo** | **string**|  | [optional]
 **orderAmount** | **float**|  | [optional]
 **feeChargeSide** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **terminalType** | **string**|  | [optional]
 **comments** | **string**|  | [optional]
 **remark** | **string**|  | [optional]
 **receiptComments** | **string**|  | [optional]
 **riskInfo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\RemitAccountBookRespDTO**](../Model/RemitAccountBookRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **payCancel**
PayCancelResponse payCancel(PayCancelRequest request)

付款-撤销

撤销预约付款请求

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\PayCancelRequest();
$request->setParentMerchantNo("100400612345");
$request->setOrderNo("20200720110033a171b64e");
$request->setCancelReason("业务需要撤销此次付款");

try {
    $response = $api_client->payCancel($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->payCancel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **orderNo** | **string**|  | [optional]
 **cancelReason** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\PayCancelRemitCancelRespDTOResult**](../Model/PayCancelRemitCancelRespDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **payOrder**
PayOrderResponse payOrder(PayOrderRequest request)

付款-下单

为了保证出款成功，各农信社卡或账号16位以下的农业银行卡，建议或尽可能填写支行编码；

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\PayOrderRequest();
$request->setParentMerchantNo("100400612345");
$request->setMerchantNo("100400612345");
$request->setRequestNo("PAY2133213124");
$request->setOrderAmount(1.01);
$request->setFeeChargeSide("当商户承担且计费方式为预付实扣或后收时，不支持收款方承担；当平台商或服务商承担时无需指定此手续费承担方；");
$request->setReceiveType("REAL_TIME");
$request->setReceiverAccountNo("6212260200062388891");
$request->setReceiverAccountName("receiverAccountName_example");
$request->setReceiverBankCode("ICBC");
$request->setBankAccountType("DEBIT_CARD");
$request->setBranchBankCode("branchBankCode_example");
$request->setComments("xx平台付款");
$request->setTerminalType("PC");
$request->setNotifyUrl("http://www.baidu.com");
$request->setRemark("remark_example");
$request->setReceiptComments("receiptComments_example");
$request->setRiskInfo("riskInfo_example");

try {
    $response = $api_client->payOrder($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->payOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **requestNo** | **string**|  | [optional]
 **orderAmount** | **float**|  | [optional]
 **feeChargeSide** | **string**|  | [optional]
 **receiveType** | **string**|  | [optional]
 **receiverAccountNo** | **string**|  | [optional]
 **receiverAccountName** | **string**|  | [optional]
 **receiverBankCode** | **string**|  | [optional]
 **bankAccountType** | **string**|  | [optional]
 **branchBankCode** | **string**|  | [optional]
 **comments** | **string**|  | [optional]
 **terminalType** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **remark** | **string**|  | [optional]
 **receiptComments** | **string**|  | [optional]
 **riskInfo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\PayOrderRemitRespDTOResult**](../Model/PayOrderRemitRespDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **payOrderV2**
PayOrderV2Response payOrderV2(PayOrderV2Request request)

付款-下单（多场景）

适配于多场景的账户付款下单

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\PayOrderV2Request();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\AccountTradeRequestDTO());

try {
    $response = $api_client->payOrderV2($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->payOrderV2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\AccountTradeRequestDTO**](../Model/AccountTradeRequestDTO.md)| 付款下单请求参数 | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\RemitRespDTO**](../Model/RemitRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **payQuery**
PayQueryResponse payQuery(PayQueryRequest request)

付款-查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\PayQueryRequest();
$request->setParentMerchantNo("100400612345");
$request->setRequestNo("REMIT20200327103027");
$request->setOrderNo("8af60c56b35b42d3a7e985fe55a6c54c");

try {
    $response = $api_client->payQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->payQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**| 发起方商户编号&lt;br&gt;（标准商户收付款方案中此参数与商编一致，平台商户收付款方案中此参数为平台商商户编号）&lt;!--5f39ae17-8c62-4a45-bc43-b32064c9388a:W3siYmxvY2tJZCI6IjM4NzAtMTU5ODQwOTgyNDQ4MCIsImJsb2NrVHlwZSI6InBhcmFncmFwaCIsInN0eWxlcyI6eyJhbGlnbiI6ImxlZnQiLCJpbmRlbnQiOjAsInRleHQtaW5kZW50IjowLCJsaW5lLWhlaWdodCI6MS43NSwiYmFjay1jb2xvciI6IiIsInBhZGRpbmciOiIifSwidHlwZSI6InBhcmFncmFwaCIsInJpY2hUZXh0Ijp7ImRhdGEiOlt7ImNoYXIiOiLmoIcifSx7ImNoYXIiOiLlh4YifSx7ImNoYXIiOiLllYYifSx7ImNoYXIiOiLmiLcifSx7ImNoYXIiOiLmlLYifSx7ImNoYXIiOiLku5gifSx7ImNoYXIiOiLmrL4ifSx7ImNoYXIiOiLmlrkifSx7ImNoYXIiOiLmoYgifSx7ImNoYXIiOiLkuK0ifSx7ImNoYXIiOiLmraQifSx7ImNoYXIiOiLlj4IifSx7ImNoYXIiOiLmlbAifSx7ImNoYXIiOiLkuI4ifSx7ImNoYXIiOiLllYYifSx7ImNoYXIiOiLnvJYifSx7ImNoYXIiOiLkuIAifSx7ImNoYXIiOiLoh7QifSx7ImNoYXIiOiLvvIwifSx7ImNoYXIiOiLlubMifSx7ImNoYXIiOiLlj7AifSx7ImNoYXIiOiLllYYifSx7ImNoYXIiOiLmiLcifSx7ImNoYXIiOiLmlLYifSx7ImNoYXIiOiLku5gifSx7ImNoYXIiOiLmrL4ifSx7ImNoYXIiOiLmlrkifSx7ImNoYXIiOiLmoYgifSx7ImNoYXIiOiLkuK0ifSx7ImNoYXIiOiLmraQifSx7ImNoYXIiOiLlj4IifSx7ImNoYXIiOiLmlbAifSx7ImNoYXIiOiLkuLoifSx7ImNoYXIiOiLlubMifSx7ImNoYXIiOiLlj7AifSx7ImNoYXIiOiLllYYifSx7ImNoYXIiOiLllYYifSx7ImNoYXIiOiLmiLcifSx7ImNoYXIiOiLnvJYifSx7ImNoYXIiOiLlj7cifV0sImlzUmljaFRleHQiOnRydWUsImtlZXBMaW5lQnJlYWsiOnRydWV9fV0&#x3D;--&gt;&lt;!--5f39ae17-8c62-4a45-bc43-b32064c9388a:W3siYmxvY2tJZCI6IjI3MTEtMTU5ODQwOTgyNDE3NSIsImJsb2NrVHlwZSI6InBhcmFncmFwaCIsInN0eWxlcyI6eyJhbGlnbiI6ImxlZnQiLCJpbmRlbnQiOjAsInRleHQtaW5kZW50IjowLCJsaW5lLWhlaWdodCI6MS43NSwiYmFjay1jb2xvciI6IiIsInBhZGRpbmciOiIifSwidHlwZSI6InBhcmFncmFwaCIsInJpY2hUZXh0Ijp7ImRhdGEiOlt7ImNoYXIiOiLlj5EifSx7ImNoYXIiOiLotbcifSx7ImNoYXIiOiLmlrkifSx7ImNoYXIiOiLllYYifSx7ImNoYXIiOiLmiLcifSx7ImNoYXIiOiLnvJYifSx7ImNoYXIiOiLlj7cifV0sImlzUmljaFRleHQiOnRydWUsImtlZXBMaW5lQnJlYWsiOnRydWV9fV0&#x3D;--&gt; |
 **requestNo** | **string**| 商户请求号&lt;br&gt;商户请求号，由商户自定义生成（与易宝付款订单号两者填其一） | [optional]
 **orderNo** | **string**| 易宝订单号&lt;br&gt;易宝支付系统生成的付款订单号（与商户请求号两者填其一） | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\PayQueryRemitOrderQueryRespDTOResult**](../Model/PayQueryRemitOrderQueryRespDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **paySystemQuery**
PaySystemQueryResponse paySystemQuery(PaySystemQueryRequest request)

付款-查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\PaySystemQueryRequest();
$request->setMerchantNo("易宝支付分配的的商户唯一标识;示例值:100400612345");
$request->setRequestNo("REMIT20200327103027");
$request->setOrderNo("8af60c56b35b42d3a7e985fe55a6c54c");

try {
    $response = $api_client->paySystemQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->paySystemQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**|  |
 **requestNo** | **string**| 商户请求号&lt;br&gt;商户请求号，由商户自定义生成（与易宝付款订单号两者填其一） | [optional]
 **orderNo** | **string**| 易宝订单号&lt;br&gt;易宝支付系统生成的付款订单号（与商户请求号两者填其一） | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\PaySystemQueryRemitOrderQueryRespDTOResult**](../Model/PaySystemQueryRemitOrderQueryRespDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **receiptGather**
ReceiptGatherResponse receiptGather(ReceiptGatherRequest request)

获取资金汇总凭证

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\ReceiptGatherRequest();
$request->setMerchantNo("merchantNo_example");
$request->setRemark("remark_example");
$request->setCounterpartyNo("counterpartyNo_example");
$request->setOrderNos("orderNos_example");
$request->setBizDate("bizDate_example");

try {
    $response = $api_client->receiptGather($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->receiptGather: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**|  | [optional]
 **remark** | **string**|  | [optional]
 **counterpartyNo** | **string**|  | [optional]
 **orderNos** | **string**|  | [optional]
 **bizDate** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\ReceiptGatherBatchReceiptRespDTOResult**](../Model/ReceiptGatherBatchReceiptRespDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **receiptGet**
ReceiptGetResponse receiptGet(ReceiptGetRequest request)

电子回单-下载

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\ReceiptGetRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setTradeType("tradeType_example");
$request->setOrderNo("示例值：8af60c56b35b42d3a7e985fe55a6c54c");
$request->setRequestNo("示例值：REMIT20200327103027");
$request->setOrderDate("orderDate_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->receiptGet($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->receiptGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**| 发起方商户编号&lt;br&gt;（标准商户收付款方案中此参数与商编一致，平台商户收付款方案中此参数为平台商商户编号） |
 **tradeType** | **string**| 可选项如下:&lt;br&gt;TRANSFER:企业账户转账&lt;br&gt;PAY:企业付款&lt;br&gt;RECHARGE:企业账户充值&lt;br&gt;WITHDRAW:企业账户提现&lt;br&gt;ADVANCE:记账薄收款&lt;br&gt;ORDER_REMIT:订单付款&lt;br&gt;GROUP_ACCOUNT_TRANSFER:资金归集 |
 **orderNo** | **string**| 易宝支付系统生成的付款订单号（与商户请求号两者填其一） | [optional]
 **requestNo** | **string**| 商户请求号&lt;br&gt;商户请求号，由商户自定义生成（与易宝付款订单号两者填其一） | [optional]
 **orderDate** | **string**| 如果传了商户请求号requestNo，orderDate也是必填的，格式 yyyy-MM/yyyy-MM-dd | [optional]
 **merchantNo** | **string**| 商户编号，易宝支付分配的的商户唯一标识，如果传了商户请求号requestNo，那么merchantNo也是必填的。 | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\ReceiptGetReceiptRespDTOResult**](../Model/ReceiptGetReceiptRespDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **recharge**
RechargeResponse recharge(RechargeRequest request)

充值-下单（多种支付）

提供商户资金进入易宝商户账户的能力，充值方式支持企业网银和个人网银、银行汇款、银行扣款、对公快捷等

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\RechargeRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\RechargeRechargeApiV2RequestDTOParam());

try {
    $response = $api_client->recharge($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->recharge: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\RechargeRechargeApiV2RequestDTOParam**](../Model/RechargeRechargeApiV2RequestDTOParam.md)|  |

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\RechargeRechargeApiV2ResponseDTOResult**](../Model/RechargeRechargeApiV2ResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **rechargeAccountBookQuery**
RechargeAccountBookQueryResponse rechargeAccountBookQuery(RechargeAccountBookQueryRequest request)

批量查询记账簿来账流水

通过此接口可批量查询记账簿来账流水

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\RechargeAccountBookQueryRequest();
$request->setYpAccountBookNo("ypAccountBookNo_example");
$request->setQueryStartDate("2022-01-01 00:00:00");
$request->setQueryEndDate("2022-01-02 23:59:59");
$request->setMerchantNo("merchantNo_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setPageNo(56);
$request->setPageSize(56);

try {
    $response = $api_client->rechargeAccountBookQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->rechargeAccountBookQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ypAccountBookNo** | **string**| 易宝记账簿编号 |
 **queryStartDate** | **string**| 查询时间范围-开始日期 格式:yyyy-MM-dd HH:mm:ss&lt;br&gt;与结束时间间隔不能超过2天 |
 **queryEndDate** | **string**| 查询时间范围-结束时间 格式:yyyy-MM-dd HH:mm:ss&lt;br&gt;与开始时间间隔不能超过2天 |
 **merchantNo** | **string**| 收款商户编号 |
 **parentMerchantNo** | **string**| 标准商户收付款方案中此参数与商编一致，平台商户收付款方案中此参数为平台商商户编号 |
 **pageNo** | **int**| 页码,从1开始,默认为1 | [optional]
 **pageSize** | **int**| 页大小,默认30 | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\RechargeAccountBookQueryRechargePageQueryResponseDTOResult**](../Model/RechargeAccountBookQueryRechargePageQueryResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **rechargeBankOrder**
RechargeBankOrderResponse rechargeBankOrder(RechargeBankOrderRequest request)

银行资金提现

银行资金提现

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\RechargeBankOrderRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setRequestNo("requestNo_example");
$request->setAmount(1.2);
$request->setToken("token_example");
$request->setBankCode("BOL");
$request->setNotifyUrl("notifyUrl_example");
$request->setUsage("usage_example");
$request->setRemark("remark_example");
$request->setClientIp("clientIp_example");

try {
    $response = $api_client->rechargeBankOrder($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->rechargeBankOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **requestNo** | **string**|  | [optional]
 **amount** | **float**|  | [optional]
 **token** | **string**|  | [optional]
 **bankCode** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **usage** | **string**|  | [optional]
 **remark** | **string**|  | [optional]
 **clientIp** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\RechargeBankOrderBankPayRechargeRespDTOResult**](../Model/RechargeBankOrderBankPayRechargeRespDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **rechargeBatchQuery**
RechargeBatchQueryResponse rechargeBatchQuery(RechargeBatchQueryRequest request)

充值订单批量查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\RechargeBatchQueryRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setQueryStartDate("queryStartDate_example");
$request->setQueryEndDate("queryEndDate_example");

try {
    $response = $api_client->rechargeBatchQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->rechargeBatchQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**| 发起方商户编号&lt;br&gt;（标准商户收付款方案中此参数与商编一致，平台商户收付款方案中此参数为平台商商户编号） | [optional]
 **merchantNo** | **string**|  | [optional]
 **queryStartDate** | **string**| 查询开始时间&lt;br&gt;（支持获取最长周期为30天的充值记录,&lt;br&gt;支持yyyy-MM-dd格式，示例：2021-09-17 即2021-09-17 00:00:00开始） | [optional]
 **queryEndDate** | **string**| 查询结束时间&lt;br&gt;（支持获取最长周期为30天的充值记录，&lt;br&gt;支持yyyy-MM-dd格式，示例：2021-09-17 即2021-09-17 23:59:59结束) | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\RechargeBatchQueryRechargeQueryMultiApiRespDTOResult**](../Model/RechargeBatchQueryRechargeQueryMultiApiRespDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **rechargeOnlinebankOrder**
RechargeOnlinebankOrderResponse rechargeOnlinebankOrder(RechargeOnlinebankOrderRequest request)

充值-网银下单

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\RechargeOnlinebankOrderRequest();
$request->setMerchantNo("merchantNo_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setRequestNo("requestNo_example");
$request->setAmount(1.2);
$request->setPayType("payType_example");
$request->setBankCode("bankCode_example");
$request->setNotifyUrl("notifyUrl_example");
$request->setRemark("remark_example");
$request->setReturnUrl("returnUrl_example");

try {
    $response = $api_client->rechargeOnlinebankOrder($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->rechargeOnlinebankOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]
 **requestNo** | **string**|  | [optional]
 **amount** | **float**|  | [optional]
 **payType** | **string**|  | [optional]
 **bankCode** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **remark** | **string**|  | [optional]
 **returnUrl** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\RechargeOnlinebankOrderOnlineBankRechargeApiRespDTOResult**](../Model/RechargeOnlinebankOrderOnlineBankRechargeApiRespDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **rechargeOrder**
RechargeOrderResponse rechargeOrder(RechargeOrderRequest request)

充值-银行汇款下单

发起充值

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\RechargeOrderRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("100400612345");
$request->setRequestNo("requestNo_example");
$request->setAmount(1.2);
$request->setRemark("remark_example");
$request->setPayType("payType_example");
$request->setNotifyUrl("notifyUrl_example");

try {
    $response = $api_client->rechargeOrder($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->rechargeOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **requestNo** | **string**|  | [optional]
 **amount** | **float**|  | [optional]
 **remark** | **string**|  | [optional]
 **payType** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\RechargeOrderRechargeApiRespDTOResult**](../Model/RechargeOrderRechargeApiRespDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **rechargePayerAdd**
RechargePayerAddResponse rechargePayerAdd(RechargePayerAddRequest request)

添加付款方

添加付款方

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\RechargePayerAddRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setIdentityType("identityType_example");
$request->setName("name_example");
$request->setCertificateType("certificateType_example");
$request->setCertificateNo("certificateNo_example");
$request->setApplyDataUrl("applyDataUrl_example");

try {
    $response = $api_client->rechargePayerAdd($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->rechargePayerAdd: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **identityType** | **string**|  | [optional]
 **name** | **string**|  | [optional]
 **certificateType** | **string**|  | [optional]
 **certificateNo** | **string**|  | [optional]
 **applyDataUrl** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\YopRechargeManageResponseDTO**](../Model/YopRechargeManageResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **rechargePayerDelete**
RechargePayerDeleteResponse rechargePayerDelete(RechargePayerDeleteRequest request)

删除付款方

删除付款方

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\RechargePayerDeleteRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setIdentityType("identityType_example");
$request->setName("name_example");
$request->setCertificateType("certificateType_example");
$request->setCertificateNo("certificateNo_example");

try {
    $response = $api_client->rechargePayerDelete($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->rechargePayerDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **identityType** | **string**|  | [optional]
 **name** | **string**|  | [optional]
 **certificateType** | **string**|  | [optional]
 **certificateNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\YopRechargeManageResponseDTO**](../Model/YopRechargeManageResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **rechargePayerQuery**
RechargePayerQueryResponse rechargePayerQuery(RechargePayerQueryRequest request)

查询付款方

查询付款方

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\RechargePayerQueryRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setIdentityType("identityType_example");
$request->setName("name_example");
$request->setCertificateType("certificateType_example");
$request->setCertificateNo("certificateNo_example");

try {
    $response = $api_client->rechargePayerQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->rechargePayerQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**| &lt;p&gt;业务发起方商编&lt;/p&gt; |
 **merchantNo** | **string**| &lt;p&gt;商户编号&lt;/p&gt; |
 **identityType** | **string**| &lt;p&gt;身份类型&lt;/p&gt; 可选项如下: BUSINESS:企业账户 PERSON:个人账户 | [optional]
 **name** | **string**| &lt;p&gt;账户名称&lt;/p&gt; | [optional]
 **certificateType** | **string**| &lt;p&gt;证件类型&lt;/p&gt; 可选项如下: ID_CARD:身份证 | [optional]
 **certificateNo** | **string**| &lt;p&gt;证件号&lt;/p&gt; | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\YopRechargeManageQueryResponseDTO**](../Model/YopRechargeManageQueryResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **rechargeQuery**
RechargeQueryResponse rechargeQuery(RechargeQueryRequest request)

充值-查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\RechargeQueryRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setOrderNo("orderNo_example");
$request->setRequestNo("requestNo_example");

try {
    $response = $api_client->rechargeQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->rechargeQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**| 发起方商户编号&lt;br&gt;（标准商户收付款方案中此参数与商编一致，平台商户收付款方案中此参数为平台商商户编号） |
 **merchantNo** | **string**|  |
 **orderNo** | **string**| 充值订单号&lt;br&gt;充值订单号和商户请求号不能同时为空 | [optional]
 **requestNo** | **string**| 商户请求号&lt;br&gt;充值订单号和商户请求号不能同时为空 | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\RechargeQueryRechargeQueryApiRespDTOResult**](../Model/RechargeQueryRechargeQueryApiRespDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **setWithdrawRule**
SetWithdrawRuleResponse setWithdrawRule(SetWithdrawRuleRequest request)

设置提现规则

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\SetWithdrawRuleRequest();
$request->setFromMerchantNo("fromMerchantNo_example");
$request->setTomerchantNo("tomerchantNo_example");

try {
    $response = $api_client->setWithdrawRule($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->setWithdrawRule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fromMerchantNo** | **string**|  | [optional]
 **tomerchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\SetWithdrawRuleWithdrawRuleRespDTOResult**](../Model/SetWithdrawRuleWithdrawRuleRespDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **supplierApply**
SupplierApplyResponse supplierApply(SupplierApplyRequest request)

付款到供应商--申请添加供应商

付款到供应商--申请添加供应商

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\SupplierApplyRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\SupplierApplyApplySupplierRequestDTOParam());

try {
    $response = $api_client->supplierApply($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->supplierApply: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\SupplierApplyApplySupplierRequestDTOParam**](../Model/SupplierApplyApplySupplierRequestDTOParam.md)|  |

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\SupplierApplyApplySupplierRespDTOResult**](../Model/SupplierApplyApplySupplierRespDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **supplierPayOrder**
SupplierPayOrderResponse supplierPayOrder(SupplierPayOrderRequest request)

付款到供应商/个人-下单

付款到供应商/个人-下单

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\SupplierPayOrderRequest();
$request->setParentMerchantNo("100400612345");
$request->setMerchantNo("100400612345");
$request->setRequestNo("requestNo111");
$request->setOrderAmount(1.01);
$request->setReceiverAccountNo("6212260200062388891");
$request->setSupplierId(17);
$request->setReceiverBankCode("ICBC");
$request->setBranchBankCode("branchBankCode_example");
$request->setBankAccountType("DEBIT_CARD");
$request->setComments("xx平台付款");
$request->setFeeChargeSide("PAYER");
$request->setTerminalType("PC");
$request->setReceiveType("REAL_TIME");
$request->setNotifyUrl("notifyUrl_example");

try {
    $response = $api_client->supplierPayOrder($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->supplierPayOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **requestNo** | **string**|  | [optional]
 **orderAmount** | **float**|  | [optional]
 **receiverAccountNo** | **string**|  | [optional]
 **supplierId** | **int**|  | [optional]
 **receiverBankCode** | **string**|  | [optional]
 **branchBankCode** | **string**|  | [optional]
 **bankAccountType** | **string**|  | [optional]
 **comments** | **string**|  | [optional]
 **feeChargeSide** | **string**|  | [optional]
 **terminalType** | **string**|  | [optional]
 **receiveType** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\SupplierPayOrderRemitRespDTOResult**](../Model/SupplierPayOrderRemitRespDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **supplierQuery**
SupplierQueryResponse supplierQuery(SupplierQueryRequest request)

付款到供应商--查询已添加的供应商

付款到供应商--查询已添加的供应商

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\SupplierQueryRequest();
$request->setMerchantNo("10080011111");

try {
    $response = $api_client->supplierQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->supplierQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**|  |

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\SupplierQueryQuerySupplierRespDTOResult**](../Model/SupplierQueryQuerySupplierRespDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **supplierQueryProgress**
SupplierQueryProgressResponse supplierQueryProgress(SupplierQueryProgressRequest request)

付款到供应商--查询申请进度

付款到供应商--查询申请进度

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\SupplierQueryProgressRequest();
$request->setRequestNo("requestNo1111");

try {
    $response = $api_client->supplierQueryProgress($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->supplierQueryProgress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**|  |

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\SupplierQueryProgressApplySupplierProgressRespDTOResult**](../Model/SupplierQueryProgressApplySupplierProgressRespDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **transferB2bOrder**
TransferB2bOrderResponse transferB2bOrder(TransferB2bOrderRequest request)

转账-下单

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\TransferB2bOrderRequest();
$request->setParentMerchantNo("100400612345");
$request->setRequestNo("商户请求号，由商户自定义生成;示例值：TRANS2133213124");
$request->setFromMerchantNo("易宝支付分配的的商户唯一标识;示例值:100400612345");
$request->setToMerchantNo("易宝支付分配的的商户唯一标识;示例值:100400612346");
$request->setToAccountType("默认FUND_ACCOUNT");
$request->setOrderAmount("单位：元（RMB），精确到分;示例值：0.01 元");
$request->setUsage("usage_example");
$request->setFeeChargeSide("当商户承担且计费方式为预付实扣或后收时，不支持转入方承担；当平台商或服务商承担时无需指定此手续费承担方；");
$request->setNotifyUrl("notifyUrl_example");
$request->setRiskInfo("riskInfo_example");
$request->setToAccountNo("toAccountNo_example");

try {
    $response = $api_client->transferB2bOrder($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->transferB2bOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **requestNo** | **string**|  | [optional]
 **fromMerchantNo** | **string**|  | [optional]
 **toMerchantNo** | **string**|  | [optional]
 **toAccountType** | **string**|  | [optional]
 **orderAmount** | **string**|  | [optional]
 **usage** | **string**|  | [optional]
 **feeChargeSide** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **riskInfo** | **string**|  | [optional]
 **toAccountNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\TransferB2bOrderMgTransferOrderRespDTOResult**](../Model/TransferB2bOrderMgTransferOrderRespDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **transferB2bQuery**
TransferB2bQueryResponse transferB2bQuery(TransferB2bQueryRequest request)

转账-查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\TransferB2bQueryRequest();
$request->setParentMerchantNo("100400612345");
$request->setRequestNo("商户请求号，由商户自定义生成 ;示例值：TRANS2133213124");
$request->setOrderNo("orderNo_example");

try {
    $response = $api_client->transferB2bQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->transferB2bQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**| 发起方商户编号&lt;br&gt;（标准商户收付款方案中此参数与商编一致，平台商户收付款方案中此参数为平台商商户编号） |
 **requestNo** | **string**| 商户请求号&lt;br&gt;商户请求号，由商户自定义生成(与易宝转账订单号两者填其一) | [optional]
 **orderNo** | **string**| 易宝转账订单号&lt;br&gt;易宝支付系统生成的转账订单号(与商户请求号两者填其一) | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\TransferB2bQueryMgTransferOrderQueryRespDTOResult**](../Model/TransferB2bQueryMgTransferOrderQueryRespDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **transferSystemQuery**
TransferSystemQueryResponse transferSystemQuery(TransferSystemQueryRequest request)

转账-查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\TransferSystemQueryRequest();
$request->setMerchantNo("易宝支付分配的的商户唯一标识;示例值:100400612345");
$request->setRequestNo("商户请求号，由商户自定义生成 ;示例值：TRANS2133213124");
$request->setOrderNo("orderNo_example");

try {
    $response = $api_client->transferSystemQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->transferSystemQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**|  |
 **requestNo** | **string**| 商户请求号&lt;br&gt;商户请求号，由商户自定义生成(与易宝转账订单号两者填其一) | [optional]
 **orderNo** | **string**| 易宝转账订单号&lt;br&gt;易宝支付系统生成的转账订单号(与商户请求号两者填其一) | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\TransferSystemQueryMgTransferOrderQueryRespDTOResult**](../Model/TransferSystemQueryMgTransferOrderQueryRespDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **transferWechatOrder**
TransferWechatOrderResponse transferWechatOrder(TransferWechatOrderRequest request)

转账到微信零钱-下单

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\TransferWechatOrderRequest();
$request->setRequestNo("requestNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setAmount(1.2);
$request->setAppId("appId_example");
$request->setScene("scene_example");
$request->setOpenId("openId_example");
$request->setUserName("userName_example");
$request->setRemark("remark_example");
$request->setNotifyUrl("notifyUrl_example");
$request->setParentMerchantNo("parentMerchantNo_example");

try {
    $response = $api_client->transferWechatOrder($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->transferWechatOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **amount** | **float**|  | [optional]
 **appId** | **string**|  | [optional]
 **scene** | **string**|  | [optional]
 **openId** | **string**|  | [optional]
 **userName** | **string**|  | [optional]
 **remark** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\TransferWechatOrderWechatTransferRespDTOResult**](../Model/TransferWechatOrderWechatTransferRespDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **transferWechatQuery**
TransferWechatQueryResponse transferWechatQuery(TransferWechatQueryRequest request)

转账到微信零钱-查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\TransferWechatQueryRequest();
$request->setMerchantNo("merchantNo_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setRequestNo("requestNo_example");
$request->setOrderNo("orderNo_example");

try {
    $response = $api_client->transferWechatQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->transferWechatQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**| 商户编号&lt;br&gt;易宝支付分配的的商户唯一标识 |
 **parentMerchantNo** | **string**| 发起方商户编号&lt;br&gt;（标准商户收付款方案中此参数与商编一致，平台商户收付款方案中此参数为平台商商户编号） |
 **requestNo** | **string**| 商户请求号&lt;br&gt;由商户自定义生成 | [optional]
 **orderNo** | **string**| 易宝转账订单号&lt;br&gt;易宝支付系统生成的转账订单号（跟商户请求号二选一） | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\TransferWechatQueryQueryWechatTransferRespDTOResult**](../Model/TransferWechatQueryQueryWechatTransferRespDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **transfer_group_account_query_v1**
TransferGroupAccountQueryV1Response transfer_group_account_query_v1(TransferGroupAccountQueryV1Request request)

集团账户资金划拨查询



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\TransferGroupAccountQueryV1Request();
$request->setParentMerchantNo("100400612345");
$request->setMerchantNo("merchantNo_example");
$request->setOrderNo("orderNo_example");
$request->setRequestNo("TRANS2133213124");

try {
    $response = $api_client->transfer_group_account_query_v1($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->transfer_group_account_query_v1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**| &lt;p&gt;业务发起方商编&lt;br /&gt;发起方商户编号&lt;br /&gt;（标准商户收付款方案中此参数与商编一致，平台商户收付款方案中此参数为平台商商户编号）&lt;/p&gt; |
 **merchantNo** | **string**| &lt;div data-page-id&#x3D;\&quot;Tq8rdopvvoUCakxJJCjcmQBcnah\&quot; data-docx-has-block-data&#x3D;\&quot;false\&quot;&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-FMREd4hYFoBSkixZwqjcL6tFnpe\&quot;&gt;转入方商编&lt;/div&gt; &lt;/div&gt; |
 **orderNo** | **string**| &lt;p&gt;易宝订单号&lt;br /&gt;易宝支付系统生成的订单号(与商户请求号两者填其一)&lt;/p&gt; | [optional]
 **requestNo** | **string**| &lt;p&gt;商户请求号，由商户自定义生成(与易宝转账订单号两者填其一)&lt;/p&gt; | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\GroupAccountTransferQueryRespDTO**](../Model/GroupAccountTransferQueryRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **transfer_group_account_v1**
TransferGroupAccountV1Response transfer_group_account_v1(TransferGroupAccountV1Request request)

集团账户资金划拨



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\TransferGroupAccountV1Request();
$request->setParentMerchantNo("100400612345");
$request->setRequestNo("商户请求号，由商户自定义生成;示例值：TRANS2133213124");
$request->setFromMerchantNo("易宝支付分配的的商户唯一标识;示例值:100400612345");
$request->setToMerchantNo("易宝支付分配的的商户唯一标识;示例值:100400612346");
$request->setOrderAmount("单位：元（RMB），精确到分;示例值：0.01 元");
$request->setUsage("usage_example");
$request->setFeeChargeSide("当商户承担且计费方式为预付实扣或后收时，不支持转入方承担；当平台商或服务商承担时无需指定此手续费承担方；");
$request->setNotifyUrl("notifyUrl_example");

try {
    $response = $api_client->transfer_group_account_v1($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->transfer_group_account_v1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **requestNo** | **string**|  | [optional]
 **fromMerchantNo** | **string**|  | [optional]
 **toMerchantNo** | **string**|  | [optional]
 **orderAmount** | **string**|  | [optional]
 **usage** | **string**|  | [optional]
 **feeChargeSide** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\GroupAccountTransferRespDTO**](../Model/GroupAccountTransferRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **union_account_recharge_payer_add**
UnionAccountRechargePayerAddResponse union_account_recharge_payer_add(UnionAccountRechargePayerAddRequest request)

添加付款方

添加付款方

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\UnionAccountRechargePayerAddRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setIdentityType("identityType_example");
$request->setName("name_example");
$request->setCertificateType("certificateType_example");
$request->setCertificateNo("certificateNo_example");
$request->setApplyDataUrl("applyDataUrl_example");

try {
    $response = $api_client->union_account_recharge_payer_add($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->union_account_recharge_payer_add: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **identityType** | **string**|  | [optional]
 **name** | **string**|  | [optional]
 **certificateType** | **string**|  | [optional]
 **certificateNo** | **string**|  | [optional]
 **applyDataUrl** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\YopRechargeManageResponseDTO**](../Model/YopRechargeManageResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **union_account_recharge_payer_delete**
UnionAccountRechargePayerDeleteResponse union_account_recharge_payer_delete(UnionAccountRechargePayerDeleteRequest request)

删除付款方

删除付款方

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\UnionAccountRechargePayerDeleteRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setIdentityType("identityType_example");
$request->setName("name_example");
$request->setCertificateType("certificateType_example");
$request->setCertificateNo("certificateNo_example");

try {
    $response = $api_client->union_account_recharge_payer_delete($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->union_account_recharge_payer_delete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **identityType** | **string**|  | [optional]
 **name** | **string**|  | [optional]
 **certificateType** | **string**|  | [optional]
 **certificateNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\YopRechargeManageResponseDTO**](../Model/YopRechargeManageResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **union_account_recharge_payer_query**
UnionAccountRechargePayerQueryResponse union_account_recharge_payer_query(UnionAccountRechargePayerQueryRequest request)

查询付款方

查询付款方

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\UnionAccountRechargePayerQueryRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setIdentityType("identityType_example");
$request->setName("name_example");
$request->setCertificateType("certificateType_example");
$request->setCertificateNo("certificateNo_example");

try {
    $response = $api_client->union_account_recharge_payer_query($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->union_account_recharge_payer_query: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**| &lt;p&gt;业务发起方商编&lt;/p&gt; |
 **merchantNo** | **string**| &lt;p&gt;商户编号&lt;/p&gt; |
 **identityType** | **string**| &lt;p&gt;身份类型&lt;/p&gt; 可选项如下: BUSINESS:企业账户 PERSON:个人账户 | [optional]
 **name** | **string**| &lt;p&gt;账户名称&lt;/p&gt; | [optional]
 **certificateType** | **string**| &lt;p&gt;证件类型&lt;/p&gt; 可选项如下: ID_CARD:身份证 | [optional]
 **certificateNo** | **string**| &lt;p&gt;证件号&lt;/p&gt; | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\YopRechargeManageQueryResponseDTO**](../Model/YopRechargeManageQueryResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **union_account_trade_account_book_remit**
UnionAccountTradeAccountBookRemitResponse union_account_trade_account_book_remit(UnionAccountTradeAccountBookRemitRequest request)

代付到记账簿绑定卡

代付到记账簿绑定卡

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\UnionAccountTradeAccountBookRemitRequest();
$request->setParentMerchantNo("100400612345");
$request->setMerchantNo("100400612345");
$request->setRequestNo("requestNo_example");
$request->setMerchantAccountBookNo("merchantAccountBookNo_example");
$request->setYpAccountBookNo("ypAccountBookNo_example");
$request->setReceiverAccountNo("receiverAccountNo_example");
$request->setOrderAmount(1.01);
$request->setFeeChargeSide("feeChargeSide_example");
$request->setNotifyUrl("notifyUrl_example");
$request->setTerminalType("terminalType_example");
$request->setComments("comments_example");
$request->setRemark("remark_example");
$request->setReceiptComments("receiptComments_example");
$request->setRiskInfo("riskInfo_example");

try {
    $response = $api_client->union_account_trade_account_book_remit($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->union_account_trade_account_book_remit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **requestNo** | **string**|  | [optional]
 **merchantAccountBookNo** | **string**|  | [optional]
 **ypAccountBookNo** | **string**|  | [optional]
 **receiverAccountNo** | **string**|  | [optional]
 **orderAmount** | **float**|  | [optional]
 **feeChargeSide** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **terminalType** | **string**|  | [optional]
 **comments** | **string**|  | [optional]
 **remark** | **string**|  | [optional]
 **receiptComments** | **string**|  | [optional]
 **riskInfo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\RemitAccountBookRespDTO**](../Model/RemitAccountBookRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **withdrawCardBind**
WithdrawCardBindResponse withdrawCardBind(WithdrawCardBindRequest request)

提现卡-添加

为了保证出款成功，各农信社卡或账号16位以下的农业银行卡，建议或尽可能填写支行编码；

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\WithdrawCardBindRequest();
$request->setMerchantNo("100400612345");
$request->setBankCardType("bankCardType_example");
$request->setAccountNo("accountNo_example");
$request->setBankCode("总行编码示例值：当bankCardType为ENTERPRISE_ACCOUNT或时UNIT_SETTLEMENT_CARD时，开户行编码和支行编码不能同时为空； 示例值：ICBC");
$request->setBranchCode("支行编码示例值：当bankCardType为ENTERPRISE_ACCOUNT或时UNIT_SETTLEMENT_CARD时，开户行编码和支行编码不能同时为空； 示例值：102100000048");

try {
    $response = $api_client->withdrawCardBind($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->withdrawCardBind: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**|  | [optional]
 **bankCardType** | **string**|  | [optional]
 **accountNo** | **string**|  | [optional]
 **bankCode** | **string**|  | [optional]
 **branchCode** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\WithdrawCardBindBindCardRespDTOResult**](../Model/WithdrawCardBindBindCardRespDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **withdrawCardModify**
WithdrawCardModifyResponse withdrawCardModify(WithdrawCardModifyRequest request)

提现卡-修改/注销

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\WithdrawCardModifyRequest();
$request->setMerchantNo("merchantNo_example");
$request->setAccountNo("accountNo_example");
$request->setBindId(789);
$request->setBankCardOperateType("bankCardOperateType_example");
$request->setBankCode("ICBC");
$request->setBranchCode("102100000048");

try {
    $response = $api_client->withdrawCardModify($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->withdrawCardModify: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**|  | [optional]
 **accountNo** | **string**|  | [optional]
 **bindId** | **int**|  | [optional]
 **bankCardOperateType** | **string**|  | [optional]
 **bankCode** | **string**|  | [optional]
 **branchCode** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\WithdrawCardModifyModifyBindCardRespDTOResult**](../Model/WithdrawCardModifyModifyBindCardRespDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **withdrawCardQuery**
WithdrawCardQueryResponse withdrawCardQuery(WithdrawCardQueryRequest request)

提现卡查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\WithdrawCardQueryRequest();
$request->setMerchantNo("易宝支付分配的的商户唯一标识  示例值:100400612345");

try {
    $response = $api_client->withdrawCardQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->withdrawCardQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**|  |

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\WithdrawCardQueryBindCardQueryRespDTOResult**](../Model/WithdrawCardQueryBindCardQueryRespDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **withdrawOrder**
WithdrawOrderResponse withdrawOrder(WithdrawOrderRequest request)

提现-下单

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\WithdrawOrderRequest();
$request->setParentMerchantNo("100400612345");
$request->setRequestNo("WITHDRAW20200327103027");
$request->setMerchantNo("100400612345");
$request->setBankCardId("11103");
$request->setBankAccountNo("6212260200019388841");
$request->setReceiveType("REAL_TIME");
$request->setOrderAmount(1.00);
$request->setNotifyUrl("www.baidu.com");
$request->setRemark("XXX平台提现");
$request->setTerminalType("PC");
$request->setFeeDeductType("feeDeductType_example");
$request->setAccountType("accountType_example");

try {
    $response = $api_client->withdrawOrder($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->withdrawOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **requestNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **bankCardId** | **string**|  | [optional]
 **bankAccountNo** | **string**|  | [optional]
 **receiveType** | **string**|  | [optional]
 **orderAmount** | **float**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **remark** | **string**|  | [optional]
 **terminalType** | **string**|  | [optional]
 **feeDeductType** | **string**|  | [optional]
 **accountType** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\WithdrawOrderWithdrawOrderRespDTOResult**](../Model/WithdrawOrderWithdrawOrderRespDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **withdrawQuery**
WithdrawQueryResponse withdrawQuery(WithdrawQueryRequest request)

提现-查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\WithdrawQueryRequest();
$request->setParentMerchantNo("100400612345");
$request->setRequestNo("WITHDRAW20200327103027");
$request->setOrderNo("be54b037a981440a8cfcb0549aaf5344");

try {
    $response = $api_client->withdrawQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->withdrawQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**| 发起方商户编号&lt;br&gt;（标准商户收付款方案中此参数与商编一致，平台商户收付款方案中此参数为平台商商户编号） |
 **requestNo** | **string**| 商户请求号&lt;br&gt;商户请求号，由商户自定义生成(与易宝提现订单号两者填其一) | [optional]
 **orderNo** | **string**| 易宝提现订单号&lt;br&gt;易宝支付系统生成的提现订单号(与商户请求号两者填其一) | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\WithdrawQueryMGWithdrawOrderQueryRespDTOResult**](../Model/WithdrawQueryMGWithdrawOrderQueryRespDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **withdrawSystemQuery**
WithdrawSystemQueryResponse withdrawSystemQuery(WithdrawSystemQueryRequest request)

提现-查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\WithdrawSystemQueryRequest();
$request->setMerchantNo("易宝支付分配的的商户唯一标识;示例值:100400612345");
$request->setRequestNo("WITHDRAW20200327103027");
$request->setOrderNo("be54b037a981440a8cfcb0549aaf5344");

try {
    $response = $api_client->withdrawSystemQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->withdrawSystemQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**|  |
 **requestNo** | **string**| 商户请求号&lt;br&gt;商户请求号，由商户自定义生成(与易宝提现订单号两者填其一) | [optional]
 **orderNo** | **string**| 易宝提现订单号&lt;br&gt;易宝支付系统生成的提现订单号(与商户请求号两者填其一) | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\WithdrawSystemQueryMGWithdrawOrderQueryRespDTOResult**](../Model/WithdrawSystemQueryMGWithdrawOrderQueryRespDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

