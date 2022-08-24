# Yeepay\Yop\Sdk\Frontcashier

All URIs are relative to *http://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**bankTransferPay**](Frontcashier.md#bankTransferPay) | **POST** /rest/v1.0/frontcashier/bank-transfer/pay | 银行转账支付
[**bankTransferQuery**](Frontcashier.md#bankTransferQuery) | **GET** /rest/v1.0/frontcashier/bank-transfer/query | 银行转账查询
[**bindcardConfirm**](Frontcashier.md#bindcardConfirm) | **POST** /rest/v1.0/frontcashier/bindcard/confirm | 绑卡-短验确认
[**bindcardConfirmV2**](Frontcashier.md#bindcardConfirmV2) | **POST** /rest/v2.0/frontcashier/bindcard/confirm | 中台绑卡-短验确认
[**bindcardGetcardbin**](Frontcashier.md#bindcardGetcardbin) | **POST** /rest/v1.0/frontcashier/bindcard/getcardbin | 银行卡卡bin识别
[**bindcardPayerrequest**](Frontcashier.md#bindcardPayerrequest) | **POST** /rest/v1.0/frontcashier/bindcard/payerrequest | 付款方签约
[**bindcardQueryorder**](Frontcashier.md#bindcardQueryorder) | **POST** /rest/v1.0/frontcashier/bindcard/queryorder | 查询签约/绑卡请求
[**bindcardQueryorderinfo**](Frontcashier.md#bindcardQueryorderinfo) | **GET** /rest/v1.0/frontcashier/bindcard/queryorderinfo | 签约/绑卡订单查询
[**bindcardRequest**](Frontcashier.md#bindcardRequest) | **POST** /rest/v1.0/frontcashier/bindcard/request | 绑卡-绑卡请求
[**bindcardRequestV2**](Frontcashier.md#bindcardRequestV2) | **POST** /rest/v2.0/frontcashier/bindcard/request | 中台绑卡-绑卡请求
[**bindpayConfirm**](Frontcashier.md#bindpayConfirm) | **POST** /rest/v1.0/frontcashier/bindpay/confirm | 绑卡支付-确认支付
[**bindpayRequest**](Frontcashier.md#bindpayRequest) | **POST** /rest/v1.0/frontcashier/bindpay/request | 绑卡支付-支付下单
[**bindpaySendsms**](Frontcashier.md#bindpaySendsms) | **POST** /rest/v1.0/frontcashier/bindpay/sendsms | 绑卡支付-请求发短验
[**fastbindcardRequest**](Frontcashier.md#fastbindcardRequest) | **POST** /rest/v1.0/frontcashier/fastbindcard/request | 查询本人银行卡并签约绑卡
[**getcardbin**](Frontcashier.md#getcardbin) | **POST** /rest/v1.0/frontcashier/getcardbin | 银行卡bin识别
[**upopActivescanPay**](Frontcashier.md#upopActivescanPay) | **POST** /rest/v1.0/frontcashier/upop/activescan/pay | 付款方主扫下单
[**upopActivescanQuerypayeeorder**](Frontcashier.md#upopActivescanQuerypayeeorder) | **POST** /rest/v1.0/frontcashier/upop/activescan/querypayeeorder | 收款方订单信息查询
[**upopActivescanQuerypayresult**](Frontcashier.md#upopActivescanQuerypayresult) | **POST** /rest/v1.0/frontcashier/upop/activescan/querypayresult | 付款订单状态查询
[**upopPassivescanValidate**](Frontcashier.md#upopPassivescanValidate) | **POST** /rest/v1.0/frontcashier/upop/passivescan/validate | 付款方验密回调
[**yjzfBindpayrequest**](Frontcashier.md#yjzfBindpayrequest) | **POST** /rest/v1.0/frontcashier/yjzf/bindpayrequest | 一键支付-二次支付下单
[**yjzfFirstpayrequest**](Frontcashier.md#yjzfFirstpayrequest) | **POST** /rest/v1.0/frontcashier/yjzf/firstpayrequest | 一键支付-首次支付下单
[**yjzfPaymentconfirm**](Frontcashier.md#yjzfPaymentconfirm) | **POST** /rest/v1.0/frontcashier/yjzf/paymentconfirm | 一键支付-确认支付
[**yjzfSendsms**](Frontcashier.md#yjzfSendsms) | **POST** /rest/v1.0/frontcashier/yjzf/sendsms | 一键支付-请求发验证码


# **bankTransferPay**
BankTransferPayResponse bankTransferPay(BankTransferPayRequest request)

银行转账支付

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Frontcashier\FrontcashierClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Frontcashier\Model\BankTransferPayRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setOrderId("orderId_example");
$request->setOrderAmount(1.2);
$request->setExpiredTime("2022-08-24 14:37:53");
$request->setNotifyUrl("notifyUrl_example");
$request->setMemo("memo_example");
$request->setGoodsName("goodsName_example");
$request->setFundProcessType("fundProcessType_example");
$request->setCsUrl("csUrl_example");
$request->setCheckType("checkType_example");

try {
    $response = $api_client->bankTransferPay($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling FrontcashierClient->bankTransferPay: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **orderId** | **string**|  | [optional]
 **orderAmount** | **float**|  | [optional]
 **expiredTime** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **memo** | **string**|  | [optional]
 **goodsName** | **string**|  | [optional]
 **fundProcessType** | **string**|  | [optional]
 **csUrl** | **string**|  | [optional]
 **checkType** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Frontcashier\Model\BankTransferPayAPIOfflineTransferResponseDTOResult**](../Model/BankTransferPayAPIOfflineTransferResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **bankTransferQuery**
BankTransferQueryResponse bankTransferQuery(BankTransferQueryRequest request)

银行转账查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Frontcashier\FrontcashierClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Frontcashier\Model\BankTransferQueryRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setOrderId("orderId_example");

try {
    $response = $api_client->bankTransferQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling FrontcashierClient->bankTransferQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  |
 **merchantNo** | **string**|  |
 **orderId** | **string**| 商户系统内部生成的订单号，需要保持在同一个商户下唯一 |

### Return type
[**\Yeepay\Yop\Sdk\Service\Frontcashier\Model\BankTransferQueryAPIOfflineTransferQueryResponseDTOResult**](../Model/BankTransferQueryAPIOfflineTransferQueryResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **bindcardConfirm**
BindcardConfirmResponse bindcardConfirm(BindcardConfirmRequest request)

绑卡-短验确认

<p>该接口提供鉴权绑卡请求短信验证</p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Frontcashier\FrontcashierClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Frontcashier\Model\BindcardConfirmRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setMerchantFlowId("merchantFlowId_example");
$request->setEmpower(true);
$request->setSmsCode("smsCode_example");

try {
    $response = $api_client->bindcardConfirm($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling FrontcashierClient->bindcardConfirm: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **merchantFlowId** | **string**|  | [optional]
 **empower** | **bool**|  | [optional]
 **smsCode** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Frontcashier\Model\BindcardConfirmOpenAuthBindCardConfirmResponseDTOResult**](../Model/BindcardConfirmOpenAuthBindCardConfirmResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **bindcardConfirmV2**
BindcardConfirmV2Response bindcardConfirmV2(BindcardConfirmV2Request request)

中台绑卡-短验确认

<p>该接口提供鉴权绑卡请求短信验证</p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Frontcashier\FrontcashierClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Frontcashier\Model\BindcardConfirmV2Request();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setMerchantFlowId("merchantFlowId_example");
$request->setSmsCode("smsCode_example");

try {
    $response = $api_client->bindcardConfirmV2($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling FrontcashierClient->bindcardConfirmV2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **merchantFlowId** | **string**|  | [optional]
 **smsCode** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Frontcashier\Model\BindcardConfirmV2OpenAuthBindCardConfirmResponseDTOResult**](../Model/BindcardConfirmV2OpenAuthBindCardConfirmResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **bindcardGetcardbin**
BindcardGetcardbinResponse bindcardGetcardbin(BindcardGetcardbinRequest request)

银行卡卡bin识别

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Frontcashier\FrontcashierClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Frontcashier\Model\BindcardGetcardbinRequest();
$request->setParentMerchantNo("10012426723");
$request->setMerchantNo("10012426723");
$request->setBankCardNo("688888888888");
$request->setCardType("cardType_example");

try {
    $response = $api_client->bindcardGetcardbin($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling FrontcashierClient->bindcardGetcardbin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **bankCardNo** | **string**|  | [optional]
 **cardType** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Frontcashier\Model\BindcardGetcardbinOpenQueryCardbinResponseDTOResult**](../Model/BindcardGetcardbinOpenQueryCardbinResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **bindcardPayerrequest**
BindcardPayerrequestResponse bindcardPayerrequest(BindcardPayerrequestRequest request)

付款方签约

付款方签约

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Frontcashier\FrontcashierClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Frontcashier\Model\BindcardPayerrequestRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Frontcashier\Model\BindcardPayerrequestOpenPayerAuthBindCardRequestDTOParam());

try {
    $response = $api_client->bindcardPayerrequest($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling FrontcashierClient->bindcardPayerrequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Frontcashier\Model\BindcardPayerrequestOpenPayerAuthBindCardRequestDTOParam**](../Model/BindcardPayerrequestOpenPayerAuthBindCardRequestDTOParam.md)|  |

### Return type
[**\Yeepay\Yop\Sdk\Service\Frontcashier\Model\BindcardPayerrequestOpenPayerAuthBindCardResponseDTOResult**](../Model/BindcardPayerrequestOpenPayerAuthBindCardResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **bindcardQueryorder**
BindcardQueryorderResponse bindcardQueryorder(BindcardQueryorderRequest request)

查询签约/绑卡请求

查询签约/绑卡请求

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Frontcashier\FrontcashierClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Frontcashier\Model\BindcardQueryorderRequest();
$request->setMerchantNo("merchantNo_example");
$request->setMerchantFlowId("merchantFlowId_example");
$request->setNopOrderId("nopOrderId_example");
$request->setPhone("phone_example");

try {
    $response = $api_client->bindcardQueryorder($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling FrontcashierClient->bindcardQueryorder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**|  | [optional]
 **merchantFlowId** | **string**|  | [optional]
 **nopOrderId** | **string**|  | [optional]
 **phone** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Frontcashier\Model\BindcardQueryorderOpenQueryOrderResponseDTOResult**](../Model/BindcardQueryorderOpenQueryOrderResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **bindcardQueryorderinfo**
BindcardQueryorderinfoResponse bindcardQueryorderinfo(BindcardQueryorderinfoRequest request)

签约/绑卡订单查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Frontcashier\FrontcashierClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Frontcashier\Model\BindcardQueryorderinfoRequest();
$request->setMerchantNo("10012426723");
$request->setMerchantFlowId("order123456789");
$request->setNopOrderId("NOP123456");

try {
    $response = $api_client->bindcardQueryorderinfo($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling FrontcashierClient->bindcardQueryorderinfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**|  |
 **merchantFlowId** | **string**|  |
 **nopOrderId** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Frontcashier\Model\BindcardQueryorderinfoOpenQueryOrderInfoResponseDTOResult**](../Model/BindcardQueryorderinfoOpenQueryOrderInfoResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **bindcardRequest**
BindcardRequestResponse bindcardRequest(BindcardRequestRequest request)

绑卡-绑卡请求

<p>该接口提供绑卡请求,该接口请求成功后需调求短验确认接口完成整个绑卡动作</p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Frontcashier\FrontcashierClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Frontcashier\Model\BindcardRequestRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setMerchantFlowId("merchantFlowId_example");
$request->setUserNo("userNo_example");
$request->setUserType("userType_example");
$request->setBankCardNo("bankCardNo_example");
$request->setUserName("userName_example");
$request->setIdCardNo("idCardNo_example");
$request->setPhone("phone_example");
$request->setCvv2("cvv2_example");
$request->setValidthru("validthru_example");
$request->setRiskParamExt("riskParamExt_example");
$request->setOrderValidate(56);
$request->setAuthType("authType_example");
$request->setEmpower(true);
$request->setCardType("cardType_example");
$request->setIsSMS(true);

try {
    $response = $api_client->bindcardRequest($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling FrontcashierClient->bindcardRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **merchantFlowId** | **string**|  | [optional]
 **userNo** | **string**|  | [optional]
 **userType** | **string**|  | [optional]
 **bankCardNo** | **string**|  | [optional]
 **userName** | **string**|  | [optional]
 **idCardNo** | **string**|  | [optional]
 **phone** | **string**|  | [optional]
 **cvv2** | **string**|  | [optional]
 **validthru** | **string**|  | [optional]
 **riskParamExt** | **string**|  | [optional]
 **orderValidate** | **int**|  | [optional]
 **authType** | **string**|  | [optional]
 **empower** | **bool**|  | [optional]
 **cardType** | **string**|  | [optional]
 **isSMS** | **bool**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Frontcashier\Model\BindcardRequestOpenAuthBindCardResponseDTOResult**](../Model/BindcardRequestOpenAuthBindCardResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **bindcardRequestV2**
BindcardRequestV2Response bindcardRequestV2(BindcardRequestV2Request request)

中台绑卡-绑卡请求

<p>该接口提供绑卡请求,该接口请求成功后需调求短验确认接口完成整个绑卡动作</p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Frontcashier\FrontcashierClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Frontcashier\Model\BindcardRequestV2Request();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setMerchantFlowId("merchantFlowId_example");
$request->setUserNo("userNo_example");
$request->setUserType("userType_example");
$request->setBankCardNo("bankCardNo_example");
$request->setUserName("userName_example");
$request->setIdCardNo("idCardNo_example");
$request->setPhone("phone_example");
$request->setCvv2("cvv2_example");
$request->setValidthru("validthru_example");
$request->setOrderValidate(56);
$request->setAuthType("authType_example");
$request->setCardType("cardType_example");
$request->setIsSMS("isSMS_example");

try {
    $response = $api_client->bindcardRequestV2($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling FrontcashierClient->bindcardRequestV2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **merchantFlowId** | **string**|  | [optional]
 **userNo** | **string**|  | [optional]
 **userType** | **string**|  | [optional]
 **bankCardNo** | **string**|  | [optional]
 **userName** | **string**|  | [optional]
 **idCardNo** | **string**|  | [optional]
 **phone** | **string**|  | [optional]
 **cvv2** | **string**|  | [optional]
 **validthru** | **string**|  | [optional]
 **orderValidate** | **int**|  | [optional]
 **authType** | **string**|  | [optional]
 **cardType** | **string**|  | [optional]
 **isSMS** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Frontcashier\Model\BindcardRequestV2OpenAuthBindCardResponseDTOResult**](../Model/BindcardRequestV2OpenAuthBindCardResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **bindpayConfirm**
BindpayConfirmResponse bindpayConfirm(BindpayConfirmRequest request)

绑卡支付-确认支付

<p>API收银台，绑卡支付，确认支付</p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Frontcashier\FrontcashierClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Frontcashier\Model\BindpayConfirmRequest();
$request->setToken("token_example");
$request->setVersion("version_example");
$request->setVerifyCode("verifyCode_example");
$request->setCardno("cardno_example");
$request->setOwner("owner_example");
$request->setIdno("idno_example");
$request->setPhoneNo("phoneNo_example");
$request->setYpMobile("ypMobile_example");
$request->setAvlidDate("avlidDate_example");
$request->setCvv2("cvv2_example");
$request->setIdCardType("idCardType_example");
$request->setBankPWD("bankPWD_example");

try {
    $response = $api_client->bindpayConfirm($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling FrontcashierClient->bindpayConfirm: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**|  | [optional]
 **version** | **string**|  | [optional]
 **verifyCode** | **string**|  | [optional]
 **cardno** | **string**|  | [optional]
 **owner** | **string**|  | [optional]
 **idno** | **string**|  | [optional]
 **phoneNo** | **string**|  | [optional]
 **ypMobile** | **string**|  | [optional]
 **avlidDate** | **string**|  | [optional]
 **cvv2** | **string**|  | [optional]
 **idCardType** | **string**|  | [optional]
 **bankPWD** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Frontcashier\Model\BindpayConfirmApiBindPayConfirmResponseDTOResult**](../Model/BindpayConfirmApiBindPayConfirmResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **bindpayRequest**
BindpayRequestResponse bindpayRequest(BindpayRequestRequest request)

绑卡支付-支付下单



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Frontcashier\FrontcashierClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Frontcashier\Model\BindpayRequestRequest();
$request->setToken("token_example");
$request->setBindId("bindId_example");
$request->setUserNo("userNo_example");
$request->setUserType("userType_example");
$request->setUserIp("userIp_example");
$request->setVersion("version_example");
$request->setExtParamMap("extParamMap_example");
$request->setPayMerchantNo("payMerchantNo_example");

try {
    $response = $api_client->bindpayRequest($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling FrontcashierClient->bindpayRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**|  | [optional]
 **bindId** | **string**|  | [optional]
 **userNo** | **string**|  | [optional]
 **userType** | **string**|  | [optional]
 **userIp** | **string**|  | [optional]
 **version** | **string**|  | [optional]
 **extParamMap** | **string**|  | [optional]
 **payMerchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Frontcashier\Model\BindpayRequestApiBindPayPaymentResponseDTOResult**](../Model/BindpayRequestApiBindPayPaymentResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **bindpaySendsms**
BindpaySendsmsResponse bindpaySendsms(BindpaySendsmsRequest request)

绑卡支付-请求发短验

<p>API收银台，绑卡支付，请求发送验证码</p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Frontcashier\FrontcashierClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Frontcashier\Model\BindpaySendsmsRequest();
$request->setToken("token_example");
$request->setVersion("version_example");
$request->setCardno("cardno_example");
$request->setOwner("owner_example");
$request->setIdno("idno_example");
$request->setPhoneNo("phoneNo_example");
$request->setYpMobile("ypMobile_example");
$request->setAvlidDate("avlidDate_example");
$request->setCvv2("cvv2_example");
$request->setIdCardType("idCardType_example");
$request->setBankPWD("bankPWD_example");

try {
    $response = $api_client->bindpaySendsms($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling FrontcashierClient->bindpaySendsms: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**|  | [optional]
 **version** | **string**|  | [optional]
 **cardno** | **string**|  | [optional]
 **owner** | **string**|  | [optional]
 **idno** | **string**|  | [optional]
 **phoneNo** | **string**|  | [optional]
 **ypMobile** | **string**|  | [optional]
 **avlidDate** | **string**|  | [optional]
 **cvv2** | **string**|  | [optional]
 **idCardType** | **string**|  | [optional]
 **bankPWD** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Frontcashier\Model\BindpaySendsmsApiBindPaySendSmsResponseDTOResult**](../Model/BindpaySendsmsApiBindPaySendSmsResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **fastbindcardRequest**
FastbindcardRequestResponse fastbindcardRequest(FastbindcardRequestRequest request)

查询本人银行卡并签约绑卡

用于查询用户本人在指定银行开立的全部银行卡（可限定卡类型），并由商户选择一张银行卡在银行侧签约开通快捷支付，并完成易宝侧的绑卡。商户通过该接口获取用于查询银行卡并签约的银行页面地址等用于前端页面跳转相关的参数信息

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Frontcashier\FrontcashierClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Frontcashier\Model\FastbindcardRequestRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setMerchantFlowId("merchantFlowId_example");
$request->setUserNo("userNo_example");
$request->setUserType("userType_example");
$request->setUserName("userName_example");
$request->setIdCardNo("idCardNo_example");
$request->setIdCardType("idCardType_example");
$request->setBankCode("bankCode_example");
$request->setCardType("cardType_example");
$request->setPageReturnUrl("pageReturnUrl_example");
$request->setBindNotifyUrl("bindNotifyUrl_example");
$request->setPhone("phone_example");
$request->setRiskParamExt("riskParamExt_example");
$request->setOrderValidate(56);

try {
    $response = $api_client->fastbindcardRequest($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling FrontcashierClient->fastbindcardRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **merchantFlowId** | **string**|  | [optional]
 **userNo** | **string**|  | [optional]
 **userType** | **string**|  | [optional]
 **userName** | **string**|  | [optional]
 **idCardNo** | **string**|  | [optional]
 **idCardType** | **string**|  | [optional]
 **bankCode** | **string**|  | [optional]
 **cardType** | **string**|  | [optional]
 **pageReturnUrl** | **string**|  | [optional]
 **bindNotifyUrl** | **string**|  | [optional]
 **phone** | **string**|  | [optional]
 **riskParamExt** | **string**|  | [optional]
 **orderValidate** | **int**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Frontcashier\Model\FastbindcardRequestOpenNetsUnionAuthBindCardResponseDTOResult**](../Model/FastbindcardRequestOpenNetsUnionAuthBindCardResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **getcardbin**
GetcardbinResponse getcardbin(GetcardbinRequest request)

银行卡bin识别

银行卡bin识别

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Frontcashier\FrontcashierClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Frontcashier\Model\GetcardbinRequest();
$request->setBankCardNo("bankCardNo_example");

try {
    $response = $api_client->getcardbin($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling FrontcashierClient->getcardbin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bankCardNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Frontcashier\Model\GetcardbinRecognizeCardBinResponseDTOResult**](../Model/GetcardbinRecognizeCardBinResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **upopActivescanPay**
UpopActivescanPayResponse upopActivescanPay(UpopActivescanPayRequest request)

付款方主扫下单

付款方主扫下单

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Frontcashier\FrontcashierClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Frontcashier\Model\UpopActivescanPayRequest();
$request->setMerchantNo("merchantNo_example");
$request->setMerchantFlowId("merchantFlowId_example");
$request->setPaySerialNo("paySerialNo_example");
$request->setCouponSerialNo("couponSerialNo_example");
$request->setTradeAmount(1.2);
$request->setBindId(789);
$request->setUserNo("userNo_example");
$request->setUserType("userType_example");
$request->setCallBackUrl("callBackUrl_example");
$request->setPayComments("payComments_example");
$request->setDeviceID("deviceID_example");
$request->setDeviceType("deviceType_example");
$request->setAccountIDHash("accountIDHash_example");
$request->setSourceIP("sourceIP_example");
$request->setUsrRgstrDt("2022-08-24");
$request->setAccountEmailLife("accountEmailLife_example");
$request->setDeviceLocation("deviceLocation_example");
$request->setFullDeviceNumber("fullDeviceNumber_example");
$request->setCaptureMethod("captureMethod_example");
$request->setDeviceSimNumber("deviceSimNumber_example");
$request->setDeviceName("deviceName_example");

try {
    $response = $api_client->upopActivescanPay($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling FrontcashierClient->upopActivescanPay: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**|  | [optional]
 **merchantFlowId** | **string**|  | [optional]
 **paySerialNo** | **string**|  | [optional]
 **couponSerialNo** | **string**|  | [optional]
 **tradeAmount** | **float**|  | [optional]
 **bindId** | **int**|  | [optional]
 **userNo** | **string**|  | [optional]
 **userType** | **string**|  | [optional]
 **callBackUrl** | **string**|  | [optional]
 **payComments** | **string**|  | [optional]
 **deviceID** | **string**|  | [optional]
 **deviceType** | **string**|  | [optional]
 **accountIDHash** | **string**|  | [optional]
 **sourceIP** | **string**|  | [optional]
 **usrRgstrDt** | **string**|  | [optional]
 **accountEmailLife** | **string**|  | [optional]
 **deviceLocation** | **string**|  | [optional]
 **fullDeviceNumber** | **string**|  | [optional]
 **captureMethod** | **string**|  | [optional]
 **deviceSimNumber** | **string**|  | [optional]
 **deviceName** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Frontcashier\Model\UpopActivescanPayOpenActiveScanPayResponseDTOResult**](../Model/UpopActivescanPayOpenActiveScanPayResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **upopActivescanQuerypayeeorder**
UpopActivescanQuerypayeeorderResponse upopActivescanQuerypayeeorder(UpopActivescanQuerypayeeorderRequest request)

收款方订单信息查询

收款方订单信息查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Frontcashier\FrontcashierClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Frontcashier\Model\UpopActivescanQuerypayeeorderRequest();
$request->setMerchantFlowId("merchantFlowId_example");
$request->setQrCode("qrCode_example");

try {
    $response = $api_client->upopActivescanQuerypayeeorder($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling FrontcashierClient->upopActivescanQuerypayeeorder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantFlowId** | **string**|  | [optional]
 **qrCode** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Frontcashier\Model\UpopActivescanQuerypayeeorderOpenQueryPayeeOrderInfoResponseDTOResult**](../Model/UpopActivescanQuerypayeeorderOpenQueryPayeeOrderInfoResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **upopActivescanQuerypayresult**
UpopActivescanQuerypayresultResponse upopActivescanQuerypayresult(UpopActivescanQuerypayresultRequest request)

付款订单状态查询

付款订单状态查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Frontcashier\FrontcashierClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Frontcashier\Model\UpopActivescanQuerypayresultRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Frontcashier\Model\UpopActivescanQuerypayresultOpenQueryActiveScanPayResultRequestDTOParam());

try {
    $response = $api_client->upopActivescanQuerypayresult($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling FrontcashierClient->upopActivescanQuerypayresult: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Frontcashier\Model\UpopActivescanQuerypayresultOpenQueryActiveScanPayResultRequestDTOParam**](../Model/UpopActivescanQuerypayresultOpenQueryActiveScanPayResultRequestDTOParam.md)|  |

### Return type
[**\Yeepay\Yop\Sdk\Service\Frontcashier\Model\UpopActivescanQuerypayresultOpenQueryActiveScanPayResultResponseDTOResult**](../Model/UpopActivescanQuerypayresultOpenQueryActiveScanPayResultResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **upopPassivescanValidate**
UpopPassivescanValidateResponse upopPassivescanValidate(UpopPassivescanValidateRequest request)

付款方验密回调

付款方验密回调

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Frontcashier\FrontcashierClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Frontcashier\Model\UpopPassivescanValidateRequest();
$request->setMerchantFlowId("merchantFlowId_example");
$request->setPayOrderNo("payOrderNo_example");

try {
    $response = $api_client->upopPassivescanValidate($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling FrontcashierClient->upopPassivescanValidate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantFlowId** | **string**|  | [optional]
 **payOrderNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Frontcashier\Model\UpopPassivescanValidateOpenPassiveValidateResponseDTOResult**](../Model/UpopPassivescanValidateOpenPassiveValidateResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **yjzfBindpayrequest**
YjzfBindpayrequestResponse yjzfBindpayrequest(YjzfBindpayrequestRequest request)

一键支付-二次支付下单

API收银台-一键支付-二次支付下单

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Frontcashier\FrontcashierClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Frontcashier\Model\YjzfBindpayrequestRequest();
$request->setBindId("bindId_example");
$request->setUserNo("userNo_example");
$request->setUserType("userType_example");
$request->setUserIp("userIp_example");
$request->setPaymentExt("paymentExt_example");
$request->setToken("token_example");
$request->setVersion("version_example");

try {
    $response = $api_client->yjzfBindpayrequest($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling FrontcashierClient->yjzfBindpayrequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bindId** | **string**|  | [optional]
 **userNo** | **string**|  | [optional]
 **userType** | **string**|  | [optional]
 **userIp** | **string**|  | [optional]
 **paymentExt** | **string**|  | [optional]
 **token** | **string**|  | [optional]
 **version** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Frontcashier\Model\YjzfBindpayrequestAPIYJZFBindPaymentResponseDTOResult**](../Model/YjzfBindpayrequestAPIYJZFBindPaymentResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **yjzfFirstpayrequest**
YjzfFirstpayrequestResponse yjzfFirstpayrequest(YjzfFirstpayrequestRequest request)

一键支付-首次支付下单

API收银台-一键支付-首次支付下单

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Frontcashier\FrontcashierClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Frontcashier\Model\YjzfFirstpayrequestRequest();
$request->setUserNo("userNo_example");
$request->setUserType("userType_example");
$request->setUserIp("userIp_example");
$request->setCardNo("cardNo_example");
$request->setOwner("owner_example");
$request->setIdNo("idNo_example");
$request->setPhoneNo("phoneNo_example");
$request->setCvv("cvv_example");
$request->setAvlidDate("avlidDate_example");
$request->setPaymentExt("paymentExt_example");
$request->setToken("token_example");
$request->setVersion("version_example");

try {
    $response = $api_client->yjzfFirstpayrequest($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling FrontcashierClient->yjzfFirstpayrequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userNo** | **string**|  | [optional]
 **userType** | **string**|  | [optional]
 **userIp** | **string**|  | [optional]
 **cardNo** | **string**|  | [optional]
 **owner** | **string**|  | [optional]
 **idNo** | **string**|  | [optional]
 **phoneNo** | **string**|  | [optional]
 **cvv** | **string**|  | [optional]
 **avlidDate** | **string**|  | [optional]
 **paymentExt** | **string**|  | [optional]
 **token** | **string**|  | [optional]
 **version** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Frontcashier\Model\YjzfFirstpayrequestAPIYJZFFirstPaymentResponseDTOResult**](../Model/YjzfFirstpayrequestAPIYJZFFirstPaymentResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **yjzfPaymentconfirm**
YjzfPaymentconfirmResponse yjzfPaymentconfirm(YjzfPaymentconfirmRequest request)

一键支付-确认支付

API收银台-一键支付-确认支付

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Frontcashier\FrontcashierClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Frontcashier\Model\YjzfPaymentconfirmRequest();
$request->setRecordId("recordId_example");
$request->setVerifyCode("verifyCode_example");
$request->setOwner("owner_example");
$request->setIdNo("idNo_example");
$request->setPhoneNo("phoneNo_example");
$request->setCvv("cvv_example");
$request->setAvlidDate("avlidDate_example");
$request->setBankPWD("bankPWD_example");
$request->setPaymentExt("paymentExt_example");
$request->setToken("token_example");
$request->setVersion("version_example");

try {
    $response = $api_client->yjzfPaymentconfirm($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling FrontcashierClient->yjzfPaymentconfirm: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **recordId** | **string**|  | [optional]
 **verifyCode** | **string**|  | [optional]
 **owner** | **string**|  | [optional]
 **idNo** | **string**|  | [optional]
 **phoneNo** | **string**|  | [optional]
 **cvv** | **string**|  | [optional]
 **avlidDate** | **string**|  | [optional]
 **bankPWD** | **string**|  | [optional]
 **paymentExt** | **string**|  | [optional]
 **token** | **string**|  | [optional]
 **version** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Frontcashier\Model\YjzfPaymentconfirmAPIYJZFConfirmPayResponseDTOResult**](../Model/YjzfPaymentconfirmAPIYJZFConfirmPayResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **yjzfSendsms**
YjzfSendsmsResponse yjzfSendsms(YjzfSendsmsRequest request)

一键支付-请求发验证码

API收银台-一键支付-请求发验证码

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Frontcashier\FrontcashierClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Frontcashier\Model\YjzfSendsmsRequest();
$request->setRecordId("recordId_example");
$request->setOwner("owner_example");
$request->setIdNo("idNo_example");
$request->setPhoneNo("phoneNo_example");
$request->setCvv("cvv_example");
$request->setAvlidDate("avlidDate_example");
$request->setBankPWD("bankPWD_example");
$request->setPaymentExt("paymentExt_example");
$request->setToken("token_example");
$request->setVersion("version_example");

try {
    $response = $api_client->yjzfSendsms($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling FrontcashierClient->yjzfSendsms: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **recordId** | **string**|  | [optional]
 **owner** | **string**|  | [optional]
 **idNo** | **string**|  | [optional]
 **phoneNo** | **string**|  | [optional]
 **cvv** | **string**|  | [optional]
 **avlidDate** | **string**|  | [optional]
 **bankPWD** | **string**|  | [optional]
 **paymentExt** | **string**|  | [optional]
 **token** | **string**|  | [optional]
 **version** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Frontcashier\Model\YjzfSendsmsAPIBasicResponseDTOResult**](../Model/YjzfSendsmsAPIBasicResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

