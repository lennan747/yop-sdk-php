<?php


namespace Yeepay\Yop\Sdk\Service\SupplierRemit;


use Yeepay\Yop\Sdk\Client\ClientExecutionParams;
use Yeepay\Yop\Sdk\Client\ClientHandler;
use Yeepay\Yop\Sdk\Client\ClientParams;
use Yeepay\Yop\Sdk\Exception\YopClientException;
use Yeepay\Yop\Sdk\Model\YosDownloadResponse;
use Yeepay\Yop\Sdk\Model\Transform\YosDownloadResponseUnMarshaller;
use Yeepay\Yop\Sdk\Service\SupplierRemit\Model as Model;

class SupplierRemitClient
{
    /**
     * @var ClientHandler
     */
    private $clientHandler;

    /**
     * SupplierRemitClient constructor.
     * @param ClientParams $clientParams
     */
    function __construct(ClientParams $clientParams)
    {
        $this->clientHandler = new ClientHandler($clientParams);
    }

    /**
     * @param Model\BillDownloadRequest $request
     * @return YosDownloadResponse
     * @throws YopClientException
     */
    public function billDownload(Model\BillDownloadRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getRemitDate() == null) {
            throw new YopClientException("request.remitDate is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BillDownloadRequestMarshaller::getInstance(),
            YosDownloadResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
}
