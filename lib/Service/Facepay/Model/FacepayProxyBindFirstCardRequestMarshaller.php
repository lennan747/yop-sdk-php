<?php


namespace Yeepay\Yop\Sdk\Service\Facepay\Model;


use Yeepay\Yop\Sdk\Http\Headers;
use Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Yeepay\Yop\Sdk\Internal\Request;
use Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Yeepay\Yop\Sdk\Utils\UUIDUtils;

class FacepayProxyBindFirstCardRequestMarshaller implements RequestMarshaller
{
    /**
     * @var FacepayProxyBindFirstCardRequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new FacepayProxyBindFirstCardRequestMarshaller();
    }

    /**
     * @return FacepayProxyBindFirstCardRequestMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @var string
     */
    private $serviceName = 'Facepay';

    /**
     * @var string
     */
    private $httpMethod = 'POST';

    /**
     * @var string
     */
    private $resourcePath = '/rest/v1.0/facepay/facepay-proxy/bind-first-card';

    /**
     * @var string
     */
    private $contentType = 'application/x-www-form-urlencoded';


    /**
     * @param FacepayProxyBindFirstCardRequest $request
     * @return Request
     */
    public function marshal($request)
    {
        $internalRequest = new DefaultRequest($this->serviceName);
        $internalRequest->setResourcePath($this->resourcePath);
        $internalRequest->setHttpMethod($this->httpMethod);
        if (!empty($request->getRequestConfig()) && !empty($request->getRequestConfig()->getCustomRequestHeaders())) {
            foreach ($request->getRequestConfig()->getCustomRequestHeaders() as $name => $value) {
                $internalRequest->addHeader($name, $value);
            }
        }
        if (!isset($internalRequest->getHeaders()[Headers::YOP_REQUEST_ID])) {
            $internalRequest->addHeader(Headers::YOP_REQUEST_ID, UUIDUtils::uuid());
        }
        if($request->getBankCardNo() != null){
            $internalRequest->addParameter('bankCardNo', ObjectSerializer::sanitizeForSerialization($request->getBankCardNo(), 'string'));
        }
        if($request->getPhoneNumber() != null){
            $internalRequest->addParameter('phoneNumber', ObjectSerializer::sanitizeForSerialization($request->getPhoneNumber(), 'string'));
        }
        if($request->getCvv2() != null){
            $internalRequest->addParameter('cvv2', ObjectSerializer::sanitizeForSerialization($request->getCvv2(), 'string'));
        }
        if($request->getExpireDate() != null){
            $internalRequest->addParameter('expireDate', ObjectSerializer::sanitizeForSerialization($request->getExpireDate(), 'string'));
        }
        if($request->getBizNo() != null){
            $internalRequest->addParameter('bizNo', ObjectSerializer::sanitizeForSerialization($request->getBizNo(), 'string'));
        }
        if($request->getBizToken() != null){
            $internalRequest->addParameter('bizToken', ObjectSerializer::sanitizeForSerialization($request->getBizToken(), 'string'));
        }
        if($request->getBizSystem() != null){
            $internalRequest->addParameter('bizSystem', ObjectSerializer::sanitizeForSerialization($request->getBizSystem(), 'string'));
        }
        if($request->getMtToken() != null){
            $internalRequest->addParameter('mtToken', ObjectSerializer::sanitizeForSerialization($request->getMtToken(), 'string'));
        }
        if($request->getMemberNo() != null){
            $internalRequest->addParameter('memberNo', ObjectSerializer::sanitizeForSerialization($request->getMemberNo(), 'string'));
        }
        $internalRequest->addHeader(Headers::CONTENT_TYPE, $this->contentType);

        return $internalRequest;
    }
}
FacepayProxyBindFirstCardRequestMarshaller::__init();
