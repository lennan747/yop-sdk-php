<?php


namespace Yeepay\Yop\Sdk\Service\Trade\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class OrderResponse extends BaseResponse
{
    /**
     * @var OrderYopCreateOrderV2ResDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Trade\Model\OrderYopCreateOrderV2ResDTOResult';
    }

    /**
     * @param OrderYopCreateOrderV2ResDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return OrderYopCreateOrderV2ResDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
