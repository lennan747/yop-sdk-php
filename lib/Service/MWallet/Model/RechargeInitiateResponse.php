<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class RechargeInitiateResponse extends BaseResponse
{
    /**
     * @var RechargeInitiateRequestURLResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\MWallet\Model\RechargeInitiateRequestURLResponseDTOResult';
    }

    /**
     * @param RechargeInitiateRequestURLResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return RechargeInitiateRequestURLResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
