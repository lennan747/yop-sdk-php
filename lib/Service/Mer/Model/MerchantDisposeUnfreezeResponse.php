<?php


namespace Yeepay\Yop\Sdk\Service\Mer\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class MerchantDisposeUnfreezeResponse extends BaseResponse
{
    /**
     * @var MerchantDisposeUnfreezeMerchantDisposeRespDtoResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Mer\Model\MerchantDisposeUnfreezeMerchantDisposeRespDtoResult';
    }

    /**
     * @param MerchantDisposeUnfreezeMerchantDisposeRespDtoResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return MerchantDisposeUnfreezeMerchantDisposeRespDtoResult
     */
    function getResult()
    {
        return $this->result;
    }
}
