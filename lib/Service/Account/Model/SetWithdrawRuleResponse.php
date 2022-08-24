<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class SetWithdrawRuleResponse extends BaseResponse
{
    /**
     * @var SetWithdrawRuleWithdrawRuleRespDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\SetWithdrawRuleWithdrawRuleRespDTOResult';
    }

    /**
     * @param SetWithdrawRuleWithdrawRuleRespDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return SetWithdrawRuleWithdrawRuleRespDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
