<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class AutoWithdrawRuleQueryResponse extends BaseResponse
{
    /**
     * @var AutoWithdrawRuleQueryYopAutoWithdrawRuleQueryResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\AutoWithdrawRuleQueryYopAutoWithdrawRuleQueryResponseDTOResult';
    }

    /**
     * @param AutoWithdrawRuleQueryYopAutoWithdrawRuleQueryResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return AutoWithdrawRuleQueryYopAutoWithdrawRuleQueryResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
