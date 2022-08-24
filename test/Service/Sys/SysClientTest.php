<?php


namespace Yeepay\Yop\Sdk\Service\Sys;


use PHPUnit\Framework\TestCase;
use Yeepay\Yop\Sdk\Config\AppSdkConfig;
use Yeepay\Yop\Sdk\Exception\YopClientException;
use Yeepay\Yop\Sdk\Service\Sys\Model as Model;

class SysClientTest extends TestCase
{


    private static $client;

    public static function setUpBeforeClass()
    {
        $data = \GuzzleHttp\json_decode('{"app_key":"app_Fe51qCyZWcEnDMtK","aes_secret_key":"ytrbMFjRqLpLgY58J6LN9Q==","server_root":"http://ycetest.yeepay.com:30228/yop-center","yos_server_root":"http://ycetest.yeepay.com:30228/yop-center","yop_public_key":[{"store_type":"string","cert_type":"RSA2048","value":"MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA4g7dPL+CBeuzFmARI2GFjZpKODUROaMG+E6wdNfv5lhPqC3jjTIeljWU8AiruZLGRhl92QWcTjb3XonjaV6k9rf9adQtyv2FLS7bl2Vz2WgjJ0FJ5/qMaoXaT+oAgWFk2GypyvoIZsscsGpUStm6BxpWZpbPrGJR0N95un/130cQI9VCmfvgkkCaXt7TU1BbiYzkc8MDpLScGm/GUCB2wB5PclvOxvf5BR/zNVYywTEFmw2Jo0hIPPSWB5Yyf2mx950Fx8da56co/FxLdMwkDOO51Qg3fbaExQDVzTm8Odi++wVJEP1y34tlmpwFUVbAKIEbyyELmi/2S6GG0j9vNwIDAQAB"}],"isv_private_key":[{"store_type":"string","cert_type":"RSA2048","value":"MIIEvAIBADANBgkqhkiG9w0BAQEFAASCBKYwggSiAgEAAoIBAQCf0qRvP2OJQEONEHiO5Jh2tbGo6pA3Wh7cINgpKZHLHIygZHhB4sU/2JxHqbraRsuBzC2aeWCTrXJVKjQS91vn0JHJd4BonK4ryqTRWULQkPqvzFNz59qna5laWE/m1LriyMfSVsyTHGggqbCKtNorCW+DVnWtCJybo4HKeSqyHFw13EetSRkmVF+Y8TvDTkKZJuNlK5HXSithkSY9d4PZUyIkaF1HnogQPf+mmvPwSJuVvFxeupnG99wljP5Yv2FfD9xq+XoR5mSlTCFePWjKvocSmiaVcWwSk0jW6ks0XdlMLhHq6NeqLzX8Ze0wpzqcAEurZpOrmaQNFd2m+RXNAgMBAAECggEAdafmMZeiuQm8MP7tIZSbwNhlX4q+fGE10qvDNhpKIBJ2XCVaenZs62GVOxRyX/o6GuWqtMuiE1Vek9+r0kKTQAbFLGFzAJBHkClwSEXD8DKqufxbezo2N4X4sQ/OUopMwmM451nK5InHBjSlqJcW/RPHKhLeMnHiiJlIFTw5+D/DcnCBfJ7sLJw3/EM2WR5wbLguI+ExCkN1PovSBkGhvTLzJtBhMveBdM7/ajg5/edvIvU0spBmakPCCnVuek1asO95AYyo02psZ3//MMD3/li9wzZqeIGsFbALIOS/vLPh1qBozJIHYTPmO+mXx8VVYBK5QtCw6HwotD6J94VBQQKBgQD8MnsaHBUn28dTsg/aeSeQSjlX93czeu/nmlXCS1J6ctjBDPCL8wrPsVkjYsgH+uJTbAW3Cwuoov50A3BDZEWA+C3plZoXDIOlFEgA1dWPsrZONe27PjYNvlKphVBXb2mfPxoAcOtBBQBIfsBQIXGTB0pVkMDpVqnbOpEM7cGVGQKBgQCiO5UdaMoHHM9ZTicZdsg/6ZPS6ZtBS+7JRSQaosb66P6rib5YyfoYOBfUeswjrB/y5CXtkN4xd/gyAm1AVN5I4NPS7XQhvphfg+BBAJ7mixNwT7hkQek8pi20+TOlgbd1PmG4qvOEhgeMa9neuJCmGSw3rgfcu96+1YP3GOFI1QKBgDNUpv+idZ/eOMzNMjLac/YHVXKVGLruq8OtAwV/xTLNC1cHpjIl7q5lP2pXYbVWGBi4pNUjt2TEgBvm00O0Nf1RBi9D1tAYKPdBkIIzA7uyuS5kBZYVzHSxpyt/yeFx+MKD2mv6j7d1KCCZQ9VLaU1ur2+I/erAS+QmIH3MKpmJAoGAP15kpYMr/tE7ENgdH64tFAHp0uWa1kuRrx6JtrnEXXerGlgIeOgT/2fRrxZ0LK7sH9UMF5qRn+MLmIUoJYvA89iWBPrpdNDc9douO1XBu62xXxpUnRy9vQnwKpN4n/pmLa67PwXPbwFna2spQ/z1y1tj0S/yND9SB1qhXGBkhy0CgYBhJf0SZ9PWaasOxAsDgFsj3mSjfvoTqclRDKo1d0KFyOIKOkK3hS8ZaHA/dcR024ydc6b0mU+pyrm2/k+JuX4dHO1M9wshS1YAXytj5RCs+43ghJrbDeNxrNK4VesJPpyK0kEGHSLbMgHnSVZ4/jAgdoKEhz1cHbZorQ92XgDzBw=="}],"encrypt_key":"AWXI5fZGXmTFVHfjyzBMMrrk1IF9dCqGJt3JIZrKY90=","http_client":{"connect_timeout":10000,"read_timeout":30000,"max_conn_total":2000,"max_conn_per_route":1000}}', true);
        try {
            $appSdkConfig = new AppSdkConfig($data);
        } catch (YopClientException $e) {
            throw $e;
        }
        self::$client = SysClientBuilder::builder($appSdkConfig)->build();
    }

