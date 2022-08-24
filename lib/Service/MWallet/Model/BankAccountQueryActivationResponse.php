<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class BankAccountQueryActivationResponse extends BaseResponse
{
    /**
     * @var BankAccountQueryActivationQueryBankAccountActivationRespDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\MWallet\Model\BankAccountQueryActivationQueryBankAccountActivationRespDTOResult';
    }

    /**
     * @param BankAccountQueryActivationQueryBankAccountActivationRespDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return BankAccountQueryActivationQueryBankAccountActivationRespDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
