<?php


namespace Yeepay\Yop\Sdk\Service\Mer\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class ProductModifyQueryV2Response extends BaseResponse
{
    /**
     * @var ProductModifyQueryV2ProductModifyProgressQueryRespDtoResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Mer\Model\ProductModifyQueryV2ProductModifyProgressQueryRespDtoResult';
    }

    /**
     * @param ProductModifyQueryV2ProductModifyProgressQueryRespDtoResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return ProductModifyQueryV2ProductModifyProgressQueryRespDtoResult
     */
    function getResult()
    {
        return $this->result;
    }
}
