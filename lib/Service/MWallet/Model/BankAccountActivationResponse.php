<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class BankAccountActivationResponse extends BaseResponse
{
    /**
     * @var BankAccountActivationBankAccountActivationRespDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\MWallet\Model\BankAccountActivationBankAccountActivationRespDTOResult';
    }

    /**
     * @param BankAccountActivationBankAccountActivationRespDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return BankAccountActivationBankAccountActivationRespDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
