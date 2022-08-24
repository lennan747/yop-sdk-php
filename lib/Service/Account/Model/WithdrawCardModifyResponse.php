<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class WithdrawCardModifyResponse extends BaseResponse
{
    /**
     * @var WithdrawCardModifyModifyBindCardRespDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\WithdrawCardModifyModifyBindCardRespDTOResult';
    }

    /**
     * @param WithdrawCardModifyModifyBindCardRespDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return WithdrawCardModifyModifyBindCardRespDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
