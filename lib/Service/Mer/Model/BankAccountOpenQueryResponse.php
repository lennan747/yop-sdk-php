<?php


namespace Yeepay\Yop\Sdk\Service\Mer\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class BankAccountOpenQueryResponse extends BaseResponse
{
    /**
     * @var BankAccountOpenQueryQueryOpenAccountResultRespDtoResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Mer\Model\BankAccountOpenQueryQueryOpenAccountResultRespDtoResult';
    }

    /**
     * @param BankAccountOpenQueryQueryOpenAccountResultRespDtoResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return BankAccountOpenQueryQueryOpenAccountResultRespDtoResult
     */
    function getResult()
    {
        return $this->result;
    }
}
