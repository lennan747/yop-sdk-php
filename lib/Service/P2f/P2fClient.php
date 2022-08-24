<?php


namespace Yeepay\Yop\Sdk\Service\P2f;


use Yeepay\Yop\Sdk\Client\ClientExecutionParams;
use Yeepay\Yop\Sdk\Client\ClientHandler;
use Yeepay\Yop\Sdk\Client\ClientParams;
use Yeepay\Yop\Sdk\Exception\YopClientException;
use Yeepay\Yop\Sdk\Service\P2f\Model as Model;

class P2fClient
{
    /**
     * @var ClientHandler
     */
    private $clientHandler;

    /**
     * P2fClient constructor.
     * @param ClientParams $clientParams
     */
    function __construct(ClientParams $clientParams)
    {
        $this->clientHandler = new ClientHandler($clientParams);
    }

    /**
     * @param Model\ZzdfOrderRequest $request
     * @return Model\ZzdfOrderResponse
     * @throws YopClientException
     */
    public function zzdfOrder(Model\ZzdfOrderRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ZzdfOrderRequestMarshaller::getInstance(),
            Model\ZzdfOrderResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\ZzdfQueryRequest $request
     * @return Model\ZzdfQueryResponse
     * @throws YopClientException
     */
    public function zzdfQuery(Model\ZzdfQueryRequest $request)
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
        $clientExecutionParams = new ClientExecutionParams($request, Model\ZzdfQueryRequestMarshaller::getInstance(),
            Model\ZzdfQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
}
