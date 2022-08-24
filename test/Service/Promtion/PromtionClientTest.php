<?php


namespace Yeepay\Yop\Sdk\Service\Promtion;


use PHPUnit\Framework\TestCase;
use Yeepay\Yop\Sdk\Config\AppSdkConfig;
use Yeepay\Yop\Sdk\Exception\YopClientException;
use Yeepay\Yop\Sdk\Service\Promtion\Model as Model;

class PromtionClientTest extends TestCase
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
        self::$client = PromtionClientBuilder::builder($appSdkConfig)->build();
    }

    /**
     * @test
     */
    public function pointCreateTest()
    {
        $request = new Model\PointCreateRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setMerchantUserNo("merchantUserNo_example");
        try{
            $response = self::$client->pointCreate($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling PromtionClient->pointCreate: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function pointOperateTest()
    {
        $request = new Model\PointOperateRequest();

        $request->setRequestId("requestId_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setMerchantUserNo("merchantUserNo_example");
        $request->setPointAccountNo("pointAccountNo_example");
        $request->setPoint(1.2);
        $request->setPayDirection("payDirection_example");
        $request->setRemark("remark_example");
        try{
            $response = self::$client->pointOperate($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling PromtionClient->pointOperate: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function pointQueryTest()
    {
        $request = new Model\PointQueryRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setMerchantUserNo("merchantUserNo_example");
        $request->setPointAccountNo("pointAccountNo_example");
        try{
            $response = self::$client->pointQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling PromtionClient->pointQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function subsidyApplyTest()
    {
        $request = new Model\SubsidyApplyRequest();

        $request->setOrderId("orderId_example");
        $request->setUniqueOrderNo("1001201612070000000000000565");
        $request->setSubsidyRequestId("subsidyRequestId_example");
        $request->setSubsidyAmount("12.34");
        $request->setAssumeMerchantNo("assumeMerchantNo_example");
        $request->setMemo("memo_example");
        $request->setParentMerchantNo("10012426723");
        $request->setMerchantNo("10012426723");
        try{
            $response = self::$client->subsidyApply($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling PromtionClient->subsidyApply: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function subsidyBackTest()
    {
        $request = new Model\SubsidyBackRequest();

        $request->setOrderId("orderId_example");
        $request->setSubsidyRequestId("subsidyRequestId_example");
        $request->setSubsidyBackRequestId("subsidyBackRequestId_example");
        $request->setSubsidyBackAmount("12.34");
        $request->setReturnAccountType("returnAccountType_example");
        $request->setMemo("memo_example");
        $request->setParentMerchantNo("10012426723");
        $request->setMerchantNo("10012426723");
        try{
            $response = self::$client->subsidyBack($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling PromtionClient->subsidyBack: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function subsidyBackQueryTest()
    {
        $request = new Model\SubsidyBackQueryRequest();

        $request->setSubsidyRequestId("subsidyRequestId_example");
        $request->setSubsidyBackRequestId("subsidyBackRequestId_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->subsidyBackQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling PromtionClient->subsidyBackQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function subsidyQueryTest()
    {
        $request = new Model\SubsidyQueryRequest();

        $request->setOrderId("orderId_example");
        $request->setSubsidyRequestId("subsidyRequestId_example");
        $request->setParentMerchantNo("10012426723");
        $request->setMerchantNo("10012426723");
        try{
            $response = self::$client->subsidyQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling PromtionClient->subsidyQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
}
