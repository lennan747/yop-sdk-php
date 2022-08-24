# Yeepay\Yop\Sdk\Auth

All URIs are relative to *http://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**faceAuth**](Auth.md#faceAuth) | **POST** /rest/v1.0/auth/face-auth | 人脸核验
[**faceAuthKyc**](Auth.md#faceAuthKyc) | **POST** /rest/v1.0/auth/face-auth-kyc | 身份核验
[**faceAuthKycQuery**](Auth.md#faceAuthKycQuery) | **GET** /rest/v1.0/auth/face-auth-kyc-query | 身份核验结果查询
[**faceAuthResultQuery**](Auth.md#faceAuthResultQuery) | **GET** /rest/v1.0/auth/face-auth-result-query | 人脸核验结果查询
[**multipleAuth**](Auth.md#multipleAuth) | **POST** /rest/v1.0/auth/multiple-auth | 新信息认证
[**ocrIdcard**](Auth.md#ocrIdcard) | **POST** /rest/v1.0/auth/ocr/idcard | ocr识别接口


# **faceAuth**
FaceAuthResponse faceAuth(FaceAuthRequest request)

人脸核验

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Auth\AuthClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Auth\Model\FaceAuthRequest();
$request->setRequestNo("REQ6437657876");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("10012345679");
$request->setName("张三");
$request->setCardNo("cardNo_example");
$request->setCardType("cardType_example");
$request->setReturnUrl("returnUrl_example");
$request->setNotifyUrl("notifyUrl_example");
$request->setExtraData("extraData_example");

try {
    $response = $api_client->faceAuth($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AuthClient->faceAuth: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **name** | **string**|  | [optional]
 **cardNo** | **string**|  | [optional]
 **cardType** | **string**|  | [optional]
 **returnUrl** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **extraData** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Auth\Model\FaceAuthFaceAuthResponseDTOResult**](../Model/FaceAuthFaceAuthResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **faceAuthKyc**
FaceAuthKycResponse faceAuthKyc(FaceAuthKycRequest request)

身份核验

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Auth\AuthClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Auth\Model\FaceAuthKycRequest();
$request->setRequestNo("REQ6437657876");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("10012345679");
$request->setName("张三");
$request->setCardNo("cardNo_example");
$request->setCardType("cardType_example");
$request->setReturnUrl("returnUrl_example");
$request->setNotifyUrl("notifyUrl_example");
$request->setExtraData("extraData_example");

try {
    $response = $api_client->faceAuthKyc($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AuthClient->faceAuthKyc: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **name** | **string**|  | [optional]
 **cardNo** | **string**|  | [optional]
 **cardType** | **string**|  | [optional]
 **returnUrl** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **extraData** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Auth\Model\FaceAuthKycFaceAuthResponseDTOResult**](../Model/FaceAuthKycFaceAuthResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **faceAuthKycQuery**
FaceAuthKycQueryResponse faceAuthKycQuery(FaceAuthKycQueryRequest request)

身份核验结果查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Auth\AuthClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Auth\Model\FaceAuthKycQueryRequest();
$request->setRequestNo("requestNo_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->faceAuthKycQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AuthClient->faceAuthKycQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**|  |
 **parentMerchantNo** | **string**|  |
 **merchantNo** | **string**|  |

### Return type
[**\Yeepay\Yop\Sdk\Service\Auth\Model\FaceAuthKycQueryFaceAuthResultQueryResponseDTOResult**](../Model/FaceAuthKycQueryFaceAuthResultQueryResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **faceAuthResultQuery**
FaceAuthResultQueryResponse faceAuthResultQuery(FaceAuthResultQueryRequest request)

人脸核验结果查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Auth\AuthClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Auth\Model\FaceAuthResultQueryRequest();
$request->setRequestNo("requestNo_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->faceAuthResultQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AuthClient->faceAuthResultQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**|  |
 **parentMerchantNo** | **string**|  |
 **merchantNo** | **string**|  |

### Return type
[**\Yeepay\Yop\Sdk\Service\Auth\Model\FaceAuthResultQueryFaceAuthResultQueryResponseDTOResult**](../Model/FaceAuthResultQueryFaceAuthResultQueryResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **multipleAuth**
MultipleAuthResponse multipleAuth(MultipleAuthRequest request)

新信息认证



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Auth\AuthClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Auth\Model\MultipleAuthRequest();
$request->setMerchantNo("100000000000");
$request->setAuthType("authType_example");
$request->setRequestNo("requestNo_example");
$request->setIdCardNo("230231199510101010");
$request->setUsername("易小宝");
$request->setBankCardNo("6217876555556554324");
$request->setRemark("remark_example");
$request->setMobile("mobile_example");
$request->setIdCardType("idCardType_example");
$request->setClientSource("clientSource_example");
$request->setExtMap("{\"verifyBsnSceneDesc\":\"描述\",\"sourceIP\":\"AD80:0000:0000:0000:ABAA:0000:00C 2:0002\",\"appType\":\"01\",\"appName\":\"某某银行直销银行\",\"verifyBsnScene\":\"99\",\"ipType\":\"06\"}");

try {
    $response = $api_client->multipleAuth($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AuthClient->multipleAuth: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**|  | [optional]
 **authType** | **string**|  | [optional]
 **requestNo** | **string**|  | [optional]
 **idCardNo** | **string**|  | [optional]
 **username** | **string**|  | [optional]
 **bankCardNo** | **string**|  | [optional]
 **remark** | **string**|  | [optional]
 **mobile** | **string**|  | [optional]
 **idCardType** | **string**|  | [optional]
 **clientSource** | **string**|  | [optional]
 **extMap** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Auth\Model\MultipleAuthAuthResponseDTOResult**](../Model/MultipleAuthAuthResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **ocrIdcard**
OcrIdcardResponse ocrIdcard(OcrIdcardRequest request)

ocr识别接口

ocr识别图片

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Auth\AuthClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Auth\Model\OcrIdcardRequest();
$request->setRequestNo("requestNo_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setIdCardSide("idCardSide_example");
$request->setImageType("imageType_example");
$request->setIdCardImage("idCardImage_example");
$request->setCardType("cardType_example");

try {
    $response = $api_client->ocrIdcard($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AuthClient->ocrIdcard: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **idCardSide** | **string**|  | [optional]
 **imageType** | **string**|  | [optional]
 **idCardImage** | **string**|  | [optional]
 **cardType** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Auth\Model\OcrIdcardOcrRecognizeResponseDTOResult**](../Model/OcrIdcardOcrRecognizeResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

