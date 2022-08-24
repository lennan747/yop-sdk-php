<?php


namespace Yeepay\Yop\Sdk\Service\MWallet;


use PHPUnit\Framework\TestCase;
use Yeepay\Yop\Sdk\Config\AppSdkConfig;
use Yeepay\Yop\Sdk\Exception\YopClientException;
use Yeepay\Yop\Sdk\Service\MWallet\Model as Model;

class MWalletClientTest extends TestCase
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
        self::$client = MWalletClientBuilder::builder($appSdkConfig)->build();
    }

    /**
     * @test
     */
    public function accountOpenTest()
    {
        $request = new Model\AccountOpenRequest();

        $request->setName("张三");
        $request->setCertificateType("IDENTITY_CARD");
        $request->setCertificateNo("certificateNo_example");
        $request->setRequestNo("REQ6437657876");
        $request->setMerchantNo("10012345679");
        $request->setMerchantUserNo("User10232");
        $request->setMobile("15522919123");
        $request->setParentMerchantNo("10012345678");
        try{
            $response = self::$client->accountOpen($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MWalletClient->accountOpen: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function accountQueryTest()
    {
        $request = new Model\AccountQueryRequest();

        $request->setMerchantUserNo("User001");
        $request->setMerchantNo("10012345679");
        $request->setParentMerchantNo("10012345678");
        try{
            $response = self::$client->accountQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MWalletClient->accountQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function accountQueryBalanceTest()
    {
        $request = new Model\AccountQueryBalanceRequest();

        $request->setMerchantMemberNo("merchantMemberNo_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setAccountType("accountType_example");
        $request->setElecAccount("elecAccount_example");
        try{
            $response = self::$client->accountQueryBalance($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MWalletClient->accountQueryBalance: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function bankAccountActivationTest()
    {
        $request = new Model\BankAccountActivationRequest();

        $request->setMerchantMemberNo("merchantMemberNo_example");
        $request->setAccountNo("accountNo_example");
        $request->setRequestNo("requestNo_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->bankAccountActivation($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MWalletClient->bankAccountActivation: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function bankAccountConfirmTest()
    {
        $request = new Model\BankAccountConfirmRequest();

        $request->setRequestNo("requestNo_example");
        $request->setShortMsg("shortMsg_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->bankAccountConfirm($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MWalletClient->bankAccountConfirm: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function bankAccountOpenTest()
    {
        $request = new Model\BankAccountOpenRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\MWallet\Model\BankAccountOpenBankAccountRequestDTOParam());
        try{
            $response = self::$client->bankAccountOpen($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MWalletClient->bankAccountOpen: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function bankAccountQueryActivationTest()
    {
        $request = new Model\BankAccountQueryActivationRequest();

        $request->setRequestNo("requestNo_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->bankAccountQueryActivation($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MWalletClient->bankAccountQueryActivation: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function bankAccountQueryComplaintTest()
    {
        $request = new Model\BankAccountQueryComplaintRequest();

        $request->setMerchantMemberNo("merchantMemberNo_example");
        $request->setAccountNo("accountNo_example");
        $request->setBankTradeNo("bankTradeNo_example");
        $request->setTradeTime("tradeTime_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->bankAccountQueryComplaint($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MWalletClient->bankAccountQueryComplaint: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function bankAccountQueryOpenResultTest()
    {
        $request = new Model\BankAccountQueryOpenResultRequest();

        $request->setRequestNo("requestNo_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->bankAccountQueryOpenResult($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MWalletClient->bankAccountQueryOpenResult: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function bankAccountQueryTradeTest()
    {
        $request = new Model\BankAccountQueryTradeRequest();

        $request->setMerchantMemberNo("merchantMemberNo_example");
        $request->setAccountNo("accountNo_example");
        $request->setBeginDate("beginDate_example");
        $request->setEndDate("endDate_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setLoanFlag("loanFlag_example");
        $request->setStartNum(56);
        $request->setQueryNum(56);
        $request->setQueryToken("queryToken_example");
        $request->setQueryTime("queryTime_example");
        try{
            $response = self::$client->bankAccountQueryTrade($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MWalletClient->bankAccountQueryTrade: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function bankAccountQueryWithdrawTest()
    {
        $request = new Model\BankAccountQueryWithdrawRequest();

        $request->setRequestNo("requestNo_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->bankAccountQueryWithdraw($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MWalletClient->bankAccountQueryWithdraw: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function bankAccountSendMsgTest()
    {
        $request = new Model\BankAccountSendMsgRequest();

        $request->setRequestNo("requestNo_example");
        $request->setMerchantMemberNo("merchantMemberNo_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->bankAccountSendMsg($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MWalletClient->bankAccountSendMsg: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function bankAccountUpdateKeyWordsTest()
    {
        $request = new Model\BankAccountUpdateKeyWordsRequest();

        $request->setOperateType("operateType_example");
        $request->setKeyWordStrs("keyWordStrs_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->bankAccountUpdateKeyWords($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MWalletClient->bankAccountUpdateKeyWords: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function bankAccountWithdrawTest()
    {
        $request = new Model\BankAccountWithdrawRequest();

        $request->setMerchantMemberNo("merchantMemberNo_example");
        $request->setRequestNo("requestNo_example");
        $request->setAccountNo("accountNo_example");
        $request->setAccountType("accountType_example");
        $request->setOneAccountBankNo("oneAccountBankNo_example");
        $request->setBindBankPhone("bindBankPhone_example");
        $request->setWithdrawPrice(1.2);
        $request->setRemark("remark_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->bankAccountWithdraw($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MWalletClient->bankAccountWithdraw: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function cardQueryTest()
    {
        $request = new Model\CardQueryRequest();

        $request->setReturnUrl("http://www.shili.com/");
        $request->setRequestNo("REQ394032930");
        $request->setMerchantNo("10012345679");
        $request->setMerchantUserNo("User53423");
        $request->setParentMerchantNo("10012345678");
        try{
            $response = self::$client->cardQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MWalletClient->cardQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function memberQueryTest()
    {
        $request = new Model\MemberQueryRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setExternalUserId("User8232");
        $request->setMemberNo("memberNo_example");
        try{
            $response = self::$client->memberQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MWalletClient->memberQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function passwordManageTest()
    {
        $request = new Model\PasswordManageRequest();

        $request->setReturnUrl("http://www.shili.com");
        $request->setRequestNo("REQ4235232");
        $request->setMerchantNo("10012345679");
        $request->setMerchantUserNo("User8923");
        $request->setParentMerchantNo("10012345678");
        try{
            $response = self::$client->passwordManage($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MWalletClient->passwordManage: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function rechargeInitiateTest()
    {
        $request = new Model\RechargeInitiateRequest();

        $request->setAmount("10.5");
        $request->setReturnUrl("http://www.shili.com");
        $request->setNotifyUrl("http://www.shili.com/notify");
        $request->setRequestNo("REQ655498");
        $request->setMerchantNo("10012345679");
        $request->setMerchantUserNo("User89849");
        $request->setParentMerchantNo("10012345678");
        try{
            $response = self::$client->rechargeInitiate($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MWalletClient->rechargeInitiate: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function rechargeQueryTest()
    {
        $request = new Model\RechargeQueryRequest();

        $request->setRequestNo("REQ8390423");
        $request->setMerchantNo("10012345679");
        $request->setParentMerchantNo("10012345678");
        try{
            $response = self::$client->rechargeQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MWalletClient->rechargeQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function tradeOrderTest()
    {
        $request = new Model\TradeOrderRequest();

        $request->setRequestNo("trade1564042424954");
        $request->setParentMerchantNo("10040040565");
        $request->setMerchantNo("10040020562");
        $request->setMerchantUserNo("LC1563447603047");
        $request->setPayAmount("0.01");
        $request->setNotifyUrl("https://www.testurl.com/callback");
        $request->setReturnUrl("https://www.testurl.com/html");
        $request->setProductName("电脑");
        $request->setRemark("remark_example");
        $request->setFundProcessType("DELAY_SETTLE");
        try{
            $response = self::$client->tradeOrder($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MWalletClient->tradeOrder: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function transferB2cInitiateTest()
    {
        $request = new Model\TransferB2cInitiateRequest();

        $request->setParentMerchantNo("10012345678");
        $request->setFromMerchantNo("10012345676");
        $request->setToMerchantNo("10012345679");
        $request->setToMerchantUserNo("User90958");
        $request->setRequestNo("REQ58290");
        $request->setOrderAmount("10.01");
        $request->setFeeChargeSide("feeChargeSide_example");
        $request->setNotifyUrl("http://www.shili.com/notify");
        try{
            $response = self::$client->transferB2cInitiate($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MWalletClient->transferB2cInitiate: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function transferB2cMarketTest()
    {
        $request = new Model\TransferB2cMarketRequest();

        $request->setParentMerchantNo("10012345678");
        $request->setFromMerchantNo("10012345676");
        $request->setToMerchantNo("10012345679");
        $request->setToMerchantUserNo("User90958");
        $request->setRequestNo("REQ58290");
        $request->setOrderAmount("10.01");
        $request->setFeeChargeSide("feeChargeSide_example");
        $request->setNotifyUrl("http://www.shili.com/notify");
        try{
            $response = self::$client->transferB2cMarket($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MWalletClient->transferB2cMarket: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function transferB2cQueryTest()
    {
        $request = new Model\TransferB2cQueryRequest();

        $request->setParentMerchantNo("10012345678");
        $request->setFromMerchantNo("10012345679");
        $request->setRequestNo("REQ12345678");
        $request->setBusinessNo("businessNo_example");
        try{
            $response = self::$client->transferB2cQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MWalletClient->transferB2cQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function walletIndexV2Test()
    {
        $request = new Model\WalletIndexV2Request();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setMerchantUserNo("User8232");
        $request->setUserMerchantNo("10012345678");
        $request->setName("张三");
        $request->setCertificateType("certificateType_example");
        $request->setCertificateNo("certificateNo_example");
        $request->setMobile("15522919123");
        $request->setReturnUrl("http://www.shili.com");
        $request->setNotifyUrl("http://www.shili.com/notify");
        $request->setRequestNo("REQ6437657876");
        try{
            $response = self::$client->walletIndexV2($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MWalletClient->walletIndexV2: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function withdrawInitiateTest()
    {
        $request = new Model\WithdrawInitiateRequest();

        $request->setAmount("10.5");
        $request->setWithdrawType("0");
        $request->setReturnUrl("http://www.shili.com");
        $request->setNotifyUrl("http://www.shili.com/notify");
        $request->setRequestNo("REQ85293");
        $request->setMerchantNo("10012345679");
        $request->setMerchantUserNo("User8232");
        $request->setFeeInnerType("解释说明：内扣即用户发起10元，手续费0.1元，则用户提现到账9.9，扣用户余额10元；外扣即用户发起10元，手续费0.1元，用户提现到账10元，扣用户余额10.1元");
        $request->setParentMerchantNo("10012345678");
        try{
            $response = self::$client->withdrawInitiate($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MWalletClient->withdrawInitiate: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function withdrawQueryTest()
    {
        $request = new Model\WithdrawQueryRequest();

        $request->setRequestNo("REQ82942");
        $request->setMerchantNo("10012345679");
        $request->setParentMerchantNo("10012345678");
        try{
            $response = self::$client->withdrawQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MWalletClient->withdrawQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
}
