<?php


namespace Yeepay\Yop\Sdk\Service\Mer\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class ProductFeeQueryV2Response extends BaseResponse
{
    /**
     * @var ProductFeeQueryV2QueryProductFeeRespDtoResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Mer\Model\ProductFeeQueryV2QueryProductFeeRespDtoResult';
    }

    /**
     * @param ProductFeeQueryV2QueryProductFeeRespDtoResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return ProductFeeQueryV2QueryProductFeeRespDtoResult
     */
    function getResult()
    {
        return $this->result;
    }
}
