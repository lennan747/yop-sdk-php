<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class WithdrawSystemQueryResponse extends BaseResponse
{
    /**
     * @var WithdrawSystemQueryMGWithdrawOrderQueryRespDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\WithdrawSystemQueryMGWithdrawOrderQueryRespDTOResult';
    }

    /**
     * @param WithdrawSystemQueryMGWithdrawOrderQueryRespDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return WithdrawSystemQueryMGWithdrawOrderQueryRespDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
