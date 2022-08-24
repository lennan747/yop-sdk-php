<?php


namespace Yeepay\Yop\Sdk\Service\Std\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class BillFundbillFlowSumResponse extends BaseResponse
{
    /**
     * @var BillFundbillFlowSumYopQueryFundBillSumResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Std\Model\BillFundbillFlowSumYopQueryFundBillSumResponseDTOResult';
    }

    /**
     * @param BillFundbillFlowSumYopQueryFundBillSumResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return BillFundbillFlowSumYopQueryFundBillSumResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
