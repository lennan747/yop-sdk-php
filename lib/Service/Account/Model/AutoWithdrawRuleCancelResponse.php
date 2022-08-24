<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class AutoWithdrawRuleCancelResponse extends BaseResponse
{
    /**
     * @var AutoWithdrawRuleCancelYopAutoWithdrawRuleCancelResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\AutoWithdrawRuleCancelYopAutoWithdrawRuleCancelResponseDTOResult';
    }

    /**
     * @param AutoWithdrawRuleCancelYopAutoWithdrawRuleCancelResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return AutoWithdrawRuleCancelYopAutoWithdrawRuleCancelResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
