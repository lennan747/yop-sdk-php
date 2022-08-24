# Yeepay\Yop\Sdk\SupplierRemit

All URIs are relative to *http://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**billDownload**](SupplierRemit.md#billDownload) | **GET** /yos/v1.0/supplier-remit/bill/download | 付款对账文件获取接口


# **billDownload**
YosDownloadResponse billDownload(BillDownloadRequest request)

付款对账文件获取接口

支持商户进行对账文件下载。 受理失败，返回响应错误码；受理成功，返回文件

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\SupplierRemit\SupplierRemitClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\SupplierRemit\Model\BillDownloadRequest();
$request->setRemitDate("remitDate_example");

try {
    $response = $api_client->billDownload($request);
    $response->save('targetFilePath');
}catch (\Exception $e) {
    echo 'Exception when calling SupplierRemitClient->billDownload: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **remitDate** | **string**| 付款日期 |

### Return type
[**Resource**](../Model/Resource.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/octet-stream

