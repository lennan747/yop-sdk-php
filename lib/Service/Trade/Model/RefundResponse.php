<?php


namespace Yeepay\Yop\Sdk\Service\Trade\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class RefundResponse extends BaseResponse
{
    /**
     * @var RefundResponseRefundDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Trade\Model\RefundResponseRefundDTOResult';
    }

    /**
     * @param RefundResponseRefundDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return RefundResponseRefundDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
