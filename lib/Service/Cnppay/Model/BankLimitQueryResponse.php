<?php


namespace Yeepay\Yop\Sdk\Service\Cnppay\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class BankLimitQueryResponse extends BaseResponse
{
    /**
     * @var BankLimitQueryBankLimitResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Cnppay\Model\BankLimitQueryBankLimitResponseDTOResult';
    }

    /**
     * @param BankLimitQueryBankLimitResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return BankLimitQueryBankLimitResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
