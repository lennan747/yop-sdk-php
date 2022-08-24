<?php


namespace Yeepay\Yop\Sdk\Service\Pos;


use Yeepay\Yop\Sdk\Client\ClientExecutionParams;
use Yeepay\Yop\Sdk\Client\ClientHandler;
use Yeepay\Yop\Sdk\Client\ClientParams;
use Yeepay\Yop\Sdk\Exception\YopClientException;
use Yeepay\Yop\Sdk\Service\Pos\Model as Model;

class PosClient
{
    /**
     * @var ClientHandler
     */
    private $clientHandler;

    /**
     * PosClient constructor.
     * @param ClientParams $clientParams
     */
    function __construct(ClientParams $clientParams)
    {
        $this->clientHandler = new ClientHandler($clientParams);
    }

    /**
     * @param Model\GetPosInfoDtosRequest $request
     * @return Model\GetPosInfoDtosResponse
     * @throws YopClientException
     */
    public function getPosInfoDtos(Model\GetPosInfoDtosRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\GetPosInfoDtosRequestMarshaller::getInstance(),
            Model\GetPosInfoDtosResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\InstallPosWithProductRequest $request
     * @return Model\InstallPosWithProductResponse
     * @throws YopClientException
     */
    public function installPosWithProduct(Model\InstallPosWithProductRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getBody() == null) {
            throw new YopClientException("request.body is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\InstallPosWithProductRequestMarshaller::getInstance(),
            Model\InstallPosWithProductResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\UnSynBindPosRequest $request
     * @return Model\UnSynBindPosResponse
     * @throws YopClientException
     */
    public function unSynBindPos(Model\UnSynBindPosRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\UnSynBindPosRequestMarshaller::getInstance(),
            Model\UnSynBindPosResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
}
