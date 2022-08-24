<?php


namespace Yeepay\Yop\Sdk\Service\Mer\Model;


use Yeepay\Yop\Sdk\Http\Headers;
use Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Yeepay\Yop\Sdk\Internal\Request;
use Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Yeepay\Yop\Sdk\Utils\UUIDUtils;

class BankAccountOpenRequestMarshaller implements RequestMarshaller
{
    /**
     * @var BankAccountOpenRequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BankAccountOpenRequestMarshaller();
    }

    /**
     * @return BankAccountOpenRequestMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @var string
     */
    private $serviceName = 'Mer';

    /**
     * @var string
     */
    private $httpMethod = 'POST';

    /**
     * @var string
     */
    private $resourcePath = '/rest/v1.0/mer/bank-account/open';

    /**
     * @var string
     */
    private $contentType = 'application/x-www-form-urlencoded';


    /**
     * @param BankAccountOpenRequest $request
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
        if($request->getParentMerchantNo() != null){
            $internalRequest->addParameter('parentMerchantNo', ObjectSerializer::sanitizeForSerialization($request->getParentMerchantNo(), 'string'));
        }
        if($request->getMerchantNo() != null){
            $internalRequest->addParameter('merchantNo', ObjectSerializer::sanitizeForSerialization($request->getMerchantNo(), 'string'));
        }
        if($request->getBusinessPlacePhoto() != null){
            $internalRequest->addParameter('businessPlacePhoto', ObjectSerializer::sanitizeForSerialization($request->getBusinessPlacePhoto(), 'string'));
        }
        if($request->getNotifyUrl() != null){
            $internalRequest->addParameter('notifyUrl', ObjectSerializer::sanitizeForSerialization($request->getNotifyUrl(), 'string'));
        }
        if($request->getDeviceip() != null){
            $internalRequest->addParameter('deviceip', ObjectSerializer::sanitizeForSerialization($request->getDeviceip(), 'string'));
        }
        if($request->getToken() != null){
            $internalRequest->addParameter('token', ObjectSerializer::sanitizeForSerialization($request->getToken(), 'string'));
        }
        if($request->getMerchantSubjectInfo() != null){
            $internalRequest->addParameter('merchantSubjectInfo', ObjectSerializer::sanitizeForSerialization($request->getMerchantSubjectInfo(), 'string'));
        }
        if($request->getSettlementAccountInfo() != null){
            $internalRequest->addParameter('settlementAccountInfo', ObjectSerializer::sanitizeForSerialization($request->getSettlementAccountInfo(), 'string'));
        }
        if($request->getMerchantCorporationInfo() != null){
            $internalRequest->addParameter('merchantCorporationInfo', ObjectSerializer::sanitizeForSerialization($request->getMerchantCorporationInfo(), 'string'));
        }
        if($request->getMerchantContactInfo() != null){
            $internalRequest->addParameter('merchantContactInfo', ObjectSerializer::sanitizeForSerialization($request->getMerchantContactInfo(), 'string'));
        }
        if($request->getShareholdersInfo() != null){
            $internalRequest->addParameter('shareholdersInfo', ObjectSerializer::sanitizeForSerialization($request->getShareholdersInfo(), 'string'));
        }
        if($request->getBeneficiaryInfo() != null){
            $internalRequest->addParameter('beneficiaryInfo', ObjectSerializer::sanitizeForSerialization($request->getBeneficiaryInfo(), 'string'));
        }
        if($request->getRequestNo() != null){
            $internalRequest->addParameter('requestNo', ObjectSerializer::sanitizeForSerialization($request->getRequestNo(), 'string'));
        }
        $internalRequest->addHeader(Headers::CONTENT_TYPE, $this->contentType);

        return $internalRequest;
    }
}
BankAccountOpenRequestMarshaller::__init();
