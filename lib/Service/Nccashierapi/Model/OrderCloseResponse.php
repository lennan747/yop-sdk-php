<?php


namespace Yeepay\Yop\Sdk\Service\Nccashierapi\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class OrderCloseResponse extends BaseResponse
{
    /**
     * @var OrderCloseCloseOrderResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Nccashierapi\Model\OrderCloseCloseOrderResponseDTOResult';
    }

    /**
     * @param OrderCloseCloseOrderResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return OrderCloseCloseOrderResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
