<?php


namespace Yeepay\Yop\Sdk\Service\Mer\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class MerchantWechatauthQueryResponse extends BaseResponse
{
    /**
     * @var MerchantWechatauthQueryQueryCertificateResultRespDtoResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Mer\Model\MerchantWechatauthQueryQueryCertificateResultRespDtoResult';
    }

    /**
     * @param MerchantWechatauthQueryQueryCertificateResultRespDtoResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return MerchantWechatauthQueryQueryCertificateResultRespDtoResult
     */
    function getResult()
    {
        return $this->result;
    }
}
