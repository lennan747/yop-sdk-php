<?php


namespace Yeepay\Yop\Sdk\Service\Pos\Model;


use Yeepay\Yop\Sdk\Http\Headers;
use Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Yeepay\Yop\Sdk\Internal\Request;
use Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Yeepay\Yop\Sdk\Utils\UUIDUtils;

class GetPosInfoDtosRequestMarshaller implements RequestMarshaller
{
    /**
     * @var GetPosInfoDtosRequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new GetPosInfoDtosRequestMarshaller();
    }

    /**
     * @return GetPosInfoDtosRequestMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @var string
     */
    private $serviceName = 'Pos';

    /**
     * @var string
     */
    private $httpMethod = 'POST';

    /**
     * @var string
     */
    private $resourcePath = '/rest/v1.0/pos/get-pos-info-dtos';

    /**
     * @var string
     */
    private $contentType = 'application/x-www-form-urlencoded';


    /**
     * @param GetPosInfoDtosRequest $request
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
        if($request->getCustomerNumber() != null){
            $internalRequest->addParameter('customerNumber', ObjectSerializer::sanitizeForSerialization($request->getCustomerNumber(), 'string'));
        }
        if($request->getPosCati() != null){
            $internalRequest->addParameter('posCati', ObjectSerializer::sanitizeForSerialization($request->getPosCati(), 'string'));
        }
        if($request->getSerialNumber() != null){
            $internalRequest->addParameter('serialNumber', ObjectSerializer::sanitizeForSerialization($request->getSerialNumber(), 'string'));
        }
        if($request->getShopName() != null){
            $internalRequest->addParameter('shopName', ObjectSerializer::sanitizeForSerialization($request->getShopName(), 'string'));
        }
        $internalRequest->addHeader(Headers::CONTENT_TYPE, $this->contentType);

        return $internalRequest;
    }
}
GetPosInfoDtosRequestMarshaller::__init();
