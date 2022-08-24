# Yeepay\Yop\Sdk\Std

All URIs are relative to *http://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**billDividedaydownload**](Std.md#billDividedaydownload) | **GET** /yos/v1.0/std/bill/dividedaydownload | 分账日对账下载
[**billFundbillApply**](Std.md#billFundbillApply) | **POST** /rest/v1.0/std/bill/fundbill/apply | 资金账单申请
[**billFundbillBolEndbalanceApply**](Std.md#billFundbillBolEndbalanceApply) | **POST** /rest/v1.0/std/bill/fundbill/bol-endbalance/apply | 银行日终余额账单申请
[**billFundbillBolSettleApply**](Std.md#billFundbillBolSettleApply) | **POST** /rest/v1.0/std/bill/fundbill/bol-settle/apply | 银行结算账单申请
[**billFundbillDownload**](Std.md#billFundbillDownload) | **GET** /yos/v1.0/std/bill/fundbill/download | 资金账单下载
[**billFundbillEndbalanceApply**](Std.md#billFundbillEndbalanceApply) | **POST** /rest/v1.0/std/bill/fundbill-endbalance/apply | 日终余额账单申请
[**billFundbillFlowQuery**](Std.md#billFundbillFlowQuery) | **GET** /rest/v1.0/std/bill/fundbill/flow/query | 资金流水明细查询
[**billFundbillFlowSum**](Std.md#billFundbillFlowSum) | **GET** /rest/v1.0/std/bill/fundbill/flow/sum | 资金流水汇总查询
[**billSettlebillDownload**](Std.md#billSettlebillDownload) | **GET** /yos/v1.0/std/bill/settlebill/download | 下载结算账单
[**billTradedaydownload**](Std.md#billTradedaydownload) | **POST** /yos/v1.0/std/bill/tradedaydownload | 交易日对账下载
[**certOrder**](Std.md#certOrder) | **POST** /rest/v1.0/std/cert/order | 新信息认证系统-认证请求


# **billDividedaydownload**
YosDownloadResponse billDividedaydownload(BillDividedaydownloadRequest request)

分账日对账下载

强调：获取对账文件时请以行号来获取对账文件信息，后期易宝可能在后追加参表头参数分账日对账下载，9点后下载前一天的对账文件，具体请参考对账文件说明&lt;/a&gt;&lt;/p&gt;

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Std\StdClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Std\Model\BillDividedaydownloadRequest();
$request->setMerchantNo("merchantNo_example");
$request->setDayString("dayString_example");

try {
    $response = $api_client->billDividedaydownload($request);
    $response->save('targetFilePath');
}catch (\Exception $e) {
    echo 'Exception when calling StdClient->billDividedaydownload: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**| 标准商户:标准商户编号&lt;br&gt;平台商:平台商商户编号, 文件包含平台商及平台商下所有入驻商户的交易信息 | [optional]
 **dayString** | **string**| e.g.: 2017-09-09 | [optional]

### Return type
[**Resource**](../Model/Resource.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/octet-stream

# **billFundbillApply**
BillFundbillApplyResponse billFundbillApply(BillFundbillApplyRequest request)

资金账单申请

资金账单申请

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Std\StdClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Std\Model\BillFundbillApplyRequest();
$request->setStartDate("startDate_example");
$request->setEndDate("endDate_example");
$request->setMerchantNo("merchantNo_example");
$request->setSubMerchantNo("subMerchantNo_example");
$request->setAccountType("accountType_example");
$request->setNotifyUrl("notifyUrl_example");

try {
    $response = $api_client->billFundbillApply($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling StdClient->billFundbillApply: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **startDate** | **string**|  | [optional]
 **endDate** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **subMerchantNo** | **string**|  | [optional]
 **accountType** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Std\Model\BillFundbillApplyManualGenerationResponseDTOResult**](../Model/BillFundbillApplyManualGenerationResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **billFundbillBolEndbalanceApply**
BillFundbillBolEndbalanceApplyResponse billFundbillBolEndbalanceApply(BillFundbillBolEndbalanceApplyRequest request)

银行日终余额账单申请

银行日终余额账单申请

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Std\StdClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Std\Model\BillFundbillBolEndbalanceApplyRequest();
$request->setBookDate("bookDate_example");
$request->setMerchantNo("merchantNo_example");
$request->setNotifyUrl("notifyUrl_example");
$request->setSubMerchantNo("subMerchantNo_example");

try {
    $response = $api_client->billFundbillBolEndbalanceApply($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling StdClient->billFundbillBolEndbalanceApply: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bookDate** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **subMerchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Std\Model\BillFundbillBolEndbalanceApplyManualGenerationLfBankEndBalResponseDTOResult**](../Model/BillFundbillBolEndbalanceApplyManualGenerationLfBankEndBalResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **billFundbillBolSettleApply**
BillFundbillBolSettleApplyResponse billFundbillBolSettleApply(BillFundbillBolSettleApplyRequest request)

银行结算账单申请

银行结算账单申请

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Std\StdClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Std\Model\BillFundbillBolSettleApplyRequest();
$request->setTradeDate("tradeDate_example");
$request->setMerchantNo("merchantNo_example");
$request->setNotifyUrl("notifyUrl_example");
$request->setSubMerchantNo("subMerchantNo_example");

try {
    $response = $api_client->billFundbillBolSettleApply($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling StdClient->billFundbillBolSettleApply: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tradeDate** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **subMerchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Std\Model\BillFundbillBolSettleApplyManualGenerationLfBankSettleResponseDTOResult**](../Model/BillFundbillBolSettleApplyManualGenerationLfBankSettleResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **billFundbillDownload**
YosDownloadResponse billFundbillDownload(BillFundbillDownloadRequest request)

资金账单下载

资金账单下载

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Std\StdClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Std\Model\BillFundbillDownloadRequest();
$request->setMerchantNo("merchantNo_example");
$request->setFileId("fileId_example");

try {
    $response = $api_client->billFundbillDownload($request);
    $response->save('targetFilePath');
}catch (\Exception $e) {
    echo 'Exception when calling StdClient->billFundbillDownload: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**|  |
 **fileId** | **string**|  |

### Return type
[**Resource**](../Model/Resource.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/octet-stream

# **billFundbillEndbalanceApply**
BillFundbillEndbalanceApplyResponse billFundbillEndbalanceApply(BillFundbillEndbalanceApplyRequest request)

日终余额账单申请

日终余额账单申请

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Std\StdClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Std\Model\BillFundbillEndbalanceApplyRequest();
$request->setBookDate("bookDate_example");
$request->setMerchantNo("merchantNo_example");
$request->setNotifyUrl("notifyUrl_example");
$request->setSubMerchantNo("subMerchantNo_example");

try {
    $response = $api_client->billFundbillEndbalanceApply($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling StdClient->billFundbillEndbalanceApply: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bookDate** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **subMerchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Std\Model\BillFundbillEndbalanceApplyManualGenerationEndBalanceResponseDTOResult**](../Model/BillFundbillEndbalanceApplyManualGenerationEndBalanceResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **billFundbillFlowQuery**
BillFundbillFlowQueryResponse billFundbillFlowQuery(BillFundbillFlowQueryRequest request)

资金流水明细查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Std\StdClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Std\Model\BillFundbillFlowQueryRequest();
$request->setStartDate("startDate_example");
$request->setEndDate("endDate_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setPage(56);
$request->setSize(56);
$request->setTrxCode("trxCode_example");
$request->setAccountType("accountType_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->billFundbillFlowQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling StdClient->billFundbillFlowQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **startDate** | **string**| 格式应为yyyy-MM-dd |
 **endDate** | **string**| 格式应为yyyy-MM-dd,与startDate最大日期间隔为31天 |
 **parentMerchantNo** | **string**| 1.父商编与子商户一致查父商编自己流水;  2.父商编与子商户不一致，查子商户流水（服务商解决方案下，查平台下的入驻商户时,父商编传平台商商编）;  3.子商户编号为空，查父商编下所有流水 |
 **page** | **int**| 默认1，最小为1 |
 **size** | **int**| 默认20,最小为1,最大100 |
 **trxCode** | **string**| 商户传入1001,接口返回中文收单。&lt;br&gt;业务类型可选项如下:&lt;br&gt;1001:收单&lt;br&gt;1002:分账&lt;br&gt;1003:分账退回&lt;br&gt;1004:退款&lt;br&gt;1005:充值&lt;br&gt;1006:转账&lt;br&gt;1010:退款撤销&lt;br&gt;2004:提现&lt;br&gt;2005:企业付款&lt;br&gt;2006:收费(鉴权)&lt;br&gt;2007:收费撤销&lt;br&gt;2009:支付账户支付&lt;br&gt;2011:日结通&lt;br&gt;2012:快速实名认证&lt;br&gt;2026:划拨&lt;br&gt;2027:资金归集&lt;br&gt;2028:营销账户退款&lt;br&gt;2029:营销账户支付&lt;br&gt;2035:补贴商户入账&lt;br&gt;2037:OCR识别&lt;br&gt;2038:OCR识别撤销&lt;br&gt;4001:结算 | [optional]
 **accountType** | **string**| 账户类型可选项如下:&lt;br&gt;FUND_ACCOUNT:资金账户&lt;br&gt;SETTLE_ACCOUNT:待结算账户&lt;br&gt;DIVIDE_ACCOUNT:待分账账户&lt;br&gt;FEE_ACCOUNT:手续费账户&lt;br&gt;BASIC_ACCOUNT:基本账户&lt;br&gt;MARKET_ACCOUNT:营销账&lt;br&gt;SPECIAL_FUND_ACCOUNT:专款账户&lt;br&gt;ADVANCE_ACCOUNT:预收账户 | [optional]
 **merchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Std\Model\BillFundbillFlowQueryYopQueryFundBillFlowResponseDTOResult**](../Model/BillFundbillFlowQueryYopQueryFundBillFlowResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **billFundbillFlowSum**
BillFundbillFlowSumResponse billFundbillFlowSum(BillFundbillFlowSumRequest request)

资金流水汇总查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Std\StdClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Std\Model\BillFundbillFlowSumRequest();
$request->setStartDate("startDate_example");
$request->setEndDate("endDate_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setTrxCode("trxCode_example");
$request->setAccountType("accountType_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->billFundbillFlowSum($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling StdClient->billFundbillFlowSum: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **startDate** | **string**| 格式应为yyyy-MM-dd |
 **endDate** | **string**| 格式应为yyyy-MM-dd,与startDate最大日期间隔为31天 |
 **parentMerchantNo** | **string**| 1.父商编与子商户一致查父商编自己流水;  2.父商编与子商户不一致，查子商户流水（服务商解决方案下，查平台下的入驻商户时,父商编传平台商商编）;  3.子商户编号为空，查父商编下所有流水 |
 **trxCode** | **string**| 商户传入1001,接口返回中文收单。&lt;br&gt;业务类型可选项如下:&lt;br&gt;1001:收单&lt;br&gt;1002:分账&lt;br&gt;1003:分账退回&lt;br&gt;1004:退款&lt;br&gt;1005:充值&lt;br&gt;1006:转账&lt;br&gt;1010:退款撤销&lt;br&gt;2004:提现&lt;br&gt;2005:企业付款&lt;br&gt;2006:收费(鉴权)&lt;br&gt;2007:收费撤销&lt;br&gt;2009:支付账户支付&lt;br&gt;2011:日结通&lt;br&gt;2012:快速实名认证&lt;br&gt;2026:划拨&lt;br&gt;2027:资金归集&lt;br&gt;2028:营销账户退款&lt;br&gt;2029:营销账户支付&lt;br&gt;2035:补贴商户入账&lt;br&gt;2037:OCR识别&lt;br&gt;2038:OCR识别撤销&lt;br&gt;4001:结算 | [optional]
 **accountType** | **string**| 账户类型可选项如下:&lt;br&gt;FUND_ACCOUNT:资金账户&lt;br&gt;SETTLE_ACCOUNT:待结算账户&lt;br&gt;DIVIDE_ACCOUNT:待分账账户&lt;br&gt;FEE_ACCOUNT:手续费账户&lt;br&gt;BASIC_ACCOUNT:基本账户&lt;br&gt;MARKET_ACCOUNT:营销账&lt;br&gt;SPECIAL_FUND_ACCOUNT:专款账户&lt;br&gt;ADVANCE_ACCOUNT:预收账户 | [optional]
 **merchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Std\Model\BillFundbillFlowSumYopQueryFundBillSumResponseDTOResult**](../Model/BillFundbillFlowSumYopQueryFundBillSumResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **billSettlebillDownload**
YosDownloadResponse billSettlebillDownload(BillSettlebillDownloadRequest request)

下载结算账单

下载结算账单

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Std\StdClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Std\Model\BillSettlebillDownloadRequest();
$request->setSettleDate("settleDate_example");
$request->setMerchantNo("merchantNo_example");
$request->setSettleBatchNo("settleBatchNo_example");

try {
    $response = $api_client->billSettlebillDownload($request);
    $response->save('targetFilePath');
}catch (\Exception $e) {
    echo 'Exception when calling StdClient->billSettlebillDownload: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **settleDate** | **string**| 格式yyyy-mm-dd |
 **merchantNo** | **string**|  |
 **settleBatchNo** | **string**|  | [optional]

### Return type
[**Resource**](../Model/Resource.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/octet-stream

# **billTradedaydownload**
YosDownloadResponse billTradedaydownload(BillTradedaydownloadRequest request)

交易日对账下载

交易日对账下载，具体请参考对账文件说明&lt;/a&gt;

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Std\StdClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Std\Model\BillTradedaydownloadRequest();
$request->setMerchantNo("merchantNo_example");
$request->setDayString("dayString_example");
$request->setDataType("dataType_example");

try {
    $response = $api_client->billTradedaydownload($request);
    $response->save('targetFilePath');
}catch (\Exception $e) {
    echo 'Exception when calling StdClient->billTradedaydownload: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**|  | [optional]
 **dayString** | **string**|  | [optional]
 **dataType** | **string**|  | [optional]

### Return type
[**Resource**](../Model/Resource.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/octet-stream

# **certOrder**
CertOrderResponse certOrder(CertOrderRequest request)

新信息认证系统-认证请求



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Std\StdClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Std\Model\CertOrderRequest();
$request->setMerchantNo("100000000000");
$request->setAuthType("authType_example");
$request->setRequestNo("requestNo_example");
$request->setIdCardNo("230231199510101010");
$request->setUserName("易小宝");
$request->setBankCardNo("6217876555556554324");
$request->setRequestTime("2019-09-09 00:00:00");
$request->setRemark("remark_example");
$request->setMobilePhone("mobilePhone_example");
$request->setIdCardType("idCardType_example");
$request->setClientSource("clientSource_example");
$request->setExtMap("{\"verifyBsnSceneDesc\":\"描述\",\"sourceIP\":\"AD80:0000:0000:0000:ABAA:0000:00C 2:0002\",\"appType\":\"01\",\"appName\":\"某某银行直销银行\",\"verifyBsnScene\":\"99\",\"ipType\":\"06\"}");

try {
    $response = $api_client->certOrder($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling StdClient->certOrder: ', $e->getMessage(), PHP_EOL;
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
 **userName** | **string**|  | [optional]
 **bankCardNo** | **string**|  | [optional]
 **requestTime** | **string**|  | [optional]
 **remark** | **string**|  | [optional]
 **mobilePhone** | **string**|  | [optional]
 **idCardType** | **string**|  | [optional]
 **clientSource** | **string**|  | [optional]
 **extMap** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Std\Model\CertOrderAuthResponseDTOResult**](../Model/CertOrderAuthResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

