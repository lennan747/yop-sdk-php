<?php


namespace Yeepay\Yop\Sdk\Service\Mer\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class BankAccountOpenResponse extends BaseResponse
{
    /**
     * @var BankAccountOpenOpenAccountRespDtoResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Mer\Model\BankAccountOpenOpenAccountRespDtoResult';
    }

    /**
     * @param BankAccountOpenOpenAccountRespDtoResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return BankAccountOpenOpenAccountRespDtoResult
     */
    function getResult()
    {
        return $this->result;
    }
}
