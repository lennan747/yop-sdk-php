<?php


namespace Yeepay\Yop\Sdk\Service\Nccashierapi;


use Yeepay\Yop\Sdk\Client\ClientExecutionParams;
use Yeepay\Yop\Sdk\Client\ClientHandler;
use Yeepay\Yop\Sdk\Client\ClientParams;
use Yeepay\Yop\Sdk\Exception\YopClientException;
use Yeepay\Yop\Sdk\Service\Nccashierapi\Model as Model;

class NccashierapiClient
{
    /**
     * @var ClientHandler
     */
    private $clientHandler;

    /**
     * NccashierapiClient constructor.
     * @param ClientParams $clientParams
     */
    function __construct(ClientParams $clientParams)
    {
        $this->clientHandler = new ClientHandler($clientParams);
    }

    /**
     * @param Model\ApiPayRequest $request
     * @return Model\ApiPayResponse
     * @throws YopClientException
     */
    public function apiPay(Model\ApiPayRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ApiPayRequestMarshaller::getInstance(),
            Model\ApiPayResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\OrderCloseRequest $request
     * @return Model\OrderCloseResponse
     * @throws YopClientException
     */
    public function orderClose(Model\OrderCloseRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\OrderCloseRequestMarshaller::getInstance(),
            Model\OrderCloseResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
}
