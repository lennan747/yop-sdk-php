<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class BankAccountWithdrawResponse extends BaseResponse
{
    /**
     * @var BankAccountWithdrawBankAccountWithDrawRespDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\MWallet\Model\BankAccountWithdrawBankAccountWithDrawRespDTOResult';
    }

    /**
     * @param BankAccountWithdrawBankAccountWithDrawRespDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return BankAccountWithdrawBankAccountWithDrawRespDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
