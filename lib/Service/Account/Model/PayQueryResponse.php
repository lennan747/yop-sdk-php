<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class PayQueryResponse extends BaseResponse
{
    /**
     * @var PayQueryRemitOrderQueryRespDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\PayQueryRemitOrderQueryRespDTOResult';
    }

    /**
     * @param PayQueryRemitOrderQueryRespDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return PayQueryRemitOrderQueryRespDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
