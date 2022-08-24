<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


use Yeepay\Yop\Sdk\Http\Headers;
use Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Yeepay\Yop\Sdk\Internal\Request;
use Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Yeepay\Yop\Sdk\Utils\UUIDUtils;

class AccountBookRefundRequestMarshaller implements RequestMarshaller
{
    /**
     * @var AccountBookRefundRequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new AccountBookRefundRequestMarshaller();
    }

    /**
     * @return AccountBookRefundRequestMarshaller
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
    private $resourcePath = '/rest/v1.0/account/account-book/refund';

    /**
     * @var string
     */
    private $contentType = 'application/x-www-form-urlencoded';


    /**
     * @param AccountBookRefundRequest $request
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
        if($request->getParentMerchantNo() != null){
            $internalRequest->addParameter('parentMerchantNo', ObjectSerializer::sanitizeForSerialization($request->getParentMerchantNo(), 'string'));
        }
        if($request->getMerchantRefundRequestNo() != null){
            $internalRequest->addParameter('merchantRefundRequestNo', ObjectSerializer::sanitizeForSerialization($request->getMerchantRefundRequestNo(), 'string'));
        }
        if($request->getOriginalOrderNo() != null){
            $internalRequest->addParameter('originalOrderNo', ObjectSerializer::sanitizeForSerialization($request->getOriginalOrderNo(), 'string'));
        }
        if($request->getRefundAmount() != null){
            $internalRequest->addParameter('refundAmount', ObjectSerializer::sanitizeForSerialization($request->getRefundAmount(), 'float'));
        }
        if($request->getBankPostscrip() != null){
            $internalRequest->addParameter('bankPostscrip', ObjectSerializer::sanitizeForSerialization($request->getBankPostscrip(), 'string'));
        }
        if($request->getNotifyUrl() != null){
            $internalRequest->addParameter('notifyUrl', ObjectSerializer::sanitizeForSerialization($request->getNotifyUrl(), 'string'));
        }
        $internalRequest->addHeader(Headers::CONTENT_TYPE, $this->contentType);

        return $internalRequest;
    }
}
AccountBookRefundRequestMarshaller::__init();
