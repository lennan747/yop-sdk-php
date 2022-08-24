<?php


namespace Yeepay\Yop\Sdk\Service\Mer;


use PHPUnit\Framework\TestCase;
use Yeepay\Yop\Sdk\Config\AppSdkConfig;
use Yeepay\Yop\Sdk\Exception\YopClientException;
use Yeepay\Yop\Sdk\Service\Mer\Model as Model;

class MerClientTest extends TestCase
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
        self::$client = MerClientBuilder::builder($appSdkConfig)->build();
    }

    /**
     * @test
     */
    public function authStateQueryV2Test()
    {
        $request = new Model\AuthStateQueryV2Request();

        $request->setMerchantNo("merchantNo_example");
        $request->setReportMerchantNo("reportMerchantNo_example");
        $request->setFeeType("feeType_example");
        try{
            $response = self::$client->authStateQueryV2($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->authStateQueryV2: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function bankAccountOpenTest()
    {
        $request = new Model\BankAccountOpenRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setBusinessPlacePhoto("businessPlacePhoto_example");
        $request->setNotifyUrl("notifyUrl_example");
        $request->setDeviceip("deviceip_example");
        $request->setToken("token_example");
        $request->setMerchantSubjectInfo("{\"busStartDate\":\"商户证件有效期起始日期\",\"busEndDate\":\"商户证件有效期截止日期\",\"magAddress\":\"注册地址\",\"magScope\":\"经营范围\"}");
        $request->setSettlementAccountInfo("{\"bankCode\":\"银行账户开户总行编码\",\"bankCardNo\":\"银行账户号码\"}");
        $request->setMerchantCorporationInfo("{\"legalStartDate\":\"法人证件有效期起始日期\",\"legalEndDate\":\"法人证件有效期截止日期\",\"legalMobile\":\"法人手机号\"}");
        $request->setMerchantContactInfo("{\"contactName\":\"\",\"contactLicenceType\":\"\",\"contactLicenceNo\":\"\",\"contactMobile\":\"\",\"contactLicenceStartDate\":\"\",\"contactLicenceEndDate\":\"\",\"contactLicenceFrontUrl\":\"\",\"contactLicenceBackUrl\":\"\"}");
        $request->setShareholdersInfo("[{\"shareholdersType\":\"\",\"shareholdersName\":\"\",\"shareholdersNo\":\"\",\"shareholdersRatio\":\"\",\"shareholdersLicenceUrl\":\"\",\"shareholdersEndDate\":\"\",\"shareholdersIdCardFrontUrl\":\"\",\"shareholdersIdCardBackUrl\":\"\"}]");
        $request->setBeneficiaryInfo("[{\"benefName\":\"\",\"benefNo\":\"\",\"benefAddress\":\"\",\"benefIdCardFrontUrl\":\"\",\"benefIdCardBackUrl\":\"\",\"benefEndDate\":\"\"}]");
        $request->setRequestNo("requestNo_example");
        try{
            $response = self::$client->bankAccountOpen($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->bankAccountOpen: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function bankAccountOpenQueryTest()
    {
        $request = new Model\BankAccountOpenQueryRequest();

        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->bankAccountOpenQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->bankAccountOpenQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function merchantDisposeQueryTest()
    {
        $request = new Model\MerchantDisposeQueryRequest();

        $request->setRequestNo("requestNo_example");
        $request->setApplicationNo("applicationNo_example");
        try{
            $response = self::$client->merchantDisposeQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->merchantDisposeQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function merchantDisposeUnfreezeTest()
    {
        $request = new Model\MerchantDisposeUnfreezeRequest();

        $request->setRequestNo("requestNo_example");
        $request->setNotifyUrl("notifyUrl_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->merchantDisposeUnfreeze($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->merchantDisposeUnfreeze: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function merchantInfoModifyTest()
    {
        $request = new Model\MerchantInfoModifyRequest();

        $request->setRequestNo("a04cf8bded8b4413a43ab455b21eedcd");
        $request->setMerchantNo("merchantNo_example");
        $request->setNotifyUrl("notifyUrl_example");
        $request->setMerchantSubjectInfo("{ \"licenceUrl\":\"商户证件照片地址\", \"signName\":\"商户签约名\", \"licenceNo\":\"商户证件号码\", \"shortName\":\"商户简称\" }");
        $request->setMerchantCorporationInfo("{ \"legalName\":\"法人名称\", \"legalLicenceType\":\"ID_CARD\", \"legalLicenceNo\":\"法人证件编号\", \"legalLicenceFrontUrl\":\"法人证件正面照片地址\", \"legalLicenceBackUrl\":\"法人证件背面照片地址\" }");
        $request->setMerchantContactInfo("{ \"contactName\":\"联系人姓名\", \"contactMobile\":\"联系人手机号\", \"contactEmail\":\"联系人邮箱\", \"contactLicenceNo\":\"联系人证件号码\" ,\"servicePhone\":\"客服电话\"}");
        $request->setBusinessAddressInfo("{ \"province\":\"经营省\", \"city\":\"经营市\", \"district\":\"经营区\", \"address\":\"经营地址\" }");
        $request->setAccountInfo("{\"bankAccountName\":\"开户名称\",\"bankAccountType\":\"银行账户类型\",\"bankAccountNo\":\"银行账户号码\",\"bankCardTag\":\"[\\\"SETTLEMENT\\\",\\\"WITHDRAW\\\"]\",\"authorizationUrl\":\"https://staticres.yeepay.com/xxx.文件后缀\",\"bankCode\":\"开户总行编码\"}");
        $request->setBankToken("{ \"deviceIp\":\"交易ip\", \"token\":\"交易口令\"}");
        try{
            $response = self::$client->merchantInfoModify($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->merchantInfoModify: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function merchantSupplementQualificationQueryTest()
    {
        $request = new Model\MerchantSupplementQualificationQueryRequest();

        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->merchantSupplementQualificationQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->merchantSupplementQualificationQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function merchantSupplementQualificationSubmitTest()
    {
        $request = new Model\MerchantSupplementQualificationSubmitRequest();

        $request->setMerchantNo("1234567890");
        $request->setQualifications("[   {     \"value\": \"https://staticres.yeepay.com/xxx.文件后缀\",     \"key\": \"LEGAL_LICENCE_FRONT_URL\"   },   {     \"value\": \"https://staticres.yeepay.com/xxx.文件后缀\",     \"key\": \"LEGAL_LICENCE_BACK_URL\"   } ]");
        try{
            $response = self::$client->merchantSupplementQualificationSubmit($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->merchantSupplementQualificationSubmit: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function merchantWechatauthCancelTest()
    {
        $request = new Model\MerchantWechatauthCancelRequest();

        $request->setApplymentId("applymentId_example");
        $request->setRequestNo("requestNo_example");
        $request->setSubMerchantNo("subMerchantNo_example");
        $request->setReportFee("reportFee_example");
        $request->setChannelId("channelId_example");
        try{
            $response = self::$client->merchantWechatauthCancel($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->merchantWechatauthCancel: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function merchantWechatauthQueryTest()
    {
        $request = new Model\MerchantWechatauthQueryRequest();

        $request->setApplymentId("applymentId_example");
        $request->setSubMerchantNo("subMerchantNo_example");
        $request->setReportFee("reportFee_example");
        $request->setRequestNo("requestNo_example");
        try{
            $response = self::$client->merchantWechatauthQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->merchantWechatauthQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function notifyRepeatV2Test()
    {
        $request = new Model\NotifyRepeatV2Request();

        $request->setRequestNo("requestNo_example");
        $request->setApplicationNo("applicationNo_example");
        $request->setType("type_example");
        try{
            $response = self::$client->notifyRepeatV2($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->notifyRepeatV2: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function productFeeModifyV2Test()
    {
        $request = new Model\ProductFeeModifyV2Request();

        $request->setRequestNo("requestNo_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setNotifyUrl("notifyUrl_example");
        $request->setProductInfo("[{\"productCode\":\"MERCHANT_SCAN_ALIPAY_OFFLINE\",\"rateType\":\"SINGLE_PERCENT\",\"percentRate\":\"0.1\",\"undertaker\":\"PLATFORM_MERCHANT\",\"paymentMethod\":\"REAL_TIME\"}]");
        $request->setProductQualificationInfo("{\"mcc\":\"7829\",\"paymentScene\":\"RLZYFW\",\"systemScreenshotUrl\":\"https://staticres.yeepay.com/xxx.文件后缀\",\"specialPermitProcessUrl\":\"https://staticres.yeepay.com/xxx.文件后缀\",\"agreementPhotoUrl\":\"https://staticres.yeepay.com/xxx.文件后缀\"}");
        $request->setSettlementAccountInfo("{ \"settlementDirection\":\"结算方向\", \"bankCode\":\"开户总行编码\", \"bankAccountType\":\"银行账户类型\", \"bankCardNo\":\"银行账户号码\" }");
        $request->setFunctionService("[\"SHARE\"]");
        $request->setFunctionServiceQualificationInfo("{\"shareScene\":\"FZ_FJ001\",\"shareCertificate\":\"https://staticres.yeepay.com/xxx.文件后缀\"}");
        try{
            $response = self::$client->productFeeModifyV2($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->productFeeModifyV2: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function productFeeQueryV2Test()
    {
        $request = new Model\ProductFeeQueryV2Request();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setProductCode("MERCHANT_SCAN_ALIPAY_OFFLINE");
        try{
            $response = self::$client->productFeeQueryV2($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->productFeeQueryV2: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function productIncrementSettleOpenV2Test()
    {
        $request = new Model\ProductIncrementSettleOpenV2Request();

        $request->setRequestNo("requestNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setProductInfo("[{\"productCode\":\"S0\",\"rateType\":\"FIXED_MIX_PERCENT\",\"percentRate\":\"0.1\",\"fixedRate\":\"111\"}]");
        $request->setNotifyUrl("notifyUrl_example");
        try{
            $response = self::$client->productIncrementSettleOpenV2($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->productIncrementSettleOpenV2: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function productModifyQueryV2Test()
    {
        $request = new Model\ProductModifyQueryV2Request();

        $request->setRequestNo("0adc579914d541f8baa3be75387846f1");
        try{
            $response = self::$client->productModifyQueryV2($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->productModifyQueryV2: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function qualificationSupplementaryTest()
    {
        $request = new Model\QualificationSupplementaryRequest();

        $request->setRequestNo("requestNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setRegistAddress("registAddress_example");
        $request->setManageSection("manageSection_example");
        $request->setCorporationFrontUrl("corporationFrontUrl_example");
        $request->setCorporationBackUrl("corporationBackUrl_example");
        $request->setCorporationExpiryDate("corporationExpiryDate_example");
        $request->setQualificationUrl("qualificationUrl_example");
        $request->setQualificationExpiryDate("qualificationExpiryDate_example");
        try{
            $response = self::$client->qualificationSupplementary($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->qualificationSupplementary: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function registerContributeIndexV2Test()
    {
        $request = new Model\RegisterContributeIndexV2Request();

        $request->setRequestNo("示例值：REQ6437657876");
        $request->setNotifyUrl("示例值：http://www.shili111.com");
        $request->setReturnUrl("示例值：http://www.shili.com");
        $request->setMobile("159****8288");
        $request->setName("示例值：张三");
        $request->setIdCardNo("示例值：430422199001236704");
        $request->setWalletUserNo("示例值：User89849");
        try{
            $response = self::$client->registerContributeIndexV2($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->registerContributeIndexV2: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function registerContributeMerchantV2Test()
    {
        $request = new Model\RegisterContributeMerchantV2Request();

        $request->setRequestNo("YBRWQQH20210622XXXXXX");
        $request->setBusinessRole("SETTLED_MERCHANT");
        $request->setMerchantSubjectInfo("{         \"licenceUrl\":\"商户证件照片地址\",         \"signName\":\"商户签约名\",         \"signType\":\"商户签约类型\",         \"licenceNo\":\"商户证件号码\",         \"shortName\":\"商户简称\"     }");
        $request->setMerchantCorporationInfo("{ \"legalName\":\"法人名称\", \"legalLicenceType\":\"法人证件类型\", \"legalLicenceNo\":\"法人证件编号\", \"legalLicenceFrontUrl\":\"法人证件正面照片地址\", \"legalLicenceBackUrl\":\"法人证件背面照片地址\" }");
        $request->setMerchantContactInfo("{ \"contactName\":\"联系人姓名\", \"contactMobile\":\"联系人手机号\", \"contactEmail\":\"联系人邮箱\", \"contactLicenceNo\":\"联系人证件号码\" ,\"servicePhone\":\"客服电话\"}");
        $request->setIndustryCategoryInfo("{ \"primaryIndustryCategory\":\"一级行业分类编码\", \"secondaryIndustryCategory\":\"二级行业分类编码\" }");
        $request->setBusinessAddressInfo("{ \"province\":\"经营省\", \"city\":\"经营市\", \"district\":\"经营区\", \"address\":\"经营地址\" }");
        $request->setSettlementAccountInfo("{ \"settlementDirection\":\"结算方向\", \"bankCode\":\"开户总行编码\", \"bankAccountType\":\"银行账户类型\", \"bankCardNo\":\"银行账户号码\" }");
        $request->setNotifyUrl("https://notify.merchant.com/xxx");
        $request->setProductInfo("[{\"productCode\":\"MERCHANT_SCAN_ALIPAY_OFFLINE\",\"rateType\":\"SINGLE_PERCENT\",\"percentRate\":\"0.1\"},{\"productCode\":\"MERCHANT_SCAN_UNIONPAY_CREDIT\",\"rateType\":\"SINGLE_FIXED\",\"fixedRate\":\"1\"},{\"productCode\":\"T1\",\"rateType\":\"SINGLE_PERCENT\",\"percentRate\":\"0.1\"}]");
        $request->setProductQualificationInfo("{\"mcc\":\"7829\",\"paymentScene\":\"RLZYFW\",\"systemScreenshotUrl\":\"https://staticres.yeepay.com/xxx.文件后缀\",\"specialPermitProcessUrl\":\"https://staticres.yeepay.com/xxx.文件后缀\",\"agreementPhotoUrl\":\"https://staticres.yeepay.com/xxx.文件后缀\"}");
        $request->setFunctionService("[\"SHARE\"]");
        $request->setFunctionServiceQualificationInfo("{\"shareScene\":\"FZ_FJ001\",\"shareCertificate\":\"https://staticres.yeepay.com/xxx.文件后缀\"}");
        try{
            $response = self::$client->registerContributeMerchantV2($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->registerContributeMerchantV2: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function registerContributeMicroV2Test()
    {
        $request = new Model\RegisterContributeMicroV2Request();

        $request->setRequestNo("YBRWQQH20210622XXXXXX");
        $request->setBusinessRole("SETTLED_MERCHANT");
        $request->setMerchantSubjectInfo("{ \"signName\":\"商户签约名\", \"shortName\":\"商户简称\" }");
        $request->setMerchantCorporationInfo("{ \"legalLicenceType\":\"法人证件类型\", \"legalLicenceNo\":\"法人证件编号\", \"legalLicenceFrontUrl\":\"法人证件正面照片地址\", \"legalLicenceBackUrl\":\"法人证件背面照片地址\",  \"mobile\":\"法人手机号\"  }");
        $request->setBusinessAddressInfo("{ \"province\":\"经营省\", \"city\":\"经营市\", \"district\":\"经营区\", \"address\":\"经营地址\" }");
        $request->setAccountInfo("{  \"bankAccountType\":\"银行账户类型\", \"bankCardNo\":\"银行账户号码\",  \"bankCode\":\"开户总行编码”  }");
        $request->setNotifyUrl("https://notify.merchant.com/xxx");
        $request->setProductInfo("[{\"productCode\":\"MERCHANT_SCAN_ALIPAY_OFFLINE\",\"rateType\":\"SINGLE_PERCENT\",\"percentRate\":\"0.1\"},{\"productCode\":\"MERCHANT_SCAN_UNIONPAY_CREDIT\",\"rateType\":\"SINGLE_FIXED\",\"fixedRate\":\"1\"},{\"productCode\":\"T1\",\"rateType\":\"SINGLE_PERCENT\",\"percentRate\":\"0.1\"}]");
        $request->setProductQualificationInfo("{\"paymentScene\": \"RLZYFW\",   \"systemScreenshotUrl\": \"https://staticres.yeepay.com/xxx.文件后缀\",   \"specialPermitProcessUrl\": \"https://staticres.yeepay.com/xxx.文件后缀\",   \"agreementPhotoUrl\": \"https://staticres.yeepay.com/xxx.文件后缀\" }");
        $request->setFunctionService("[\"SHARE\"]");
        $request->setFunctionServiceQualificationInfo("{\"shareScene\":\"FZ_FJ001\",\"shareCertificate\":\"https://staticres.yeepay.com/xxx.文件后缀\"}");
        try{
            $response = self::$client->registerContributeMicroV2($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->registerContributeMicroV2: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function registerQueryV2Test()
    {
        $request = new Model\RegisterQueryV2Request();

        $request->setRequestNo("0adc579914d541f8baa3be75387846f1");
        try{
            $response = self::$client->registerQueryV2($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->registerQueryV2: ', $e->getMessage(), PHP_EOL;
        }
    }
}
