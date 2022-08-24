<?php


namespace Yeepay\Yop\Sdk\Service\Cnppay;


use Yeepay\Yop\Sdk\Client\ClientExecutionParams;
use Yeepay\Yop\Sdk\Client\ClientHandler;
use Yeepay\Yop\Sdk\Client\ClientParams;
use Yeepay\Yop\Sdk\Exception\YopClientException;
use Yeepay\Yop\Sdk\Service\Cnppay\Model as Model;

class CnppayClient
{
    /**
     * @var ClientHandler
     */
    private $clientHandler;

    /**
     * CnppayClient constructor.
     * @param ClientParams $clientParams
     */
    function __construct(ClientParams $clientParams)
    {
        $this->clientHandler = new ClientHandler($clientParams);
    }

    /**
     * @param Model\BankLimitQueryRequest $request
     * @return Model\BankLimitQueryResponse
     * @throws YopClientException
     */
    public function bankLimitQuery(Model\BankLimitQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getMerchantNo() == null) {
            throw new YopClientException("request.merchantNo is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BankLimitQueryRequestMarshaller::getInstance(),
            Model\BankLimitQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
}
