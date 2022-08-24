<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class BankAccountQueryWithdrawResponse extends BaseResponse
{
    /**
     * @var BankAccountQueryWithdrawQueryBankAccountWithDrawRespDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\MWallet\Model\BankAccountQueryWithdrawQueryBankAccountWithDrawRespDTOResult';
    }

    /**
     * @param BankAccountQueryWithdrawQueryBankAccountWithDrawRespDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return BankAccountQueryWithdrawQueryBankAccountWithDrawRespDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
