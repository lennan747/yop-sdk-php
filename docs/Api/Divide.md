# Yeepay\Yop\Sdk\Divide

All URIs are relative to *http://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apply**](Divide.md#apply) | **POST** /rest/v1.0/divide/apply | 申请分账
[**back**](Divide.md#back) | **POST** /rest/v1.0/divide/back | 申请分账资金归还
[**backQuery**](Divide.md#backQuery) | **GET** /rest/v1.0/divide/back/query | 查询分账资金归还结果
[**backReceiptDownload**](Divide.md#backReceiptDownload) | **GET** /yos/v1.0/divide/back/receipt/download | 分账资金归还回单
[**complete**](Divide.md#complete) | **POST** /rest/v1.0/divide/complete | 完结分账
[**divide**](Divide.md#divide) | **POST** /rest/v1.0/divide/divide | 商户申请分账
[**divideQuery**](Divide.md#divideQuery) | **GET** /rest/v1.0/divide/divide-query | 查询分账结果
[**divideback**](Divide.md#divideback) | **POST** /rest/v1.0/divide/divideback | 申请分账资金归还
[**dividebackQuery**](Divide.md#dividebackQuery) | **GET** /rest/v1.0/divide/divideback-query | 查询分账资金归还结果
[**query**](Divide.md#query) | **GET** /rest/v1.0/divide/query | 查询分账结果
[**receiptDownload**](Divide.md#receiptDownload) | **GET** /yos/v1.0/divide/receipt/download | 分账回单


# **apply**
ApplyResponse apply(ApplyRequest request)

申请分账

订单支付成功后再分账时可以调用本接口实现

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Divide\DivideClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Divide\Model\ApplyRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setOrderId("orderId_example");
$request->setUniqueOrderNo("uniqueOrderNo_example");
$request->setDivideRequestId("divideRequestId_example");
$request->setDivideDetail("[{\"amount\":\"100.00\",\"ledgerNo\":\"10000466938\",\"ledgerType\":\"MERCHANT2MERCHANT\",\"divideDetailDesc\":\"供应商结算\"},{\"amount\":\"100.00\",\"ledgerNo\":\"212345678912\",\"ledgerNoFrom\":\"10000466938\",\"ledgerType\":\"MERCHANT2MEMBER\"}]");
$request->setAccountLinkInfo("{\"serviceProvider\":\"YEEPAY\",\"ipAddress\":\"192.168.1.1\",\"divideType\":\"1\",\"token\":\"token\"}");

try {
    $response = $api_client->apply($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling DivideClient->apply: ', $e->getMessage(), PHP_EOL;
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
 **divideRequestId** | **string**|  | [optional]
 **divideDetail** | **string**|  | [optional]
 **accountLinkInfo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Divide\Model\ApplyYopOrderDivideResDTOResult**](../Model/ApplyYopOrderDivideResDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **back**
BackResponse back(BackRequest request)

申请分账资金归还



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Divide\DivideClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Divide\Model\BackRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setDivideBackRequestId("divideBackRequestId_example");
$request->setDivideRequestId("divideRequestId_example");
$request->setOrderId("orderId_example");
$request->setUniqueOrderNo("uniqueOrderNo_example");
$request->setDivideBackDetail("[{\"amount\":\"3.45\",\"divideBackReason\":\"退回原因01\",\"divideDetailNo\":\"1003232421231232\"},{\"amount\":\"2.35\",\"divideBackReason\":\"退回原因02\",\"divideDetailNo\":\"200323242123343\"}]");

try {
    $response = $api_client->back($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling DivideClient->back: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **divideBackRequestId** | **string**|  | [optional]
 **divideRequestId** | **string**|  | [optional]
 **orderId** | **string**|  | [optional]
 **uniqueOrderNo** | **string**|  | [optional]
 **divideBackDetail** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Divide\Model\BackYopDivideBackResDTOResult**](../Model/BackYopDivideBackResDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **backQuery**
BackQueryResponse backQuery(BackQueryRequest request)

查询分账资金归还结果

查询分账资金归还结果

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Divide\DivideClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Divide\Model\BackQueryRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setOrderId("orderId_example");
$request->setUniqueOrderNo("uniqueOrderNo_example");
$request->setDivideBackRequestId("divideBackRequestId_example");

try {
    $response = $api_client->backQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling DivideClient->backQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  |
 **merchantNo** | **string**|  |
 **orderId** | **string**|  |
 **uniqueOrderNo** | **string**|  |
 **divideBackRequestId** | **string**|  |

### Return type
[**\Yeepay\Yop\Sdk\Service\Divide\Model\BackQueryYopQueryDivideBackResDTOResult**](../Model/BackQueryYopQueryDivideBackResDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **backReceiptDownload**
BackReceiptDownloadResponse backReceiptDownload(BackReceiptDownloadRequest request)

分账资金归还回单

分账资金归还回单

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Divide\DivideClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Divide\Model\BackReceiptDownloadRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setDivideBackRequestId("divideBackRequestId_example");
$request->setUniqueOrderNo("uniqueOrderNo_example");
$request->setLedgerNo("ledgerNo_example");

try {
    $response = $api_client->backReceiptDownload($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling DivideClient->backReceiptDownload: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**| *标准商户收付款方案中此参数与收款商户编号一致；*平台商户收付款方案中此参数为平台商商户编号；*服务商解决方案中，①标准商户收款时，该参数为标准商户商编 ②平台商收款或平台商入驻商户收款时，该参数为平台商商编。 |
 **merchantNo** | **string**| 收款商户商编。单笔收款必传，合单收款场景中上传子单域信息subOrderDetail里的merchantNo |
 **divideBackRequestId** | **string**|  |
 **uniqueOrderNo** | **string**| 收款交易对应的易宝收款订单号 |
 **ledgerNo** | **string**| 分账接收方编号(接收分账资金的易宝商编) |

### Return type
[**\Yeepay\Yop\Sdk\Service\Divide\Model\BackReceiptDownloadReceiptResponseDTOResult**](../Model/BackReceiptDownloadReceiptResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **complete**
CompleteResponse complete(CompleteRequest request)

完结分账

完结分账

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Divide\DivideClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Divide\Model\CompleteRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setOrderId("orderId_example");
$request->setUniqueOrderNo("uniqueOrderNo_example");
$request->setDivideRequestId("divideRequestId_example");
$request->setDivideDetailDesc("divideDetailDesc_example");

try {
    $response = $api_client->complete($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling DivideClient->complete: ', $e->getMessage(), PHP_EOL;
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
 **divideRequestId** | **string**|  | [optional]
 **divideDetailDesc** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Divide\Model\CompleteYopOrderEndDivideResDTOResult**](../Model/CompleteYopOrderEndDivideResDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **divide**
DivideResponse divide(DivideRequest request)

商户申请分账

<p>订单支付成功后再分账时可以调用本接口实现</p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Divide\DivideClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Divide\Model\DivideRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setOrderId("orderId_example");
$request->setUniqueOrderNo("uniqueOrderNo_example");
$request->setDivideRequestId("divideRequestId_example");
$request->setDivideDetail("divideDetail_example");

try {
    $response = $api_client->divide($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling DivideClient->divide: ', $e->getMessage(), PHP_EOL;
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
 **divideRequestId** | **string**|  | [optional]
 **divideDetail** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Divide\Model\DivideYopOrderDivideResDTOResult**](../Model/DivideYopOrderDivideResDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **divideQuery**
DivideQueryResponse divideQuery(DivideQueryRequest request)

查询分账结果

<p>调用该接口查询分账结果</p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Divide\DivideClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Divide\Model\DivideQueryRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setDivideRequestId("divideRequestId_example");
$request->setOrderId("orderId_example");
$request->setUniqueOrderNo("uniqueOrderNo_example");

try {
    $response = $api_client->divideQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling DivideClient->divideQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  |
 **merchantNo** | **string**| 收款商户编号 |
 **divideRequestId** | **string**|  |
 **orderId** | **string**| 原支付订单的商户订单号 |
 **uniqueOrderNo** | **string**| 收款交易对应在易宝的单号 |

### Return type
[**\Yeepay\Yop\Sdk\Service\Divide\Model\DivideQueryYopQueryOrderDivideResDTOResult**](../Model/DivideQueryYopQueryOrderDivideResDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **divideback**
DividebackResponse divideback(DividebackRequest request)

申请分账资金归还



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Divide\DivideClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Divide\Model\DividebackRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setDivideBackRequestId("divideBackRequestId_example");
$request->setDivideRequestId("divideRequestId_example");
$request->setOrderId("orderId_example");
$request->setUniqueOrderNo("uniqueOrderNo_example");
$request->setDivideBackDetail("{\"amount\":\"3.45\",\"divideBackReason\":\"退回原因01\",\"divideDetailNo\":\"1003232421231232\"},{\"amount\":\"2.35\",\"divideBackReason\":\"退回原因02\",\"divideDetailNo\":\"200323242123343\"}");

try {
    $response = $api_client->divideback($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling DivideClient->divideback: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **divideBackRequestId** | **string**|  | [optional]
 **divideRequestId** | **string**|  | [optional]
 **orderId** | **string**|  | [optional]
 **uniqueOrderNo** | **string**|  | [optional]
 **divideBackDetail** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Divide\Model\DividebackYopDivideBackResDTOResult**](../Model/DividebackYopDivideBackResDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **dividebackQuery**
DividebackQueryResponse dividebackQuery(DividebackQueryRequest request)

查询分账资金归还结果

查询分账资金归还结果

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Divide\DivideClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Divide\Model\DividebackQueryRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setOrderId("orderId_example");
$request->setUniqueOrderNo("uniqueOrderNo_example");
$request->setDivideBackRequestId("divideBackRequestId_example");

try {
    $response = $api_client->dividebackQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling DivideClient->dividebackQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  |
 **merchantNo** | **string**|  |
 **orderId** | **string**|  |
 **uniqueOrderNo** | **string**|  |
 **divideBackRequestId** | **string**|  |

### Return type
[**\Yeepay\Yop\Sdk\Service\Divide\Model\DividebackQueryYopQueryDivideBackResDTOResult**](../Model/DividebackQueryYopQueryDivideBackResDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **query**
QueryResponse query(QueryRequest request)

查询分账结果

调用该接口查询分账结果

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Divide\DivideClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Divide\Model\QueryRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setDivideRequestId("divideRequestId_example");
$request->setOrderId("orderId_example");
$request->setUniqueOrderNo("uniqueOrderNo_example");

try {
    $response = $api_client->query($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling DivideClient->query: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  |
 **merchantNo** | **string**| 收款商户编号 |
 **divideRequestId** | **string**|  |
 **orderId** | **string**| 原支付订单的商户订单号 |
 **uniqueOrderNo** | **string**| 收款交易对应在易宝的单号 |

### Return type
[**\Yeepay\Yop\Sdk\Service\Divide\Model\QueryYopQueryOrderDivideResDTOResult**](../Model/QueryYopQueryOrderDivideResDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **receiptDownload**
ReceiptDownloadResponse receiptDownload(ReceiptDownloadRequest request)

分账回单

分账回单

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Divide\DivideClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Divide\Model\ReceiptDownloadRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setUniqueOrderNo("uniqueOrderNo_example");
$request->setDivideRequestId("divideRequestId_example");
$request->setLedgerNo("ledgerNo_example");

try {
    $response = $api_client->receiptDownload($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling DivideClient->receiptDownload: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**| 交易发起方商编。与交易下单传入的保持一致 |
 **merchantNo** | **string**|  |
 **uniqueOrderNo** | **string**|  |
 **divideRequestId** | **string**|  |
 **ledgerNo** | **string**| 分账接收方编号(接收分账资金的易宝商编) |

### Return type
[**\Yeepay\Yop\Sdk\Service\Divide\Model\ReceiptDownloadReceiptResponseDTOResult**](../Model/ReceiptDownloadReceiptResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

