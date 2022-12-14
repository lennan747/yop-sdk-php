<?php


namespace Yeepay\Yop\Sdk\Service\Auth\Model;


use Yeepay\Yop\Sdk\Http\Headers;
use Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Yeepay\Yop\Sdk\Internal\Request;
use Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Yeepay\Yop\Sdk\Utils\UUIDUtils;

class OcrIdcardRequestMarshaller implements RequestMarshaller
{
    /**
     * @var OcrIdcardRequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new OcrIdcardRequestMarshaller();
    }

    /**
     * @return OcrIdcardRequestMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @var string
     */
    private $serviceName = 'Auth';

    /**
     * @var string
     */
    private $httpMethod = 'POST';

    /**
     * @var string
     */
    private $resourcePath = '/rest/v1.0/auth/ocr/idcard';

    /**
     * @var string
     */
    private $contentType = 'application/x-www-form-urlencoded';


    /**
     * @param OcrIdcardRequest $request
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
        if($request->getRequestNo() != null){
            $internalRequest->addParameter('requestNo', ObjectSerializer::sanitizeForSerialization($request->getRequestNo(), 'string'));
        }
        if($request->getParentMerchantNo() != null){
            $internalRequest->addParameter('parentMerchantNo', ObjectSerializer::sanitizeForSerialization($request->getParentMerchantNo(), 'string'));
        }
        if($request->getMerchantNo() != null){
            $internalRequest->addParameter('merchantNo', ObjectSerializer::sanitizeForSerialization($request->getMerchantNo(), 'string'));
        }
        if($request->getIdCardSide() != null){
            $internalRequest->addParameter('idCardSide', ObjectSerializer::sanitizeForSerialization($request->getIdCardSide(), 'string'));
        }
        if($request->getImageType() != null){
            $internalRequest->addParameter('imageType', ObjectSerializer::sanitizeForSerialization($request->getImageType(), 'string'));
        }
        if($request->getIdCardImage() != null){
            $internalRequest->addParameter('idCardImage', ObjectSerializer::sanitizeForSerialization($request->getIdCardImage(), 'string'));
        }
        if($request->getCardType() != null){
            $internalRequest->addParameter('cardType', ObjectSerializer::sanitizeForSerialization($request->getCardType(), 'string'));
        }
        $internalRequest->addHeader(Headers::CONTENT_TYPE, $this->contentType);

        return $internalRequest;
    }
}
OcrIdcardRequestMarshaller::__init();