    /**
     * @test
     */
    public function merchantQualUploadTest()
    {
        $request = new Model\MerchantQualUploadRequest();

        $request->setMerQual(fopen("/path/to/file", "r"));
        try{
            $response = self::$client->merchantQualUpload($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling SysClient->merchantQualUpload: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function tradeDividebackTest()
    {
        $request = new Model\TradeDividebackRequest();

        $request->setOrderId("orderId_example");
        $request->setUniqueOrderNo("uniqueOrderNo_example");
        $request->setDivideRequestId("divideRequestId_example");
        $request->setDivideBackRequestId("divideBackRequestId_example");
        $request->setDivideBackDetail("{\"amount\":\"3.45\",\"divideBackReason\":\"退回原因01\",\"divideDetailNo\":\"1003232421231232\"},{\"amount\":\"2.35\",\"divideBackReason\":\"退回原因02\",\"divideDetailNo\":\"200323242123343\"}");
        $request->setNotifyUrl("notifyUrl_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setHmac("hmac_example");
        try{
            $response = self::$client->tradeDivideback($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling SysClient->tradeDivideback: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function tradeOrderTest()
    {
        $request = new Model\TradeOrderRequest();

        $request->setParentMerchantNo("10012426723");
        $request->setMerchantNo("10012426723");
        $request->setOrderId("merchant12345");
        $request->setOrderAmount("88.88");
        $request->setTimeoutExpress(30);
        $request->setTimeoutExpressType("timeoutExpressType_example");
        $request->setRequestDate("2017-12-12 13:23:45");
        $request->setRedirectUrl("http://www.merc hant.sscom:8080/ uc/payCallback?u 8ChannelID=10");
        $request->setNotifyUrl("http://payment.m erchant.com:8080 /uc/payCallback? u8ChannelID=8");
        $request->setAssureType("REALTIME");
        $request->setAssurePeriod("assurePeriod_example");
        $request->setGoodsParamExt("{“goodsName” : “abc 商品名 称” ,” goodsDes c” : ” 商品描 述” }");
        $request->setPaymentParamExt("paymentParamExt_example");
        $request->setIndustryParamExt("industryParamExt_example");
        $request->setRiskParamExt("riskParamExt_example");
        $request->setMemo("memo_example");
        $request->setFundProcessType("fundProcessType_example");
        $request->setHmac("hmac_example");
        $request->setDivideDetail("divideDetail_example");
        $request->setCsUrl("csUrl_example");
        $request->setDivideNotifyUrl("divideNotifyUrl_example");
        $request->setTimeoutNotifyUrl("timeoutNotifyUrl_example");
        $request->setSiSubsidyMerchantAmout("siSubsidyMerchantAmout_example");
        $request->setQueryParamsExt("queryParamsExt_example");
        try{
            $response = self::$client->tradeOrder($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling SysClient->tradeOrder: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function tradeOrderqueryTest()
    {
        $request = new Model\TradeOrderqueryRequest();

        $request->setParentMerchantNo("10012426723");
        $request->setMerchantNo("10012426744");
        $request->setOrderId("merchant12345");
        $request->setUniqueOrderNo("1001201612070000000000000565");
        $request->setHmac("hmac_example");
        try{
            $response = self::$client->tradeOrderquery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling SysClient->tradeOrderquery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function tradeRefundTest()
    {
        $request = new Model\TradeRefundRequest();

        $request->setParentMerchantNo("10012426723");
        $request->setMerchantNo("10012426723");
        $request->setOrderId("merchant12345");
        $request->setRefundRequestId("Merchant23345");
        $request->setUniqueOrderNo("1001201612070000000000000565");
        $request->setRefundAmount("88.88");
        $request->setAccountDivided("[{\"ledgerNo\":\"10000466921\",\"amount\":0.01,\"ledgerName\":\"test@yeepay.com”},  {\"ledgerNo\":\"10012426766\",\"amount\":0.01,\"ledgerName\":\"test@yeepay.com\"}]注意：收单方承担的金额也要写有JOSN串里，JSON里的金额总和等于退款金额");
        $request->setDescription("用户退货退款");
        $request->setMemo("memo_example");
        $request->setNotifyUrl("notifyUrl_example");
        $request->setHmac("hmac_example");
        $request->setMerchantSideMarketingRefundDetails("merchantSideMarketingRefundDetails_example");
        $request->setRefundAccountType("FUND_ACCOUNT");
        try{
            $response = self::$client->tradeRefund($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling SysClient->tradeRefund: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function tradeRefundqueryTest()
    {
        $request = new Model\TradeRefundqueryRequest();

        $request->setParentMerchantNo("10012426723");
        $request->setMerchantNo("10012426723");
        $request->setOrderId("merchant12345");
        $request->setRefundRequestId("refundRequestId_example");
        $request->setUniqueRefundNo("uniqueRefundNo_example");
        $request->setHmac("hmac_example");
        try{
            $response = self::$client->tradeRefundquery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling SysClient->tradeRefundquery: ', $e->getMessage(), PHP_EOL;
        }
    }
}
