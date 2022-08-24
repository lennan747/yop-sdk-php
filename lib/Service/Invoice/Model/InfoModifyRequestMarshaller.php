<?php


namespace Yeepay\Yop\Sdk\Service\Invoice\Model;


use Yeepay\Yop\Sdk\Http\Headers;
use Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Yeepay\Yop\Sdk\Internal\Request;
use Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Yeepay\Yop\Sdk\Utils\UUIDUtils;

class InfoModifyRequestMarshaller implements RequestMarshaller
{
    /**
     * @var InfoModifyRequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new InfoModifyRequestMarshaller();
    }

    /**
     * @return InfoModifyRequestMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @var string
     */
    private $serviceName = 'Invoice';

    /**
     * @var string
     */
    private $httpMethod = 'POST';

    /**
     * @var string
     */
    private $resourcePath = '/rest/v1.0/invoice/info/modify';

    /**
     * @var string
     */
    private $contentType = 'application/x-www-form-urlencoded';


    /**
     * @param InfoModifyRequest $request
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
        if($request->getCustomerRequestNo() != null){
            $internalRequest->addParameter('customerRequestNo', ObjectSerializer::sanitizeForSerialization($request->getCustomerRequestNo(), 'string'));
        }
        if($request->getParentMerchantNo() != null){
            $internalRequest->addParameter('parentMerchantNo', ObjectSerializer::sanitizeForSerialization($request->getParentMerchantNo(), 'string'));
        }
        if($request->getMode() != null){
            $internalRequest->addParameter('mode', ObjectSerializer::sanitizeForSerialization($request->getMode(), 'string'));
        }
        if($request->getInvoiceType() != null){
            $internalRequest->addParameter('invoiceType', ObjectSerializer::sanitizeForSerialization($request->getInvoiceType(), 'string'));
        }
        if($request->getInvoiceForm() != null){
            $internalRequest->addParameter('invoiceForm', ObjectSerializer::sanitizeForSerialization($request->getInvoiceForm(), 'string'));
        }
        if($request->getLinkman() != null){
            $internalRequest->addParameter('linkman', ObjectSerializer::sanitizeForSerialization($request->getLinkman(), 'string'));
        }
        if($request->getLinkmanPhone() != null){
            $internalRequest->addParameter('linkmanPhone', ObjectSerializer::sanitizeForSerialization($request->getLinkmanPhone(), 'string'));
        }
        if($request->getPostalAddress() != null){
            $internalRequest->addParameter('postalAddress', ObjectSerializer::sanitizeForSerialization($request->getPostalAddress(), 'string'));
        }
        if($request->getPostalCode() != null){
            $internalRequest->addParameter('postalCode', ObjectSerializer::sanitizeForSerialization($request->getPostalCode(), 'string'));
        }
        if($request->getTaxpayerId() != null){
            $internalRequest->addParameter('taxpayerId', ObjectSerializer::sanitizeForSerialization($request->getTaxpayerId(), 'string'));
        }
        if($request->getInvoicePhone() != null){
            $internalRequest->addParameter('invoicePhone', ObjectSerializer::sanitizeForSerialization($request->getInvoicePhone(), 'string'));
        }
        if($request->getInvoiceAddress() != null){
            $internalRequest->addParameter('invoiceAddress', ObjectSerializer::sanitizeForSerialization($request->getInvoiceAddress(), 'string'));
        }
        if($request->getBankName() != null){
            $internalRequest->addParameter('bankName', ObjectSerializer::sanitizeForSerialization($request->getBankName(), 'string'));
        }
        if($request->getAccountNo() != null){
            $internalRequest->addParameter('accountNo', ObjectSerializer::sanitizeForSerialization($request->getAccountNo(), 'string'));
        }
        if($request->getEmail() != null){
            $internalRequest->addParameter('email', ObjectSerializer::sanitizeForSerialization($request->getEmail(), 'string'));
        }
        if($request->getRemark() != null){
            $internalRequest->addParameter('remark', ObjectSerializer::sanitizeForSerialization($request->getRemark(), 'string'));
        }
        if($request->getStandardType() != null){
            $internalRequest->addParameter('standardType', ObjectSerializer::sanitizeForSerialization($request->getStandardType(), 'string'));
        }
        if($request->getUnit() != null){
            $internalRequest->addParameter('unit', ObjectSerializer::sanitizeForSerialization($request->getUnit(), 'string'));
        }
        if($request->getQuantity() != null){
            $internalRequest->addParameter('quantity', ObjectSerializer::sanitizeForSerialization($request->getQuantity(), 'int', 'int32'));
        }
        $internalRequest->addHeader(Headers::CONTENT_TYPE, $this->contentType);

        return $internalRequest;
    }
}
InfoModifyRequestMarshaller::__init();
