# Yeepay\Yop\Sdk\MWallet

All URIs are relative to *http://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountOpen**](MWallet.md#accountOpen) | **POST** /rest/v1.0/m-wallet/account/open | 开立钱包账户
[**accountQuery**](MWallet.md#accountQuery) | **GET** /rest/v1.0/m-wallet/account/query | 查询钱包账户信息
[**accountQueryBalance**](MWallet.md#accountQueryBalance) | **GET** /rest/v1.0/m-wallet/account/query-balance | 会员银行账户余额查询
[**bankAccountActivation**](MWallet.md#bankAccountActivation) | **POST** /rest/v1.0/m-wallet/bank-account/activation | 会员银行账户一分钱激活
[**bankAccountConfirm**](MWallet.md#bankAccountConfirm) | **POST** /rest/v1.0/m-wallet/bank-account/confirm | 会员银行账户开户确认
[**bankAccountOpen**](MWallet.md#bankAccountOpen) | **POST** /rest/v1.0/m-wallet/bank-account/open | 会员银行账户开户接口
[**bankAccountQueryActivation**](MWallet.md#bankAccountQueryActivation) | **GET** /rest/v1.0/m-wallet/bank-account/query-activation | 会员银行账户一分钱激活结果查询
[**bankAccountQueryComplaint**](MWallet.md#bankAccountQueryComplaint) | **GET** /rest/v1.0/m-wallet/bank-account/query-complaint | 会员银行账户客诉订单查询
[**bankAccountQueryOpenResult**](MWallet.md#bankAccountQueryOpenResult) | **GET** /rest/v1.0/m-wallet/bank-account/query-open-result | 会员银行账户开户结果查询
[**bankAccountQueryTrade**](MWallet.md#bankAccountQueryTrade) | **GET** /rest/v1.0/m-wallet/bank-account/query-trade | 会员银行账户交易流水查询
[**bankAccountQueryWithdraw**](MWallet.md#bankAccountQueryWithdraw) | **GET** /rest/v1.0/m-wallet/bank-account/query-withdraw | 会员银行账户提现查询
[**bankAccountSendMsg**](MWallet.md#bankAccountSendMsg) | **POST** /rest/v1.0/m-wallet/bank-account/send-msg | 会员银行账户开户发送短验
[**bankAccountUpdateKeyWords**](MWallet.md#bankAccountUpdateKeyWords) | **POST** /rest/v1.0/m-wallet/bank-account/update-key-words | 会员银行账户关键字维护
[**bankAccountWithdraw**](MWallet.md#bankAccountWithdraw) | **POST** /rest/v1.0/m-wallet/bank-account/withdraw | 会员银行账户提现
[**cardQuery**](MWallet.md#cardQuery) | **POST** /rest/v1.0/m-wallet/card/query | 查询及绑定银行卡
[**memberQuery**](MWallet.md#memberQuery) | **GET** /rest/v1.0/m-wallet/member/query | 钱包账户信息查询
[**passwordManage**](MWallet.md#passwordManage) | **POST** /rest/v1.0/m-wallet/password/manage | 安全设置
[**rechargeInitiate**](MWallet.md#rechargeInitiate) | **POST** /rest/v1.0/m-wallet/recharge/initiate | 发起充值
[**rechargeQuery**](MWallet.md#rechargeQuery) | **GET** /rest/v1.0/m-wallet/recharge/query | 充值查询
[**tradeOrder**](MWallet.md#tradeOrder) | **POST** /rest/v1.0/m-wallet/trade/order | 钱包交易支付
[**transferB2cInitiate**](MWallet.md#transferB2cInitiate) | **POST** /rest/v1.0/m-wallet/transfer/b2c/initiate | 发起B2C转账
[**transferB2cMarket**](MWallet.md#transferB2cMarket) | **POST** /rest/v1.0/m-wallet/transfer/b2c/market | 营销红包转账
[**transferB2cQuery**](MWallet.md#transferB2cQuery) | **GET** /rest/v1.0/m-wallet/transfer/b2c/query | B2C转账查询
[**walletIndexV2**](MWallet.md#walletIndexV2) | **POST** /rest/v2.0/m-wallet/wallet/index | 钱包注册/登录接口
[**withdrawInitiate**](MWallet.md#withdrawInitiate) | **POST** /rest/v1.0/m-wallet/withdraw/initiate | 发起提现
[**withdrawQuery**](MWallet.md#withdrawQuery) | **GET** /rest/v1.0/m-wallet/withdraw/query | 提现查询


# **accountOpen**
AccountOpenResponse accountOpen(AccountOpenRequest request)

开立钱包账户

<p>商户调用此接口，输入用户的真实身份信息，易宝通过公安认证渠道认证通过后，会对应开立钱包账户。</p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MWallet\MWalletClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MWallet\Model\AccountOpenRequest();
$request->setName("张三");
$request->setCertificateType("IDENTITY_CARD");
$request->setCertificateNo("certificateNo_example");
$request->setRequestNo("REQ6437657876");
$request->setMerchantNo("10012345679");
$request->setMerchantUserNo("User10232");
$request->setMobile("15522919123");
$request->setParentMerchantNo("10012345678");

try {
    $response = $api_client->accountOpen($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MWalletClient->accountOpen: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  | [optional]
 **certificateType** | **string**|  | [optional]
 **certificateNo** | **string**|  | [optional]
 **requestNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **merchantUserNo** | **string**|  | [optional]
 **mobile** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\MWallet\Model\AccountOpenWalletRequestRecordResponseDTOResult**](../Model/AccountOpenWalletRequestRecordResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **accountQuery**
AccountQueryResponse accountQuery(AccountQueryRequest request)

查询钱包账户信息

<p>商户在易宝为会员开通钱包账户后，可通过接入该接口查询会员在易宝的钱包账户信息，包括钱包用户个人信息、钱包账户状态、钱包余额、认证情况及账户级别等</p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MWallet\MWalletClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MWallet\Model\AccountQueryRequest();
$request->setMerchantUserNo("User001");
$request->setMerchantNo("10012345679");
$request->setParentMerchantNo("10012345678");

try {
    $response = $api_client->accountQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MWalletClient->accountQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantUserNo** | **string**|  |
 **merchantNo** | **string**| 易宝支付分配的的商户唯一标识 |
 **parentMerchantNo** | **string**| 发起方商户编号（标准商户收付款方案中此参数与商编一致，平台商户收付款方案中此参数为平台商商户编号） |

### Return type
[**\Yeepay\Yop\Sdk\Service\MWallet\Model\AccountQueryWalletMemberResponseDTOResult**](../Model/AccountQueryWalletMemberResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **accountQueryBalance**
AccountQueryBalanceResponse accountQueryBalance(AccountQueryBalanceRequest request)

会员银行账户余额查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MWallet\MWalletClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MWallet\Model\AccountQueryBalanceRequest();
$request->setMerchantMemberNo("merchantMemberNo_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setAccountType("accountType_example");
$request->setElecAccount("elecAccount_example");

try {
    $response = $api_client->accountQueryBalance($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MWalletClient->accountQueryBalance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantMemberNo** | **string**| 商户侧存的会员编号，不同人的会员编号不能相同 |
 **parentMerchantNo** | **string**| 发起方商户编号&lt;br&gt;（标准商户收付款方案中此参数与商编一致，平台商户收付款方案中此参数为平台商商户编号） |
 **merchantNo** | **string**| 商户编号&lt;br&gt;易宝支付分配的的商户唯一标识 |
 **accountType** | **string**| 可选项如下:&lt;br&gt;CNCB:中信银行 | [optional]
 **elecAccount** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\MWallet\Model\AccountQueryBalanceQueryBalanceResponseDTOResult**](../Model/AccountQueryBalanceQueryBalanceResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **bankAccountActivation**
BankAccountActivationResponse bankAccountActivation(BankAccountActivationRequest request)

会员银行账户一分钱激活

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MWallet\MWalletClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MWallet\Model\BankAccountActivationRequest();
$request->setMerchantMemberNo("merchantMemberNo_example");
$request->setAccountNo("accountNo_example");
$request->setRequestNo("requestNo_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->bankAccountActivation($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MWalletClient->bankAccountActivation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantMemberNo** | **string**|  | [optional]
 **accountNo** | **string**|  | [optional]
 **requestNo** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\MWallet\Model\BankAccountActivationBankAccountActivationRespDTOResult**](../Model/BankAccountActivationBankAccountActivationRespDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **bankAccountConfirm**
BankAccountConfirmResponse bankAccountConfirm(BankAccountConfirmRequest request)

会员银行账户开户确认

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MWallet\MWalletClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MWallet\Model\BankAccountConfirmRequest();
$request->setRequestNo("requestNo_example");
$request->setShortMsg("shortMsg_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->bankAccountConfirm($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MWalletClient->bankAccountConfirm: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**|  | [optional]
 **shortMsg** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\MWallet\Model\BankAccountConfirmConfirmBankAccountResponseDTOResult**](../Model/BankAccountConfirmConfirmBankAccountResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **bankAccountOpen**
BankAccountOpenResponse bankAccountOpen(BankAccountOpenRequest request)

会员银行账户开户接口

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MWallet\MWalletClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MWallet\Model\BankAccountOpenRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\MWallet\Model\BankAccountOpenBankAccountRequestDTOParam());

try {
    $response = $api_client->bankAccountOpen($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MWalletClient->bankAccountOpen: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\MWallet\Model\BankAccountOpenBankAccountRequestDTOParam**](../Model/BankAccountOpenBankAccountRequestDTOParam.md)|  |

### Return type
[**\Yeepay\Yop\Sdk\Service\MWallet\Model\BankAccountOpenBankAccountResponseDTOResult**](../Model/BankAccountOpenBankAccountResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **bankAccountQueryActivation**
BankAccountQueryActivationResponse bankAccountQueryActivation(BankAccountQueryActivationRequest request)

会员银行账户一分钱激活结果查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MWallet\MWalletClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MWallet\Model\BankAccountQueryActivationRequest();
$request->setRequestNo("requestNo_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->bankAccountQueryActivation($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MWalletClient->bankAccountQueryActivation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**| 同一分钱激活里的请求号 |
 **parentMerchantNo** | **string**| 发起方商户编号&lt;br&gt;（标准商户收付款方案中此参数与商编一致，平台商户收付款方案中此参数为平台商商户编号） |
 **merchantNo** | **string**| 商户编号&lt;br&gt;易宝支付分配的的商户唯一标识 |

### Return type
[**\Yeepay\Yop\Sdk\Service\MWallet\Model\BankAccountQueryActivationQueryBankAccountActivationRespDTOResult**](../Model/BankAccountQueryActivationQueryBankAccountActivationRespDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **bankAccountQueryComplaint**
BankAccountQueryComplaintResponse bankAccountQueryComplaint(BankAccountQueryComplaintRequest request)

会员银行账户客诉订单查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MWallet\MWalletClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MWallet\Model\BankAccountQueryComplaintRequest();
$request->setMerchantMemberNo("merchantMemberNo_example");
$request->setAccountNo("accountNo_example");
$request->setBankTradeNo("bankTradeNo_example");
$request->setTradeTime("tradeTime_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->bankAccountQueryComplaint($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MWalletClient->bankAccountQueryComplaint: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantMemberNo** | **string**| 商户侧存的会员编号，不同人的会员编号不能相同 |
 **accountNo** | **string**|  |
 **bankTradeNo** | **string**|  |
 **tradeTime** | **string**| 参数格式为：yyyyMMdd |
 **parentMerchantNo** | **string**| 发起方商户编号&lt;br&gt;（标准商户收付款方案中此参数与商编一致，平台商户收付款方案中此参数为平台商商户编号） |
 **merchantNo** | **string**| 商户编号&lt;br&gt;易宝支付分配的的商户唯一标识 |

### Return type
[**\Yeepay\Yop\Sdk\Service\MWallet\Model\BankAccountQueryComplaintQueryComplaintOrderRespDTOResult**](../Model/BankAccountQueryComplaintQueryComplaintOrderRespDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **bankAccountQueryOpenResult**
BankAccountQueryOpenResultResponse bankAccountQueryOpenResult(BankAccountQueryOpenResultRequest request)

会员银行账户开户结果查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MWallet\MWalletClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MWallet\Model\BankAccountQueryOpenResultRequest();
$request->setRequestNo("requestNo_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->bankAccountQueryOpenResult($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MWalletClient->bankAccountQueryOpenResult: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**| 同开户申请的接口请求号一致 |
 **parentMerchantNo** | **string**| 发起方商户编号&lt;br&gt;（标准商户收付款方案中此参数与商编一致，平台商户收付款方案中此参数为平台商商户编号） |
 **merchantNo** | **string**| 商户编号&lt;br&gt;易宝支付分配的的商户唯一标识 |

### Return type
[**\Yeepay\Yop\Sdk\Service\MWallet\Model\BankAccountQueryOpenResultQueryOpenResultResponseDTOResult**](../Model/BankAccountQueryOpenResultQueryOpenResultResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **bankAccountQueryTrade**
BankAccountQueryTradeResponse bankAccountQueryTrade(BankAccountQueryTradeRequest request)

会员银行账户交易流水查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MWallet\MWalletClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MWallet\Model\BankAccountQueryTradeRequest();
$request->setMerchantMemberNo("merchantMemberNo_example");
$request->setAccountNo("accountNo_example");
$request->setBeginDate("beginDate_example");
$request->setEndDate("endDate_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setLoanFlag("loanFlag_example");
$request->setStartNum(56);
$request->setQueryNum(56);
$request->setQueryToken("queryToken_example");
$request->setQueryTime("queryTime_example");

try {
    $response = $api_client->bankAccountQueryTrade($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MWalletClient->bankAccountQueryTrade: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantMemberNo** | **string**| 商户侧存的会员编号，不同人的会员编号不能相同 |
 **accountNo** | **string**|  |
 **beginDate** | **string**| 日期参数格式（yyyyMMdd）&lt;br&gt;起始日期和截止日期间隔不能超过6个月 |
 **endDate** | **string**| 日期参数格式（yyyyMMdd）&lt;br&gt;起始日期和截止日期间隔不能超过6个月 |
 **parentMerchantNo** | **string**| 发起方商户编号&lt;br&gt;（标准商户收付款方案中此参数与商编一致，平台商户收付款方案中此参数为平台商商户编号） |
 **merchantNo** | **string**| 商户编号&lt;br&gt;易宝支付分配的的商户唯一标识 |
 **loanFlag** | **string**| 可选项如下:&lt;br&gt;INCOME:收入&lt;br&gt;PAY:支出 | [optional]
 **startNum** | **int**| 按此值查询其后交易流水，不填的话，默认是1。传1是首次查询，传其他值是非首次查询，非首次查询需要传queryToken和queryTime | [optional]
 **queryNum** | **int**| 不填的话默认是10，最大条数99 | [optional]
 **queryToken** | **string**| 首次查询不用传，非首次查询传上次查询的返回queryToken | [optional]
 **queryTime** | **string**| 首次查询不用传，非首次查询传上次查询的返回值queryTime | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\MWallet\Model\BankAccountQueryTradeQueryBankAccountTradeRespDTOResult**](../Model/BankAccountQueryTradeQueryBankAccountTradeRespDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **bankAccountQueryWithdraw**
BankAccountQueryWithdrawResponse bankAccountQueryWithdraw(BankAccountQueryWithdrawRequest request)

会员银行账户提现查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MWallet\MWalletClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MWallet\Model\BankAccountQueryWithdrawRequest();
$request->setRequestNo("requestNo_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->bankAccountQueryWithdraw($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MWalletClient->bankAccountQueryWithdraw: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**| 同会员银行账户提现接口的请求号 |
 **parentMerchantNo** | **string**| 发起方商户编号&lt;br&gt;（标准商户收付款方案中此参数与商编一致，平台商户收付款方案中此参数为平台商商户编号） |
 **merchantNo** | **string**| 商户编号&lt;br&gt;易宝支付分配的的商户唯一标识 |

### Return type
[**\Yeepay\Yop\Sdk\Service\MWallet\Model\BankAccountQueryWithdrawQueryBankAccountWithDrawRespDTOResult**](../Model/BankAccountQueryWithdrawQueryBankAccountWithDrawRespDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **bankAccountSendMsg**
BankAccountSendMsgResponse bankAccountSendMsg(BankAccountSendMsgRequest request)

会员银行账户开户发送短验

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MWallet\MWalletClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MWallet\Model\BankAccountSendMsgRequest();
$request->setRequestNo("requestNo_example");
$request->setMerchantMemberNo("merchantMemberNo_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->bankAccountSendMsg($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MWalletClient->bankAccountSendMsg: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**|  | [optional]
 **merchantMemberNo** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\MWallet\Model\BankAccountSendMsgBankShortMsgResponseDTOResult**](../Model/BankAccountSendMsgBankShortMsgResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **bankAccountUpdateKeyWords**
BankAccountUpdateKeyWordsResponse bankAccountUpdateKeyWords(BankAccountUpdateKeyWordsRequest request)

会员银行账户关键字维护

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MWallet\MWalletClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MWallet\Model\BankAccountUpdateKeyWordsRequest();
$request->setOperateType("operateType_example");
$request->setKeyWordStrs("keyWordStrs_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->bankAccountUpdateKeyWords($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MWalletClient->bankAccountUpdateKeyWords: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **operateType** | **string**|  | [optional]
 **keyWordStrs** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\MWallet\Model\BankAccountUpdateKeyWordsBankKeyWordsResponseDTOResult**](../Model/BankAccountUpdateKeyWordsBankKeyWordsResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **bankAccountWithdraw**
BankAccountWithdrawResponse bankAccountWithdraw(BankAccountWithdrawRequest request)

会员银行账户提现

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MWallet\MWalletClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MWallet\Model\BankAccountWithdrawRequest();
$request->setMerchantMemberNo("merchantMemberNo_example");
$request->setRequestNo("requestNo_example");
$request->setAccountNo("accountNo_example");
$request->setAccountType("accountType_example");
$request->setOneAccountBankNo("oneAccountBankNo_example");
$request->setBindBankPhone("bindBankPhone_example");
$request->setWithdrawPrice(1.2);
$request->setRemark("remark_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->bankAccountWithdraw($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MWalletClient->bankAccountWithdraw: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantMemberNo** | **string**|  | [optional]
 **requestNo** | **string**|  | [optional]
 **accountNo** | **string**|  | [optional]
 **accountType** | **string**|  | [optional]
 **oneAccountBankNo** | **string**|  | [optional]
 **bindBankPhone** | **string**|  | [optional]
 **withdrawPrice** | **float**|  | [optional]
 **remark** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\MWallet\Model\BankAccountWithdrawBankAccountWithDrawRespDTOResult**](../Model/BankAccountWithdrawBankAccountWithDrawRespDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **cardQuery**
CardQueryResponse cardQuery(CardQueryRequest request)

查询及绑定银行卡

<p>商户调用该接口，易宝返回url可跳转至对应用户的银行卡列表，此页面支持用户查询绑卡列表、绑定新卡和解绑已有银行卡。</p> <p>绑定银行卡：用户在银行卡列表页申请绑定新卡，提交银行卡信息（包括姓银行卡号、手机号）申请绑定银行卡，完成银行卡信息认证；同时系统会根据认证渠道规则升级用户钱包账户。</p> <p>解绑银行卡：用户在银行卡列表页申请解绑银行卡，确认支付密码完成解绑。</p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MWallet\MWalletClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MWallet\Model\CardQueryRequest();
$request->setReturnUrl("http://www.shili.com/");
$request->setRequestNo("REQ394032930");
$request->setMerchantNo("10012345679");
$request->setMerchantUserNo("User53423");
$request->setParentMerchantNo("10012345678");

try {
    $response = $api_client->cardQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MWalletClient->cardQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **returnUrl** | **string**|  | [optional]
 **requestNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **merchantUserNo** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\MWallet\Model\CardQueryRequestURLResponseDTOResult**](../Model/CardQueryRequestURLResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **memberQuery**
MemberQueryResponse memberQuery(MemberQueryRequest request)

钱包账户信息查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MWallet\MWalletClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MWallet\Model\MemberQueryRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setExternalUserId("User8232");
$request->setMemberNo("memberNo_example");

try {
    $response = $api_client->memberQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MWalletClient->memberQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**| 发起方商户编号（标准商户收付款方案中此参数与商编一致，平台商户收付款方案中此参数为平台商商户编号） |
 **merchantNo** | **string**| 易宝支付分配的的商户唯一标识 |
 **externalUserId** | **string**| 用户在商户侧的用户ID&lt;br&gt;与会员号二选一必填 | [optional]
 **memberNo** | **string**| 与商户用户ID二选一必填 | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\MWallet\Model\MemberQueryQueryMemberInfoResponseDTOResult**](../Model/MemberQueryQueryMemberInfoResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **passwordManage**
PasswordManageResponse passwordManage(PasswordManageRequest request)

安全设置

<p>商户调用此接口，跳转到易宝密码管理页面，此页面用于用户修改或重新设置钱包支付密码。</p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MWallet\MWalletClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MWallet\Model\PasswordManageRequest();
$request->setReturnUrl("http://www.shili.com");
$request->setRequestNo("REQ4235232");
$request->setMerchantNo("10012345679");
$request->setMerchantUserNo("User8923");
$request->setParentMerchantNo("10012345678");

try {
    $response = $api_client->passwordManage($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MWalletClient->passwordManage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **returnUrl** | **string**|  | [optional]
 **requestNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **merchantUserNo** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\MWallet\Model\PasswordManageRequestURLResponseDTOResult**](../Model/PasswordManageRequestURLResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **rechargeInitiate**
RechargeInitiateResponse rechargeInitiate(RechargeInitiateRequest request)

发起充值

<p>用户在商户端发起充值，商户调用此接口并打开对应url跳转到易宝充值收银台，用户在收银台选择银行卡或绑定新卡并确认支付密码后完成充值。其中：充值的银行卡必须为借记卡即储蓄卡。</p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MWallet\MWalletClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MWallet\Model\RechargeInitiateRequest();
$request->setAmount("10.5");
$request->setReturnUrl("http://www.shili.com");
$request->setNotifyUrl("http://www.shili.com/notify");
$request->setRequestNo("REQ655498");
$request->setMerchantNo("10012345679");
$request->setMerchantUserNo("User89849");
$request->setParentMerchantNo("10012345678");

try {
    $response = $api_client->rechargeInitiate($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MWalletClient->rechargeInitiate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **amount** | **string**|  | [optional]
 **returnUrl** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **requestNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **merchantUserNo** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\MWallet\Model\RechargeInitiateRequestURLResponseDTOResult**](../Model/RechargeInitiateRequestURLResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **rechargeQuery**
RechargeQueryResponse rechargeQuery(RechargeQueryRequest request)

充值查询

<p>商户通过请求该接口查询用户充值结果</p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MWallet\MWalletClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MWallet\Model\RechargeQueryRequest();
$request->setRequestNo("REQ8390423");
$request->setMerchantNo("10012345679");
$request->setParentMerchantNo("10012345678");

try {
    $response = $api_client->rechargeQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MWalletClient->rechargeQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**|  |
 **merchantNo** | **string**| 易宝支付分配的的商户唯一标识 |
 **parentMerchantNo** | **string**| 发起方商户编号（标准商户收付款方案中此参数与商编一致，平台商户收付款方案中此参数为平台商商户编号） |

### Return type
[**\Yeepay\Yop\Sdk\Service\MWallet\Model\RechargeQueryQueryRechargeResponseDTOResult**](../Model/RechargeQueryQueryRechargeResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **tradeOrder**
TradeOrderResponse tradeOrder(TradeOrderRequest request)

钱包交易支付

用户与商户之间发生商品交易行为，用户可使用钱包账户余额或绑定银行卡方式支付给商户，商户调用此接口完成支付行为。

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MWallet\MWalletClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MWallet\Model\TradeOrderRequest();
$request->setRequestNo("trade1564042424954");
$request->setParentMerchantNo("10040040565");
$request->setMerchantNo("10040020562");
$request->setMerchantUserNo("LC1563447603047");
$request->setPayAmount("0.01");
$request->setNotifyUrl("https://www.testurl.com/callback");
$request->setReturnUrl("https://www.testurl.com/html");
$request->setProductName("电脑");
$request->setRemark("remark_example");
$request->setFundProcessType("DELAY_SETTLE");

try {
    $response = $api_client->tradeOrder($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MWalletClient->tradeOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **merchantUserNo** | **string**|  | [optional]
 **payAmount** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **returnUrl** | **string**|  | [optional]
 **productName** | **string**|  | [optional]
 **remark** | **string**|  | [optional]
 **fundProcessType** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\MWallet\Model\TradeOrderMemberTradOrderRespResult**](../Model/TradeOrderMemberTradOrderRespResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **transferB2cInitiate**
TransferB2cInitiateResponse transferB2cInitiate(TransferB2cInitiateRequest request)

发起B2C转账

商户与用户之间发生的交易行为，商户可向用户的钱包账户转账，商户调用此接口完成转账行为

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MWallet\MWalletClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MWallet\Model\TransferB2cInitiateRequest();
$request->setParentMerchantNo("10012345678");
$request->setFromMerchantNo("10012345676");
$request->setToMerchantNo("10012345679");
$request->setToMerchantUserNo("User90958");
$request->setRequestNo("REQ58290");
$request->setOrderAmount("10.01");
$request->setFeeChargeSide("feeChargeSide_example");
$request->setNotifyUrl("http://www.shili.com/notify");

try {
    $response = $api_client->transferB2cInitiate($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MWalletClient->transferB2cInitiate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **fromMerchantNo** | **string**|  | [optional]
 **toMerchantNo** | **string**|  | [optional]
 **toMerchantUserNo** | **string**|  | [optional]
 **requestNo** | **string**|  | [optional]
 **orderAmount** | **string**|  | [optional]
 **feeChargeSide** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\MWallet\Model\TransferB2cInitiateWalletTransferB2CResponseDTOResult**](../Model/TransferB2cInitiateWalletTransferB2CResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **transferB2cMarket**
TransferB2cMarketResponse transferB2cMarket(TransferB2cMarketRequest request)

营销红包转账

商户与用户之间发生的交易行为，商户可向用户的钱包账户转账，商户调用此接口完成转账行为

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MWallet\MWalletClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MWallet\Model\TransferB2cMarketRequest();
$request->setParentMerchantNo("10012345678");
$request->setFromMerchantNo("10012345676");
$request->setToMerchantNo("10012345679");
$request->setToMerchantUserNo("User90958");
$request->setRequestNo("REQ58290");
$request->setOrderAmount("10.01");
$request->setFeeChargeSide("feeChargeSide_example");
$request->setNotifyUrl("http://www.shili.com/notify");

try {
    $response = $api_client->transferB2cMarket($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MWalletClient->transferB2cMarket: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **fromMerchantNo** | **string**|  | [optional]
 **toMerchantNo** | **string**|  | [optional]
 **toMerchantUserNo** | **string**|  | [optional]
 **requestNo** | **string**|  | [optional]
 **orderAmount** | **string**|  | [optional]
 **feeChargeSide** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\MWallet\Model\TransferB2cMarketWalletTransferB2CResponseDTOResult**](../Model/TransferB2cMarketWalletTransferB2CResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **transferB2cQuery**
TransferB2cQueryResponse transferB2cQuery(TransferB2cQueryRequest request)

B2C转账查询

商户通过请求该接口查询商户向用户转账的订单结果

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MWallet\MWalletClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MWallet\Model\TransferB2cQueryRequest();
$request->setParentMerchantNo("10012345678");
$request->setFromMerchantNo("10012345679");
$request->setRequestNo("REQ12345678");
$request->setBusinessNo("businessNo_example");

try {
    $response = $api_client->transferB2cQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MWalletClient->transferB2cQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**| 发起方商户编号（标准商户收付款方案中此参数与商编一致，平台商户收付款方案中此参数为平台商商户编号） |
 **fromMerchantNo** | **string**| 交易主体商编(转出方商编） |
 **requestNo** | **string**| 商户请求号，与易宝订单号不能同时为空 | [optional]
 **businessNo** | **string**| 转账发起完成后，易宝返回的唯一订单号 | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\MWallet\Model\TransferB2cQueryQueryMGB2CResponseDTOResult**](../Model/TransferB2cQueryQueryMGB2CResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **walletIndexV2**
WalletIndexV2Response walletIndexV2(WalletIndexV2Request request)

钱包注册/登录接口

<p>通过该接口获取钱包注册/登陆页面</p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MWallet\MWalletClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MWallet\Model\WalletIndexV2Request();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setMerchantUserNo("User8232");
$request->setUserMerchantNo("10012345678");
$request->setName("张三");
$request->setCertificateType("certificateType_example");
$request->setCertificateNo("certificateNo_example");
$request->setMobile("15522919123");
$request->setReturnUrl("http://www.shili.com");
$request->setNotifyUrl("http://www.shili.com/notify");
$request->setRequestNo("REQ6437657876");

try {
    $response = $api_client->walletIndexV2($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MWalletClient->walletIndexV2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **merchantUserNo** | **string**|  | [optional]
 **userMerchantNo** | **string**|  | [optional]
 **name** | **string**|  | [optional]
 **certificateType** | **string**|  | [optional]
 **certificateNo** | **string**|  | [optional]
 **mobile** | **string**|  | [optional]
 **returnUrl** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **requestNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\MWallet\Model\WalletIndexV2RequestURLResponseDTOResult**](../Model/WalletIndexV2RequestURLResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **withdrawInitiate**
WithdrawInitiateResponse withdrawInitiate(WithdrawInitiateRequest request)

发起提现

<p>用户在商户端发起提现，商户调用此接口并打开对应url跳转到易宝提现收银台，用户在收银台选择银行卡或绑定新卡并确认支付密码后完成提现。其中：提现的银行卡必须为借记卡即储蓄卡。</p> <p>提现到账类型说明（商户据此引导用户）：<br />1）实时到账，用户提交提现申请成功后，资金于（一小时以内）到账。<br />2）2小时到账，用户提交提现申请成功后，资金将于两小时后到账。<br />3）次日到账，用户提交提现申请成功后，资金将于次日7：00以后到账（例：周六发起周日7：00以后到账）</p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MWallet\MWalletClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MWallet\Model\WithdrawInitiateRequest();
$request->setAmount("10.5");
$request->setWithdrawType("0");
$request->setReturnUrl("http://www.shili.com");
$request->setNotifyUrl("http://www.shili.com/notify");
$request->setRequestNo("REQ85293");
$request->setMerchantNo("10012345679");
$request->setMerchantUserNo("User8232");
$request->setFeeInnerType("解释说明：内扣即用户发起10元，手续费0.1元，则用户提现到账9.9，扣用户余额10元；外扣即用户发起10元，手续费0.1元，用户提现到账10元，扣用户余额10.1元");
$request->setParentMerchantNo("10012345678");

try {
    $response = $api_client->withdrawInitiate($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MWalletClient->withdrawInitiate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **amount** | **string**|  | [optional]
 **withdrawType** | **string**|  | [optional]
 **returnUrl** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **requestNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **merchantUserNo** | **string**|  | [optional]
 **feeInnerType** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\MWallet\Model\WithdrawInitiateRequestURLResponseDTOResult**](../Model/WithdrawInitiateRequestURLResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **withdrawQuery**
WithdrawQueryResponse withdrawQuery(WithdrawQueryRequest request)

提现查询

<p>商户通过请求该接口查询用户提现信息</p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MWallet\MWalletClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MWallet\Model\WithdrawQueryRequest();
$request->setRequestNo("REQ82942");
$request->setMerchantNo("10012345679");
$request->setParentMerchantNo("10012345678");

try {
    $response = $api_client->withdrawQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MWalletClient->withdrawQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**|  |
 **merchantNo** | **string**| 易宝支付分配的的商户唯一标识 |
 **parentMerchantNo** | **string**| 发起方商户编号（标准商户收付款方案中此参数与商编一致，平台商户收付款方案中此参数为平台商商户编号） |

### Return type
[**\Yeepay\Yop\Sdk\Service\MWallet\Model\WithdrawQueryWalletQueryWithdrawResultDTOResult**](../Model/WithdrawQueryWalletQueryWithdrawResultDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

