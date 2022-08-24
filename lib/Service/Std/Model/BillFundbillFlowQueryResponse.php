<?php


namespace Yeepay\Yop\Sdk\Service\Std\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class BillFundbillFlowQueryResponse extends BaseResponse
{
    /**
     * @var BillFundbillFlowQueryYopQueryFundBillFlowResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Std\Model\BillFundbillFlowQueryYopQueryFundBillFlowResponseDTOResult';
    }

    /**
     * @param BillFundbillFlowQueryYopQueryFundBillFlowResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return BillFundbillFlowQueryYopQueryFundBillFlowResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
