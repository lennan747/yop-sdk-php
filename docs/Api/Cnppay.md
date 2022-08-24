# Yeepay\Yop\Sdk\Cnppay

All URIs are relative to *http://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**bankLimitQuery**](Cnppay.md#bankLimitQuery) | **GET** /rest/v1.0/cnppay/bank-limit/query | 银行限额查询


# **bankLimitQuery**
BankLimitQueryResponse bankLimitQuery(BankLimitQueryRequest request)

银行限额查询

商户查询银行的限制信息

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Cnppay\CnppayClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Cnppay\Model\BankLimitQueryRequest();
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->bankLimitQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling CnppayClient->bankLimitQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**|  |

### Return type
[**\Yeepay\Yop\Sdk\Service\Cnppay\Model\BankLimitQueryBankLimitResponseDTOResult**](../Model/BankLimitQueryBankLimitResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

