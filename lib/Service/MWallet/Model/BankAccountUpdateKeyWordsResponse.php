<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class BankAccountUpdateKeyWordsResponse extends BaseResponse
{
    /**
     * @var BankAccountUpdateKeyWordsBankKeyWordsResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\MWallet\Model\BankAccountUpdateKeyWordsBankKeyWordsResponseDTOResult';
    }

    /**
     * @param BankAccountUpdateKeyWordsBankKeyWordsResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return BankAccountUpdateKeyWordsBankKeyWordsResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
