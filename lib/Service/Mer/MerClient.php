<?php


namespace Yeepay\Yop\Sdk\Service\Mer;


use Yeepay\Yop\Sdk\Client\ClientExecutionParams;
use Yeepay\Yop\Sdk\Client\ClientHandler;
use Yeepay\Yop\Sdk\Client\ClientParams;
use Yeepay\Yop\Sdk\Exception\YopClientException;
use Yeepay\Yop\Sdk\Service\Mer\Model as Model;

class MerClient
{
    /**
     * @var ClientHandler
     */
    private $clientHandler;

    /**
     * MerClient constructor.
     * @param ClientParams $clientParams
     */
    function __construct(ClientParams $clientParams)
    {
        $this->clientHandler = new ClientHandler($clientParams);
    }

    /**
     * @param Model\AuthStateQueryV2Request $request
     * @return Model\AuthStateQueryV2Response
     * @throws YopClientException
     */
    public function authStateQueryV2(Model\AuthStateQueryV2Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getMerchantNo() == null) {
            throw new YopClientException("request.merchantNo is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AuthStateQueryV2RequestMarshaller::getInstance(),
            Model\AuthStateQueryV2ResponseUnMarshaller::getInstance());
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
        $clientExecutionParams = new ClientExecutionParams($request, Model\BankAccountOpenRequestMarshaller::getInstance(),
            Model\BankAccountOpenResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BankAccountOpenQueryRequest $request
     * @return Model\BankAccountOpenQueryResponse
     * @throws YopClientException
     */
    public function bankAccountOpenQuery(Model\BankAccountOpenQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getMerchantNo() == null) {
            throw new YopClientException("request.merchantNo is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BankAccountOpenQueryRequestMarshaller::getInstance(),
            Model\BankAccountOpenQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\MerchantDisposeQueryRequest $request
     * @return Model\MerchantDisposeQueryResponse
     * @throws YopClientException
     */
    public function merchantDisposeQuery(Model\MerchantDisposeQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\MerchantDisposeQueryRequestMarshaller::getInstance(),
            Model\MerchantDisposeQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\MerchantDisposeUnfreezeRequest $request
     * @return Model\MerchantDisposeUnfreezeResponse
     * @throws YopClientException
     */
    public function merchantDisposeUnfreeze(Model\MerchantDisposeUnfreezeRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\MerchantDisposeUnfreezeRequestMarshaller::getInstance(),
            Model\MerchantDisposeUnfreezeResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\MerchantInfoModifyRequest $request
     * @return Model\MerchantInfoModifyResponse
     * @throws YopClientException
     */
    public function merchantInfoModify(Model\MerchantInfoModifyRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\MerchantInfoModifyRequestMarshaller::getInstance(),
            Model\MerchantInfoModifyResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\MerchantSupplementQualificationQueryRequest $request
     * @return Model\MerchantSupplementQualificationQueryResponse
     * @throws YopClientException
     */
    public function merchantSupplementQualificationQuery(Model\MerchantSupplementQualificationQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\MerchantSupplementQualificationQueryRequestMarshaller::getInstance(),
            Model\MerchantSupplementQualificationQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\MerchantSupplementQualificationSubmitRequest $request
     * @return Model\MerchantSupplementQualificationSubmitResponse
     * @throws YopClientException
     */
    public function merchantSupplementQualificationSubmit(Model\MerchantSupplementQualificationSubmitRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\MerchantSupplementQualificationSubmitRequestMarshaller::getInstance(),
            Model\MerchantSupplementQualificationSubmitResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\MerchantWechatauthCancelRequest $request
     * @return Model\MerchantWechatauthCancelResponse
     * @throws YopClientException
     */
    public function merchantWechatauthCancel(Model\MerchantWechatauthCancelRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\MerchantWechatauthCancelRequestMarshaller::getInstance(),
            Model\MerchantWechatauthCancelResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\MerchantWechatauthQueryRequest $request
     * @return Model\MerchantWechatauthQueryResponse
     * @throws YopClientException
     */
    public function merchantWechatauthQuery(Model\MerchantWechatauthQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getApplymentId() == null) {
            throw new YopClientException("request.applymentId is required.");
        }
        if ($request->getSubMerchantNo() == null) {
            throw new YopClientException("request.subMerchantNo is required.");
        }
        if ($request->getReportFee() == null) {
            throw new YopClientException("request.reportFee is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\MerchantWechatauthQueryRequestMarshaller::getInstance(),
            Model\MerchantWechatauthQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\NotifyRepeatV2Request $request
     * @return Model\NotifyRepeatV2Response
     * @throws YopClientException
     */
    public function notifyRepeatV2(Model\NotifyRepeatV2Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\NotifyRepeatV2RequestMarshaller::getInstance(),
            Model\NotifyRepeatV2ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\ProductFeeModifyV2Request $request
     * @return Model\ProductFeeModifyV2Response
     * @throws YopClientException
     */
    public function productFeeModifyV2(Model\ProductFeeModifyV2Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ProductFeeModifyV2RequestMarshaller::getInstance(),
            Model\ProductFeeModifyV2ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\ProductFeeQueryV2Request $request
     * @return Model\ProductFeeQueryV2Response
     * @throws YopClientException
     */
    public function productFeeQueryV2(Model\ProductFeeQueryV2Request $request)
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
        $clientExecutionParams = new ClientExecutionParams($request, Model\ProductFeeQueryV2RequestMarshaller::getInstance(),
            Model\ProductFeeQueryV2ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\ProductIncrementSettleOpenV2Request $request
     * @return Model\ProductIncrementSettleOpenV2Response
     * @throws YopClientException
     */
    public function productIncrementSettleOpenV2(Model\ProductIncrementSettleOpenV2Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ProductIncrementSettleOpenV2RequestMarshaller::getInstance(),
            Model\ProductIncrementSettleOpenV2ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\ProductModifyQueryV2Request $request
     * @return Model\ProductModifyQueryV2Response
     * @throws YopClientException
     */
    public function productModifyQueryV2(Model\ProductModifyQueryV2Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getRequestNo() == null) {
            throw new YopClientException("request.requestNo is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ProductModifyQueryV2RequestMarshaller::getInstance(),
            Model\ProductModifyQueryV2ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\QualificationSupplementaryRequest $request
     * @return Model\QualificationSupplementaryResponse
     * @throws YopClientException
     */
    public function qualificationSupplementary(Model\QualificationSupplementaryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\QualificationSupplementaryRequestMarshaller::getInstance(),
            Model\QualificationSupplementaryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\RegisterContributeIndexV2Request $request
     * @return Model\RegisterContributeIndexV2Response
     * @throws YopClientException
     */
    public function registerContributeIndexV2(Model\RegisterContributeIndexV2Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\RegisterContributeIndexV2RequestMarshaller::getInstance(),
            Model\RegisterContributeIndexV2ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\RegisterContributeMerchantV2Request $request
     * @return Model\RegisterContributeMerchantV2Response
     * @throws YopClientException
     */
    public function registerContributeMerchantV2(Model\RegisterContributeMerchantV2Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\RegisterContributeMerchantV2RequestMarshaller::getInstance(),
            Model\RegisterContributeMerchantV2ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\RegisterContributeMicroV2Request $request
     * @return Model\RegisterContributeMicroV2Response
     * @throws YopClientException
     */
    public function registerContributeMicroV2(Model\RegisterContributeMicroV2Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\RegisterContributeMicroV2RequestMarshaller::getInstance(),
            Model\RegisterContributeMicroV2ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\RegisterQueryV2Request $request
     * @return Model\RegisterQueryV2Response
     * @throws YopClientException
     */
    public function registerQueryV2(Model\RegisterQueryV2Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getRequestNo() == null) {
            throw new YopClientException("request.requestNo is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\RegisterQueryV2RequestMarshaller::getInstance(),
            Model\RegisterQueryV2ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
}
