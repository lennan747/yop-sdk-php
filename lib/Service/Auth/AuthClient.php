<?php


namespace Yeepay\Yop\Sdk\Service\Auth;


use Yeepay\Yop\Sdk\Client\ClientExecutionParams;
use Yeepay\Yop\Sdk\Client\ClientHandler;
use Yeepay\Yop\Sdk\Client\ClientParams;
use Yeepay\Yop\Sdk\Exception\YopClientException;
use Yeepay\Yop\Sdk\Service\Auth\Model as Model;

class AuthClient
{
    /**
     * @var ClientHandler
     */
    private $clientHandler;

    /**
     * AuthClient constructor.
     * @param ClientParams $clientParams
     */
    function __construct(ClientParams $clientParams)
    {
        $this->clientHandler = new ClientHandler($clientParams);
    }

    /**
     * @param Model\FaceAuthRequest $request
     * @return Model\FaceAuthResponse
     * @throws YopClientException
     */
    public function faceAuth(Model\FaceAuthRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\FaceAuthRequestMarshaller::getInstance(),
            Model\FaceAuthResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\FaceAuthKycRequest $request
     * @return Model\FaceAuthKycResponse
     * @throws YopClientException
     */
    public function faceAuthKyc(Model\FaceAuthKycRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\FaceAuthKycRequestMarshaller::getInstance(),
            Model\FaceAuthKycResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\FaceAuthKycQueryRequest $request
     * @return Model\FaceAuthKycQueryResponse
     * @throws YopClientException
     */
    public function faceAuthKycQuery(Model\FaceAuthKycQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getRequestNo() == null) {
            throw new YopClientException("request.requestNo is required.");
        }
        if ($request->getParentMerchantNo() == null) {
            throw new YopClientException("request.parentMerchantNo is required.");
        }
        if ($request->getMerchantNo() == null) {
            throw new YopClientException("request.merchantNo is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\FaceAuthKycQueryRequestMarshaller::getInstance(),
            Model\FaceAuthKycQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\FaceAuthResultQueryRequest $request
     * @return Model\FaceAuthResultQueryResponse
     * @throws YopClientException
     */
    public function faceAuthResultQuery(Model\FaceAuthResultQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getRequestNo() == null) {
            throw new YopClientException("request.requestNo is required.");
        }
        if ($request->getParentMerchantNo() == null) {
            throw new YopClientException("request.parentMerchantNo is required.");
        }
        if ($request->getMerchantNo() == null) {
            throw new YopClientException("request.merchantNo is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\FaceAuthResultQueryRequestMarshaller::getInstance(),
            Model\FaceAuthResultQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\MultipleAuthRequest $request
     * @return Model\MultipleAuthResponse
     * @throws YopClientException
     */
    public function multipleAuth(Model\MultipleAuthRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\MultipleAuthRequestMarshaller::getInstance(),
            Model\MultipleAuthResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\OcrIdcardRequest $request
     * @return Model\OcrIdcardResponse
     * @throws YopClientException
     */
    public function ocrIdcard(Model\OcrIdcardRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\OcrIdcardRequestMarshaller::getInstance(),
            Model\OcrIdcardResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
}
