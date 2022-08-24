# Yeepay\Yop\Sdk\Aggpay

All URIs are relative to *http://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**complaintWechatDetails**](Aggpay.md#complaintWechatDetails) | **GET** /rest/v1.0/aggpay/complaint/wechat/details | 查询投诉订单详情
[**complaintWechatFeedback**](Aggpay.md#complaintWechatFeedback) | **POST** /rest/v1.0/aggpay/complaint/wechat/feedback | 回复用户处理内容
[**complaintWechatList**](Aggpay.md#complaintWechatList) | **GET** /rest/v1.0/aggpay/complaint/wechat/list | 查询投诉订单列表
[**complaintWechatNegotiationHistory**](Aggpay.md#complaintWechatNegotiationHistory) | **GET** /rest/v1.0/aggpay/complaint/wechat/negotiation-history | 查询投诉协商历史
[**pay**](Aggpay.md#pay) | **POST** /rest/v1.0/aggpay/pay | 付款码支付
[**payLink**](Aggpay.md#payLink) | **POST** /rest/v1.0/aggpay/pay-link | 生成聚合订单码
[**prePay**](Aggpay.md#prePay) | **POST** /rest/v1.0/aggpay/pre-pay | 聚合支付统一下单
[**queryUserid**](Aggpay.md#queryUserid) | **POST** /rest/v1.0/aggpay/query-userid | 付款码查询用户ID
[**violationWechatChannel**](Aggpay.md#violationWechatChannel) | **GET** /rest/v1.0/aggpay/violation/wechat/channel | 微信违规查询接口(服务商/平台商版)
[**wechatConfigAdd**](Aggpay.md#wechatConfigAdd) | **POST** /rest/v1.0/aggpay/wechat-config/add | 公众号配置接口
[**wechatConfigAddV2**](Aggpay.md#wechatConfigAddV2) | **POST** /rest/v2.0/aggpay/wechat-config/add | 公众号配置接口
[**wechatConfigQuery**](Aggpay.md#wechatConfigQuery) | **GET** /rest/v1.0/aggpay/wechat-config/query | 公众号配置查询
[**wechatConfigQueryV2**](Aggpay.md#wechatConfigQueryV2) | **GET** /rest/v2.0/aggpay/wechat-config/query | 公众号配置查询


# **complaintWechatDetails**
ComplaintWechatDetailsResponse complaintWechatDetails(ComplaintWechatDetailsRequest request)

查询投诉订单详情

商户可通过调用此接口，查询指定投诉单的用户投诉详情，包含投诉内容、投诉关联订单、投诉人联系方式等信息，方便商户处理投诉。

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Aggpay\AggpayClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Aggpay\Model\ComplaintWechatDetailsRequest();
$request->setComplaintNo("complaintNo_example");

try {
    $response = $api_client->complaintWechatDetails($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AggpayClient->complaintWechatDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **complaintNo** | **string**| 投诉单号 |

### Return type
[**\Yeepay\Yop\Sdk\Service\Aggpay\Model\ComplaintWechatDetailsWechatComplaintInfoFlatResponseDTOResult**](../Model/ComplaintWechatDetailsWechatComplaintInfoFlatResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **complaintWechatFeedback**
ComplaintWechatFeedbackResponse complaintWechatFeedback(ComplaintWechatFeedbackRequest request)

回复用户处理内容

商户可通过调用此接口，提交回复内容或反馈投诉单已处理完成。其中上传图片凭证需首先调用【子商户入网资质文件上传】接口，得到图片URL，再将URL填入请求。

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Aggpay\AggpayClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Aggpay\Model\ComplaintWechatFeedbackRequest();
$request->setComplaintNo("200201820200101080076610000");
$request->setFeedbackContent("已与用户沟通解决");
$request->setImageList("[\"https://qpic.cn/xx1\",\"https://qpic.cn/xxx2\"]");
$request->setFeedbackType("GENERAL");

try {
    $response = $api_client->complaintWechatFeedback($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AggpayClient->complaintWechatFeedback: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **complaintNo** | **string**|  | [optional]
 **feedbackContent** | **string**|  | [optional]
 **imageList** | **string**|  | [optional]
 **feedbackType** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Aggpay\Model\ComplaintWechatFeedbackBaseResponseDTOResult**](../Model/ComplaintWechatFeedbackBaseResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **complaintWechatList**
ComplaintWechatListResponse complaintWechatList(ComplaintWechatListRequest request)

查询投诉订单列表

对于SAAS服务商、平台商、标准商户可通过调用此接口，查询指定时间段的所有用户投诉信息；也可通过调用此接口，查询指定子商户编号对应子商户的投诉信息，若不指定则查询所有子商户投诉信息。

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Aggpay\AggpayClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Aggpay\Model\ComplaintWechatListRequest();
$request->setStartTime("2022-05-01");
$request->setEndTime("2022-06-01");
$request->setMerchantOrderNo("20220906154617947762222");
$request->setWechatOrderNo("4200000404201909069117582536");
$request->setMerchantNo("10083213321");
$request->setPage(56);
$request->setLimit(56);

try {
    $response = $api_client->complaintWechatList($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AggpayClient->complaintWechatList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **startTime** | **string**| 投诉发生的开始日期，格式为yyyy-MM-dd。&lt;br&gt;注意，查询日期跨度不超过30天 |
 **endTime** | **string**| 投诉发生的结束日期，格式为yyyy-MM-dd。&lt;br&gt;注意，查询日期跨度不超过30天 |
 **merchantOrderNo** | **string**| 投诉单关联的易宝商户订单号 | [optional]
 **wechatOrderNo** | **string**| 投诉单关联的微信订单号 | [optional]
 **merchantNo** | **string**| 投诉单对应的易宝商户编号 | [optional]
 **page** | **int**| 默认1，最小为1 | [optional]
 **limit** | **int**| 默认20，设置该次请求返回的最大投诉条数，范围【1,100】 | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Aggpay\Model\ComplaintWechatListWechatComplaintListFlatResponseDTOResult**](../Model/ComplaintWechatListWechatComplaintListFlatResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **complaintWechatNegotiationHistory**
ComplaintWechatNegotiationHistoryResponse complaintWechatNegotiationHistory(ComplaintWechatNegotiationHistoryRequest request)

查询投诉协商历史

商户可通过调用此接口，查询指定投诉的用户/商户协商历史，输出查询结果，方便商户根据处理历史来制定后续处理方案。

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Aggpay\AggpayClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Aggpay\Model\ComplaintWechatNegotiationHistoryRequest();
$request->setComplaintNo("200201820200101080076610000");

try {
    $response = $api_client->complaintWechatNegotiationHistory($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AggpayClient->complaintWechatNegotiationHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **complaintNo** | **string**| 投诉单对应的投诉单号 |

### Return type
[**\Yeepay\Yop\Sdk\Service\Aggpay\Model\ComplaintWechatNegotiationHistoryWechatComplaintNegotiationHistoryFlatResponseDTOResult**](../Model/ComplaintWechatNegotiationHistoryWechatComplaintNegotiationHistoryFlatResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **pay**
PayResponse pay(PayRequest request)

付款码支付

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Aggpay\AggpayClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Aggpay\Model\PayRequest();
$request->setParentMerchantNo("10040012345");
$request->setMerchantNo("10040054321");
$request->setOrderId("orderId12345");
$request->setOrderAmount(0.01);
$request->setExpiredTime("2022-08-24 14:37:56");
$request->setNotifyUrl("https://notify.merchant.com/xxx");
$request->setMemo("memo_example");
$request->setGoodsName("旺仔牛奶");
$request->setFundProcessType("REAL_TIME");
$request->setPayWay("MERCHANT_SCAN");
$request->setChannel("WECHAT");
$request->setScene("OFFLINE");
$request->setAuthCode("authCode123");
$request->setAppId("appId12345");
$request->setUserIp("123.123.123.123");
$request->setTerminalId("00000000");
$request->setTerminalSceneInfo("{\"storeId\":\"门店id\",\"storeName\":\"门店名称\",\"operatorId\":\"商户操作员编号\",\"alipayStoreId\":\"支付宝的店铺编号\",\"areaCode\":\"门店行政区划码\",\"address\":\"门店详细地址\"}");
$request->setChannelSpecifiedInfo("{\"hbFqNum\":\"3\",\"hbFqSellerPercent\":\"0\",\"sysServiceProviderId\":\"\"}");
$request->setChannelPromotionInfo("channelPromotionInfo_example");
$request->setIdentityInfo("{\"identityVerifyType\":\"Y\",\"payerIdType\":\"IDENTITY_CARD\",\"payerNumber\":\"234512198006252456\",\"payerName\":\"名字\",\"payerPhone\":\"15798765432\"}");
$request->setLimitCredit("N");
$request->setToken("83BCDF29CFACB4411533080B67864EF8C907CCDC5E10A707C285FEA10CDB8221");
$request->setUniqueOrderNo("1012202101070000001989946571");
$request->setCsUrl("csUrl_example");
$request->setEncryptedPINData("encryptedPINData_example");
$request->setPayerAccountNo("payerAccountNo_example");
$request->setAccountLinkInfo("{accountProvider\":\"BOL\",\"token\":\"xxx\"}");
$request->setBankCode("BOC");
$request->setBusinessInfo("businessInfo_example");

try {
    $response = $api_client->pay($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AggpayClient->pay: ', $e->getMessage(), PHP_EOL;
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
 **payWay** | **string**|  | [optional]
 **channel** | **string**|  | [optional]
 **scene** | **string**|  | [optional]
 **authCode** | **string**|  | [optional]
 **appId** | **string**|  | [optional]
 **userIp** | **string**|  | [optional]
 **terminalId** | **string**|  | [optional]
 **terminalSceneInfo** | **string**|  | [optional]
 **channelSpecifiedInfo** | **string**|  | [optional]
 **channelPromotionInfo** | **string**|  | [optional]
 **identityInfo** | **string**|  | [optional]
 **limitCredit** | **string**|  | [optional]
 **token** | **string**|  | [optional]
 **uniqueOrderNo** | **string**|  | [optional]
 **csUrl** | **string**|  | [optional]
 **encryptedPINData** | **string**|  | [optional]
 **payerAccountNo** | **string**|  | [optional]
 **accountLinkInfo** | **string**|  | [optional]
 **bankCode** | **string**|  | [optional]
 **businessInfo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Aggpay\Model\PayPassiveOrderResponseDTOResult**](../Model/PayPassiveOrderResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **payLink**
PayLinkResponse payLink(PayLinkRequest request)

生成聚合订单码

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Aggpay\AggpayClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Aggpay\Model\PayLinkRequest();
$request->setParentMerchantNo("10040012345");
$request->setMerchantNo("10040054321");
$request->setOrderId("OrderId12345");
$request->setOrderAmount(0.01);
$request->setExpiredTime("2022-08-24 14:37:56");
$request->setNotifyUrl("https://notify.merchant.com/xxx");
$request->setMemo("memo_example");
$request->setGoodsName("旺仔牛奶");
$request->setFundProcessType("REAL_TIME");
$request->setScene("OFFLINE");
$request->setAppId("appId12345");
$request->setChannelSpecifiedInfo("{\"hbFqNum\":\"3\",\"hbFqSellerPercent\":\"0\",\"sysServiceProviderId\":\"\"}");
$request->setChannelPromotionInfo("channelPromotionInfo_example");
$request->setIdentityInfo("{\"identityVerifyType\":\"Y\",\"payerIdType\":\"IDENTITY_CARD\",\"payerNumber\":\"234512198006252456\",\"payerName\":\"名字\",\"payerPhone\":\"15798765432\"}");
$request->setLimitCredit("N");
$request->setCsUrl("csUrl_example");
$request->setYpPromotionInfo("自定义支付立减：[{\"amount\":\"0.01\",\"type\":\"CUSTOM_REDUCTION\"}],自定义补贴商户[{\"type\":\"CUSTOM_ALLOWANCE\"}]");

try {
    $response = $api_client->payLink($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AggpayClient->payLink: ', $e->getMessage(), PHP_EOL;
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
 **scene** | **string**|  | [optional]
 **appId** | **string**|  | [optional]
 **channelSpecifiedInfo** | **string**|  | [optional]
 **channelPromotionInfo** | **string**|  | [optional]
 **identityInfo** | **string**|  | [optional]
 **limitCredit** | **string**|  | [optional]
 **csUrl** | **string**|  | [optional]
 **ypPromotionInfo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Aggpay\Model\PayLinkOrderCodeResponseDTOResult**](../Model/PayLinkOrderCodeResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **prePay**
PrePayResponse prePay(PrePayRequest request)

聚合支付统一下单

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Aggpay\AggpayClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Aggpay\Model\PrePayRequest();
$request->setParentMerchantNo("10040012345");
$request->setMerchantNo("10040054321");
$request->setOrderId("orderId12345");
$request->setOrderAmount(0.01);
$request->setExpiredTime("2022-08-24 14:37:56");
$request->setNotifyUrl("https://notify.merchant.com/xxx");
$request->setRedirectUrl("https://notify.merchant.com/xxx");
$request->setMemo("memo_example");
$request->setGoodsName("旺仔牛奶");
$request->setFundProcessType("REAL_TIME");
$request->setPayWay("USER_SCAN");
$request->setChannel("ALIPAY");
$request->setScene("OFFLINE");
$request->setAppId("appId12345");
$request->setUserId("userId12345");
$request->setUserIp("123.123.123.123");
$request->setChannelSpecifiedInfo("{\"hbFqNum\":\"3\",\"hbFqSellerPercent\":\"0\",\"sysServiceProviderId\":\"\"}");
$request->setChannelPromotionInfo("channelPromotionInfo_example");
$request->setIdentityInfo("{\"identityVerifyType\":\"Y\",\"payerIdType\":\"IDENTITY_CARD\",\"payerNumber\":\"234512198006252456\",\"payerName\":\"名字\",\"payerPhone\":\"15798765432\"}");
$request->setLimitCredit("N");
$request->setToken("83BCDF29CFACB4411533080B67864EF8C907CCDC5E10A707C285FEA10CDB8221");
$request->setUniqueOrderNo("1012202101070000001989946571");
$request->setCsUrl("csUrl_example");
$request->setAccountLinkInfo("{accountProvider\":\"BOL\",\"token\":\"xxx\"}");
$request->setYpPromotionInfo("自定义支付立减：[{\"amount\":\"0.01\",\"type\":\"CUSTOM_REDUCTION\"}],自定义补贴商户[{\"type\":\"CUSTOM_ALLOWANCE\"}]");
$request->setBankCode("BOC");
$request->setBusinessInfo("businessInfo_example");
$request->setUserAuthCode("userAuthCode_example");
$request->setChannelActivityInfo("channelActivityInfo_example");

try {
    $response = $api_client->prePay($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AggpayClient->prePay: ', $e->getMessage(), PHP_EOL;
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
 **redirectUrl** | **string**|  | [optional]
 **memo** | **string**|  | [optional]
 **goodsName** | **string**|  | [optional]
 **fundProcessType** | **string**|  | [optional]
 **payWay** | **string**|  | [optional]
 **channel** | **string**|  | [optional]
 **scene** | **string**|  | [optional]
 **appId** | **string**|  | [optional]
 **userId** | **string**|  | [optional]
 **userIp** | **string**|  | [optional]
 **channelSpecifiedInfo** | **string**|  | [optional]
 **channelPromotionInfo** | **string**|  | [optional]
 **identityInfo** | **string**|  | [optional]
 **limitCredit** | **string**|  | [optional]
 **token** | **string**|  | [optional]
 **uniqueOrderNo** | **string**|  | [optional]
 **csUrl** | **string**|  | [optional]
 **accountLinkInfo** | **string**|  | [optional]
 **ypPromotionInfo** | **string**|  | [optional]
 **bankCode** | **string**|  | [optional]
 **businessInfo** | **string**|  | [optional]
 **userAuthCode** | **string**|  | [optional]
 **channelActivityInfo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Aggpay\Model\PrePayOrderResponseDTOResult**](../Model/PrePayOrderResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **queryUserid**
QueryUseridResponse queryUserid(QueryUseridRequest request)

付款码查询用户ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Aggpay\AggpayClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Aggpay\Model\QueryUseridRequest();
$request->setParentMerchantNo("10040012345");
$request->setMerchantNo("10040054321");
$request->setAppId("appid12345");
$request->setAuthCode("authCode123");
$request->setChannel("WECHAT");

try {
    $response = $api_client->queryUserid($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AggpayClient->queryUserid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **appId** | **string**|  | [optional]
 **authCode** | **string**|  | [optional]
 **channel** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Aggpay\Model\QueryUseridPassiveGetUserIdResponseDTOResult**](../Model/QueryUseridPassiveGetUserIdResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **violationWechatChannel**
ViolationWechatChannelResponse violationWechatChannel(ViolationWechatChannelRequest request)

微信违规查询接口(服务商/平台商版)

查询商户在微信的违规信息(根据渠道号查询)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Aggpay\AggpayClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Aggpay\Model\ViolationWechatChannelRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setBeginTime("2022-08-24 14:37:56");
$request->setEndTime("2022-08-24 14:37:56");

try {
    $response = $api_client->violationWechatChannel($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AggpayClient->violationWechatChannel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**| 服务商/平台商商编 |
 **beginTime** | **string**| 查询的开始时间&lt;br&gt;格式\&quot;yyyy-MM-dd HH:mm:ss\&quot; |
 **endTime** | **string**| 查询的结束时间&lt;br&gt;格式\&quot;yyyy-MM-dd HH:mm:ss\&quot;&lt;br&gt;（开始时间和结束时间间隔不得超过一小时） |

### Return type
[**\Yeepay\Yop\Sdk\Service\Aggpay\Model\ViolationWechatChannelWechatRiskQueryResponseDTOResult**](../Model/ViolationWechatChannelWechatRiskQueryResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **wechatConfigAdd**
WechatConfigAddResponse wechatConfigAdd(WechatConfigAddRequest request)

公众号配置接口

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Aggpay\AggpayClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Aggpay\Model\WechatConfigAddRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Aggpay\Model\WechatConfigAddWechatConfigRequestDTOParam());

try {
    $response = $api_client->wechatConfigAdd($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AggpayClient->wechatConfigAdd: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Aggpay\Model\WechatConfigAddWechatConfigRequestDTOParam**](../Model/WechatConfigAddWechatConfigRequestDTOParam.md)|  |

### Return type
[**\Yeepay\Yop\Sdk\Service\Aggpay\Model\WechatConfigAddWechatConfigResponseDTOResult**](../Model/WechatConfigAddWechatConfigResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **wechatConfigAddV2**
WechatConfigAddV2Response wechatConfigAddV2(WechatConfigAddV2Request request)

公众号配置接口

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Aggpay\AggpayClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Aggpay\Model\WechatConfigAddV2Request();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setTradeAuthDirList("[\"http://www.yeepay.com/\",\"http://www.yeepay.com/\"]");
$request->setAppIdList("[{\"appId\":\"appId\",\"appSecret\":\"appSecret\",\"appIdType\":\"OFFICIAL_ACCOUNT\",\"subscribeAppId\":\"subscribeAppId\"},{\"appId\":\"appId\",\"appSecret\":\"appSecret\",\"appIdType\":\"MINI_PROGRAM\",\"subscribeAppId\":\"subscribeAppId\"}]");

try {
    $response = $api_client->wechatConfigAddV2($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AggpayClient->wechatConfigAddV2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **tradeAuthDirList** | **string**|  | [optional]
 **appIdList** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Aggpay\Model\WechatConfigAddV2WechatConfigFlatResponseDTOResult**](../Model/WechatConfigAddV2WechatConfigFlatResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **wechatConfigQuery**
WechatConfigQueryResponse wechatConfigQuery(WechatConfigQueryRequest request)

公众号配置查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Aggpay\AggpayClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Aggpay\Model\WechatConfigQueryRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setAppIdType("appIdType_example");

try {
    $response = $api_client->wechatConfigQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AggpayClient->wechatConfigQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  |
 **merchantNo** | **string**|  |
 **appIdType** | **string**| OFFICIAL_ACCOUNT:公众号&lt;br&gt;MINI_PROGRAM:小程序 | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Aggpay\Model\WechatConfigQueryWechatConfigResponseDTOResult**](../Model/WechatConfigQueryWechatConfigResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **wechatConfigQueryV2**
WechatConfigQueryV2Response wechatConfigQueryV2(WechatConfigQueryV2Request request)

公众号配置查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Aggpay\AggpayClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Aggpay\Model\WechatConfigQueryV2Request();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setAppIdType("appIdType_example");

try {
    $response = $api_client->wechatConfigQueryV2($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AggpayClient->wechatConfigQueryV2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  |
 **merchantNo** | **string**|  |
 **appIdType** | **string**| appId类型&lt;br&gt;OFFICIAL_ACCOUNT:公众号&lt;br&gt;MINI_PROGRAM:小程序 | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Aggpay\Model\WechatConfigQueryV2WechatConfigFlatResponseDTOResult**](../Model/WechatConfigQueryV2WechatConfigFlatResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

