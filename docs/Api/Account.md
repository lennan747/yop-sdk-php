# Yeepay\Yop\Sdk\Account

All URIs are relative to *http://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountBookQueryRefund**](Account.md#accountBookQueryRefund) | **GET** /rest/v1.0/account/account-book/query-refund | 记账簿退款查询
[**accountBookRefund**](Account.md#accountBookRefund) | **POST** /rest/v1.0/account/account-book/refund | 记账簿退款
[**accountManageAccountOpen**](Account.md#accountManageAccountOpen) | **POST** /rest/v1.0/account/account-manage/account/open | 开立记账簿
[**accountManageAccountQuery**](Account.md#accountManageAccountQuery) | **GET** /rest/v1.0/account/account-manage/account/query | 查询记账簿
[**accountManageBankAccountOpen**](Account.md#accountManageBankAccountOpen) | **POST** /rest/v1.0/account/account-manage/bank-account/open | 开立银行账户
[**accountManageBankAccountQuery**](Account.md#accountManageBankAccountQuery) | **GET** /rest/v1.0/account/account-manage/bank-account/query | 开立银行账户查询
[**accountinfosQuery**](Account.md#accountinfosQuery) | **GET** /rest/v1.0/account/accountinfos/query | 全部账户余额查询
[**autoWithdrawRuleCancel**](Account.md#autoWithdrawRuleCancel) | **POST** /rest/v1.0/account/auto-withdraw-rule/cancel | 自动提现-规则作废
[**autoWithdrawRuleQuery**](Account.md#autoWithdrawRuleQuery) | **GET** /rest/v1.0/account/auto-withdraw-rule/query | 自动提现-规则查询
[**autoWithdrawRuleSet**](Account.md#autoWithdrawRuleSet) | **POST** /rest/v1.0/account/auto-withdraw-rule/set | 自动提现-规则设置
[**balanceBankAccountList**](Account.md#balanceBankAccountList) | **GET** /rest/v1.0/account/balance/bank-account/list | 账户通-余额查询
[**balanceQuery**](Account.md#balanceQuery) | **GET** /rest/v1.0/account/balance/query | 资金账户余额查询
[**enterpriseAccountBookPayOrder**](Account.md#enterpriseAccountBookPayOrder) | **POST** /rest/v1.0/account/enterprise/account-book-pay/order | 记账薄支付
[**enterpriseAccountPayOrder**](Account.md#enterpriseAccountPayOrder) | **POST** /rest/v1.0/account/enterprise/account-pay/order | 企业账户支付-下单
[**enterpriseAutoPaymentOrder**](Account.md#enterpriseAutoPaymentOrder) | **POST** /rest/v1.0/account/enterprise/auto-payment/order | 企业账户支付-自动付款
[**enterpriseAutoPaymentQuery**](Account.md#enterpriseAutoPaymentQuery) | **GET** /rest/v1.0/account/enterprise/auto-payment/query | 企业账户支付-自动付款订单查询
[**enterpriseTokenPayOrder**](Account.md#enterpriseTokenPayOrder) | **POST** /rest/v1.0/account/enterprise/token-pay/order | 企业账户支付-token支付
[**enterpriseWithholdingOrder**](Account.md#enterpriseWithholdingOrder) | **POST** /rest/v1.0/account/enterprise/withholding/order | 企业账户支付-关系扣款
[**migrateBankOrder**](Account.md#migrateBankOrder) | **POST** /rest/v1.0/account/migrate/bank/order | 余额迁移到银行-申请接口
[**migrateBankQuery**](Account.md#migrateBankQuery) | **GET** /rest/v1.0/account/migrate/bank/query | 余额迁移到银行-查询接口
[**payCancel**](Account.md#payCancel) | **POST** /rest/v1.0/account/pay/cancel | 付款-撤销
[**payOrder**](Account.md#payOrder) | **POST** /rest/v1.0/account/pay/order | 付款-下单
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
[**rechargeQuery**](Account.md#rechargeQuery) | **GET** /rest/v1.0/account/recharge/query | 充值-查询
[**setWithdrawRule**](Account.md#setWithdrawRule) | **POST** /rest/v1.0/account/set-withdraw-rule | 设置提现规则
[**supplierApply**](Account.md#supplierApply) | **POST** /rest/v1.0/account/supplier/apply | 付款到供应商--申请添加供应商
[**supplierPayOrder**](Account.md#supplierPayOrder) | **POST** /rest/v1.0/account/supplier/pay/order | 付款到供应商-下单
[**supplierQuery**](Account.md#supplierQuery) | **GET** /rest/v1.0/account/supplier/query | 付款到供应商--查询已添加的供应商
[**supplierQueryProgress**](Account.md#supplierQueryProgress) | **GET** /rest/v1.0/account/supplier/query-progress | 付款到供应商--查询申请进度
[**transferB2bOrder**](Account.md#transferB2bOrder) | **POST** /rest/v1.0/account/transfer/b2b/order | 转账-下单
[**transferB2bQuery**](Account.md#transferB2bQuery) | **GET** /rest/v1.0/account/transfer/b2b/query | 转账-查询
[**transferSystemQuery**](Account.md#transferSystemQuery) | **GET** /rest/v1.0/account/transfer/system/query | 转账-查询
[**transferWechatOrder**](Account.md#transferWechatOrder) | **POST** /rest/v1.0/account/transfer/wechat/order | 转账到微信零钱-下单
[**transferWechatQuery**](Account.md#transferWechatQuery) | **GET** /rest/v1.0/account/transfer/wechat/query | 转账到微信零钱-查询
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

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\AccountManageAccountOpenAccountBookCreateResponseDtoResult**](../Model/AccountManageAccountOpenAccountBookCreateResponseDtoResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
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

# **accountManageBankAccountOpen**
AccountManageBankAccountOpenResponse accountManageBankAccountOpen(AccountManageBankAccountOpenRequest request)

开立银行账户

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\AccountManageBankAccountOpenRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\AccountManageBankAccountOpenStandardOpenAccountRequestDTOParam());

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
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\AccountManageBankAccountOpenStandardOpenAccountRequestDTOParam**](../Model/AccountManageBankAccountOpenStandardOpenAccountRequestDTOParam.md)|  |

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\AccountManageBankAccountOpenStandardOpenAccountResponseDTOResult**](../Model/AccountManageBankAccountOpenStandardOpenAccountResponseDTOResult.md)
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
 **parentMerchantNo** | **string**| *标准商户收付款方案中此参数与收款商户编号一致；*平台商户收付款方案中此参数为平台商商户编号；*服务商解决方案中，①标准商户收款时，该参数为服务商商编 ②平台商收款或平台商入驻商户收款时，该参数为平台商商编。 |
 **merchantNo** | **string**| 业务主体商编 |

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\AccountManageBankAccountQueryStandardOpenAccountQueryResponseDTOResult**](../Model/AccountManageBankAccountQueryStandardOpenAccountQueryResponseDTOResult.md)
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

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\EnterpriseWithholdingOrderWithholdingPaymentRespDtoResult**](../Model/EnterpriseWithholdingOrderWithholdingPaymentRespDtoResult.md)
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
 **tradeType** | **string**| 可选项如下:&lt;br&gt;TRANSFER:企业账户转账&lt;br&gt;PAY:企业付款&lt;br&gt;RECHARGE:企业账户充值&lt;br&gt;WITHDRAW:企业账户提现&lt;br&gt;ADVANCE:记账薄收款 |
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

提供商户资金进入易宝商户账户的能力，充值方式支持企业网银和个人网银、银行汇款、银行扣款等

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

付款到供应商-下单

付款到供应商-下单

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
$request->setOrderAmount("单位：元（RMB），精确到分;示例值：0.01 元");
$request->setUsage("usage_example");
$request->setFeeChargeSide("当商户承担且计费方式为预付实扣或后收时，不支持转入方承担；当平台商或服务商承担时无需指定此手续费承担方；");
$request->setNotifyUrl("notifyUrl_example");

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
 **orderAmount** | **string**|  | [optional]
 **usage** | **string**|  | [optional]
 **feeChargeSide** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]

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
$request->setBankCode("当bankCardType为ENTERPRISE_ACCOUNT时必填；  示例值：ICBC");
$request->setBranchCode("102100000048");

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

