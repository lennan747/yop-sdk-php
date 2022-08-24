<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class WithdrawInitiateResponse extends BaseResponse
{
    /**
     * @var WithdrawInitiateRequestURLResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\MWallet\Model\WithdrawInitiateRequestURLResponseDTOResult';
    }

    /**
     * @param WithdrawInitiateRequestURLResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return WithdrawInitiateRequestURLResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
