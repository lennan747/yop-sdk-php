# Yeepay\Yop\Sdk\P2f

All URIs are relative to *http://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**zzdfOrder**](P2f.md#zzdfOrder) | **POST** /rest/v1.0/p2f/zzdf/order | 增值代付订单
[**zzdfQuery**](P2f.md#zzdfQuery) | **GET** /rest/v1.0/p2f/zzdf/query | 增值代付订单查询


# **zzdfOrder**
ZzdfOrderResponse zzdfOrder(ZzdfOrderRequest request)

增值代付订单

充值代付接口

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\P2f\P2fClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\P2f\Model\ZzdfOrderRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setRequestNo("requestNo_example");
$request->setOrderAmount(1.2);
$request->setReceiverAccountNo("receiverAccountNo_example");
$request->setReceiverAccountName("receiverAccountName_example");
$request->setReceiverBankCode("receiverBankCode_example");
$request->setProvince("province_example");
$request->setCity("city_example");
$request->setBranchBankCode("branchBankCode_example");
$request->setBankAccountType("bankAccountType_example");
$request->setComments("comments_example");
$request->setFeeChargeSide("feeChargeSide_example");
$request->setTerminalType("terminalType_example");
$request->setReceiveType("receiveType_example");
$request->setNotifyUrl("notifyUrl_example");
$request->setRemark("remark_example");
$request->setRechargeAcctType("rechargeAcctType_example");
$request->setRechargeRemark("rechargeRemark_example");
$request->setRechargeFeeType("rechargeFeeType_example");
$request->setRechargeBankCode("rechargeBankCode_example");
$request->setRechargeBankCardNo("rechargeBankCardNo_example");

try {
    $response = $api_client->zzdfOrder($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling P2fClient->zzdfOrder: ', $e->getMessage(), PHP_EOL;
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
 **receiverAccountName** | **string**|  | [optional]
 **receiverBankCode** | **string**|  | [optional]
 **province** | **string**|  | [optional]
 **city** | **string**|  | [optional]
 **branchBankCode** | **string**|  | [optional]
 **bankAccountType** | **string**|  | [optional]
 **comments** | **string**|  | [optional]
 **feeChargeSide** | **string**|  | [optional]
 **terminalType** | **string**|  | [optional]
 **receiveType** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **remark** | **string**|  | [optional]
 **rechargeAcctType** | **string**|  | [optional]
 **rechargeRemark** | **string**|  | [optional]
 **rechargeFeeType** | **string**|  | [optional]
 **rechargeBankCode** | **string**|  | [optional]
 **rechargeBankCardNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\P2f\Model\ZzdfOrderRechargeAndPayRspDTOResult**](../Model/ZzdfOrderRechargeAndPayRspDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **zzdfQuery**
ZzdfQueryResponse zzdfQuery(ZzdfQueryRequest request)

增值代付订单查询

增值代付订单查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\P2f\P2fClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\P2f\Model\ZzdfQueryRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setRequestNo("requestNo_example");
$request->setOrderNo("orderNo_example");

try {
    $response = $api_client->zzdfQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling P2fClient->zzdfQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  |
 **merchantNo** | **string**|  |
 **requestNo** | **string**|  | [optional]
 **orderNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\P2f\Model\ZzdfQueryQueryRechargeAndPayRspDTOResult**](../Model/ZzdfQueryQueryRechargeAndPayRspDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

