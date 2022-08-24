<?php


namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;


use Yeepay\Yop\Sdk\Http\Headers;
use Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Yeepay\Yop\Sdk\Internal\Request;
use Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Yeepay\Yop\Sdk\Utils\UUIDUtils;

class ComplaintWechatListRequestMarshaller implements RequestMarshaller
{
    /**
     * @var ComplaintWechatListRequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new ComplaintWechatListRequestMarshaller();
    }

    /**
     * @return ComplaintWechatListRequestMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @var string
     */
    private $serviceName = 'Aggpay';

    /**
     * @var string
     */
    private $httpMethod = 'GET';

    /**
     * @var string
     */
    private $resourcePath = '/rest/v1.0/aggpay/complaint/wechat/list';

    /**
     * @var string
     */
    private $contentType = 'application/x-www-form-urlencoded';


    /**
     * @param ComplaintWechatListRequest $request
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
        if($request->getStartTime() != null){
            $internalRequest->addParameter('startTime', ObjectSerializer::sanitizeForSerialization($request->getStartTime(), 'string'));
        }
        if($request->getEndTime() != null){
            $internalRequest->addParameter('endTime', ObjectSerializer::sanitizeForSerialization($request->getEndTime(), 'string'));
        }
        if($request->getMerchantOrderNo() != null){
            $internalRequest->addParameter('merchantOrderNo', ObjectSerializer::sanitizeForSerialization($request->getMerchantOrderNo(), 'string'));
        }
        if($request->getWechatOrderNo() != null){
            $internalRequest->addParameter('wechatOrderNo', ObjectSerializer::sanitizeForSerialization($request->getWechatOrderNo(), 'string'));
        }
        if($request->getMerchantNo() != null){
            $internalRequest->addParameter('merchantNo', ObjectSerializer::sanitizeForSerialization($request->getMerchantNo(), 'string'));
        }
        if($request->getPage() != null){
            $internalRequest->addParameter('page', ObjectSerializer::sanitizeForSerialization($request->getPage(), 'int', 'int32'));
        }
        if($request->getLimit() != null){
            $internalRequest->addParameter('limit', ObjectSerializer::sanitizeForSerialization($request->getLimit(), 'int', 'int32'));
        }
        $internalRequest->addHeader(Headers::CONTENT_TYPE, $this->contentType);

        return $internalRequest;
    }
}
ComplaintWechatListRequestMarshaller::__init();
