<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class PayCancelResponse extends BaseResponse
{
    /**
     * @var PayCancelRemitCancelRespDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\PayCancelRemitCancelRespDTOResult';
    }

    /**
     * @param PayCancelRemitCancelRespDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return PayCancelRemitCancelRespDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
