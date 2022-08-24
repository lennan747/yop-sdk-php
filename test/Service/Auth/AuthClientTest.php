<?php


namespace Yeepay\Yop\Sdk\Service\Auth;


use PHPUnit\Framework\TestCase;
use Yeepay\Yop\Sdk\Config\AppSdkConfig;
use Yeepay\Yop\Sdk\Exception\YopClientException;
use Yeepay\Yop\Sdk\Service\Auth\Model as Model;

class AuthClientTest extends TestCase
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
        self::$client = AuthClientBuilder::builder($appSdkConfig)->build();
    }

    /**
     * @test
     */
    public function faceAuthTest()
    {
        $request = new Model\FaceAuthRequest();

        $request->setRequestNo("REQ6437657876");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("10012345679");
        $request->setName("张三");
        $request->setCardNo("cardNo_example");
        $request->setCardType("cardType_example");
        $request->setReturnUrl("returnUrl_example");
        $request->setNotifyUrl("notifyUrl_example");
        $request->setExtraData("extraData_example");
        try{
            $response = self::$client->faceAuth($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AuthClient->faceAuth: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function faceAuthKycTest()
    {
        $request = new Model\FaceAuthKycRequest();

        $request->setRequestNo("REQ6437657876");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("10012345679");
        $request->setName("张三");
        $request->setCardNo("cardNo_example");
        $request->setCardType("cardType_example");
        $request->setReturnUrl("returnUrl_example");
        $request->setNotifyUrl("notifyUrl_example");
        $request->setExtraData("extraData_example");
        try{
            $response = self::$client->faceAuthKyc($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AuthClient->faceAuthKyc: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function faceAuthKycQueryTest()
    {
        $request = new Model\FaceAuthKycQueryRequest();

        $request->setRequestNo("requestNo_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->faceAuthKycQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AuthClient->faceAuthKycQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function faceAuthResultQueryTest()
    {
        $request = new Model\FaceAuthResultQueryRequest();

        $request->setRequestNo("requestNo_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->faceAuthResultQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AuthClient->faceAuthResultQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function multipleAuthTest()
    {
        $request = new Model\MultipleAuthRequest();

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
        try{
            $response = self::$client->multipleAuth($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AuthClient->multipleAuth: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function ocrIdcardTest()
    {
        $request = new Model\OcrIdcardRequest();

        $request->setRequestNo("requestNo_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setIdCardSide("idCardSide_example");
        $request->setImageType("imageType_example");
        $request->setIdCardImage("idCardImage_example");
        $request->setCardType("cardType_example");
        try{
            $response = self::$client->ocrIdcard($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AuthClient->ocrIdcard: ', $e->getMessage(), PHP_EOL;
        }
    }
}
