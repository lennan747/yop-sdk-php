# Yeepay\Yop\Sdk\Reprocess

All URIs are relative to *http://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**migrateBankOrder**](Reprocess.md#migrateBankOrder) | **POST** /rest/v1.0/reprocess/migrate/bank/order | 申请分账余额存管至银行
[**migrateBankQuery**](Reprocess.md#migrateBankQuery) | **GET** /rest/v1.0/reprocess/migrate/bank/query | 查询分账余额存管至银行结果


# **migrateBankOrder**
MigrateBankOrderResponse migrateBankOrder(MigrateBankOrderRequest request)

申请分账余额存管至银行

申请分账余额存管至银行

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Reprocess\ReprocessClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Reprocess\Model\MigrateBankOrderRequest();
$request->setMigrateRequestId("migrateRequestId_example");
$request->setOrderId("orderId_example");
$request->setUniqueOrderNo("uniqueOrderNo_example");
$request->setMigrateNotifyUrl("migrateNotifyUrl_example");
$request->setMigrateAmount("migrateAmount_example");
$request->setAccountLinkInfo("{\"accountProvider\":\"XXX\",\"token\":\"XXX\",\"channel\":\"XXX\",\"goods\":\"XXX\",\"payOrderIp\":\"XXX\"}");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->migrateBankOrder($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling ReprocessClient->migrateBankOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **migrateRequestId** | **string**|  | [optional]
 **orderId** | **string**|  | [optional]
 **uniqueOrderNo** | **string**|  | [optional]
 **migrateNotifyUrl** | **string**|  | [optional]
 **migrateAmount** | **string**|  | [optional]
 **accountLinkInfo** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Reprocess\Model\MigrateBankOrderYopMigrateResDTOResult**](../Model/MigrateBankOrderYopMigrateResDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **migrateBankQuery**
MigrateBankQueryResponse migrateBankQuery(MigrateBankQueryRequest request)

查询分账余额存管至银行结果

查询分账余额存管至银行结果

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Reprocess\ReprocessClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Reprocess\Model\MigrateBankQueryRequest();
$request->setMigrateRequestId("migrateRequestId_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->migrateBankQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling ReprocessClient->migrateBankQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **migrateRequestId** | **string**| 需查询迁移请求的请求号 |
 **parentMerchantNo** | **string**| 收单订单的发起方商编，与申请时一致 |
 **merchantNo** | **string**| 收款订单的商户编号，与申请时一致 |

### Return type
[**\Yeepay\Yop\Sdk\Service\Reprocess\Model\MigrateBankQueryYopQueryMigrateOrderResDTOResult**](../Model/MigrateBankQueryYopQueryMigrateOrderResDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

