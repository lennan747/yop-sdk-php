<?php


namespace Yeepay\Yop\Sdk\Service\Std\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class BillFundbillEndbalanceApplyResponse extends BaseResponse
{
    /**
     * @var BillFundbillEndbalanceApplyManualGenerationEndBalanceResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Std\Model\BillFundbillEndbalanceApplyManualGenerationEndBalanceResponseDTOResult';
    }

    /**
     * @param BillFundbillEndbalanceApplyManualGenerationEndBalanceResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return BillFundbillEndbalanceApplyManualGenerationEndBalanceResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
