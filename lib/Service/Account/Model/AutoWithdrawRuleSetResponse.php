<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class AutoWithdrawRuleSetResponse extends BaseResponse
{
    /**
     * @var AutoWithdrawRuleSetYopAutoWithdrawRuleSetResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\AutoWithdrawRuleSetYopAutoWithdrawRuleSetResponseDTOResult';
    }

    /**
     * @param AutoWithdrawRuleSetYopAutoWithdrawRuleSetResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return AutoWithdrawRuleSetYopAutoWithdrawRuleSetResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
