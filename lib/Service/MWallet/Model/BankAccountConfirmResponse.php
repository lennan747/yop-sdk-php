<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class BankAccountConfirmResponse extends BaseResponse
{
    /**
     * @var BankAccountConfirmConfirmBankAccountResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\MWallet\Model\BankAccountConfirmConfirmBankAccountResponseDTOResult';
    }

    /**
     * @param BankAccountConfirmConfirmBankAccountResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return BankAccountConfirmConfirmBankAccountResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
