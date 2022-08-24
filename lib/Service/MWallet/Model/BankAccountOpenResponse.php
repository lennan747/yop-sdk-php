<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class BankAccountOpenResponse extends BaseResponse
{
    /**
     * @var BankAccountOpenBankAccountResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\MWallet\Model\BankAccountOpenBankAccountResponseDTOResult';
    }

    /**
     * @param BankAccountOpenBankAccountResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return BankAccountOpenBankAccountResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
