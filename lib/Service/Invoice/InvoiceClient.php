<?php


namespace Yeepay\Yop\Sdk\Service\Invoice;


use Yeepay\Yop\Sdk\Client\ClientExecutionParams;
use Yeepay\Yop\Sdk\Client\ClientHandler;
use Yeepay\Yop\Sdk\Client\ClientParams;
use Yeepay\Yop\Sdk\Exception\YopClientException;
use Yeepay\Yop\Sdk\Service\Invoice\Model as Model;

class InvoiceClient
{
    /**
     * @var ClientHandler
     */
    private $clientHandler;

    /**
     * InvoiceClient constructor.
     * @param ClientParams $clientParams
     */
    function __construct(ClientParams $clientParams)
    {
        $this->clientHandler = new ClientHandler($clientParams);
    }

    /**
     * @param Model\ApplyRequest $request
     * @return Model\ApplyResponse
     * @throws YopClientException
     */
    public function apply(Model\ApplyRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ApplyRequestMarshaller::getInstance(),
            Model\ApplyResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\FeeQueryRequest $request
     * @return Model\FeeQueryResponse
     * @throws YopClientException
     */
    public function feeQuery(Model\FeeQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getMerchantNo() == null) {
            throw new YopClientException("request.merchantNo is required.");
        }
        if ($request->getParentMerchantNo() == null) {
            throw new YopClientException("request.parentMerchantNo is required.");
        }
        if ($request->getChargingDateStart() == null) {
            throw new YopClientException("request.chargingDateStart is required.");
        }
        if ($request->getChargingDateEnd() == null) {
            throw new YopClientException("request.chargingDateEnd is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\FeeQueryRequestMarshaller::getInstance(),
            Model\FeeQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\InfoModifyRequest $request
     * @return Model\InfoModifyResponse
     * @throws YopClientException
     */
    public function infoModify(Model\InfoModifyRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\InfoModifyRequestMarshaller::getInstance(),
            Model\InfoModifyResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\InfoQueryRequest $request
     * @return Model\InfoQueryResponse
     * @throws YopClientException
     */
    public function infoQuery(Model\InfoQueryRequest $request)
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
        $clientExecutionParams = new ClientExecutionParams($request, Model\InfoQueryRequestMarshaller::getInstance(),
            Model\InfoQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\RecordQueryRequest $request
     * @return Model\RecordQueryResponse
     * @throws YopClientException
     */
    public function recordQuery(Model\RecordQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getParentMerchantNo() == null) {
            throw new YopClientException("request.parentMerchantNo is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\RecordQueryRequestMarshaller::getInstance(),
            Model\RecordQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
}
