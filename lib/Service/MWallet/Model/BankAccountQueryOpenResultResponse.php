<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class BankAccountQueryOpenResultResponse extends BaseResponse
{
    /**
     * @var BankAccountQueryOpenResultQueryOpenResultResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\MWallet\Model\BankAccountQueryOpenResultQueryOpenResultResponseDTOResult';
    }

    /**
     * @param BankAccountQueryOpenResultQueryOpenResultResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return BankAccountQueryOpenResultQueryOpenResultResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
