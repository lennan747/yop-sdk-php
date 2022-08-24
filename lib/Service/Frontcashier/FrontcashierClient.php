<?php


namespace Yeepay\Yop\Sdk\Service\Frontcashier;


use Yeepay\Yop\Sdk\Client\ClientExecutionParams;
use Yeepay\Yop\Sdk\Client\ClientHandler;
use Yeepay\Yop\Sdk\Client\ClientParams;
use Yeepay\Yop\Sdk\Exception\YopClientException;
use Yeepay\Yop\Sdk\Service\Frontcashier\Model as Model;

class FrontcashierClient
{
    /**
     * @var ClientHandler
     */
    private $clientHandler;

    /**
     * FrontcashierClient constructor.
     * @param ClientParams $clientParams
     */
    function __construct(ClientParams $clientParams)
    {
        $this->clientHandler = new ClientHandler($clientParams);
    }

    /**
     * @param Model\BankTransferPayRequest $request
     * @return Model\BankTransferPayResponse
     * @throws YopClientException
     */
    public function bankTransferPay(Model\BankTransferPayRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BankTransferPayRequestMarshaller::getInstance(),
            Model\BankTransferPayResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BankTransferQueryRequest $request
     * @return Model\BankTransferQueryResponse
     * @throws YopClientException
     */
    public function bankTransferQuery(Model\BankTransferQueryRequest $request)
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
        if ($request->getOrderId() == null) {
            throw new YopClientException("request.orderId is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BankTransferQueryRequestMarshaller::getInstance(),
            Model\BankTransferQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BindcardConfirmRequest $request
     * @return Model\BindcardConfirmResponse
     * @throws YopClientException
     */
    public function bindcardConfirm(Model\BindcardConfirmRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BindcardConfirmRequestMarshaller::getInstance(),
            Model\BindcardConfirmResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BindcardConfirmV2Request $request
     * @return Model\BindcardConfirmV2Response
     * @throws YopClientException
     */
    public function bindcardConfirmV2(Model\BindcardConfirmV2Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BindcardConfirmV2RequestMarshaller::getInstance(),
            Model\BindcardConfirmV2ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BindcardGetcardbinRequest $request
     * @return Model\BindcardGetcardbinResponse
     * @throws YopClientException
     */
    public function bindcardGetcardbin(Model\BindcardGetcardbinRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BindcardGetcardbinRequestMarshaller::getInstance(),
            Model\BindcardGetcardbinResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BindcardPayerrequestRequest $request
     * @return Model\BindcardPayerrequestResponse
     * @throws YopClientException
     */
    public function bindcardPayerrequest(Model\BindcardPayerrequestRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getBody() == null) {
            throw new YopClientException("request.body is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BindcardPayerrequestRequestMarshaller::getInstance(),
            Model\BindcardPayerrequestResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BindcardQueryorderRequest $request
     * @return Model\BindcardQueryorderResponse
     * @throws YopClientException
     */
    public function bindcardQueryorder(Model\BindcardQueryorderRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BindcardQueryorderRequestMarshaller::getInstance(),
            Model\BindcardQueryorderResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BindcardQueryorderinfoRequest $request
     * @return Model\BindcardQueryorderinfoResponse
     * @throws YopClientException
     */
    public function bindcardQueryorderinfo(Model\BindcardQueryorderinfoRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getMerchantNo() == null) {
            throw new YopClientException("request.merchantNo is required.");
        }
        if ($request->getMerchantFlowId() == null) {
            throw new YopClientException("request.merchantFlowId is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BindcardQueryorderinfoRequestMarshaller::getInstance(),
            Model\BindcardQueryorderinfoResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BindcardRequestRequest $request
     * @return Model\BindcardRequestResponse
     * @throws YopClientException
     */
    public function bindcardRequest(Model\BindcardRequestRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BindcardRequestRequestMarshaller::getInstance(),
            Model\BindcardRequestResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BindcardRequestV2Request $request
     * @return Model\BindcardRequestV2Response
     * @throws YopClientException
     */
    public function bindcardRequestV2(Model\BindcardRequestV2Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BindcardRequestV2RequestMarshaller::getInstance(),
            Model\BindcardRequestV2ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BindpayConfirmRequest $request
     * @return Model\BindpayConfirmResponse
     * @throws YopClientException
     */
    public function bindpayConfirm(Model\BindpayConfirmRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BindpayConfirmRequestMarshaller::getInstance(),
            Model\BindpayConfirmResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BindpayRequestRequest $request
     * @return Model\BindpayRequestResponse
     * @throws YopClientException
     */
    public function bindpayRequest(Model\BindpayRequestRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BindpayRequestRequestMarshaller::getInstance(),
            Model\BindpayRequestResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BindpaySendsmsRequest $request
     * @return Model\BindpaySendsmsResponse
     * @throws YopClientException
     */
    public function bindpaySendsms(Model\BindpaySendsmsRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BindpaySendsmsRequestMarshaller::getInstance(),
            Model\BindpaySendsmsResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\FastbindcardRequestRequest $request
     * @return Model\FastbindcardRequestResponse
     * @throws YopClientException
     */
    public function fastbindcardRequest(Model\FastbindcardRequestRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\FastbindcardRequestRequestMarshaller::getInstance(),
            Model\FastbindcardRequestResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\GetcardbinRequest $request
     * @return Model\GetcardbinResponse
     * @throws YopClientException
     */
    public function getcardbin(Model\GetcardbinRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\GetcardbinRequestMarshaller::getInstance(),
            Model\GetcardbinResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\UpopActivescanPayRequest $request
     * @return Model\UpopActivescanPayResponse
     * @throws YopClientException
     */
    public function upopActivescanPay(Model\UpopActivescanPayRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\UpopActivescanPayRequestMarshaller::getInstance(),
            Model\UpopActivescanPayResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\UpopActivescanQuerypayeeorderRequest $request
     * @return Model\UpopActivescanQuerypayeeorderResponse
     * @throws YopClientException
     */
    public function upopActivescanQuerypayeeorder(Model\UpopActivescanQuerypayeeorderRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\UpopActivescanQuerypayeeorderRequestMarshaller::getInstance(),
            Model\UpopActivescanQuerypayeeorderResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\UpopActivescanQuerypayresultRequest $request
     * @return Model\UpopActivescanQuerypayresultResponse
     * @throws YopClientException
     */
    public function upopActivescanQuerypayresult(Model\UpopActivescanQuerypayresultRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getBody() == null) {
            throw new YopClientException("request.body is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\UpopActivescanQuerypayresultRequestMarshaller::getInstance(),
            Model\UpopActivescanQuerypayresultResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\UpopPassivescanValidateRequest $request
     * @return Model\UpopPassivescanValidateResponse
     * @throws YopClientException
     */
    public function upopPassivescanValidate(Model\UpopPassivescanValidateRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\UpopPassivescanValidateRequestMarshaller::getInstance(),
            Model\UpopPassivescanValidateResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\YjzfBindpayrequestRequest $request
     * @return Model\YjzfBindpayrequestResponse
     * @throws YopClientException
     */
    public function yjzfBindpayrequest(Model\YjzfBindpayrequestRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\YjzfBindpayrequestRequestMarshaller::getInstance(),
            Model\YjzfBindpayrequestResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\YjzfFirstpayrequestRequest $request
     * @return Model\YjzfFirstpayrequestResponse
     * @throws YopClientException
     */
    public function yjzfFirstpayrequest(Model\YjzfFirstpayrequestRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\YjzfFirstpayrequestRequestMarshaller::getInstance(),
            Model\YjzfFirstpayrequestResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\YjzfPaymentconfirmRequest $request
     * @return Model\YjzfPaymentconfirmResponse
     * @throws YopClientException
     */
    public function yjzfPaymentconfirm(Model\YjzfPaymentconfirmRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\YjzfPaymentconfirmRequestMarshaller::getInstance(),
            Model\YjzfPaymentconfirmResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\YjzfSendsmsRequest $request
     * @return Model\YjzfSendsmsResponse
     * @throws YopClientException
     */
    public function yjzfSendsms(Model\YjzfSendsmsRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\YjzfSendsmsRequestMarshaller::getInstance(),
            Model\YjzfSendsmsResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
}
