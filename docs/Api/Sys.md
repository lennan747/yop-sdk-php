# Yeepay\Yop\Sdk\Sys

All URIs are relative to *http://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**merchantQualUpload**](Sys.md#merchantQualUpload) | **POST** /yos/v1.0/sys/merchant/qual/upload | 子商户入网资质文件上传
[**tradeDivideback**](Sys.md#tradeDivideback) | **POST** /rest/v1.0/sys/trade/divideback | 订单处理器-分账退回
[**tradeOrder**](Sys.md#tradeOrder) | **POST** /rest/v1.0/sys/trade/order | 订单处理器——创建订单
[**tradeOrderquery**](Sys.md#tradeOrderquery) | **POST** /rest/v1.0/sys/trade/orderquery | 订单处理器——查询订单
[**tradeRefund**](Sys.md#tradeRefund) | **POST** /rest/v1.0/sys/trade/refund | 订单处理器——退款请求
[**tradeRefundquery**](Sys.md#tradeRefundquery) | **POST** /rest/v1.0/sys/trade/refundquery | 订单处理器——退款查询


# **merchantQualUpload**
MerchantQualUploadResponse merchantQualUpload(MerchantQualUploadRequest request)

子商户入网资质文件上传

<p>子商户入网资质文件上传，程序实现方式请参考，<a href=\"https://open.yeepay.com/docs/v2/products/opr/others/5e941bd9c73481001a17bd85/index.html\">文件上传程序实现样例</a ></p > <p>银行卡图片、身份证正反面不能超过1M</p > <p class=\"p1\">营业执照图片 不能超过2.5M</p > <p class=\"p1\">格式为 JPG（JPEG），BMP，PNG，GIF，TIFF，PDF</p >

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Sys\SysClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Sys\Model\MerchantQualUploadRequest();
$request->setMerQual(fopen("/path/to/file", "r"));

try {
    $response = $api_client->merchantQualUpload($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling SysClient->merchantQualUpload: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merQual** | **Resource****Resource**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Sys\Model\MerchantQualUploadMerFileUploadRespDtoResult**](../Model/MerchantQualUploadMerFileUploadRespDtoResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

# **tradeDivideback**
TradeDividebackResponse tradeDivideback(TradeDividebackRequest request)

订单处理器-分账退回



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Sys\SysClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Sys\Model\TradeDividebackRequest();
$request->setOrderId("orderId_example");
$request->setUniqueOrderNo("uniqueOrderNo_example");
$request->setDivideRequestId("divideRequestId_example");
$request->setDivideBackRequestId("divideBackRequestId_example");
$request->setDivideBackDetail("{\"amount\":\"3.45\",\"divideBackReason\":\"退回原因01\",\"divideDetailNo\":\"1003232421231232\"},{\"amount\":\"2.35\",\"divideBackReason\":\"退回原因02\",\"divideDetailNo\":\"200323242123343\"}");
$request->setNotifyUrl("notifyUrl_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setHmac("hmac_example");

try {
    $response = $api_client->tradeDivideback($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling SysClient->tradeDivideback: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderId** | **string**|  | [optional]
 **uniqueOrderNo** | **string**|  | [optional]
 **divideRequestId** | **string**|  | [optional]
 **divideBackRequestId** | **string**|  | [optional]
 **divideBackDetail** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **hmac** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Sys\Model\TradeDividebackYopDivideBackResDTOResult**](../Model/TradeDividebackYopDivideBackResDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **tradeOrder**
TradeOrderResponse tradeOrder(TradeOrderRequest request)

订单处理器——创建订单



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Sys\SysClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Sys\Model\TradeOrderRequest();
$request->setParentMerchantNo("10012426723");
$request->setMerchantNo("10012426723");
$request->setOrderId("merchant12345");
$request->setOrderAmount("88.88");
$request->setTimeoutExpress(30);
$request->setTimeoutExpressType("timeoutExpressType_example");
$request->setRequestDate("2017-12-12 13:23:45");
$request->setRedirectUrl("http://www.merc hant.sscom:8080/ uc/payCallback?u 8ChannelID=10");
$request->setNotifyUrl("http://payment.m erchant.com:8080 /uc/payCallback? u8ChannelID=8");
$request->setAssureType("REALTIME");
$request->setAssurePeriod("assurePeriod_example");
$request->setGoodsParamExt("{“goodsName” : “abc 商品名 称” ,” goodsDes c” : ” 商品描 述” }");
$request->setPaymentParamExt("paymentParamExt_example");
$request->setIndustryParamExt("industryParamExt_example");
$request->setRiskParamExt("riskParamExt_example");
$request->setMemo("memo_example");
$request->setFundProcessType("fundProcessType_example");
$request->setHmac("hmac_example");
$request->setDivideDetail("divideDetail_example");
$request->setCsUrl("csUrl_example");
$request->setDivideNotifyUrl("divideNotifyUrl_example");
$request->setTimeoutNotifyUrl("timeoutNotifyUrl_example");
$request->setSiSubsidyMerchantAmout("siSubsidyMerchantAmout_example");
$request->setQueryParamsExt("queryParamsExt_example");

try {
    $response = $api_client->tradeOrder($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling SysClient->tradeOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **orderId** | **string**|  | [optional]
 **orderAmount** | **string**|  | [optional]
 **timeoutExpress** | **int**|  | [optional]
 **timeoutExpressType** | **string**|  | [optional]
 **requestDate** | **string**|  | [optional]
 **redirectUrl** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **assureType** | **string**|  | [optional]
 **assurePeriod** | **string**|  | [optional]
 **goodsParamExt** | **string**|  | [optional]
 **paymentParamExt** | **string**|  | [optional]
 **industryParamExt** | **string**|  | [optional]
 **riskParamExt** | **string**|  | [optional]
 **memo** | **string**|  | [optional]
 **fundProcessType** | **string**|  | [optional]
 **hmac** | **string**|  | [optional]
 **divideDetail** | **string**|  | [optional]
 **csUrl** | **string**|  | [optional]
 **divideNotifyUrl** | **string**|  | [optional]
 **timeoutNotifyUrl** | **string**|  | [optional]
 **siSubsidyMerchantAmout** | **string**|  | [optional]
 **queryParamsExt** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Sys\Model\TradeOrderYopCreateOrderResDTOResult**](../Model/TradeOrderYopCreateOrderResDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **tradeOrderquery**
TradeOrderqueryResponse tradeOrderquery(TradeOrderqueryRequest request)

订单处理器——查询订单



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Sys\SysClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Sys\Model\TradeOrderqueryRequest();
$request->setParentMerchantNo("10012426723");
$request->setMerchantNo("10012426744");
$request->setOrderId("merchant12345");
$request->setUniqueOrderNo("1001201612070000000000000565");
$request->setHmac("hmac_example");

try {
    $response = $api_client->tradeOrderquery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling SysClient->tradeOrderquery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **orderId** | **string**|  | [optional]
 **uniqueOrderNo** | **string**|  | [optional]
 **hmac** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Sys\Model\TradeOrderqueryYopQueryOrderResDTOResult**](../Model/TradeOrderqueryYopQueryOrderResDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **tradeRefund**
TradeRefundResponse tradeRefund(TradeRefundRequest request)

订单处理器——退款请求



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Sys\SysClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Sys\Model\TradeRefundRequest();
$request->setParentMerchantNo("10012426723");
$request->setMerchantNo("10012426723");
$request->setOrderId("merchant12345");
$request->setRefundRequestId("Merchant23345");
$request->setUniqueOrderNo("1001201612070000000000000565");
$request->setRefundAmount("88.88");
$request->setAccountDivided("[{\"ledgerNo\":\"10000466921\",\"amount\":0.01,\"ledgerName\":\"test@yeepay.com”},  {\"ledgerNo\":\"10012426766\",\"amount\":0.01,\"ledgerName\":\"test@yeepay.com\"}]注意：收单方承担的金额也要写有JOSN串里，JSON里的金额总和等于退款金额");
$request->setDescription("用户退货退款");
$request->setMemo("memo_example");
$request->setNotifyUrl("notifyUrl_example");
$request->setHmac("hmac_example");
$request->setMerchantSideMarketingRefundDetails("merchantSideMarketingRefundDetails_example");
$request->setRefundAccountType("FUND_ACCOUNT");

try {
    $response = $api_client->tradeRefund($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling SysClient->tradeRefund: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **orderId** | **string**|  | [optional]
 **refundRequestId** | **string**|  | [optional]
 **uniqueOrderNo** | **string**|  | [optional]
 **refundAmount** | **string**|  | [optional]
 **accountDivided** | **string**|  | [optional]
 **description** | **string**|  | [optional]
 **memo** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **hmac** | **string**|  | [optional]
 **merchantSideMarketingRefundDetails** | **string**|  | [optional]
 **refundAccountType** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Sys\Model\TradeRefundResponseRefundDTOResult**](../Model/TradeRefundResponseRefundDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **tradeRefundquery**
TradeRefundqueryResponse tradeRefundquery(TradeRefundqueryRequest request)

订单处理器——退款查询



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Sys\SysClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Sys\Model\TradeRefundqueryRequest();
$request->setParentMerchantNo("10012426723");
$request->setMerchantNo("10012426723");
$request->setOrderId("merchant12345");
$request->setRefundRequestId("refundRequestId_example");
$request->setUniqueRefundNo("uniqueRefundNo_example");
$request->setHmac("hmac_example");

try {
    $response = $api_client->tradeRefundquery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling SysClient->tradeRefundquery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **orderId** | **string**|  | [optional]
 **refundRequestId** | **string**|  | [optional]
 **uniqueRefundNo** | **string**|  | [optional]
 **hmac** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Sys\Model\TradeRefundqueryQueryRefundResponseDTOResult**](../Model/TradeRefundqueryQueryRefundResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

