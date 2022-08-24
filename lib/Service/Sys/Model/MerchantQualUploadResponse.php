<?php


namespace Yeepay\Yop\Sdk\Service\Sys\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class MerchantQualUploadResponse extends BaseResponse
{
    /**
     * @var MerchantQualUploadMerFileUploadRespDtoResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Sys\Model\MerchantQualUploadMerFileUploadRespDtoResult';
    }

    /**
     * @param MerchantQualUploadMerFileUploadRespDtoResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return MerchantQualUploadMerFileUploadRespDtoResult
     */
    function getResult()
    {
        return $this->result;
    }
}
