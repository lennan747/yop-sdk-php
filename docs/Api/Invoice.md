# Yeepay\Yop\Sdk\Invoice

All URIs are relative to *http://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apply**](Invoice.md#apply) | **POST** /rest/v1.0/invoice/apply | 申请开票
[**feeQuery**](Invoice.md#feeQuery) | **GET** /rest/v1.0/invoice/fee/query | 查询手续费
[**infoModify**](Invoice.md#infoModify) | **POST** /rest/v1.0/invoice/info/modify | 添加/修改发票信息
[**infoQuery**](Invoice.md#infoQuery) | **GET** /rest/v1.0/invoice/info/query | 查询发票信息
[**recordQuery**](Invoice.md#recordQuery) | **GET** /rest/v1.0/invoice/record/query | 查询开票记录


# **apply**
ApplyResponse apply(ApplyRequest request)

申请开票

商户通过此接口可以申请开票

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Invoice\InvoiceClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Invoice\Model\ApplyRequest();
$request->setMerchantNo("10040040287");
$request->setCustomerRequestNo("01e1c1a0509e435091e98fc99f11cb4b");
$request->setParentMerchantNo("10040040286");
$request->setChargingDateStart("2022-08-24 14:37:57");
$request->setChargingDateEnd("2022-08-24 14:37:57");
$request->setNotifyUrl("http://172.19.100.117:8001/yop-boss/accept");

try {
    $response = $api_client->apply($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling InvoiceClient->apply: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**|  | [optional]
 **customerRequestNo** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]
 **chargingDateStart** | **string**|  | [optional]
 **chargingDateEnd** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Invoice\Model\ApplyApplyInvoiceYOPResponseDtoResult**](../Model/ApplyApplyInvoiceYOPResponseDtoResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **feeQuery**
FeeQueryResponse feeQuery(FeeQueryRequest request)

查询手续费

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Invoice\InvoiceClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Invoice\Model\FeeQueryRequest();
$request->setMerchantNo("10080009462");
$request->setParentMerchantNo("10080009456");
$request->setChargingDateStart("2022-08-24 14:37:57");
$request->setChargingDateEnd("2022-08-24 14:37:57");

try {
    $response = $api_client->feeQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling InvoiceClient->feeQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**| 开票商编 |
 **parentMerchantNo** | **string**| 上级商编 |
 **chargingDateStart** | **string**| 收费开始日期 |
 **chargingDateEnd** | **string**| 收费结束日期 |

### Return type
[**\Yeepay\Yop\Sdk\Service\Invoice\Model\FeeQueryGetFeeResponseDtoResult**](../Model/FeeQueryGetFeeResponseDtoResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **infoModify**
InfoModifyResponse infoModify(InfoModifyRequest request)

添加/修改发票信息

商户通过此接口，可以添加或修改发票信息

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Invoice\InvoiceClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Invoice\Model\InfoModifyRequest();
$request->setMerchantNo("10040040287");
$request->setCustomerRequestNo("8d697f55a80141e291d9cac2d444fb22");
$request->setParentMerchantNo("10040040286");
$request->setMode("mode_example");
$request->setInvoiceType("invoiceType_example");
$request->setInvoiceForm("invoiceForm_example");
$request->setLinkman("张三");
$request->setLinkmanPhone("13300976554");
$request->setPostalAddress("北京市通州区滨惠北一街3号院1号楼1层1-8-22");
$request->setPostalCode("100020");
$request->setTaxpayerId("91110000752646912Q");
$request->setInvoicePhone("010-57073962");
$request->setInvoiceAddress("北京市通州区滨惠北一街3号院1号楼1层1-8-22");
$request->setBankName("招商银行北京建国门支行");
$request->setAccountNo("110902081410707");
$request->setEmail("san.zhang@yeepay.com");
$request->setRemark("备注1");
$request->setStandardType("GGXH-001");
$request->setUnit("件");
$request->setQuantity(1);

try {
    $response = $api_client->infoModify($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling InvoiceClient->infoModify: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**|  | [optional]
 **customerRequestNo** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]
 **mode** | **string**|  | [optional]
 **invoiceType** | **string**|  | [optional]
 **invoiceForm** | **string**|  | [optional]
 **linkman** | **string**|  | [optional]
 **linkmanPhone** | **string**|  | [optional]
 **postalAddress** | **string**|  | [optional]
 **postalCode** | **string**|  | [optional]
 **taxpayerId** | **string**|  | [optional]
 **invoicePhone** | **string**|  | [optional]
 **invoiceAddress** | **string**|  | [optional]
 **bankName** | **string**|  | [optional]
 **accountNo** | **string**|  | [optional]
 **email** | **string**|  | [optional]
 **remark** | **string**|  | [optional]
 **standardType** | **string**|  | [optional]
 **unit** | **string**|  | [optional]
 **quantity** | **int**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Invoice\Model\InfoModifyAddOrModifyInvoiceInfoResponseDtoResult**](../Model/InfoModifyAddOrModifyInvoiceInfoResponseDtoResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **infoQuery**
InfoQueryResponse infoQuery(InfoQueryRequest request)

查询发票信息

商户通过接口可以查询发票信息

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Invoice\InvoiceClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Invoice\Model\InfoQueryRequest();
$request->setParentMerchantNo("10040040286");
$request->setMerchantNo("10040040287");

try {
    $response = $api_client->infoQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling InvoiceClient->infoQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**| 上级商编 |
 **merchantNo** | **string**| 开票商编 |

### Return type
[**\Yeepay\Yop\Sdk\Service\Invoice\Model\InfoQueryQueryInvoiceInfoYOPResponseDtoResult**](../Model/InfoQueryQueryInvoiceInfoYOPResponseDtoResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **recordQuery**
RecordQueryResponse recordQuery(RecordQueryRequest request)

查询开票记录

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Invoice\InvoiceClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Invoice\Model\RecordQueryRequest();
$request->setParentMerchantNo("10080009456");
$request->setCustomerRequestNo("337fbe4b345241fbb2854ed7c1bef5a2");
$request->setMerchantNo("10080009462");

try {
    $response = $api_client->recordQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling InvoiceClient->recordQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**| 上级商编 |
 **customerRequestNo** | **string**| 请求号，与开票商编二者至少填写一个 | [optional]
 **merchantNo** | **string**| 开票商编，与请求号二者至少填写一个 | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Invoice\Model\RecordQueryQueryApplyInvoiceResponseDTOResult**](../Model/RecordQueryQueryApplyInvoiceResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

