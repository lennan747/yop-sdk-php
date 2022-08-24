<?php


namespace Yeepay\Yop\Sdk\Service\Std;


use PHPUnit\Framework\TestCase;
use Yeepay\Yop\Sdk\Config\AppSdkConfig;
use Yeepay\Yop\Sdk\Exception\YopClientException;
use Yeepay\Yop\Sdk\Service\Std\Model as Model;

class StdClientTest extends TestCase
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
        self::$client = StdClientBuilder::builder($appSdkConfig)->build();
    }

    /**
     * @test
     */
    public function billDividedaydownloadTest()
    {
        $request = new Model\BillDividedaydownloadRequest();

        $request->setMerchantNo("merchantNo_example");
        $request->setDayString("dayString_example");
        try{
            $response = self::$client->billDividedaydownload($request);
            $response->save('targetFilePath');
        }catch (\Exception $e) {
            echo 'Exception when calling StdClient->billDividedaydownload: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function billFundbillApplyTest()
    {
        $request = new Model\BillFundbillApplyRequest();

        $request->setStartDate("startDate_example");
        $request->setEndDate("endDate_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setSubMerchantNo("subMerchantNo_example");
        $request->setAccountType("accountType_example");
        $request->setNotifyUrl("notifyUrl_example");
        try{
            $response = self::$client->billFundbillApply($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling StdClient->billFundbillApply: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function billFundbillBolEndbalanceApplyTest()
    {
        $request = new Model\BillFundbillBolEndbalanceApplyRequest();

        $request->setBookDate("bookDate_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setNotifyUrl("notifyUrl_example");
        $request->setSubMerchantNo("subMerchantNo_example");
        try{
            $response = self::$client->billFundbillBolEndbalanceApply($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling StdClient->billFundbillBolEndbalanceApply: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function billFundbillBolSettleApplyTest()
    {
        $request = new Model\BillFundbillBolSettleApplyRequest();

        $request->setTradeDate("tradeDate_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setNotifyUrl("notifyUrl_example");
        $request->setSubMerchantNo("subMerchantNo_example");
        try{
            $response = self::$client->billFundbillBolSettleApply($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling StdClient->billFundbillBolSettleApply: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function billFundbillDownloadTest()
    {
        $request = new Model\BillFundbillDownloadRequest();

        $request->setMerchantNo("merchantNo_example");
        $request->setFileId("fileId_example");
        try{
            $response = self::$client->billFundbillDownload($request);
            $response->save('targetFilePath');
        }catch (\Exception $e) {
            echo 'Exception when calling StdClient->billFundbillDownload: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function billFundbillEndbalanceApplyTest()
    {
        $request = new Model\BillFundbillEndbalanceApplyRequest();

        $request->setBookDate("bookDate_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setNotifyUrl("notifyUrl_example");
        $request->setSubMerchantNo("subMerchantNo_example");
        try{
            $response = self::$client->billFundbillEndbalanceApply($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling StdClient->billFundbillEndbalanceApply: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function billFundbillFlowQueryTest()
    {
        $request = new Model\BillFundbillFlowQueryRequest();

        $request->setStartDate("startDate_example");
        $request->setEndDate("endDate_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setPage(56);
        $request->setSize(56);
        $request->setTrxCode("trxCode_example");
        $request->setAccountType("accountType_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->billFundbillFlowQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling StdClient->billFundbillFlowQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function billFundbillFlowSumTest()
    {
        $request = new Model\BillFundbillFlowSumRequest();

        $request->setStartDate("startDate_example");
        $request->setEndDate("endDate_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setTrxCode("trxCode_example");
        $request->setAccountType("accountType_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->billFundbillFlowSum($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling StdClient->billFundbillFlowSum: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function billSettlebillDownloadTest()
    {
        $request = new Model\BillSettlebillDownloadRequest();

        $request->setSettleDate("settleDate_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setSettleBatchNo("settleBatchNo_example");
        try{
            $response = self::$client->billSettlebillDownload($request);
            $response->save('targetFilePath');
        }catch (\Exception $e) {
            echo 'Exception when calling StdClient->billSettlebillDownload: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function billTradedaydownloadTest()
    {
        $request = new Model\BillTradedaydownloadRequest();

        $request->setMerchantNo("merchantNo_example");
        $request->setDayString("dayString_example");
        $request->setDataType("dataType_example");
        try{
            $response = self::$client->billTradedaydownload($request);
            $response->save('targetFilePath');
        }catch (\Exception $e) {
            echo 'Exception when calling StdClient->billTradedaydownload: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function certOrderTest()
    {
        $request = new Model\CertOrderRequest();

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
        try{
            $response = self::$client->certOrder($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling StdClient->certOrder: ', $e->getMessage(), PHP_EOL;
        }
    }
}
