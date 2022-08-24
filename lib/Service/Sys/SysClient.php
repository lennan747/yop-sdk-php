<?php


namespace Yeepay\Yop\Sdk\Service\Sys;


use Yeepay\Yop\Sdk\Client\ClientExecutionParams;
use Yeepay\Yop\Sdk\Client\ClientHandler;
use Yeepay\Yop\Sdk\Client\ClientParams;
use Yeepay\Yop\Sdk\Exception\YopClientException;
use Yeepay\Yop\Sdk\Service\Sys\Model as Model;

class SysClient
{
    /**
     * @var ClientHandler
     */
    private $clientHandler;

    /**
     * SysClient constructor.
     * @param ClientParams $clientParams
     */
    function __construct(ClientParams $clientParams)
    {
        $this->clientHandler = new ClientHandler($clientParams);
    }

    /**
     * @param Model\MerchantQualUploadRequest $request
     * @return Model\MerchantQualUploadResponse
     * @throws YopClientException
     */
    public function merchantQualUpload(Model\MerchantQualUploadRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\MerchantQualUploadRequestMarshaller::getInstance(),
            Model\MerchantQualUploadResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\TradeDividebackRequest $request
     * @return Model\TradeDividebackResponse
     * @throws YopClientException
     */
    public function tradeDivideback(Model\TradeDividebackRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\TradeDividebackRequestMarshaller::getInstance(),
            Model\TradeDividebackResponseUnMarshaller::getInstance());
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
     * @param Model\TradeOrderqueryRequest $request
     * @return Model\TradeOrderqueryResponse
     * @throws YopClientException
     */
    public function tradeOrderquery(Model\TradeOrderqueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\TradeOrderqueryRequestMarshaller::getInstance(),
            Model\TradeOrderqueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\TradeRefundRequest $request
     * @return Model\TradeRefundResponse
     * @throws YopClientException
     */
    public function tradeRefund(Model\TradeRefundRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\TradeRefundRequestMarshaller::getInstance(),
            Model\TradeRefundResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\TradeRefundqueryRequest $request
     * @return Model\TradeRefundqueryResponse
     * @throws YopClientException
     */
    public function tradeRefundquery(Model\TradeRefundqueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\TradeRefundqueryRequestMarshaller::getInstance(),
            Model\TradeRefundqueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
}
