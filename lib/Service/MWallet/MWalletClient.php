<?php


namespace Yeepay\Yop\Sdk\Service\MWallet;


use Yeepay\Yop\Sdk\Client\ClientExecutionParams;
use Yeepay\Yop\Sdk\Client\ClientHandler;
use Yeepay\Yop\Sdk\Client\ClientParams;
use Yeepay\Yop\Sdk\Exception\YopClientException;
use Yeepay\Yop\Sdk\Service\MWallet\Model as Model;

class MWalletClient
{
    /**
     * @var ClientHandler
     */
    private $clientHandler;

    /**
     * MWalletClient constructor.
     * @param ClientParams $clientParams
     */
    function __construct(ClientParams $clientParams)
    {
        $this->clientHandler = new ClientHandler($clientParams);
    }

    /**
     * @param Model\AccountOpenRequest $request
     * @return Model\AccountOpenResponse
     * @throws YopClientException
     */
    public function accountOpen(Model\AccountOpenRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AccountOpenRequestMarshaller::getInstance(),
            Model\AccountOpenResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\AccountQueryRequest $request
     * @return Model\AccountQueryResponse
     * @throws YopClientException
     */
    public function accountQuery(Model\AccountQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getMerchantUserNo() == null) {
            throw new YopClientException("request.merchantUserNo is required.");
        }
        if ($request->getMerchantNo() == null) {
            throw new YopClientException("request.merchantNo is required.");
        }
        if ($request->getParentMerchantNo() == null) {
            throw new YopClientException("request.parentMerchantNo is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AccountQueryRequestMarshaller::getInstance(),
            Model\AccountQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\AccountQueryBalanceRequest $request
     * @return Model\AccountQueryBalanceResponse
     * @throws YopClientException
     */
    public function accountQueryBalance(Model\AccountQueryBalanceRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getMerchantMemberNo() == null) {
            throw new YopClientException("request.merchantMemberNo is required.");
        }
        if ($request->getParentMerchantNo() == null) {
            throw new YopClientException("request.parentMerchantNo is required.");
        }
        if ($request->getMerchantNo() == null) {
            throw new YopClientException("request.merchantNo is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AccountQueryBalanceRequestMarshaller::getInstance(),
            Model\AccountQueryBalanceResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BankAccountActivationRequest $request
     * @return Model\BankAccountActivationResponse
     * @throws YopClientException
     */
    public function bankAccountActivation(Model\BankAccountActivationRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BankAccountActivationRequestMarshaller::getInstance(),
            Model\BankAccountActivationResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BankAccountConfirmRequest $request
     * @return Model\BankAccountConfirmResponse
     * @throws YopClientException
     */
    public function bankAccountConfirm(Model\BankAccountConfirmRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BankAccountConfirmRequestMarshaller::getInstance(),
            Model\BankAccountConfirmResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BankAccountOpenRequest $request
     * @return Model\BankAccountOpenResponse
     * @throws YopClientException
     */
    public function bankAccountOpen(Model\BankAccountOpenRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getBody() == null) {
            throw new YopClientException("request.body is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BankAccountOpenRequestMarshaller::getInstance(),
            Model\BankAccountOpenResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BankAccountQueryActivationRequest $request
     * @return Model\BankAccountQueryActivationResponse
     * @throws YopClientException
     */
    public function bankAccountQueryActivation(Model\BankAccountQueryActivationRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getRequestNo() == null) {
            throw new YopClientException("request.requestNo is required.");
        }
        if ($request->getParentMerchantNo() == null) {
            throw new YopClientException("request.parentMerchantNo is required.");
        }
        if ($request->getMerchantNo() == null) {
            throw new YopClientException("request.merchantNo is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BankAccountQueryActivationRequestMarshaller::getInstance(),
            Model\BankAccountQueryActivationResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BankAccountQueryComplaintRequest $request
     * @return Model\BankAccountQueryComplaintResponse
     * @throws YopClientException
     */
    public function bankAccountQueryComplaint(Model\BankAccountQueryComplaintRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getMerchantMemberNo() == null) {
            throw new YopClientException("request.merchantMemberNo is required.");
        }
        if ($request->getAccountNo() == null) {
            throw new YopClientException("request.accountNo is required.");
        }
        if ($request->getBankTradeNo() == null) {
            throw new YopClientException("request.bankTradeNo is required.");
        }
        if ($request->getTradeTime() == null) {
            throw new YopClientException("request.tradeTime is required.");
        }
        if ($request->getParentMerchantNo() == null) {
            throw new YopClientException("request.parentMerchantNo is required.");
        }
        if ($request->getMerchantNo() == null) {
            throw new YopClientException("request.merchantNo is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BankAccountQueryComplaintRequestMarshaller::getInstance(),
            Model\BankAccountQueryComplaintResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BankAccountQueryOpenResultRequest $request
     * @return Model\BankAccountQueryOpenResultResponse
     * @throws YopClientException
     */
    public function bankAccountQueryOpenResult(Model\BankAccountQueryOpenResultRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getRequestNo() == null) {
            throw new YopClientException("request.requestNo is required.");
        }
        if ($request->getParentMerchantNo() == null) {
            throw new YopClientException("request.parentMerchantNo is required.");
        }
        if ($request->getMerchantNo() == null) {
            throw new YopClientException("request.merchantNo is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BankAccountQueryOpenResultRequestMarshaller::getInstance(),
            Model\BankAccountQueryOpenResultResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BankAccountQueryTradeRequest $request
     * @return Model\BankAccountQueryTradeResponse
     * @throws YopClientException
     */
    public function bankAccountQueryTrade(Model\BankAccountQueryTradeRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getMerchantMemberNo() == null) {
            throw new YopClientException("request.merchantMemberNo is required.");
        }
        if ($request->getAccountNo() == null) {
            throw new YopClientException("request.accountNo is required.");
        }
        if ($request->getBeginDate() == null) {
            throw new YopClientException("request.beginDate is required.");
        }
        if ($request->getEndDate() == null) {
            throw new YopClientException("request.endDate is required.");
        }
        if ($request->getParentMerchantNo() == null) {
            throw new YopClientException("request.parentMerchantNo is required.");
        }
        if ($request->getMerchantNo() == null) {
            throw new YopClientException("request.merchantNo is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BankAccountQueryTradeRequestMarshaller::getInstance(),
            Model\BankAccountQueryTradeResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BankAccountQueryWithdrawRequest $request
     * @return Model\BankAccountQueryWithdrawResponse
     * @throws YopClientException
     */
    public function bankAccountQueryWithdraw(Model\BankAccountQueryWithdrawRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getRequestNo() == null) {
            throw new YopClientException("request.requestNo is required.");
        }
        if ($request->getParentMerchantNo() == null) {
            throw new YopClientException("request.parentMerchantNo is required.");
        }
        if ($request->getMerchantNo() == null) {
            throw new YopClientException("request.merchantNo is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BankAccountQueryWithdrawRequestMarshaller::getInstance(),
            Model\BankAccountQueryWithdrawResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BankAccountSendMsgRequest $request
     * @return Model\BankAccountSendMsgResponse
     * @throws YopClientException
     */
    public function bankAccountSendMsg(Model\BankAccountSendMsgRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BankAccountSendMsgRequestMarshaller::getInstance(),
            Model\BankAccountSendMsgResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BankAccountUpdateKeyWordsRequest $request
     * @return Model\BankAccountUpdateKeyWordsResponse
     * @throws YopClientException
     */
    public function bankAccountUpdateKeyWords(Model\BankAccountUpdateKeyWordsRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BankAccountUpdateKeyWordsRequestMarshaller::getInstance(),
            Model\BankAccountUpdateKeyWordsResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BankAccountWithdrawRequest $request
     * @return Model\BankAccountWithdrawResponse
     * @throws YopClientException
     */
    public function bankAccountWithdraw(Model\BankAccountWithdrawRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BankAccountWithdrawRequestMarshaller::getInstance(),
            Model\BankAccountWithdrawResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\CardQueryRequest $request
     * @return Model\CardQueryResponse
     * @throws YopClientException
     */
    public function cardQuery(Model\CardQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\CardQueryRequestMarshaller::getInstance(),
            Model\CardQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\MemberQueryRequest $request
     * @return Model\MemberQueryResponse
     * @throws YopClientException
     */
    public function memberQuery(Model\MemberQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getParentMerchantNo() == null) {
            throw new YopClientException("request.parentMerchantNo is required.");
        }
        if ($request->getMerchantNo() == null) {
            throw new YopClientException("request.merchantNo is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\MemberQueryRequestMarshaller::getInstance(),
            Model\MemberQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\PasswordManageRequest $request
     * @return Model\PasswordManageResponse
     * @throws YopClientException
     */
    public function passwordManage(Model\PasswordManageRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\PasswordManageRequestMarshaller::getInstance(),
            Model\PasswordManageResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\RechargeInitiateRequest $request
     * @return Model\RechargeInitiateResponse
     * @throws YopClientException
     */
    public function rechargeInitiate(Model\RechargeInitiateRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\RechargeInitiateRequestMarshaller::getInstance(),
            Model\RechargeInitiateResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\RechargeQueryRequest $request
     * @return Model\RechargeQueryResponse
     * @throws YopClientException
     */
    public function rechargeQuery(Model\RechargeQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getRequestNo() == null) {
            throw new YopClientException("request.requestNo is required.");
        }
        if ($request->getMerchantNo() == null) {
            throw new YopClientException("request.merchantNo is required.");
        }
        if ($request->getParentMerchantNo() == null) {
            throw new YopClientException("request.parentMerchantNo is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\RechargeQueryRequestMarshaller::getInstance(),
            Model\RechargeQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\TradeOrderRequest $request
     * @return Model\TradeOrderResponse
     * @throws YopClientException
     */
    public function tradeOrder(Model\TradeOrderRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\TradeOrderRequestMarshaller::getInstance(),
            Model\TradeOrderResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\TransferB2cInitiateRequest $request
     * @return Model\TransferB2cInitiateResponse
     * @throws YopClientException
     */
    public function transferB2cInitiate(Model\TransferB2cInitiateRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\TransferB2cInitiateRequestMarshaller::getInstance(),
            Model\TransferB2cInitiateResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\TransferB2cMarketRequest $request
     * @return Model\TransferB2cMarketResponse
     * @throws YopClientException
     */
    public function transferB2cMarket(Model\TransferB2cMarketRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\TransferB2cMarketRequestMarshaller::getInstance(),
            Model\TransferB2cMarketResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\TransferB2cQueryRequest $request
     * @return Model\TransferB2cQueryResponse
     * @throws YopClientException
     */
    public function transferB2cQuery(Model\TransferB2cQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getParentMerchantNo() == null) {
            throw new YopClientException("request.parentMerchantNo is required.");
        }
        if ($request->getFromMerchantNo() == null) {
            throw new YopClientException("request.fromMerchantNo is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\TransferB2cQueryRequestMarshaller::getInstance(),
            Model\TransferB2cQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\WalletIndexV2Request $request
     * @return Model\WalletIndexV2Response
     * @throws YopClientException
     */
    public function walletIndexV2(Model\WalletIndexV2Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\WalletIndexV2RequestMarshaller::getInstance(),
            Model\WalletIndexV2ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\WithdrawInitiateRequest $request
     * @return Model\WithdrawInitiateResponse
     * @throws YopClientException
     */
    public function withdrawInitiate(Model\WithdrawInitiateRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\WithdrawInitiateRequestMarshaller::getInstance(),
            Model\WithdrawInitiateResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\WithdrawQueryRequest $request
     * @return Model\WithdrawQueryResponse
     * @throws YopClientException
     */
    public function withdrawQuery(Model\WithdrawQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getRequestNo() == null) {
            throw new YopClientException("request.requestNo is required.");
        }
        if ($request->getMerchantNo() == null) {
            throw new YopClientException("request.merchantNo is required.");
        }
        if ($request->getParentMerchantNo() == null) {
            throw new YopClientException("request.parentMerchantNo is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\WithdrawQueryRequestMarshaller::getInstance(),
            Model\WithdrawQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
}
