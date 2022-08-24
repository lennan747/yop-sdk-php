<?php


namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class PayLinkResponse extends BaseResponse
{
    /**
     * @var PayLinkOrderCodeResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Aggpay\Model\PayLinkOrderCodeResponseDTOResult';
    }

    /**
     * @param PayLinkOrderCodeResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return PayLinkOrderCodeResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
