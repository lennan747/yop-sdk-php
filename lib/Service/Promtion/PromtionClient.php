<?php


namespace Yeepay\Yop\Sdk\Service\Promtion;


use Yeepay\Yop\Sdk\Client\ClientExecutionParams;
use Yeepay\Yop\Sdk\Client\ClientHandler;
use Yeepay\Yop\Sdk\Client\ClientParams;
use Yeepay\Yop\Sdk\Exception\YopClientException;
use Yeepay\Yop\Sdk\Service\Promtion\Model as Model;

class PromtionClient
{
    /**
     * @var ClientHandler
     */
    private $clientHandler;

    /**
     * PromtionClient constructor.
     * @param ClientParams $clientParams
     */
    function __construct(ClientParams $clientParams)
    {
        $this->clientHandler = new ClientHandler($clientParams);
    }

    /**
     * @param Model\PointCreateRequest $request
     * @return Model\PointCreateResponse
     * @throws YopClientException
     */
    public function pointCreate(Model\PointCreateRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\PointCreateRequestMarshaller::getInstance(),
            Model\PointCreateResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\PointOperateRequest $request
     * @return Model\PointOperateResponse
     * @throws YopClientException
     */
    public function pointOperate(Model\PointOperateRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\PointOperateRequestMarshaller::getInstance(),
            Model\PointOperateResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\PointQueryRequest $request
     * @return Model\PointQueryResponse
     * @throws YopClientException
     */
    public function pointQuery(Model\PointQueryRequest $request)
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
        $clientExecutionParams = new ClientExecutionParams($request, Model\PointQueryRequestMarshaller::getInstance(),
            Model\PointQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\SubsidyApplyRequest $request
     * @return Model\SubsidyApplyResponse
     * @throws YopClientException
     */
    public function subsidyApply(Model\SubsidyApplyRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\SubsidyApplyRequestMarshaller::getInstance(),
            Model\SubsidyApplyResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\SubsidyBackRequest $request
     * @return Model\SubsidyBackResponse
     * @throws YopClientException
     */
    public function subsidyBack(Model\SubsidyBackRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\SubsidyBackRequestMarshaller::getInstance(),
            Model\SubsidyBackResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\SubsidyBackQueryRequest $request
     * @return Model\SubsidyBackQueryResponse
     * @throws YopClientException
     */
    public function subsidyBackQuery(Model\SubsidyBackQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getSubsidyRequestId() == null) {
            throw new YopClientException("request.subsidyRequestId is required.");
        }
        if ($request->getSubsidyBackRequestId() == null) {
            throw new YopClientException("request.subsidyBackRequestId is required.");
        }
        if ($request->getParentMerchantNo() == null) {
            throw new YopClientException("request.parentMerchantNo is required.");
        }
        if ($request->getMerchantNo() == null) {
            throw new YopClientException("request.merchantNo is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\SubsidyBackQueryRequestMarshaller::getInstance(),
            Model\SubsidyBackQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\SubsidyQueryRequest $request
     * @return Model\SubsidyQueryResponse
     * @throws YopClientException
     */
    public function subsidyQuery(Model\SubsidyQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getOrderId() == null) {
            throw new YopClientException("request.orderId is required.");
        }
        if ($request->getSubsidyRequestId() == null) {
            throw new YopClientException("request.subsidyRequestId is required.");
        }
        if ($request->getParentMerchantNo() == null) {
            throw new YopClientException("request.parentMerchantNo is required.");
        }
        if ($request->getMerchantNo() == null) {
            throw new YopClientException("request.merchantNo is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\SubsidyQueryRequestMarshaller::getInstance(),
            Model\SubsidyQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
}
