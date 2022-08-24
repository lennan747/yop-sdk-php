<?php


namespace Yeepay\Yop\Sdk\Service\Bill;


use Yeepay\Yop\Sdk\Client\ClientExecutionParams;
use Yeepay\Yop\Sdk\Client\ClientHandler;
use Yeepay\Yop\Sdk\Client\ClientParams;
use Yeepay\Yop\Sdk\Exception\YopClientException;
use Yeepay\Yop\Sdk\Model\YosDownloadResponse;
use Yeepay\Yop\Sdk\Model\Transform\YosDownloadResponseUnMarshaller;
use Yeepay\Yop\Sdk\Service\Bill\Model as Model;

class BillClient
{
    /**
     * @var ClientHandler
     */
    private $clientHandler;

    /**
     * BillClient constructor.
     * @param ClientParams $clientParams
     */
    function __construct(ClientParams $clientParams)
    {
        $this->clientHandler = new ClientHandler($clientParams);
    }

    /**
     * @param Model\DownloadRequest $request
     * @return YosDownloadResponse
     * @throws YopClientException
     */
    public function download(Model\DownloadRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getBizType() == null) {
            throw new YopClientException("request.bizType is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\DownloadRequestMarshaller::getInstance(),
            YosDownloadResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
}
