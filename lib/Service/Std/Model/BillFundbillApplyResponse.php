<?php


namespace Yeepay\Yop\Sdk\Service\Std\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class BillFundbillApplyResponse extends BaseResponse
{
    /**
     * @var BillFundbillApplyManualGenerationResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Std\Model\BillFundbillApplyManualGenerationResponseDTOResult';
    }

    /**
     * @param BillFundbillApplyManualGenerationResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return BillFundbillApplyManualGenerationResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
