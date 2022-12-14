<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


use Yeepay\Yop\Sdk\Http\Headers;
use Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Yeepay\Yop\Sdk\Internal\Request;
use Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Yeepay\Yop\Sdk\Utils\UUIDUtils;

class ReceiptGatherRequestMarshaller implements RequestMarshaller
{
    /**
     * @var ReceiptGatherRequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new ReceiptGatherRequestMarshaller();
    }

    /**
     * @return ReceiptGatherRequestMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @var string
     */
    private $serviceName = 'Account';

    /**
     * @var string
     */
    private $httpMethod = 'POST';

    /**
     * @var string
     */
    private $resourcePath = '/rest/v1.0/account/receipt/gather';

    /**
     * @var string
     */
    private $contentType = 'application/x-www-form-urlencoded';


    /**
     * @param ReceiptGatherRequest $request
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
        if($request->getMerchantNo() != null){
            $internalRequest->addParameter('merchantNo', ObjectSerializer::sanitizeForSerialization($request->getMerchantNo(), 'string'));
        }
        if($request->getRemark() != null){
            $internalRequest->addParameter('remark', ObjectSerializer::sanitizeForSerialization($request->getRemark(), 'string'));
        }
        if($request->getCounterpartyNo() != null){
            $internalRequest->addParameter('counterpartyNo', ObjectSerializer::sanitizeForSerialization($request->getCounterpartyNo(), 'string'));
        }
        if($request->getOrderNos() != null){
            $internalRequest->addParameter('orderNos', ObjectSerializer::sanitizeForSerialization($request->getOrderNos(), 'string'));
        }
        if($request->getBizDate() != null){
            $internalRequest->addParameter('bizDate', ObjectSerializer::sanitizeForSerialization($request->getBizDate(), 'string'));
        }
        $internalRequest->addHeader(Headers::CONTENT_TYPE, $this->contentType);

        return $internalRequest;
    }
}
ReceiptGatherRequestMarshaller::__init();
