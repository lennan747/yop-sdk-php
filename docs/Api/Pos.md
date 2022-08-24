# Yeepay\Yop\Sdk\Pos

All URIs are relative to *http://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getPosInfoDtos**](Pos.md#getPosInfoDtos) | **POST** /rest/v1.0/pos/get-pos-info-dtos | 机具信息查询
[**installPosWithProduct**](Pos.md#installPosWithProduct) | **POST** /rest/v1.0/pos/install-pos-with-product | 代理商绑机接口
[**unSynBindPos**](Pos.md#unSynBindPos) | **POST** /rest/v1.0/pos/un-syn-bind-pos | 代理商解绑接口


# **getPosInfoDtos**
GetPosInfoDtosResponse getPosInfoDtos(GetPosInfoDtosRequest request)

机具信息查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Pos\PosClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Pos\Model\GetPosInfoDtosRequest();
$request->setCustomerNumber("customerNumber_example");
$request->setPosCati("0000010484250011");
$request->setSerialNumber("15706413");
$request->setShopName("shopName_example");

try {
    $response = $api_client->getPosInfoDtos($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling PosClient->getPosInfoDtos: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerNumber** | **string**|  | [optional]
 **posCati** | **string**|  | [optional]
 **serialNumber** | **string**|  | [optional]
 **shopName** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Pos\Model\GetPosInfoDtosPosInfoResponseParamResult**](../Model/GetPosInfoDtosPosInfoResponseParamResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **installPosWithProduct**
InstallPosWithProductResponse installPosWithProduct(InstallPosWithProductRequest request)

代理商绑机接口

代理商绑机接口

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Pos\PosClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Pos\Model\InstallPosWithProductRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Pos\Model\InstallPosWithProductInstallPosWithProductParamParam());

try {
    $response = $api_client->installPosWithProduct($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling PosClient->installPosWithProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Pos\Model\InstallPosWithProductInstallPosWithProductParamParam**](../Model/InstallPosWithProductInstallPosWithProductParamParam.md)|  |

### Return type
**string**
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **unSynBindPos**
UnSynBindPosResponse unSynBindPos(UnSynBindPosRequest request)

代理商解绑接口

代理商解绑接口

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Pos\PosClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Pos\Model\UnSynBindPosRequest();
$request->setCustomerNumber("customerNumber_example");
$request->setPoscati("0000010484250011");

try {
    $response = $api_client->unSynBindPos($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling PosClient->unSynBindPos: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerNumber** | **string**|  | [optional]
 **poscati** | **string**|  | [optional]

### Return type
**string**
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

