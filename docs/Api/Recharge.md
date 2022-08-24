# Yeepay\Yop\Sdk\Recharge

All URIs are relative to *http://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**bankAccountQuery**](Recharge.md#bankAccountQuery) | **GET** /rest/v1.0/recharge/bank-account/query | 银行账户查询余额


# **bankAccountQuery**
BankAccountQueryResponse bankAccountQuery(BankAccountQueryRequest request)

银行账户查询余额

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Recharge\RechargeClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Recharge\Model\BankAccountQueryRequest();
$request->setBankCode("bankCode_example");
$request->setAccountNo("accountNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setParentMerchantNo("parentMerchantNo_example");

try {
    $response = $api_client->bankAccountQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling RechargeClient->bankAccountQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bankCode** | **string**| FJHTB |
 **accountNo** | **string**|  |
 **merchantNo** | **string**| 需查询余额的银行账号对应的易宝商编 |
 **parentMerchantNo** | **string**| *标准商户收付款方案中此参数与收款商户编号一致；&lt;br&gt;*平台商户收付款方案中此参数为平台商商户编号；&lt;br&gt;*服务商解决方案中，①标准商户收款时，该参数为服务商商编 ②平台商收款或平台商入驻商户收款时，该参数为平台商商编。 |

### Return type
[**\Yeepay\Yop\Sdk\Service\Recharge\Model\BankAccountQueryQueryBankAccountRespDTOResult**](../Model/BankAccountQueryQueryBankAccountRespDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

