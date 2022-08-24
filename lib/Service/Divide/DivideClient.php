<?php


namespace Yeepay\Yop\Sdk\Service\Divide;


use Yeepay\Yop\Sdk\Client\ClientExecutionParams;
use Yeepay\Yop\Sdk\Client\ClientHandler;
use Yeepay\Yop\Sdk\Client\ClientParams;
use Yeepay\Yop\Sdk\Exception\YopClientException;
use Yeepay\Yop\Sdk\Service\Divide\Model as Model;

class DivideClient
{
    /**
     * @var ClientHandler
     */
    private $clientHandler;

    /**
     * DivideClient constructor.
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
     * @param Model\BackRequest $request
     * @return Model\BackResponse
     * @throws YopClientException
     */
    public function back(Model\BackRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BackRequestMarshaller::getInstance(),
            Model\BackResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BackQueryRequest $request
     * @return Model\BackQueryResponse
     * @throws YopClientException
     */
    public function backQuery(Model\BackQueryRequest $request)
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
        if ($request->getUniqueOrderNo() == null) {
            throw new YopClientException("request.uniqueOrderNo is required.");
        }
        if ($request->getDivideBackRequestId() == null) {
            throw new YopClientException("request.divideBackRequestId is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BackQueryRequestMarshaller::getInstance(),
            Model\BackQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BackReceiptDownloadRequest $request
     * @return Model\BackReceiptDownloadResponse
     * @throws YopClientException
     */
    public function backReceiptDownload(Model\BackReceiptDownloadRequest $request)
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
        if ($request->getDivideBackRequestId() == null) {
            throw new YopClientException("request.divideBackRequestId is required.");
        }
        if ($request->getUniqueOrderNo() == null) {
            throw new YopClientException("request.uniqueOrderNo is required.");
        }
        if ($request->getLedgerNo() == null) {
            throw new YopClientException("request.ledgerNo is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BackReceiptDownloadRequestMarshaller::getInstance(),
            Model\BackReceiptDownloadResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\CompleteRequest $request
     * @return Model\CompleteResponse
     * @throws YopClientException
     */
    public function complete(Model\CompleteRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\CompleteRequestMarshaller::getInstance(),
            Model\CompleteResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\DivideRequest $request
     * @return Model\DivideResponse
     * @throws YopClientException
     */
    public function divide(Model\DivideRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\DivideRequestMarshaller::getInstance(),
            Model\DivideResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\DivideQueryRequest $request
     * @return Model\DivideQueryResponse
     * @throws YopClientException
     */
    public function divideQuery(Model\DivideQueryRequest $request)
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
        if ($request->getDivideRequestId() == null) {
            throw new YopClientException("request.divideRequestId is required.");
        }
        if ($request->getOrderId() == null) {
            throw new YopClientException("request.orderId is required.");
        }
        if ($request->getUniqueOrderNo() == null) {
            throw new YopClientException("request.uniqueOrderNo is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\DivideQueryRequestMarshaller::getInstance(),
            Model\DivideQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\DividebackRequest $request
     * @return Model\DividebackResponse
     * @throws YopClientException
     */
    public function divideback(Model\DividebackRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\DividebackRequestMarshaller::getInstance(),
            Model\DividebackResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\DividebackQueryRequest $request
     * @return Model\DividebackQueryResponse
     * @throws YopClientException
     */
    public function dividebackQuery(Model\DividebackQueryRequest $request)
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
        if ($request->getUniqueOrderNo() == null) {
            throw new YopClientException("request.uniqueOrderNo is required.");
        }
        if ($request->getDivideBackRequestId() == null) {
            throw new YopClientException("request.divideBackRequestId is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\DividebackQueryRequestMarshaller::getInstance(),
            Model\DividebackQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\QueryRequest $request
     * @return Model\QueryResponse
     * @throws YopClientException
     */
    public function query(Model\QueryRequest $request)
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
        if ($request->getDivideRequestId() == null) {
            throw new YopClientException("request.divideRequestId is required.");
        }
        if ($request->getOrderId() == null) {
            throw new YopClientException("request.orderId is required.");
        }
        if ($request->getUniqueOrderNo() == null) {
            throw new YopClientException("request.uniqueOrderNo is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\QueryRequestMarshaller::getInstance(),
            Model\QueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\ReceiptDownloadRequest $request
     * @return Model\ReceiptDownloadResponse
     * @throws YopClientException
     */
    public function receiptDownload(Model\ReceiptDownloadRequest $request)
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
        if ($request->getUniqueOrderNo() == null) {
            throw new YopClientException("request.uniqueOrderNo is required.");
        }
        if ($request->getDivideRequestId() == null) {
            throw new YopClientException("request.divideRequestId is required.");
        }
        if ($request->getLedgerNo() == null) {
            throw new YopClientException("request.ledgerNo is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ReceiptDownloadRequestMarshaller::getInstance(),
            Model\ReceiptDownloadResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
}
