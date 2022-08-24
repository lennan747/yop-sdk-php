<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


use Yeepay\Yop\Sdk\Http\Headers;
use Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Yeepay\Yop\Sdk\Internal\Request;
use Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Yeepay\Yop\Sdk\Utils\UUIDUtils;

class BankAccountQueryTradeRequestMarshaller implements RequestMarshaller
{
    /**
     * @var BankAccountQueryTradeRequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BankAccountQueryTradeRequestMarshaller();
    }

    /**
     * @return BankAccountQueryTradeRequestMarshaller
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
    private $httpMethod = 'GET';

    /**
     * @var string
     */
    private $resourcePath = '/rest/v1.0/m-wallet/bank-account/query-trade';

    /**
     * @var string
     */
    private $contentType = 'application/x-www-form-urlencoded';


    /**
     * @param BankAccountQueryTradeRequest $request
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
        if($request->getAccountNo() != null){
            $internalRequest->addParameter('accountNo', ObjectSerializer::sanitizeForSerialization($request->getAccountNo(), 'string'));
        }
        if($request->getBeginDate() != null){
            $internalRequest->addParameter('beginDate', ObjectSerializer::sanitizeForSerialization($request->getBeginDate(), 'string'));
        }
        if($request->getEndDate() != null){
            $internalRequest->addParameter('endDate', ObjectSerializer::sanitizeForSerialization($request->getEndDate(), 'string'));
        }
        if($request->getParentMerchantNo() != null){
            $internalRequest->addParameter('parentMerchantNo', ObjectSerializer::sanitizeForSerialization($request->getParentMerchantNo(), 'string'));
        }
        if($request->getMerchantNo() != null){
            $internalRequest->addParameter('merchantNo', ObjectSerializer::sanitizeForSerialization($request->getMerchantNo(), 'string'));
        }
        if($request->getLoanFlag() != null){
            $internalRequest->addParameter('loanFlag', ObjectSerializer::sanitizeForSerialization($request->getLoanFlag(), 'string'));
        }
        if($request->getStartNum() != null){
            $internalRequest->addParameter('startNum', ObjectSerializer::sanitizeForSerialization($request->getStartNum(), 'int', 'int32'));
        }
        if($request->getQueryNum() != null){
            $internalRequest->addParameter('queryNum', ObjectSerializer::sanitizeForSerialization($request->getQueryNum(), 'int', 'int32'));
        }
        if($request->getQueryToken() != null){
            $internalRequest->addParameter('queryToken', ObjectSerializer::sanitizeForSerialization($request->getQueryToken(), 'string'));
        }
        if($request->getQueryTime() != null){
            $internalRequest->addParameter('queryTime', ObjectSerializer::sanitizeForSerialization($request->getQueryTime(), 'string'));
        }
        $internalRequest->addHeader(Headers::CONTENT_TYPE, $this->contentType);

        return $internalRequest;
    }
}
BankAccountQueryTradeRequestMarshaller::__init();
