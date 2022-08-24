<?php


namespace Yeepay\Yop\Sdk\Service\Std\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class BillFundbillBolSettleApplyResponse extends BaseResponse
{
    /**
     * @var BillFundbillBolSettleApplyManualGenerationLfBankSettleResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Std\Model\BillFundbillBolSettleApplyManualGenerationLfBankSettleResponseDTOResult';
    }

    /**
     * @param BillFundbillBolSettleApplyManualGenerationLfBankSettleResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return BillFundbillBolSettleApplyManualGenerationLfBankSettleResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
