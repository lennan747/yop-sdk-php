<?php


namespace Yeepay\Yop\Sdk\Service\Trade\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class RefundEndResponse extends BaseResponse
{
    /**
     * @var RefundEndYopEndRefundResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Trade\Model\RefundEndYopEndRefundResponseDTOResult';
    }

    /**
     * @param RefundEndYopEndRefundResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return RefundEndYopEndRefundResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
