<?php


namespace Yeepay\Yop\Sdk\Service\Mer\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class MerchantInfoModifyResponse extends BaseResponse
{
    /**
     * @var MerchantInfoModifyMerchantInfoModifyRespDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Mer\Model\MerchantInfoModifyMerchantInfoModifyRespDTOResult';
    }

    /**
     * @param MerchantInfoModifyMerchantInfoModifyRespDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return MerchantInfoModifyMerchantInfoModifyRespDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
