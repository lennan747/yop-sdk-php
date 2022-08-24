<?php


namespace Yeepay\Yop\Sdk\Service\Recharge\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class BankAccountQueryResponse extends BaseResponse
{
    /**
     * @var BankAccountQueryQueryBankAccountRespDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Recharge\Model\BankAccountQueryQueryBankAccountRespDTOResult';
    }

    /**
     * @param BankAccountQueryQueryBankAccountRespDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return BankAccountQueryQueryBankAccountRespDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
