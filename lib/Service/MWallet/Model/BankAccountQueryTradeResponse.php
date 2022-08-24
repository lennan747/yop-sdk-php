<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class BankAccountQueryTradeResponse extends BaseResponse
{
    /**
     * @var BankAccountQueryTradeQueryBankAccountTradeRespDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\MWallet\Model\BankAccountQueryTradeQueryBankAccountTradeRespDTOResult';
    }

    /**
     * @param BankAccountQueryTradeQueryBankAccountTradeRespDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return BankAccountQueryTradeQueryBankAccountTradeRespDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
