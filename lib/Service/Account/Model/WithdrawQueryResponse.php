<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class WithdrawQueryResponse extends BaseResponse
{
    /**
     * @var WithdrawQueryMGWithdrawOrderQueryRespDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\WithdrawQueryMGWithdrawOrderQueryRespDTOResult';
    }

    /**
     * @param WithdrawQueryMGWithdrawOrderQueryRespDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return WithdrawQueryMGWithdrawOrderQueryRespDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
