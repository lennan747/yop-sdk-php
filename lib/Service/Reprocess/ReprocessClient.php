<?php


namespace Yeepay\Yop\Sdk\Service\Reprocess;


use Yeepay\Yop\Sdk\Client\ClientExecutionParams;
use Yeepay\Yop\Sdk\Client\ClientHandler;
use Yeepay\Yop\Sdk\Client\ClientParams;
use Yeepay\Yop\Sdk\Exception\YopClientException;
use Yeepay\Yop\Sdk\Service\Reprocess\Model as Model;

class ReprocessClient
{
    /**
     * @var ClientHandler
     */
    private $clientHandler;

    /**
     * ReprocessClient constructor.
     * @param ClientParams $clientParams
     */
    function __construct(ClientParams $clientParams)
    {
        $this->clientHandler = new ClientHandler($clientParams);
    }

    /**
     * @param Model\MigrateBankOrderRequest $request
     * @return Model\MigrateBankOrderResponse
     * @throws YopClientException
     */
    public function migrateBankOrder(Model\MigrateBankOrderRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\MigrateBankOrderRequestMarshaller::getInstance(),
            Model\MigrateBankOrderResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\MigrateBankQueryRequest $request
     * @return Model\MigrateBankQueryResponse
     * @throws YopClientException
     */
    public function migrateBankQuery(Model\MigrateBankQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getMigrateRequestId() == null) {
            throw new YopClientException("request.migrateRequestId is required.");
        }
        if ($request->getParentMerchantNo() == null) {
            throw new YopClientException("request.parentMerchantNo is required.");
        }
        if ($request->getMerchantNo() == null) {
            throw new YopClientException("request.merchantNo is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\MigrateBankQueryRequestMarshaller::getInstance(),
            Model\MigrateBankQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
}
