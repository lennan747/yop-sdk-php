<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


use Yeepay\Yop\Sdk\Http\Headers;
use Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Yeepay\Yop\Sdk\Internal\Request;
use Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Yeepay\Yop\Sdk\Utils\UUIDUtils;

class BankAccountWithdrawRequestMarshaller implements RequestMarshaller
{
    /**
     * @var BankAccountWithdrawRequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BankAccountWithdrawRequestMarshaller();
    }

    /**
     * @return BankAccountWithdrawRequestMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @var string
     */
    private $serviceName = 'MWallet';

    /**
     * @var string
     */
    private $httpMethod = 'POST';

    /**
     * @var string
     */
    private $resourcePath = '/rest/v1.0/m-wallet/bank-account/withdraw';

    /**
     * @var string
     */
    private $contentType = 'application/x-www-form-urlencoded';


    /**
     * @param BankAccountWithdrawRequest $request
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
        if($request->getMerchantMemberNo() != null){
            $internalRequest->addParameter('merchantMemberNo', ObjectSerializer::sanitizeForSerialization($request->getMerchantMemberNo(), 'string'));
        }
        if($request->getRequestNo() != null){
            $internalRequest->addParameter('requestNo', ObjectSerializer::sanitizeForSerialization($request->getRequestNo(), 'string'));
        }
        if($request->getAccountNo() != null){
            $internalRequest->addParameter('accountNo', ObjectSerializer::sanitizeForSerialization($request->getAccountNo(), 'string'));
        }
        if($request->getAccountType() != null){
            $internalRequest->addParameter('accountType', ObjectSerializer::sanitizeForSerialization($request->getAccountType(), 'string'));
        }
        if($request->getOneAccountBankNo() != null){
            $internalRequest->addParameter('oneAccountBankNo', ObjectSerializer::sanitizeForSerialization($request->getOneAccountBankNo(), 'string'));
        }
        if($request->getBindBankPhone() != null){
            $internalRequest->addParameter('bindBankPhone', ObjectSerializer::sanitizeForSerialization($request->getBindBankPhone(), 'string'));
        }
        if($request->getWithdrawPrice() != null){
            $internalRequest->addParameter('withdrawPrice', ObjectSerializer::sanitizeForSerialization($request->getWithdrawPrice(), 'float'));
        }
        if($request->getRemark() != null){
            $internalRequest->addParameter('remark', ObjectSerializer::sanitizeForSerialization($request->getRemark(), 'string'));
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
BankAccountWithdrawRequestMarshaller::__init();
