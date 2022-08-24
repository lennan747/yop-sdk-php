# Yeepay\Yop\Sdk\Promtion

All URIs are relative to *http://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**pointCreate**](Promtion.md#pointCreate) | **POST** /rest/v1.0/promtion/point/create | 营销积分账户开立
[**pointOperate**](Promtion.md#pointOperate) | **POST** /rest/v1.0/promtion/point/operate | 营销账户积分变更
[**pointQuery**](Promtion.md#pointQuery) | **GET** /rest/v1.0/promtion/point/query | 营销账户积分查询
[**subsidyApply**](Promtion.md#subsidyApply) | **POST** /rest/v1.0/promtion/subsidy/apply | 申请营销补贴
[**subsidyBack**](Promtion.md#subsidyBack) | **POST** /rest/v1.0/promtion/subsidy/back | 申请营销补贴退回
[**subsidyBackQuery**](Promtion.md#subsidyBackQuery) | **GET** /rest/v1.0/promtion/subsidy/back/query | 查询营销补贴退回
[**subsidyQuery**](Promtion.md#subsidyQuery) | **GET** /rest/v1.0/promtion/subsidy/query | 查询营销补贴


# **pointCreate**
PointCreateResponse pointCreate(PointCreateRequest request)

营销积分账户开立

营销积分账户开立

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Promtion\PromtionClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Promtion\Model\PointCreateRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setMerchantUserNo("merchantUserNo_example");

try {
    $response = $api_client->pointCreate($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling PromtionClient->pointCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **merchantUserNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Promtion\Model\PointCreateAccountCreateResponseDTOResult**](../Model/PointCreateAccountCreateResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **pointOperate**
PointOperateResponse pointOperate(PointOperateRequest request)

营销账户积分变更

营销账户积分变更

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Promtion\PromtionClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Promtion\Model\PointOperateRequest();
$request->setRequestId("requestId_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setMerchantUserNo("merchantUserNo_example");
$request->setPointAccountNo("pointAccountNo_example");
$request->setPoint(1.2);
$request->setPayDirection("payDirection_example");
$request->setRemark("remark_example");

try {
    $response = $api_client->pointOperate($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling PromtionClient->pointOperate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestId** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **merchantUserNo** | **string**|  | [optional]
 **pointAccountNo** | **string**|  | [optional]
 **point** | **float**|  | [optional]
 **payDirection** | **string**|  | [optional]
 **remark** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Promtion\Model\PointOperatePointAccountOperateResponseDTOResult**](../Model/PointOperatePointAccountOperateResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **pointQuery**
PointQueryResponse pointQuery(PointQueryRequest request)

营销账户积分查询

营销账户积分查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Promtion\PromtionClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Promtion\Model\PointQueryRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setMerchantUserNo("merchantUserNo_example");
$request->setPointAccountNo("pointAccountNo_example");

try {
    $response = $api_client->pointQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling PromtionClient->pointQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**| 业务发起商编 |
 **merchantNo** | **string**| 商户编号 |
 **merchantUserNo** | **string**| 商户用户ID (与账户编号二选一) | [optional]
 **pointAccountNo** | **string**| 易宝积分账户编号(与商户用户ID 二选一) | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Promtion\Model\PointQueryPointAccountQueryResponseDTOResult**](../Model/PointQueryPointAccountQueryResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **subsidyApply**
SubsidyApplyResponse subsidyApply(SubsidyApplyRequest request)

申请营销补贴

商户申请营销补贴

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Promtion\PromtionClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Promtion\Model\SubsidyApplyRequest();
$request->setOrderId("orderId_example");
$request->setUniqueOrderNo("1001201612070000000000000565");
$request->setSubsidyRequestId("subsidyRequestId_example");
$request->setSubsidyAmount("12.34");
$request->setAssumeMerchantNo("assumeMerchantNo_example");
$request->setMemo("memo_example");
$request->setParentMerchantNo("10012426723");
$request->setMerchantNo("10012426723");

try {
    $response = $api_client->subsidyApply($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling PromtionClient->subsidyApply: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderId** | **string**|  | [optional]
 **uniqueOrderNo** | **string**|  | [optional]
 **subsidyRequestId** | **string**|  | [optional]
 **subsidyAmount** | **string**|  | [optional]
 **assumeMerchantNo** | **string**|  | [optional]
 **memo** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Promtion\Model\SubsidyApplyYopSubsidyResDTOResult**](../Model/SubsidyApplyYopSubsidyResDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **subsidyBack**
SubsidyBackResponse subsidyBack(SubsidyBackRequest request)

申请营销补贴退回

商户申请营销补贴退回

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Promtion\PromtionClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Promtion\Model\SubsidyBackRequest();
$request->setOrderId("orderId_example");
$request->setSubsidyRequestId("subsidyRequestId_example");
$request->setSubsidyBackRequestId("subsidyBackRequestId_example");
$request->setSubsidyBackAmount("12.34");
$request->setReturnAccountType("returnAccountType_example");
$request->setMemo("memo_example");
$request->setParentMerchantNo("10012426723");
$request->setMerchantNo("10012426723");

try {
    $response = $api_client->subsidyBack($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling PromtionClient->subsidyBack: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderId** | **string**|  | [optional]
 **subsidyRequestId** | **string**|  | [optional]
 **subsidyBackRequestId** | **string**|  | [optional]
 **subsidyBackAmount** | **string**|  | [optional]
 **returnAccountType** | **string**|  | [optional]
 **memo** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Promtion\Model\SubsidyBackYopSubsidyBackResDTOResult**](../Model/SubsidyBackYopSubsidyBackResDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **subsidyBackQuery**
SubsidyBackQueryResponse subsidyBackQuery(SubsidyBackQueryRequest request)

查询营销补贴退回

商户申请营销补贴退回查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Promtion\PromtionClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Promtion\Model\SubsidyBackQueryRequest();
$request->setSubsidyRequestId("subsidyRequestId_example");
$request->setSubsidyBackRequestId("subsidyBackRequestId_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->subsidyBackQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling PromtionClient->subsidyBackQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subsidyRequestId** | **string**| 商户补贴请求号 |
 **subsidyBackRequestId** | **string**| 商户补贴退回请求号 |
 **parentMerchantNo** | **string**| 发起方商户编号(与交易下单传入保持一致) |
 **merchantNo** | **string**| 收款商户编号 |

### Return type
[**\Yeepay\Yop\Sdk\Service\Promtion\Model\SubsidyBackQueryYopQuerySubsidyBackResDTOResult**](../Model/SubsidyBackQueryYopQuerySubsidyBackResDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **subsidyQuery**
SubsidyQueryResponse subsidyQuery(SubsidyQueryRequest request)

查询营销补贴

商户申请营销补贴查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Promtion\PromtionClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Promtion\Model\SubsidyQueryRequest();
$request->setOrderId("orderId_example");
$request->setSubsidyRequestId("subsidyRequestId_example");
$request->setParentMerchantNo("10012426723");
$request->setMerchantNo("10012426723");

try {
    $response = $api_client->subsidyQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling PromtionClient->subsidyQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderId** | **string**| 商户收款请求号 |
 **subsidyRequestId** | **string**| 商户营销补贴请求号 |
 **parentMerchantNo** | **string**| 发起方商户编号(与交易下单传入保持一致) |
 **merchantNo** | **string**| 收款商户编号 |

### Return type
[**\Yeepay\Yop\Sdk\Service\Promtion\Model\SubsidyQueryYopQuerySubsidyResDTOResult**](../Model/SubsidyQueryYopQuerySubsidyResDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

