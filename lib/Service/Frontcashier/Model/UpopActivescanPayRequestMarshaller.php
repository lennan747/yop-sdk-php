<?php


namespace Yeepay\Yop\Sdk\Service\Frontcashier\Model;


use Yeepay\Yop\Sdk\Http\Headers;
use Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Yeepay\Yop\Sdk\Internal\Request;
use Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Yeepay\Yop\Sdk\Utils\UUIDUtils;

class UpopActivescanPayRequestMarshaller implements RequestMarshaller
{
    /**
     * @var UpopActivescanPayRequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new UpopActivescanPayRequestMarshaller();
    }

    /**
     * @return UpopActivescanPayRequestMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @var string
     */
    private $serviceName = 'Frontcashier';

    /**
     * @var string
     */
    private $httpMethod = 'POST';

    /**
     * @var string
     */
    private $resourcePath = '/rest/v1.0/frontcashier/upop/activescan/pay';

    /**
     * @var string
     */
    private $contentType = 'application/x-www-form-urlencoded';


    /**
     * @param UpopActivescanPayRequest $request
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
        if($request->getMerchantFlowId() != null){
            $internalRequest->addParameter('merchantFlowId', ObjectSerializer::sanitizeForSerialization($request->getMerchantFlowId(), 'string'));
        }
        if($request->getPaySerialNo() != null){
            $internalRequest->addParameter('paySerialNo', ObjectSerializer::sanitizeForSerialization($request->getPaySerialNo(), 'string'));
        }
        if($request->getCouponSerialNo() != null){
            $internalRequest->addParameter('couponSerialNo', ObjectSerializer::sanitizeForSerialization($request->getCouponSerialNo(), 'string'));
        }
        if($request->getTradeAmount() != null){
            $internalRequest->addParameter('tradeAmount', ObjectSerializer::sanitizeForSerialization($request->getTradeAmount(), 'float'));
        }
        if($request->getBindId() != null){
            $internalRequest->addParameter('bindId', ObjectSerializer::sanitizeForSerialization($request->getBindId(), 'int', 'int64'));
        }
        if($request->getUserNo() != null){
            $internalRequest->addParameter('userNo', ObjectSerializer::sanitizeForSerialization($request->getUserNo(), 'string'));
        }
        if($request->getUserType() != null){
            $internalRequest->addParameter('userType', ObjectSerializer::sanitizeForSerialization($request->getUserType(), 'string'));
        }
        if($request->getCallBackUrl() != null){
            $internalRequest->addParameter('callBackUrl', ObjectSerializer::sanitizeForSerialization($request->getCallBackUrl(), 'string'));
        }
        if($request->getPayComments() != null){
            $internalRequest->addParameter('payComments', ObjectSerializer::sanitizeForSerialization($request->getPayComments(), 'string'));
        }
        if($request->getDeviceID() != null){
            $internalRequest->addParameter('deviceID', ObjectSerializer::sanitizeForSerialization($request->getDeviceID(), 'string'));
        }
        if($request->getDeviceType() != null){
            $internalRequest->addParameter('deviceType', ObjectSerializer::sanitizeForSerialization($request->getDeviceType(), 'string'));
        }
        if($request->getAccountIDHash() != null){
            $internalRequest->addParameter('accountIDHash', ObjectSerializer::sanitizeForSerialization($request->getAccountIDHash(), 'string'));
        }
        if($request->getSourceIP() != null){
            $internalRequest->addParameter('sourceIP', ObjectSerializer::sanitizeForSerialization($request->getSourceIP(), 'string'));
        }
        if($request->getUsrRgstrDt() != null){
            $internalRequest->addParameter('usrRgstrDt', ObjectSerializer::sanitizeForSerialization($request->getUsrRgstrDt(), 'string', 'date'));
        }
        if($request->getAccountEmailLife() != null){
            $internalRequest->addParameter('accountEmailLife', ObjectSerializer::sanitizeForSerialization($request->getAccountEmailLife(), 'string'));
        }
        if($request->getDeviceLocation() != null){
            $internalRequest->addParameter('deviceLocation', ObjectSerializer::sanitizeForSerialization($request->getDeviceLocation(), 'string'));
        }
        if($request->getFullDeviceNumber() != null){
            $internalRequest->addParameter('fullDeviceNumber', ObjectSerializer::sanitizeForSerialization($request->getFullDeviceNumber(), 'string'));
        }
        if($request->getCaptureMethod() != null){
            $internalRequest->addParameter('captureMethod', ObjectSerializer::sanitizeForSerialization($request->getCaptureMethod(), 'string'));
        }
        if($request->getDeviceSimNumber() != null){
            $internalRequest->addParameter('deviceSimNumber', ObjectSerializer::sanitizeForSerialization($request->getDeviceSimNumber(), 'string'));
        }
        if($request->getDeviceName() != null){
            $internalRequest->addParameter('deviceName', ObjectSerializer::sanitizeForSerialization($request->getDeviceName(), 'string'));
        }
        $internalRequest->addHeader(Headers::CONTENT_TYPE, $this->contentType);

        return $internalRequest;
    }
}
UpopActivescanPayRequestMarshaller::__init();
