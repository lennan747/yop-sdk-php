<?php


namespace Yeepay\Yop\Sdk\Service\Promtion\Model;


use Yeepay\Yop\Sdk\Http\Headers;
use Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Yeepay\Yop\Sdk\Internal\Request;
use Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Yeepay\Yop\Sdk\Utils\UUIDUtils;

class SubsidyApplyRequestMarshaller implements RequestMarshaller
{
    /**
     * @var SubsidyApplyRequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new SubsidyApplyRequestMarshaller();
    }

    /**
     * @return SubsidyApplyRequestMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @var string
     */
    private $serviceName = 'Promtion';

    /**
     * @var string
     */
    private $httpMethod = 'POST';

    /**
     * @var string
     */
    private $resourcePath = '/rest/v1.0/promtion/subsidy/apply';

    /**
     * @var string
     */
    private $contentType = 'application/x-www-form-urlencoded';


    /**
     * @param SubsidyApplyRequest $request
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
        if($request->getOrderId() != null){
            $internalRequest->addParameter('orderId', ObjectSerializer::sanitizeForSerialization($request->getOrderId(), 'string'));
        }
        if($request->getUniqueOrderNo() != null){
            $internalRequest->addParameter('uniqueOrderNo', ObjectSerializer::sanitizeForSerialization($request->getUniqueOrderNo(), 'string'));
        }
        if($request->getSubsidyRequestId() != null){
            $internalRequest->addParameter('subsidyRequestId', ObjectSerializer::sanitizeForSerialization($request->getSubsidyRequestId(), 'string'));
        }
        if($request->getSubsidyAmount() != null){
            $internalRequest->addParameter('subsidyAmount', ObjectSerializer::sanitizeForSerialization($request->getSubsidyAmount(), 'string'));
        }
        if($request->getAssumeMerchantNo() != null){
            $internalRequest->addParameter('assumeMerchantNo', ObjectSerializer::sanitizeForSerialization($request->getAssumeMerchantNo(), 'string'));
        }
        if($request->getMemo() != null){
            $internalRequest->addParameter('memo', ObjectSerializer::sanitizeForSerialization($request->getMemo(), 'string'));
        }
        if($request->getParentMerchantNo() != null){
            $internalRequest->addParameter('parentMerchantNo', ObjectSerializer::sanitizeForSerialization($request->getParentMerchantNo(), 'string'));
        }
        if($request->getMerchantNo() != null){
            $internalRequest->addParameter('merchantNo', ObjectSerializer::sanitizeForSerialization($request->getMerchantNo(), 'string'));
        }
        $internalRequest->addHeader(Headers::CONTENT_TYPE, $this->contentType);

        return $internalRequest;
    }
}
SubsidyApplyRequestMarshaller::__init();
