<?php


namespace Yeepay\Yop\Sdk\Service\Common;


use Yeepay\Yop\Sdk\Client\ClientExecutionParams;
use Yeepay\Yop\Sdk\Client\ClientHandler;
use Yeepay\Yop\Sdk\Client\ClientParams;
use Yeepay\Yop\Sdk\Exception\YopClientException;
use Yeepay\Yop\Sdk\Model\Transform\YosDownloadResponseUnMarshaller;
use Yeepay\Yop\Sdk\Model\YosDownloadResponse;
use Yeepay\Yop\Sdk\Service\Common\Model\YopRequest;
use Yeepay\Yop\Sdk\Service\Common\Model\YopRequestMarshaller;
use Yeepay\Yop\Sdk\Service\Common\Model\YopResponse;
use Yeepay\Yop\Sdk\Service\Common\Model\YopResponseUnMarshaller;

class YopClient
{
    /**
     * @var ClientHandler
     */
    private $clientHandler;

    /**
     * YopClient constructor.
     * @param ClientParams $clientParams
     */
    function __construct(ClientParams $clientParams)
    {
        $this->clientHandler = new ClientHandler($clientParams);
    }

    /**
     * @param YopRequest $request
     * @return YopResponse
     * @throws YopClientException
     */
    public function sendRequest(YopRequest $request)
    {
        $clientExecutionParams = new ClientExecutionParams($request, YopRequestMarshaller::getInstance(), new YopResponseUnMarshaller());
        return $this->clientHandler->execute($clientExecutionParams);
    }

    /**
     * @param YopRequest $request
     * @return YosDownloadResponse
     * @throws YopClientException
     */
    public function sendDownloadRequest(YopRequest $request)
    {
        $clientExecutionParams = new ClientExecutionParams($request, YopRequestMarshaller::getInstance(), YosDownloadResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }

}